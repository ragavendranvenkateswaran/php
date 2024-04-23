<?php
$a=array(1,2,3,4,5,6,7);

function add($a){
    rsort($a);
for($i=0;$i<count($a);$i++){
  echo($a[$i]."\n");

}
}
add($a);
?>