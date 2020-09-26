<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>
<?php
	$_SESSION[ 'm_login_u' ] = "";
	$_SESSION[ 'm_login_p1' ] = "";
	$_SESSION[ 'm_login_level' ] = "";
	echo '
		<script language="javascript">
			alert("로그아웃이 되었습니다");
			location.href="/";
		</script>
	';
?>