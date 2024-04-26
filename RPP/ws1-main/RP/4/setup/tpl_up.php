<?php
echo '<div class="sixteen columns">';

echo '<h1>'.$title.'</h1>';

	echo '<div class="one-third column">
	<a href="'.$url.'" class="button" style="text-decoration:none;">'.$title.'</a><br />
	<a href="'.$img.'" target="__blank"><img src="../../'.$img.'" width="120px" height="auto" id="leva_slika"></a>
	</div>';
	echo '<div class="two-thirds column">
	<p><pre><a href="'.$ext_url.'" style="text-decoration:none;">'.$ext_url.'</a>
	'.$desc.'</pre></p>	
	</div>';

echo '
</div>
</body>
</html>
';
?>

