<?php 
//array型
$os = array('Windouws','macOS','Linux');
//arrayは値が配列でないといけない
echo $os[0].'は使っていません';
//連想配列
$test = arraY(
    '国語' => 80,
    '数学' => 70,
    '英語' => 80,
);
//
echo $test["国語"];
//String型文字列
$string = 'macOSを使っています';
echo $string;

//integer型整数
$integer1 = 2;
$integer2 = 1;
echo $integer1 + $integer2;

//boolaen型false or trueしか入らない。
$boolean = true;
if ($boolean =! false){
echo 'これはtureだ';

}
//Date型今日の日付が表示される
echo date('Y年m月d日').'<br>';
echo date('Y年m月d日　H時i分s秒');

?>