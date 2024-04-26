<?php
// funkcija engine_up() ENGINE _ UP - ng1np^ - since 2012

function engine_up() {
		$link = mysqli_connect('localhost', 'webserve_master', 'master=true', 'webserve_master');
		/* proverava konekciju */
		if (mysqli_connect_errno()) {
    		printf("Neuspela konekcija: %s\n", mysqli_connect_error());
    		exit();
	}

	if (!mysqli_set_charset($link, "utf8")) {
   		 printf("Ne mogu setovati karaktere na utf8: %s\n", mysqli_error($link));
		 } else { 
			// echo '<div class="animacija"><p><pre>';
    			// printf("Trenutni set karaktera:<b> %s\n", mysqli_character_set_name($link)); echo '</b>';
			}
			
			$up = make_safe($_GET['up']);			
			
			if ((!empty($up)) && (isset($up))) { 
	       			$sql = "SELECT * FROM info WHERE title='$up'";
				$rezultat = $link->query($sql);
				if ($rezultat->num_rows > 0) {
					while($red = $rezultat->fetch_assoc()) {
					echo '<div class="animacija"><p><pre>';
					echo '<i>id: </i>'.$red['id'].'<br />';
					echo '<i>title: </i>'.$red['title'].'<br />';
					echo '<i>url: </i>'.$red['url'].'<br />';
					echo '</p>';
					echo '<p class="desc">desc: '.$red['desc'].'</pre></p></div>';	
  					}
				} 
				else if (!$rezultat->num_rows > 0) {
   					printf("<i>$up</i> ne postoji u bazi! Pokušajte sa ispravnim upitom! %s\n", $mysqli->error);
				}
				
				
				
					
				} else { 
					$sql ="SELECT title FROM info ORDER BY id ASC";
					$rezultat = $link->query($sql);
					echo 'Komande: <i>';
					if ($rezultat->num_rows > 0) {
						while($red = $rezultat->fetch_assoc()) {
							echo $red['title'].', ';
  						} echo '</i>';
					} 
				}
	$link->close();
}

// kraj ------------------ ng1np(); --------------------------->
?>
