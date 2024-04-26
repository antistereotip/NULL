<h2>RSS</h2>
<h3>februar 2013</h3>
<?php
$otvori_feed = @fopen("http://webserveri.info/RP/rss/februar2013/rss.rss", "r");
if ($otvori_feed) {
$podaci = "";
   while (!feof($otvori_feed)) {
   $podaci .= fread($otvori_feed, 8192);
   }
}
fclose($otvori_feed);
echo '<p>'.$podaci. '</p>';
?>
<h3>januar 2013</h3>
<?php
$otvori_feed = @fopen("http://webserveri.info/RP/rss/januar2013/rss.rss", "r");
if ($otvori_feed) {
$podaci = "";
   while (!feof($otvori_feed)) {
   $podaci .= fread($otvori_feed, 8192);
   }
}
fclose($otvori_feed);
echo '<p>'.$podaci. '</p>';
?>

