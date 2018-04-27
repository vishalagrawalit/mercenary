<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Mercernary Motorsports</title>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Lovely-pets Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->

	<!--css for drop down menu on the user name and login-->
	<link href="css/namedropdown.css" rel="stylesheet">
	<!--css for drop down menu on the user name and login-->
	
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<!--//stylesheets-->
	<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' />
	<!-- For-gallery-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //pop-ups-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">

	<script src="https://use.fontawesome.com/1bbee19eb8.js"></script>

</head>

<body>
	<div class="header-outs">
		<div class="header-w3layouts">
			<!-- Navigation -->

			<div class="header-bar">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
						<h1>MM</h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#services" class="scroll">Project</a></li>
								<li><a href="#gallery" class="scroll">Gallery</a></li>
								<li><a href="#price" class="scroll">Plegde</a></li>
								<li><a href="#testimonials" class="scroll">Clients</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
								<?php  
									session_start();
									if(isset($_SESSION['fullname']))
									{ ?>
										
										<li> <a href="index.php"> <div class="dropdown"> <?php echo($_SESSION['fullname']);?>
									
												<div class="dropdown-content">
    												<a href="#">My Profile</a>
   	 												<a href="logout.php">Log Out</a>
  												</div>
										</div>
									
									</a> </li>
										<?php
									}
									else
									{	?>
											<li><a href="login/login.php">login/signup</a></li>	
										<?php
									}
								?>
							</ul>
						</nav>
					</div>
				</nav>
			</div>

			<div class="clearfix"> </div>

		</div>
	</div>
	<!-- //modal -->
	<!--About-->
	<div class="about" id="about">
		<div class="container">
			<div class="about-top-grids">
				<div class="col-md-7 about-top-grid">
					<h2>Who are we? </h2>
					<div class="about-para">
						<p>The Mercenary Motorsports is a team of 25 mechanical engineering students from Bundelkhand Institute of Engineering &amp; Technology, Jhansi who are passionate about automobiles. <br/> We design, analyse and manufacture Go-Karts to compete in domestic events and show off our engineering skills.
The team is equally divided into various departments such as Design &amp; Analysis, Vehicle Dynamics, Engine &amp; Transmission, Manufacturing, Sponsorship and Marketing.
</p>
					</div>
					<br/>
					<h2>How we do? </h2>
					<div class="about-para">
						<p>The whole process starts with CAD model of our vehicle followed by analysis, simulations and consultations. After virtual design is approved, the workshop became our home and sleepless nights became our life to convert our design into reality.<br/>
Once the vehicle comes alive, we rigorously test the vehicle for more than 200 kilometres to eliminate all sorts of design and manufacturing errors.</p>
					</div>
				</div>
				<div class="col-md-5 pope banner-agileits-btm" id="video">
					<div class="button">

						<a href="#small-dialog1" class="play-icon popup-with-zoom-anim"><span class="fa fa-play-circle" aria-hidden="true"></span></a>
					</div>
					<div id="small-dialog1" class="mfp-hide w3ls_small_dialog wthree_pop">
						<div class="agileits_modal_body">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/2Bxwgk7alKE?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//About-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title clr">About the Project</h3>
			<div class="about-para">
				<p style="color: white">Team Mercenary Motorsports from BIET JHANSI is designing and building a formula style race car to compete in domestic and international events organized by Society of Automotive Engineers (SAE).<br/>
				SAE Supra is India’s biggest engineering showdown in which student design and fabricate the open wheel Formula Type customized vehicle and compete with other teams in each and every aspect right from the static part to the dynamic. More than 150 teams show their metal at the competition.</p>
			</div>
		</div>
	</div>
	<!--//services-->
	<div class="portfolio" id="gallery">

		<h3 class="title">Our Gallery</h3>

		<div class="sap_tabs">
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>All</span></li>
					<li class="resp-tab-item"><span>Achievements</span></li>
					<li class="resp-tab-item"><span>Why Crowdfunding?</span></li>
					<li class="resp-tab-item"><span>How we do?</span></li>
				</ul>
				<div class="clearfix"> </div>
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g1.jpg' data-big-src='images/g1.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g2.jpg' data-big-src='images/g2.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g10.jpg' data-big-src='images/g10.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g4.jpg' data-big-src='images/g4.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6  portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g5.jpg' data-big-src='images/g5.jpg' class="img-responsive" alt=" " />
							</div>
						</div>

						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g8.jpg' data-big-src='images/g8.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g11.jpg' data-big-src='images/g11.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<h4>Our Achievements`</h4>
						<div class="list-price">
							<ul>
								<li>Starting out as an underdog in 2016, we fabricated our first vehicle named “Protoko 1.0” and raced it at “Ultimate Karting Championship”, Bhopal. We bagged “The Best Design Award” and 12,000 cash prize but could not find a place on podium. </li>
								<li>But to quench our thirst we analysed our shortcomings and made our vehicle faster, lighter as well as more reliable and upgraded it to “Protoko 2.0”. This time we competed in India’s biggest karting Festival “Indian Kart Racing” organised by ISIE, India held at India’s only F-1 circuit “Buddha International Circuit”, Greater Noida in Jan 2018. Our Go-kart completely dominated the event winning two dynamics awards and All India 2nd rank with 55,000 cash prize in total.</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g1.jpg' data-big-src='images/g1.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g10.jpg' data-big-src='images/g10.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g8.jpg' data-big-src='images/g8.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g11.jpg' data-big-src='images/g11.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g5.jpg' data-big-src='images/g5.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
							</div>
						</div>

						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab-1 resp-tab-content">
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g2.jpg' data-big-src='images/g2.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g6.jpg' data-big-src='images/g6.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g4.jpg' data-big-src='images/g4.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 portfolio-grids">
							<div class="gallery-grid">
								<img src='images/g7.jpg' data-big-src='images/g7.jpg' class="img-responsive" alt=" " />
								<p style='opacity:0;display:none'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							</div>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //portfolio -->
	<!--price table-->
	<div class="price-table" id="price">
		<div class="container">
			<h3 class="title clr ">Pledge-Table</h3>

			<div class="agileits-banner-grids text-center">

				<div class="col-md-4  col-sm-4  col-xs-4 clr1 agileits-banner-grid">

					<h4>Well Wisher</h4>
					<div class="table_cost">
						<span class="cost clr-price"> Rs. 100-499</span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>Thank you for your contribution to our success!!!</strong></li>
							<li><strong>You will receive a “Digital Thanking Note” from The Mercenary Motorsports.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php"> Contribute </a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4  clr2 agileits-banner-grid">

					<h4>Morale Booster</h4>
					<div class="table_cost">
						<span class="cost"> Rs. 500-999 </span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>All “Well Wisher” rewards.</strong></li>
							<li><strong>We will give you a shoutout on our “Social Media Page” for your contribution.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php">Contribute</a>
				</div>
				<div class=" col-md-4 col-sm-4 col-xs-4 clr3 agileits-banner-grid">

					<h4>Backer</h4>
					<div class="table_cost">
						<span class="cost clr-price "> Rs. 5000-9999</span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>All “Backer” rewards.</strong></li>
							<li><strong>Feel Like you are part of the team. You can visit our Garage and hangout with the team.</strong></li>
							<li><strong>We’ll put your name/ your company name on our SUPRA vehicle.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php">Contribute</a>
				</div>
				<div class="clearfix"></div>

			</div>
			<br/>

			<div class="agileits-banner-grids text-center">

				<div class="col-md-4  col-sm-4  col-xs-4 clr2 agileits-banner-grid">

					<h4>Friend</h4>
					<div class="table_cost">
						<span class="cost"> Rs. 10000-19999</span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>All “Part of Team” rewards.</strong></li>
							<li><strong>You will receive a team group photo signed by the whole team.</strong></li>
							<li><strong>Will send you official team t-shirt to always remind you of our love.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php">Contribute</a>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4  clr1 agileits-banner-grid">

					<h4>Family</h4>
					<div class="table_cost">
						<span class="cost clr-price"> Rs. 20000-29999 </span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>All “Friend” rewards.</strong></li>
							<li><strong>We’ll put your name on our team t-shirts.</strong></li>
							<li><strong>We’ll acknowledge your name as “our sponsors” in our next “Production Video”.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php">Contribute</a>
				</div>
				<div class=" col-md-4 col-sm-4 col-xs-4 clr2 agileits-banner-grid">

					<h4>Angel</h4>
					<div class="table_cost">
						<span class="cost"> Rs. 30000+ </span>
					</div>
					<div class="list-price">
						<ul>
							<li><strong>All “Family” rewards.</strong></li>
							<li><strong>You will get a 1/10th size Model of our vehicle.</strong></li>
							<li><strong>We’ll invite you as chief guest to our vehicle launch event.</strong></li>
						</ul>
					</div>
					<a class="w3_play_icon1" href="payment/index.php">Contribute</a>
				</div>
				<div class="clearfix"></div>

			</div>

		</div>
	</div>
	<!--//price table-->
	<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">

			<h3 class="title">The Team</h3>

			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/t1.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/t2.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/t3.jpg" alt="">
					<li data-target="#quote-carousel" data-slide-to="3"><img class="img-responsive" src="images/t4.jpg" alt="">
					<li data-target="#quote-carousel" data-slide-to="4"><img class="img-responsive" src="images/t5.jpg" alt="">
					<li data-target="#quote-carousel" data-slide-to="5"><img class="img-responsive" src="images/t6.jpg" alt="">
					<li data-target="#quote-carousel" data-slide-to="6"><img class="img-responsive" src="images/t7.jpg" alt="">
					</li>
				</ol>

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner text-center">

					<!-- Quote 1 -->
					<div class="item active">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Team Captain</p>
									<h5>--Suryansh Garg</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 2 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>Design Head </p>
									<h5>--Alok Kumar Maurya</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 3 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Computational Fluid Dynamics (CFD) Head</p>
									<h5>--Suraj Kesri</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 4 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Finite Element Analysis (FEA) Head &amp; Driver</p>
									<h5>--Umesh Singh</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 5 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Sponorship Team Head</p>
									<h5>--Brijesh Yadav</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 6 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Media Head</p>
									<h5>--Nitish Singh</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 7 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Manufacturing Head</p>
									<h5>--Palak Kumar Pandey</h5>
									<br/>
									<a href="#" target="_blank"
                               class="btn btn-primary btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</div>
							</div>
						</blockquote>
					</div>
					
				</div>

				<!-- Carousel Buttons Next/Prev
					<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><span class="fa fa-chevron-left"></span></a>
					<a data-slide="next" href="#quote-carousel" class="right carousel-control"><span class="fa fa-chevron-right"></span></a> -->
			</div>
		</div>
	</div>
	<!-- testimonials -->

	<!--contact-->
	<div class="contact" id="contact">
		<div class="container">
			<h3 class="title clr">Contact Us</h3>
			<div class=" col-md-8 col-sm-8 col-xs-7 contact-map">
				<div class="map-grid">
					<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=bundelkhand &t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
				</div>
			</div>

			<div class=" col-md-4 col-sm-4 col-xs-5 contact-icons">
				<div class="footer_grid_left">
					<h5>Address</h5>
					<p>Mercernary Motorsports<span> BIET-Jhansi,284128,
					India</span></p>
				</div>
				<div class="footer_grid_left">
					<h5> Contact Us</h5>
					<p>+91 7579037967<span>+91 7906859489</span></p>
				</div>
				<div class="footer_grid_left">
					<h5>Email Us</h5>
					<p><a href="mailto:motorsportsmercenary@gmail.com">motorsportsmercenary@gmail.com</a></p>
				</div>
				<div class="footer_grid_left">
					<h5>Social Media</h5>
					<a href="#" target="_blank"
                               class="btn btn-lg" role="button"><i class="fa fa-facebook" aria-hidden="true"></i></a>				
                </div>			
			</div>
			<div class="clearfix"> </div>

			<div class="contact-us">
				<form action="contact-main.php" method="post">
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="text" name="first-name" placeholder="Name" required="">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="text" name="last-name" placeholder="Last Name" required="">
					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">
						<input type="email" name="email" placeholder="Email" required="">

					</div>

					<div class="col-md-6 col-sm-6 col-xs-6 styled-input">

						<input type="text" name="phone" placeholder="phone" required="">

					</div>
					<div class="clearfix"> </div>
					<div class="styled-input">

						<textarea name="message" placeholder="Message" required=""></textarea>
					</div>
					<div>
						<div class="click">
							<input type="submit" value="SEND">
						</div>
					</div>
				</form>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
	<footer>
		<p>&copy; 2018 Mercernary Motorsports. All Rights Reserved | Designed by <a href="http://rcubedclub.herokuapp.com/" target="_blank"> RCubed </a></p>
	</footer>

	<!--js working-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->

	<script src="js/responsiveslides.min.js"></script>

	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 900,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--// banner-->
	<!--pop-up-box video-->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //pop-up-box video -->

	<!-- script for portfolio -->
	<script type='text/javascript' src='js/jquery.easy-gallery.js'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //script for portfolio -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- for-bottom-to-top smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //for-bottom-to-top smooth scrolling -->


</body>

</html>
