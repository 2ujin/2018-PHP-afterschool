<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<title>5������ �հ�/���</title></head>
<body>
<?php
    $subject =array("����", "����", "����","��ȸ", "����");
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
<tr colspan=2><th width =200>�հ�</th><td width=200>$sum</td></tr>
<tr colspan=2><th width =200>���</th><td width=200>$avg</td></tr>
";

//     echo "
// <h3><���������� ����></h3>
//     <table border = '1'>
// <tr colspan=2><th width =200>����</th><td width=200><center> $array[0]</td></tr>
// <tr colspan=2><th width =200>����</th><td width=200><center> $score[1]</td></tr>
// <tr colspan=2><th width =200>����</th><td width=200><center> $score[2]</td></tr>
// <tr colspan=2><th width =200>��ȸ</th><td width=200><center> $score[3]</td></tr>
// <tr colspan=2><th width =200>����</th><td width=200><center> $score[4]</td></tr>
// <tr colspan=2><th width =200>�հ�</th><td width=200><center>$sum</td></tr>
// <tr colspan=2><th width =200>���</th><td width=200><center>$avg</td></tr>

// </table>
// ";
?>
