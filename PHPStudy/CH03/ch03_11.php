<?php
//while문 사용해서 101~300 4의 배수 출력
$number = 101;
$count = 0;
$sum = 0;
echo"
<h4>101~300 4의 배수 - while문<h4><hr>
";
while ($number<=300) {
   if($number%4==0){
    echo "$number ";
    $sum += $number;
    $count ++;
    }
    $number ++;
    if($count%10==0){print "<br>";}
}

echo"<hr><br>
101~300 4의 배수 합계 : $sum";
?>