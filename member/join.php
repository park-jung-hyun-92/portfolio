<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div style="padding: 50px 0px;">

	<form id="form_userid_m" name="form_userid_m" method="post" action="join_ok.php" onsubmit="return m1()">
		<div class="col-md-4"></div>

		<div class="col-md-4">

			<div class="title_div">회원가입</div>

			<table class="table table-bordered">
				<tr>
					<th class="th_left">아이디</th>
					<td><input name="m_id" size="10" type="text" id="m_id"></td>
				</tr>
				<tr>
					<th class="th_left">비밀번호</th>
					<td><input name="m_password1" size="4" type="password" id="m_password1"></td>
				</tr>
				<tr>
					<th class="th_left">비밀번호확인</th>
					<td><input name="m_password2" size="4" type="password" id="m_password2"></td>
				</tr>
				<tr>
					<th class="th_left">이름</th>
					<td><input name="m_name" size="12" type="text" id="m_name"></td>
				</tr>
				<tr>
					<th class="th_left">전화번호</th>
					<td>
						<input name="m_phone1" size="3" type="text" id="m_phone1"> -
						<input name="m_phone2" size="3" type="text" id="m_phone2"> -
						<input name="m_phone3" size="3" type="text" id="m_phone3">
					</td>
				</tr>
				<tr>
					<th class="th_left">이메일</th>
					<td><input name="m_email" size="30" type="email" id="m_email"></td>
				</tr>
				<tr>
					<td colspan="2" class="td_center">
						<input type="submit" value="등록">
						<input type="button" value="취소" onclick="location.href='/';">
					</td>
				</tr>
			</table>

		</div>
	</form>

</div>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>