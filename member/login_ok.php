<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>

<?php

	$m_login_u = $_POST['m_login_u'];
	$m_login_p1 = $_POST['m_login_p1'];

	$sql= "SELECT * FROM  ds_member WHERE m_id  = '$m_login_u' AND m_password1 = '$m_login_p1'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if ($row['m_id'])
	{
		//로그인처리
		$_SESSION[ 'm_login_u' ] = $row['m_id'];
		$_SESSION[ 'm_login_n' ] = $row['m_name'];
		$_SESSION[ 'm_login_p1' ] =$row['m_password1'];
		$_SESSION[ 'm_login_level' ] = $row['m_level'];

		//페이지이동
		echo '
			<script language="javascript">
				alert("로그인완료");
				location.href="/";
			</script>
		';
		exit;
	} else {
		echo '
			<script language="javascript">
				alert("아이디와 비밀번호를 정확하게 입력해주세요");
				history.back();
			</script>
		';
		exit;
	}

?>