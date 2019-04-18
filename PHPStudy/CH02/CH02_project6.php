<?php
$student1 = 160.3;
$student2 = 173.8;
$student3 = 170.2;
$hap = $student1+$student2+$student3;
$average = $hap/3;

echo "
<h3>3명의 학생 키 합계 & 평균</h3>
<hr></hr>
학생1 : $student1 <br>
학생2 : $student2 <br>
학생3 : $student3<br>
<hr></hr>
신장 합계 : $hap<br>
신장 평균 : $average
";
?>