<?php
$uid = setcookie("userid", "jin");
$name = setcookie("username", "������");
$passwd = setcookie("userpasswd", "13579", time()+10);

if($uid and $name)
    echo "useri, username, userpasswd cookie ���� �Ϸ�!";
?>