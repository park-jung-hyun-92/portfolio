<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>

<?php

$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file1 = $_POST['n_file1'];
$n_file2 = $_POST['n_file2'];
$n_file3 = $_POST['n_file3'];

$uploads_dir = '../images/img_portfolio2';

$n_file1 = $_FILES['n_file1']['name'];
$img_tmp_file1 = $_FILES['n_file1']['tmp_name'];
$n_file2 = $_FILES['n_file2']['name'];
$img_tmp_file2 = $_FILES['n_file2']['tmp_name'];
$n_file3 = $_FILES['n_file3']['name'];
$img_tmp_file3 = $_FILES['n_file3']['tmp_name'];

move_uploaded_file( $img_tmp_file1, "$uploads_dir/$n_file1");
move_uploaded_file( $img_tmp_file2, "$uploads_dir/$n_file2");
move_uploaded_file( $img_tmp_file3, "$uploads_dir/$n_file3");


$sql= "INSERT INTO portfolio2 (
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
			'". $_SESSION['m_login_n'] ."',
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
	location.href="./list.php";
</script>
