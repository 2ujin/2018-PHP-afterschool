<?
session_start();

$id = $_POST[id];
$pass = $_POST[pass];
    
if(!$id){//아이디 입력 에러 처리
    echo "<script>
                window.alert('아이디를 입력하세요');
                history.go(-1)
            </script>";
}
if(!$pass){//비밀번호 입력 에러 처리
    echo "<script>
                window.alert('비밀번호를 입력하세요');
                history.go(-1)
            </script>";
}
include "../lib/dbconn.php";

$sql = "select * from member where id = '$id'";
$result = mysql_query($sql);

if($result)
    $record = mysql_num_rows($result);//행수 = 1개

if(!$record){ //일치하는 아이디가 존재하지 않음
        echo "<script>
                window.alert('등록하지 않은 아이디입니다.');
                history.go(-1)
            </script>";
        exit;
}else{ //일치하는 아이디 존재
        $row = mysql_fetch_array($result);
        $dbpass = $row[pass];
        if($pass!=$dbpass){//비밀번호 불일치
            echo "<script>
                window.alert('비밀번호가 틀립니다. 다시 입력하세요');
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