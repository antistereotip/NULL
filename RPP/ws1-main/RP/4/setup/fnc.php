<?php
/* funkcija cuva input ------------------------------------------------------------------------------------------------------------------------------ */
function make_safe($safe) {
	$safe = mysql_escape_string(trim($safe));
	return strip_tags(htmlentities($safe));
}
/* ------> kraj funkcije <------ */



/* funkcija engine_up() ENGINE _ UP - ng1np^ - since 2012 -------------------------------------------------------------------------------------------- */
function engine_up() {
	$link = mysqli_connect('localhost', 'webserve_master', 'master=true', 'webserve_master');
	/* ------ proverava konekciju. ukoliko su neispravni parametri vraca negativan rezultat ----- */
	if (mysqli_connect_errno()) {
		printf("Neuspela konekcija: %s\n", mysqli_connect_error());
		exit();
	}
	/* ------ setuje karaktere. ukoliko nisu setovani vraca negativan rezultat ------ */
	if (!mysqli_set_charset($link, "utf8")) {
		printf("Ne mogu setovati karaktere na utf8: %s\n", mysqli_error($link));
		} else { 
			/* ------ ukljucuje templejt ------ */
			require_once 'setup/hdr.php';
			/* printf("Trenutni set karaktera:<b> %s\n", mysqli_character_set_name($link)); */
			}
	/* ------ prima varijablu iz get metoda, priprema upit sa tom vrednoscu i obezbedjuje je ------ */		
	$up = make_safe($_GET['up']);
	if ((!empty($up)) && (isset($up))) { 
		$sql = "SELECT * FROM info WHERE title='$up'";
	  	$rezultat = $link->query($sql);
		/* ------ proverava da li je rezultat veci od nule i vraca podatke ------ */
		if ($rezultat->num_rows>0) {
	    		while($red = $rezultat->fetch_assoc()) {
	      			/* echo 'id: '.$red['id'].'<br />'; */
				$id = $red['id'];
	      			$title = $red['title'];
				$cat = $red['cat'];
	      			$url = $red['url'];
				$ext_url = $red['ext_url'];
				$img = $red['img'];
				$desc = $red['desc'];	
  	    		}
			/* ------ ukljucuje templejt ------ */
			require_once 'setup/tpl_up.php';
			require_once 'setup/ftr.php';
	  	} 
		/* ------ proverava da li se trazeni upit uopste nalazi u bazi. ukoliko je rezultat nula, vraca odgovor. ------ */
		else if (!$rezultat->num_rows>0) {
			/* ------ ukljucuje templejt ------ */
			require_once 'setup/tpl_noresult.php';
			require_once 'setup/ftr.php';
			}	
				
	} else { 
		/* ------ izbacuje naslove *(title) po redosledu id-a od pocetka ukoliko ima vise kolona od 0 *(nula) ------ */
		$sql ="SELECT title FROM info ORDER BY title ASC";
		$rezultat = $link->query($sql);
		if ($rezultat->num_rows>0) {
			/* ------ ukljucuje templejt ------ */
			require_once 'setup/tpl_commands.php';
			require_once 'setup/ftr.php';
			}
		} 
	/* ------ ukljucuje fusnotu ------ */
	/* require_once 'setup/fusnota.php'; */
	
	/* ------ zatvara mysqli konekciju ------ */
	$link->close();
}
/* ------> kraj funkcije <------ */

?>
