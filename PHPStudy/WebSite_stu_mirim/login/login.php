<?
session_start();

$id = $_POST[id];
$pass = $_POST[pass];
    
if(!$id){//���̵� �Է� ���� ó��
    echo "<script>
                window.alert('���̵� �Է��ϼ���');
                history.go(-1)
            </script>";
}
if(!$pass){//��й�ȣ �Է� ���� ó��
    echo "<script>
                window.alert('��й�ȣ�� �Է��ϼ���');
                history.go(-1)
            </script>";
}
include "../lib/dbconn.php";

$sql = "select * from member where id = '$id'";
$result = mysql_query($sql);

if($result)
    $record = mysql_num_rows($result);//��� = 1��

if(!$record){ //��ġ�ϴ� ���̵� �������� ����
        echo "<script>
                window.alert('������� ���� ���̵��Դϴ�.');
                history.go(-1)
            </script>";
        exit;
}else{ //��ġ�ϴ� ���̵� ����
        $row = mysql_fetch_array($result);
        $dbpass = $row[pass];
        if($pass!=$dbpass){//��й�ȣ ����ġ
            echo "<script>
                window.alert('��й�ȣ�� Ʋ���ϴ�. �ٽ� �Է��ϼ���');
                history.go(-1)
            </script>";
           exit;
        }else{
        $userid = $row[id];
        $username = $row[name];
        $usernick = $row[nick];
        $userlevel = $row[level];
        
        $_SESSION[userid]=$userid;
        $_SESSION[username]=$username;
        $_SESSION[usernick]=$usernick;
        $_SESSION[userlevel]=$userlevel;
    echo"<script>location.href='../index.php'</script>";
    }
    }

?>