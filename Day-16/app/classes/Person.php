<?php


namespace App\classes;


class Person
{
    public $thana = "kaliakair";
    protected $district = "Gazipur";
    private $city = "Bangladesh";

    public function thana(){
        echo 'khilgaon';
    }
    protected function district(){
        echo 'dhaka';
    }
    private function country(){
        echo 'Bangladesh';
    }
}