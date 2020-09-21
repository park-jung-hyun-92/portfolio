<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">공지사항</span>
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
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file1']?>"></div>
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><?php echo $row['n_content']; ?></div>
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file2']?>"></div>
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><?php echo $row['n_content']; ?></div>
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><img src="<?php echo $uploads_dir."/".$row['n_file3']?>"></div>
			<div style="font-size:17px;"><b>&nbsp;&nbsp;&nbsp;</div><div style="font-size:17px;"><?php echo $row['n_content']; ?></div>
	</div>
		
</div>

<div style="clear:left"></div>	

<div style="padding:60px 0px 0px 330px;"><input type="button" style="background-color:#000; color:white;" value="목록보기" onclick="location.href='/ds_notice/n_list_1.php'"></div>
		

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>