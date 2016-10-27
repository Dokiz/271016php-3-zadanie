<?php
interface A
{
    public function sum($a, $b);
}
interface B
{
    public function out();
}
interface C extends A, B
{
    public function cccc();
}
class PreBase implements C {
    public $res;
    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }
    public function out()
    {
        return $this->res;
    }
    public function cccc()
    {
        $this->res=0;
        return $this->res;
    }
}
$sum=new PreBase();
$sum->sum(15,10);
echo $sum->out();
echo "</br>";
echo $sum->cccc();
?>