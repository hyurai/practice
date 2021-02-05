<?php
require_once('inferitance.php');

class Man extends Human{
//inferitance.phpファイルのHumanクラスを継承している
}
$taro = new Man();
$taro->selfIntroduction('男性','ムキムキ','短い');


?>