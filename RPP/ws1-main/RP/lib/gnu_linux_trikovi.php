<h2>GNU/Linux trikovi</h2>

<div id="bekap_trik">
<h3>Bekap podataka</h3>
<p>tarball</p>
<pre><code>tar -czpf bekap.tar.gz /home/www/</code></pre>
<p>ili bash skripta sa dve spojene komande (<b>bekap.sh</b>)</p>
<pre><code>#!/bin/sh
# kreiraj tarball, zatim kopiraj u bekap folder
tar -czpf bekap.tar.gz /home/www/public/
cp /putanja/do/bekap.tar.gz /home/www/bekap/
# kraj skripte</code></pre>
<p>zatim dozvole za tu skriptu</p>
<pre><code>chmod u+x /putanja/do/bekap.sh</code></pre>
<p>pokretanje</p>
<pre><code>sh /putanja/do/bekap.sh</code></pre>
</div>

<div id="tilda">
<h3>Brisanje podataka</h3>
<p>neki od vas verovatno znaju sta su i čemu služe fajlovi koji sadrže posle ekstenzije <b>~</b> (tilda). Ova komanda briše sve takve fajlove<p>
<pre><code>find /home -name "*~" -print -exec rm -f {} \;</code></pre>
<p>ajmo sad sve .pdf dokumente pobrisati iz /home foldera</p>
<pre><code>find /home -name "*.pdf" -print -exec rm -f {} \;</code></pre>
<p>sad ćemo pobrisati sve fajlove i podfoldere unutar foldera <b>/home/korisnik/Downloads</b></p>
<pre><code>rm -rf /home/korisnik/downloads/*</code></pre>
</div>

<div id="izrazi">
<h3>Regularni izrazi</h3>
<p></p>
<pre><code>ls Documents/au*</code></pre>
<p>ukoliko npr. imate folder <b>audio</b> u folder <em>Documents</em> ili <b>automobili</b>, ls ce izlistati sve sto počinje na <b>au</b>, ili ...</p>
<pre><code>ls Documents/bek*</code></pre>
<p><b>*</b> je joker i zamenjuje ili "imitira" ostatak imena fajla ili foldera, te stoga ukoliko niste sigurni kako vam se zove neki fajl, koristite joker-a.</p>

<p>
... echo `lynx -dump "http://news.bbc.co.uk"`. ; ...
</p>
