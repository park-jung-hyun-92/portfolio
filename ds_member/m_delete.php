<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div style="padding:0 800px;">
	<div style="width:300px; text-align:center;">
		<form name="form_delete_m" class="form-signin" method="post" action="delete_ok.php">
					<h2 class="form-signin-heading">회원탈퇴</h2>
					<p><input type="password" id="m_delete_p1" name="m_delete_p1" class="form-control" placeholder="비밀번호" required=""></p>
					<div class="row">
						<div class="col-md-6" style="padding:0px 5px 0px 15px;"><input type="submit" class="btn btn-lg btn-primary btn-block" value="회원탈퇴 하기">	</div>
						<div class="col-md-6" style="padding:0px 15px 0px 5px;"><input type="button" class="btn btn-lg btn-primary btn-block" value="회원탈퇴 취소" onclick="location.href='/main.php'";>	</div>
					</div>
		</form>
	</div>
</div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>