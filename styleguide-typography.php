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
		<div class="row">
			<div class="col-md-6">
				<dl class="dl-horizontal">
					<dt>Title</dt><dd><h2>Larva Labs is a super duo</h2></dd>
					<dt>Heading</dt><dd><h3>Design &amp; Happiness Solutions</h3></dd>
					<dt>Paragraph</dt><dd><p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod quis tempor incididunt ut labore etta dolore magna en aliqua.</p><p>Minim veniam, en ulla laboris aliquip ex vetse consequat. Duis aute dolor in velit esse.</p></dd>
					<dt>Link</dt><dd><a href="#">Always stay gracious, best revenge is your paper.</a></dd>
					<dt>Small</dt><dd><span class="small">Doesn’t look like anything to me</span></dd>
				</dl>
			</div>
			<div class="col-md-6">
				<dl class="dl-horizontal">
					<dt>Details</dt><dd><span class="details">ANDROID</span></dd>
					<dt>Quote</dt>
					<dd>
						<blockquote>
							<p>The goal of a designer is to listen, observe, understand, sympathize, empathize, synthesize, and glean insights that enable him or her to make the invisible visible.</p>
							<footer>Hillman Curtis</footer>
						</blockquote>
					</dd>
					<dt>List</dt>
					<dd>
						<ul>
							<li>Androidify</li>
							<li>Flow Home</li>
							<li>AppChat</li>
							<li>Slide Screen</li>
							<li>SplinterNet</li>
							<li>Winken, Blinken and Nod</li>
							<li>Facemixer</li>
						</ul>
					</dd>
				</dl>
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
