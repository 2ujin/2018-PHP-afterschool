<?

session_start();

$userid = $_SESSION[userid];
$username = $_SESSION[username];
$usernick = $_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

$name = $_POST[name];
$nick = $_POST[nick];
$pass = $_POST[pass];
$hp = $_POST[hp1]."-".$_POST[hp2]."-".$_POST[hp3];
$email = $_POST[email1]."@".$_POST[email2];
$regist_day = date('Y-m-d', time());

include '../lib/dbconn.php';

$sql = "update member
        set pass = '$pass', name = '$name', nick = '$nick',
        hp = '$hp', email = '$email', regist_day = '$regist_day'
        where id = '$userid'";

mysql_query($sql);

//세션 정보 변경

$username = $name;
$usernick = $nick;

$_SESSION[username] = $username;
$_SESSION[usernick] = $usernick;

mysql_close();
echo "<script>location.href='../index.php'</script>";

?>