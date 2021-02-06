<?php

class Human{
//construct
public function __construct(){
    //constructはnewメソッドが使われると自動的に呼び出される。一番最初に呼び出される
 echo '私は神から生まれた';
 
}

public function __destruct(){
    //destructもconstructとほぼ一緒である。しかし違う点は一番最後に呼び出される。もうするべき処理がないという時に呼び出される。一番大変だった...
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