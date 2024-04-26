<?php
$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$fajl = $break[count($break) - 1];
$keshfajl = 'xcache/cache/keshiran-'.substr_replace($fajl ,"",-4).'.html';
$keshtime = 18000;

// Servira iz kesha ako je mladje od $keshtime
if (file_exists($keshfajl) && time() - $keshtime < filemtime($keshfajl)) {
    echo "<!-- Keshirana kopija, generisana ".date('H:i', filemtime($keshfajl))." -->\n";
    include($keshfajl);
    exit;
}
ob_start(); // Startuje output buffer
?>
