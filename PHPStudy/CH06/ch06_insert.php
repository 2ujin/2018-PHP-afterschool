<html>
<h4>성적 관리</h4><hr>
<h4>◈ 성 적 입 력◈</h4><hr>

<table border =1>
<tr align = center><td>
<form action = "04_insert.php" method='post'>
	이름 : <input type = 'text' name = 'name' size = 8>
	과목 : <input type = 'text' name = 'sub1' size = 8>
	과목2 : <input type = 'text' name = 'sub2' size = 8>
	과목3 : <input type = 'text' name = 'sub3' size = 8>
	과목4 : <input type = 'text' name = 'sub4' size = 8>
	과목5 : <input type = 'text' name = 'sub5' size = 8></td>
	<td><input type = 'submit' value = '입력하기' size = 3 ></td>
	</form>
   </tr>
</html>

<?
//ch06_02_form.php
$conn = mysql_connect("localhost", "jin", "1234");//mysql에 접근
$dbconn =mysql_select_db("mirim", $conn);

$sql = "select * from stud_score order by sum desc"; //-> friend테이블에 있는 모든 데이터를 보여주세요
$result = mysql_query($sql, $conn);

$arr_name = array("번호", "이름", "과목1", "과목2", "과목3", "과목4", "과목5", "합계", "평균", "비고");
echo"<table border = 0 cellpadding = 5>";
echo"<tr align = center>";

echo "<br><h4>◈ 성 적 출 력 ◈ </h4><hr><br>";
foreach($arr_name as $arr)
    echo "<td bgcolor = pink>$arr</td>";//열이름출력
echo"<tr>";

$cnt = 1;
    
    while($row = mysql_fetch_array($result)){//데이터출력
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
        echo"<td><a href='ch06_04.php?num=$num'>[삭제]</a></td></tr>";
    }
    echo"</table>";
    mysql_close();
?>