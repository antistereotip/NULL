<article itemscope itemtype="http://data-vocabulary.org/Organization" class="kontakt">
<h1>Kontaktirajte nas!</h1>
<a class="simple" title="kontakt" href="kontakt.php">
	<img itemprop="photo" src="media/png/engine-up.png" alt="kontakt" width="100" height="100">
</a>
<?php
$to = 'office@webserveri.info'; $subject = 'Output kontakt forme - webserveri';
$contact_submitted = '<p itemtrop="description" class="succ"><strong>&#x2605; Uspešno: </strong>Vaša poruka je uspešno poslata. Odgovorićemo Vam u najskorijem roku! Srdačno WebServeri &#x2605; tim <strong>&#x2605;</strong></p>';
function email_is_valid($email) {
  return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
}
if (!email_is_valid($to)) {
  echo '<p itemtrop="description" class="succt">Morate napisati validnu email adresu da bi kontakt forma funkcionisala.</p>';
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
else echo '<p itemtrop="description" class="error"><b><strong>&#x2605; Greška: </strong>Molimo Vas ukucajte Vaše ime, Vašu validnu email adresu, Vašu poruku i Vaš odgovor na jednostavan matematički izraz. Sve to proverite pre nego što pošaljete poruku. Pokušajte opet! <strong>&#x2605;</strong></b></p>';
}
$number_1 = rand(1, 9); $number_2 = rand(1, 9); $answer = substr(md5($number_1+$number_2),5,10);
?>




<p itemprop="description" class="h3d">
Vaša <b>IP</b>: 
<?php 
$ip = $_SERVER['REMOTE_ADDR'] .'<br />Datum: '. date("Y-m-d"); echo $ip.'</p>'; 
$file = fopen ('ip.log', 'a'); fputs($file, $ip . ' | NEXT | '); ?>


<p itemprop="description">
<form id="contact" action="" method="post">
<label itemtrop="name">
<span>Vaše Ime</span></label>
<label itemtrop="description"><input class="contact" type="text" name="username" value="<?php echo $username; ?>"/></label>
<label itemtrop="email"><span>Vaš Email</span><br /><input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>"/></label>
<label itemtrop="description"><span>Vaša poruka</span><br /><textarea class="contact textarea" name="your_message">
<?php echo $yourmessage; ?></textarea></label>
<label itemtrop="description"><b>Спамбот протектор:</b></label> 
<label itemtrop="description">Молимо унесите тачан резултат!</label>

<label itemtrop="description"><span><?php echo $number_1; ?> + <?php echo $number_2; ?> = ? </span>
<input type="text" name="user_answer" /><input type="hidden" name="answer" value="<?php echo $answer; ?>" />
</label>
<label itemtrop="submit"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Pošalji"/></label>
</form>
</p>
</article>
<!-- kraj organizacija, adresa -->
