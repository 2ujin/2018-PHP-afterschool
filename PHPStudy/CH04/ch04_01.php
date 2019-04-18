<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<title>5과목의 합계/평균</title></head>
<body>
<?php
    $subject =array("국어", "수학", "영어","사회", "과학");
    $score = array(87,83,97,75,96);
    
    for($i=0; $i<=5; $i++){
        $sum += $score[$i];
    }    
    $avg = $sum/5;
    
echo" <table border = '1'>";
  //  echo "$avg";
    for($j=0; $j<=5; $j++){
        echo "<tr colspan=2><th width =200>$subject[$j]</th><td width=200>$score[$j]</td></tr>";
    }

echo"
<tr colspan=2><th width =200>합계</th><td width=200>$sum</td></tr>
<tr colspan=2><th width =200>평균</th><td width=200>$avg</td></tr>
";

//     echo "
// <h3><이유진님의 성적></h3>
//     <table border = '1'>
// <tr colspan=2><th width =200>국어</th><td width=200><center> $array[0]</td></tr>
// <tr colspan=2><th width =200>영어</th><td width=200><center> $score[1]</td></tr>
// <tr colspan=2><th width =200>수학</th><td width=200><center> $score[2]</td></tr>
// <tr colspan=2><th width =200>사회</th><td width=200><center> $score[3]</td></tr>
// <tr colspan=2><th width =200>과학</th><td width=200><center> $score[4]</td></tr>
// <tr colspan=2><th width =200>합계</th><td width=200><center>$sum</td></tr>
// <tr colspan=2><th width =200>평균</th><td width=200><center>$avg</td></tr>

// </table>
// ";
?>
