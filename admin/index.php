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
							Dashboard
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
							Statistics
						</h2>
					</div>
					<div class="highcharts_dig_wrap">
						<div class="filter_block__highcharts">
							<a href="#">
								Year
							</a>
							<a href="#">
								Month
							</a>
							<a href="#">
								Week
							</a>
							<a href="#">
								Yesterday
							</a>
							<a href="#" class="active">
								Today
							</a>
						</div>
						<div id="highcharts_dig"></div>
						<div class="row">
							<div class="wrap__col__highcharts_dig">
								<div class="col-sm-3 col-middle">
									<div class="wrap__stats">
										<div class="left__col">
											<div class="number__left__col">
												3542
											</div>
											<ul>
												<li>
													Visitors 
												</li>
												<li>
													Last Month
												</li>
											</ul>
										</div>
										<div class="right__col light_green_font">
											+435
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-middle">
									<div class="wrap__stats">
										<div class="left__col">
											<div class="number__left__col">
												872
											</div>
											<ul>
												<li>
													Visitors 
												</li>
												<li>
													Last Week
												</li>
											</ul>
										</div>
										<div class="right__col light_green_font">
											+25
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-middle">
									<div class="wrap__stats">
										<div class="left__col">
											<div class="number__left__col">
												55
											</div>
											<ul>
												<li>
													Visitors 
												</li>
												<li>
													Today
												</li>
											</ul>
										</div>
										<div class="right__col light_green_font">
											+12
										</div>
									</div>
								</div>
								<div class="col-sm-3 col-middle">
									<div class="wrap__stats">
										<div class="left__col">
											<div class="number__left__col">
												4
											</div>
											<ul>
												<li>
													Currently
												</li>
												<li>
													Online
												</li>
											</ul>
										</div>
										<div class="right__col light_red_font">
											-2
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="subtitle">
						<h3>
							Activity Log
						</h3>
					</div>
					<div class="activity_log__wrap">
						<table class="activity_log" border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<th>
									DATE
								</th>
								<th>
									ACTION
								</th>
								<th>
									IP
								</th>
								<th>
									USER
								</th>
							</tr>
							<tr>
								<td>
									<div class="time">
										21:35
									</div>
									<div class="date">
										12.02.2018
									</div>
								</td>
								<td>
									User <strong>Rasim</strong> has logged in
								</td>
								<td>
									88.33.22.53
								</td>
								<td>
									<div class="active_user">
										System
									</div>
									<div class="not_on"></div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="time">
										21:35
									</div>
									<div class="date">
										12.02.2018
									</div>
								</td>
								<td>
									Article <strong>"The Ultimate Guide To company"</strong> was added
								</td>
								<td>
									172.34.221.155
								</td>
								<td>
									<div class="active_user">
										Rasim R.
									</div>
									<div class="not_on"></div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="time">
										21:35
									</div>
									<div class="date">
										12.02.2018
									</div>
								</td>
								<td>
									Maintenance mode turned off
								</td>
								<td>
									172.34.221.155
								</td>
								<td>
									<div class="active_user">
										Rasim R.
									</div>
									<div class="not_on"></div>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('include/script.php'); ?>
	<?php require_once('include/popups.php'); ?>
</body>
</html>