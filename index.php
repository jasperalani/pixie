<?php

include('includes.php');


//if (!isset($_GET[''])) {
//    $_GET['alphabet'] = '';
//}

if (isset($_GET['infopage'])) {

    include('infopage.php');

} else if (isset($_GET['diff'])) {

    include('src/numbers.php');

} elseif (isset($_GET['diffsel'])) {

    include_once ('src/diffsel.php');

} else {

    include('src/alphabet.php');

}

endHTML();