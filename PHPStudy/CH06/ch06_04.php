<?php
$conn = mysql_connect("localhost","jin","1234");
$dbconn = mysql_select_db("mirim", $conn);

$num=$_GET['num'];

$sql = "delete from stud_score where num = $num";
mysql_query($sql, $conn);

mysql_close($conn);

// 레코드를 삭제하고 다시 student_list.php 로 돌아감
header("location:ch06_insert.php"); 