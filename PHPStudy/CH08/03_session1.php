<?php
session_start(); //�׻� �� ó���� ����

echo "���� ���� <hr>";

$_SESSION[userid] = 'jin';
$_SESSION[username] = '������';
$_SESSION[userpw] = '010930';
$_SESSION[time] = time()+10;

echo"4���� ���� ���� ���� ��� ���� <br>";

$time = date('Y-m-d(H:i:s)', $_SESSION[time]);

echo "1.userid : $_SESSION[userid] <br>"; 
echo "2.username : $_SESSION[username]<br>";
echo "3.userpw : $_SESSION[userpw] <br>";
echo "4.time : $_SESSION[time] <br>";

?>