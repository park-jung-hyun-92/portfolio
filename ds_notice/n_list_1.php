<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$n_select_join2 = $_POST['n_select_join2'];
$n_select_serch2 = $_POST['n_select_serch2'];

$page = $_GET['page'];
$sort = $_GET['sort'];

if($page == '') $page = $_POST['page'];
if($page == '') $page = 1; //페이지 번호가 없으면 1

/**********************************************/
$list_num =5; //한 페이지에 보여줄 목록 갯수
$page_num =3; //한 화면에 보여줄 페이지 링크(묶음) 갯수
$offset = $list_num*($page-1); //한 페이지의 시작할 글 번호[0번째 인덱스가 1임]
/**********************************************/

if($sort == "" ) {
	$sort = $_POST['sort'];

}
if ($sort == "") {
	$sort = "desc"; //desc 내림차순[최신순] && asc 올림차순[과거순]
}

$orderby = " order by n_date ". $sort;

/**********************************************/
// 컬럼값은 없고 / 검색어는 있다
if ($n_select_join2 == "" && $n_select_serch2 != "") {
   $where = " WHERE n_title LIKE '%". $n_select_serch2 ."%' OR n_name LIKE '%". $n_select_serch2 ."%' ";
} else {
	// 컬럼값이 빈값이고 / 검색값도 빈값이면
	if( $n_select_join2 == "" && $n_select_serch2 == "") {
	} else{
		$where = "where $n_select_join2 like '%$n_select_serch2%'";
	}
}
/**********************************************/

/**********************************************/
// 총 카운트 구하기
$sql = "select count(*) from ds_notice1 ". $where ."". $orderby .""; //가져오고자하는 목록 쿼리문 작성
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
		ds_notice1
	". $where ."
	". $orderby ."
	limit $offset, $list_num
";

$result=mysqli_query($conn, $sql);
?>

<!-- ********************************************** -->
<script>
	//onchange="fn_n_select_join1(this)" > 체인지하면 자바스크립트 함수 실행 > (this)는 현재 위치하고 있는 줄 (select 시작~끝) 모두를 t(파라미터)로 가져옴 > t.value는 가져온 t의 값
	//document.form_n_list_2.sort.value > 이문서.접근하고자하는 폼의 name.접근하고자하는 태그의 name.마지막으로 접근한 태그의 값
	//document.form_n_list_2.sort.value > 이문서.접근하고자하는 폼의 name.접근한 폼의 값을 전송하고자 한다면 submit 사용[단 submit은 함수이므로 submit()]
	function fn_n_select_join1(t)
	{
		document.form_n_list_2.sort.value = t.value; //t.value 값을 대입해라
		document.form_n_list_2.submit(); //대입한 값을 전송해라
	}
</script>
<!-- ********************************************** -->

<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">공지사항</span>
	</span>
</div>


<div style="padding:10px 370px 0px 0px; text-align:right;">
	<select name="n_select_join1" style="padding: 1px 0px 5px 0px;" onchange="fn_n_select_join1(this)">
		<option value="desc" <?php if ($sort == "desc") { ?> selected <?php } ?>>최신순</option>
		<option value="asc" <?php if ($sort == "asc") { ?> selected <?php } ?>>과거순</option>
	</select>
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
				<td style="text-align:center;" width="70%"><a href="/ds_notice/n_view_1.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title']; ?></a></td>
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
                  page_avg($total_page, $page_num, $page, $src_name, $src_value,"/ds_notice/n_list_1.php?url=1&sort=$sort");
			  /**********************************************/
                ?>
            </div>
         </td>
      </tr>
   </table>

<?php
	if ($_SESSION['m_login_level'] == '10') 	{
?>
		<div style="text-align:right;"><input type="button" value="글쓰기" onclick="location.href='/ds_notice/n_write_1.php'"></div>
<?php
	}
?>

<form id="form_n_list_2" name="form_n_list_2" method="post" action="n_list_1.php">
	<div style="padding:30px 470px;">
		<select name="n_select_join2" style="padding: 1px 0px 5px 0px;">
			<option value="">전체</option>
			<option value="n_title">제목</option>
			<option value="n_name">작성자</option>
		</select>
		<input type="text" name="n_select_serch2" style="padding-left:7px;">
		<input type="submit" value="검색">
		<input type="hidden" name="sort" value="<?php echo $sort ?>">
	</div>
</form>

<div style="clear:left"></div> <!--div 영역 겹치지 않게 해주는 기능-->

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>