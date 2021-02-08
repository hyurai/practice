<?php

//課題番号18
class AccessExtension{

    public $name = "";
    public $age = "";
    public $height = "";

    private function ffaoifn($name){
        $this->name = $name;
        echo $this->name.'さん！おはよう';
        
    }
    
    public function say($age){
        $this->age = $age;
        echo '私の年齢は'.$age.'です';
    }
    public static function gao($height){
        self::$height = $height;
        echo '私の身長は'.$height.'です';
    }
}

AccessExtension::gao('170');





?>