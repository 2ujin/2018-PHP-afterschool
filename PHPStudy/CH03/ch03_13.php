<?php
$result = 1;
echo "<h4>10! ��� - For��</h4>
<hr>
";


for($i=1; $i<=10; $i++){  
    $result *= $i;
    if($i==10)
        echo"$i";
    else 
        echo"$i x ";
}
echo"<br>";
echo "10! = $result";
?>