
<!doctype html>
<!--[if !IE]>      <html class="no-js non-ie" lang="sr-RS"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="sr-RS"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="sr-RS"> <![endif]-->
<!--[if IE 9 ]>    <html class="no-js ie9" lang="sr-RS"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="sr-RS"> <!--<![endif]-->
<head>


<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title>my</title>
<head>
<body>
<?php

// $conn = new mysqli('localhost', 'webserve_master', 'master=true', 'webserve_master');
$link = mysqli_connect('localhost', 'webserve_master', 'master=true', 'webserve_master');

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if (!mysqli_set_charset($link, "utf8")) {
    printf("Ne mogu setovati set karaktera na utf8: %s\n", mysqli_error($link));
} else {
    printf("trenutni karakter set: %s\n", mysqli_character_set_name($link));
}


$up = $_GET['up'];            
// $sql = "SELECT id, email FROM users WHERE name='$up'"; 

$sql = "SELECT * FROM info WHERE title='$up'";
$rezultat = $link->query($sql);

if ($rezultat->num_rows > 0) {
	while($red = $rezultat->fetch_assoc()) {
		// echo '<br /> id: '. $red['id']. ' - email: '. $red['email'];
		echo '<br /> id: '. $red['id']. '<br />title: '. $red['title']. '<br />url: '. $red['url']. '<br />desc: '. $red['desc'];
  	}
} else  { echo '<br />'; echo 'Traženi upit ne postoji u bazi';}

$link->close();
?>
</body>
</html>