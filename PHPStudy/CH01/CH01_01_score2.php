<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<title>5과목의 합계/평균</title></head>
<body>
<?php
    $kor  = 87;
    $eng  = 83;
    $math = 97;
    $soc  = 75;
    $sci  = 96;
    
    $sum = $kor+$eng+$math+$soc+$sci;
    $avg = ($kor+$eng+$math+$soc+$sci) /5;
    echo "
<h3><이유진님의 성적></h3>
    <table border = '1'>
<tr colspan=2><th width =200>국어</th><td width=200><center>$kor</td></tr>
<tr colspan=2><th width =200>영어</th><td width=200><center>$eng</td></tr>
<tr colspan=2><th width =200>수학</th><td width=200><center>$math</td></tr>
<tr colspan=2><th width =200>사회</th><td width=200><center>$soc</td></tr>
<tr colspan=2><th width =200>과학</th><td width=200><center>$sci</td></tr>
<tr colspan=2><th width =200>합계</th><td width=200><center>$sum</td></tr>
<tr colspan=2><th width =200>평균</th><td width=200><center>$avg</td></tr>

</table>
";
?>
</body>
</html>