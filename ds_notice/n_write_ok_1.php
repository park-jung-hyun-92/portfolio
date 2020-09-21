<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file1 = $_POST['n_file1'];
$n_file2 = $_POST['n_file2'];
$n_file3 = $_POST['n_file3'];

$uploads_dir = '../images/img_notice';

$n_file1 = $_FILES['n_file1']['name'];
$img_tmp_file1 = $_FILES['n_file1']['tmp_name'];
$n_file2 = $_FILES['n_file2']['name'];
$img_tmp_file2 = $_FILES['n_file2']['tmp_name'];
$n_file3 = $_FILES['n_file3']['name'];
$img_tmp_file3 = $_FILES['n_file3']['tmp_name'];

move_uploaded_file( $img_tmp_file1, "$uploads_dir/$n_file1");
move_uploaded_file( $img_tmp_file2, "$uploads_dir/$n_file2");
move_uploaded_file( $img_tmp_file3, "$uploads_dir/$n_file3");

$sql = "select * from ds_member where m_id = '". $_SESSION['m_login_u'] ."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$n_name = $row['m_name'];

$sql= "INSERT INTO ds_notice1 (
			n_num, 
			n_id, 
			n_title, 
			n_content, 
			n_name,
			n_file1, 
			n_file2, 
			n_file3, 
			n_date, 
			n_level
		)
		VALUES (
			'',
			'". $_SESSION['m_login_u'] ."',
			'". $n_title ."',
			'". $n_content ."',
			'". $n_name ."',
			'". $n_file1 ."',
			'". $n_file2 ."',
			'". $n_file3 ."',
			'". date('Y-m-d H:i:s') ."',
			'". $_SESSION['m_login_level'] ."'
		)";

mysqli_query($conn, $sql);

?>

<script language="javascript">
	alert("글쓰기 완료");
	location.href="/ds_notice/n_list_1.php";
</script>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>