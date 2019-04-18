<?php
$uid = setcookie("userid", "jin");
$name = setcookie("username", "이유진");
$passwd = setcookie("userpasswd", "13579", time()+10);

if($uid and $name)
    echo "useri, username, userpasswd cookie 생성 완료!";
?>