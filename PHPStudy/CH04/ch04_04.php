<?php
echo"foreach문 - 일반배열<hr>";

$num = array(11,22,33,44,55);

foreach($num as $value)
    echo"변수 $value<br>";

echo"<p>";
echo "foreach문 - 연관배열<hr>";
$seaoson = array("봄" => "딸기", "여름"=>"수박", "가을"=>"감", "겨울"=>"한라봉");

foreach($seaoson as $fruits)
?>