
<p>
<svg version="1.1"
  width="120" height="85" 
  xmlns="">
  <image stroke="#000" cx="50%" cy="50%" rx="50%" ry="50%"
	id="testimg1" xlink:href="../../media/ws1/ng1np.png"
	width="80" height="80" style="float: left;"/>
</svg>
</p>
<p>
Predstavljamo<br />
=============<br />
<span>3Ngin3^UP</span> <b>» ng1np ® «</b> je "engine" otvorenog koda, baziran na efikasnosti, 
vanstandardnom dizajnu, brzini, sigurnosti, fleksibilnosti, jednostavnosti...
</p>
<p>

-------------------------------------------<br />
ng1np_backp0rts - TestZone - UP devZone<br />
<b>direktan link:</b><br /> 
<a href="http://webserveri.info/RP/ng1np/" style="font-size: 11px;">
http://webserveri.info/ng1np/</a><br />
<a href="http://webserveri.info/RP/ng1np/?q=svg" style="font-size: 11px;">
http://webserveri.info/ng1np/?q=svg</a><br />
<b>git:</b><br />
<a href="https://github.com/hightech007/ng1np_backports" style="font-size: 11px;">
https://github.com/hightech007/ng1np_backports</a><br />
----------------------------------------------
</p>

<p>
Sour_Ce Code<br />
<a href="https://github.com/hightech007/ng1np" style="font-size: 11px;">https://github.com/hightech007/ng1np</a><br />

General <span>Set_UP</span> ng1np<br />
<a href="https://github.com/hightech007/ng1np/blob/master/README" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/README
</a><br />

Set_UP <span style="color: orange">ng1np_UP</span><br />
<a href="https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up_setup.txt" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up_setup.txt</a><br />

SourCe <span style="color: orange">ng1np_UP</span><br />
<a href="https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up.psp" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up.psp</a><br />

Scalable Vector Graphics <em>[ ng1np's ® blue circle ]</em><br />
<a href="https://github.com/hightech007/ng1np/blob/master/lib/svg.php" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/lib/svg.php</a><br />

Please <b>fork this!</b>
</p>

<p>
Karakteristike<br />
==============<br />
<b>1.</b> Lagan<br />
<em>2.</em> Jednostavan<br />
<span>3.</span> Brz<br />
<b>4.</b> Siguran<br />
<span>5.</span> Proširiv<br />
<em>6.</em> Moderan (html5, css3)<br />
...
</p>
<p>Izvorni kod<br />
===========<br />
<a href="https://github.com/hightech007/ng1np">https://github.com/hightech007/ng1np</a>
</p>

<p>
Setup<br />
=====<br /></p>
<pre><code>su
cd /var/www
git clone https://github.com/hightech007/ng1np
chown -R www-data:www-data /var/www</code></pre>

<p>» ng1np ® «</p>
<p>
Set_UP ng1np_UP dt-tr <br />
<a href="https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up_setup.txt" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/etc/ng1np_up_setup.txt
</a>
</p>

<p>
SVG [ ng1np's ® blue circle ]<br />
<a href="https://github.com/hightech007/ng1np/blob/master/lib/svg.php" style="font-size: 11px;">
https://github.com/hightech007/ng1np/blob/master/lib/svg.php
</a>
</p>

<p>
Generalno<br />
=========<br /></p>
<p>Ng1np ® je objavljen pod <b>PostgreSQL licencom.</b> Pogledajte LICENSE za više informacija.</p>
<a href="https://github.com/hightech007/ng1np/blob/master/LICENSE">https://github.com/hightech007/ng1np/blob/master/LICENSE</a>


<p>
Ideja<br />
=====<br />
Krenucu od prostog objasnjenja kako i lynx-om koristiti engine-up.<br />
<b>?q=</b><em>ime_stranice</em> ili <b>/?q=</b><em>ime_stranice</em> <br />
<b>?q=</b> kao dinamicki upit gde <em>"q"</em> predstavlja jedinstveni upit ili jedinstveni identifikator.<br /> 
primer:<br /> 
<a href="http://webserveri.info/RP/?q=ng1np">http://webserveri.info<b>?q=ng1np</b></a><br />
ili<br />
<a href="http://webserveri.info/RP/?q=serveri">http://webserveri.info<b>/?q=serveri</b></a><br />
Dakle, ideja je da postoji jedinstven <b>"q"</b> - upit ili identifikator bez preteranog komplikovanja.<br /> 
Stranice se nalaze u <em>lib</em> folderu i svaka ima naziv upita(stranice) + php ekstenziju koja je ustvari<br />
npr. <b>serveri.php</b> ili <b>ng1np.php</b> . Switch uslovljavanje rešava da li će se ili ne neka strana load-ovati. <br />
U index.php postoji switch naredba koja tacno definise saobraćaj.<br /> 
Dolazimo do zakljucka da svaka strana koju stavite u <b>lib</b> i omogućite je  switch uslovom biće loadovana pozivanjem upita<br /> 
<b>/?q=ime_stranice</b>.<br />
Ako npr. koristite lynx, a neophodan vam je neki sadrzaj, sve što trebate znati je ime stranice koju trazite na toj adresi.<br /> 
Pristupićete npr. stranici <b>gnu_linux (gnu_linux.php)</b> komandom:<br />
<pre><code>lynx http://webserveri.info/?q=gnu_linux</code></pre>
<p>ili</p>
<pre><code>lynx http://webserveri.info?q=gnu_linux</code></pre>
</p>

<p>
Konzola za debagovanje<br />
======================<br />
<b>ng1np ®</b> je u razvoju, stoga se mole mudri ljudi da ga testiraju upotrebom i pošalju eventualan <em>feedback</em> na 
<b>office@webserveri.info</b>,ukoliko postoje propusti :)<br /><br />
Debug <span>first</span> point - preporuka :: <b>lynx</b> ::<br />
-------------------<br />
index.php<em>?q=page</em> <br />
<em>?q=page</em><br />
<em>?q=inj</em> - (1=1,0o0,pera_idijot i druge ninje,1!=1) 
</p>

<p>
Kontakt<br />
=======<br />
IRC: <b>irc.freenode.net #webserveri</b>
</p>

<p>
Razvojni tim<br />
============<br />
<em>[0]</em> <b>Milutin Gavrilović</b> office [at] webserveri [dot] info - FOUNDER<br />
<em>[1]</em> <b>Zlatan Vasović</b> zdroid [at] zdroidblog [dot] info - SUCCESSOR
</p>

