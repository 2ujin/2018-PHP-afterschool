<?php
echo "문자열 관련 내장 함수<hr>";

$tel = "010-3950-6960";

$num_tel = strlen($tel);

echo "strelen() 함수 사용 :  $num_tel <br>";

$tel1 = substr($tel, 0,3);
$tel2 = substr($tel, 4,4);
$tel3 = substr($tel, 9,11);


echo"substr() 함수 사용 : $tel1 $tel2 $tel3 <br>";

$phone = explode("-", $tel);
echo "explode() 함수 사용 : $phone[0] $phone[1] $phone[2]";

?>