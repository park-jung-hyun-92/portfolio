<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>

<?php

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file1 = $_POST['n_file1'];

$uploads_dir = '../images/img_notice';

$n_file1 = $_FILES['n_file1']['name'];
$img_tmp_file1 = $_FILES['n_file1']['tmp_name'];

move_uploaded_file( $img_tmp_file1, "$uploads_dir/$n_file1");



$sql= "INSERT INTO ds_notice2 (
			n_num, 
			n_id, 
			n_title, 
			n_content, 
			n_name,
			n_file1, 
			n_date, 
			n_level
		)
		VALUES (
			'',
			'". $_SESSION['m_login_u'] ."',
			'". $n_title ."',
			'". $n_content ."',
			'". $_SESSION['m_login_n'] ."',
			'". $n_file1 ."',
			'". date('Y-m-d H:i:s') ."',
			'". $_SESSION['m_login_level'] ."'
		)";

mysqli_query($conn, $sql);

?>

<script language="javascript">
	alert("글쓰기 완료");
	location.href="./list.php";
</script>
