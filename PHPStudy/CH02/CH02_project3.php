<?php
$price = 800;
$gae = 3;
$myprice = 3000;
$money = $myprice - $price*$gae;
echo "
<h3>거스름돈 계산</h3>
<hr></hr>
물건 가격 : $price <br>
구매 개수 : $gae <br>
지불 금액 : $myprice <br>
<hr></hr>
거스름돈 : {$money}원
"
?>