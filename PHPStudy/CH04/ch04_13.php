<?php
echo "Call by reference <p>";
function swap1(&$a, &$b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$i=5; $j=10;
echo " Before swap : i = $i, j = $j<br>";
swap1($i,$j);
echo "After swap : i = $i, j = $j<p>";

echo " Call by value (php �⺻ ����) <p>";
function swap2($a, $b){
    $temp = $a;
    $a= $b;
    $b = $temp;
}
echo " Before swap : i = $i, j = $j<br>";
swap2($i, $j);
echo " After swap : i = $i, j = $j<p>";

echo "3.Call by value (php �⺻ ����) - global ���� ���� <p>";

function swap3($a, $b) {
    global $$a, $$b;
    
    $temp = $$a;
    $$a = $$b;
    $$b = $temp;

}
$i=5; $j=10;

echo "Before swap : i = $i, j = $j <br>";
swap3('i','j');
echo "After swap : i = $i, j = $j <br>";


?>