<?php
$mydb = mysql_connect("localhost", "jin", "1234") or die ("MySQL ���� ����");
if( !mysql_select_db("mirim",$mydb)) die("DB ���� �Ұ�");

$title = $_POST[title];
$content = $_POST[content];

$sql = "insert into board (title, content)
values('$title', '$content'); ";

mysql_query($sql, $mydb);
mysql_close($mydb);

// $mydb = mysql_coonect("localhost", "jin", "1234") or die ("MySQL ���� ����"); //������ �ѱ�� localhost �������� DB �����ϱ� ���� �Լ�
// if(!$dbco=mysql_select_db("mirim",$mydb)); //DB ����

// $title = $_POST[title];

// $sql = "insert into board (title, content)
//         values('$title','$content')"; //������ ���� ��� DB���� ����ϴ� ��� 


?>