<?php

namespace App\classes;

class Calculator
{
    public $firstNumber = ["firstNumber" => 0], $lastNumber = ["lastNumber" => 0], $index = 0, $result = [];

    public function __construct($number)
    {
        $this->firstNumber = $number["firstNumber"];
        $this->lastNumber = $number["lastNumber"];
    }

    public function isInputCorrect($firstNumber, $lastNumber)
    {
        if (!$firstNumber && !$lastNumber) {
            return 'Enter First and Second Number';
        } elseif (!$firstNumber) {
            return 'First Number Is Required';
        } elseif (!$lastNumber) {
            return 'Second Number Is Required';
        }
    }

    public function calculator()
    {
        switch ($_POST) {
            case (isset($_POST['series'])):
                for ($this->firstNumber; $this->firstNumber <= $this->lastNumber; $this->firstNumber++)
                    $this->result[$this->index++] = $this->firstNumber;
                return $this->result;
                break;
            case (isset($_POST['summation'])):
                $this->result[$this->index] = $this->firstNumber + $this->lastNumber;
                return $this->result;
                break;
            case (isset($_POST['subtraction'])):
                if ($this->firstNumber > $this->lastNumber) {
                    $this->result[$this->index] = $this->firstNumber - $this->lastNumber;
                    return $this->result;
                } else
                    $this->result[$this->index] = $this->lastNumber - $this->firstNumber;
                return $this->result;
            case (isset($_POST['multiplication'])):
                $this->result[$this->index] = $this->firstNumber * $this->lastNumber;
                return $this->result;
                break;
            case (isset($_POST['division'])):
                $this->result[$this->index] = $this->firstNumber / $this->lastNumber;
                return $this->result;
                break;
        }


        // if (isset($_POST['series'])) {
        //     if ($this->firstNumber < $this->lastNumber) {
        //         for ($val = $this->firstNumber; $val <= $this->lastNumber; $val++)
        //             $this->result[$this->index++] = $val;
        //         return $this->result;
        //     }else{
        //         for ($val = $this->firstNumber; $val >= $this->lastNumber; $val--)
        //             $this->result[$this->index++] = $val;
        //         return $this->result;
        //     }
        // } elseif (isset($_POST['summation'])) {
        //     $this->result[$this->index] = $this->firstNumber + $this->lastNumber;
        //     return $this->result;
        // } elseif (isset($_POST['subtraction'])) {
        //     if ($this->firstNumber > $this->lastNumber) {
        //         $this->result[$this->index] = $this->firstNumber - $this->lastNumber;
        //         return $this->result;
        //     } else
        //         $this->result[$this->index] = $this->lastNumber - $this->firstNumber;
        //     return $this->result;
        // } elseif (isset($_POST['multiplication'])) {
        //     $this->result[$this->index] = $this->firstNumber * $this->lastNumber;
        //     return $this->result;
        // } elseif (isset($_POST['division'])) {
        //     $this->result[$this->index] = $this->firstNumber / $this->lastNumber;
        //     return $this->result;
        // }
    }
}
