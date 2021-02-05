<?php
//課題番号14
require_once('child.php');
require_once('child2.php');

class Human{
    //Manクラスの親クラス
    protected $name = '人間';
    protected $muscle = '普通';
    protected $hair = 'medium';
    protected $praisename = '';
     public function selfInroduction($name,$muscle,$hair){
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