<article class="serveri">
<h2>engine-up</h2>
<p>AntiStereotip presents <a href="#">eNgine-UP</a></p>
<img src="../../media/ng1np.png" style="width: 70px; height: 70px;"/>
<p>index.php</p>
<pre>
<code>
&lt;?php ob_start(); ?&gt;
&lt;!DOCTYPE html&gt;
&lt;html lang="sr"&gt;
&lt;head&gt;
	&lt;meta charset="utf-8" /&gt;
	&lt;title&gt;engine-up&lt;/title&gt;
	&lt;meta name="description" content="kratak opis nginp php engine-a" /&gt;
	&lt;meta name="keywords" content="php, html5, css3" /&gt;
	&lt;meta name="author" content="hightech" /&gt;
	&lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /&gt;
	&lt;meta name="robots" content="index,follow"&gt; 
	&lt;meta name="robots" content="noodp, noydir"/&gt; 
	&lt;link rel="stylesheet" href="css/stil.css" /&gt;
	&lt;link rel="stylesheet" href="css/query.css" /&gt;
	&lt;link rel="shortcut icon" href="media/favicon.ico" /&gt;
	
	&lt;!--[if lt IE 9]&gt;
		&lt;script src="http://html5shim.googlecode.com/svn/trunk/html5.js"&gt;&lt;/script&gt;
	&lt;![endif]--&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;section class="holder"&gt;

	&lt;header&gt;
		&lt;a href="?akcija=home"&gt;&lt;img src="media/logo.png" id="logo">&lt;/a&gt;
		&lt;h1&gt;www.webserveri.info&lt;a href="/forum/"&gt;/forum&lt;/a&gt;&lt;/h1&gt;
		&lt;form&gt;
			&lt;input name="akcija" type="search" id="inp" placeholder="Unesi komandu" autofocus&gt;
			&lt;input type="submit" value="ENTER"&gt;
		&lt;/form&gt;
	&lt;/header&gt;
&lt;?php

$str = $_GET['akcija']; 
// dozvoljene putanje
switch ($str) {
    case 'tips':
    case 'rss'; 
        include 'lib/'.$str.'.php';
        break;
    default:
        include 'lib/home.php';
}
 
?&gt;

	&lt;footer&gt;	
		&lt;p&gt;powered by hightech :: engine-up&lt;/p&gt;
	&lt;/footer&gt;

&lt;/section&gt;

&lt;/body&gt;
&lt;/html&gt;
&lt;?php ob_end_flush(); ?&gt;
</code>
</pre>

<p>lib/home.php</p>
<pre>
<code>
&lt;article&gt;
&lt;h2&gt;Komande:&lt;/h2&gt;
&lt;ul&gt;
&lt;li&gt;&lt;a href="?akcija=rss" class="button"&gt;rss&lt;/a&gt;&lt;/li&gt;
&lt;li&gt;&lt;a href="?akcija=tips" class="button"&gt;tips&lt;/a&gt;&lt;/li&gt;
&lt;/ul&gt;
&lt;/article&gt;
</code>
</pre>

<p>lib/tips.php</p>
<pre>
<code>
&lt;article&gt;
&lt;h2&gt;Tips&lt;/h2&gt;
&lt;?php
$tip = array(
1 => "http://www.unix.org/",
2 => "http://www.gnu.org/gnu/linux-and-gnu.html",
3 => "http://www.afreesms.com/freesms/",
4 => "http://www.debian.org/",
5 => "http://wiki.nginx.org/Main",
);
srand ((double) microtime() * 1000000);
$rand = rand(1,5);
echo '&lt;b&gt;';
echo "$tip[$rand]";
echo '&lt;/b&gt;';
?&gt;
&lt;/article&gt;
</code>
</pre>

<p>lib/rss.php</p>
<pre>
<code>
&lt;article&gt;
&lt;?php
$otvori_feed = @fopen("http://webserveri.info/rss/januar2013/rss.rss", "r");
if ($otvori_feed) {
$podaci = "";
   while (!feof($otvori_feed)) {
   $podaci .= fread($otvori_feed, 8192);
   }
}
fclose($otvori_feed);
echo '&lt;p&gt;'.$podaci. '&lt;/p&gt;';
?&gt;
&lt;/article&gt;
</code>
</pre>
<p>MarkUP i CSS kaskadne stilove pogledajte u <a href="view-source:http://webserveri.info/">source</a>-u</p>
</article>
