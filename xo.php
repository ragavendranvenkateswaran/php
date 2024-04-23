<?php
global $a;
$a=array('-','-','-','-','-','-','-','-','-');

function Display($a){
    $c=0;
    for($i=0;$i<count($a);$i++){
        echo " | ".$a[$i];
        if(($c+1)%3==0){
            echo(" |\n");
        }
        $c++;
    }
}


function player($d){             
    if($d=='X'){
    return 'O';
    }
    else{
    return'X';
    }
}

function Winner($a,$b,$d){
    if($a[0]==$d&&$a[1]==$d&&$a[2]==$d||$a[3]==$d&&$a[4]==$d&&$a[5]==$d||$a[6]==$d&&$a[7]==$d&&$a[8]==$d){
        return true;
    }
    if($a[0]==$d&&$a[3]==$d&&$a[6]==$d||$a[1]==$d&&$a[4]==$d&&$a[7]==$d||$a[2]==$d&&$a[5]==$d&&$a[8]==$d){
        return true;
    }
    if($a[0]==$d&&$a[4]==$d&&$a[8]==$d||$a[2]==$d&&$a[4]==$d&&$a[6]==$d){
        return true;
    }
    else{
        return false;
    }
}


$d ='X';
for( $j=0;$j<9;$j++){
    $b=readline("Enter value:\n");
    if($a[$b-1]=='-'){
        $a[$b-1]=$d;
        Display($a);
    }
    else{
        echo("Wrong Move");
        continue;
    }
    
    if(Winner($a, $b, $d)){
        echo("The Winner is:".$d);
    break;
    }
    $d=player($d);
}
?>