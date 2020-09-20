<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/top.php'; ?>

<?php

$m_delete_p1= $_POST['m_delete_p1'];

$sql= "SELECT * FROM ds_member where m_id = '". $_SESSION[ 'm_login_u' ] ."' AND m_password1 = '". $m_delete_p1 ."'";

$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_array($result);


if($_SESSION[ 'm_login_u' ])
{

	$sql= "delete from ds_member where m_id = '". $_SESSION[ 'm_login_u' ] ."' AND m_password1 = '". $m_delete_p1 ."'";

	mysqli_query($conn, $sql); 

	$_SESSION['m_login_u'] = "";
	$_SESSION['m_login_p1'] = "";
	$_SESSION['m_level'] = "";

	echo "
		<script>
			alert('회원탈퇴가 성공적으로 되었습니다.')
			location.href= '/main.php';
		</script>";

} else {
	echo 
		"<script>
			alert('비밀번호가 틀렸습니다.')
			location.href= '/delete.php';
		</script>";

}



?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all/bottom.php'; ?>