<?php
$i = 3;
$j = 1;
echo "<h4>3단 구구단 표 만들기<h4><hr>";
for ($j; $j<9; $j++){
    $result = $i*$j;
  echo"  <table border = '1'>
    <th width = '160'>$i x $j = $result</th>
    </table>";
}

// echo"
// <table border = '1'>
// //<th width = '160'>echo "$i x $j <br>"</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// <th width = '160'>이야</th>
// </table>
// ";
?>
