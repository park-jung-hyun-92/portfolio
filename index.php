<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/top.php'; ?>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">

		<table class="table">
			<tr>
				<td style="width:50%">
					<table style="width:100%;">
						<tr>
							<th style="padding-top: 30px;">공지사항</th>
							<th style="text-align:right; padding-top: 30px;"><a href="/notice/list.php">더보기</a></th>
						</tr>
					</table>
					<br>

					<table class="table">
						<thead>
							<tr style="border-top: 2px solid #ddd;">
								<th style="text-align:center;">제목</th>
								<th style="text-align:center;">작성일</th>
							</tr>
						</thead>
						<?php
							$list_num =5;

							$sql = "
								select * from
									ds_notice1
								limit $list_num
							";
							$result=mysqli_query($conn, $sql);
						?>
						<tbody>
							<?php
								while ($row = mysqli_fetch_array($result))
								{
							?>
									<tr style="border-bottom: 1px solid #dfe3e6;">
										<td><a href="/notice/view.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title'];?></td>
										<td style="text-align:center; width:20%"><?php echo $row['n_date'] ?></td>
									</tr>
							<?php
								}
							?>
						</tbody>
					</table>

				</td>
				<td>

					<table style="width:100%;">
						<tr>
							<th style="padding-top: 30px;">제작가이드</th>
							<th style="text-align:right; padding-top: 30px;"><a href="/guide/list.php">더보기</a></th>
						</tr>
					</table>
					<br>

					<table class="table">
						<thead>
							<tr style="border-top: 2px solid #ddd;">
								<th style="text-align:center;">제목</th>
								<th style="text-align:center;">작성일</th>
							</tr>
						</thead>
						<?php
							$list_num =5;

							$sql = "
								select * from
									ds_notice2
								limit $list_num
							";
							$result=mysqli_query($conn, $sql);
						?>
						<tbody>
						<?php
							while ($row = mysqli_fetch_array($result))
							{
							?>
								<tr style="border-bottom: 1px solid #dfe3e6;">
									<td><a href="/guide/view.php?n_num=<?=$row['n_num']; ?>"><?php echo $row['n_title'];?></td>
									<td style="text-align:center; width:20%"><?php echo $row['n_date'] ?></td>
								</tr>
						<?php
							}
						?>
						</tbody>
					</table>

				</td>
			</tr>
		</table>
	</div>
	<div class="col-md-2"></div>
</div>

	<div class="col-md-2"></div>
	<div class="col-md-9">
		<table>
			<?php
				$list_num =2;

				$sql = "
					select * from
						portfolio
					limit $list_num
				";
				$result=mysqli_query($conn, $sql);
			?>

			<div>
			<?php
				while ($row = mysqli_fetch_array($result))
				{
			?>
					<div class="gallery">
						<a href="/portfolio/view.php?n_num=<?=$row['n_num']; ?>"><img src="/images/img_portfolio/<?=$row['n_file1']; ?>" width="275" height="200"></a>
						<div class="desc"><?php echo $row['n_title'];?></div>
					</div>
			<?php
				}
			?>
		</div>
	</table>

	<table>
			<?php
				$list_num =2;

				$sql = "
					select * from
						portfolio2
					limit $list_num
				";
				$result=mysqli_query($conn, $sql);
			?>

			<div>
			<?php
				while ($row = mysqli_fetch_array($result))
				{
			?>
					<div class="gallery">
						<a href="/portfolio2/view.php?n_num=<?=$row['n_num']; ?>"><img src="/images/img_portfolio2/<?=$row['n_file1']; ?>" width="275" height="200"></a>
						<div class="desc"><?php echo $row['n_title'];?></div>
					</div>
			<?php
				}
			?>
		</div>
	</table>
</div>
<div class="col-md-2"></div>

<div style="clear:left"></div>

<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/bottom.php'; ?>