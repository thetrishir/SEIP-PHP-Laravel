<?php

echo 'this is routing file';

//echo $_GET['page'];

if("home" == $_GET['page']){
    include ('pages/home.php');
}elseif ("about" ==  $_GET['page']){
    include ('pages/about.php');
}
