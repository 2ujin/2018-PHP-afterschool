<?php
echo "<h4>������ ���� ���� �Ǻ�</h4><hr>";
$score = 79;
echo gettype($score);
echo "�Էµ� ���� : $score <br>";
$result = $score/10;

settype($result, 'integer');

switch ($result){
    case 10:
    case 9:
        $grade = "A";
        break;
    case 8:
        $grade = "B";
        break;
    case 7:
        $grade = "C";
        break;
    case 6:
        $grade = "D";
        break;
    default:
        $grade = "F";
}
// if($score>=90){
//    echo "- ���� : A";
// }
// else if ($score>=80){
//     echo "B";
// }
// else if ($score>=70){
//     echo "C";
// }
// else if ($score>=60){
//     echo "D";
// }
// else{
//     echo "F";
// }
echo "$grade";
if($score % 10 >= 5 || $score==100 && $score>60){
    echo "+";
}

?>