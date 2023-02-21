<?php

// require_once 'app\classes\Student.php';
require_once 'vendor/autoload.php';
use App\classes\Student;
use App\classes\Cat;
use App\Kutta;
use App\classes\Kutta as Kukur;

$s = new Student;
$dog = new Kutta;
$kukur = new Kukur;
$cat = new Cat;

$s->printStudent();

echo '<br>';
echo '<hr>';

$cat->catName();
$dog->kuttarNam();
$kukur->kuttarNam();

?>