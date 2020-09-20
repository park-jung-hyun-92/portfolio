<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/top.php'; ?>

<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">글쓰기</span>
	</span>
</div>


<form id="form_write_n" name="form_write_n" method="post" action="n_write_ok_2.php">
	<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
		<table class="table">
			<tbody>
				<tr>
					<td style="text-align:center;" width="30%">제목</td>
					<td><input type="text" name="n_title" size="56"></td>
				</tr>
				<tr>
					<td style="text-align:center;">내용</td>
					<td><input type="text" name="n_content" size="56"></td>
				</tr>
				<tr>
					<td style="text-align:center;">파일</td>
					<td><input type="file" name="n_file" size="70"></td>
				</tr>
			</tbody>
				<tr>
					<td></td>
					<td style="text-align:center;"><input type="submit" name="n_write" value="저장">&nbsp;
					<input type="button" value="취소" onclick="location.href='/ds_notice/n_list_2.php'"></td>
				</tr>
		</table>
</form>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/bottom.php'; ?>