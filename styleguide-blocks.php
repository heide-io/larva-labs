<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="robots" content="noindex">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv=X-UA-Compatible content="IE=11">
	<title>Styleguide - Blocks</title>
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="components/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700">
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header class="container main_header">
	<div class="row">
		<div class="col-md-6">
			<svg viewBox="0 0 16 26" y="0" x="0"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-logo"></use></svg>
			<a href="index.php" class="logo <?php echo ($page == "index" ? "active" : "")?>">Larva Labs</a>
		</div>
		<div class="col-md-6">
			<nav class="main_navigation">
				<ul class="list main_nav_list">
					<li class="jsNavShow"><a href="styleguide-blocks.php" class="active">Blocks</a></li>
					<li class="jsNavShow"><a href="styleguide-typography.php">Typography</a></li>
					<li class="jsNavShow"><a href="styleguide-ui.php">UI</a></li>
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

	<!-- image_block -->
	<div class="container_full">
		<div class="row">
			<div class="col-md-12 image_block">
				<picture>
					<source data-srcset="fpo/blog-list-thumbnail-fpo.png, fpo/blog-list-thumbnail-2x.png 2x">
					<img src="fpo/blog-list-thumbnail-fpo.png" alt="Androidify Yourself in Times Square" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- image block x2 -->
	<div class="container">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- image block x3 -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-4 image_block">
				<picture>
					<source data-srcset="fpo/image-block-small-fpo.png, fpo/image-block-small-2x.png 2x">
					<img src="fpo/image-block-small-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- image block wrap -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="fpo/image-block-square-fpo.png, fpo/image-block-square-2x.png 2x">
					<img src="fpo/image-block-square-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
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
		<div class="row">
			<div class="col-md-12 code_block">
				<code>
					.animated &#123; <br>
				  &nbsp;&nbsp;webkit-animation-duration: infinite;<br>
				  &nbsp;&nbsp;animation-duration: infinite;<br>
				  &nbsp;&nbsp;animation-timing-function: cubic-bezier(0.75, 0.05, 0.85, 0.06);<br>
					&#125;
				</code>
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
