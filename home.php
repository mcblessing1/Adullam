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

		<?php 
			include 'header+nav.php'; 
		?>
	
	<!-- php include command to get header and menu from file -->

	<div class="main-content">
		<div class="container">

			<!-- Welcome Message -->
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
