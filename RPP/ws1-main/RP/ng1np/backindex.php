<?php 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
header("Content-type: text/html"); 
require_once "include/zaglavlje.php"; 

$str = $_GET['q']; 
switch ($str) {
	case 'ng1np':	        
		include 'lib/'.$str.'.php'; 
		
	break;
	default:
		include 'lib/home.php';
	}

require_once "include/fusnota.php";
if(extension_loaded('zlib')){ob_end_flush();}
?>
