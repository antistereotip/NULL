<?php
echo '
	<div class="sixteen columns">
	<h1>NO</h1>';
	echo '<p>';
	printf("<b>$up</b> ne postoji u bazi! Pokušajte sa ispravnim upitom! %s\n", $mysqli->error);
	echo '</p>
</div>

</body>
</html>
';
?>

