<h2>{ Web, irc, file, stream } serveri!</h2>
<p>
Želimo da predstavimo par rešenja mapiranih http servera ... uz mogućnosti izmene portova, 
high-load, kao i izmenu čitave logike funkcionisanja i kombinovanja dva ili više servera, rad sa deljenim folderima, 
različite modele korenih direktorijuma i njihovu medjusobnu povezanost...
Ovi načini rada omogućuju i visoku fleksibilnost kao i rad sa čitavim sistemom kroz http, ftp...! 
Prednost ovakvih rešenja je u mapiranju konfiguracionih datoteka i bekapovanja istih, 
kao i samog sadržaja. Rešenja bi trebala biti skoro samoadministrirajuca jer se prilikom svakog paljenja računara 
oporavlja mapa, dozvole, ownership... (ukoliko je do toga nekim slučajem došlo) ... <br /> 
No dobro, da se vratimo na sadržaj članka:<br /> 
"Sastojci"<br /> 
Operativni sistem - Debian (Crunchbang, Debian Squeeze 6.0.5, 6.0.6) ili Debian based (Ubuntu, Mint, ...)<br /> 
Http server aplikacije - apache2, nginx, SymplePythonHttpServer.<br />
Ftp server aplikacije: vsftpd.<br />
Skripting: php5, perl, python.<br />
Interfejsi za "skriptovanje": cgi, php-fastcgi, perl-fastcgi.<br />
Protokoli: http, https, ftp.<br />
Aplikativni sloj za rad sa bazama podataka: mysql (phpmyadmin), pgsql (phppgadmin). 
</p>
<h2>Rezime:</h2>
<p>Pošto je tema preopširna i trebaće par meseci da se razradi cela priča i napiše , raščlanićemo
ovo sve da na više celina:<br />
1. LAMP (Linux, Apache, Mysql, Php, Python, Perl)<br />
2. LEMP (Linux, [E]Nginx, Mysql, Php, Python, Perl)<br />
3. LAEMPP (Linux, Apache, [E]Nginx, Mysql, Postgreesql, Php, Python, Perl)<br />
4. Cherokee Web server!<br />
5. Route-X-LAEMPPP (Sve zajedno + custom portovanje i lično mapirana arhitektura)<br />
6. IRC server (Unrealircd)<br />
7. File server (SAMBA)<br />
8. Audio stream server(Gnump3d)
</p>
<p>
<h3>Startujmo!</h3>
<p>Pre prvog dela (br. 1 - LAMP) da pokušamo najjednostavnije da objasnimo sta su tehnologije kojima ćemo se služiti:</p>

<p><b>Debian</b> je Linuks distribucija nastala 1993, koja sadrži isključivo slobodni softver. 
Konfigurisana je za 11 različitih arhitektura. Pored sistema za instaliranje i azuriranje softvera APT, 
Debian sadrži i mnoge alate za sigurnosne aspekte sistema i njegovo uređenje. 
Cesto se koristi kao distribucija za servere ali je popularna i za radne stanice (desktop). 
Nudi ogroman broj program i programskih paketa.
Debian je potpuno demokratski organizovan, u rukama zajednice, i sve odluke se donose u javnosti.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
Web server <b>Apache</b> je web server otvorenog koda za unix-olike operativne sisteme, MS Windows, Novel itd... 
Apache je jedan od najkorišćenijih web servera na Internetu . 
Lako je podesiv za prijavljivanje na sisteme baza podataka i rad sa dosta skriptnih jezika ... 
Takodje je podržan od strane više grafičkih korisničkih okruženja koja imaju jednostavniji način podešavanja servera. 
Apache je razvijen od strane otvorene zajednice programera pod vođstvom fondacije "Apache software". 
Danas više od 55% od ukupno svih web servera koriste Apache software.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
Web server <b>Nginx</b> (motor-x :: engine-x) je besplatan HTTP server otvorenog koda, visokih performansi kao i 
<i>"reverse proxy",</i> podjednako dobar i kao IMAP/POP3 proxy server.
Igor Sysoev je započeo razvoj nginx-a 2002 godine, sa prvom zvanicnom verzijom 2004-te godine. Na nginx-u se trenutno 
"servira" 12.18% (22 200 000 racunara) aktivnih sajtova svih domena!
Nginx je poznat zbog njegovih visokih performansi, stabilnosti, velikog seta opcija, 
jednostavne konfiguracije i zauzimanja veoma malo resursa.<br />
Malo pojasnjenje reversnog proksija:<br />
Reverse proxy radi u ime mrežnog servera. Najcesce korišćenje reversnog proxy-ja je da se zaštiti web server. 
Kada korisnik na internetu šalje upit web serveru zaštićenog reversnim proxy-em, 
reverse proxy presreće zahtev i proverava da li su podaci sadržani u upitu prihvatljivi, i da ne sadrže neke 
ne-HTTP podatke ili neke maliciozne HTTP komande. Ako su podaci prihvatljivi, reverse proxy će primiti zahtevani sadržaj od 
web servera i proslediti ga do originalnog korisnika, i na taj način, korisnici na internetu nikada ne pristupaju 
direktno vašem web serveru.<br />
<i>Izvor: Oficijalni nginx sajt!!!</i>
</p>

<p>
Inače, najprostije, jedno od objašnjenja <b>Proxy</b>-ja uopšte je jednostavno keširanje stranica...Akcenat stavljamo na proxy 
iz razloga jer bi se Nginx u jednom od slučajeva koristio kao reversni proksi i kao kanal za mapiranje portova...<br />
<i>Izvor: Samo mislim na glas!!!</i>
</p>

<p>
<b>Php</b> (Hypertext Preprocessor) je objektno-orijentiran programski jezik namenjen 
prvenstveno programiranju dinamičnih web stranica. Prve verzije su se zvale PHP/FI (Personal Home Page Tools/Forms Interpreter) 
i bile su skup perl skripti, koje je razvio Rasmus Lerdorf za brojanje poseta na svojoj privatnoj web stranici. 
To je bilo negde oko 1995. godine. Posle, kada je nastala potreba za više funkcija razvio je novu verziju u programskom jeziku C, 
koja je mogla raditi s bazama podataka i omogucila je korisnicima da programiraju jednostavne dinamicke 
web stranice. Rasmus je odlucio da objavi PHP kao softver otvorenog koda, tako da ga svako moze poboljšati.
Danas je PHP jedan od najzastupljenijih programskih jezika za programiranje web aplikacija. 
Vrline su mu jer je jako sličan C-u, lako se pamti, prenosiv je...<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
<b>Python</b> je prevođeni programski jezik razvijen od strane Guido van Rossum-a 1990 godine. 
Po automatskoj memorijskoj alokaciji, Python je sličan programskim jezicima kao sto su Perl, Ruby, Smalltalk itd. 
Python dozvoljava programerima koriscenje nekoliko stilova programiranja. Objektno-orijentisano, strukturno i 
aspektno-orijentisano programiranje su stilovi dozvoljeni korišćenjem Pythona. 
Ne treba napominjati da ova fleksiblinost čini Python programski jezik sve popularnijim. 
Python se najviše koristi na Linux-u, ali postoje i verzije za druge operativne sisteme.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
<b>Perl</b> je programski jezik opšte namene. Originalni autor Perla je Larry Wall, a prva verzija pojavila se 18. decembra 1987.
godine. Perl vuče svoje korene iz drugih jezika kao što su C, sed, awk i Unix shell. Perl je danas ne samo programski 
jezik već i vrlo aktivna zajednica programera i korisnika. Odlikuje ga kvalitetna riznica gotovih programskih rešenja 
(CPAN - kratica od engl. “Comprehensive Perl Archive Network”) što mu je ujedno i glavna prednost u odnosu na konkurentne 
jezike.<br />
</i>Izvor: Wikipedija!!!</i>
</p>

<p>
<b>MySQL</b> je višenitni, višekorisnički sistem za upravljanjem bazama podataka. Mysql je otvorenog koda i besplatan je za 
upotrebu. Sistem radi kao server obezbeđujuci višekorisnički interfejs za pristup bazi podataka.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
<b>PostgreSQL</b> je objektno-relacioni sistem za upravljanje bazama podataka, baziran na POSTGRES verziji 4.21, 
razvijenog na Univerzitetu Kalifornija u odeljenju za računarske nauke Berkli. POSTGRES je bio pionir u nekim konceptima 
koje su postale dostupne u komercijalnim bazama tek dosta kasnije. PostgreSQL je open-source izdanak originalnog 
berklijevog koda. Podržava veliki deo SQL standarda i obezbeđuje mnoge savremene karakteristike:<br />
-kompleksne upite<br />
-strane ključeve (foreign keys)<br />
-trigere<br />
-preglede (views)<br />
-transakcioni integritet<br />
PostgreSQL može biti slobodno koriščen, modifikovan i distribuiran od strane svakog korisnika za bilo kakvu upotrebu, 
bila ona privatna, komercijalna ili akademska.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

<p>
<b>The Common Gateway Interface (CGI)</b> je standardni metod da se na web serveru pokrene izvršni program. Fajlovi poznati 
kao CGI scripte, su programi, često “stand-alone” applikacije, obicno pisane scriptnim jezicima.<br />
<i>Izvor: Wikipedija!!!</i>
</p>

