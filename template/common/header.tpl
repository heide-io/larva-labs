<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv=X-UA-Compatible content="IE=11">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
	<!-- production -->
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header class="container main_header">
	<div class="row">
		<div class="col-lg-3 col-xs-3">
			<a href="index.php" class="logo <?php echo ($page == "index" ? "active" : "")?>">
				<svg viewBox="0 0 16 26" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo"></use></svg>
				<span>Larva Labs</span>
			</a>
		</div>
		<div class="col-lg-9 col-xs-9">
			<nav class="main_navigation">
				<ul class="list main_nav_list">
					<?php include "template/common/nav.tpl"; ?>
				</ul>
			</nav>
		</div>
	</div>
</header>
