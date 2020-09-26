<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>
<?php 

$n_select_join2 = $_POST['n_select_join2'];
$n_select_serch2 = $_POST['n_select_serch2'];

$page = $_GET['page'];

if($page == "") $page = $_POST['page'];
if($page == "") $page = 1;

$list_num = 10;
$page_num = 3;
$offset = $list_num*($page-1);


if ($n_select_join2 == "" && $n_select_serch2 != "") {
   $where = " WHERE n_title LIKE '%". $n_select_serch2 ."%' OR n_name LIKE '%". $n_select_serch2 ."%' ";
} else {
	// 컬럼값이 빈값이고 / 검색값도 빈값이면
	if( $n_select_join2 == "" && $n_select_serch2 == "") {
	} else{
		$where = "where $n_select_join2 like '%$n_select_serch2%'";
	}
}

$sql = "select count(*) from ds_notice2 ". $where ."";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);  

$total_no=$row[0];
$total_page=ceil($total_no/$list_num);
$cur_num=$total_no - $list_num*($page-1); 

$sql = "
	select * from
		ds_notice2
	". $where ."
	limit $offset, $list_num
";

$result=mysqli_query($conn, $sql);
?>


<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">제작가이드</span>
	</span>
</div>



<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
	<table class="table">
		<thead>
			<tr>
				<th style="text-align:center;">번호</th>
				<th style="text-align:center;">제목</th>
				<th style="text-align:center;">작성자</th>
				<th style="text-align:center;">작성일</th>
			</tr>
		</thead>
		<tbody>
<?php
		while ($row = mysqli_fetch_array($result))
		{
?>
			<tr>
				<td style="text-align:center;"><?php echo $cur_num ?></td>
				<td style="text-align:center;" width="70%"><a href="/ds_notice/n_view_2.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title']; ?></a></td>
				<td style="text-align:center;" width="10%"><?php echo $row['n_name']; ?></td>
				<td style="text-align:center;"><?php echo $row['n_date'] ?></td>
			</tr>
<?php
	$cur_num --;
		}
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
                  page_avg($total_page, $page_num, $page, $src_name, $src_value,"/ds_notice/n_list_2.php?url=2");
			  /**********************************************/
                ?>
            </div>
         </td>
      </tr>
   </table>

<?php if ($_SESSION['m_login_level'] == '10') { ?>
			<div style="text-align:right;"><input type="button" value="글쓰기" onclick="location.href='/ds_notice/n_write_2.php'"></div>
<?php }  ?>

<form id="form_n_list_2" name="form_n_list_2" method="post" action="n_list_2.php">
	<div style="padding:30px 470px;">
		<select name = "n_select_join2" style="padding: 1px 0px 5px 0px;">
			<option value="">전체</option>
			<option value="n_title">제목</option>
			<option value="n_name">작성자</option>
		</select>
		<input type="text" name="n_select_serch2" style="padding-left:7px;">
		<input type="submit" value="검색">
	</div>
</form>



</div>


<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>