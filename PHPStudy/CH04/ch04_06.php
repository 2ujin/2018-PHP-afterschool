<?php
// $a = 10;
// $b = 20;
// $temp = $a;

// $a=$b;
// $b=$temp;

// echo"$a, $b"; 

echo"<h4>���� ������ �̿��� �迭 ���� ����</h4><hr>";

$num = array(15,13,9,7,6,12,19,30,28,26);
$count = 10;

echo("���� ���� �� : ");
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
    //pass ���
    $k=$a+1;
    echo " PASS $k : ";
    foreach ($num as $value)
        echo $value. " ";
        echo "<br>";
}
echo("���� ���� �� : ");
for($i=0; $i<=10; $i++)   
    echo $num[$i]." ";
echo "<hr>";
?>