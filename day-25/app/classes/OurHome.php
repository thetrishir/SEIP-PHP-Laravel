<?php


namespace App\classes;


class OurHome
{
    public $name = "Trishir";
    public $x;
    public function rS(){
        for($this->x = 1; $this->x <= 10; $this->x++){
            echo $this->x.'<br>';
            if ($this->x%5==0)
                echo '<hr> ';

        }
        echo '<hr> ';
        $this->x--;
        while(0<=$this->x){
            echo $this->x.'<br>';
            if ($this->x%5==0)
                echo '<hr> ';
            $this->x--;
        }
    }
}