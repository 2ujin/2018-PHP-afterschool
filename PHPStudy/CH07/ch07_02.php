<html>
<body>
<FORM name ="men_form" METHOD = "POST" ACTION="ch07_02_p.php">


<TABLE border = 1 width = "640" cellspacing="1" cellpaddding="4">
 <TR>
    <TD>* 아이디 : </TD>
    <TD><INPUT TYPE="TEXT" NAME="id"></TD>
</TR>
 <TR>
    <TD>* 이름 :</TD>
    <TD><INPUT TYPE="TEXT" NAME="name"></TD>
 </TR>
  <TR>
    <TD>* 비밀번호 : </TD>
    <TD><INPUT TYPE="PASSWORD" NAME="password"></TD>
</TR>
 <TR>
    <TD>* 비밀번호 확인:</TD>
    <TD><INPUT TYPE="PASSWORD" NAME="check_password"></TD>
 </TR>
  <TR>
    <TD>* 휴대전화: </TD>
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
    <TD>* 성별:</TD>
    <TD><INPUT TYPE="RADIO" NAME="boy" value = "남">남
    <INPUT TYPE="RADIO" NAME="girl" value = "여">여</TD>
 </TR>
 <TR>
    <TD>* 주소:</TD>
    <TD><INPUT TYPE="TEXT" NAME="add"></TD>
 </TR>
  <TR>
    <TD>* 취미: 
    <TD><INPUT TYPE="CHECKBOX" NAME="movie" value = "영화감상" >영화감상
	<INPUT TYPE="CHECKBOX" NAME="book" value="독서">독서
	<INPUT TYPE="CHECKBOX" NAME="shopping" value="쇼핑">쇼핑
	<INPUT TYPE="CHECKBOX" NAME="health" value="운동" >운동</TD>
    </TD>
</TR>
 <TR>
    <TD>* 자기소개:</TD>
    <TD><textarea name = "myself"></textarea></TD>
 </TR>
 <TR>
 <TD colspan=2><INPUT TYPE="SUBMIT" value = "확인"> <INPUT TYPE="RESET" value = "초기화"></TD>
 </TR>
</body>
</html>
<?php
 ?>