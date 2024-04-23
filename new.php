<?php
// $file=fopen("new.json","r");
// $data=fread($file,filesize("new.json"));
// echo $data;

$new=file_get_contents("new.json");
$new1=json_decode($new,true);
var_dump($new1);

foreach($new1 as $y){
  foreach($y as $s=>$val){

echo $s.":" .$val."\n";
 }
}
  
