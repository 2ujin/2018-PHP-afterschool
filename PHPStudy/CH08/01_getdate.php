<?php

echo "��¥ �� �ð� �Լ�";

$today = getdate();

foreach($today as $key=>$value)
    echo $key."===>".$value."<br>";

    echo "<hr>";
    
    $result = 365 - $today[yday];
    
    echo "���� ��¥ : $today[year]�� $today[mon]�� $today[mday]�� $today[weekday] <br> ";
    echo "���� �ð� : $today[hours]�� $today[minutes]�� $today[seconds]��";
    echo "$today[year]���� $result ���Ҿ��";
    
    ?>