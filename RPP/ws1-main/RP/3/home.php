<?php 

// kompresija zlib ext. 
if(extension_loaded('zlib')) {ob_start('ob_gzhandler');} 
// definisi varijable za kljucne reci i opis sajta
$desc = 'Sve o serverima i programiranju. Serve or die :) WS1 je projekat otvorenog koda. JOIN US!!!';
$keywords = 'serveri, web serveri, file serveri, irc serveri, ftp serveri, programiranje, dizajn, gnu, linux, unix, kompjuteri, etc, sistem, freebsd, community, linux zajednica, hosting, vps';
// aktiviraj zaglavlje
require_once 'setup/zaglavlje.php';
require_once 'setup/funkcije.php';
require_once 'setup/ng1np.php';
?>

<section>
	<article>
		<?php engine_up();  ?>
	</article>

	<aside>
		<?php oblak(); ?>
	</aside>
</section>

<?php
require_once 'setup/fusnota.php'; 
if(extension_loaded('zlib')){ob_end_flush();} 

?>
