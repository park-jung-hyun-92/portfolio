<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/tap_notice.php'; ?>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">글쓰기</span>
	</span>
</div>


<form enctype='multipart/form-data' id="form_write_n1" name="form_write_n1" method="post" action="write_ok.php">
	<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
		<table class="table">
				<tr>
					<td style="text-align:center;" width="30%">제목</td>
					<td><input type="text" name="n_title" size="56"></td>
				</tr>
				<tr>
					<td style="text-align:center;">내용</td>
					<td><textarea name="n_content" style="width:100%; height:100px;"></textarea></td>
				</tr>
				<tr>
					<td style="text-align:center;">파일1</td>
					<td><input type="file" name="n_file1" size="70"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center;">
						<input type="submit" name="n_write" value="저장">&nbsp;
						<input type="button" value="취소" onclick="location.href='./list.php'">
					</td>
				</tr>
		</table>
</form>
</div>
<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>