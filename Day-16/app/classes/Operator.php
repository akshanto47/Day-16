<?php


namespace App\classes;


class Operator
{
//    ======= Operator ====


/*

    *Arithmatic Operator
        *Binary Operator(+,-,*,/,%)
            *Unary Operator(++, --, (-) )
 * Assignment Operator ( == , +=, .=,)
 * Conditional Operator ( >, <, >=, <=, ===, !==)
 * Logical Operator( && , ||, !)

*/
    public $x ;
    public $y;
    protected $z;


    public function index(){
        $this->x =10;
        $this->y =10;
        $this->z =30;


        switch ($this->y){
            case 10:
                echo "hello y";
                break;
            case 11:
                echo "hello ak";
                break;
            case 10:
                echo "hello z";
                break;
            case 20:
                echo "hello ak shanto";
                break;
            default
        }

//        if($this->x > $this->y)
//        {
//            echo 'x is greater than Y';
//        }
//        elseif ($this->y > $this->z){
//            echo 'hello';
//        }
//        else {
//            echo 'bye';
//        }
//




        /*
           ====Statement===
        */

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo "<br/>";
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo "<br/>";
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo "<br/>";




//        $res = $this->x + $this->y;
//
//        echo $this->x++;
//        echo '<br/>';
//        echo --$this->x;
//        echo '<br/>';
//        echo $this->x;
//        echo '<br/>';
//        echo $res;



//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;
//        echo '<br/>';
    }
}