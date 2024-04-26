<h2>Audio stream server Gnump3d</h2>
<p>
Sa zvanicne download stranice <a href="http://www.gnu.org/software/gnump3d/download.html">www.gnu.org</a> preuzeti
<b>gnump3d-3.0.tar.gz</b> paket i raspakovati sledecom komandom u <b>/opt</b><br />
za ovu proceduru potrebno je koristiti root ovlascenja! ulogujte se kao root (podrazumeva se da ste prethodno skinuli datoteku 
i da se nalazi u <b>/home/korisnik/Downloads</b>):</p>
<code>
su<br />
mv /home/korisnik/Downloads/gnump3d-3.0.tar.gz /opt<br />
tar xzvf gnump3d-3.0.tar.gz<br />
cd gnump3d-3.0<br />
make install
</code>

<p>Pre pokretanja servera prvo cemo ga konfigurisati. konfiguraciona datoteka se nalazi u <b>/etc/gnump3d/gnump3d.conf</b>
<br />postoje dve stvari koje se moraju uraditi pre pokretanja servera:<br />
port, koj odlucuje gde ce server "slusati"... default port je 8888, mozete ga promeniti ako hocete.
root, putanja (doc root) gnump3d gde ce biti smesteni fajlovi za stream... te linije izgledaju ovako:</p>
<code>
port = 8888<br />
root = /home/korisnik/muzika
</code>

<p>gnump3d pokrecete komandom:</p>
<code>gnump3d &amp;</code>
<p>...ili u <b>/etc/rc.local</b> pre <b>exit 0;</b> ubacite sledeci red, da server krene na startup-u:</p>
<code>gnump3d &amp;</code>
<p>audio stream server "servira" na adresi:</p>
<p><a href="http://localhost:8888">http://localhost:8888</a></p>

