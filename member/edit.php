<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$sql= "SELECT * FROM  ds_member WHERE m_id  = '".$_SESSION[ 'm_login_u' ]."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$phone_arr = explode("-", $row['m_phone']);
$m_phone1 = $phone_arr[0];
$m_phone2 = $phone_arr[1];
$m_phone3 = $phone_arr[2];

?>

<div style="padding: 50px 0px;">

	<form id="form_edit_m" name="form_edit_m" method="post" action="edit_ok.php" onsubmit="return m1()">
		<div class="col-md-4"></div>

		<div class="col-md-4">

			<div class="title_div">회원수정</div>

			<table class="table table-bordered">
				<tr>
					<th class="th_left">아이디</th>
					<td><input name="m_id" size="10" type="text" id="m_id" value="<?=$row['m_id']?>"></td>
				</tr>
				<tr>
					<th class="th_left">비밀번호</th>
					<td><input name="m_password1" size="4" type="password" id="m_password1" value="<?=$row['m_password1']?>"></td>
				</tr>
				<tr>
					<th class="th_left">비밀번호확인</th>
					<td><input name="m_password2" size="4" type="password" id="m_password2" value="<?=$row['m_password1']?>"></td>
				</tr>
				<tr>
					<th class="th_left">이름</th>
					<td><input name="m_name" size="12" type="text" id="m_name" value="<?=$row['m_name']?>"></td>
				</tr>
				<tr>
					<th class="th_left">전화번호</th>
					<td>
						<input name="m_phone1" size="3" type="text" id="m_phone1" value="<?= $m_phone1 ?>"> -
						<input name="m_phone2" size="3" type="text" id="m_phone2" value="<?= $m_phone2 ?>"> -
						<input name="m_phone3" size="3" type="text" id="m_phone3" value="<?= $m_phone3 ?>">
					</td>
				</tr>
				<tr>
					<th class="th_left">이메일</th>
					<td><input name="m_email" size="30" type="email" id="m_email" value="<?=$row['m_email']?>"></td>
				</tr>
				<tr>
					<td colspan="2" class="td_center">
						<input type="submit" value="수정">
						<input type="button" value="취소" onclick="location.href='/';">
					</td>
				</tr>
				<tr>
					<td colspan="2" class="td_center">
						<input type="button" value="회원탈퇴" onclick="location.href='/member/delete.php'">
					</td>
				</tr>
			</table>

		</div>
	</form>

</div>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>