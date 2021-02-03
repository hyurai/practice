
<?php

class Animal{
    public $name;
    //propertyはクラスの中で名前をみたいなもの
}

$Gorira = new Animal;
//$GoriraにAnimalインスタンスを代入する
$Gorira->name = '動物の中でのゴリラです';
//$Goriraというインスタンスのnameプロパティに動物の中でのゴリラですと代入する
echo $Gorira->name;
//$Goriraというインスタンスにnameというプロパティを出力する
//課題10です
?>