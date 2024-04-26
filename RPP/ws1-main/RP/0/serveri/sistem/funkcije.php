<?php
function listajFolderFajl($dir){
    $ffs = scandir($dir);
    echo '<ul class="listaj">';
    foreach($ffs as $ff){
        if($ff != '.' && $ff != '..'){
            echo '<li>'.substr($ff, 0, -4);
            if(is_dir($dir.'/'.$ff)) listajFolderFajl($dir.'/'.$ff);
            echo '</li>';
        }
    }
    echo '</ul>';
}
?>

