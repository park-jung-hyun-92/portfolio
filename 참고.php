<style>
	div.gallery {
		margin: 5px;
		border: 1px solid #ccc;
		float: left;
		width: 150px;
	}

	div.desc {
		padding: 15px;
		text-align: center;
	}
</style>


<div style="width:800px;">
	<?php
		for ($i=0; $i<=10; $i++) {
	?>
			<div class="gallery">
				<a target="_blank" href="#"><img src="경로" width="150" height="200"></a>
				<div class="desc">제목</div>
			</div>
	<?php
		}
	?>
</div>


<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include_all//bottom.php'; ?>

<table>
	<?php
		$r = 2;
		for ($i=0; $i<=10; $i++) {
			if ($i%$r == 0 || $i == 0)
				echo "<tr>";
	?>
				<td style="padding: 0px 0px 20px 350px;">
					i : <?php echo $i; ?>  ----  i%<?=$r?> : <?php echo $i%$r; ?>
					<img src="/images/img_portfolio/portfolio_1-1.jpg"><div style="padding: 25px 0px 50px 0px;  text-align:center;"><b>미샤-눙크 50% 할인 이벤트 현수막</b></div>
				</td>
	<?php
			if ($i%$r == $r-1 || $i == 10)
				echo "</tr>";
		}
	?>

</table>


<div style="padding:20px 0px 0px 330px; color:white;">
	<div class="row">
		<div class="col-md-2">
			<span style="font-size: 45px; color:#ed6d01; ">1999’s</span>
		</div>
		<div class="col-md-1">
			<hr style="width:140px; margin-top:35px; border:solid 1px #ed6d01" color="ed6d01">
		</div>
		<div class="col-md-9" style="padding:13px 10px 0px 140px;">
			<span style="font-size: 30px; padding:10px 0px 0px 25px;">12</span>
			<span style="font-size: 30px; padding-left:18px;">대산애드 일산공장 확장 이전</span>
		</div>
	</div>
</div>