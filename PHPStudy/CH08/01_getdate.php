<?php

echo "날짜 및 시간 함수";

$today = getdate();

foreach($today as $key=>$value)
    echo $key."===>".$value."<br>";

    echo "<hr>";
    
    $result = 365 - $today[yday];
    
    echo "오늘 날짜 : $today[year]년 $today[mon]월 $today[mday]일 $today[weekday] <br> ";
    echo "지금 시간 : $today[hours]시 $today[minutes]분 $today[seconds]초";
    echo "$today[year]년이 $result 남았어요";
    
    ?>