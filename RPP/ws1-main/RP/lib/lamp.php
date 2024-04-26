<h2>Lamp</h2>
<p><b>Napomena:</b> Isključićemo upotrebu root naloga i zamenićemo ga korišćenjem sudo komande iz sumanutih razloga...</p>

<p>Prvo, par neophodnih paketa:</p>
<pre><code>sudo aptitude install apache2 mysql-server php5 php-pear php5-gd 
php5-mysql php5-imagick php5-curl curl phpmyadmin rsync cronolog 
libapache2-mod-php5 libapache2-mod-python</code></pre>

<p>Prilikom instalacije ovih paketa zatraziće vam da osigurate <b>MYSQL server</b> root lozinkom, kao i da podesite phpmyadmin
(apache2 [ ] - chekirajte), zatim kada ponudi sledeću opciju:  Configure database for phpmyadmin with dbconfig-common? 
&lt;Yes&gt;  &lt;No&gt;, izaberite &lt;No&gt; i to je to.</p>

<p>Podrazumevani web folder je <b>/var/www</b>, za sada ćemo ga i ostaviti tako da ne dodje do zabune na startu.</p>
<p>Napraviti fajl <em>phpinfo.php</em></p>

<pre><code>sudo nano /var/www/phpinfo.php
</code></pre>

<p>i ubaciti sledeći sadržaj:</p>
<pre><code>&lt;?php
echo phpinfo();
?&gt;
</code></pre>
<p>Promeniti vlasništvo (ownership) nad folderima i datotekama (rekruzivno)</p>
<pre><code>sudo chown -R www-data:www-data /var/www</code></pre>
<p>Zatim ćemo promeniti dozvole nad folderima i datotekama (rekruzivno)</p>
<pre><code>sudo chmod -R 755 /var/www</code></pre>
<p>Restartujmo server za svaki slučaj, jer nekada se ne razreše procesi dok se ne uradi restart:</p>
<pre><code>sudo /etc/init.d/apache2 restart</code></pre>
<p>Sadrzaj funkcije phpinfo() - <b>phpinfo.php</b> se nalazi na lokaciji u browseru, sa "document root" /var/www/ - </p>
<p><a href="http://localhost/phpinfo.php">http://localhost/phpinfo.php</a></p>
<p>Sada ćemo trenutno ostaviti folder <b>/var/www</b> i kreirati folder <b>/home/korisnik/htdocs</b> ukoliko ne postoji 
kao podrazumevani (na Crunchbang-u postoji) i linkovati ga simboličkim linkom iz <b>/var/www</b></p>
<pre><code>
sudo mkdir /home/korisnik/htdocs
cd /var/www
sudo ln -s /home/korisnik/htdocs korisnik
</code></pre>
<p>Pošto se trenutno nalazimo u folderu <b>/var/www</b> , tu postoji <b>index.htlm</b> po defaultu i <b>phpinfo.php</b> koj 
smo napravili, a sada postoji i "folder" linkovan ka <b>/home/korisnik/htdocs</b>. Tu se za sada priča sa <b>/var/www</b> 
završava i nas sada zanima samo <b>/home/korisnik/htdocs</b></p>
<p>Napravićemo fajl <b>index.php</b> koj se treba naći u <b>/home/korisnik/htdocs</b></p>
<pre><code>sudo nano /home/korisnik/htdocs/index.php</code></pre>
<p>Sadržaj:</p>
<pre><code>&lt;?php
echo 'Ovo je naš lični korisnički direktorijum na apache web serveru';
?&gt;
</code></pre>
<p>Izmenićemo dozvole i ownership (vlasništvo) nad folderom <b>/home/korisnik/htdocs</b> (rekruzivno):</p>
<pre><code>sudo chown -R www-data:www-data /home/korisnik/htdocs
sudo chmod -R 755 /home/korisnik/htdocs
</code></pre>
<p>I sada se naš "korisnički" web direktorijum <b>/home/korisnik/htdocs</b> nalazi na lokaciji:</p>
<p><a href="http://localhost/korisnik/">http://localhost/korisnik/</a></p>
<p>Sada da konfigurišemo <b>phpmyadmin</b>-a, jer smo prilikom instalacije paketa i nega uključili...<br />
Odradićemo samo par linija u terminalu:</p>
<pre><code>sudo cp /etc/phpmyadmin/apache.conf /etc/apache2/sites-available/phpmyadmin
sudo ln -s /etc/apache2/sites-available/phpmyadmin /etc/apache2/sites-enabled/phpmyadmin
</code></pre>
<p>Pa ćemo restartovati apache:</p>
<pre><code>sudo /etc/init.d/apache2 restart</code></pre>
<p>I naš <b>phpmyadmin</b> se nalazi na adresi:</p>
<p><a href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a></p>
<p>Sledeći korak je <b>MySQL</b> sigurna instalacija:</p>
<pre><code>sudo mysql_secure_installation</code></pre>

<p>Ukucaćemo root lozinku za mysql koju smo definisali malopre prilikom instalacije svih paketa, pa: </p>
<pre><code>
Remove anonymous users? [Y/n] y
 ... Success!
Disallow root login remotely? [Y/n] y
 ... Success!
Remove test database and access to it? [Y/n] y
 - Dropping test database...
Reload privilege tables now? [Y/n] y
 ... Success!
</code></pre>
<p>
Samo još jedna stvar pre nego se ulogujemo u <em>phpmyadmin</em> okruženje - kreiraćemo korisnika i dati mu dozvole 
samo nad njegovom bazom:<br />
Prvo ćemo se ulogovati kroz terminal u naš root-mysql shell:</p>
<code>sudo mysql -u root -p</code>

<p>Ukucajmo našu root lozinku i dobićemo ovakav odzivnik:</p>
<pre><code><b>mysql&gt;</b></code></pre>

<p>U kodu ispod ćemo napraviti bazu, korisnika te baze (kucaćemo samo posle odzivnika <b>"<em>mysql&gt;</em>"</b> i odrediti mu 
privilegije nad tom bazom:</p>
<pre><code>mysql&gt; CREATE DATABASE korisnikova_baza;
mysql&gt; CREATE USER 'korisnik_baze' IDENTIFIED BY 'lozinka_korisnika_baze';
mysql&gt; GRANT ALL PRIVILEGES ON korisnikova_baza.* TO 'korisnik_baze';
mysql&gt; exit;
</code></pre>
<p><em>DONE!</em><br />Sada se na adresi: <b>http://localhost/phpmyadmin</b> ulogujmo sa -<br />
user: <b>korisnik_baze</b><br />
pass: <b>lozinka_korisnika_baze</b><br />
I možemo koristiti našu <b>mysql</b> bazu podataka!!!<br />
Zatim ćemo uraditi još jednu stvar koja će nam olakšati razumevanje našeg web foldera:</p>
<pre><code>
cd /var/www
sudo rm -rf index.html
sudo mkdir phpmyadmin
sudo chown -R www-data:www-data /var/www
sudo chown -R www-data:www-data /home/korisnik/htdocs
sudo chmod -R 755 /var/www
sudo chmod -R 755 /home/korisnik/htdocs
</code></pre>

<p>Sada otvorimo u browseru adresu:</p>
<p><a href="http://localhost">http://localhost</a></p>
<p>I ne zaboravimo da /home/<b>korisnik</b>/htdocs zamenimo sa /home/<b>ime_naseg_korisnika</b>/htdocs</p>
<p><b>1.2 custom apache konfiguracija</b></p>
<p>Sada ćemo malo zaviriti u apache-ovu konfiguracionu datoteku i dodati podršku za python, perl, cgi, bash kroz CGI 
(common gateway interface), ali pre toga da napravimo još <b>cgi-bin</b> direktorijum:</p>
<pre><code>sudo mkdir /var/www/cgi-bin	
</code></pre>

<p>Primetili ste da se izmeđustalog izmeštamo iz direktorijuma <b>/var/www</b> koj će i dalje ostati kao koreni direktorijum
(doc root), a trenutno ćemo se fokusirati na folder <b>/var/www/cgi-bin/</b>, a kasnije ćemo i objasniti zašto..<br />
Apache konfiguraciona datoteka za vhost <b>/etc/apache2/sites-available/default</b> izgleda ovako:</p>

<pre><code>
&lt;VirtualHost *:80>
	ServerAdmin webmaster@localhost

	DocumentRoot /var/www
	&lt;Directory /&gt;
		Options FollowSymLinks
		AllowOverride None
	&lt;/Directory&gt;
	&lt;Directory /var/www/>
		Options Indexes FollowSymLinks MultiViews
		AllowOverride All
		Order allow,deny
		allow from all
	&lt;/Directory&gt;

        ScriptAlias /cgi-bin/ "/var/www/cgi-bin/" 
	&lt;Directory /var/www/cgi-bin/&gt;
		AllowOverride None
		Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
                AddHandler cgi-script .cgi .pl .py .sh
		Order allow,deny
		Allow from all
	&lt;/Directory&gt;

	ErrorLog ${APACHE_LOG_DIR}/apache2.error.log

	# Possible values include: debug, info, notice, warn, error, crit,
	# alert, emerg.
	LogLevel warn

	CustomLog ${APACHE_LOG_DIR}/apache2.access.log combined
&lt;/VirtualHost&gt;</code></pre>
<p>
Sada ćemo ući u dir <b>/var/www/cgi-bin</b> i napraviti 3 fajla (.pl .py .sh)</p>
<code>
cd /var/www/cgi-bin<br />
sudo nano test.pl
</code>
<p>
<em>test.pl</em> izgleda ovako</p>
<code>
#!/usr/bin/perl<br />
print "Content-type: text/html\n\n";<br />
print "perl kroz CGI!"; 
</code>
<p>
Zatim test.py</p>
<code>
sudo nano test.py
</code>
<p>
<em>test.py</em> izgleda ovako:</p>
<code>
#!/usr/bin/env python<br />
print "Content-Type: text/html"<br />
print<br />
print """\<br />
&lt;html&gt;<br />
&lt;head&gt;&lt;title&gt;py-cgi&lt;/title&gt;&lt;/head&gt;<br />
&lt;body&gt;<br />
&lt;h2&gt;python kroz CGI!&lt;/h2&gt;<br />
&lt;/body&gt;<br />
&lt;/html&gt;<br />
"""
</code>
<p>
Zatim test.sh</p>
<code>
sudo nano test.sh
</code>
<p>
<em>test.sh</em> izgleda ovako:</p>
<code>
#!/bin/bash<br />
echo "Content-Type: text/plain"<br />
echo<br />
echo "Datum i vreme:"<br />
date
</code>
<p>
Pre pokretanja uradićemo sledeće procedure:</p>
<code>
sudo chmod -R 755 /var/www/<br />
sudo chown -R www-data:www-data /var/www/<br />
sudo /etc/init.d/apache2 restart
</code>
<p>
Skripte u <b>/var/www/cgi-bin</b> se nalaze na adresama:<br />
<a href="http://localhost/cgi-bin/test.pl">http://localhost/cgi-bin/test.pl</a><br />
<a href="http://localhost/cgi-bin/test.py">http://localhost/cgi-bin/test.py</a><br />
<a href="http://localhost/cgi-bin/test.sh">http://localhost/cgi-bin/test.sh</a>
</p>

