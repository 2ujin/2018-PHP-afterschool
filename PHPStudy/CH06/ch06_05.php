<html>
<h4>�̴ϰԽ���</h4><hr>
<form action="ch06_06.php" method = "post">
<input type = submit value = "�� ��� Ȯ��"></input>
</form>
<form method = post action = 'ch06_insert2.php?title=$title&content=$content'>
<table>
<tr><td>����</td><td><input type = text size = 60 name = "title"></input></td></tr>
<tr><td valign = "middle">����</td><td><textarea name = "content" cols = "60" rows = "10">���� �Է�</textarea></td></tr>
<tr><td align="center" colspan = "2"><input type = "submit" value = "�� �ø���" id = "submit"><input type="submit" value = "���" id = "cancel"></td></tr>
</table>
</form>
</html>

<?php

?>