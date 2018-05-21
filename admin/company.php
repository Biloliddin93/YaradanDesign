<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<?php require_once('include/styles.php'); ?>
</head>
<body>
	<div class="wrapper">
		<?php require_once('include/sidebar.php'); ?>
		<div class="content right_content">
			<div class="top_block">
				<div class="row">
					<div class="col-md-6 tal col-middle">
						<div class="title__top_block">
							<div class="wrap_burger">
								<span></span>
								<span></span>
								<span></span>
							</div>
							Content Management
						</div>
					</div>
					<div class="col-md-6 tar col-middle">
						<?php require_once('include/user.php'); ?>
					</div>
				</div>
			</div>
			<div class="wrapper_content_and_sidebar">
				<?php require_once('include/sidebar-2.php'); ?>
				<div class="content_wrap content_wrap__content_management">
					<div class="title_page">
						<h2>
							Company
						</h2>
					</div>
					<div class="tabs">
						<ul class="tabs__caption">
							<li class="active">ENGLISH</li>
							<li>RUSSIAN</li>
							<li>AZERBAIJANI</li>
							<li>GALLERY</li>      
							<li>SETTINGS</li>      
						</ul>

						<div class="tabs__content active">
							<div class="wrap_toggle">
								<div class="toggle_title">
									Page content
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-5 left_form__company">
												<label for="" class="wrap_input">
													<div class="title_input">
														Name
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input">
														Url alias
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input grey_font">
														Summary
													</div>
													<textarea name="" id="" class="textarea_style w100"></textarea>
												</label>
											</div>
											<div class="col-md-7 right_form__company">
												<div class="title_input grey_font">
													Featured Image
												</div>
												<div class="img_block__company_wrap">
													<div class="img_block__company">
														<img src="images/img_2.jpg" alt="">
													</div>
													<a href="#" class="btn_common_styles btn_gray btn_delete">
														<span class="icon__delete"></span> Delete image
													</a>
												</div>
											</div>
											<div class="col-xs-12">
												<label for="" class="wrap_input mt17">
													<div class="title_input grey_font">
														Body
													</div>
													<textarea name="" id="" class="textarea_style editor_style"></textarea>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="wrap_toggle">
								<div class="toggle_title">
									SEO Settings
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company__bottom">
									<div class="row">
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input">
													Page Title
												</div>
												<div class="wrap_count">
													<div class="input_count">
														<span class="count_text">
															0
														</span>
														/
														<span class="fixed_count">
															60
														</span>
													</div>
													<input type="text" maxlength="60" class="input_style w100 count_output">
												</div>
											</label>
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Keywords
												</div>
												<textarea name="" id="" class="textarea_style w100"></textarea>
											</label>
										</div>
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Page Description
												</div>
												<textarea name="" id="" class="textarea_style w100 h200"></textarea>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="wrap__bottom__tabs__content">
								<div class="row">
									<div class="col-md-12 tar col-middle">
										<a href="#" class="btn_light_green btn_save">
											Save
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs__content">
							<div class="wrap_toggle">
								<div class="toggle_title">
									Page content
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-5 left_form__company">
												<label for="" class="wrap_input">
													<div class="title_input">
														Name
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input">
														Url alias
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input grey_font">
														Summary
													</div>
													<textarea name="" id="" class="textarea_style w100"></textarea>
												</label>
											</div>
											<div class="col-md-7 right_form__company">
												<div class="title_input grey_font">
													Featured Image
												</div>
												<div class="img_block__company_wrap">
													<div class="img_block__company">
														<img src="images/img_2.jpg" alt="">
													</div>
													<a href="#" class="btn_common_styles btn_gray btn_delete">
														<span class="icon__delete"></span> Delete image
													</a>
												</div>
											</div>
											<div class="col-xs-12">
												<label for="" class="wrap_input mt17">
													<div class="title_input grey_font">
														Body
													</div>
													<textarea name="" id="" class="textarea_style editor_style"></textarea>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="wrap_toggle">
								<div class="toggle_title">
									SEO Settings
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company__bottom">
									<div class="row">
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input">
													Page Title
												</div>
												<div class="wrap_count">
													<div class="input_count">
														<span class="count_text">
															0
														</span>
														/
														<span class="fixed_count">
															60
														</span>
													</div>
													<input type="text" maxlength="60" class="input_style w100 count_output">
												</div>
											</label>
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Keywords
												</div>
												<textarea name="" id="" class="textarea_style w100"></textarea>
											</label>
										</div>
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Page Description
												</div>
												<textarea name="" id="" class="textarea_style w100 h200"></textarea>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="wrap__bottom__tabs__content">
								<div class="row">
									<div class="col-md-12 tar col-middle">
										<a href="#" class="btn_light_green btn_save">
											Save
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs__content">
							<div class="wrap_toggle">
								<div class="toggle_title">
									Page content
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company">
									<form action="" method="post">
										<div class="row">
											<div class="col-md-5 left_form__company">
												<label for="" class="wrap_input">
													<div class="title_input">
														Name
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input">
														Url alias
													</div>
													<div class="wrap_count">
														<div class="input_count">
															<span class="count_text">
																0
															</span>
															/
															<span class="fixed_count">
																60
															</span>
														</div>
														<input type="text" maxlength="60" class="input_style w100 count_output">
													</div>
												</label>
												<label for="" class="wrap_input">
													<div class="title_input grey_font">
														Summary
													</div>
													<textarea name="" id="" class="textarea_style w100"></textarea>
												</label>
											</div>
											<div class="col-md-7 right_form__company">
												<div class="title_input grey_font">
													Featured Image
												</div>
												<div class="img_block__company_wrap">
													<div class="img_block__company">
														<img src="images/img_2.jpg" alt="">
													</div>
													<a href="#" class="btn_common_styles btn_gray btn_delete">
														<span class="icon__delete"></span> Delete image
													</a>
												</div>
											</div>
											<div class="col-xs-12">
												<label for="" class="wrap_input mt17">
													<div class="title_input grey_font">
														Body
													</div>
													<textarea name="" id="" class="textarea_style editor_style"></textarea>
												</label>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="wrap_toggle">
								<div class="toggle_title">
									SEO Settings
								</div>
								<div class="wrap__tabs__content wrap__tabs__content__company__bottom">
									<div class="row">
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input">
													Page Title
												</div>
												<div class="wrap_count">
													<div class="input_count">
														<span class="count_text">
															0
														</span>
														/
														<span class="fixed_count">
															60
														</span>
													</div>
													<input type="text" maxlength="60" class="input_style w100 count_output">
												</div>
											</label>
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Keywords
												</div>
												<textarea name="" id="" class="textarea_style w100"></textarea>
											</label>
										</div>
										<div class="col-md-6">
											<label for="" class="wrap_input">
												<div class="title_input grey_font">
													Page Description
												</div>
												<textarea name="" id="" class="textarea_style w100 h200"></textarea>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="wrap__bottom__tabs__content">
								<div class="row">
									<div class="col-md-12 tar col-middle">
										<a href="#" class="btn_light_green btn_save">
											Save
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs__content">
							<div class="wrap__tabs__content wrap__tabs__content__gallery">
								<div class="uploader tac">
									<a href="#add_image_gallery" class="btn_add btn_add__images modal-btn">
										Add images
									</a>
								</div>
								<div class="row pdt16 pdb16">
									<div class="col-md-8">
										<div class="search_block search_block_gallery">
											<form action="" method="post">
												<input type="text" name="search" placeholder="Search" class="search">
												<input type="submit" class="search_submit">
											</form>
										</div>
									</div>
									<div class="col-md-4 tar">
										<a href="#" class="btn_common_styles btn_light_red btn_users">
											Delete
										</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="img_gallery__added">
											<img src="images/" alt="">
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
										</div>
										<div class="bottom_info_gallery__added">
											<div class="row">
												<div class="col-md-6">
													<div class="size_file">
														523 Kb
													</div>
													<div class="date_file">
														02/01/2018
													</div>
												</div>
												<div class="col-md-6 tar">
													<a href="#">
														<span class="icon__editing"></span>
													</a>
													<a href="#">
														<span class="icon__delete"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wrap__bottom__tabs__content">
								<div class="row">
									<div class="col-md-6 tal col-middle">
										<div class="pagination_block">
											<ul class="paginations">
												<li class="prev__pagination">
													<a href="#">
														<span></span>
													</a>
												</li>
												<li class="active">
													<span>
														1
													</span>
												</li>
												<li>
													<a href="#">2</a>
												</li>
												<li>
													<a href="#">3</a>
												</li>
												<li>
													<a href="#">...</a>
												</li>
												<li>
													<a href="#">17</a>
												</li>
												<li>
													<a href="#">18</a>
												</li>
												<li>
													<a href="#">19</a>
												</li>
												<li class="next__pagination">
													<a href="#">
														<span></span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 tar col-middle">
										<div class="display_on_page">
											<span>Display on page</span>
											<select name="" id="">
												<option value="">
													1
												</option>
												<option value="">
													2
												</option>
												<option value="">
													3
												</option>
												<option value="">
													4
												</option>
												<option value="" selected>
													5
												</option>
											</select>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tabs__content">
							<div class="wrap__tabs__content wrap__tabs__content__gallery">
								<form action="" method="post">
									<div class="left_form">
										<label for="" class="wrap_input">
											<div class="title_input">
												Keyword
											</div>
											<input type="text" class="input_style">
										</label>
										<label for="" class="wrap_input">
											<div class="title_input">
												Cache timeout
											</div>
											<select name="" id="">
												<option value="">1 Day</option>
												<option value="">2 Day</option>
												<option value="">3 Day</option>
												<option value="">4 Day</option>
											</select>
										</label>
									</div>
								</form>
							</div>
							<div class="wrap__bottom__tabs__content">
								<div class="row">
									<div class="col-md-12 tar col-middle">
										<a href="#" class="btn_light_green btn_save">
											Save
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
	<?php require_once('include/script.php'); ?>
	<?php require_once('include/popups.php'); ?>
</body>
</html>