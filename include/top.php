<?php require_once $_SERVER['DOCUMENT_ROOT'] .'/include/global.php'; ?>
<html lang="kr">
<head>
	<meta charset="utf-8">
	<title>정현 포트폴리오</title>

	<link href="/common/css/bootstrap.min.css" rel="stylesheet">
	<link href="/common/css/carousel.css" rel="stylesheet">
	<link href="/common/css/global.css" rel="stylesheet">

	<script src="/assets/js/ie-emulation-modes-warning.js"></script>
	<script src="/common/js/member.js"></script>
</head>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><img src="/images/logo.png" style="width:150px; height:50px; padding-bottom:30px;"></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav" style="float:right;">
					<li><a href="/company/company_1.php">회사소개</a></li>
					<li><a href="/business/business_1.php">사업소개</a></li>
					<li><a href="/portfolio/portfolio_1.php">포트폴리오</a></li>
					<li><a href="/notice/list.php">고객지원</a></li>

			<?php
					if($_SESSION[ 'm_login_u' ])	{ //로그인되었을때
			?>
						<li><a href="/member/edit.php">회원정보수정</a></li>
						<li><a href="/member/logout.php">로그아웃</a></li>

			<?php } else { //로그인이 안됬을때

			?>
						<li><a href="/member/join.php">회원가입</a></li>
						<li><a href="/member/login.php">로그인</a></li>
			<?php } ?>

				</ul>
			</div>
		</div>
	</nav>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="/images/img_main/main_1-1.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption">
						<img src="/images/img_main/main_1-2.png" alt="" style="top: 296.333px; left: 249.341px; margin: 0px; z-index: auto; width: 293.259px; height: 42.5013px; padding: 0px; border-width: 0px; border-radius: 0px; filter: none;">
						<img src="/images/img_main/main_1-3.png"  alt="" style="top: 296.333px; left: 564.559px; margin: 0px; z-index: auto; width: 237.299px; height: 42.5013px; padding: 0px; border-width: 0px; border-radius: 0px; filter: none;">
					</div>
				</div>
			</div>
		<div class="item">
			<img src="/images/img_main/main_1-1.jpg" alt="Second slide">
			<div class="container">
				<div class="carousel-caption">
					<img src="/images/img_main/main_1-4.png" alt="" style="top: 257.373px; left: 249.341px; margin: 0px; z-index: auto; width: 689.23px; height: 99.8781px; padding: 0px; border-width: 0px; border-radius: 0px; filter: none;">
				</div>
			</div>
		</div>
	</div>
