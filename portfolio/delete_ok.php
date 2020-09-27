<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>

<?php

$n_num = $_GET['n_num'];

$sql= "delete from portfolio where n_num = ". $n_num ;

mysqli_query($conn, $sql); 


echo "
	<script>
		alert('해당 글이 삭제되었습니다.')
		location.href= './list.php';
	</script>
";
?>

