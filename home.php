<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Cave Adullam | Home</title>

	<!-- BootStrap 4.1.1 -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

	<!-- Bootstrap 4.1.1 CSS from CDN -->
	<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>

	<!-- My Stylesheet -->
	<link rel="stylesheet" href="css/home-style.css">

</head>


<body>
	<!-- Main Content -->

	<!-- php include command to get header and menu from file -->

	<div class="container-fluid">
		<div class="row">
			<!-- Left pane - Nav: Logo and Menu -->
			<div class="col-md-3 left-pane">

				<!-- Logo -->
				<div class="row">
					<div class=" logo text-center">
						<img class="logo-img" src="/assets/images/Logo-Full-Colour.png" alt="Adullam Logo">
					</div>
				</div>

				<!-- Menu Nav -->
				<div class="row">
					<div class="col-md main-menu">
						<div class="menu-button" id="menu-button">
							<i class="fa fa-bars fa-2x">
							</i>
						</div>
						<h5 class="main-menu-text">MAIN MENU</h5>
						<div class="menu-links is-hidden">
							<ul class="main-menu-ul">
								<li>
									<i class="fa fa-home fa-2x"></i>
									<a href="home.php">Home</a>
								</li>
								<li>
									<i class="fa fa-tag fa-2x"></i>
									<a href="">About Adullam</a>
								</li>
								<li>
									<i class="fa fa-group fa-2x"></i>
									<a href="">Interest Groups</a>
								</li>
								<li>
									<i class="fa fa-sitemap fa-2x"></i>
									<a href="">Adullam Teams</a>
								</li>
								<li>
									<i class="fa fa-handshake-o fa-2x"></i>
									<a href="">Opportunities</a>
								</li>
								<li>
									<i class="fa fa-film fa-2x"></i>
									<a href="">Gallery</a>
								</li>
								<li>
									<i class="fa fa-calendar fa-2x"></i>
									<a href="">Event Calender</a>
								</li>
								<li>
									<i class="fa fa-hdd-o fa-2x"></i>
									<a href="">Resource Bank</a>
								</li>
								<li>
									<i class="fa fa-comments fa-2x"></i>
									<a href="">Adullam Chat</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Right pane - Content Pane -->
			<div class="col-md-9 right-pane">

				<!-- Search and Notifications -->
				<div class="col-md search-notif">
					<div class="header put-space-between">
						<!-- Home Search Button -->
						<div class="col-md-4 v-center">
							<form action="">
								<div class="input-group no-search-wrap">
									<input class="form-control home-search" type="text">
									<div class="input-group-append">
										<button class="btn home-search-button" type="button">
													<i class="fa fa-search"></i>
												</button>
									</div>
								</div>
							</form>
						</div>

						<!-- Notifications, Settings, Name and Icon -->
						<div class="col-md-8">
							<div class="move-to-right v-center notifs">
								<a href="chat.php">
											<i class="fa fa-comments fa-2x" style="padding-right: 10px;"></i>
										</a>
								<a href="#">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  													<i class="fa fa-bell fa-2x" style="padding-right: 10px;"></i>
  												</button>
										<div class="dropdown-menu" id="notif-dropdown" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button">Prayer and fasting</button>
											<button class="dropdown-item" type="button">Wisdom challenge</button>
											<button class="dropdown-item" type="button">Wealth Creation Challenge</button>
											<button class="dropdown-item" type="button">Purpose Challenge</button>
										</div>
									</div>
								</a>
								<a href="profile.php">
											<i class="fa fa-gear fa-2x " style="padding-right: 10px;"></i>
										</a>
								<a href="">
									<div class="dropdown">
										<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  													<p class="member-name">
  														Jehoshaphat I. abu
  													</p>
  												</button>
										<div class="dropdown-menu" id="notif-dropdown" aria-labelledby="dropdownMenu2">
											<button class="dropdown-item" type="button">Activity Logs</button>
											<button class="dropdown-item" type="button">Log Out</button>
										</div>
									</div>
								</a>
								<a href="#">
											<img style="border-radius: 15px;" src="http://via.placeholder.com/30" alt="">
										</a>
							</div>
						</div>
					</div>
				</div>


				<!-- php include command to get header and menu from file -->

				<div class="main-content">
					<div class="container">

						<!-- Picture Slider -->
						<h1 class="text-center" style="padding-bottom: 20px;">Welcome</h1>

						<!-- Picture Slider -->
						<div id="mighty-men" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#mighty-men" data-slide-to="0" class="active"></li>
								<li data-target="#mighty-men" data-slide-to="1"></li>
								<li data-target="#mighty-men" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="carousel-item active">
									<img class="d-block w-100" src="http://via.placeholder.com/500" alt="First slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="http://via.placeholder.com/500.jpg" alt="Second slide">
								</div>
								<div class="carousel-item">
									<img class="d-block w-100" src="http://via.placeholder.com/500" alt="Third slide">
								</div>
							</div>
							<a class="carousel-control-prev" href="#mighty-men" role="button" data-slide="prev">
    							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    							<span class="sr-only">Previous</span>
  							</a>
							<a class="carousel-control-next" href="#mighty-men" role="button" data-slide="next">
    							<span class="carousel-control-next-icon" aria-hidden="true"></span>
    							<span class="sr-only">Next</span>
							</a>
						</div>

						<!-- Welcome Message -->
						<p class="welcome-message">Growing up, we were told not to cry, because boys don't cry and men don't show weakness. As a result, we went through life in pain, hurt and in most cases damaged. We take these pains and hurts into marriages, fatherhood and the society begins to feel the negative impact of our existence…</p>

					</div>
				</div>
			</div>
		</div>


	</div>

</body>


<!-- BootStrap JQuery, Popper and JS -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>-->
<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>-->

<script src="/assets/jquery/jquery.min.js"></script>
<script src="/assets/popper/popper.min.js"></script>
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="/script/home-script.js"></script>

</html>
