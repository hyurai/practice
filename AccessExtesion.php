<?php

//課題番号18
class AccessExtension1{

    private $name = "hanako";
    //privateはそのクラスのみアクセス可能
    protected $age = "";
    public $height = "";

    public function sayname(){
    return $this->name.'さん！おはよう';
    }
    //privateは定義されているクラス以外のクラスは呼び出すことができない
    
    protected function sayage($age){
        $this->age = $age;
        return '私の年齢は'.$age.'です';
    }
}  
class AccessExtension2{
    static public $height = "";
    static public  function sayheight($height){
        self::$height = $height;
        echo '私の身長は'.$height.'です';
        //staticを付けることで外部からアクセス可能
    }
}


AccessExtension2::sayheight(170);
//外部からアクセス


class child extends AccessExtension1{
     public function showpro($age){
      echo $this->sayage($age);
     }
}
$child = new child;
$child.showpro(20);



?>