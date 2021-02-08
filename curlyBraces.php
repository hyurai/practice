<?php 

namespace matumoto{
//波括弧{}で囲むやり方
function sayword(){
   return 'おはようございます';    
}
}

namespace yosida{

    function sayword(){
        return 'こんにちは';
}
}
namespace matumoto\taro{
    //サブクラス、ディレクトリみたいな階層を持たせることができる
    function sayword(){
        return 'これはmatumotoのサブクラスです';
    }
}

namespace nagai{
    //ここではnameSpace.phpファイルのnamespace nagaiと同じ空間になる。そのため既存の処理の名前を定義することはできない
}

?>