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
							Banners
						</h2>
						<a href="#" class="btn_add flr">
							Add
						</a>
					</div>
					<div class="tabs">
						<ul class="tabs__caption">
							<li class="active">FRONT SLIDER</li>
							<li>FRONT RIGHT</li>
							<li>FRONT LEFT</li>
							<li>INNER BOTTOM</li>             
						</ul>

						<div class="tabs__content active">
							<div class="wrap__tabs__content wrap__tabs__content__users">
								<div class="row">
									<div class="col-md-6">
										<div class="search_block">
											<form action="" method="post">
												<input type="text" name="search" placeholder="Search" class="search">
												<input type="submit" class="search_submit">
											</form>
										</div>
									</div>
									<div class="col-md-6 tar">
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Show
										</a>
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Hide
										</a>
										<a href="#" class="btn_common_styles btn_light_red btn_users">
											Delete
										</a>
									</div>
								</div>
								<table class="table__banners" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<th>
											Image
										</th>
										<th>
											TITLE
										</th>
										<th>
											Translations
										</th>
										<th>
											ADDED
										</th>
										<th>
											STATUS
										</th>
										<th></th>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Hidden
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
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
							<div class="wrap__tabs__content wrap__tabs__content__users">
								<div class="row">
									<div class="col-md-6">
										<div class="search_block">
											<form action="" method="post">
												<input type="text" name="search" placeholder="Search" class="search">
												<input type="submit" class="search_submit">
											</form>
										</div>
									</div>
									<div class="col-md-6 tar">
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Show
										</a>
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Hide
										</a>
										<a href="#" class="btn_common_styles btn_light_red btn_users">
											Delete
										</a>
									</div>
								</div>
								<table class="table__banners" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<th>
											Image
										</th>
										<th>
											TITLE
										</th>
										<th>
											Translations
										</th>
										<th>
											ADDED
										</th>
										<th>
											STATUS
										</th>
										<th></th>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Hidden
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
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
							<div class="wrap__tabs__content wrap__tabs__content__users">
								<div class="row">
									<div class="col-md-6">
										<div class="search_block">
											<form action="" method="post">
												<input type="text" name="search" placeholder="Search" class="search">
												<input type="submit" class="search_submit">
											</form>
										</div>
									</div>
									<div class="col-md-6 tar">
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Show
										</a>
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Hide
										</a>
										<a href="#" class="btn_common_styles btn_light_red btn_users">
											Delete
										</a>
									</div>
								</div>
								<table class="table__banners" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<th>
											Image
										</th>
										<th>
											TITLE
										</th>
										<th>
											Translations
										</th>
										<th>
											ADDED
										</th>
										<th>
											STATUS
										</th>
										<th></th>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Hidden
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
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
							<div class="wrap__tabs__content wrap__tabs__content__users">
								<div class="row">
									<div class="col-md-6">
										<div class="search_block">
											<form action="" method="post">
												<input type="text" name="search" placeholder="Search" class="search">
												<input type="submit" class="search_submit">
											</form>
										</div>
									</div>
									<div class="col-md-6 tar">
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Show
										</a>
										<a href="#" class="btn_common_styles btn_gray btn_users">
											Hide
										</a>
										<a href="#" class="btn_common_styles btn_light_red btn_users">
											Delete
										</a>
									</div>
								</div>
								<table class="table__banners" border="0" cellpadding="0" cellspacing="0" width="100%">
									<tr>
										<th>
											Image
										</th>
										<th>
											TITLE
										</th>
										<th>
											Translations
										</th>
										<th>
											ADDED
										</th>
										<th>
											STATUS
										</th>
										<th></th>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Hidden
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="checkbox_block">
												<input type="checkbox" class="checkbox_style">
												<span></span>
											</div>
											<div class="img_block_table">
												<img src="images/img.jpg" alt="">
											</div>
										</td>
										<td>
											Michael Jackson
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
											<div class="time">
												21:35   
											</div>
											<div class="date">
												12.02.2018
											</div>
										</td>
										<td>
											Active
										</td>
										<td>
											<a href="#">
												<span class="icon__editing"></span>
											</a>
											<a href="#">
												<span class="icon__delete"></span>
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
	</div>
	<?php require_once('include/script.php'); ?>
</body>
</html>