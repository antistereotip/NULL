<!DOCTYPE html>
<html lang="sr">
<head>
	<meta charset="utf-8" />
	<title>webserveri</title>
	<meta name="description" content="sve o kompjuterskim trikovima, serverima, programiranju ...." />
	<meta name="keywords" content="serveri, web serveri, file serveri, irc serveri, ftp serveri, programiranje, dizajn, gnu, linux, unix, kompjuteri, 		etc, sistem, freebsd, community, linux zajednica, " />
	<meta name="author" content="hightech" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="noodp, noydir"/> 
	<link rel="stylesheet" href="css/stil.css" />
	<link rel="stylesheet" href="css/query.css" />
	<link rel="shortcut icon" href="media/favicon.ico" />
	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<section class="holder">
	<header>
		<a href="?akcija=home"><img src="../../media/logo.png" id="logo"></a>
		<h1>www.webserveri.info<a href="http://webserveri.info/forum/">/forum</a></h1>
		<form>
			<input name="akcija" type="search" class="inp" placeholder="Unesi komandu" autofocus>
			<input type="submit" value="ENTER">
		</form>
	</header>
<?php
ob_start(); 
$str = $_GET['akcija']; 
// dozvoljene putanje
switch ($str) {
    case 'antistereotip':
    case 'webserveri':
    case 'statut':
    case 'ng1np';
    case 'unix':
    case 'gnu_linux': 
    case 'libre':
    case 'snownews':
    case 'dev_team':
    case 'rss':
    case 'tweet':
    case 'tips':
        include 'lib/'.$str.'.php';
        break;
    default:
        include 'lib/home.php';
}
ob_end_flush(); 
?>

	<footer>	
		<figure> 
		<a href="?akcija=rss"><img src="../../media/rss.png"></a>
		<a href="https://twitter.com/webserveri"><img src="../../media/tw.png"></a>
		<a href="http://www.youtube.com/user/antistereotip"><img src="../../media/yt.png"></a>
		</figure>
		<p id="f">2012 @ antistereotip :: webserveri :: hostovao <a href="http://oklop.me">/oklop</a><br /> engine <b><a href="?akcija=ng1np">/nginp v1.0</a></b> 
		[engine-up] by hightech :: thanks to <a href="?akcija=dev_team">/dev_team</a></p>
		
	</footer>
</section>
</body>
</html>
