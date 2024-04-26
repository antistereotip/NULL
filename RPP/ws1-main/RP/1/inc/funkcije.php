<?php
// function skloniPrazneLinije($string)
//{
//	return preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);
//}
function head($jezik, $kljucne, $opis, $nav1, $nav2, $nav3, $nav4, $nav5, $nav6)
{
echo '<!DOCTYPE html>
<html lang="'.$jezik.'">
<head>
	<meta charset="utf-8"/>
	<meta name="robots" content="index,follow"> 
	<meta name="robots" content="all"/>
	
	<meta name="keywords" content="'.$kljucne.'"/>
	<meta name="description" content="'.$opis.'"/>
	<title>WebServeri | MicroData Concept</title>
	<link rel="stylesheet" href="inc/css/stil.css" />
	<link rel="stylesheet" href="inc/css/ext.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Economica:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Ribeye+Marrow" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet" type="text/css">
	<script src="js/livesearch.js" type="text/javascript"></script>
	<script src="js/livesearchrss.js" type="text/javascript"></script>
	</head>
	<body class="holder">
	<header>
		<hgroup>
			<h1 itemprop="name" class="animacija">WebServeri&rsquo;s <strong>&#x2605;</strong> MicroData</h1>
			<h2 class="h3d"><em>Dobrodoshli</em> u <i>Svet</i> <b>Charobnjaka</b> <br />i Drugih <strong>Ninja &#x2605; Ratnika</strong></h2>
		</hgroup>
	</header>
	<nav>
	<ul>
		<li class="'.$nav1.'"><a href="Pocetna"> Početna </a></li>
		<li class="'.$nav2.'"><a href="Razvoj"> Razvoj </a></li>
		<li class="'.$nav3.'"><a href="Up"> Up </a></li>
		<li class="'.$nav4.'"><a href="Down"> Down </a></li>
		<li class="'.$nav6.'"><a href="Kontakt"> Kontakt </a></li>
	</ul>
	</nav>
<section>';
}


function hq()
{
echo '<article class="up"><div id="up">
<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="../../media/ng1np.png" />
     <div class="maska"><h2>Ng1np<br />powered by<br />hightech</h2></div></a>
</div>

<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="../../media/wlogo.png" />
     <div class="maska"><h2>Forum<br />on WS1</h2></div></a>
</div>

<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="../../media/wideip.png" />
     <div class="maska"><h2>wideip<br />routefor<br />.net</h2></div></a>
</div>


<div class="dugme dugme-iko" id="dugme"><a href="#"><img src="../../media/nginz.png" />
     <div class="maska"><h2>ZDroidov<br />Blog</h2></div></a>
</div>
<div class="dugme dugme-iko" id="dugme" style="border-right: 1px solid #414141;"><a href="?q=rss"><img src="../../media/logo.png" />
     <div class="maska"><h2>RSS<br />Really<br />Simple<br />Syndication</h2></div></a>
</div>
</div>
</article>'; 
}





function org($klasa, $naslov, $h1, $img, $desc, $veza, $url, $veza1, $url1, $veza2, $url2)
{
echo '<article itemscope itemtype="http://data-vocabulary.org/Organization" class="'.$klasa.'">
	<h1 itemprop="name" class="h3dr">'.$h1.'</h1>
	<a class="simple" title="'.$naslov.'" href="'.$url.'">
	<img itemprop="photo" src="'.$img.'" alt="'.$naslov.'" width="100" height="auto">
	</a><p itemprop="description">'.$desc.'</p><p>'.$veza.': <a itemprop="url" href="'.$url.'">'.$url.'</a>
	<br />'.$veza1.': <a itemprop="url" href="'.$url1.'">'.$url1.'</a>
	<br />'.$veza2.': <a itemprop="url" href="'.$url2.'">'.$url2.'</a></p>
</article>';
}
function rank($klasa, $h1, $naslov, $img, $veza, $url, $desc, $rating, $stars,  $proveravao, $autor, $datuma, $datum, $veza1, $url1, $unique_url)
{
echo '<article itemscope itemtype="http://data-vocabulary.org/Review" class="'.$klasa.'">
	<h1 itemprop="itemreviewed" class="h3dr">'.$h1.'</h1>
	<a class="simple" title="'.$naslov.'" href="'.$url.'">
	<img src="'.$img.'" alt="'.$naslov.'" width="100" height="100"></a>
	<p><span class="a">'.$stars.'</span><span itemprop="rating"> ('.$rating.')</span></p>
	<p itemprop="summary">Rank stranice</p>
	<p itemprop="description"><blackquote>'.$desc.'</blackquote>
	<br />'.$veza.': <a href="'.$url.'">'.$url.'</a></p>
	<p itemprop="reviewer">'.$proveravao.': <span class="autor">'.$autor.'</span></p>
	<p itemprop="dtreviewed" datetime="'.$datum.'">'.$datuma.': <span>'.$datum.'</span></p>
	<p itemscope itemtype="http://data-vocabulary.org/Organization">'.$veza1.': <a itemprop="url" href="'.$url1.'">'.$url1.'</a>
	<br /><br /><a href="'.$url1.'" title="'.$naslov.'" target="_blank">
	<img src="'.$unique_url.'" alt="'.$naslov.'" style="border:0;"/></a>
    </p>
</article>';
}

function reklame_info($dir) {
	echo '<section class="reklame">';
  	$dirHandle = opendir($dir); 
  	while ($file = readdir($dirHandle)) {
    		if(is_file($dir.'/'.$file) && strpos($file, '.png')) {
      			// odseci .png iz naziva slike, dodaj http i com
      			$url = 'http://'.substr($file, 0, -4).'.info';
      			echo "<a href='$url' target='_blank'><img width='70px' height='auto' src='$dir/$file' alt='$file' title='$url' class='h3dreklame'/></a>\n";
    			}
  		}
  	echo '</section>';
	}
function reklame_com($dir) {
	echo '<section class="reklame">';
  	$dirHandle = opendir($dir); 
  	while ($file = readdir($dirHandle)) {
    		if(is_file($dir.'/'.$file) && strpos($file, '.png')) {
      			// odseci .png iz naziva slike, dodaj http i com
      			$url = '#mysterymachine';
      			echo "<a href='#' target='_blank'><img width='70px' height='auto' src='$dir/$file' alt='$file' title='$url' class='h3dreklame'/></a>\n";
    			}
  		}
  	echo '</section>';
	}
?> 








