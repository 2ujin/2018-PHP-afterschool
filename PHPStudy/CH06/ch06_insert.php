<html>
<h4>���� ����</h4><hr>
<h4>�� �� �� �� �¢�</h4><hr>

<table border =1>
<tr align = center><td>
<form action = "04_insert.php" method='post'>
	�̸� : <input type = 'text' name = 'name' size = 8>
	���� : <input type = 'text' name = 'sub1' size = 8>
	����2 : <input type = 'text' name = 'sub2' size = 8>
	����3 : <input type = 'text' name = 'sub3' size = 8>
	����4 : <input type = 'text' name = 'sub4' size = 8>
	����5 : <input type = 'text' name = 'sub5' size = 8></td>
	<td><input type = 'submit' value = '�Է��ϱ�' size = 3 ></td>
	</form>
   </tr>
</html>

<?
//ch06_02_form.php
$conn = mysql_connect("localhost", "jin", "1234");//mysql�� ����
$dbconn =mysql_select_db("mirim", $conn);

$sql = "select * from stud_score order by sum desc"; //-> friend���̺��� �ִ� ��� �����͸� �����ּ���
$result = mysql_query($sql, $conn);

$arr_name = array("��ȣ", "�̸�", "����1", "����2", "����3", "����4", "����5", "�հ�", "���", "���");
echo"<table border = 0 cellpadding = 5>";
echo"<tr align = center>";

echo "<br><h4>�� �� �� �� �� �� </h4><hr><br>";
foreach($arr_name as $arr)
    echo "<td bgcolor = pink>$arr</td>";//���̸����
echo"<tr>";

$cnt = 1;
    
    while($row = mysql_fetch_array($result)){//���������
        $num = $row[num];
        echo "<tr align = center><td>$num</td>
            <td>$row[name]</td>
            <td>$row[sub1]</td>
            <td>$row[sub2]</td>
            <td>$row[sub3]</td>
            <td>$row[sub4]</td>
            <td>$row[sub5]</td>
            <td>$row[sum]</td>
            <td>$row[avg]</td>";         
        $cnt ++; 
        echo"<td><a href='ch06_04.php?num=$num'>[����]</a></td></tr>";
    }
    echo"</table>";
    mysql_close();
?>