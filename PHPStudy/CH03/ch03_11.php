<?php
//while�� ����ؼ� 101~300 4�� ��� ���
$number = 101;
$count = 0;
$sum = 0;
echo"
<h4>101~300 4�� ��� - while��<h4><hr>
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
101~300 4�� ��� �հ� : $sum";
?>