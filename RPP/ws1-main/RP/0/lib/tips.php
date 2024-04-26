<article>
<h2>Tips</h2>

<?php
$tip = array(
1 => "http://www.unix.org/",
2 => "http://www.gnu.org/gnu/linux-and-gnu.html",
3 => "http://www.afreesms.com/freesms/",
4 => "http://www.debian.org/",
5 => "http://wiki.nginx.org/Main",
);
srand ((double) microtime() * 1000000);
$rand = rand(1,5);
echo '<b>';
echo "$tip[$rand]";
echo '</b>';
?>
</article>
