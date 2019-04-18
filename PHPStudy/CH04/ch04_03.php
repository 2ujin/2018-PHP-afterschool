<?php
$stuid[]=2201;
$stuid[]=2213;
$stuid[]=2214;
$stuid[]=2215;

$stuid["허주희"]=2219;
$stuid["최유라"]=2218;
$stuid[]=2215;

echo"\$stuid[0]=$stuid[0]<br>";
echo"\$stuid[0]=$stuid[1]<br>";
echo"\$stuid[0]=$stuid[2]<br>";
echo"\$stuid[0]=$stuid[3]<br>";

echo"\$stuid[\"최유라\"]=".$stuid["최유라"]."<br>";
echo"\$stuid[\"허허주ㅡ히\"]=".$stuid["허주희"]."<br>"; //.은 이어주긔

echo"<p>인덱싱된 배열과 연관배열 초기화 <hr>";
$stu = array(2202, "name"=>"강한나", "주소"=>"구디",18,"별명"=>"철새", "jumsu"=>88);

echo "학번 : $stu[0] <br>";
echo "이름 : ".$stu["name"]."<br>";
echo "주소 : ".$stu["주소"]."<br>";
echo "나이 : ".$stu[3]."<br>";
echo "별명 : ".$stu["별명"]."<br>";
echo "점뚜 : ".$stu["jumsu"]."<br>";


?>