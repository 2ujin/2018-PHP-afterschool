<?php
echo "���ڿ� ���� ���� �Լ�<hr>";

$tel = "010-3950-6960";

$num_tel = strlen($tel);

echo "strelen() �Լ� ��� :  $num_tel <br>";

$tel1 = substr($tel, 0,3);
$tel2 = substr($tel, 4,4);
$tel3 = substr($tel, 9,11);


echo"substr() �Լ� ��� : $tel1 $tel2 $tel3 <br>";

$phone = explode("-", $tel);
echo "explode() �Լ� ��� : $phone[0] $phone[1] $phone[2]";

?>