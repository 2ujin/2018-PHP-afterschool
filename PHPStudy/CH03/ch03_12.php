<?php
$number = 50;
$count = 0;
$sum = 0;
echo"
<h4>50~500 ¦���� �� - do~while�� </h4><hr>
";
do{
    if($number%2 == 0){
          echo"$number&nbsp;&nbsp";
          $sum += $number;
          $count++;
    }   
    if($count%10==0){print "<br>";}
    
}while($number++ < 500);

echo "<hr><br>";
echo "50~500 ¦�� �հ� : $sum";
?>