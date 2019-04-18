<?php
//counter
$fname = "counter.txt";

if(!file_exists($fname)){ //파일 미 존재시
    touch($fname); //파일 접근 및 수정
    $pFile = fopen($fname,"r+");
    $data = "<?$cnt=0?>";
}
else {
    include "counter.txt";
    $cnt ++;
    $sdata = "<?\$cnt=".$cnt."?>";
    $pFile = fopen($fname, "r+");
    
}
fwrite($pFile, $sdata);
fclose($pFile);

echo "웹 페이지 접속 횟수 : ".$cnt;
?>