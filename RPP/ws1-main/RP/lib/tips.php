<h2>Tips</h2>
<h3>Tips</h3>

<?php
$tip = array(
1 => "http://www.unix.org",
2 => "http://www.gnu.org/gnu/linux-and-gnu.html",
3 => "http://www.afreesms.com/freesms/",
4 => "http://www.debian.org",
5 => "http://www.antistereotip.info",
6 => "http://www.zdroidblog.info",
7 => "http://www.oklop.me",
8 => "http://my.opera.com/",
9 => "http://linux.org",
10 => "http://wiki.nginx.org/Main",
);
srand ((double) microtime() * 1000000);
$rand = rand(1,5);
echo '<p style="background: #212121;">Tip link: <b>';
echo "<a href='" . $tip[$rand] ."' target='__blank'>". $tip[$rand] ."</a>";
echo '</b></p>';
?>


