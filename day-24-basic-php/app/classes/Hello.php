<?php
namespace App\classes;

class Hello{
    public $hello = 'hello';
    public function hello(){
        $this->hello = 'Hola';
        echo $this->hello;
    }
}