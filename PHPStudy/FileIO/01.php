<?php
$pFile = fopen("mirim.txt","w"); //������ ���� ���� ���� ^0^ ������ ������ ���� ���� �ʴ� ��� ���
$data = "<br>HELLO WELCOME TO PHP WORLD !!"; //�ű��ϴ�

fwrite($pFile, $data);
fclose($pFile);
?>