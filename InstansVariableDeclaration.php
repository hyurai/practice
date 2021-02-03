<?php
 class Hamburger{
//クラス定義
 public function hello(){
    echo '私はハンバーガーです';
}

}
$food = new Hamburger;
//Hambergerクラスをインスタンスをする。それを$Hambergerに代入する
$food->hello();
//Hambergerクラスのhellowメソッドを呼び出す
?>