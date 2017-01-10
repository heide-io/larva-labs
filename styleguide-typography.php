<?php $page = "styleguide"; ?>
<?php include "http://localhost:8000/template/common/header.tpl"; $title = "Typography"; ?>

<div class="inner_wrapper">
	<div class="container">
		<h4>Typography</h4>
		<div class="row">
			<div class="col-md-6">
				<dl class="dl-horizontal">
					<dt>Title</dt><dd><h2>Larva Labs is a super duo</h2></dd>
					<dt>Heading</dt><dd><h3>Design &amp; Happiness Solutions</h3></dd>
					<dt>Paragraph</dt><dd><p>Lorem ipsum dolor sit adipiscing elit, sed do eiusmod quis tempor incididunt ut labore etta dolore magna en aliqua.</p><p>Minim veniam, en ulla laboris aliquip ex vetse consequat. Duis aute dolor in velit esse.</p></dd>
					<dt>Link</dt><dd><a href="#">Always stay gracious, best revenge is your paper.</a></dd>
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
					<dt>Small</dt><dd><span class="small">Doesn’t look like anything to me</span></dd>
				</dl>
			</div>
		</div>
	</div>
</div>

<?php include "http://localhost:8000/template/common/footer.tpl"; ?>

<!-- demo -->
	<style>
		.main_header, .main_footer {display: none !important;}
		h4 {margin: 70px 0 !important;}
		h1, h2, h3 {margin: 0 !important;}
		.dl-horizontal dt, .dl-horizontal dd {margin-bottom: 40px !important;}
	</style>
