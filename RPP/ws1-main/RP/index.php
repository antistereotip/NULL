<?php 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
header("Content-type: text/html"); 
require_once "include/zaglavlje.php";
?>

<!-- ---------------------------------------------------------------------------------------------------------------------  -->
<!-- grid -->
<article class="grid">
	
<!-- trecina -->
<div class="cetiri kol">
<nav>
	<ul>
	<li><a href="?q=home">Home</a></li>
	<li><a href="../forum">Forum</a></li>
	<li><a href="0/">RetroPort RP/0</a></li>
	<li><a href="1/">RetroPort RP/1</a></li>
	<li><a href="1/HQ/">RetroPort RP/1/HQ</a></li>
	<li><a href="2/">RetroPort RP/2</a></li>
	<li><a href="3/">RetroPort RP/3</a></li>
	<li><a href="4/">RetroPort RP/4</a></li>
	<li><a href="?q=blog">Blog</a></li>
	<li><a href="?q=journal">Journal</a></li>
	<li><a href="?q=antistereotip">AntiStereotip</a></li>
	<li><a href="?q=webserveri">WebServeri</a></li>
	<li><a href="?q=ng1np">Ng1np ®</a></li>
	<li><a href="?q=ng1np_up">Ng1np_up[s] ®</a></li>
	<li><a href="?q=statut">Statut WS1</a></li>
	<li><a href="?q=unix">UNIX ®</a></li>
	<li><a href="?q=gnu_linux">GNU/Linux</a></li>
	<li><a href="?q=gnome3">Wheezy&Gnome3</a></li>
	<li><a href="?q=trikovi">Trikovi</a></li>
	<li><a href="?q=serveri">Serveri</a></li>
	<li><a href="?q=git">Git</a></li>
	<li><a href="?q=geoip">GeoIP</a></li>
	<li><a href="?q=irc_logs">IRC Logs</a></li>
	<li><a href="?q=tips">Tips</a></li>
	<li><a href="?q=dev_team">Razvojni tim</a></li>
	<li><a href="?q=hightech@ws1">hightech@ws1</a></li>
	<li><a href="?q=wide_ip">wideip</a></li>
	<li><a href="?q=zdroid@ws1">zdroid@ws1</a></li>
	<li><a href="?q=nginz">Engine~Z</a></li>
	<li><a href="?q=oklop">Oklop</a></li>
	<li><a href="?q=zpop">Жељко Попивода</a></li>
	<li><a href="?q=libre">Libre</a></li>
	<li><a href="?q=smesne_strane">Smešne strane</a></li>
	<li><a href="?q=tweet">Tweet</a></li>
	<li><a href="?q=rss">RSS</a></li>
	<li><a href="?q=kontakt">Kontakt</a></li>
	</ul>
</nav>
</div>
<!-- trecina kraj -->

<!-- dve trecine -->
<div class="dvanest kol" id="ex8">
<?php
$str = $_GET['q']; 
switch ($str) {
	case 'antistereotip': case 'webserveri': case 'ng1np': case 'ng1np_up': case 'blog': case 'journal': case 'statut': 

	case 'unix': case 'gnu_linux': case 'gnome3': case 'gnome3-setup': case 'git': case 'geoip': case 'ninja': 
	
	case 'serveri': 
	case 'intro': case 'lamp': case 'lemp': case 'laemppp': 
	case 'rootx': case 'cherokee': case 'samba': case 'unrealircd':
	case 'ngircd': case 'gnump3d':

	case 'trikovi': case 'gnu_linux_trikovi': case 'php_trikovi': case 'irc_trikovi': 
         
	case 'irc_logs': case 'tips': case 'smesne_strane':

	case 'dev_team': 
	case 'hightech': case 'hightech_up': case 'hightech@ws1': 
	case 'zdroid': case 'zdroid@ws1': case 'nginz': 
	case 'wide_ip': 
	case 'slax': 
	case 'nemysis': 
	case 'oklop': 
	case 'profi': 
	case 'zpop':
	
	case 'libre': case 'c1az':
	
	case 'tweet': case 'rss': case 'kontakt':
		include 'lib/'.$str.'.php';
	break;
	default:
		include 'lib/home.php';
	}
?>
</div>
<!-- dve trecine kraj -->


</article>
<!-- kraj grid-a -->
<!-- ---------------------------------------------------------------------------------------------------------------------  -->

<?php 
require_once "include/fusnota.php";
if(extension_loaded('zlib')){ob_end_flush();}
?>
