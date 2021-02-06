<?php

class Human{
//construct
public function __construct(){
    //constructはnewメソッドが使われると自動的に呼び出される。
 echo '私は神から生まれた';
 
}

public function __destruct(){
    echo '私は最後の呼ばれる';    
} 
public function helloman(){
    echo '私は男です';
    }  
}

$taro =  new Human;
$taro->helloman();
echo '私は女性です';





?>