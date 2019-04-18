<?php
// $a = 10;
// $b = 20;
// $temp = $a;

// $a=$b;
// $b=$temp;

// echo"$a, $b"; 

echo"<h4>버블 정렬을 이용한 배열 원소 정렬</h4><hr>";

$num = array(15,13,9,7,6,12,19,30,28,26);
$count = 10;

echo("정렬 수행 전 : ");
for($a=0; $a<10; $a++)
    echo $num[$a]." ";
echo "<hr>";
for($a=0; $a<$count-1; $a++){
    for($b=0; $b<$count-($a+1); $b++){
        if($num[$b]>$num[$b+1]){
            $temp=$num[$b];
            $num[$b]=$num[$b+1];
            $num[$b+1] = $temp;
        }
    }
    //pass 출력
    $k=$a+1;
    echo " PASS $k : ";
    foreach ($num as $value)
        echo $value. " ";
        echo "<br>";
}
echo("정렬 수행 후 : ");
for($i=0; $i<=10; $i++)   
    echo $num[$i]." ";
echo "<hr>";
?>