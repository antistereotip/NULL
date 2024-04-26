<article>

<h2>Tips</h2>
<?php
$tip = array(
1 => "http://www.webserveri.info/serveri/?q=lamp",
2 => "http://www.webserveri.info/serveri/?q=lemp",
3 => "http://www.webserveri.info/serveri/?q=cherokee",
4 => "http://www.webserveri.info/serveri/?q=samba",
5 => "http://www.webserveri.info/serveri/?q=unrealircd",
);
srand ((double) microtime() * 1000000);
$rand = rand(1,5);
echo '<b>';
echo "$tip[$rand]";
echo '</b>';
?>

</article>

