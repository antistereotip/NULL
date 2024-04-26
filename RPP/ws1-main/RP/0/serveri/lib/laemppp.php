<article>
<h2>Laemppp</h2>
<p>
Ovakav metod ne preporucujemo pocetnicima, jer je u pitanju kombinovanje dva servera kroz forward proxy i kroz mapirane tunele ... Podrazumevane vestine za ovu tehniku su naprednije rukovanje apache-om i nginx-om. Stoga ce u clanku biti samo delovi koda koje cemo ubacivati u nase konfiguracije.<br />
Prvo ćemo dodati sledeći blok koda u <b>/etc/nginx/sites-available/default</b></p>
<p>Ulogovati se kao <b>root</b>:</p>
<code>su</code>
<p>Dodati blok:</p>
<code><pre>
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
</pre></code>
<p>
Apache konfiguracija menja parametre portova u <b>/etc/apache2/ports.conf</b> i <b>/etc/apache2/sites-available/default</b><br />
Sadrzaj <b>/etc/apache2/ports.conf</b> fajla promeniti samo ove dve linije sa 80 u 8080 da izgledaju ovako:</p>
<code>NameVirtualHost *:8080<br />
Listen 8080</code>
<p>i <b>/etc/apache2/sites-available/default</b> treba izmeniti ovu liniju, takodje u port 8080:</p>
<code>&lt;VirtualHost *:8080&gt;</code>
<p>Zatim cemo instalirati postgresql i phppgadmin:</p>
<code>apt-get install php5-pgsql phppgadmin<br />
cp /etc/phppgadmin/apache.conf /etc/apache2/sites-available/phppgadmin<br />
ln -s /etc/apache2/sites-available/phppgadmin /etc/apache2/sites-enabled/phppgadmin<br />
adduser postgres<br />
su - postgres
</code>
<p>zatim dobicemo ovakav odzivnik:</p>
<code>postgres@y:~$</code>
<p>Dodati korisnika:</p>
<code>createuser -sdrP master<br />
exit</code>
<p>Restartovati servere:</p>
<code>/etc/init.d/postgresql restart<br />
/etc/init.d/apache2 restart<br />
/etc/init.d/nginx restart</code>
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
</article>
