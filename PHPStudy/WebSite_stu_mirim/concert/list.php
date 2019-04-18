<?
session_start();

$userid=$_SESSION['userid'];
$username=$_SESSION['username'];
$usernick=$_SESSION['usernick'];
$userlevel=$_SESSION['userlevel'];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head> 
<meta charset="euc-kr">
<link href="../css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="../css/concert.css" rel="stylesheet" type="text/css" media="all">
</head>
<?
	include "../lib/dbconn.php";
	$scale=10;	
	
	$find=$_POST[find];

    if ($mode=="search"){
		if(!$search){
			echo("<script>
				 window.alert('검색할 단어를 입력해 주세요!');
			     history.go(-1);
				</script>");
			exit;
		}
		$sql = "select * from concert 
				where $find like '%search%'
				order by num desc";
	}
	else{			    
	    //concert 테이블에서 num으로 내림차순 정렬하여 모든 데이터 검색
		$sql = "select * from concert order by num desc";
		
	}
    
	$result = mysql_query($sql);

	$total_record = mysql_num_rows($result); 

	if ($total_record % $scale == 0)     
		$total_page = floor($total_record/$scale);      
	else
		$total_page = floor($total_record/$scale) + 1; 
 
	if (!$page)                 
		$page = 1;              
 	
	$start = ($page - 1) * $scale;      
	$number = $total_record - $start;
?>
<body>
<div id="wrap">
  <div id="header">
    <? include "../lib/top_login2.php"; ?>
  </div>  <!-- end of header -->

  <div id="menu">
	<? include "../lib/top_menu2.php"; ?>
  </div>  <!-- end of menu --> 

  <div id="content">
	<div id="col1">
		<div id="left_menu">
<?
			include "../lib/left_menu.php";
?>
		</div>
	</div>
	<div id="col2">        
		<div id="title">
			<img src="../img/title_concert.gif">
		</div>

		<form  name="board_form" method="post" action="list.php?mode=search"> 
		<div id="list_search">
			<div id="list_search1">▷ 총 <?= $total_record ?> 개의 게시물이 있습니다.  </div>
			<div id="list_search2"><img src="../img/select_search.gif"></div>
			<div id="list_search3">
				<select name="find">
                    <option value='subject'>제목</option>
                    <option value='content'>내용</option>
                    <option value='nick'>별명</option>
                    <option value='name'>이름</option>
				</select></div>
			<div id="list_search4"><input type="text" name="search"></div>
			<div id="list_search5"><input type="image" src="../img/list_search_button.gif"></div>
		</div>
		</form>
		<div class="clear"></div>

		<div id="list_top_title">
			<ul>
				<li id="list_title1"><img src="../img/list_title1.gif"></li>
				<li id="list_title2"><img src="../img/list_title2.gif"></li>
				<li id="list_title3"><img src="../img/list_title3.gif"></li>
				<li id="list_title4"><img src="../img/list_title4.gif"></li>
				<li id="list_title5"><img src="../img/list_title5.gif"></li>
			</ul>		
		</div>

		<div id="list_content">
<?		
   for ($i=$start; $i<$start+$scale && $i < $total_record; $i++){
      mysql_data_seek($result, $i);       
      
      //검색 내용 가져오기 : num, id, name, nick, hit, regist_day
      
      $rows = mysql_fetch_array($result);
      
      $item_num = $rows[num];
      $item_id =  $rows[id];
      $item_name = $rows[name];
      $item_nick = $rows[nick];
      $item_hit = $rows[hit];      
      $item_date = $rows[regist_day];
      
//       $item_date = substr($item_date, 0 ,10);
      $item_date = substr($rows[regist_day],0 ,10);
      $item_subject = str_replace(" " , "&nbsp", $rows[subject]);
      
//       $regist_day = date('Y-m-d');
//       $subject = "";
      //regist_day 는 년월일만 가져오기
      //subject는 빈칸을 &nbsp;로 바꾸기
      

    
?>
			<div id="list_item">
				<div id="list_item1"><?= $number ?></div>
				<div id="list_item2"><a href="view.php?num=<?=$item_num?>&page=<?=$page?>"><?= $item_subject ?></a></div>
				<div id="list_item3"><?= $item_nick ?></div>
				<div id="list_item4"><?= $item_date ?></div>
				<div id="list_item5"><?= $item_hit ?></div>
			</div>
<?
   	   $number--;
   	   
   }//for end
?>
			<div id="page_button">
				<div id="page_num"> ◀ 이전 &nbsp;&nbsp;&nbsp;&nbsp; 
<?
   // 게시판 목록 하단에 페이지 링크 번호 출력
   for ($i=1; $i<=$total_page; $i++){
   	
		if ($page == $i){		
			echo "<b> $i </b>";
		}
		else{
			echo "<a href='list.php?&page=$i'> $i </a>";
		}      
   }
?>			
			&nbsp;&nbsp;&nbsp;&nbsp;다음 ▶
				</div>
				<div id="button">
					<a href="list.php?table=concert&page=<?=$page?>"><img src="../img/list.png"></a>&nbsp;
<? 
	if($userid){
?>
		<a href="write_form.php"><img src="../img/write.png"></a> 
<?
	}
?>
				</div>
			</div> <!-- end of page_button -->		
        </div> <!-- end of list content -->
		<div class="clear"></div>

	</div> <!-- end of col2 -->
  </div> <!-- end of content -->
</div> <!-- end of wrap -->

</body>
</html>
