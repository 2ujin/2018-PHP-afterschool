<?php
echo "<h4>���ο� ���� ����</h4><hr>";
$conn=mysql_connect("localhost","root","apmsetup");
mysql_select_db("mysql",$conn);

echo " mysql DBMS���� ��������";
echo ("1.���ο� DB ����<p>");

$sql = "create database mirim;";
$result = mysql_query($sql);

if($result)
    echo ("1.���ο� DB ��������<p>");
else 
    echo ("1.���ο� DB ��������<p>");

$sql = "insert into user (host, user, password)values ('localhsot', 'jin', password('1234'));";
$result = mysql_query($sql);

if($result)
    echo ("2. user ���̺��� user, password ���Լ���");
    else
        echo ("2. user ���̺��� user, password ����..����..");

        echo "<br>";
        
$sql = "insert into db values('localhost','mirim','youjin','y','y','y','y','y','y','y','y','y','y','y','y','y','y','y','y','y','y','y');";
$result = mysql_query($sql);

if($result)
    echo ("3. db ���̺��� ������ ��ϼ���");
    else
        echo ("3.db ���̺��� ������ ��� ����..����..");

        echo "<br>";
$sql = "flush privileges;";
$result = mysql_query($sql);

if($result)
    echo ("4. user ���̺��� db ���̺��� ����� ���� ������� ����");
    else
        echo ("4.user ���̺��� db ���̺��� ����� ���� ���� ����..����..");
?>