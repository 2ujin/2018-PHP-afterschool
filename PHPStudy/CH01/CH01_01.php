<title>php first page</title>
<?php 
echo "eclipse ���� �����ϴ� php source code<p>"; //print�� �ᵵ �����

print("APMsetup ��ġ�Ϸ� <br>");

echo ("A : Apach -> �� ����<br>");
echo ("P : PHP5 -> �� ���α׷� ���<br>");
echo ("M : Mysql -> DBMS");

print"<p>Mysql ����Ȯ��"; //��ȣ�� �ĵ� �ǰ� ���ĵ� �� �� ������ �� �����ݷ� ���ص� ��
$conn=mysql_connect("localhost", "root", "apmsetup"); //���̵� ��й�ȣ �̸� ����
echo "<br>Mysql �۵� ����";
?>