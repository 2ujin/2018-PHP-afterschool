<?php 
session_start();

unset($_SESSION[userid]);
unset($_SESSION[username]);
unset($_SESSION[userpw]);
unset($_SESSION[time]);

echo"3���� ���� ���� ���� ��� ���� <br>";

$time = date('Y-m-d(H:i:s)', $_SESSION[time]);

echo "1.userid : $userid <br>";
echo "2.username : $username <br>";
echo "3.userpw : $userpw <br>";
echo "4.time : $time <br>";
?>