<title>Create Table</title>
<?
echo("<h4>member 테이블 생성</h4><hr>");

include "../lib/dbconn.php";

$sql = "create table member(
    id char(15) not null,
    pass char(15) not null,
    name char(15) not null,
    nick char(10) not null,
    hp char(10) not null,
    email char(80),
    regist_day char(20),
    level int,
    primary key(id)
)";

if($result){
    echo "성공이다";
}

?>
