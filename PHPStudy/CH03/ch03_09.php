<?php
echo "<h4>while문</h4><hr>";
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
echo "1~10까지의 합계 : $hap<br>";
echo "1~10까지의 홀수 합계 : $zak<br>";
echo "1~10까지의 짝수 합계 : $hol";
?>

