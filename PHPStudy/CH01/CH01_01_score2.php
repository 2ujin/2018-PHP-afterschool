<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr"/>
<title>5������ �հ�/���</title></head>
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
<h3><���������� ����></h3>
    <table border = '1'>
<tr colspan=2><th width =200>����</th><td width=200><center>$kor</td></tr>
<tr colspan=2><th width =200>����</th><td width=200><center>$eng</td></tr>
<tr colspan=2><th width =200>����</th><td width=200><center>$math</td></tr>
<tr colspan=2><th width =200>��ȸ</th><td width=200><center>$soc</td></tr>
<tr colspan=2><th width =200>����</th><td width=200><center>$sci</td></tr>
<tr colspan=2><th width =200>�հ�</th><td width=200><center>$sum</td></tr>
<tr colspan=2><th width =200>���</th><td width=200><center>$avg</td></tr>

</table>
";
?>
</body>
</html>