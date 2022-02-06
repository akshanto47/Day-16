<?php


namespace App\classes;
use App\classes\Person;


class Example extends Person
{
    public $firstName ="ak ";
//    public $lastName = "shanto";
    protected $middleName;
    private $lastName;
    public $Address = "Khilgaon";
    public $firstNumber = 10;
    protected $secondNumber = 20;
    private $lastNumber = 30;


    public function index(){
//        $this->firstName ="Shanto";
//        echo $this->firstName;
//        echo '<br/>';
//        $x = 'bd';
//        $x = 10;
//        echo gettype($x);
//        $this->firstName = "ak ";
//        echo $this->firstName;
    }
    public function methodOne(){
//        $this->middleName = "moyna";
//        echo $this->middleName;
    }
    public function methodTwo(){
//        $this->lastName = "pakhi";
//        echo $this->lastName;
    }


    public function methodThree(){
//        echo $this->district();
//        echo $this->thana();
//        echo $this->city();
//
        $this->district();
        echo "<br/>";
        $this->thana();



    }
}

