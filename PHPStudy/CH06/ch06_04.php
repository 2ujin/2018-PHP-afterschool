<?php
$conn = mysql_connect("localhost","jin","1234");
$dbconn = mysql_select_db("mirim", $conn);

$num=$_GET['num'];

$sql = "delete from stud_score where num = $num";
mysql_query($sql, $conn);

mysql_close($conn);

// ���ڵ带 �����ϰ� �ٽ� student_list.php �� ���ư�
header("location:ch06_insert.php"); 