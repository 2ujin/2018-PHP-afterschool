<?php
$pFile = fopen("mirim.txt","w"); //파일을 쓰기 모드로 연당 ^0^ 정의한 파일이 존재 하지 않는 경우 덮어씀
$data = "<br>HELLO WELCOME TO PHP WORLD !!"; //신기하당

fwrite($pFile, $data);
fclose($pFile);
?>