<?php
$a=array("name"=>"ragavendran","phone"=>8637438763,"email"=>"ragavendran0709@gnail.com");
$a["name"]="raj";
echo($a["name"]);
var_dump($a);

foreach($a as $a=>$b){
    echo("$a:$b"."\n");
}

$arr=array(0,1,2,3,4,5,6);
for($i=0;$i<count($arr);$i++){
    echo($arr[$i]."\n");

}
