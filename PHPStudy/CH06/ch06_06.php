<?php
echo "<h4>�̴ϰԽ��� ������ �˻�</h4><h4>";
$mydb = mysql_connect("localhost", "jin", "1234") or die ("MySQL ���� ����");
if( !mysql_select_db("mirim",$mydb)) die("DB ���� �Ұ�");

$sql = "select * from board";
$result = mysql_query($sql);

$rows = mysql_num_rows($result);//���� ����
$cols = mysql_num_fields($result); //���� ����

echo "�Խ��� �� ���� : ".$rows."<br>";

$arr_name = array("NO", "TITLE", "CONTENT","ETC");

echo"<table border = 0 cellpadding = 5><tr bgcolor=#ffcccc>";
  echo"<tr align = center>";
foreach($arr_name as $arr)
    echo "<td>$arr</td>";
echo "</tr>";  
$cnt = 0;
//������ ��� 1 - mysql_fetch_array()
while($data=mysql_fetch_array($result)){
    $uid = $data[uid];
    $cnt++;
    echo "<tr><td>$cnt</td>
    <td>$data[title]</td>
    <td>$data[content]</td>
    <td><a href='boarddelete.php?uid=$uid>����</a></td></tr>";
}

//������ ��� - mysql_fetch_array() / mysql_fetch_row() / mysql_result()
// for($i=0; $i<$rows; $i++){
//     $uid=mysql_result($result,$i,0);
//     $cnt++;
//     echo "<tr align = center><td>$cnt</td>";
//     for($j=1; $j<$cols; $j++){
//         $data = mysql_result($result,$i,$j);
//         echo "<td>$data</td>";
//     }
//     echo "<td><a href='ch06_delete.php?uid=$uid'>����</a></td></tr>";
// }
echo "<table>";

mysql_close($mydb);
echo"<hr>
<form action='ch06_05.php' method = 'post'>
<input type = submit value = '�� �ۼ� �������� �̵�'></form>";
        
    
// // $sql = "create table board  (
// //     uid int not null auto_increment,
// //     title varchar(30) not null,
// //     content text not null,
// //     primary key(uid));";

// // if($result)
// //     echo "board ���̺� ���� �Ϸ� !! <br>";
// // echo"<h4>board ���̺� ������ ����</h4>";
// ////////////////////////////


// // if($result)
// //     echo "board ���̺� ���� �Ϸ� !! <br><hr>";

// //  echo "
// // <table border = '1'>
// // <tr><td>ID</td></tr><tr><td>TITLE</td></tr>
// // </table>";
// $sql = "select * from board"; //-> friend���̺� �ִ� ��� �����͸� �����ּ���
// $result = mysql_query($sql, $mydb);

//  $arr_name = array("NO.", "TITLE", "CONTENT", "���");
//  echo"<table border = 0 cellpadding = 5>";
//  echo"<tr align = center>";
 
// foreach($arr_name as $arr)
//     echo "<td bgcolor = pink>$arr</td>";//���̸����
// echo"<tr>";

// $cnt = 1;
    
//     while($row = mysql_fetch_array($result)){//���������
//         echo "<tr align = center><td>$cnt</td>
//             <td>$row[title]</td>
//             <td>$row[content]</td>";         
//         $cnt ++; 
//        // echo"<td><a href='ch06_04.php?num=$num'>[����]</a></td></tr>";
//     }
//     echo"</table>";
//     mysql_close();

  ?>  
    
