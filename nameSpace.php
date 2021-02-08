<?php
//課題19
//名前空間は空間を指定する。別々の空間で同じ名前の関数名を付けることができる
namespace nagai;

function sayword(){
    return 'おはようございます';
}

namespace mizikai;

function sayword(){
    return 'こんにちは';
}
namespace anndou;
    function sayword(){
        return 'こんばんわ';
    }    






?>