<?php
$mydb = mysql_connect("localhost", "jin", "1234") or die ("MySQL 접속 실패");
if( !mysql_select_db("mirim",$mydb)) die("DB 선택 불가");

$uid=$_GET['uid'];

$sql = "delete from board where uid=$uid";
mysql_query($sql, $mydb);

mysql_close($mydb);

// 레코드를 삭제하고 다시 student_list.php 로 돌아감
header("location:ch06_05.php"); 
?>