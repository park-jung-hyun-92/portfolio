<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/tap_portfolio.php'; ?>

<?php

$n_num = $_GET['n_num'];

$sql = "select * from portfolio2 where n_num =". $n_num ;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

?>
<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">수정</span>
	</span>
</div>


<form enctype='multipart/form-data' id="form_edit_n1" name="form_edit_n1" method="post" action="./edit_ok.php">
	<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
		<table class="table">
				<tr>
					<td style="text-align:center;" width="30%">제목</td>
					<td><input type="text" name="n_title" size="56" value="<?= $row['n_title'] ?>"></td>
				</tr>
				<tr>
					<td style="text-align:center;">내용</td>
					<td><textarea name="n_content" style="width:100%; height:100px;"><?= $row['n_content'] ?></textarea></td>
				</tr>
				<tr>
					<td style="text-align:center;">파일1</td>
					<td>
						<input type="file" name="n_file1" size="70">
						<?php if ($row['n_file1'] != "") { ?>
							올라간 파일 : <?=$row['n_file1']?>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td style="text-align:center;">파일2</td>
					<td>
						<input type="file" name="n_file2" size="70">
						<?php if ($row['n_file2'] != "") { ?>
							올라간 파일 : <?=$row['n_file2']?>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td style="text-align:center;">파일3</td>
					<td>
						<input type="file" name="n_file3" size="70">
						<?php if ($row['n_file3'] != "") { ?>
							올라간 파일 : <?=$row['n_file3']?>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;">
						<input type="submit" name="n_edit1" value="수정">&nbsp;
						<input type="button" value="취소" onclick="location.href='./list.php'">
					</td>
				</tr>
		</table>
		<input type="hidden" name="n_file1_old" value="<?= $row['n_file1'] ?>">
		<input type="hidden" name="n_file2_old" value="<?= $row['n_file2'] ?>">
		<input type="hidden" name="n_file3_old" value="<?= $row['n_file3'] ?>">
		<input type="hidden" name="n_num" value="<?php echo $n_num ?>">
</form>
</div>
<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>