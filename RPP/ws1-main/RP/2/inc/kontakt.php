<?php
$to = 'office@webserveri.info'; $subject = 'Output kontakt forme - webserveri';
$contact_submitted = '<p><strong>&#x2605; Uspešno: </strong>Vaša poruka je uspešno poslata. Odgovorićemo Vam u najskorijem roku! Srdačno WebServeri &#x2605; tim <strong>&#x2605;</strong></p>';
function email_is_valid($email) {
  return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
}
if (!email_is_valid($to)) {
  echo '<p>Morate napisati validnu email adresu da bi kontakt forma funkcionisala.</p>';
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
else echo '<p><b><strong>&#x2605; Greška: </strong>Molimo Vas ukucajte Vaše ime, Vašu validnu email adresu, Vašu poruku i Vaš odgovor na jednostavan matematički izraz. Sve to proverite pre nego što pošaljete poruku. Pokušajte opet! <strong>&#x2605;</strong></b></p>';
}
$number_1 = rand(1, 9); $number_2 = rand(1, 9); $answer = substr(md5($number_1+$number_2),5,10);
?>


<p>
Vaša <b>IP</b>: 
<?php 
$ip = $_SERVER['REMOTE_ADDR'] .'<br />Datum: '. date("Y-m-d"); echo $ip.'</p>'; 
$file = fopen ('inc/logs/ip.log', 'a'); fputs($file, $ip . ' | NEXT | '); ?>

<form id="contact" action="" method="post">
Vaše Ime
<input class="contact" type="text" name="username" value="<?php echo $username; ?>" placeholder="* obavezno polje"/>
Vaš Email<input class="contact" type="text" name="your_email" value="<?php echo $youremail; ?>" placeholder="* obavezno polje"/>
Vaša poruka<textarea class="contact textarea" name="your_message" placeholder="* obavezno polje">
<?php echo $yourmessage; ?></textarea>
<b>Спамбот Протектор</b><br /> 
Молимо, Унесите тачан резултат!<br />
<?php echo $number_1; ?> + <?php echo $number_2; ?> = ? <br />
<input type="text" name="user_answer"  placeholder="* obavezno polje"/><input type="hidden" name="answer" value="<?php echo $answer; ?>"/>
<input class="button" type="submit" name="contact_submitted" value="Pošalji" style="background:none;"/>
</form>

