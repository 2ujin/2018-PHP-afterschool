<? 
$conn = mysql_connect("localhost","jin","1234") or die("database connect fail...");
$dbconn = mysql_select_db("mirim",$conn);

// echo "아이디: ".$_POST['id']."<br>";

$today = getdate();
$regist_day = date("Y-m-d (H:i)");


$id = $_POST['id'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$nick = $_POST['nick'];
$hp = $_POST['hp1']."-".$_POST['hp2']."-".$_POST['hp3'];   
$email = $_POST['email1']."@".$_POST['email2'];


$sql = "insert into member
values('$id','$pass','$name','$nick','$hp','$email','$regist_day','9')";

$result = mysql_query($sql, $conn);

if($result)
    echo "성공";
else
    echo "실패";

mysql_close($conn);

?>
