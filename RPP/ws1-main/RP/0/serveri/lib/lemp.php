<article>
<h2>Lemp</h2>
<p>
Krenimo od pretpostavke da nemamo nijedan server, znači LEMP pravimo kao jedino 
rešenje bez apache-a, objasnićemo i zašto (konflikt izmedju portova - razrešenje u poglavlju 3. LAEMPPP) , za sada 
se fokusirajmo na LEMP (Linux, [E]Nginx, Mysql, Php, Python, Perl)…
Napomena: php-fastcgi je testiran na Debian Squeeze 6.0.5, 6.0.6, Crunchbang 10, Ubuntu 10.04, Kubuntu 10.04 i na tim 
distribucijama radi 100% sa konfiguracijom koju ćemo podesiti! Radićemo sa 0.7+ verzijom nginx-a iz par razloga. Ukoliko želite
da radite sa novijom verzijom umesto paketa <b>nginx</b>, potražite paket <b>nginx-full</b>.
</p>
<p>Počnimo!</p>
<p>Prvo neophodni paketi:</p>

<code>sudo aptitude install php5-cgi php5-cli php5-common php5-mhash php5-curl php5-gd php5-json php5-mcrypt php5-sqlite 
php5-mysql php5-dev php5-tidy php5-xmlrpc php5-memcache php5-pspell php5-xsl</code>

<p>pa mysql klijent i server:</p>
<code>sudo aptitude install mysql-server mysql-client</code>
<p>prilikom instalacije mysql-a podesite root lozinku, pa zatim:</p>
<code>sudo aptitude install spawn-fcgi</code>
<p>pa onda engine-x:</p>
<code>sudo aptitude install nginx</code>
<p>zatim napraviti virtual host direktorijum</p>
<code>sudo mkdir -p /home/www/public</code>

<p>zatim napraviti direktorijum za logove</p>
<code>sudo mkdir /home/www/logs </code>

<p>zatim promeniti vlasništvo (ownership) nad www podacima</p>
<code>sudo chown -R www-data:www-data /home/www/public </code>

<p>pa editovati /etc/nginx/sites-available/default <br />
i zameniti postojeći sadržaj dole navedenim, ali uradićemo bekap tog fajla neposredno pre editovanja, da bi nam ostale
"vidljive" neke "custom" opcije neophodne za dalja podešavanja: </p>
<code>
sudo cp /etc/nginx/sites-available/default /etc/nginx/sites-available/default_beckup<br />	
sudo nano /etc/nginx/sites-available/default
</code>
sadržaj:
<code><pre>
server {
	listen 80 default;
	server_name localhost;
	access_log /home/www/logs/localhost.access.log;
	location / {
		root /home/www/public;
		index index.html index.htm index.php;
	}
	location ~ \.php$ {
		fastcgi_pass 127.0.0.1:9000;
		fastcgi_index index.php;
		fastcgi_param SCRIPT_FILENAME /home/www/public$fastcgi_script_name;
		include fastcgi_params;
	}
}
</pre></code>
<p>
zatim linkovati default vhost podesavanja, mada nginx automatski linkuje, ali za svaki slučaj:</p>
<code>sudo ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/default</code>
<p>zatim editovati /etc/init.d/php-fastcgi i ubaciti sledeci sadržaj:</p>
<code>sudo nano /etc/init.d/php-fastcgi</code>
<p>sadrzaj:</p>
<code><pre>
#!/bin/bash
BIND=127.0.0.1:9000
USER=www-data
PHP_FCGI_CHILDREN=5 #15
PHP_FCGI_MAX_REQUESTS=1000
PHP_CGI=/usr/bin/php-cgi
PHP_CGI_NAME='basename $PHP_CGI'
PHP_CGI_ARGS="- USER=$USER PATH=/usr/bin 
PHP_FCGI_CHILDREN=$PHP_FCGI_CHILDREN PHP_FCGI_MAX_REQUESTS=$PHP_FCGI_MAX_REQUESTS  $PHP_CGI -b $BIND"
RETVAL=0
 start() {
	echo -n "Starting PHP FastCGI: "
	start-stop-daemon --quiet --start --background --chuid "$USER" --exec /usr/bin/env -- $PHP_CGI_ARGS
	RETVAL=$?
	echo "$PHP_CGI_NAME."
 }
 stop() {
	echo -n "Stopping PHP FastCGI: "
	killall -q -w -u $USER $PHP_CGI
	RETVAL=$?
	echo "$PHP_CGI_NAME."
 }
 case "$1" in

	start)
	start
		;;
	stop)
	stop
		;;
	restart)
	stop
	start
		;;
 *)
 echo "Usage: php-fastcgi {start|stop|restart}"
	exit 1
		;;
	esac
 exit $RETVAL
</pre></code>
<p>
Izmanićemo dozvole nad php-fastcgi u izvršne:</p>
<code>sudo chmod +x /etc/init.d/php-fastcgi</code>
<p>pokrenuti nginx:</p>
<code>sudo /etc/init.d/nginx start</code>
<p>pokrenuti fastcgi:</p>
<code>sudo /etc/init.d/php-fastcgi start</code>
<p>pa:</p>
<code>sudo update-rc.d nginx defaults </code>
<p>..zatim:</p>
<code>sudo update-rc.d php-fastcgi defaults</code>
<p>zatim napraviti <b>index.php</b> i ubaciti phpinfo() funkciju:</p>
<code>sudo nano /home/www/public/index.php</code>
<p><b>index.php</b> bi trebao izgledati ovako: </p>
<code> &lt;?php echo phpinfo(); ?&gt; </code>
<p>Gotovo!!! sada otvorite browser i kucajte:</p>
<code>http://localhost</code>
<p>Web strane našeg servera se nalaze u <b>/home/www/public/</b> 
</p>
</article>
