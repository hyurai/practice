<?php 

class Number{

 public function addNumbers1($a,$b,$c,$d,$e){
     echo $a + $b + $c + $d + $e;
 }
}
class deleteNumber{
  public static function addNumber2($f,$g,$h,$i,$j){
  echo self.$f + $g + $h + $i + $j;
  self::addNumber2(20,5,4,3,2);
}

}

$plusnumber =  new Number();
$plusnumber.addNumbers(1,2,3,4,5)
//インスタンスメソッドこちらは一回メソッドをインスタンス化してメソッドを呼び出すことができる

//クラスメソッドこちらはクラスから直接メソッドを呼び出すことができる。その分クラス内のメソッドにselfを付ける必要がある


?>