<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$n_select_join1 = $_POST['n_select_join1'];
$n_select_serch1 = $_POST['n_select_serch1'];

$page = $_GET['page'];

if($page == '') $page = $_POST['page'];
if($page == '') $page = 1; //페이지 번호가 없으면 1

/**********************************************/
$list_num =5; //한 페이지에 보여줄 목록 갯수
$page_num =3; //한 화면에 보여줄 페이지 링크(묶음) 갯수
$offset = $list_num*($page-1); //한 페이지의 시작할 글 번호[0번째 인덱스가 1임]
/**********************************************/

$orderby = " order by n_num desc ";

/**********************************************/
// 컬럼값은 없고 / 검색어는 있다
if ($n_select_join1 == "" && $n_select_serch1 != "") {
   $where = " WHERE n_title LIKE '%". $n_select_serch1 ."%' OR n_name LIKE '%". $n_select_serch1 ."%' ";
} else {
	// 컬럼값이 빈값이고 / 검색값도 빈값이면
	if( $n_select_join1 == "" && $n_select_serch1 == "") {
	} else{
		$where = "where $n_select_join1 like '%$n_select_serch1%'";
	}
}
/**********************************************/

/**********************************************/
// 총 카운트 구하기
$sql = "select count(*) from ds_notice2 ". $where ."". $orderby .""; //가져오고자하는 목록 쿼리문 작성
$result=mysqli_query($conn,$sql); //작성한 쿼리문 실행 후 결과 목록 담기
$row=mysqli_fetch_array($result);  //결과 목록을 한줄씩 배열값으로 변환 후 담기

$total_no=$row[0]; //결과를 배열값으로 담은 목록에 인덱스 0번째 값을 변수에 대입
/**********************************************/

/**********************************************/
//전체 페이지 수와 현재 글 번호를 구합니다.
$total_page=ceil($total_no/$list_num); //전체 페이지수[ceil=무조건 올림]

$cur_num=$total_no - $list_num*($page-1); //현재 글 번호
/**********************************************/

$sql = "
	select * from
		ds_notice2
	". $where ."
	". $orderby ."
	limit $offset, $list_num
";

$result=mysqli_query($conn, $sql);
?>


<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/tap_notice.php'; ?>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">리스트</span>
	</span>
</div>


<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
	<table class="table">
		<thead>
			<tr style="border-top: 2px solid #ddd;">
				<th style="text-align:center;">번호</th>
				<th style="text-align:center;">제목</th>
				<th style="text-align:center;">작성자</th>
				<th style="text-align:center;">작성일</th>
			</tr>
		</thead>
		<tbody>
			<?php
				/**********************************************/
				while ($row = mysqli_fetch_array($result)) //반복문이며, 결과값($reesult)을 배열값으로 변환 후 $row 대입
				{
			?>
					<tr style="border-bottom: 1px solid #dfe3e6;">
						<td style="text-align:center;"><?php echo $cur_num;?></td>
						<td style="text-align:center;" width="70%"><a href="./view.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title'];?></td>
						<td style="text-align:center;" width="10%"><?php echo $row['n_name']; ?></td>
						<td style="text-align:center;"><?php echo $row['n_date'] ?></td>
					</tr>
			<?php
					$cur_num --; //--; 변수 값에서 하나씩 값을 마이너스 하기 && ++; 변수 값에서 하나씩 값을 더하기
				}
				/**********************************************/
			?>
		</tbody>
	</table>

	<table>
		<tr>
			<td>
				<div>
					<?php
					   /**********************************************/
						//사용자 정의 함수[페이징 함수]
						  page_avg($total_page, $page_num, $page, $src_name, $src_value,"./list.php?url=1");
					  /**********************************************/
					?>
				</div>
			</td>
		</tr>
	</table>

	<?php
		if ($_SESSION['m_login_level'] == '10') 	{
	?>
		<div style="text-align:right;"><input type="button" value="글쓰기" onclick="location.href='./write.php'"></div>
	<?php
		}
	?>

	<form id="form_n_list_1" name="form_n_list_1" method="post" action="./list.php">
		<div style="padding:30px 470px;">
			<select name="n_select_join1" style="padding: 1px 0px 5px 0px;">
				<option value="">전체</option>
				<option value="n_title">제목</option>
				<option value="n_name">작성자</option>
			</select>
			<input type="text" name="n_select_serch1" style="padding-left:7px;">
			<input type="submit" value="검색">
		</div>
	</form>

	<div style="clear:left"></div>
	<!--div 영역 겹치지 않게 해주는 기능-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>