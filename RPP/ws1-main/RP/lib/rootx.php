<h2>Route-X-Laemppp</h2>
<p><b>U pripremi</b></p>
<p>(Sve zajedno + custom portovanje i lično mapirana arhitektura)</p>
<p>U ovom članku napravićemo kombinaciju tri http servera. Za sad još uvek ostajemo na stable verziji 
Debiana (squeeze 6.0.6). Koristićemo nginx/0.7.67, apache2 i Simple Python HTTP server kao poslužitelj za npr. 
dokumentaciju. Dodatak će biti PSP (Python Server Pages) skripta koja će služiti za upload velikih datoteka i radiće
na apache2 poslužitelju. Verovatno se pitate šta je svrha kombinovanja tri servera. Pokušaćemo to objasniti na razumljiv
način. Baze koje idu uz route-x laemppp su pgsql i mysql 
(Instalacija i upotreba tih baza opisane su u prethodnom broju kao i u poglavlju lamp i na sledećim adresama </p>
<p>
<a href="http://webserveri.info/forum/viewtopic.php?f=88&t=233">http://webserveri.info/forum/viewtopic.php?f=88&t=233</a>, 
<a href="http://webserveri.info/forum/viewtopic.php?f=88&t=231">http://webserveri.info/forum/viewtopic.php?f=88&t=231</a>, 
<a href="http://webserveri.info/forum/viewtopic.php?f=29&t=4">http://webserveri.info/forum/viewtopic.php?f=29&t=4</a>)</p>
<p>Trenutno stavljamo akcenat na poslužitelje i njihov sinhronizovan rad. Nginx ćemo u ovom slučaju koristiti kao reversni
proxy, mada neki smatraju da je u pitanju forward proxy. Nginx kao veoma moćan poslužitelj koristićemo za statički sadržaj.
A proxy uloga nginx-a u ovom slučaju kao i u laemppp poglavlju biće da obrađuje i prosleđuje dinamičke upite do apache2 
servera u cgi-bin. Ovaj metod je primenljiv naprimer u situaciji kada je nekome jedimo omogućen izlazni port 80 a neophodno 
mu je da koristi ova dva servera. Ne isključujemo mogućnost da nginx radi sa dinamičkim sadržajem već apache2 iznosimo
kao alternativu i na taj način organizujemo procese i dodeljujemo uloge. Ovakav metod je dosta koristan za izmeštanje dva 
tipa sadržaja - dinamičkog i statičkog, tj separaciju jednog od drugog. Samim time dobijamo i mogućnost da ih ponaosob
jail-ujemo u zasebne "sobe". </p> 
<p>Koreni direktorijum za web dokumente biće nam <b>/var/www</b> gde će apache-u to biti default a za nginx napravićemo 
podfolder static <b>/var/www/static</b> gde će se stavljati isključivo statički sadržaj. A za SimpleHTTPServer napravićemo
unutar korisnika folder dokumentacija <b>/var/www/dokumentacija</b> - tom folderu ćemo takođe morati promeniti vlasništvo
u korisnikovo jer ćemo ga pokretati kao korisnik.</p>
<h3>Počnimo</h3>
<p>Prva stvar koju ćemo uraditi je instalacija svih neophodnih paketa. Ulogujte se kao root i instalirajte sledeće pakete:</p>
<pre><code>aptitude install apache2 apache2-doc apache2-utils libapache2-mod-python 
aptitude install libapache2-mod-php5 php5 php5-cgi php5-cli php5-common 
aptitude install php5-mhash php5-curl php5-gd php5-json php5-mcrypt php5-sqlite 
aptitude install php5-mysql php5-dev php5-tidy php5-xmlrpc php5-memcache php5-pspell 
aptitude install php5-xsl mysql-server mysql-client php-pear php5-gd php5-mysql 
aptitude install php5-imagick php5-curl curl phpmyadmin phppgadmin rsync cronolog</code></pre>
<p>Prilikom instalacije mysql servera i phpmyadmina čekirajte opcije koje su neophodne i definišite neophodne lozinke.
Zatim editujte <b>/etc/apache2/sites-available/default</b></p>
<pre><code>nano /etc/apache2/sites-available/default</code></pre>
<p>Sadržaj:</p>
<pre><code>&lt;VirtualHost *:8080&gt;
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www
        &lt;Directory /&gt;
                Options FollowSymLinks
                AllowOverride None
        &lt;/Directory&gt;
        &lt;Directory /var/www/&gt;
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
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
        &lt;Directory /var/www/&gt;
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from all
                AddHandler mod_python .psp
                PythonHandler mod_python.psp | .psp
                PythonDebug On
        &lt;/Directory&gt;
        ErrorLog ${APACHE_LOG_DIR}/error.log
        # Possible values include: debug, info, notice, warn, error, crit,
        # alert, emerg.
        LogLevel warn
        CustomLog ${APACHE_LOG_DIR}/access.log combined
&lt;/VirtualHost&gt;
</code></pre>
<p>Zatim editujte <b>/etc/nginx/sites-available/default</b></p>
<pre><code>nano /etc/nginx/sites-available/default</code></pre>
<p>Sadržaj:</p>
<pre><code>server {
   listen 80 default;
   server_name localhost;
   access_log /home/www/logs/localhost.access.log;
   location / {
      root /home/www/public;
      index index.html index.htm index.php;
   }
  #u slučaju da želite da služite dinamički sadržaj 
  #location ~ \.php$ {
      #fastcgi_pass 127.0.0.1:9000;
      #fastcgi_index index.php;
      #fastcgi_param SCRIPT_FILENAME /var/www$fastcgi_script_name;
      #include fastcgi_params;
   #}
   location ~ .*\\.(py|sh|pl|cgi)$ {
      proxy_pass         http://127.0.0.1:8080;
      proxy_redirect     off;
      proxy_set_header   Host             $host;
      proxy_set_header   X-Real-IP        $remote_addr;
      proxy_set_header   X-Forwarded-For  $proxy_add_x_forwarded_for;
      client_max_body_size       10m;
      client_body_buffer_size    128k;
      proxy_connect_timeout      90;
      proxy_send_timeout         90;
      proxy_read_timeout         90;
      proxy_buffer_size          4k;
      proxy_buffers              4 32k;
      proxy_busy_buffers_size    64k;
      proxy_temp_file_write_size 64k;
  }
}
</code></pre>
<p>Pa radi konflikta nginx-a i apache-a editujte <b>/etc/apache2/ports.conf</b> i izmestite portove apache-a na 8080</p>
<pre><code>nano /etc/apache2/ports.conf</code></pre>
<p>Ova dva reda linija trebaju biti ovako:</p>
<pre><code>NameVirtualHost *:8080
Listen 8080</code></pre>
<p>Zatim napraviti neophodne direktorijume</p>
<pre><code>mkdir /var/www/static
mkdir /var/www/podaci
mkdir /var/www/dokumentacija
</code></pre>
<p>Zatim napraviti .psp skriptu za upload velikih fajlova</p>
<pre><code>nano /var/www/upload.psp</code></pre>
<p>Sadržaj:</p>
<pre><code>&lt;html>
&lt;body>
&lt;%
# Generator bafera za parčiće fajlova
def fbuffer(f, chunk_size=10000):
   while True:
      chunk = f.read(chunk_size)
      if not chunk: break
      yield chunk

if form.has_key('file') and form['file'].filename:
   # Ugnježdeno polje objekta drži fajl
   fileitem = form['file']

   try: # Windows-u je potreban stdio set za binari mod.
      import msvcrt
      msvcrt.setmode (0, os.O_BINARY) # stdin  = 0
      msvcrt.setmode (1, os.O_BINARY) # stdout = 1
   except ImportError:
      pass

   # strip "drži" putanju od imena fajla da bi se sprečili napadi na direktorijum
   fname = os.path.basename(fileitem.filename)

   # gradi apsolutnu putanju do skladišta
   dir_path = os.path.join(os.path.dirname(req.filename), 'podaci')

   f = open(os.path.join(dir_path, fname), 'wb', 10000)

   # Čita fajl iz parčića
   for chunk in fbuffer(fileitem.file):
      f.write(chunk)
   f.close()
message = 'Datoteka "%s" je uspešno uploadovana!' % fname
%&gt;
&lt;p&gt;&lt;%= message %&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=""&gt;Upload-uj sledeću datoteku!&lt;/a&gt;&lt;/p&gt;
&lt;%
else:
   #
%&gt;
&lt;form enctype="multipart/form-data" action="" method="post"&gt;
&lt;p&gt;Fajl: &lt;input type="file" name="file"&gt;&lt;/p&gt;
&lt;p&gt;&lt;input type="submit" value="Upload-uj"&gt;&lt;/p&gt;
&lt;/form&gt;
&lt;%
#
%&gt;
&lt;/body&gt;</code></pre>
<p>Sada restartujte servere i promenite vlasništvo i neophodne dozvole nad fajlovima i (pod)direktorijumima:</p>
<code><pre>chown -R www-data:www-data /var/www/
chown -R korisnik:korisnik /var/www/dokumentacija
chmod +x /var/www/upload.psp
/etc/init.d/apache2 restart
/etc/init.d/nginx restart
</pre></code>
<p>Zatim se izlogujte iz root korisnika komandom <em>exit</em> i uđite u folder <b>/var/www/dokumentacija</b></p>
<code><pre>cd /var/www/dokumentacija
python -m SimpleHTTPServer</pre></code>
<p>Rezultat ukoliko je sve u redu:</p>
<p>Na adresi <a href="http://localhost">http://localhost</a> nalazi se Vaš statički (nginx) sadržaj sa doc root (/var/www/static)</p>
<p>Na adresi <a href="http://localhost:8080">http://localhost:8080</a> nalazi se Vaš dinamički (apache) sa doc root (/var/www)</p>
<p>Na adresi <a href="http://localhost:8000">http://localhost:8000</a> nalazi se Vaša dokumentacija (simplepyhttp...) sa doc root (/var/www/dokumentacija)</p>
<p>A nginx radi kaoi proxy npr u ovoj situaciji: <a href="http://localhost/cgi-bin/skripta.cgi">http://localhost/cgi-bin/skripta.cgi</a></p>


