<?php 
require_once 'inc/funkcije.php'; 

head("sr-RS", "WebServeri, projekat otvorenog koda, serveri, brzina, AntiStereotip, Oklop , hosting, ZDroidBlog, Libre, Programiranje, Web dizajn, pagerank ...",
 "WebServeri(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti... Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja.","normall", "normall", "normall", "current", "normall", "normall");
reklame_com('../../media/reklame/com');


?>
<article class="kontakt">
<h1 class="h3dr">Pretražite #Down:</h1>
<form><label><input type="text" size="20" onkeyup="showResult(this.value)"><div id="livesearch"></div></label></form>
</article>

<?php
org("ws1rank", "webserveri", "Down | Koncept | Dokumentacija", "../../media/ng1np.png", 
"Reč tima:", 
"fast == forum_antistereotip_false<a name='fast'></a>", "Down#fast", "arp == antistereotip_retroport_true<a name='arp'></a>", "Down#arp",
 "fws1 == forum_webserveri_true<a name='fws1'></a>", "Down#fws1"); 



require_once 'inc/misc/footer.php'; 
?>



