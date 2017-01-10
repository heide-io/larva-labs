<?php $page = "styleguide"; ?>
<?php include "template/common/header.tpl"; $title = "User Interface"; ?>

<div class="inner_wrapper">
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
				<div class="dropdown jsDropdownToggle custom_dropdown">
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

<?php include "template/common/footer.tpl"; ?>

<!-- demo only -->
<link rel="stylesheet" href="css/toggle.css">
<style>
	.main_header, .main_footer {display: none !important;}
</style>
<script>
	$(document).on('change load', '.jsTriggerTheme', function() {
		if($(".jsTriggerTheme").is(':checked')) {
			$('body').addClass('inverse_page')
		}
		else {
			$('body').removeClass('inverse_page')
		}
	})
</script>
