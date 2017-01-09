<?php $page = "styleguide"; ?>
<?php include "template/common/header.tpl"; $title = "Blocks"; ?>

<div class="page main_content">

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

	<!-- single image block -->
	<div class="container container_full">
		<div class="image_block">
			<picture>
				<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
				<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
			</picture>
			<caption>
				Full Image Block
			</caption>
		</div>
	</div>

	<!-- two image blocks -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

	<!-- three image blocks -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-3 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-3 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-3 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
	</div>

	<!-- left image block -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
			<div class="col-md-6 text_block">
				<h2>Image Block</h2>
				<p>Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna. Ut enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
			</div>
		</div>
	</div>

	<!-- right image block -->
	<div class="container container_full">
		<div class="row">
			<div class="col-md-6 text_block">
				<h2>Image Block</h2>
				<p>Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna. Ut enim ad minim veniam, quis laboris ut aliquip. Duis aute irure dolor in in voluptate velit esse cillum en dolore ut fugiat nulla pariatur. Excepteur sint proident, sunt in culpa qui officia mollit anim id est laborum. Lorem ipsum dolor sit amet, adipiscing elit do eiusmod tempor incididunt ut labore et dolore consectetur magna.</p>
			</div>
			<div class="col-md-6 image_block">
				<picture>
					<source data-srcset="/images/project-fpo.png, /images/project-fpo-2x.png 2x">
					<img src="/images/project-fpo.png" alt="Google Androidify" class="img-responsive lazyload">
				</picture>
			</div>
		</div>
	</div>

<?php include "template/common/footer.tpl"; ?>
