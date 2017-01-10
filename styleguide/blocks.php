<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv=X-UA-Compatible content="IE=11">
	<title>Styleguide</title>
	<link rel="stylesheet" href="../components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../components/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="../css/styles.css">
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
					<li class="jsNavShow"><a href="blocks.php" class="active">Blocks</a></li>
					<li class="jsNavShow"><a href="interactions.php">Interactions</a></li>
					<li class="jsNavShow"><a href="typography.php">Type</a></li>
					<li class="jsNavShow"><a href="ui.php">UI</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<div class="styleguide main_content">

	<!-- text_block indented -->
	<div class="container">
		<div class="row">
			<div class="col-md-1 spacer_block">
			</div>
			<div class="col-md-10 text_block">
				<h1>10-Column Text Block</h1>
				<p>Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna. Ut enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
			</div>
			<div class="col-md-1 spacer_block">
			</div>
		</div>
	</div>

	<!-- image block -->
	<div class="container container_full">
		<div class="image_block">
			<picture>
				<source data-srcset="../fpo/project-fpo.png, fpo/project-2x.png 2x">
				<img src="../fpo/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
			</picture>
			<p class="details">Full image block with caption</p>
		</div>
	</div>

	<!-- image block x2 -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="../fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="../fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- image block x3 -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="../fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="../fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="../fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- image block wrap -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="../fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="../fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-6 text_block">
				<h2>Image Block</h2>
				<p>Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna. Ut enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
			</div>
		</div>
	</div>

	<!-- code block -->
	<div class="container">
		<div class="code_block">
			<code>
				.animated &#123; <br>
			  &nbsp;&nbsp;webkit-animation-duration: infinite;<br>
			  &nbsp;&nbsp;animation-duration: infinite;<br>
			  &nbsp;&nbsp;animation-timing-function: cubic-bezier(0.75, 0.05, 0.85, 0.06);<br>
				&#125;
			</code>
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
