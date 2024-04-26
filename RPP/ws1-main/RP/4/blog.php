<?php 
if (@ini_set('zlib.output_compression',TRUE) ||
    @ini_set('zlib.output_compression_level',2)) 
	{
    	ob_start();
	} else {
    		ob_start('ob_gzhandler');
		}

require_once 'setup/hdr_contact.php';?>
<div class="sixteen columns">

<h1>Blog</h1>
<div class="two-thirds column">
<h4>&#8976; Blog &not; </h4>
<p>Status: Under construction!</p>
</div>

<div class="one-third column">
<h4>&#8976; FeedBack &not; </h4>
<p>office@webserveri.info<br />
antistereotip@webserveri.info<br />
zdroid@webserveri.info
</p>

<h4>&#8976; Dev &not; </h4>
<p>https://github.com/webserveri<br />
https://github.com/hightech007<br />
https://github.com/ZDroid
</p>

<h4>&#8976; Social &not; </h4>
<p>https://twitter.com/webserveri
</p>

</div>

<!-- kraj organizacija, adresa -->
</div>
<?php require_once 'setup/ftr.php';
if(extension_loaded('gzip')){ob_end_flush();} ?>
