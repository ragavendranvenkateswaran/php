<?php
$a=readline("Enter the gender:");
$b=readline("Enter the age:");
$c=readline("Enter the level:");
if($a=='M'){
    if($b>12&&$b<18){
        if($c>13.1&&$c<15.1){
            echo("Normal");
        }
        else{
            echo("Obnormal");
        }
    }
    else if($b>18){
        if($c<13.6&&$c<17.7){
            echo("Normal");
        }
        else{
            echo("Obnormal");
        }

    }
    else{
        echo("invalied age");
    }  
}
else if ($a=='F'){
    if($b>12&&$b<18){
        if($c<12.1&&$c>16.1){
            echo("Normal");
        }
        else{
            echo("Obnormal");
        }
    }
    else if($b>18){
        if($c<12.1&&$c<15.1){
            echo("Normal");
        }
        else{
            echo("Obnormal");
        }
    }
        else{
            echo("Invalied age");
        }


}
else{
    echo("invalied gender");
}
    
?>
