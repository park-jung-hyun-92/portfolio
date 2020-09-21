<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php
	
	$m_id = $_POST['m_id'];
	$m_password1 = $_POST['m_password1'];
	$m_password2 = $_POST['m_password2'];
	$m_name = $_POST['m_name'];

	$m_phone1 = $_POST['m_phone1'];
	$m_phone2 = $_POST['m_phone2'];
	$m_phone3 = $_POST['m_phone3'];
	$m_phone = $m_phone1.'-'.$m_phone2.'-'.$m_phone3;

	$m_email = $_POST['m_email'];
	
	
	$sql = "
		insert into ds_member
		(
			m_num, 
			m_id, 
			m_password1,
			m_password2,
			m_name,
			m_phone,
			m_email,
			m_date,
			m_level
		) values (
			'',
			'". $m_id ."',
			'". $m_password1 ."',
			'". $m_password2 ."',
			'". $m_name ."',
			'". $m_phone ."',
			'". $m_email ."',
			'". date('Y-m-d H:i:s') ."',
			'2'
		)
	";

	mysqli_query($conn, $sql);

?>

<script language="javascript">
	alert("회원가입완료");
	location.href="/main.php";
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>