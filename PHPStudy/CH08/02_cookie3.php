<?php
$uid = setcookie("userid", "");
$name = setcookie("username", "");
$passwd = setcookie("userpasswd", "");

if($uid and $name)
    echo "userid, username, userpasswd cookie ���� �Ϸ�!";
    ?>