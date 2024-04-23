<?php
abstract class vechiles{
    public $color,$model,$make;

abstract function engine();
    
    

    abstract function brake();
    
    

    abstract function light();
    
    public function welcome(){
        echo "hi welcome";
    }
}
   interface cars{
    function sunroof();
    function speaker();

    
   } 


class car extends vechiles implements cars{

    function engine(){
        echo "The engine is running\n";
    }
    function brake(){
        echo "the brake is applied\n";
    }
    function light(){
        echo "the light is on\n";
    }
    function sunroof(){
      echo "the sunroof is working\n";
    }
    function speaker(){
        echo"THe speaker quality is good\n";

    }
    function welcome(){
        echo"welcome over writing\n";
    }
}
   $obj=new car();
   $obj-> speaker();
   $obj-> sunroof();
   $obj-> light();
   $obj-> brake();
   $obj-> engine();

