<title>php first page</title>
<?php 
echo "eclipse 에서 편집하는 php source code<p>"; //print라 써도 상관없

print("APMsetup 설치완료 <br>");

echo ("A : Apach -> 웹 서버<br>");
echo ("P : PHP5 -> 웹 프로그램 언어<br>");
echo ("M : Mysql -> DBMS");

print"<p>Mysql 연동확인"; //괄호를 쳐도 되고 안쳐도 됨 맨 마지막 줄 세미콜론 안해도 됨
$conn=mysql_connect("localhost", "root", "apmsetup"); //아이디 비밀번호 미리 셋팅
echo "<br>Mysql 작동 성공";
?>