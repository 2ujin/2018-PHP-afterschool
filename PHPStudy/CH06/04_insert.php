<?php
//ch06_03_insert.php

    $conn = mysql_connect("localhost", "jin", "1234");//mysql�� ����
    $dbconn =mysql_select_db("mirim", $conn);
    
    $name = $_POST['name'];
    $sub1 = $_POST['sub1'];
    $sub2 = $_POST['sub2'];
    $sub3 = $_POST['sub3'];
    $sub4 = $_POST['sub4'];
    $sub5 = $_POST['sub5'];

    //$sum = $_POST['sub1']+$_POST['sub2']+$_POST['sub3']+$_POST['sub4']+$_POST['sub5'];
    $sum = $sub1+$sub2+$sub3+$sub4+$sub5;
    $avg = $sum/5;

    $sql = "insert into stud_score (name, sub1, sub2, sub3, sub4, sub5, sum, avg)
    values('$name',$sub1,$sub2,$sub3,$sub4,$sub5,$sum,$avg)";
    $result = mysql_query($sql, $conn);

    /*echo $_POST['name']."���� ������ �Է��ϼ̽��ϴ�. <br>";
    echo "����1 : ".$_POST['sub1']."<br>";
    echo "����2 : ".$_POST['sub2']."<br>";
    echo "����3 : ".$_POST['sub3']."<br>";
    echo "����4 : ".$_POST['sub4']."<br>";
    echo "����5 : ".$_POST['sub5']."<br>";
    echo "�հ� : ".$_POST['sum']."<br>";
    echo "��� : ".$_POST['avg']."<br>";*/
   if($result)
       echo "<br>".$_POST['name']." �� ������ �ԷµǾ����ϴ�.<br>";
   
   echo"
    <form action = 'ch06_insert.php'>
    <input type=submit value='Ȩ���� ���ư���' ></input>
   </form>";
?>