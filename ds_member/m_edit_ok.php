<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php

$m_id = $_POST['m_id'];
$m_password1 = $_POST['m_password1'];
$m_password2 = $_POST['m_password2'];
$m_name = $_POST['m_name'];
$m_email = $_POST['m_email'];
$m_phone1 = $_POST['m_phone1'];
$m_phone2 = $_POST['m_phone2'];
$m_phone3 = $_POST['m_phone3'];
$phone = $m_phone1.'-'.$m_phone2.'-'.$m_phone3;


$sql="update ds_member set 
         m_id= '$m_id',
         m_password1= '$m_password1',
         m_password2= '$m_password2',
         m_name = '$m_name',
         m_email = '$m_email',
         m_phone = '$phone'
      WHERE
         m_id  = '".$_SESSION[ 'm_login_u' ]."' 
      ";

mysqli_query($conn, $sql); 

?>



<script language="javascript">
   alert("회원정보가 수정되었습니다.");
   location.href="/ds_member/m_edit.php"
</script>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>