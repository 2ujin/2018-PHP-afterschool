<?php
session_start(); //항상 맨 처음에 설정

echo "세션 시작 <hr>";

$_SESSION[userid] = 'jin';
$_SESSION[username] = '이유진';
$_SESSION[userpw] = '010930';
$_SESSION[time] = time()+10;

echo"4개의 변수 세션 정보 등록 성공 <br>";

$time = date('Y-m-d(H:i:s)', $_SESSION[time]);

echo "1.userid : $_SESSION[userid] <br>"; 
echo "2.username : $_SESSION[username]<br>";
echo "3.userpw : $_SESSION[userpw] <br>";
echo "4.time : $_SESSION[time] <br>";

?>