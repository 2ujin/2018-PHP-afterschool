<html>
<body>
<FORM name ="men_form" METHOD = "POST" ACTION="ch07_02_p.php">


<TABLE border = 1 width = "640" cellspacing="1" cellpaddding="4">
 <TR>
    <TD>* ���̵� : </TD>
    <TD><INPUT TYPE="TEXT" NAME="id"></TD>
</TR>
 <TR>
    <TD>* �̸� :</TD>
    <TD><INPUT TYPE="TEXT" NAME="name"></TD>
 </TR>
  <TR>
    <TD>* ��й�ȣ : </TD>
    <TD><INPUT TYPE="PASSWORD" NAME="password"></TD>
</TR>
 <TR>
    <TD>* ��й�ȣ Ȯ��:</TD>
    <TD><INPUT TYPE="PASSWORD" NAME="check_password"></TD>
 </TR>
  <TR>
    <TD>* �޴���ȭ: </TD>
    <TD><select name = "selfphone">
    <option value="010">010</option>
    <option value="011">011</option>
    <option value="016">016</option>
    <option value="017">017</option>
    </select> - 
    <INPUT TYPE="TEXT" NAME="phone" size = "4"> - 
    <INPUT TYPE="TEXT" NAME="phone1" size = "4">
    </TD>
</TR>
 <TR>
    <TD>* ����:</TD>
    <TD><INPUT TYPE="RADIO" NAME="boy" value = "��">��
    <INPUT TYPE="RADIO" NAME="girl" value = "��">��</TD>
 </TR>
 <TR>
    <TD>* �ּ�:</TD>
    <TD><INPUT TYPE="TEXT" NAME="add"></TD>
 </TR>
  <TR>
    <TD>* ���: 
    <TD><INPUT TYPE="CHECKBOX" NAME="movie" value = "��ȭ����" >��ȭ����
	<INPUT TYPE="CHECKBOX" NAME="book" value="����">����
	<INPUT TYPE="CHECKBOX" NAME="shopping" value="����">����
	<INPUT TYPE="CHECKBOX" NAME="health" value="�" >�</TD>
    </TD>
</TR>
 <TR>
    <TD>* �ڱ�Ұ�:</TD>
    <TD><textarea name = "myself"></textarea></TD>
 </TR>
 <TR>
 <TD colspan=2><INPUT TYPE="SUBMIT" value = "Ȯ��"> <INPUT TYPE="RESET" value = "�ʱ�ȭ"></TD>
 </TR>
</body>
</html>
<?php
 ?>