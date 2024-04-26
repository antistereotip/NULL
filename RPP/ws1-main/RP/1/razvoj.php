<?php 
require_once 'inc/funkcije.php'; 

head("sr-RS", "WebServeri, projekat otvorenog koda, serveri, brzina, AntiStereotip, Oklop , hosting, ZDroidBlog, Libre, Programiranje, Web dizajn, pagerank ...",
 "WebServeri(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti... Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja.", "normall", "current", "normall", "normall", "normall", "normall");
reklame_com('../../media/reklame/com');
// * -------- Ideja - Prepisivanje jedne iste poruke * autor: hightech; ----------- * 
	echo '<article itemscope itemtype="http://data-vocabulary.org/Organization" class="kontakt">';
	echo '<h1 class="h3dr">VsmS | hmt</h1><a class="simple" title="vsms-hmt" href="#">
	<img itemprop="photo" src="../../media/ng1np.png" alt="vsms-hmt" width="100" height="100"></a>';
	$s = simplexml_load_file('vsms.xml');
	print '<p itemprop="description"><b>Korisnik:</b> '.$s->channel->title.'<br /><b>Komentar</b>: '.$s->channel->description.'</p>';
	$zamena=array('script','<?php', '?>');
	function ocisti($str) {
		global $zamena;
		$str=str_replace($zamena, '', $str);
		return $str;		
	}	
	echo '<p itemprop="description">
	<form action="" method="post">
	<label itemtrop="name">Korisnik:</label>
	<label itemtrop="name"><input type="text" id="poruka" name="x"/></label>
	<label itemtrop="name">Komentar:</label>
	<label itemtrop="description"><textarea type="text" id="poruka" name="y"></textarea></label>
	<label itemtrop="submit"><input type="submit" name="submitted"/></label>
	</form>
	</p>';
	if(isset($_POST['submitted'])) {
		$s = simplexml_load_file('vsms.xml');
		
		$xP = ocisti($_POST['x']);
    		$yP = ocisti($_POST['y']);
		// update
		$s->channel->title = $xP;
		$s->channel->description = $yP;
		// save the updated document
		$s->asXML('vsms.xml');
		echo '<p itemtrop="description">Uspešno!<a href="razvoj.php"><input type="submit" name="submitted" value="Rеfresh" width="50"/></a></p>';
	}
	echo '</article>';
// *------------------------------------------------------------------------------- *
rank("rank", "Github", "github-review-ws1pr", "../../media/Octocat.png", "WebServeri@Github", "https://github.com/webserveri", " &#x2605;  https://github.com &#x2605;", "8 od 10", "&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;&#x2605;&#x2606;&#x2606;", "Proveravao", "hightech", "Datuma", "2013-00-00", "Url", "https://github.com", "../../media/prgit.gif");
?>
<article class="kontakt">
<h1 class="h3dr">Pretražite Sajt:</h1>
<form><label></label><input type="text" size="20" onkeyup="showResult(this.value)"><div id="livesearch"></div></form>
</article>

<?php
org("ws1rank", "webserveri", "WebServeri | Koncept", "../../media/wlogo.png", 
"Reč tima: WebServeri je ideja nekolicine entuzijasta okupljenih oko ideje stvaranja pravog UI | UX | DATA | Relacija | USER | okruženja. Uz malo naše eksperimantalne podrške preko Foruma, IRC-a, E-mail usko povezane sa funkcionisanjem UNIX | Gnu/Linux | slck1337,14 | Debian | Based on Debian | Arch | Gentoo | FreeBSD | Nginx | Apache | Cherokee | Lighttpd | Ngircd | Gnump3d | Unrealircd | Samba | PHP | Python | Lisp | HTML5 | CSS3 | XML | UML | MySql | PgSql  ... možemo Vam tehnički izaći u susret u skoro svako doba dana. Za sada! Cilj nam je stvaranje Web okruženja kroz mnogo gotovih dodataka sa sopstvenom semantikom i neuronskim sklopom, što bi značilo da bi Administrator mogao da svojim rečima napiše šta želi na strani, kao i Korisnik koj bi trebao imati iste UI | UX privilegije, a program bi u nekoj budućnosti imao pametne sesije koje bukvalno uče i time korisniku i administratoru olakšavaju korisnički doživljaj, interfejs... i samo rukovanje celom platformom. Trenutno http://webserveri.info je predstavljen MikroFormatom iza koga stoji Ng1np v1.3 sa UI | UX | DATA | ANIMATED | FrameWork napisan u php-u sa dosta dodataka pisanih u bash-u, python-u. webserveri.info/Pocetna je u root odnosu prema RP - RetroPort-u. Ovo bi značilo da će RetroPort ostati ispod u razvojnom smislu ali i dalje 100% funkcionalan u tehničkom smislu. Domen http://antistereotip.info je i zvanično ugašen 19.03.2013 i nije više u vlasništvu Milutina Gavrilovića (hightech). Na https://github.com takođe možete pronaći naš rad -- https://github.com/hightech007 -- https://github.com/webserveri -- https://github.com/ZDroid -- I uputstvo za korišćenje gita -- http://webserveri.info/RP/?q=git -- Ukoliko smo neophodan deo Vašeg poslovanja ili igre budite slobodni da nas kontaktirate na office@webserveri.info -- antistereotip@webserveri.info -- zdroid@webserveri.info -- hightech@wideip.net ili na ircu na dole navedenim adresama.", 
"Irc", "#webserveri@irc.freenode.net", "Web chat:", "http://webchat.freenode.net/?channels=webserveri", "RetroPort", "http://webserveri.info/RP/?q=irc_logs"); 



require_once 'inc/misc/footer.php'; 
?>



