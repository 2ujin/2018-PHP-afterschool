<?php
echo "<h4>friend ���̺��� ������ �˻� - mysql_result()</h4><hr>";

$conn = mysql_connect("localhost","jin","1234");
$dbconn = mysql_select_db("mirim",$conn);

$sql = "create table stud_score(
        num  int not null auto_increment,
        name varchar(12), 
        sub1 int,
        sub2 int,
        sub3 int,
        sub4 int,   
        sub5 int,
        sum  int,
        avg  float,
        primary key(num))"; 

$result = mysql_query($sql);

?>