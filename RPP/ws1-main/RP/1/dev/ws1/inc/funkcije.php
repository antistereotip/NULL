<?php
function org($klasa, $naslov, $h1, $img, $desc, $veza, $url, $veza1, $url1, $veza2, $url2)
	{
	echo '<article itemscope itemtype="http://data-vocabulary.org/Organization" class="'.$klasa.'">';
		echo '<h1 itemprop="name" class="h3dr">'.$h1.'</h1>';
		echo '<a class="simple" title="'.$naslov.'" href="'.$url.'">';
		echo '<img itemprop="photo" src="'.$img.'" alt="'.$naslov.'" width="100" height="100">';
		echo '</a>';
		echo '<p itemprop="description">'.$desc.'</p>';
		echo '<p>';
		echo $veza.': <a itemprop="url" href="'.$url.'">'.$url.'</a><br />';
		echo $veza1.': <a itemprop="url" href="'.$url1.'">'.$url1.'</a><br />';
		echo $veza2.': <a itemprop="url" href="'.$url2.'">'.$url2.'</a>';
		echo '</p>';
	echo '</article>';
	}
function rank($klasa, $h1, $naslov, $img, $veza, $url, $desc, $rating, $stars,  $proveravao, $autor, $datuma, $datum, $veza1, $url1, $unique_url)
	{
	echo '<article itemscope itemtype="http://data-vocabulary.org/Review" class="'.$klasa.'">';
		echo '<h1 itemprop="itemreviewed" class="h3dr">'.$h1.'</h1>';
		echo '<a class="simple" title="'.$naslov.'" href="'.$url.'">';
		echo '<img src="'.$img.'" alt="'.$naslov.'" width="100" height="100"></a>';
		echo '<p><span class="a">'.$stars.'</span><span itemprop="rating"> ('.$rating.')</span></p>';
		echo '<p itemprop="summary">Rank stranice</p>';
		echo '<p itemprop="description"><blackquote>'.$desc.'</blackquote><br />';
		echo $veza.': <a href="'.$url.'">'.$url.'</a></p>';
		echo '<p itemprop="reviewer">'.$proveravao.': <span class="autor">'.$autor.'</span></p>';
		echo '<p itemprop="dtreviewed" datetime="'.$datum.'">'.$datuma.': <span>'.$datum.'</span><br /></p>';
		echo '<p itemscope itemtype="http://data-vocabulary.org/Organization">';
		echo $veza1.': <a itemprop="url" href="'.$url1.'">'.$url1.'</a><br /><br />';
		echo '<a href="'.$url1.'" title="'.$naslov.'" target="_blank">';
		echo '<img src="'.$unique_url.'" alt="'.$naslov.'" style="border:0;"/></a>';
    	echo '</p>';
	echo '</article>';
	}

?> 








