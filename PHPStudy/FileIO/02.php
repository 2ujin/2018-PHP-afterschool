<?php
$pFile = fopen("mirim.txt", "r");

if($pFile)
    echo "���� ���� ���� <br> ";
else 
    echo "���� ���� ����";

$data = fread($pFile, 5); 
echo "���� ��� : $data";

echo "fgets �Լ� ��� <br>";
while($line=fgets($pFile)){
    echo $line."<br>";
}

fclose($pFile);
?>