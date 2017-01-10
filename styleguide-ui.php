<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv=X-UA-Compatible content="IE=11">
	<title>Styleguide - Typography</title>
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/styles.css">
	<style>dl{font-size:15px}.dl-horizontal dd,.dl-horizontal dt{padding:0 30px 30px 0;}</style>
	<!-- <style>dl{font-size:15px}.dl-horizontal dd,.dl-horizontal dt{margin-bottom:30px}h1,h2,h3{margin:0}h4{margin:70px 0}</style> -->
</head>
<body>

<header class="container main_header">
	<div class="row">
		<div class="col-md-6">
			<svg viewBox="0 0 16 26" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo"></use></svg>
			<a href="../index.php" class="logo <?php echo ($page == "index" ? "active" : "")?>">Larva Labs</a>
		</div>
		<div class="col-md-6">
			<nav class="main_navigation">
				<ul class="list main_nav_list">
					<li class="jsNavShow"><a href="styleguide-blocks.php">Blocks</a></li>
					<li class="jsNavShow"><a href="styleguide-typography.php" class="active">Typography</a></li>
					<li class="jsNavShow"><a href="styleguide-ui.php">UI</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<div class="styleguide main_content">
	<div class="container">
		<h4>User interface <span><input class="tgl tgl-flip jsTriggerTheme" id="cb5" type="checkbox"><label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="cb5"></label></h4>
		<div class="row">
			<div class="col-md-6">
				<div class="outer_space">
					<h2>Montserrat</h2>
					<h3>Montserrat is a font designed by graphic designer Julieta Ulanovsky</h3>
				</div>
				<div class="row outer_space">
					<div class="col-md-6">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" checked>
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
					</div>
					<div class="col-md-6">
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
						<label class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input">
							<span class="custom-control-indicator"></span>
							<span class="custom-control-description">Option unchecked</span>
						</label>
					</div>
				</div>
				<a href="#" class="btn">PRIMARY</a>
				<a href="#" class="btn btn_inverse">SECONDARY</a>
			</div>
			<div class="col-md-6">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Input text">
			</div>
				<div class="dropdown jsDropdownToggle select">
					<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="jsSelectValue">Today</span><svg viewBox="0 0 11 6" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret"></use></svg></a>
					<ul role="menu" class="dropdown-menu">
						<li class="jsInsertValue">Option</li>
						<li class="jsInsertValue">Hover and Selected</li>
						<li class="jsInsertValue">Option</li>
						<li class="jsInsertValue">Option</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="../components/jquery-2.2.4.min.js"></script>
<script src="../components/bootstrap/js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>
<script src="../components/lazysizes.min.js"></script>
<script src="../components/ls.attrchange.min.js"></script>
<script>
	window.lazySizesConfig = window.lazySizesConfig || {};
	window.lazySizesConfig.expand = 10; //default 360-500
	lazySizesConfig. expFactor = 1.5; //default: 1.7
</script>

</body>
</html>
