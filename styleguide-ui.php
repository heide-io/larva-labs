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
	<style>dl{font-size:15px}.dl-horizontal dd,.dl-horizontal dt{padding:0 30px 30px 0;}.button{margin-top:50px;}</style>
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
					<li class="jsNavShow"><a href="styleguide-typography.php">Typography</a></li>
					<li class="jsNavShow"><a href="styleguide-ui.php" class="active">UI</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<div class="styleguide main_content">
	<div class="container">
		<div class="row">

			<div class="col-md-5">
				<div class="row">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Input text">
					</div>
				</div>
				<div class="row">
					<div class="dropdown jsDropdownToggle select open">
						<a aria-expanded="false" role="button" data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="jsSelectValue">Today</span><svg viewBox="0 0 11 6" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-caret"></use></svg></a>
						<ul role="menu" class="dropdown-menu">
							<li class="jsInsertValue">Option</li>
							<li class="jsInsertValue">Option</li>
							<li class="jsInsertValue">Option</li>
							<li class="jsInsertValue">Option</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="col-md-1">
			</div>

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
				<div class="button">
					<a href="#" class="btn">PRIMARY</a>
				</div>
				<div class="button">
					<a href="#" class="btn btn_secondary">SECONDARY</a>
				</div>
				<input class="tgl tgl-flip jsTriggerTheme" id="cb5" type="checkbox"><label class="tgl-btn" data-tg-off="Dark" data-tg-on="Light" for="cb5"></label>
			</div>

		</div>
	</div>
</div>

<svg hidden>
	<defs>
		<g id="icon-logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				<g fill="#FF04B4">
						<path d="M0,3.5 C0,1.56700338 1.57093664,0 3.5,0 C5.43299662,0 7,1.57093664 7,3.5 C7,5.43299662 5.42906336,7 3.5,7 C1.56700338,7 0,5.42906336 0,3.5 Z M0,13.5 C0,11.5670034 1.57093664,10 3.5,10 C5.43299662,10 7,11.5709366 7,13.5 C7,15.4329966 5.42906336,17 3.5,17 C1.56700338,17 0,15.4290634 0,13.5 Z M0,22.5 C0,20.5670034 1.57093664,19 3.5,19 C5.43299662,19 7,20.5709366 7,22.5 C7,24.4329966 5.42906336,26 3.5,26 C1.56700338,26 0,24.4290634 0,22.5 Z M12,4 C12,2.8954305 12.8877296,2 14,2 C15.1045695,2 16,2.88772964 16,4 C16,5.1045695 15.1122704,6 14,6 C12.8954305,6 12,5.11227036 12,4 Z M12,14 C12,12.8954305 12.8877296,12 14,12 C15.1045695,12 16,12.8877296 16,14 C16,15.1045695 15.1122704,16 14,16 C12.8954305,16 12,15.1122704 12,14 Z M12,23 C12,21.8954305 12.8877296,21 14,21 C15.1045695,21 16,21.8877296 16,23 C16,24.1045695 15.1122704,25 14,25 C12.8954305,25 12,24.1122704 12,23 Z" id="logo"></path>
				</g>
		</g>
</svg>

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
