<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php


$n_num = $_GET['n_num'];

$sql= "SELECT * FROM  ds_notice2 where n_num = ". $n_num ;
$result = mysqli_query($conn, $sql); 
$row = mysqli_fetch_array($result);

$sql= "delete from ds_notice2 where n_num = ". $n_num ;

mysqli_query($conn, $sql); 


echo "
	<script>
		alert('해당 글이 삭제되었습니다.')
		location.href= './n_list_2.php';
	</script>";

?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>