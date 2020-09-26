<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>

<?php

$n_num = $_POST['n_num'];
$n_title = $_POST['n_title'];
$n_content = $_POST['n_content'];
$n_file1 = $_POST['n_file1'];
$n_file1_old = $_POST['n_file1_old'];

$uploads_dir = '../images/img_notice';

$n_file1 = $_FILES['n_file1']['name'];
$img_tmp_file1 = $_FILES['n_file1']['tmp_name'];

move_uploaded_file( $img_tmp_file1, "$uploads_dir/$n_file1");

if ($n_file1 == ""){ $n_file1 = $n_file1_old; }


$sql="update ds_notice2 set 
         n_title= '$n_title',
         n_content= '$n_content',
         n_file1= '$n_file1'
      WHERE
        n_num = ".$n_num ;

mysqli_query($conn, $sql); 

?>

<script language="javascript">
   alert("내용이 수정되었습니다.");
   location.href="./list.php"
</script>
