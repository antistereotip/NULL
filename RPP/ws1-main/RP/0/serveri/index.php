<?php ob_start('ob_gzhandler'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8" />
<title>webserveri</title>
<meta name="description" content="sve o kompjuterskim trikovima, serverima, programiranju ...." />
<meta name="keywords" content="serveri, web serveri, file serveri, irc serveri, ftp serveri, programiranje, dizajn, gnu, linux, 
unix, kompjuteri, etc, sistem, freebsd, community, linux zajednica, " />
<meta name="author" content="hightech" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="robots" content="index,follow"> 
<meta name="robots" content="noodp, noydir"/> 
<link rel="stylesheet" href="sistem/css/stil.css" />
<link rel="stylesheet" href="sistem/css/query.css" />
<link rel="shortcut icon" href="../../../media/favicon.ico" />
<!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>

<section class="holder">
<header>
  <img src="../../../media/wlogo.png" class="logotip"/>
  <h1>nginp v1.1<br /><span>input map or press enter for home</span></h1>
  <form>
    <input name="q" type="search" class="inp" autofocus>
    <input type="submit" value="ENTER">
  </form>
</header>

<?php
include 'sistem/funkcije.php';
listajFolderFajl('lib');
$str = $_GET['q'];
switch ($str) {
    case 'tips':
    case 'lamp':
    case 'lemp';
    case 'cherokee';
    case 'laemppp':
    case 'r00tX';
    case 'unrealircd';
    case 'samba':
    case 'gnump3d';
        include 'lib/'.$str.'.php';
        break;
    default:
        include 'lib/map.php';
}
?>

<footer><p>engine-up :: hightech :: full open source</p></footer>

</section>

</body>
</html>
<?php ob_end_flush(); ?>

