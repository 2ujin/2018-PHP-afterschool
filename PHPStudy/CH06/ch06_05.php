<html>
<h4>미니게시판</h4><hr>
<form action="ch06_06.php" method = "post">
<input type = submit value = "글 목록 확인"></input>
</form>
<form method = post action = 'ch06_insert2.php?title=$title&content=$content'>
<table>
<tr><td>제목</td><td><input type = text size = 60 name = "title"></input></td></tr>
<tr><td valign = "middle">내용</td><td><textarea name = "content" cols = "60" rows = "10">내용 입력</textarea></td></tr>
<tr><td align="center" colspan = "2"><input type = "submit" value = "글 올리기" id = "submit"><input type="submit" value = "취소" id = "cancel"></td></tr>
</table>
</form>
</html>

<?php

?>