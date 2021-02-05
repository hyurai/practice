<?php
//課題番号18
class AccessExtension{
    private $name = "taro";
    protected $age = "";
    public $height = "";

    private function __construct(){
        echo $this->name.'さん！おはよう';
        
    }
    protected function say($age){
        $this->age = $age;
        echo '私の年齢は'.$age.'です';
    }
    public function gao($height){
        $this->height = $height;
        echo '私の身長は'.$height;
    }
}


?>