<?php 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
header("Content-type: text/html"); 
require_once "include/nzaglavlje.php"; 
require_once 'lib/ng1np.php';
require_once "include/nfusnota.php";
if(extension_loaded('zlib')){ob_end_flush();}
?>
