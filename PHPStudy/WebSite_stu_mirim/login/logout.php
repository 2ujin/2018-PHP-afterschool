<?php 
session_start();

unset($_SESSION[userid]);
unset($_SESSION[username]);
unset($_SESSION[usernick]);
unset($_SESSION[userleve]);

echo "<script>location.href = '../index.php'</script>";

?>