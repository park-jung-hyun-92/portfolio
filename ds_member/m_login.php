<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/top.php'; ?>

<?php
	if ( $_SESSION[ 'm_login_u' ] ) {
		$_SESSION[ 'm_login_u' ] = "";
		$_SESSION[ 'm_login_p1' ] = "";
		$_SESSION[ 'm_login_level' ] = "";
		echo '
			<script language="javascript">
				alert("로그아웃이 되었습니다");
				location.href="/ds_member/m_login.php";
			</script>
		';
		exit;
	} else {
?>
<div style="padding:0 800px;">
	<div style="width:300px; text-align:center;">
		<form name="form_login_m" class="form-signin" method="post" action="m_login_ok.php">
			<h2 class="form-signin-heading">LOGIN</h2>
			<label for="login_userid" class="sr-only">아이디</label>
			<input type="text" id="m_login_u"  name="m_login_u"class="form-control" placeholder="아이디" required="" autofocus="">
			<label for="login_password" class="sr-only">비밀번호</label>
			<p><input type="password" id="m_login_p1" name="m_login_p1" class="form-control" placeholder="비밀번호" required=""></p>
			<button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>	
		</form>
	</div>
</div>
<?php
	}
?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/bottom.php'; ?>