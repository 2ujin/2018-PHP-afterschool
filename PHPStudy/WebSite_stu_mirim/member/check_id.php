<meta charset = "euc-kr">
<?
$id = $_GET[id];

    if(!$id){
        echo "���̵� �Է��ϼ���.";
    }
    else{
        include "../lib/dbconn.php";
        
        $sql = "select * from member where id = '$id' ";
        
        $result = mysql_query($sql, $conn);
       
        $num_record = mysql_num_rows($result);
        
        if($num_record){
            echo "���̵� �ߺ��˴ϴ�!<br>";
            echo "�ٸ� ���̵� ����ϼ��� <br>";
        }
        else{
            echo "��� ������ ���̵��Դϴ�.";
        }
        mysql_close();
    }
    
?>

