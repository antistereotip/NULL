<article>
<h2>Cherokee Web server</h2>
<p>prvo, par neophodnih paketa:</p>
<code>sudo aptitude install cherokee php5 php5-mysql php5-cgi mysql-server mysql-client</code>

<p>za mysql-server odraditi proceduru iz <a href="?q=lamp">lamp</a> oblasti, zatim  kreirati cherokee web direktorijum i 
promeiti dozvole i vlasnistvo (ownership):</p>
<code>
sudo mkdir -p /home/www/cherokee<br />
sudo chown -R www-data:www-data /home/www/cherokee
</code>

<p>u konfiguracionoj datoteci <b>/etc/cherokee/cherokee.conf</b> vazne su sledece linije ukoliko ovaj server kombinujete sa nekim 
vec postojecim (apache2, nginx...), jer je i cherokee takodje na default 80 portu pa liniju gde pise port=80, 
promenite u npr. 8050 ....</p>
<code>
server!bind!1!port = 80<br />
vserver!1!directory_index = index.html<br />
vserver!1!document_root = /home/www/cherokee<br />
vserver!1!rule!4!document_root = /home/www/cherokee/cgi-bin
</code>
<p>
<a href="http://www.cherokee-project.com/doc/basics_installation.html">zvanicna dokumentacija cherokee projekta</a>
</p>
</article>
