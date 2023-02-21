<?php
use App\classes\Student;

require_once("app/classes/HelloWorld.php");
require_once("app/classes/Student.php");
use App\classes\HelloWorld;
// use App\classes\Student;


$helloWorld = new HelloWorld();
$helloWorld->sayHi();
echo($helloWorld->me);

$student = new Student();
echo $student->student2();
echo $student->student1();


function xyZ(){
    echo 'hello';
}
xyz();

