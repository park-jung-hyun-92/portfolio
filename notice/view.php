<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/tap_notice.php'; ?>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">상세보기</span>
	</span>
</div>

<?php

$n_num = $_GET['n_num'];

$uploads_dir = '../images/img_notice';

$sql = "select * from ds_notice1 where n_num = '". $n_num ."'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

?>

<div class="col-md-10" style="padding: 30px 0px 20px 20px;">
	<div style="padding:20px 0px 0px 330px;">
		<div style="font-size:30px;"><?php echo $row['n_title']; ?></div>
	</div>
	<div class="col-md-10" style="padding:35px 0px 30px 330px;">
		<div style="float: left; font-size:17px;"><b>작성자&nbsp;&nbsp;&nbsp;</div><div style="float: left; font-size:17px;"><?php echo $row['n_name']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
		<div style="float: left; font-size:17px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;작성일&nbsp;&nbsp;&nbsp;</div><div style="float: left; font-size:17px;"><?php echo $row['n_date']; ?></b></div>
	</div>
	<div class="col-md-10" style="padding:0px 0px 0px 330px;">
		<div style="border-bottom: 3px solid #262161; width:103%;"></div>
			<?php if($row['n_file1'] !== "") {?>
				<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file1']?>"></div>
			<?php }?>

			<?php if($row['n_file2'] !== "") {?>
				<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file2']?>"></div>
			<?php } ?>					

			<?php if($row['n_file3'] !== "") {?>
				<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file3']?>"></div> 
			<?php } ?>
			
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><?php echo nl2br($row['n_content']); ?></div>

	</div>
		
</div>

<div style="clear:left"></div>	


<?php
	if ($_SESSION['m_login_level'] == '10') 	{
?>
		<div style="padding:30px 0px 0px 350px;">
			<input type="button" style="background-color:#000; color:white;" value="목록" onclick="location.href='./list.php'">&nbsp;&nbsp;
			<input type="button" style="background-color:#000; color:white;" value="수정" onclick="location.href='./edit.php?n_num=<?=$n_num?>'">&nbsp;&nbsp;
			<input type="button" style="background-color:#000; color:white;" value="삭제" onclick="location.href='./delete_ok.php?n_num=<?=$n_num?>'">
		</div>
<?php
	} else { 
?>
		<div style="padding:30px 0px 0px 350px;"><input type="button" style="background-color:#000; color:white;" value="목록" onclick="location.href='./list.php'"></div>
<?php 
	} 
?>
		
<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>