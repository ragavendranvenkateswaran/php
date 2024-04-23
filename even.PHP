<?php
$a=50;
$i=1;
$b=0;

for($i=1;$i<=$a;$i++){
    if($i%2==0){
        echo($i."\n");
        $b=$b+$i;
    }
}
echo( "even number total".$b);
