<?php
$j = 1;
echo "<h4>3�� ������ ǥ �����<h4><hr>";
echo "<table border = '1' width ='600'>";
$k=2; 

while ($k<10){
    echo "<td width = '100'>{$k}��</td>";
$k++;
}
$j;
while ($j<10){
    echo "<tr>";
    $k=2;
    while($k<10){
     $result = $k*$j;
    echo"<th width = '160'>$k x $j = $result</th>";
    $k++;
    }
    echo "</tr>";
    $j++;
}

echo"</table>";
?>