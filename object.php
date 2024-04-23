<?php
class Calculator{
    public $num1,$num2;
    public  function add($num0,$num01){
      echo($num1+$num2."\n");
    }
  //  public function add($n,$num2){
  //   echo($num1-$num2."\n");

  //  }
    // public function add($num3,$num4){
    // echo($num1*$num2."\n");

  //  }
  //  public function add($num5,$num6){
  //   echo($num1/$num2."\n");
  //  }
}
class Scientificcalculator extends Calculator{
public $c,$d;
function sqrt($c){
    echo(sqrt($c)."\n");
}
function pow($c,$d){
  echo(pow($c,$d)."\n");
}
function square($c){
  echo($c**2 ."\n");
}
function rand($c,$d){
echo(rand($c,$d)."\n");
}
function floor($c){
  echo(floor($c)."\n");
}
function round($c){
  echo (round($c)."\n");
}
}
class Mathematicalcalculator extends Scientificcalculator{
  public $i,$j;
  function log($i){
    echo (log($i)."\n");
  }
  function cos($i){
  echo(cos($i)."\n");
  }
  function  sin($i){
    echo (sin($i)."\n");
  }
  function tan($i){
    echo(tan($i)."\n");
  }
}
$k=new Mathematicalcalculator();
$k->log(5);
$k->cos(10);
$k->sin(0.215);
$k->tan(5);
$k->sqrt(64);
$k->pow(2,4);
$k->square(40);
$k-> rand(1,50);
$k-> floor(4.2545);
$k-> round(0.6);
$k-> add(1,2);
$k-> sub(5,2);
$k-> multiple(10,2);
$k-> divide(10,5);
// }
// $a=new calculator();
// $a->add(30,40);
// $a->sub(30,40);
// $a->multiple(30,40);
// $a->divide(30,40);
// $b=new calculator();
// $b->add(15,20);
// $b->sub(15,20);
// $b->multiple(15,20);
// $b->divide(15,20);
 
