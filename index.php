<?php

include('includes.php');


//if (!isset($_GET[''])) {
//    $_GET['alphabet'] = '';
//}

if (isset($_GET['infopage'])) {

    include('src/misc.php');

} else if (isset($_GET['numbers'])) {

    include('src/numbers.php');

} elseif (isset($_GET['diffsel'])) {

    include_once ('src/diffsel.php');

} else {

    include('src/alphabet.php');

}

endHTML();