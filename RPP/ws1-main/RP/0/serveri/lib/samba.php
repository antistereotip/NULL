<article>
<h2>File server Samba</h2>
<p>Prvo ćemo instalirati par paketa:</p>
<code>sudo aptitude install samba samba-common samba-client</code>

<p>Zatim ćemo kreirati samba direktorijum i promeiti dozvole i ownership: </p>
<code>
sudo mkdir -p /home/samba/all<br />
sudo chown -R root:users /home/samba/all<br />
sudo chmod -R ug+rwx,o+rx-w /home/samba/all
</code>
<p>Zatim sledi konfiguraciona datoteka (uradićemo i bekap te conf datoteke):</p>
<code>
sudo cp /etc/samba/smb.conf /etc/samba/smb.conf.back<br />
sudo nano /etc/samba/smb.conf
</code>

<p>Sadržaj:</p>
<code><pre>
[global]
   workgroup = WORKGROUP
   server string = %h server
   dns proxy = no
   log file = /var/log/samba/log.%m
   max log size = 1000
   syslog = 0
   panic action = /usr/share/samba/panic-action %d
   security = user
   encrypt passwords = true
   passdb backend = tdbsam
   obey pam restrictions = yes
   unix password sync = yes
   passwd program = /usr/bin/passwd %u
   passwd chat = *Enter\snew\s*\spassword:* %n\n *Retype\snew\s*\spassword:* %n\n *passw$
   pam password change = yes
   map to guest = bad user
 [homes]
   comment = Home Directories
   browseable = no
   read only = no
   create mask = 0700
   directory mask = 0700
   valid users = %S
 [allusers]
  comment = All Users
  path = /home/samba/all
  valid users = @users
  force group = users
  create mask = 0660
  directory mask = 0771
  writable = yes
</pre></code>

<p>Restartujmo sambu:</p>
<code>sudo /etc/init.d/samba restart</code>
<p>Dodajmo i korisnike (prilikom procedure napravićemo i lozinke):</p>
<code>
useradd korisnik -m -G users<br />
passwd korisnik<br />
smbpasswd -a korisnik
</pre></code>
<p>DONE!</p>
<p>Pristupićemo našem deljenom folderu sledećom komandom:</p>
<code>nautilus smb://127.0.0.1/korisnik</code> 
<p>Ukoliko smo ovu proceduru radili na drugom računaru u istoj mreži, pristupićemo deljenom folderu komandom:</p>
<code>
nautilus smb://192.168.0.104/korisnik<br />
nautilus smb://192.168.0.105/korisnik<br />
nautilus smb://ili_IP_adresa_računara_kome_se_pristupa/korisnik
</code>
</article>
