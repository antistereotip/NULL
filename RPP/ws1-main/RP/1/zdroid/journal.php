<h3><a href='?q=journal&id=cli_art' class="blog">cli art</a></h3>
<h3><a href='?q=journal&id=test' class="blog">test</a></h3>


<div class="blog">


<?php
$id = $_GET['id'];

if ($id == 'cli_art') { 
	echo '<p>Autor: <em>ZDroid</em>. Objavljeno: <time pubdate="2013-03-02">2013-03-02</time></p>';
	echo '<h4>CLI ART<br />=======</h4>';
	echo '<p>Ovo je naš prvi post :)<br />Za CLI art (crtanje u terminalu) možete koristiti program figlet.</p>
	<pre><code><span>#</span> apt-get install figlet</code></pre>
	<p>Za više informacija posetite<a href="http://www.figlet.org">http://www.figlet.org</a>.<br /><br /><em>***</em></p>'; 
}

else if ($id == 'test') { 
	echo '<p>Autor: <em>hightech</em>. Objavljeno: <time pubdate="2013-03-02">2013-03-02</time></p>';
	echo '<h4>test<br />====</h4>';
	echo '<p>test</p>'; 
}

else { echo '<h3>Journal</h3><h4>Default<br />=======</h4>'; echo '<marquee>default journal</marquee> ';}
?> 


</div>
