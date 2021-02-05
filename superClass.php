<?php 
class AllNumber{
    public $number = 1;
    public function randnumber(){
        $number = 1;
    }

}

class selectNumber extends AllNumber{
    public function __construct(){
        $oddNubmer = $number % 2 == 1;
        echo $oddNubmer;
    }
}

$echoNumber = new selectNumber();




?>