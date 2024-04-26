<?php
if (@ini_set('zlib.output_compression',TRUE) ||
    @ini_set('zlib.output_compression_level',2)) 
	{
    	ob_start();
	} else {
    		ob_start('ob_gzhandler');
		}

require_once 'setup/hdr_contact.php';?>
<div class="sixteen columns">

<h1>Feedback to Us!</h1>
<div class="two-thirds column">
<?php
$to = 'office@webserveri.info'; $subject = 'Output kontakt forme - webserveri';
$contact_submitted = '<p><strong>&#x2605; Uspešno: </strong>Vaša poruka je uspešno poslata. Odgovorićemo Vam u najskorijem roku! Srdačno WebServeri &#x2605; tim <strong>&#x2605;</strong></p>';
function email_is_valid($email) {
  return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
}
if (!email_is_valid($to)) {
  echo '<p class="succt">Morate napisati validnu email adresu da bi kontakt forma funkcionisala.</p>';
}
if (isset($_POST['contact_submitted'])) {
$return = "\r"; 
$youremail = trim(htmlspecialchars($_POST['your_email'])); 
$username = stripslashes(strip_tags($_POST['username'])); 
$yourmessage = stripslashes(strip_tags($_POST['your_message'])); 
$contact_name = "Ime: ".$username; 
$message_text = "Poruka: ".$yourmessage;
$user_answer = trim(htmlspecialchars($_POST['user_answer'])); 
$answer = trim(htmlspecialchars($_POST['answer']));
$message = 'Od:'. $youremail . $return . $contact_name . $return . $message_text; 
$headers = "Od: ".$youremail;
if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $username != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) { mail($to,$subject,$message,$headers); $username = ''; $youremail = ''; $yourmessage = '';
  echo '<b>'.$contact_submitted.'</b>';
}
else echo '<p class="error"><b><strong>&#x2605; Greška: </strong>Molimo Vas ukucajte Vaše ime, Vašu validnu email adresu, Vašu poruku i Vaš odgovor na jednostavan matematički izraz. Sve to proverite pre nego što pošaljete poruku. Pokušajte opet! <strong>&#x2605;</strong></b></p>';
}
$number_1 = rand(1, 9); $number_2 = rand(1, 9); $answer = substr(md5($number_1+$number_2),5,10);
?>

<h4>&#8976; FeedBack form &not;</h4>
<p>
Your IP (Vaša IP): 
<?php 
$ip = '<b>'. $_SERVER['REMOTE_ADDR'] .'</b><br />Date (Datum): <b>'. date("Y-m-d") . '</b>'; 
echo $ip; 

$file = fopen ('setup/logs/ip.log', 'a'); fputs($file, $ip . ' | NEXT | '); ?>


<form action="" method="post">
<label>
Your name <b>(Vaše Ime)</b> <br /><input type="text" name="username" value="<?php echo $username; ?>"/>
</label>

<label>
Your Email <b>(Vaš Email)</b> <br /><input type="text" name="your_email" value="<?php echo $youremail; ?>"/>
</label>

<label>
Your massage <b>(Vaša poruka)</b> <br /><textarea name="your_message">
<?php echo $yourmessage; ?></textarea>
</label>

<label>Спамбот протектор:</label> 
<label>Молимо унесите тачан резултат!</label>

<label>
<?php echo $number_1; ?> + <?php echo $number_2; ?> = ? <input type="text" name="user_answer" />
<input type="hidden" name="answer" value="<?php echo $answer; ?>" />
</label>

<label>&nbsp;<input class="submit" type="submit" name="contact_submitted" value="Submit"/></label>

</form>
</p>

</div>

<div class="one-third column">
<h4>&#8976; FeedBack &not; </h4>
<p>office@webserveri.info<br />
antistereotip@webserveri.info<br />
zdroid@webserveri.info
</p>

<h4>&#8976; Dev &not; </h4>
<p>https://github.com/webserveri<br />
https://github.com/hightech007<br />
https://github.com/ZDroid
</p>

<h4>&#8976; Social &not; </h4>
<p>https://twitter.com/webserveri
</p>

</div>

<!-- kraj organizacija, adresa -->
</div>
<?php require_once 'setup/ftr.php';
if(extension_loaded('gzip')){ob_end_flush();}
?>
