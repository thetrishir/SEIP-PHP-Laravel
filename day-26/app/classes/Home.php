<?php


namespace App\classes;


class Home
{
    public $x = 654;

    public function index(){
        header("Location: action.php?page=home");
    }

    public function student($a, $b){
        echo '<pre>';
        $this->x=$a;
        do{
            echo $this->x.' ';
            $this->x--;
        }while(10<$this->x);
        echo '<br>';

        $this->x = [
            0 =>[
                "name"=>'Trishir',
                "class"=>"10th",
                "mobile"=> 23290,
                "email"=>'thetrishir@gmail.com'],
            1 => [
                "name"=>'Trish',
                "class"=>"11th",
                "mobile"=> 2343245,
                "email"=>'thetrishir2@gmail.com'
            ],
            3=>[
                "name"=>'T',
                "class"=>"12th",
                "mobile"=> 567035462,
                "email"=>'thetrishir3@gmail.com'
            ]];
        return $this->x;
//        echo gettype($this->x).'<br>';
//        echo '<pre>';
//        print_r($this->x);
    }

}