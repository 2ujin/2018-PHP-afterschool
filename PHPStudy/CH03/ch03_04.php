<?php
echo "<h4>점수에 따른 학점 판별</h4><hr>";
$score = 84;

echo "입력된 점수 : $score <br>";

if($score>=90){
   echo "- 학점 : A";
}
else if ($score>=80){
    echo "B";
}
else if ($score>=70){
    echo "C";
}
else if ($score>=60){
    echo "D";
}
else{
    echo "F";
}
if($score%10 >= 5 || $score==100 && $score >= 60){
    echo "+";
}

?>