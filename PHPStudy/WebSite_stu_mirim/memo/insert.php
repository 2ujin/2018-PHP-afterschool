<?
session_start();

$userid=$_SESSION[userid];
$username = $_SESSION[username];
$usernick=$_SESSION[usernick];
$userlevel = $_SESSION[userlevel];

$content = $_POST[content];
$regist_day = date('Y-m-d', time());

if(!$userid){ //�α��� �� ��밡���ϵ���
   echo "<script>
        window.alert('�α����� ����ϼ���');
        history.go(-1);
         </script>";
}
if(!$content){ //���� �Է� ���ɤ������Ϥ�
    echo "<script>
        window.alert('������ �Է��ϼ���');
        history.go(-1);
         </script>";
}
include "../lib/dbconn.php";

$sql = "insert into memo(id, name, nick, content, regist_day)
values('$userid', '$username', '$usernick', '$content','$regist_day')";

mysql_query($sql);
mysql_close();

?>