<?php 
class AllNumber{
    public $number = 1;
    public function randnumber(){
        $number = 1;
    }

}

class updateNumber extends AllNumber{
    public function __construct(){
        $number = 2;
        echo $number;
    }
}

$echoNumber = new updateNumber();




?>