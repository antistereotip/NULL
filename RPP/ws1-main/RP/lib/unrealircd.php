<div class="dvanest kol">
<h2>IRC server Unrealircd</h2>
<p>
Za ovu proceduru potrebno je koristiti root ovlašćenja! Počnimo. Unreal3.2 ćemo smestiti u opcioni folder <b>/opt</b></p>
<code>
su<br />
cd /opt<br />
wget http://www.unrealircd.com/downloads/Unreal3.2.9.tar.gz<br />
tar zxvf Unreal3.2.9.tar.gz<br />
cd Unreal3.2<br />
./Config
</pre></code>

<p>Prilikom izvršavanja komande <b>./Config</b> pritiskajte slobodno ENTER do kraja.</p>
<code>make</code>
<p>i na kraju kompajliranja unreal će nam postaviti još par pitanja, tipa: ime servera, email ... <br />
možemo i ENTER slobodno do kraja. <br />
Potreban nam je još jedan fajl za pokretanje servera! U pitanju je <b>unrealircd.conf</b><br />
Kreirajmo ga:</p>
<code>nano /opt/Unreal3.2/unrealircd.conf</code>


<p>A treba izgledati ovako:</p>
<code><pre>
/* /opt/Unreal3.2/unrealircd.conf */
me {
	name "irc.tech.net";
	info "irc server";
	numeric 1;
};

admin {
	"admin";
	"high";
	"admin@tech.net";
};
class clients {
	pingfreq 90;
	maxclients 500;
	sendq 100000;
	recvq 8000;
};
class servers {
	pingfreq 90;
	maxclients 10; /* Max servers we can have linked at a time */
	sendq 1000000;
	connfreq 100; /* How many seconds between each connection attempt */
};
allow {
	ip *;
	hostname *;
	class clients;
	maxperip 5;
};
allow {
	ip *@*;
	hostname *@*.passworded.ugly.people;
	class clients;
/*	password "lozinka";	*/
	maxperip 2;
};
listen *:6667;

oper admin {
	from {
		userhost *;
	};
	class clients;
	flags {
		global;
		admin;
		services-admin;
		netadmin;
		can_die;
		can_localkill;
		can_globalkill;
	};
	password admin-lozinka;
};
loadmodule "src/modules/commands.so";
loadmodule "src/modules/cloak.so";
set {
	kline-address "my@emailadresa.com";
	auto-join "#kanal";
	maxchannelsperuser 15;
	services-server services.tech.net;
	default-server irc.tech.net;
	network-name ime-irc-mreze;
	
/*
[error] set::maxchannelsperuser is missing
[error] set::services-server is missing
[error] set::default-server is missing
[error] set::network-name is missing
[error] set::hosts::admin is missing
[error] set::hosts::servicesadmin is missing
[error] set::hosts::netadmin is missing
[error] set::hosts::coadmin is missing
[error] set::help-channel is missing
[error] set::hiddenhost-prefix is missing
[error] set::cloak-keys missing!

*/

	options {
		hide-ulines;
	};
	hosts {
		local "LocalOp.tech.net";
		global "globalop.tech.net";
		admin "network-admin";
		servicesadmin "services-admin";
		netadmin "network-admin";
		coadmin	"co-admin";
	};
	help-channel "#help";
	hiddenhost-prefix "TANT";
	cloak-keys {
		"aoAr1HnR6gl3sJ7hVz4Zb7x4YwpW";
		"aoAr1HnR6gl3tJ7hVz4Zb7x4YwpW";
		"aoAr1HnR6gl4sJ7hVz4Zb7x4YwpW";
	};
};

</pre></code>

<p>Promenimo vlasništvo (ownership) foldera <b>/opt/Unreal3.2</b> jer nikako nije preporučljivo pokretati irc 
server kao root ...</p>
<code>chown -R korisnik:korisnik /opt/Unreal3.2</code>

<p>Izlogujmo se iz root naloga komandom:</p>
<code>exit</code>

<p>...zatim pokrenimo ircd kao korisnik</p>
<code><pre>
cd /opt/Unreal3.2﻿<br />
./unreal start
</pre></code>

<p>Proces se zaustavlja komandom:</p>
<code>./unreal stop</code>
<p>Naš irc server se nalazi na lokaciji <b>127.0.0.1</b> na default portu <b>6667</b>, a pokrećemo ga kroz nekog od irc 
klijenata (xchat, irssi, konversation...) . <br />
Operatorske (server) privilegije ćete u ovom slučaju (pogledajmo oper blok u konfiguracionoj datoteci) dobiti komandom:</p>
<code>/oper admin admin-lozinka</code>

<p>Proces možemo prekinuti i iz dijalog bara u irc klijentu komandom:</p>
<code>/die</code>

<p>Toliko za sada o Unreal irc serveru!</p>
</div>
