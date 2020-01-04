<?php


function v($x)
{
    var_dump($x);
}

function j($j, $opt = JSON_PRETTY_PRINT)
{
    return json_encode($j, $opt);
}

function vj(array $j, $opt = JSON_PRETTY_PRINT)
{
    var_dump(json_encode($j, $opt));
}

function reverseNumber($num, $min, $max)
{
    return ($max + $min) - $num;
}

//

function getHeader($title = 'Storm the Pixie'){
    echo '<header>';
    echo "<h2 class='header-title'><span>$title</span></h2>";
    echo '</header><body>';
}

function center_wrapper(){
    echo '<div id="center-wrapper">';
}
function close_div(){
    echo '</div>';
}
function closeBody(){
    echo '</div></div>';
}

function hr()
{
    echo '<div style="border: 2px solid lightgray; margin: 35px;"></div>';
}

function footer()
{
    echo '<footer>';
    echo 'jasper alani<br>';
    echo '(c) 2019';
    echo '</footer>';
}

function endHTML()
{
    echo '</body>';
    echo '</html>';

}

function getNav()
{
    echo '<div id="nav-menu">';
    echo '<nav>';
    echo '<p id="nav1" onclick="numbers()">numbers</p>';
    echo '<p id="nav2" onclick="alphabet()">alphabet</p>';
    echo '<p id="nav3" onclick="misc()">misc</p>';
    echo '</nav>';
    echo '</div>';
}