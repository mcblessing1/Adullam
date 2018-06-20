<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Cave Adullam | Resource Bank</title>

	<!-- BootStrap 4.1.1 -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

	<!-- Bootstrap 4.1.1 CSS from CDN -->
	<!--	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">-->

	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/font-awesome.min.css">

	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>

	<!-- DatePickerCss -->
	<!--	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">-->

	<!-- My Stylesheet -->
	<link rel="stylesheet" href="css/home-style.css">
	<link rel="stylesheet" href="css/groups-style.css">

</head>


<body>
	<!-- Main Content -->

	<!-- php include command to get header and menu from file -->
	<?php 
		include 'header+nav.php'; 
	?>
	<!-- php include command to get header and menu from file -->


	<!-- Google Calendar Embed, this makes adding events from admin account pretty easy, will be done right from adullam's gmail account on Google Calendar. -->

	<div>

		<!-- Nav pills -->
		<ul class="nav nav-pills nav-pills-ul" role="tablist">
			<li class="nav-item">
				<a class="nav-link nav-pills-ul-a active" data-toggle="pill" href="#audio">Audio</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-pills-ul-a" data-toggle="pill" href="#images">Images</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-pills-ul-a" data-toggle="pill" href="#videos">Videos</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-pills-ul-a" data-toggle="pill" href="#books">Books</a>
			</li>
			<li class="nav-item">
				<a class="nav-link nav-pills-ul-a" data-toggle="pill" href="#others">Others</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">

			<!-- Audio -->
			<div id="audio" class="container tab-pane active">

				<br>

				<h1 style="color: white;">Audio Files</h1>

				<!-- Toggles for display type -->
				<div class="row">
					<div class="col">
						<i class="fa fa-th fa-2x" style="margin-right: 10px; color: #bfbdbd;"></i>
						<i class="fa fa-bars fa-2x" style="margin-bottom: 20px; color: #bfbdbd;"></i>
					</div>
				</div>

				<!-- Audio -->
				<div class="row" style="margin-bottom: 5px;">

					<div class="col-md" style="margin-bottom: 20px;">
						<div class="about-img">
							<img src="assets/images/Logo-Full-Colour.png" alt="">
						</div>
						<div class="group-name text-center">
							<h3>Audio Title
								<a href="#">
									<i class="fa fa-cloud-download"></i>
								</a>
							</h3>
							<h3>Speaker</h3>
						</div>
					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<div class="about-img">
							<img src="assets/images/Logo-Full-Colour.png" alt="">
						</div>
						<div class="group-name text-center">
							<h3>Audio Title
								<a href="#">
									<i class="fa fa-cloud-download"></i>
								</a>
							</h3>
							<h3>Speaker</h3>
						</div>
					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<div class="about-img">
							<img src="assets/images/Logo-Full-Colour.png" alt="">
						</div>
						<div class="group-name text-center">
							<h3>Audio Title
								<a href="#">
									<i class="fa fa-cloud-download"></i>
								</a>
							</h3>
							<h3>Speaker</h3>
						</div>
					</div>

				</div>
			</div>

			<!-- Images -->
			<div id="images" class="container tab-pane fade">

				<br>

				<h1 style="color: white;">Image Gallery</h1>

				<!-- Toggles for display type -->
				<div class="row">
					<div class="col">
						<i class="fa fa-th fa-2x" style="margin-right: 10px; color: #bfbdbd;"></i>
						<i class="fa fa-bars fa-2x" style="margin-bottom: 20px; color: #bfbdbd;"></i>
					</div>
				</div>

				<!-- Images -->
				<div class="row" style="margin-bottom: 5px;">

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal10">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Image Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal10">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Image Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal11">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Image Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal11">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Image Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal12">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Image Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal12">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Image Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
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

			<!-- Videos -->
			<div id="videos" class="container tab-pane fade">

				<br>

				<h1 style="color: white;">Video Gallery</h1>

				<!-- Toggles for display type -->
				<div class="row">
					<div class="col">
						<i class="fa fa-th fa-2x" style="margin-right: 10px; color: #bfbdbd;"></i>
						<i class="fa fa-bars fa-2x" style="margin-bottom: 20px; color: #bfbdbd;"></i>
					</div>
				</div>

				<!-- Videos -->
				<div class="row" style="margin-bottom: 5px;">

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal13">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Video Title</h3>
							</div>
						</a>

						<!-- Image as Modal toggler -->
						<div class="modal" id="myModal13">
						
							<div class="modal-dialog">
							
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Video Title</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
										
									<!-- Modal body -->
									<div class="modal-body">
										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<iframe width="100%" height="100%" style=" border: grey 1px solid" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
								
							</div>
							
						</div>

					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal14">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Video Title</h3>
							</div>
						</a>

						<!-- Image as Modal toggler -->
						<div class="modal" id="myModal14">

							<div class="modal-dialog">

								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Video Title</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<iframe width="100%" height="100%" style=" border: grey 1px solid" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>

						</div>

					</div>
			
					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal15">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Video Title</h3>
							</div>
						</a>

						<!-- Image as Modal toggler -->
						<div class="modal" id="myModal15">

							<div class="modal-dialog">

								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Video Title</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<iframe width="100%" height="100%" style=" border: grey 1px solid" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
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

			<!-- Books -->
			<div id="books" class="container tab-pane fade">

				<br>

				<h1 style="color: white;">Book Shelf</h1>

				<!-- Toggles for display type -->
				<div class="row">
					<div class="col">
						<i class="fa fa-th fa-2x" style="margin-right: 10px; color: #bfbdbd;"></i>
						<i class="fa fa-bars fa-2x" style="margin-bottom: 20px; color: #bfbdbd;"></i>
					</div>
				</div>

				<!-- Books -->
				<div class="row" style="margin-bottom: 5px;">

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal16">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Book Title
									<a href="#">
										<i class="fa fa-cloud-download"></i>
									</a>
								</h3>
								<h3>Author</h3>
							</div>
						</a>

						<div class="modal" id="myModal16">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Book Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<!-- Book Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Book Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					
					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal17">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Book Title
									<a href="#">
										<i class="fa fa-cloud-download"></i>
									</a>
								</h3>
								<h3>Author</h3>
							</div>
						</a>

						<div class="modal" id="myModal17">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Book Title</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<!-- Book Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Book Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>
					
					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal18">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Book Title
									<a href="#">
										<i class="fa fa-cloud-download"></i>
									</a>
								</h3>
								<h3>Author</h3>
							</div>
						</a>

						<div class="modal" id="myModal18">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Book Title</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="">
														<!-- Book Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Book Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
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

			<!-- Others -->
			<div id="others" class="container tab-pane fade">

				<br>

				<h1 style="color: white;">Other Resources</h1>

				<!-- Toggles for display type -->
				<div class="row">
					<div class="col">
						<i class="fa fa-th fa-2x" style="margin-right: 10px; color: #bfbdbd;"></i>
						<i class="fa fa-bars fa-2x" style="margin-bottom: 20px; color: #bfbdbd;"></i>
					</div>
				</div>

				<!-- Other -->
				<div class="row" style="margin-bottom: 5px;">

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal19">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal19">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal20">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal20">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>

					</div>

					<div class="col-md" style="margin-bottom: 20px;">
						<!-- Image as Modal toggler -->
						<a href="#" data-toggle="modal" data-target="#myModal21">
							<div class="about-img">
								<img src="assets/images/Logo-Full-Colour.png" alt="">
							</div>
							<div class="group-name text-center">
								<h3>Name</h3>
							</div>
						</a>

						<div class="modal" id="myModal21">
							<div class="modal-dialog">
								<div class="modal-content" style="background-color: #582828">

									<!-- Modal Header -->
									<div class="modal-header">
										<h3>Name</h3>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">

										<div class="row">
											<div class="col-md">
												<div class="thumbnail">
													<a href="/assets/images/index-background.jpg" target="_blank">
														<!-- Images -->
														<img width="100%" src="assets/images/index-background.jpg" alt="">

														<!-- Image Comment or Details -->
														<div class="caption">
															Donec vel dui eget enim dictum volutpat a et odio.
														</div>
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

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>-->

<script src="/script/home-script.js"></script>



</html>
