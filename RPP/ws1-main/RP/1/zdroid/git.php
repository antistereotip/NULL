<h3><a href='?q=git&id=osnove' class="blog">Osnove</a></h3>
<h3><a href='?q=git&id=razvoj' class="blog">Razvoj</a></h3>


<div class="blog">


<?php
$id = $_GET['id'];

if ($id == 'osnove') {
	echo '<h4>Osnove<br />======</h4>';
	echo '<p><b>Git</b> je distributed revision control i source code management (SCM) sistem sa naglaskom na brzini. Osmislio ga je i razvio Linus Torvalds prvenstveno za razvoj i održavanje Linux kernela. Danas se koristi za sve tipove slobodnog softvera. Objavljen je kao slobodan softver pod uslovima <b>GNU General Public License v2</b> (<b>GPL v2</b>).</p>

<p>Neki od programera Git-a su Linus Torvalds i Junio Hamano. Sve koji su doprineli razvoju Git-a možemo pronaći na <a href="https://github.com/git/git/graphs/contributors">github.com/git/git/graphs/contributors</a>. Sam Git je napisan u C-u, dok su neki od dodatnih delova napisani u Bourne Shell, Perl, JavaScript, Tcl i Python programskim jezicima.</p>

<p>Git je engleski sleng za glupu ili neprijatnu osobu. Torvalds je rekao: <em>„Ja sam samoljubiv gad i ja nazivam svoje projekte po sebi. Prvo Linux, sada Git“</em>. Na Manual stranicama Git-a piše da je Git glupi tragač sadržaja. Čak i u README-u zvaničnog Git repozitorijuma - <a href="https://github.com/git/git">github.com/git/git</a> piše <em>„GIT - the stupid content tracker“</em>.</p>

<p>Razvoj Git-a je počeo kada je mnogo programera Linux kernela odustalo od BitKeepera, zatvorenog, vlasničkog SCM-a koji je ranije korišćen za održavanje projekta.</p>

<p>Razvoj Git-a je počeo 3. aprila 2005. godine a projekat je zvanično najavljen 6. aprila. Hosting projekta je postao samostalan 7. aprila. Prvi veliki uspeh je bio spajanje više razvojnih grana koje je uspešno urađeno 18. aprila. Torvalds je ostvario svoje ciljeve - 29. aprila je testirano čuvanje zakrpa za Linux kernel tree u Git-u. Rezultat je bila stopa od 6,7 po sekundi. Prva verzija kernel-a koja je održavana na Git-u je <b>v2.6.12</b>. Njeno održavanje je počelo 16. juna.</p>

<h5>Društveni razvoj</h5>

<p>Zašto ne napraviti društvenu mrežu (na neki način) za Git? - pitali su se osnivači GitHub-a. Upravo zbog društvenog razvoja je nastao GitHub a za njim i BitBucket (on ima i Mercurial ali ćemo spomenuti samo Git deo). Osnovna ideja za društveni razvoj je komunikacija između programera i korisnika (u svim pravcima).</p>

<h6>GitHub</h6>

<p>Nastanak i ideja GitHub-a je objašnjenja u pasusu gore. Na GitHub stranicama je postavljena zvanična web stranica Git-a, <a href="http://git-scm.com">git-scm.com</a>.</p>

<p>Kako napraviti GitHub nalog? Prvo idemo na <a href="https://github.com">github.com</a>. Zatim nalazimo polje za registraciju kao na slici 1.</p>
<img src="media/git1-slika1.png" alt="Slika 1" />
<p><b>Slika 1</b></p>
<p>
* Korisničko ime koji odaberemo može sadržati samo slova engleskog alfabeta i brojeve. Naša (srpska) slova nisu dozvoljena.<br />
* Elektronska pošta (e-mail) nam treba radi verifikacije.<br />
* Lozinka mora imati najmanje 7 karaktera i sadržati bar jedan broj.</p>

<p>Nakon toga biramo Sign up for free. Nakon toga možemo odabrati i neki „paket“ koji se plaća ali zašto bismo? Paketi koji se plaćaju se uglavnom koriste za privatne repozitorijume.</p>

<p>Pri vrhu stranice, pored linka do našeg profila se nalazi dugme <img src="media/git1-slika2.png" width="25px" height="auto" alt="Slika 2" /> 
uz pomoć kojeg pravimo novi repozitorijum. Možemo napraviti repozitorijum odlaskom na 
<a href="https://github.com/new">github.com/new</a>. Sada podešavamo repozitorijum.</p>
<p>
* Polje Owner (vlasnik) ostavljamo isto (kasnije ćemo govoriti o timovima) - pretpostavićemo da je 
vlasnik naloga „korisnik“<br />
* Polje Repository name (ime repozitorijuma) „popunjavamo“ kratkim i zanimljivim nazivom 
(na primer „moj repozitorijum“)<br />
* Polje Description (opis) možemo ostaviti praznim, ipak, ako želimo, možemo ga popuniti<br />
* Uvek biramo Public repo<br />
* „Initialize this repository with a README“ čekirati<br />
* Add .gitignore - najbolje je da ostavimo None</p>
<p>Gotovo! Naš prvi repozitorijum je napravljen!</p>

<p>Kako funkcionišu linkovi na GitHub-u? Svaki korisnik ima svoj direktorijum. Dakle, 
<a href="https://github.com/korisnik">github.com/korisnik</a> će nas odvesti do profila određenog korisnika. Svaki repozitorijum je kao poddirektorijum. Na primer <a href="https://github.com/korisnik/repo">github.com/korisnik/repo</a>.</p>

<p>Git možemo probati na adresi <a href="http://try.github.com">try.github.com</a>.</p>

<p>Ukoliko imamo predlog/primedbu za GitHub, možemo kontaktirati zaposlene na <a href="https://github.com/c">github.com/c</a>. Odgovor će stići na našu elektronsku poštu.</p>

<h5>Shell pristup</h5>

<h6>SSH</h6>

<p>Ukoliko ne želimo da pristupamo preko HTTPS protokola, tu je SSH koji je dokazano sigurniji. 
Za SSH pristup Git-u nam je potreban SSH ključ. Ovaj tutorijal će nam pomoći oko pravljenja SSH ključeva → <a href="https://help.github.com/articles/generating-ssh-keys">help.github.com/articles/generating-ssh-keys</a>.</p>

<h6>Primer korišćenja</h6>

<pre><code>git clone ssh://git@github.com/korisnik/mojrepo.git<br />
cd mojrepo<br />
git log<br />
echo "Sadržaj datoteke" >novi.txt<br />
git add novi.txt<br />
git commit -m "Test commit"<br />
git push<br />
git pull</code></pre>';
}

else if ($id == 'razvoj') {
	echo '<h4>Razvoj<br />======</h4>';
	echo '<p>U predhodnom tekstu smo objasnili osnove Git-a i pokazali primer upotrebe. Sada ćemo govoriti o razvoju pomoću Git-a.</p>

<p>Prvi korak smo opisali u prošlom tekstu, potrebno je daljinski se povezati sa Git servisom u terminalu.</p>

<p>Pre bilo kakvog rada, potreban nam je mali Git rečnik i rečnik komandi da bismo znali kako da održavamo i dopunjavamo naše Git repozitorijume.</p>

<h5>Git rečnik</h5>
<p>
<b>repository</b> - direktorijum gde je Git inicijalizovan za pokretanje verzije<br /> kontrole naših datoteka; 
skraćeno se naziva repo<br />
<b>commit</b> - izmene u repo-u u određeno vreme koje je korisnik grupisao<br />
<b>.gitignore</b> - datoteka koja jednostavno služi za ignorisanje određenih datoteka<br />
<b>.git/</b> - skriven direktorijum unutar repo-a koji služi za čuvanje svih konfiguracionih datoteka i logova repo-a<br />
<b>hook</b> - servis sa skriptama za objavljivanje nekih važnih akcija u određenom repozitorijumu<br />
<b>remote</b> - repozitorijum koji prati jednu ili više razvojnih grana; njegovo ime je nebitno<br />
<b>origin</b> - podrazumevani remote<br />
</p>
<p><b>Napomena:</b> Ukoliko negde unosite ime direktorijuma, morate staviti kosu crtu (/) posle imena direktorijuma 
da bi ga Git prepoznao kao direktorijum i izbegao konflikte sa datotekama istog imena.</p>

<h5>Komande</h5>
<p>
<b>ssh -T git@sajt.tld</b> - koristi se za autentifikaciju putem SSH ključa koji ste prethodno dodali na nalog 
(sajt.tld bi trebalo zameniti sa domenom stranice, na primer <em>github.com</em>)<br />
<b>git --help</b> - prikazuje pomoć za Git<br />
<b>git --version</b> - prikazuje verziju Git-a<br />
<b>git init</b> - incijalizuje .git/ direktorijum trenutnog korisnika<br />
<b>git status</b> - pregleda datoteke koje su promenjene, obrisane i dodate u trenutnom direktorijumu i prikazuje 
njihovo stanje<br />
<b>git log</b> - prikazuje logove repozitorijuma od nastanka do trenutka izvršavanja komande<br />
<b>git add</b> - dodaje datoteku u sledeći commit<br />
<b>git add -u</b> - dodaje sve obrisane datoteke u sledeći commit<br />
<b>git clone</b> - klonira repo na lokalni disk<br />
<b>git branch</b> - dodaje novu razvojnu granu na lokalnom disku<br />
<b>git push</b> - objavljuje sve promene sačuvane u trenutnom commit-u<br />
</p>
<p>To je sve što nam je potrebno za prvi test Git-a.</p>

<h5>Prvi test</h5>

<p>Prelazimo na testiranje. Već smo napravili GitHub nalog, repozitorijum i naučili neke osnovne komande i pojmove.</p>

<p>Prvo moramo klonirati repozitorijum. Zamenimo „korisnik“ našim korisničkim imenom a „repo“ imenom repozitorijuma. Zbog učestalih padova HTTP(S) servera, za kloniranje repo-a je preporučen SSH pristup.</p>
<pre><code>git clone git@github:korisnik/repo</code></repo>

<p>Moramo promeniti direktorijum da bismo nastavili.</p>
<pre><code>cd repo</code></pre>

<p>Sada inicijalizujemo datoteke:</p>
<pre><code>git init</code></pre>

<p>Koristićemo komandu <b>touch</b> za pravljenje prve i obavezne datoteke - README datoteke. Najčešći formati za README su txt, Markdown i reStructured text. Dakle, unosimo komandu:</p>
<pre><code>touch README</code></pre>

<p>Sada je potrebno da unesemo sadržaj datoteke. To ćemo uraditi pomoću komande echo. Naravno, ovo se može uraditi i uz pomoć nekog text editor-a.</p>
<pre><code>echo "Git test" >README</code></pre>

<p>Sada dodajemo README u novi commit:</p>
<pre><code>git add README</code></pre>

<p>Možete proveriti status direktorijuma komandom:</p>
<pre><code>git status</code></pre>

<p>Zatim commit-ujemo:</p>
<pre><code>git commit -m "Prvi commit"</code></pre>

<p>Za kraj, objavljujemo trenutni commit:</p>
<pre><code>git push origin master</code></pre>'; 
}

else { echo '<h3>Git</h3><h4>The stupid content tracker</h4>'; echo '<marquee>Autor tekstova... ZDroid</marquee> ';}
?>


</div>
