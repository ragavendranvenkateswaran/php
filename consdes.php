<?php
class cons{
    // public $name,$age;
    public $student=[];
    public function __construct(){
        echo ("php");
    }
    public function __set($name,$value){
        $this->student[$name]=$value;
    }
    public function __get($name){
        if($name=="name"){
            echo $this->$name;
        }
    }

    public function __toString(){
        $out="";
        foreach($this->student as $nam => $val){
            $out.= "\n$nam : $val";
        }
        return $out;
    }
    public function __destruct(){
        echo "the object is end";
    }
    
}   

$call=new cons();
$call->name;
$call->age="84";
$call->phone="83798738964";
$call->email="ragu@gmail";
$call->name1="ragu3345";
$call->age1="84ew";
$call->phone1="83798738964";
$call->email1="ragu@gmail";
$call->name2="ragu";
$call->age2="84";
$call->phone2="83798738964";
$call->email2="ragu@gmail";
$call->name3="ragu";
$call->age3="84";
$call->phone3="83798738964";
$call->email3="ragu@gmail";
echo $call;
