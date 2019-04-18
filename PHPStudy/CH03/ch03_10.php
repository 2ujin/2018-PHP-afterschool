<?php
$number=1;
$odd_sum=0;
$even_sum=0;
$sum = 0;
do{
    echo"$number&nbsp;&nbsp";
    if($number%10==0){print "<br>";}
   $sum += $number;
   if($number%2==0)
       $even_sum+=$number;
   else
       $odd_sum+=$number;
   echo"$number ";
   
}while ($number++ < 100);
