<?php //require_once 'xcache/gore-kesh.php'; ?>
<!doctype html>
<html dir="ltr" lang="EN"> 
<head> 
	<meta charset="UTF-8" /> 
	<meta name="description" content="Mi smo entuzijasti okupljeni oko ideje o transparentnosti kompjuterskih sistema, servera, programiranja ..." /> 
	<meta name="keywords" content="serveri, web, programiranje, ng1np, nginz, " /> 
	<meta name="title" content="WebServeri" /> 
	<title>Web Serveri 1nfo | ng1np</title> 
	<link href="setup/css/stil.css" rel="stylesheet"  type="text/css" media="screen" />
	<link href="RP/2/css/ext.css" rel="stylesheet"  type="text/css" media="screen" />
	<link type="text/plain" rel="author" href="humans.txt" />
	<link href="media/ws1/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">			
	<meta name="robots" content="index,follow"/> 
	<meta name="robots" content="all"/>
</head>

<body> 
<div id="wrapper"> 
		
                <div id="toppanel">
                	<div id="panel">
                    		<div class="content clearfix">
                    			<div class="logo-share">
                        			<img src="media/ws1/ht01.png" alt="media/ws1/ht01.png" width="64" height="64" />
						<img src="media/ws1/ws1.png" alt="media/ws1/ws1.png" width="124" height="64" />
						<img src="media/ws1/nginz.png" alt="media/ws1/nginz.png" width="71" height="71" />
						<img src="media/ws1/logo.png" alt="media/ws1/logo.png" width="71" height="71" />
						<img src="media/ws1/wideip.png" alt="media/ws1/wideip.png" width="71" height="71" />
                        		</div>
                        	<div class="left">
                            		<h1>Razvojni tim</h1>		
                            		<p class="grey">office@webserveri.info :: zdroid@webserveri.info</p>                            
                        	</div>
                        	<div class="left">
                        		<h1>Eksperiment?</h1>
                            		<p class="grey">experiment! so what?</p>
                        	</div>
                       	 	<div class="left right">			
                            		<ul>
                            		<li>
                                	<img src="media/ws1/ws1baner212x72.png" width="100" height="30" alt="baner" />
                                    	<span>Ex!</span>
                                    	<ul class="formats">Tex! Promotivni materijal - Baner 212x72
                                        <li>
					<a href="media/ws1/ws1baner212x72.png" width="100" height="30" title="png" target="_blank">PNG</a>
					</li>
                                    	</ul>
                                	</li>
					</ul>
                        	</div>
                    	</div>
            	</div>
                
                <div class="tab">
                	<div class="margin">
                        	<ul class="login">
                          	<li id="toggle" class="toggle">
                                <a id="open" class="open" href="#"></a>
                                <a id="close" style="display: none;" class="close" href="#"></a>			
                            	</li>
                            	<li class="right">&nbsp;</li>
                        	</ul>
                    	</div>
                </div>
	</div>		
<header>					
	<div class="lang">
		<ul>
    		
    		<li><a href="http://webchat.freenode.net/?channels=webserveri"  title="IRC">IRC</a></li> 
    		<li><a href="http://webserveri.info"  title="WebServer1">WS1</a></li> 
		</ul>
	</div>OklopME
	<a href="index.php" title="ht"><img src="media/ws1/ws1_connect.png" class="logo" alt="..." width="341" height="174" /></a>
	
	<nav> 
        	<ul> 
            	<li><a href="index.php">Home</a></li>
            	<li><a href="forum/" >Forum</a></li>
            	<li><a href="master/" >Master</a></li>
            	<li><a href="#" >Servers</a></li>
            	<li><a href="http://oklop.me" >Oklop</a></li>
            	<li><a href="contact.php" class="active">Contact</a></li>
        	</ul> 
    	</nav>		
</header>      
<div id="content2">
	
	<section>
		<article class="mikro">
		<img src="media/contact.png" alt="ng1np" title="ng1np"/>
		<h2>Kontaktirajte nas!</h2>
		<p style="padding:3%; color: #414141;">hightech: <b>office@webserveri.info</b></p>
		<p style="padding:3%; color: #414141;">ZDroid: <b>zdroid@webserveri.info</b></p>
		</article>
		<article class="mikro">
			<img src="media/contact_main.png" alt="ng1np" title="ng1np"/>
			<h2>Kontakt Forma!</h2>
			
			<?php
			$to = 'office@webserveri.info'; $subject = 'Output kontakt forme - webserveri';
			$contact_submitted = '<p style="padding:3%; color: #414141;">
			<b style="color:#17f118;font-size:120%;">&#x2605; Uspešno: &#x2605; <br /></b>Vaša poruka je uspešno poslata. Odgovorićemo Vam u najskorijem roku! <br /><b>Srdačno ws1 &#x2605; tim!</b></p>';
				function email_is_valid($email) {
  					return preg_match('/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i',$email);
				}
				if (!email_is_valid($to)) { 
					echo '<p>Morate napisati validnu email adresu da bi kontakt forma funkcionisala.</p>';
				}
				if (isset($_POST['contact_submitted'])) {
				$return = "\r"; 
				$youremail = trim(htmlspecialchars($_POST['your_email'])); 
				$username = stripslashes(strip_tags($_POST['username'])); 
				$yourmessage = stripslashes(strip_tags($_POST['your_message'])); 
				$contact_name = "Ime: ".$username; 
				$message_text = "Poruka: ".$yourmessage;
				$user_answer = trim(htmlspecialchars($_POST['user_answer'])); 
				$answer = trim(htmlspecialchars($_POST['answer']));
				$message = 'Od:'. $youremail . $return . $contact_name . $return . $message_text; 
				$headers = "Od: ".$youremail;
				if (email_is_valid($youremail) && !eregi("\r",$youremail) && !eregi("\n",$youremail) && $username != "" && $yourmessage != "" && substr(md5($user_answer),5,10) === $answer) { 
					mail($to,$subject,$message,$headers); $username = ''; $youremail = ''; $yourmessage = '';
  						echo $contact_submitted;
					} else 
						echo '<p style="padding:3%; color: #414141;">
<b style="color: red; font-size:120%;">&#x2605; Greška: &#x2605; <br /></b>Molimo Vas ukucajte Vaše ime, Vašu validnu email adresu, Vašu poruku i Vaš odgovor na jednostavan matematički izraz. Sve to proverite pre nego što pošaljete poruku. <br /><b>Pokušajte opet!</b></p>';
						}
						$number_1 = rand(1, 9); $number_2 = rand(1, 9); 
						$answer = substr(md5($number_1+$number_2),5,10);
			?>
		
			<form action="" method="post">
			
			<p style="padding:3%; color: #414141;"><b>[ IP -  
			<?php $ip = $_SERVER['REMOTE_ADDR'].' ]</b></p>'.'<p style="padding:3%; color: #414141;">
			<b>[ Date - '. date("Y-m-d").' ]</b></p>'; echo $ip . '<br />';
			//loguj u ip.log 
			$file = fopen ('setup/logs/ip.log', 'a'); fputs($file, $ip . ' | NEXT | '); 
			?>
		
			<p style="padding:3%; color: #414141;">Vaše Ime <b>[ Your name ] </b> <br />
			<input type="text" name="username" value="<?php echo $username; ?>"/>
			</p>
	
			<p style="padding:3%; color: #414141;">Vaš Email <b>[ Your Email ] </b> <br />
			<input type="text" name="your_email" value="<?php echo $youremail; ?>"/>
			</p>
		
			<p style="padding:3%; color: #414141;">Vaša poruka <b>[ Your massage ]</b> <br />
			<textarea name="your_message"><?php echo $yourmessage; ?></textarea>
			</p>
		
		<p style="padding:3%; color: #414141;">Спамбот протектор:<br />
		Молимо унесите тачан резултат!</p>
		<p style="padding:3%; color: #414141;">
		<?php echo $number_1; ?> + <?php echo $number_2; ?> = ? <input type="text" name="user_answer" style="width: 20%;"/>
		<input type="hidden" name="answer" value="<?php echo $answer; ?>"/>
		</p>
		<input class="submit" type="submit" name="contact_submitted" value="Pošalji"/>
		</form>
		</article>

		<article class="mikro">
		<img src="media/cia.png" alt="ng1np" title="ng1np"/>
		<h2>Join Us!</h2>
		<p style="padding:3%; color: #414141;">
		<a href="https://twitter.com/webserveri" target="_blank" title="Twitter">Twitter</a></p>
		
		<p style="padding:3%; color: #414141;">
		<a href="http://www.youtube.com/user/antistereotip" target="_blank" title="YouTube">YouTube</a></p>
		</article>

		
	</section>
	
	

<!-- kraj organizacija, adresa -->
</div>
<footer>
	
        	<article>
                	<h3>humans.txt</h3>
                        <div class="send">
                        <p>Mi smo ljudi...</p>
                        <p>Nismo mashine, niti cemo biti !!!</p>
			<p id="sendushumanstxt"><a href="humans.txt">humans.txt</a></p>
			
			<p>
			<a href="http://www.fsf.org/campaigns/secure-boot-vs-restricted-boot/statement" style="color: yellow;">
			http://www.fsf.org</a> <br /> 
			<a href="http://zdroidblog.info" style="color: yellow;">http://zdroidblog.info</a> <br /> 
			<a href="http://zdroid.anapnea.net" style="color: yellow;">http://zdroid.anapnea.net</a> <br />
			<a href="http://routefor.net" style="color: yellow;">http://routefor.net</a> <br />
			<a href="http://nemysis.anapnea.net" style="color: yellow;">http://nemysis.anapnea.net</a> <br />
			<a href="http://oklop.rs" style="color: yellow;">http://oklop.rs</a> <br /> 
			<a href="http://oklop.me" style="color: yellow;">http://oklop.me</a> <br /> 
			<a href="http://popivoda.com" style="color: yellow;">http://popivoda.com</a> <br />
			<a href="http://www.zaneupucene.com/" style="color: yellow;">http://www.zaneupucene.com/</a> <br />
			<a href="https://libre.lugons.rs" style="color: yellow;">https://libre.lugons.rs</a> <br /> 
			<a href="http://slackware-srbija.org" style="color: yellow;">http://slackware-srbija.org</a> <br /> 
			<a href="http://linog.info" style="color: yellow;">http://linog.info</a> <br /> 
			<a href="http://filmovionline.tv" style="color: yellow;">http://filmovionline.tv</a> <br />
			<a href="http://fewona.net" style="color: yellow;">http://fewona.net</a> <br /> 
			<a href="http://irc4.me" style="color: yellow;">http://irc4.me</a></p>
                        </div>                        
               	</article>
                    

               	<article class="second">
			<h3 class="close">FeedBack ?</h3>
                        <ul>
			<li id="email">
			<a href="mailto:office@webserveri.info" target="_blank" title="Email">@</a>
			</li>
			<li id="twitter">
			<a href="http://twitter.com/webserveri" target="_blank" title="Twitter">T<a>
			</li>					
                        </ul>
                </article>
                    

                <article class="third">
			<div class="creative">
			<a rel="license" href="">
			<img alt="Creative Commons Licence" style="border-width:0" src="setup/img/cc88x31.png" width="88" height="31" />
			</a><br />
			<a href="http://www.gnu.org/licenses/gpl-3.0.txt">
			<img src="../media/gplv3-127x51.png" width="100px" height="33" alt="licence">
			</a><br />
			<p><a href="RP/ng1np/" style="color:#17f118;">ng1np^ &reg;</a> is licensed under a 
			<a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Attribution 3.0 Unported (CC BY 3.0)</a> and 
			<a href="http://www.gnu.org/licenses/gpl-3.0.txt">GNU GENERAL PUBLIC LICENSE</a>
			<br />
			
			You are free:<br />
			to Share — to copy, distribute and transmit the work<br />
			to Remix — to adapt the work<br />
			to make commercial use of the work</p>
		        </div>
			
			<a href="http://www.w3.org/html/logo/" target="_blank">
			<img src="setup/img/HTML5_Logo_512.png" class="html5" alt="Html5" width="66" height="65" />
			</a>
                </article>
		


        
</footer> 	
	</div> 
<!-- jQuery - jezgro - minimal -->
        <script src="setup/js/jquery.js" type="text/javascript"></script> 
        <!-- Slajd efekat -->
        <script src="setup/js/slide.js" type="text/javascript"></script>
</body> 
</html>

<?php //require_once 'xcache/dole-kesh.php'; ?>
