<?php
//require_once "app/classes/OurHome.php";
require_once "vendor/autoload.php";
use App\classes\OurHome;
use App\classes\Home;

//$myObject = new OurHome();
$myObj = new Home();
$myObj->index();
//echo gettype($myObj);
//$myObj->rS();
$myX=$myObj->student(20, 30);
echo "<pre>";
//print_r($myX);
foreach ($myX as $arr) {
    echo $arr['name'].' '.$arr['email'].'<br>';
}