<?php
$file=fopen("file.html","r");
fwrite($file,"php");
$data=fread($file,filesize('file.html'));
echo $data;

unlink("file.html");