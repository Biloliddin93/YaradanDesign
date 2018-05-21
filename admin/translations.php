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
							Banners
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
					<div class="title_page title_page__settings">
						<h2>
							Translations
						</h2>
						<a href="#add_traslation" class="btn_add modal-btn flr">
							Add Traslation
						</a>
					</div>
					<div class="edit_content">
						<div class="wrap__tabs__content wrap__tabs__content__translations">
							<div class="row">
								<div class="col-md-6">
									<div class="search_block search_block__translations">
										<form action="" method="post">
											<input type="text" name="search" placeholder="Search" class="search">
											<input type="submit" class="search_submit">
										</form>
									</div>
								</div>
							</div>
							<table class="translations_table" border="0" cellpadding="0" cellspacing="0" width="100%">
								<tr>
									<th>
										MESSAGE ID
									</th>
									<th>
										Default message
									</th>
									<th>
										STATUS
									</th>
									<th></th>
								</tr>
								<tr>
									<td>
										<strong>
											subscribeToBlog
										</strong>
									</td>
									<td>
										Subscribe to our blog updates
										<form action="" method="post" class="translations_form">
											<label for="" class="wrap_input">
												<div class="title_input">
													English
												</div>
												<input type="text" value="Subscribe to our blog updates" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Azerbaijani
												</div>
												<input type="text" value="Bizim blog yeniləmələrinə abunə ol" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Russian
												</div>
												<input type="text" value="Подпишитесь на обновления нашего блога" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<button type="submit" class="btn_light_green btn_save">
													Save
												</button>
												<button type="submit" class="btn_gray btn_cancel">
													Cancel
												</button>
											</label>
										</form>
									</td>
									<td>
										<span class="tick">
											En
										</span>
										<span class="tick">
											Az
										</span>
										<span class="tick">
											Ru
										</span>
									</td>
									<td>
										<a href="#" class="slideToogle">
											<span class="icon__editing"></span>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<strong>
											developedBy
										</strong>
									</td>
									<td>
										Developed by Magnum. 2018
										<form action="" method="post" class="translations_form">
											<label for="" class="wrap_input">
												<div class="title_input">
													English
												</div>
												<input type="text" value="Subscribe to our blog updates" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Azerbaijani
												</div>
												<input type="text" value="Bizim blog yeniləmələrinə abunə ol" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Russian
												</div>
												<input type="text" value="Подпишитесь на обновления нашего блога" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<button type="submit" class="btn_light_green btn_save">
													Save
												</button>
												<button type="submit" class="btn_gray btn_cancel">
													Cancel
												</button>
											</label>
										</form>
									</td>
									<td>
										<span class="tick">
											En
										</span>
										<span class="tick_empty">
											Az
										</span>
										<span class="tick">
											Ru
										</span>
									</td>
									<td>
										<a href="#" class="slideToogle">
											<span class="icon__editing"></span>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<strong>
											addressBottom
										</strong>
									</td>
									<td>
										106, Yahya Bakuvi street
										<form action="" method="post" class="translations_form">
											<label for="" class="wrap_input">
												<div class="title_input">
													English
												</div>
												<input type="text" value="Subscribe to our blog updates" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Azerbaijani
												</div>
												<input type="text" value="Bizim blog yeniləmələrinə abunə ol" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Russian
												</div>
												<input type="text" value="Подпишитесь на обновления нашего блога" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<button type="submit" class="btn_light_green btn_save">
													Save
												</button>
												<button type="submit" class="btn_gray btn_cancel">
													Cancel
												</button>
											</label>
										</form>
									</td>
									<td>
										<span class="tick">
											En
										</span>
										<span class="tick">
											Az
										</span>
										<span class="tick_empty">
											Ru
										</span>
									</td>
									<td>
										<a href="#" class="slideToogle">
											<span class="icon__editing"></span>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<strong>
											readMore
										</strong>
									</td>
									<td>
										Read more
										<form action="" method="post" class="translations_form">
											<label for="" class="wrap_input">
												<div class="title_input">
													English
												</div>
												<input type="text" value="Subscribe to our blog updates" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Azerbaijani
												</div>
												<input type="text" value="Bizim blog yeniləmələrinə abunə ol" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Russian
												</div>
												<input type="text" value="Подпишитесь на обновления нашего блога" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<button type="submit" class="btn_light_green btn_save">
													Save
												</button>
												<button type="submit" class="btn_gray btn_cancel">
													Cancel
												</button>
											</label>
										</form>
									</td>
									<td>
										<span class="tick">
											En
										</span>
										<span class="tick">
											Az
										</span>
										<span class="tick">
											Ru
										</span>
									</td>
									<td>
										<a href="#" class="slideToogle">
											<span class="icon__editing"></span>
										</a>
									</td>
								</tr>
								<tr>
									<td>
										<strong>
											menu
										</strong>
									</td>
									<td>
										Menu
										<form action="" method="post" class="translations_form">
											<label for="" class="wrap_input">
												<div class="title_input">
													English
												</div>
												<input type="text" value="Subscribe to our blog updates" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Azerbaijani
												</div>
												<input type="text" value="Bizim blog yeniləmələrinə abunə ol" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<div class="title_input">
													Russian
												</div>
												<input type="text" value="Подпишитесь на обновления нашего блога" class="input_style">
											</label>
											<label for="" class="wrap_input">
												<button type="submit" class="btn_light_green btn_save">
													Save
												</button>
												<button type="submit" class="btn_gray btn_cancel">
													Cancel
												</button>
											</label>
										</form>
									</td>
									<td>
										<span class="tick">
											En
										</span>
										<span class="tick">
											Az
										</span>
										<span class="tick">
											Ru
										</span>
									</td>
									<td>
										<a href="#" class="slideToogle">
											<span class="icon__editing"></span>
										</a>
									</td>
								</tr>
							</table>
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
				</div>
			</div>
		</div>
	</div>
	<?php require_once('include/script.php'); ?>
	<?php require_once('include/popups.php'); ?>
</body>
</html>