<?php
    switch ($_GET['go']) {
        case "kontakt": $inc = 'kontakt.php';
        break;
        case "kesh": $inc = 'xcache.php';
        break;
        case "rpkontakt": $inc = 'RP/2/kontakt.php';
        break;
        case "page04": $inc = 'Page04.php';
        break;
        default: $inc = 'home.php';
        break;
    }
    include ($inc);
?>
