<article class="serveri">
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
</article>
