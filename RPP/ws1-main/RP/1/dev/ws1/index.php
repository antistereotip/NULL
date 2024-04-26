<?php 
require_once 'inc/funkcije.php'; 
$home='current'; 
$second='normall'; 
$contact='normall'; 
require_once 'inc/misc/header.php'; 

org("org", "antistereotip", "AntiStereotip | presents", "media/png/antistereotip.png",
"AntiStereotip je pre svega način razmišljanja... Projekat je otvorenog koda (open source) i svi ste pozvani u razvoj... Postoje predrasude i stereotipi, stoga su i kreirani standardi. Svi učestvuju u standardu, stereotipu ili predrasudi - posredno ili neposredno, time potpomažući ovaj nakaradni sistem...",
"Url", "http://webserveri.info/RP/?q=antistereotip", "forum", "#ne", "RetroPort", "#da");

org("org", "webserveri", "WebServeri | org", "media/png/wlogo.png", 
"WebServeri(WS1) je projekat otvorenog koda, baziran na efikasnoj podršci, vanstandardnom dizajnu, brzini, sigurnosti... Zajednica predstavlja skup ljudi koji entuzijazmom i radom promovišu otvoreni kod u domenu zajedničkog znanja i interesovanja.", 
"Url", "http://webserveri.info", "forum", "http://webserveri/forum", "RetroPort", "http://webserveri/RP"); 
 
rank("rank", "WebServeri | PageRank", "webserveri-review-pr", "media/png/wlogo.png", "Url", "http://webserveri.info", "Rank stranice WebServeri.INFO", "4 od 10", "&#x2605;&#x2605;&#x2605;&#x2605;&#x2606;&#x2606;&#x2606;&#x2606;&#x2606;&#x2606;", "Proveravao", "hightech", "Datuma", "2013-03-19", "Via", "http://www.prchecker.info/", "http://pr.prchecker.info/getpr.php?codex=aHR0cDovL3dlYnNlcnZlcmkuaW5mbw==&tag=1");

rank("rank", "ZDroidBlog | PageRank", "zdroidblog-review-pr", "media/png/nginz.png", "Url", "http://zdroidblog.info", "Rank stranice ZDroidBlog.INFO", "3 od 10", "&#x2605;&#x2605;&#x2605;&#x2606;&#x2606;&#x2606;&#x2606;&#x2606;&#x2606;&#x2606;", "Proveravao", "ZDroid", "Datuma", "2013-03-19", "Via", "http://www.prchecker.info/", "http://pr.prchecker.info/getpr.php?codex=aHR0cDovL3pkcm9pZGJsb2cuaW5mbw==&tag=1");

org("org", "zdroidblog", "ZDroidBlog | org", "media/png/nginz.png", "opis", "Url", "http://zdroidblog.info", "forum", "http://webserveri/forum", "NginZ", "http://nginz.zdroidblog.info"); 

require_once 'inc/misc/footer.php'; 
?>

