<?php
$result = 1;
echo "<h4>10! Ãâ·Â - For¹®</h4>
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