<?php 
class AllNumber{
    protected $number = "";
    public function __construct(int $number)
    {
        $this->numberw = $number;        
    }
    public function randnumber(){

        echo('今から数字を出力する'.$this->number.'当てることが出来たかな?');
    }


}

class updateNumber extends AllNumber{
    public function randnumber()
    {
        $Seque = round($this->number * $this->number);
        echo('こちらが上書きする前の数字です'.$this->number.'こちらが上書きした数字です'.$Seque);
    }
}

$echoAllNumber = new AllNumber(44);
$echoAllNumber->randnumber();

$echoUpdateNumber = new updateNumber(10);
$echoUpdateNumber->randnumber();



?>