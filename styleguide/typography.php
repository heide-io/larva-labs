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
					<li class="jsNavShow"><a href="interactions.php">Interactions</a></li>
					<li class="jsNavShow"><a href="typography.php" class="active">Type</a></li>
					<li class="jsNavShow"><a href="ui.php">UI</a></li>
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
