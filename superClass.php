<?php 
class AllNumber{
    public $number = 1;
    public function randnumber(){
        $number = 1;
        echo $number;
    }

}

class updateNumber extends AllNumber{
    public function __construct(){
        $number = 2;
        echo $number;
        //オーバーライド = 継承してクラスでデータを更新すること
    }
}

$echoAllNumber = new AllNumber();
$echoAllNumber->randnumber();
//スーパークラスの呼び出し
$echoUpdateNumber = new updateNumber();
//子クラスの呼び出し




?>