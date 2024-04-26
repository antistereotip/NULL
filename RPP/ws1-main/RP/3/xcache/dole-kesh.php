<?php
// Keshira sadrzaj u fajl
$keshirano = fopen($keshfajl, 'w');
fwrite($keshirano, ob_get_contents());
fclose($keshirano);
ob_end_flush(); // Salje output browser-u
?>
