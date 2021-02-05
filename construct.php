<?php

class Human{
//construct
public function __construct(){
    //constructはnewメソッドが使われると自動的に呼び出される。
 echo '私は神から生まれた';
 
}

public function hellomale(){

echo '私は男です';
}

public function __destruct(){
    echo '私は女です';    
   
   
}
   
}
$human = new Human;



?>