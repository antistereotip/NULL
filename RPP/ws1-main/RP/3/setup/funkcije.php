<?php

function listajFolderLink($putanja){
	$dir_handle = @opendir($putanja) or die("Ne mogu otvoriti $putanja");
	echo "$putanja<br/>";
	while ($file = readdir($dir_handle)) {
        echo "<a href='$file'>$file</a><br/>";
	}
	closedir($dir_handle);
}

function oblak () {
	$ct = "class='button' target='__blank'";
	$ln = " &#x2605;"; $l = " &#9658;";	

	echo "<div class='oblak'>";
	
	echo "<p>";
	echo '<a href="#"><img src="../../media/ng1np.png" width="90px" height="90px" class="h3dreklame" alt="logotip ws1"/></a>';
	echo "</p>";
	
	echo "<p>";
	echo "<a href='../../forum/'>forum</a>$ln";
	echo "<a href='../'>RP</a>$ln";
	echo "<a href='../0/'>RP/0</a>$ln";
	echo "<a href='../1/'>RP/1</a>";
	echo "<a href='../1/HQ/'>RP/1/HQ</a>"; 
	echo "<a href='../2/'>RP/2</a>";
	echo "<a href='../?q=hightech'>hightech</a>$l";
	echo "<a href='../?q=antistereotip'>antistereotip</a>$ln";
	echo "<a href='../?q=zdroid@ws1'>zdroid</a>"; 
	echo "<a href='../?q=wide_ip'>wideip</a>$l";
	echo "<a href='../?q=nemysis'>nemysis</a>";
	echo "<a href='../../home?up=kgb'>kgb</a>";
	echo "</p>";


	echo '<form>Search: <br /><input type="text" size="20" onkeyup="showResult(this.value)"><div id="livesearch"></div></form>';
	
	// echo '<video controls>
  			// <source src="media/video/big_buck_bunny.mp4" type="video/mp4">
  			// <source src="media/video/big_buck_bunny.ogv" type="video/ogg">
  			// Your browser does not support the video tag.
	// </video><br />';

	echo "<p>";
	echo "<a href='http://hightechangel.wordpress.com'>ht4ngL</a>$l";
	echo "<a href='http://seeux.wordpress.com'>seeux</a>";
	echo "<a href='http://oklop.rs'>Oklop</a>$ln";
	echo "<a href='http://routefor.net'>RouteFor</a>";
	echo "<a href='http://zdroidblog.info'>ZDroidBlog</a>$l";
	echo "<a href='http://oklop.me'>Oklop CG</a>";
	echo "<a href='https://libre.lugons.org'>libre</a>";
	echo "<a href='http://popivoda.com'>zpop</a>"; 
	echo "<a href='http://zeljko.popivoda.com'>zpopBlog</a>"; 
	echo "<a href='http://videoteka.me'>Videoteka</a>";
	echo "<a href='http://ucionica.me'>Ucionica</a>"; 
	echo "</p>";
	
	echo "<p>"; 
	echo "<a href='https://github.com/webserveri'><img src='../../media/github.png' alt='github' width='60px' class='h3dreklame'></a>";
	echo "<a href='https://twitter.com/webserveri'><img src='../../media/twitter_box_blue.png' alt='twitter' width='50px' class='h3dreklame'></a>";
	echo "<a href='#'><img src='../../media/rss_box_orange.png' alt='twitter' width='50px' class='h3dreklame'></a>";
	echo "</p>";

	echo "<p>";
	echo "<a href='#'>ht</a>$l";
	echo "<a href='#'>4n</a>";
	echo "<a href='#'>gL</a>";
	echo "<a href='#'>ht4ngL</a>";
	echo "<a href='#'>ht4gL</a>";
	echo "<a href='#'>ht4ngL</a>$l";
	echo "</p>";

	echo "<p>";
	echo "<a href='#'>gL</a>";
	echo "<a href='#'>ht4ngL</a>";
	echo "<a href='#'>ht</a>";
	echo "<a href='#'>ht4ngL</a>$l";
	echo "<a href='#'>ht4</a>$ln";
	echo "<a href='#'>ht4ngL</a>";
	echo "<a href='#'>htL</a>";
	echo "<a href='#'>L</a>";
	echo "<a href='#'>ht4L</a>";
	echo "<a href='#'>ht4ngL</a>";
	echo "<a href='#'>ht4nL</a>";
	echo "<a href='#'>ngL</a>";
	echo "</p>";

	echo "</div>";
}

function cnc_engine_up() {
	$mysqli = mysqli_connect('localhost', 'webserve_master', 'master=true', 'webserve_master');
	/* proverava konekciju */
	if (mysqli_connect_errno($mysqli))
  	{
  	echo "Ne mogu se povezati na MySQL server: " . mysqli_connect_error();
  	} else { echo "master class ON!\n";}
}

function make_safe($variable) {
    $variable = mysql_escape_string(trim($variable));
    return strip_tags(htmlentities($variable));
}





?>
