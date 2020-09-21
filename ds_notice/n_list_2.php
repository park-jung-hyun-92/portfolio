<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div align="center" style="padding: 40px; 0px;">
<b><a href="/ds_notice/n_list_1.php"><input type="button" name="business_1" value="공지사항" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a>
<a href="/ds_notice/n_list_2.php"><input type="button" name="business_2" value="제작가이드" style="width: 170pt; height: 40pt; background-color:#ed6d01; color:white; font-size:16px; margin:20px;"></a></b>
</div>

<div>
	<span style="padding:0px 0px 0px 330px;">
		<span style="color: #ff6600; font-size: 40px;">●</span>
		<span style="color: #333; font-size: 30px;">제작가이드</span>
	</span>
</div>

<?php


$sql = "select * from ds_notice2";
$result=mysqli_query($conn,$sql);


?>

<div class="col-md-10" style="padding:0px 0px 0px 330px; padding-top:30px;">
	<table class="table">
		<thead>
			<tr>
				<th style="text-align:center;">번호</th>
				<th style="text-align:center;">제목</th>
				<th style="text-align:center;">작성자</th>
				<th style="text-align:center;">작성일</th>
			</tr>
		</thead>
		<tbody>
<?php
		while ($row = mysqli_fetch_array($result))
		{
?>
			<tr>
				<td style="text-align:center;"><?php echo $row['n_num']?></td>
				<td style="text-align:center;" width="70%"><a href="/ds_notice/n_view_2.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title']; ?></a></td>
				<td style="text-align:center;" width="10%"><?php echo $row['n_name']; ?></td>
				<td style="text-align:center;"><?php echo $row['n_date'] ?></td>
			</tr>
<?php
		}
?>
		</tbody>
	</table>

<?php if ($_SESSION['m_login_level'] == '10') { ?>
			<div style="text-align:right;"><input type="button" value="글쓰기" onclick="location.href='/ds_notice/n_write_2.php'"></div>
<?php }  ?>





</div>


<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>