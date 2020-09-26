<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>
<?php

$n_num = $_GET['n_num'];

$sql = "select * from ds_notice2 where n_num =". $n_num ;	
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">글쓰기</span>
	</span>
</div>


<form enctype='multipart/form-data' id="form_edit_n2" name="form_edit_n2" method="post" action="n_edit_ok_2.php">
	<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
		<table class="table">
			<tbody>
				<tr>
					<td style="text-align:center;" width="30%">제목</td>
					<td><input type="text" name="n_title" size="56" value="<?= $row['n_title'] ?>"></td>
				</tr>
				<tr>
					<td style="text-align:center;">내용</td>
					<td><input type="text" name="n_content" size="56" value="<?= $row['n_content'] ?>"></td>
				</tr>
				<tr>
					<td style="text-align:center;">파일</td>
					<td><input type="file" name="n_file" size="70" value="<?= $row['n_file'] ?>"></td>
				</tr>
			</tbody>
				<tr>
					<td></td>
					<td style="text-align:center;"><input type="submit" name="n_edit2" value="수정">&nbsp;
					<input type="button" value="취소" onclick="location.href='/ds_notice/n_list_2.php'"></td>
				</tr>
		</table>
			<input type="hidden" name="n_num" value="<?php echo $n_num ?>">
</form>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>