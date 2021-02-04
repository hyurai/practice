<?php 

class Human{

 public $age;
 public $name; 

 public function SelfBaseIntroduction(){
   echo $this->name.'は'.$this->age.'です';
 }
}

class Introduction{
  public static function hobby(){
    echo '私の趣味はテレビゲームです';

  }

}


$nagai = new Human;
//Humanクラスのインスタンス化

$nagai->name = "nagai";
//インスタンス化した物のnameというプロパティに'nagai'を代入する
$nagai->age = 19;
//インスタンス化した物のageというプロパティに19を代入する
$nagai->SelfBaseIntroduction();
//インスタンスメソッドを呼び出す

echo Introduction::hobby();
//このようにインスタンスしないで直接クラス内のメソッドを呼び出すことをクラスメソッド
?>