<?php
$stuid[]=2201;
$stuid[]=2213;
$stuid[]=2214;
$stuid[]=2215;

$stuid["������"]=2219;
$stuid["������"]=2218;
$stuid[]=2215;

echo"\$stuid[0]=$stuid[0]<br>";
echo"\$stuid[0]=$stuid[1]<br>";
echo"\$stuid[0]=$stuid[2]<br>";
echo"\$stuid[0]=$stuid[3]<br>";

echo"\$stuid[\"������\"]=".$stuid["������"]."<br>";
echo"\$stuid[\"�����֤���\"]=".$stuid["������"]."<br>"; //.�� �̾��ֱ�

echo"<p>�ε��̵� �迭�� �����迭 �ʱ�ȭ <hr>";
$stu = array(2202, "name"=>"���ѳ�", "�ּ�"=>"����",18,"����"=>"ö��", "jumsu"=>88);

echo "�й� : $stu[0] <br>";
echo "�̸� : ".$stu["name"]."<br>";
echo "�ּ� : ".$stu["�ּ�"]."<br>";
echo "���� : ".$stu[3]."<br>";
echo "���� : ".$stu["����"]."<br>";
echo "���� : ".$stu["jumsu"]."<br>";


?>