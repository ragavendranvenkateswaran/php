<?php
for ($i=0;$i<5;$i++){
    for ($j=0;$j<5-$i;$j++){
        echo(" ");
    }
    for ($j=0;$j<=$i*2;$j++){
        echo("*");
        }
    echo("\n");
}
for ($i=3;$i>=0;$i--){
    for ($j=0;$j<5-$i;$j++){
        echo(" ");
    }
    for ($j=0;$j<=$i*2;$j++){
        echo("*");
        }
    echo("\n");
}


?>