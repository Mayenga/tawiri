<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TAWIRI - index</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Event and Conference Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Eventre HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="eventre" />
  
  <!-- PLUGINS CSS STYLE -->
  <!-- Bootstrap -->
  <link href="{{ url('plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ url('plugins/font-awsome/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Magnific Popup -->
  <link href="{{ url('plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
  <!-- Slick Carousel -->
  <link href="{{ url('plugins/slick/slick.css') }}" rel="stylesheet">
  <link href="{{ url('plugins/slick/slick-theme.css') }}" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

  <!-- FAVICON -->
  <link href="{{ url('images/favicon.png') }}" rel="shortcut icon">

</head>

<body class="body-wrapper">


<!--========================================
=            Navigation Section            =
=========================================-->
<nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
  <div class="container-fluid p-0">
    <!-- logo -->
    <a class="navbar-brand" href="{{ url('/') }}">
      <img src="{{ url('images/banner.jpg') }}" alt="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown active">
          <a class="nav-link" href="#hero" data-toggle="dropdown">Home
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#speaker">Speakers
            <span>/</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#schedule">Schedule<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sponsors">Sponsors<span>/</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Contact</a>
        </li>
      </ul>
      <a href="{{ url('/login') }}" class="ticket">
        <span>Log in</span>
      </a>
	  <a href="{{ url('/regform') }}" class="ticket">
        <span>Register</span>
      </a>
    </div>
  </div>
</nav>

<!--====  End of Navigation Section  ====-->


<!--============================
=            Banner            =
=============================-->

<section id="hero" class="banner bg-banner-one overlay">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- Content Block -->
				<div class="block">
					<!-- Coundown Timer -->
					<div class="timer"></div>
					<h1>TAWIRI</h1>
					<h2 style="font-size: 3.7rem;">14TH SCIENTIFIC CONFERENCE 2023</h2>
					<h6>MAIN THEME : "Human-Wildlife Coexistence for biodiversity conservation and socio-economic development".</h6>
					<h6>06 - 08 December 2023 Arusha</h6>
					<!-- Action Button -->
					<a href="{{ url('/regform') }}" class="btn btn-white-md">register now</a>
				</div>
			</div>
		</div>
	</div>
</section>
	
<!--====  End of Banner  ====-->

<!--===========================
=            About            =
============================-->

<section class="section about">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 align-self-center">
				<div class="image-block bg-about">
					<img class="img-fluid" src="{{ url('images/speakers/featured-speaker.jpg') }}" alt="">
				</div>
			</div>
			<div class="col-lg-8 col-md-6 align-self-center">
				<div class="content-block">
					<h2>About The <span class="alternate">Conference</span></h2>
					<div class="description-one">
						<p>
							Kindly be informed that this year, TANZANIA WILDLIFE RESEARCH INSTITUTE will be hosting the 14h Scientific Conference that will be held from the 6th to 8th December 2023 at International Conference Center (AICC), Arusha, Tanzania.
						</p>
					</div>
					<div class="description-two">
						<p>The conference aims to disseminate and share wildlife research findings and experiences with the Government, Wildlife Management Authorities, Conservation partners and the general public to help gain an understanding of the current conservation challenges facing our country and the world at large. </p>
					</div>
					<ul class="list-inline">
						<li class="list-inline-item">
							<a href="{{ url('/regform') }}" class="btn btn-main-md">Register</a>
						</li>
						<li class="list-inline-item">
							<a href="{{ url('/login') }}" class="btn btn-transparent-md">Log in</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of About  ====-->

<!--==============================
=            Speakers            =
===============================-->

<section id="speaker" class="section speakers bg-speaker overlay-lighter">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section Title -->
				<div class="section-title white">
					<h3>Who <span class="alternate">Speaking?</span></h3>
					<p>Kindly Meet our Speakers</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{ url('images/speakers/speaker.jpg') }}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 2 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{ url('images/speakers/speaker.jpg') }}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 3 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{ url('images/speakers/speaker.jpg') }}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 4 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{ url('images/speakers/speaker.jpg') }}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 5 -->
				<div class="speaker-item">
					<div class="image">
						<img src="{{ url('images/speakers/speaker.jpg') }}" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 1 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/speakers/speaker.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 7 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/speakers/speaker.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<!-- Speaker 8 -->
				<div class="speaker-item">
					<div class="image">
						<img src="images/speakers/speaker.jpg" alt="speaker" class="img-fluid">
						<div class="primary-overlay"></div>
						<div class="socials">
							<ul class="list-inline">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="content text-center">
						<h5><a href="#">To be confirmed</a></h5>
						<p>Occupation</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Speakers  ====-->

<!--==============================
=            Schedule            =
===============================-->

<section id="schedule" class="section schedule">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Event <span class="alternate">Schedule</span></h3>
					<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusm tempor incididunt ut labore</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="schedule-tab">
					<ul class="nav nav-pills text-center">
					  <li class="nav-item">
					    <a class="nav-link active" href="#nov20" data-toggle="pill">
					    	Day-01
					    	<span>06 December 2023</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov21" data-toggle="pill">
							Day-02
					    	<span>07 December 2023</span>
					    </a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" href="#nov22" data-toggle="pill">
							Day-03
					    	<span>08 December 2023</span>
					    </a>
					  </li>
					</ul>
				</div>
				<div class="schedule-contents bg-schedule">
					<div class="tab-content" id="pills-tabContent">
					  <div class="tab-pane fade show active schedule-item" id="nov20">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<!-- <div class="speaker">Speaker</div> -->
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov21">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<!-- <div class="speaker">Speaker</div> -->
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					  <div class="tab-pane fade schedule-item" id="nov22">
					  	<!-- Headings -->
					  	<ul class="m-0 p-0">
					  		<li class="headings">
					  			<div class="time">Time</div>
					  			<!-- <div class="speaker">Speaker</div> -->
					  			<div class="subject">Subject</div>
					  			<div class="venue">Venue</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
					  				<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">9.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-one.jpg" alt="speaker-thumb-one">
										<span class="name">Samanta Doe</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium A</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">10.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-two.jpg" alt="speaker-thumb-two">
										<span class="name">Zerad Pawel</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Principle of Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium B</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">12.00 AM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-three.jpg" alt="speaker-thumb-three">
										<span class="name">Henry Mong</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Wp Requirements</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium C</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">2.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-four.jpg" alt="speaker-thumb-four">
										<span class="name">Baily Leo</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Introduction to Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium D</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-five.jpg" alt="speaker-thumb-five">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  		<!-- Schedule Details -->
					  		<li class="schedule-details">
					  			<div class="block">
						  			<!-- time -->
							  		<div class="time">
							  			<i class="fa fa-clock-o"></i>
							  			<span class="time">3.00 PM</span>
							  		</div>
							  		<!-- Speaker -->
							  		<!-- <div class="speaker">
							  			<img src="images/speakers/speaker-thumb-six.jpg" alt="speaker-thumb-six">
										<span class="name">Lee Mun</span>
							  		</div> -->
							  		<!-- Subject -->
							  		<div class="subject">Useful tips for Wp</div>
							  		<!-- Venue -->
							  		<div class="venue">Auditorium E</div>
					  			</div>
					  		</li>
					  	</ul>
					  </div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</section>

<!--====  End of Schedule  ====-->

<!--==================================
=            Registration            =
===================================-->

<section class="registration">
	<div class="container-fuild p-0">
		<div class="row">
			<div class="col-lg-12 col-md-12 p-0">
				<div class="service-block bg-service overlay-primary text-center">
					<div class="row no-gutters">
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-microphone"></i>
								<h5>8 Speakers</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-flag"></i>
								<h5>500 + Seats</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-ticket"></i>
								<h5>300 tickets</h5>
							</div>
						</div>
						<div class="col-6">
							<!-- Service item -->
							<div class="service-item">
								<i class="fa fa-calendar"></i>
								<h5>3 days event</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Registration  ====-->

<!--===========================================
=            Call to Action Ticket            =
============================================-->

<section class="cta-ticket bg-ticket overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!-- Get ticket info -->
				<div class="content-block">
					<h2>Register <span class="alternate">Now!</span></h2>
					<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmtempor incidi</p> -->
					<a href="{{ url('/regform') }}" class="btn btn-main-md">Register</a>
				</div>
			</div>
		</div>
	</div>
	<div class="image-block"><img src="images/speakers/speaker-ticket.png" alt="" class="img-fluid"></div>
</section>

<!--====  End of Call to Action Ticket  ====-->

<!--==============================
=            Sponsors            =
===============================-->

<section id="sponsors" class="sponsors section bg-sponsors overlay-white">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h3>Our <span class="alternate">Sponsors</span></h3>
					<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor incididunt ut labore dolore</p> -->
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Platinum Sponsors</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/pt-spon-twoo.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/pt-spon-twoo.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/pt-spon-throee.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/pt-spon-fouro.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<!-- Title -->
				<div class="sponsor-title text-center">
					<h5>Gold Sponsors</h5>
				</div>
				<div class="block text-center">
					<!-- Sponsors image list -->
					<ul class="list-inline sponsors-list">
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/gl-spon-onoe.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/gl-spon-twoo.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
						<li class="list-inline-item">
							<div class="image-block text-center">
								<a href="#">
									<img src="images/sponsors/gl-spon-threoe.png" alt="sponsors-logo" class="img-fluid">
								</a>
							</div>
						</li>
					</ul>
				</div>
				<div class="sponsor-btn text-center">
					<a href="#" class="btn btn-main-md">Become a sponsor</a>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====  End of Sponsors  ====-->

<!--==============================================
=            Call to Action Subscribe            =
===============================================-->

<section class="cta-subscribe bg-subscribe overlay-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-6 mr-auto">
				<!-- Subscribe Content -->
				<div class="content">
					<h3>Subscribe to Our <span class="alternate">Newsletter And Updates</span></h3>
					<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusm tempor</p> -->
				</div>
			</div>
			<div class="col-md-6 ml-auto align-self-center">
				<!-- Subscription form -->
				<form action="#" class="row">
					<div class="col-lg-8 col-md-12">
						<input type="email" class="form-control main white mb-lg-0" placeholder="Email">
					</div>
					<div class="col-lg-4 col-md-12">
						<div class="subscribe-button">
							<button class="btn btn-main-md">Subscribe</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!--====  End of Call to Action Subscribe  ====-->


<!--================================
=            Google Map            =
=================================-->
<section class="map">
	<!-- Google Map -->
	<div id="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/icon/marker.png" data-marker-name="Eventre"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.926829104021!2d36.6938473147578!3d-3.368062997548293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371b7df95dda31%3A0xb837da9ea043e13d!2sArusha%20International%20Conference%20Centre!5e0!3m2!1sen!2suk!4v1677413863898!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
	<div class="address-block">
		<h4>Arusha International Conference Center</h4>
		<ul class="address-list p-0 m-0">
			<li><i class="fa fa-home"></i><span>JMJW+QCF, Afrika Mashariki Road, Arusha, Tanzania.</span></li>
			<li><i class="fa fa-phone"></i><span>255 2050 181</span></li>
		</ul>
		<a href="#" class="btn btn-white-md">Get Direction</a>
	</div>
</section>
<!--====  End of Google Map  ====-->

<!--============================
=            Footer            =
=============================-->

<footer id="footer" class="footer-main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <div class="footer-logo">
            <img src="images/banner.jpg" alt="logo" class="img-fluid">
          </div>
          <ul class="social-links-footer list-inline">
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-rss"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://themefisher.com/"><i class="fa fa-vimeo"></i></a>
            </li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</footer>
<!-- Subfooter -->
<footer class="subfooter">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="copyright-text">
          <p><a href="index.html">TAWIRI</a> &copy; 2023</p>
        </div>
      </div>
      <div class="col-md-6">
        <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
      </div>
    </div>
  </div>
</footer>


  <!-- JAVASCRIPTS -->
  <!-- jQuey -->
  <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ url('plugins/bootstrap/bootstrap.min.js') }}"></script>
  <!-- Shuffle -->
  <script src="{{ url('plugins/shuffle/shuffle.min.js') }}"></script>
  <!-- Magnific Popup -->
  <script src="{{ url('plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
  <!-- Slick Carousel -->
  <script src="{{ url('plugins/slick/slick.min.js') }}"></script>
  <!-- SyoTimer -->
  <script src="{{ url('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
  <!-- Google Mapl -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
  <script src="{{ url('plugins/google-map/gmap.js') }}"></script>
  <!-- Custom Script -->
  <script src="{{ url('js/script.js') }}"></script>
</body>

</html>



