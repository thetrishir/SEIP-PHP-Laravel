<?php

namespace App\classes;

class Basics{
    public $basic = 'this is basic php<br>';
    public function basic(Type $var = null)
    {
        echo $this->basic;
    }
}
