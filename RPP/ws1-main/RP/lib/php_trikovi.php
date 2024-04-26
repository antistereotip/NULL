<h2>PHP Trikovi</h2>
<h3>Kompresija html sadržaja</h3>
<pre><code>&lt;?php 
if(extension_loaded('zlib')) 
	{ob_start('ob_gzhandler');} 
	header("Content-type: text/html"); 
	require_once "include/zaglavlje.php";
	require_once "lib/sadrzaj.php";
	require_once "include/fusnota.php";
if(extension_loaded('zlib'))
	{ob_end_flush();}
?&gt;</code></pre>
</div>
