<?php
//counter
$fname = "counter.txt";

if(!file_exists($fname)){ //���� �� �����
    touch($fname); //���� ���� �� ����
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

echo "�� ������ ���� Ƚ�� : ".$cnt;
?>