<?php
echo "<h4>while��</h4><hr>";
$number=1;
$hap = 0;
$hol = 0;
$zak = 0;

while ($number<=10){
    echo"$number ";
    $hap += $number;
    if($number%2==0){
        $hol += $number;
    }
    else{
        $zak += $number;
    }
    $number++;
}
echo"<br>";
echo "1~10������ �հ� : $hap<br>";
echo "1~10������ Ȧ�� �հ� : $zak<br>";
echo "1~10������ ¦�� �հ� : $hol";
?>

