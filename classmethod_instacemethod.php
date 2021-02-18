<?php
class Human{
    public $age;
    public $name;
    public function selfBaseIntroduction(){
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
$nagai->selfBaseIntroduction();
//インスタンスメソッドを呼び出す
Introduction::hobby();
?>