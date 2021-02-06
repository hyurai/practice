<?php
//課題番号14
require_once('man.php');
require_once('male.php');

class Human{
    //Manクラスの親クラス
    protected $name = '';
    protected $muscle = '';
    protected $hair = '';
    protected $praisename = '';
     public function selfIntroduction($name,$muscle,$hair){
         $this->name = $name;
         $this->muscle = $muscle;
         $this->hair = $hair;
         echo '私の性別は'.$name.'筋肉は'.$muscle.'で,髪の長さが'.$hair.'です';
     }

     public function sayPraisename($name,$praisename){
         $this->name = $name;
         $this->praisename = $praisename;
         echo $name.'は'.$praisename.'と呼ばれると喜びます';
    }
    }




?>