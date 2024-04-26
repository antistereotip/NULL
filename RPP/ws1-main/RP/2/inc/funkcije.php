<?php
function reklame_png($dir) {
	$dirHandle = opendir($dir); 
  	while ($file = readdir($dirHandle)) {
    		if(is_file($dir.'/'.$file) && strpos($file, '.png')) {
      		// odseci .png iz naziva slike, dodaj http i com
      		$url = 'home#mysterymachine';
      		echo "<a href='$url'><img width='60px' height='60px' src='$dir$file' alt='$file' title='$url' class='h3dreklame'/></a>\n";
    		}
  	}
  	
}


function reklame_team($dir) {
	$dirHandle = opendir($dir); 
  	while ($file = readdir($dirHandle)) {
    		if(is_file($dir.'/'.$file) && strpos($file, '.png')) {
      		// odseci .png iz naziva slike, dodaj http i com
      		// $url = '#mysterymachine';
      		// echo "<a href='$url' target='_blank'><img width='50' height='50' src='$dir/$file' alt='$file' title='$url' class='h3dreklame'/></a>\n";
		echo "<img width='50' height='50' src='$dir/$file' alt='$file' title='$file' class='h3dreklame'/>\n";    		
		}
  	}
  	
}
?>
