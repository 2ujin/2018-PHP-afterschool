<?php
$mydb = mysql_connect("localhost", "jin", "1234") or die ("MySQL 접속 실패");
if( !mysql_select_db("mirim",$mydb)) die("DB 선택 불가");

$title = $_POST[title];
$content = $_POST[content];

$sql = "insert into board (title, content)
values('$title', '$content'); ";

mysql_query($sql, $mydb);
mysql_close($mydb);

// $mydb = mysql_coonect("localhost", "jin", "1234") or die ("MySQL 접속 실패"); //파일을 넘긴다 localhost 계정으로 DB 접속하기 위한 함수
// if(!$dbco=mysql_select_db("mirim",$mydb)); //DB 선택

// $title = $_POST[title];

// $sql = "insert into board (title, content)
//         values('$title','$content')"; //데이터 삽입 모든 DB에서 사용하는 언어 


?>