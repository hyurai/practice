<?php

class Human{
 public function __destruct(){
     echo '私は神から生まれました';


 }
 public function hellowoman(){
    echo '私は女だ';
 }



}
$Human = new Human;
$Human->hellowoman(); 

?>