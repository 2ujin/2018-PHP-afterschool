<?php
echo"<h4>array() �Լ� �̿� - ���� ���</h4><hr>";
$day = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");

foreach($day as $value)
    echo"$value  ";

echo"<h4>sort() �Լ� �̿� - ���� ���</h4><hr>";
sort($day);

foreach($day as $value)
    echo"$value  ";

echo "<p><h4>���� - sort() �Լ��� �̿��� ���� ����</h4><hr>";
$fruit = array("watermelon", "orange", "apple", "banana", "straberry", "tomato", "peach");
sort($fruit);
foreach ($fruit as $w)
    echo"$w  ";
 
    ?>