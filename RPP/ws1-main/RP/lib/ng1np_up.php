<h2>» Ng1np_up transfer_data «</h2>
<p>Neophodni paketi:</p>
<pre><code>aptitude install apache2 apache2-doc apache2-utils libapache2-mod-python</code></pre>
<p>apache2 konfiguracija:</p>
<pre><code>nano /etc/apache2/sites-available/default</code></pre>
<p>Sadržaj:</p>
<pre><code>&lt;VirtualHost *:8080&gt;
        ServerAdmin webmaster@localhost

        DocumentRoot /home/www
        &lt;Directory /&gt;
                Options FollowSymLinks
                AllowOverride None
        &lt;/Directory&gt;
        &lt;Directory /home/www/psp&gt;
                Options Indexes FollowSymLinks MultiViews
                AllowOverride None
                Order allow,deny
                allow from all
        &lt;/Directory&gt;

        &lt;Directory /home/www/psp&gt;
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
&lt;/VirtualHost&gt;</code></pre>
<p>Portovi:</p>
<pre><code>nano /etc/apache2/ports.conf</code></pre>
<p>Izmeniti samo dve linije:</p>
<p>pre izmene:</p>
<pre><code>NameVirtualHost *:80
Listen 80</code></pre>
<p>posle izmene:</p>
<pre><code>NameVirtualHost *:8080
Listen 8080</code></pre>
<p>Sačuvati i napraviti psp direktorijum i python server pages skriptu:</p>
<pre><code>mkdir -p /home/www/psp
mkdir /home/www/psp/podaci
nano /home/www/psp/ng1n-up.php</code></pre>
<p>Sadržaj:</p>
<pre><code>&lt;html&gt;
&lt;body&gt;
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
&lt;p&gt;Fajl: &lt;input type="file" name="file">&lt;/p&gt;
&lt;p&gt;&lt;input type="submit" value="Upload-uj">&lt;/p&gt;
&lt;/form&gt;
&lt;%
#
%&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<p>Ownership i restart apache-a:</p>
<pre><code>chown -R www-data:www-data /home/www/public/psp
/etc/init.d/apache2 restart</code></pre>
<p>Adresa:</p>
<p><a href="http://localhost:8080/ng1np-up.psp">http://localhost:8080/ng1np-up.psp</a></p>
<p><img src="../media/ng1np_up.png"></p>
<p>nastavice se ...</p>
<p>:)</p>
