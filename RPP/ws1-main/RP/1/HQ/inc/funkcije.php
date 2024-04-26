<?php
// function head($jezik, $kljucne, $opis, $naslov, $nav1, $nav2, $nav3)
function head()
{
echo '<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>sdev-ws1</title>
	<meta name="description" content="">
	<meta name="keywords" content="web serveri, serveri, antistereotip, programiranje, zdroidblog, ng1np, nginz, oklop, hosting, libre, časopis
	o slobodnom softveru, web dizajn ...">
	<meta name="author" content="hightech">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="inc/css/stil.css">
	<link rel="stylesheet" href="inc/css/grid.css">
	<link rel="stylesheet" href="inc/css/ext.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../../../media/favicon.ico">
	<link rel="apple-touch-icon" href="../../../media/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../../../media/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../../../media/apple-touch-icon-114x114.png">
	<link href="http://fonts.googleapis.com/css?family=Economica:400,700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Ribeye+Marrow" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Glegoo" rel="stylesheet" type="text/css">
</head>';
}

// function head($jezik, $kljucne, $opis, $naslov, $nav1, $nav2, $nav3)
function headr()
{
echo '<body>
<section class="holder">
<header class="sesnest kol">
	<hgroup>
	<h1 itemprop="name">WebServeri&rsquo;s <strong>&#x2605;</strong> MicroData HQ</h1>
	<h2 class="podnaslov"><em>HIGH</em> * <i>~</i><b> Quality</b> za brze <strong>Charobnjake &#x2605; Ninja Ratnike</strong> * U pripremi
	* <blackquote>Pure html5 css3 3d efect!</blackquote> *</h2>
	</hgroup>
</header>
<div class="clear"></div>
<nav class="sesnest kol">
		<ul>
			<li class="current"><a href="../"> &laquo; Nazad </a></li>
			
		</ul>
</nav>';
}

function reklame()
{
echo '<article class="reklame kol" id="anim">
			
			<a href="http://webserveri.info" target="_blank">
			<img width="70px" height="auto" src="../../../media/webserveri.png" alt="webserveri.png" 
			title="http://webserveri.info" class="h3dreklame"></a>
			<a href="http://zdroidblog.info" target="_blank">
			<img width="70px" height="auto" src="../../../media/zdroidblog.png" alt="zdroidblog.png" 
			title="http://zdroidblog.info" class="h3dreklame"></a>
			<a href="http://forum.webserveri.info" target="_blank">
			<img width="70px" height="auto" src="../../../media/forum.webserveri.png" alt="forum.webserveri.png" 
			title="http://forum.webserveri.info" class="h3dreklame"></a>
			
		</article>';
}
?> 








