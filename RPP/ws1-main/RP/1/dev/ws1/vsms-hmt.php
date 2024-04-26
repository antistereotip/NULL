<?php 
require_once 'inc/funkcije.php'; 
$home='normall'; 
$second='normall'; 
$contact='current'; 
require_once 'inc/misc/header.php'; 

// * Ideja - Prepisivanje jedne iste poruke * autor: hightech; * 
	echo '<article itemscope itemtype="http://data-vocabulary.org/Organization" class="kontakt">';
	echo '<h1 class="z3d">vsms | hmt</h1><a class="simple" title="vsms-hmt" href="#">
	<img itemprop="photo" src="media/png/engine-up.png" alt="vsms-hmt" width="100" height="100"></a>';
	$s = simplexml_load_file('vsms.xml');
	print '<p itemprop="description">Korisnik: '.$s->channel->title.'<br />Komentar: '.$s->channel->description.'</p>';
	
	echo '<p itemprop="description">
	<form action="" method="post">
	<label itemtrop="name"><input type="text" id="poruka" name="x"/></label>
	<label itemtrop="description"><input type="text" id="poruka" name="y"/></label>
	<label itemtrop="submit"><input type="submit" name="submitted"/></label>
	</form>
	</p>';
	if(isset($_POST['submitted'])) {
		$s = simplexml_load_file('vsms.xml');
		
		$xP = $_POST['x'];
    	$yP = $_POST['y'];
		// update
		$s->channel->title = $xP;
		$s->channel->description = $yP;
		// save the updated document
		$s->asXML('vsms.xml');
		echo '<p itemtrop="description">Uspešno!<a href="vsms-hmt.php"><input type="submit" name="submitted" value="Rеfresh" width="50"/></a></p>';
	}
	echo '</article>';
// *------------------------------------------------------------ *

org("org", "webserveri", "WebServeri | org", "media/png/wlogo.png", 
"WebServeri(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti... Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja.", 
"Url", "http://webserveri.info", "forum", "http://webserveri/forum", "RetroPort", "http://webserveri/RP"); 

require_once 'inc/misc/footer.php'; 
?>



