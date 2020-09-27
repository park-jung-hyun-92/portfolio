<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>
<?php
	$m_login_u = $_GET['id'];
	$m_login_p1 = $_GET['pw'];

	$sql= "SELECT * FROM  ds_member WHERE m_id  = '$m_login_u' AND m_password1 = '$m_login_p1'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);

	if ($row['m_id']) {
		// 세션을 넣는다
		echo "Y";
	} else {
		echo "N";
	}
?>