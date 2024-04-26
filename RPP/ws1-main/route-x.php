<?php 
require_once '_set/php/_functions.php'; 
if (@ini_set('zlib.output_compression',TRUE) ||
    @ini_set('zlib.output_compression_level',2)) 
	{ ob_start('KompresujStranu');} else { ob_start('ob_gzhandler');}

$arr_nav = array( array( "id" => "ws1", 
    	  "url" => "index.php",
	  "title" => "WebServeri",
	  "img" => "images/wlogo.png",
	  "desc" => "WebServer1(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti ...
	   	     Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja. 
		     Dinamička strana našeg sajta je forum koji između ostalog nije samo forum već i baza znanja."
    	),
    	array( "id" => "ht", 
    	  "url" => "hightech/",
    	  "title" => "HighTech",
	  "img" => "images/ht01.png",
	  "desc" => "hightech je sinonim za visoke tehnologije. Radim na performansama i razvoju UI, UX, DATA okruženja."
    	),
    	array( "id" => "rp", 
    	  "url" => "RP/",
    	  "title" => "RetroPort",
	  "img" => "media/rp.png",
	  "desc" => "RetroPort je istorija u dizajnerskom smislu ... Uzivajte uz naše eksponate."
    	)		
 );
?>

<!doctype html>
<html dir="ltr" lang="EN"> 
<head> 
<meta charset="UTF-8" /> 
<title>route-x</title>
<link type="text/plain" rel="author" href="humans.txt" />
<link href="media/ws1/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="includes/carousel.css" rel="stylesheet" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

</head>

<body>
<!-- section -->
<section class="container">

  <p class="img ex8"><img class="h3dreklame" src="images/wflat.png" width="90" height="90"/></p>
    <nav class="nav">
      <ul class="nav-menu">
        <li>
          <a href="#" class="nav-item">
            <i class="icon-photo"></i>
            WebServeri
            
            <span class="nav-counter">  
		<script type="text/javascript">
		var currentTime = new Date(); var hours = currentTime.getHours(); var minutes = currentTime.getMinutes();
		if (minutes < 10) { minutes = "0" + minutes } document.write(hours + ":" + minutes + " ");
		if(hours > 11) { document.write("PM"); } else { document.write("AM"); }
		</script>
	    </span><span class="nav-counter">ws1://</span>
          </a>
        </li>
       
      </ul>
    </nav>
  

<div class="my_carousel">
  <div class="carousel_container">
    <div id="carousel"></div>
 	<img src="images/arrow_left.png" alt="arrow_left" width="25" height="50" class="nextItem"/>																
  	<img src="images/arrow_right.png" alt="arrow_right" width="25" height="50" class="previousItem" />
  </div>
         
  <div class="caption_container">
    <div id="captions"></div>
  </div>
  <img src="images/leaves.png" alt="leaves" width="70" height="70" class="leaves h3dreklame" />

  <div class="carousel_data">
  <!-- begin items -->
  <?php
  foreach ($arr_nav as $row) { 
  echo '<!-- Item -->';
  echo '<div class="carousel_item">';
	echo '<div class="image">';
		echo '<img src="'.$row['img'].'" alt="'.$row['id'].'" />';
	echo '</div>';
	echo '<div class="caption">';
		echo '<h2>'.$row['title'].'</h2>';
		echo '<p><a href="'.$row['url'].'">'.$row['title'].'</a></p>';
		echo '<p>'.$row['desc'].'</p>';
	echo '</div>';	
  echo '</div>';
  
  }
   ?>
  <!-- end items -->
  </div>

</div>


<!-- <div id="searcharea"><input type="search" name="search" id="search" placeholder="Pretraga" /></div><div id="update"></div> -->
<!-- footer -->
<footer class="nav" style="margin-top:10px;">
  <ul class="nav-item">
  <li>
    <a href="#" style="color: white; text-align:left;"><i class="icon-star"></i>
    office [at] webserveri [dot] info :: hosting:  www.oklop.me
    <span class="nav-counter">mail</span></a>
  </li>
  
</ul>
</footer>
<!-- end footer -->

</section>
<!-- end section -->
<script src="_set/js/jquery.min.js"></script>
<script src="_set/js/min.js"></script>  
<script src="_set/js/klik.js"></script>
<script src="_set/js/ls.js"></script>
<script src="includes/jquery-1.6.min.js"></script>
<script type="text/javascript" src="includes/jquery.roundabout.min.js"></script>
<script type="text/javascript" src="includes/carousel.js"></script>

</body>
</html>

<?php

if(extension_loaded('zlib')) {ob_end_flush();}
?>




