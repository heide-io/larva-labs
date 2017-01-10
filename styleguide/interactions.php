<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv=X-UA-Compatible content="IE=11">
	<title>Styleguide</title>
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/styles.css">
	<style>dl{font-size:15px}.dl-horizontal dd,.dl-horizontal dt{margin-bottom:30px}h1,h2,h3{margin:0}h4{margin:70px 0}</style>
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
					<li class="jsNavShow"><a href="blocks.php">Blocks</a></li>
					<li class="jsNavShow"><a href="interactions.php" class="active">Interactions</a></li>
					<li class="jsNavShow"><a href="typography.php">Type</a></li>
					<li class="jsNavShow"><a href="ui.php">UI</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<div class="styleguide main_content">
	<div class="container">
		<div class="outer_space">
			<h2>Try this with your next project</h2>
			<p>Labore et dolore consectetur magna enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
			<div class="share_block jsShareBlock">
				<a href="#" class="btn share_btn jsShareBtn"><span class="text_btn">SHARE</span><span class="close_share"><svg viewBox="0 0 16 16" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-close"></use></svg></span></a>
				<div class="jsSocialList" style="display: none;">
					<ul class="list-unstyled social_list">
						<li><a href="#"><svg viewBox="0 0 16 16" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-twitter"></use></svg>
						 twitter</a></li>
						<li><a href="#"><svg viewBox="0 0 16 16" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-facebook"></use></svg>facebook</a></li>
						<li><a href="#"><svg viewBox="0 0 16 16" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-google"></use></svg>google+</a></li>
						<li><a href="#"><svg viewBox="0 0 16 16" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-medium"></use></svg>medium</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="outer_space">
			<h2>Try this with your next project</h2>
			<p>Labore et dolore consectetur magna enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
		</div>
		<div class="outer_space">
			<a href="#" class="logo"><svg viewBox="0 0 16 26" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo"></use></svg>Larva Labs</a>
		</div>
		<div class="outer_space">
			<a href="#" class="btn">PRIMARY</a>
			<a href="#" class="btn btn_inverse">SECONDARY</a>
		</div>

	</div>
</div>

<script src="components/jquery-2.2.4.min.js"></script>
<script src="components/bootstrap/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="components/lazysizes.min.js"></script>
<script src="components/ls.attrchange.min.js"></script>
<script>
	window.lazySizesConfig = window.lazySizesConfig || {};
	window.lazySizesConfig.expand = 10; //default 360-500
	lazySizesConfig. expFactor = 1.5; //default: 1.7
</script>

</body>
</html>
