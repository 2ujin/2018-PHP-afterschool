<?php
echo "<h4>������ ���� ���� �Ǻ�</h4><hr>";
$score = 84;

echo "�Էµ� ���� : $score <br>";

if($score>=90){
   echo "- ���� : A";
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