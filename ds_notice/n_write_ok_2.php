<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file = $_POST['n_file'];

$uploads_dir = '../images/img_notice';

$n_file = $_FILES['n_file']['name'];
$img_tmp_file1 = $_FILES['n_file']['tmp_name'];

move_uploaded_file( $img_tmp_file1, "$uploads_dir/$n_file");

$sql = "select * from ds_member where m_id = '". $_SESSION['m_login_u'] ."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$n_name = $row['m_name'];

$sql= "INSERT INTO ds_notice2 (
			n_num, 
			n_id, 
			n_title, 
			n_content, 
			n_name,
			n_file, 
			n_date, 
			n_level
		)
		VALUES (
			'',
			'". $_SESSION['m_login_u'] ."',
			'". $n_title ."',
			'". $n_content ."',
			'". $n_name ."',
			'". $n_file ."',
			'". date('Y-m-d H:i:s') ."',
			'". $_SESSION['m_login_level'] ."'
		)";

mysqli_query($conn, $sql);

?>

<script language="javascript">
	alert("글쓰기 완료");
	location.href="/ds_notice/n_list_2.php";
</script>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>