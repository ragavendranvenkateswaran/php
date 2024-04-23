<?php
for($i=0;$i<=5;$i++){
    for($j=0;$j<=5-$i;$j++){
        echo(" ");
    }
    for($j=$i;$j>1;$j--){
        echo($j);
    }
      for($j=1;$j<=$i;$j++){
        echo($j);
    }
    

    echo("\n");
}
for($i=4;$i>=0;$i--){
    for($j=0;$j<=5-$i;$j++){
        echo(" ");
    }
    for($j=$i;$j>1;$j--){
        echo($j);
    }
      for($j=1;$j<=$i;$j++){
        echo($j);
    }
    

    echo("\n");
}
?>

