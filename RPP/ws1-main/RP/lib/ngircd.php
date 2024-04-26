<h2>ngircd irc server</h2>
<p>Prvo instalirati ngircd:</p>
<code>sudo aptitude install ngircd</code>
<p>Zatim editovati /etc/ngircd/ngircd.conf</p>
<code>sudo nano /etc/ngircd/ngircd.conf</code>
<p>Treba izgledati ovako:</p>
<pre><code>[Global]
	Name = irc.domen.tld
	Info = Jos jedan IRC Server na Debian GNU/Linux
	Password = lozinka
	AdminInfo1 = admin
	AdminInfo2 = admin's City
	AdminEMail = root@localhost
	Ports = 6667, 6668, 6669
	;Listen = 1.2.3.4
        Listen = 127.0.0.1
	MotdFile = /etc/ngircd/ngircd.motd
	MotdPhrase = "poruka dana :: irc server nove generacije"
	;ServerUID = 65534
	;ServerGID = 65534
	PidFile = /var/run/ngircd/ngircd.pid
	PingTimeout = 120
	PongTimeout = 20
	ConnectRetry = 60
	OperCanUseMode = yes
	MaxConnections = 500
	MaxConnectionsIP = 10
	MaxJoins = 10
[Operator]
	Name = pera
	Password = pera123
[Server]
	;Name = irc2.debian.org
	;Host = connect-to-host.the.net
	;Port = 6666
	;MyPassword = MySecret
	;PeerPassword = PeerSecret
	;Group = 123
[Channel]
	Name = #test
	Topic = Ngircd testing server
	Modes = tn
# -eof-
</code></pre>
<p>Sačuvati to i startovati ngircd:</p>
<code>sudo /etc/init.d/ngircd start</code>
<p>i restartovati:</p>
<code>sudo /etc/init.d/ngircd restart</code>
<p>"lozinka" predstavlja server password, pa se tako i prijavite na localhost.
Operator na serveru se dobija komandom u irc klijentu:</p>
<code>/oper pera pera123</code>
<p>...bar u ovom slučaju.<br />
Toliko za sada o ovom serveru.</p>
