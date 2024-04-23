<?php
$a=readline("enter the age");

if($a<18){
    echo("minor");
}

elseif($a>=18&&$a<=60){
    echo("major");
}

else{
    echo("senior citizen");
}
?>