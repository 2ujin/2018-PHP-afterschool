<?
session_start();

$userid=$_SESSION[userid];
$username = $_SESSION[username];
$usernick=$_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

$ripple_content = $_POST[ripple_content];
$pnum = $_POST[pnum];

$regist_day = date('Y-m-d(H:i)', time());

if(!$userid){ //�α��� �� ��밡���ϵ���
    echo "<script>
        window.alert('�α����� ����ϼ���');
        history.go(-1);
         </script>";
}
if(!$ripple_content){ //���� �Է� ���ɤ������Ϥ�
    echo "<script>
        window.alert('������ �Է��ϼ���');
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