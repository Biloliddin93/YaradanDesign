<!DOCTYPE html>
<html lang="en">
<?php require_once('include/head.php'); ?>
<body>
	<div class="wrapper">
		<?php require_once('include/header.php'); ?>
		<div class="content">
			<div class="top_block__content mobile_down_arrow">
				<h1>
					Contact us
				</h1>
				<div class="menu__top_block__content">
					<ul>
						<li>
							<a href="#">
								About
							</a>
						</li>
						<li>
							<a href="#">
								Education
							</a>
						</li>
						<li>
							<a href="#">
								Team
							</a>
						</li>
						<li>
							<a href="#">
								Sponsors
							</a>
						</li>
						<li>
							<a href="#">
								News
							</a>
						</li>
						<li class="active">
							<a href="#">
								Contact us
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="contact_us_block">
				<div class="blockin__contact_us">
					<form action="" method="post">
						<label for="" class="wrap_input">
							<input type="text" placeholder="Full name" class="input_style">
						</label>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<label for="" class="wrap_input">
									<input type="text" placeholder="Email" class="input_style">
								</label>
							</div>
							<div class="col-sm-6 col-xs-12">
								<label for="" class="wrap_input">
									<select class="select_style request_type">
										<option value="" selected>Request type</option>
										<option value="">Request type - 2</option>
										<option value="">Request type - 3</option>
										<option value="">Request type - 4</option>
										<option value="">Request type - 5</option>
										<option value="">Request type - 6</option>
									</select>
								</label>
							</div>
						</div>
						<label for="" class="wrap_input">
							<textarea name="" id="" class="textarea_style" placeholder="Your message"></textarea>
						</label>
						<label for="" class="wrap_input tar">
							<input type="submit" class="btn_style_form" value="Send">
						</label>
					</form>
				</div>
			</div>
		</div>
		<?php require_once('include/footer.php'); ?>
	</div>
	<?php require_once('include/script.php'); ?>
</body>
</html>