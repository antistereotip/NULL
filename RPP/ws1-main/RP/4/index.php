<?php 
if (@ini_set('zlib.output_compression',TRUE) ||
    @ini_set('zlib.output_compression_level',2)) 
	{
    	ob_start();
	} else {
    		ob_start('ob_gzhandler');
		}
		require_once 'setup/fnc.php'; engine_up(); 
if(extension_loaded('zlib')) {ob_end_flush();} 
?>

