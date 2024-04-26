<h2>Laemppp</h2>
<p>
Ovakav metod ne preporucujemo pocetnicima, jer je u pitanju kombinovanje dva servera kroz forward proxy i kroz mapirane tunele ... Podrazumevane vestine za ovu tehniku su naprednije rukovanje apache-om i nginx-om. Stoga ce u clanku biti samo delovi koda koje cemo ubacivati u nase konfiguracije.<br />
Prvo ćemo dodati sledeći blok koda u <b>/etc/nginx/sites-available/default</b></p>
<p>Ulogovati se kao <b>root</b>:</p>
<pre><code>su</code></pre>
<p>Dodati blok:</p>
<pre><code>
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
</code></pre>
<p>
Apache konfiguracija menja parametre portova u <b>/etc/apache2/ports.conf</b> i <b>/etc/apache2/sites-available/default</b><br />
Sadrzaj <b>/etc/apache2/ports.conf</b> fajla promeniti samo ove dve linije sa 80 u 8080 da izgledaju ovako:</p>
<pre><code>NameVirtualHost *:8080
Listen 8080</code></pre>
<p>i <b>/etc/apache2/sites-available/default</b> treba izmeniti ovu liniju, takodje u port 8080:</p>
<pre><code>&lt;VirtualHost *:8080&gt;</code></pre>
<p>Zatim cemo instalirati postgresql i phppgadmin:</p>
<pre><code>apt-get install php5-pgsql phppgadmin
cp /etc/phppgadmin/apache.conf /etc/apache2/sites-available/phppgadmin
ln -s /etc/apache2/sites-available/phppgadmin /etc/apache2/sites-enabled/phppgadmin
adduser postgres
su - postgres
</code></pre>
<p>zatim dobicemo ovakav odzivnik:</p>
<pre><code>postgres@y:~$</code></pre>
<p>Dodati korisnika:</p>
<pre><code>createuser -sdrP master
exit</code></pre>
<p>Restartovati servere:</p>
<pre><code>/etc/init.d/postgresql restart
/etc/init.d/apache2 restart
/etc/init.d/nginx restart</code></pre>
<p>Zatim se na adresi ulogovati kao korisnik <b>master</b> i sifrom koju ste dodali:</p>
<p><a href='http://localhost:8080/phppgmyadmin'>http://localhost:8080/phppgmyadmin</a></p>
<p>A na sledećim adresama bi trebao da radi sada nas proxy:</p>
<p>
<a href='http://localhost/cgi-bin/test.sh'>http://localhost/cgi-bin/test.sh</a><br />
<a href='http://localhost/cgi-bin/test.py'>http://localhost/cgi-bin/test.py</a><br />
<a href='http://localhost/cgi-bin/test.pl'>http://localhost/cgi-bin/test.pl</a><br />
<a href='http://localhost/cgi-bin/test.cgi'>http://localhost/cgi-bin/test.cgi</a></p>
<p><b>cgi-bin</b> se nalazi na portu 8080 ali kroz nginx kao forward proxy on radi na portu 80.
</p>

