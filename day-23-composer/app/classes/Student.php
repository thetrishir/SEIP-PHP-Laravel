<?php
namespace App\classes;


class Student{
    public $students = 'Moni, Toni, Roni';

    public function __construct(){
        echo 'Constractor! ';
        $this->students = 'he';
    }
    public function printStudent(){
        echo $this->students;
    }
}