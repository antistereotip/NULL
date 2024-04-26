<?php
echo '
<div class="sixteen columns powered">
	<img src="../../media/unix.png" width="45" height="auto" alt="unix">
	<img src="../../media/gnu.png" width="35" height="auto" alt="gnu">
	<img src="../../media/tux.png" width="30" height="auto" alt="linux">
	<img src="../../media/nginx.png" width="90" height="auto" alt="nginx">
	<img src="../../media/apache.gif" width="80" height="auto" alt="apache">
	<img src="../../media/python.gif" width="100" height="auto" alt="python">
	<img src="../../media/php.png" width="50" height="auto" alt="php">
	<img src="../../media/mysql.png" width="60" height="auto" alt="mysql">
	<img src="../../media/neo4j.png" width="80" height="auto" alt="neo4j">
	<img src="../../media/pgsql.png" width="35" height="auto" alt="pgsql">
	<img src="../../media/ws1baner212x72.png" width="90" height="auto" alt="ws1">
	<img src="../../media/Oklop.png" width="80" height="auto" alt="oklop">

</div>

<div class="sixteen columns">
	<p>Status: Under construction.</p>
</div>

<div class="sixteen columns">
	<h1>Commands</h1>
	<p style="margin-bottom: 10px;padding: 0px 0px 10px 20px;">';
	while($red = $rezultat->fetch_assoc()) {
		echo '<a href="?up='.$red['title'].'" class="button" style="text-decoration:none;margin:0.5%;">'.$red['title'].'</a>'; 
	}
echo '
	</p>
</div>

<div class="sixteen columns">
	<h2>&#8976; About WebServeri  &not;</h2>
	<p><img src="../../media/ws1baner212x72.png" width="150" alt="ws1"></p>
	<p>WebServer1(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti ...  Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja.  Dinamička strana našeg sajta je forum koji između ostalog nije samo forum već i baza znanja. WS1 predstavlja projekat i ideju nekolicine entuzijasta. Ambicija razvojnog tima je da se približi korisničko okruženje samom korisniku i da postoji semantička strana , kao i neuronski sklop čitave aplikacije. To bi omogućilo korisniku visok nivo korisničkog doživljaja UX (User Experience).  WebServeri Vam izlazi u susret sa različitim idejama povezanim u kompaktnu celinu.  Sajt je i dalje u konstantnom razvoju, što multiplicira niz radikalnih promena, što u korisničkom okruženju, što u samom kodu. Trudićemo se da nastavimo taj trend. Ali za nostalgiju prema starijem okruženju, ostavili smo forum , koji je na istoj adresi i on se neće menjati.  Takođe jedna važna stvar je Retro Port ili RPdir RP gde će se nalaziti sve prethodne verzije ws1 engine-a. RPdir je trenutno u fazi rekonstrukcije!!!</p>
</div>

</body>
</html>
';
?>

