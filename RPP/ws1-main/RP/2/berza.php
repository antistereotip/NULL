<!doctype html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8" />
<title>berza@ws1</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<style> /* Ovo je min.css */
* {margin:0;padding:0;border:0;outline:0;font-size:100%;vertical-align:baseline;background:transparent}
body {background:#fff;padding-bottom:3%;font:14px/1.5 Helvetica, Arial, sans-serif;color:#555;padding:3% 10%}
h1 {font-weight:bold;font-size:24px;line-height:1.1;text-align:center;color:#222;padding:14px}
</style>
</head>
<body>
<marquee><h1>Beogradska berza</h1></marquee>
<pre>
<?php

echo "<p>".system('lynx --dump "http://www.belex.rs/trgovanje/dnevni/open/akcije"  | head -n 138 | tail -n 48 ')."</p>";

echo "<p>".`lynx -dump "http://news.bbc.co.uk"`."</p>"

// echo "<p>".system('lynx -dump "http://www.webserveri.info" | grep -o "http:.*" >file.txt') . "</p>";
# echo "<p>".`lynx --dump "http://www.belex.rs/trgovanje/dnevni/open/akcije"  | head -n 125 | tail -n 28`. "</p>";

# gstreamer
# gst-launch-0.10 autovideosrc ! video/x-raw-yuv,framerate=\(fraction\)30/1,width=640,height=480 ! ffmpegcolorspace ! autovideosink

?>
</pre>
</body>
</html>
