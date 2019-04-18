<?php
echo "<h4>선택 정렬을 이용한 배열 원소 정렬</h4><hr>";
$num = array(99,90,80,70,60,50,40,30,20,10);

$count = 10;

echo "정렬 수행 전 : ";
for($a=0; $a<$count; $a++)
    echo $num[$a]." ";
    for($i=0; $i<10; $i++){
        $temp = $num[$i];
        for($j=$i; $j>0; $j--){
            if($num[$j-1]>$temp){
                $num[$j]=$num[$j-1];
                if($j==1){
                    $num[$j-1]=$temp;
                    break;
                }
            }
        }
    }
    
  $k=$i+1;
    echo " PASS $k : ";
    foreach ($num as $value)
        echo $value. " ";
        echo "<br>";
        
 echo("정렬 수행 후 : ");
    for($i=0; $i<=10; $i++)
        echo $num[$i]." ";
        echo "<hr>";
?>
