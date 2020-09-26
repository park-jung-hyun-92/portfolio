<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$n_num = $_POST['n_num'];
$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file = $_POST['n_file'];

$uploads_dir = '../images/img_notice';

$n_file = $_FILES['n_file']['name'];
$img_tmp_file = $_FILES['n_file']['tmp_name'];

move_uploaded_file( $img_tmp_file, "$uploads_dir/$n_file");

$sql="update ds_notice2 set 
         n_title= '$n_title',
         n_content= '$n_content',
         n_file= '$n_file'
      WHERE
        n_num = ".$n_num ;

mysqli_query($conn, $sql); 

?>

<script language="javascript">
   alert("내용이 수정되었습니다.");
   location.href="/ds_notice/n_list_2.php"
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>