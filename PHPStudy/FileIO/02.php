<?php
$pFile = fopen("mirim.txt", "r");

if($pFile)
    echo "파일 열기 성공 <br> ";
else 
    echo "파일 열기 실패";

$data = fread($pFile, 5); 
echo "실행 결과 : $data";

echo "fgets 함수 사용 <br>";
while($line=fgets($pFile)){
    echo $line."<br>";
}

fclose($pFile);
?>