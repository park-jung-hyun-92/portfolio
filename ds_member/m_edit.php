<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<style type="text/css">
	.td_center { 
		text-align:center;
		font-size:15px;
	}
</style>

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

<form id="form_edit_m" name="form_edit_m" method="post" action="m_edit_ok.php" onsubmit="return m1()">
	<div class="col-md-4"></div>

	<div class="col-md-4">
		<table class="table" style="border:1px solid green;">
			<thead>
				<tr>
					<th class="td_center" colspan="2"  style="font-size:20px;"><a href="/ds_member/m_edit.php"  title="초기화">
					회&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;원&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;정&nbsp;&nbsp;&nbsp&nbsp;&nbsp;보&nbsp;&nbsp;&nbsp&nbsp;&nbsp;수&nbsp;&nbsp;&nbsp&nbsp;&nbsp;정</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="td_center" style="width:50%;">아이디</td>
					<td class="td_center" style="width:100%;"><input name="m_id" size="10px" type="text" id="m_id"  value="<?=$row['m_id']?>"></td>
				</tr>
				<tr>
					<td class="td_center">비밀번호</td>
					<td class="td_center"><input name="m_password1" size="4px" type="password" id="m_password1"  value="<?=$row['m_password1']?>"></td>
				</tr>
				<tr>
					<td class="td_center">비밀번호확인</td>
					<td class="td_center"><input name="m_password2" size="4px" type="password" id="m_password2"  value="<?=$row['m_password1']?>"></td>
				</tr>
				<tr>
					<td class="td_center">이름</td>
					<td class="td_center"><input name="m_name" size="12px" type="text" id="m_name"  value="<?=$row['m_name']?>"></td>
				</tr>
				<tr>
					<td class="td_center">전화번호</td>
					<td class="td_center"><input name="m_phone1" size="3px" type="text" id="m_phone1" value="<?= $m_phone1 ?>">
					-<input name="m_phone2" size="3px" type="text" id="m_phone2" value="<?= $m_phone2 ?>">
					-<input name="m_phone3" size="3px" type="text" id="m_phone3"value="<?= $m_phone3 ?>"></td>
				</tr>
				<tr>
					<td class="td_center">이메일</td>
					<td class="td_center"><input name="m_email" size="7px" type="email" id="m_email" required  value="<?=$row['m_email']?>"></td>					
					</td>
				</tr>
			</tbody>
				<tr>
					<td colspan="2" class="td_center" style="padding-left:80px;"><input type="submit" value="등록">
					<input type="button" value="취소" onclick="/ds_member/m_userid.php">
					<input type="button" value="회원탈퇴" onclick="location.href='/ds_member/m_delete.php'"; style="float:right;"></td>
				</tr>
		</table>
	</div>				
</form>

</div>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>