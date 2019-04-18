<?php
//CH05_02

echo "<h4>friend 테이블 생성</h4><hr>";

$conn = mysql_connect("localhost","jin","1234");
mysql_select_db("mirim",$conn);

$sql = "create table friend(
        num int not null,
        name char(10),
        adress char(80),
        tel char(20),
        email char(20),
        primary key(num));";

$result = mysql_query($sql);

if($result)
    echo "friend 테이블 생성 성공<p>";
    else echo "friend 테이블 생성 실패<p>";
    
//friend 테이블을 생성하고 age 속성을 추가하는 질의어 
$sql = "alter table friend add age int";

$result = mysql_query($sql);

if($result)
    echo "friend 테이블에 age 속성 추가 생성 성공<p>";
    else echo "friend 테이블에 age 속성 추가 생성 실패<p>";
    ?>