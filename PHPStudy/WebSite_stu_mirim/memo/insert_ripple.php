<?
session_start();

$userid=$_SESSION[userid];
$username = $_SESSION[username];
$usernick=$_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

$ripple_content = $_POST[ripple_content];
$pnum = $_POST[pnum];

$regist_day = date('Y-m-d(H:i)', time());

if(!$userid){ //로그인 후 사용가능하도록
    echo "<script>
        window.alert('로그인후 사용하세요');
        history.go(-1);
         </script>";
}
if(!$ripple_content){ //내용 입력 가능ㅎㅏ도록ㅇ
    echo "<script>
        window.alert('내용을 입력하세요');
        history.go(-1);
         </script>";
}
include "../lib/dbconn.php";

$sql = "insert into memo_ripple(parent, id, name, nick, content, regist_day)
values('$pnum','$userid', '$username', '$usernick', '$ripple_content','$regist_day')";

mysql_query($sql);
mysql_close();

echo "<script>location.href='memo.php'</script>";
?>
