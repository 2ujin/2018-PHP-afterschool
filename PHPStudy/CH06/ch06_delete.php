<?php
$mydb = mysql_connect("localhost", "jin", "1234") or die ("MySQL ���� ����");
if( !mysql_select_db("mirim",$mydb)) die("DB ���� �Ұ�");

$uid=$_GET['uid'];

$sql = "delete from board where uid=$uid";
mysql_query($sql, $mydb);

mysql_close($mydb);

// ���ڵ带 �����ϰ� �ٽ� student_list.php �� ���ư�
header("location:ch06_05.php"); 
?>