<?php
$j = 1;
echo "<h4>3�� ������ ǥ �����<h4><hr>";
echo "<table border = '1'>";
for($k=2; $k<10; $k++){
    echo "<td width = '100'>{$k}��</td>";
}
for ($j; $j<10; $j++){
    echo "<tr>";
    for($k=2; $k<10; $k++){
     $result = $k*$j;
    echo"<th width = '160'>$k x $j = $result</th>";
    }
    echo "</tr>";
}

echo"</table>";
?>