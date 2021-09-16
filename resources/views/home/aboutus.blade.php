<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>About Us - SickleLife</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('template/assets/images/favicon.ico') }}" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-114x114-precomposed.png') }}">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-72x72-precomposed.html') }}">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-57x57-precomposed.png') }}">	
	
	<!-- Library - Google Font Familys -->
	<link href="https://fonts.googleapis.com/css8896.css?family=Hind:300,400,500,600,700%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<!-- Library -->
    <link href="{{ asset('template/assets/css/lib.css') }}" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" href="{{ asset('template/assets/css/rtl.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/style.css') }}">

	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
	
</head>

<body data-offset="200" data-spy="scroll" data-target=".ownavigation">
	<!-- Loader -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="line-scale"><div></div><div></div><div></div><div></div><div></div></div>
		</div>
	</div><!-- Loader /- -->
		
	@include('layouts.subs.header')
	
	<div class="main-container">
	
		<main class="site-main">
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->	
				<div class="container">
					<!-- Row -->
					<div class="row">
						<!-- Content Area -->
						<div class="col-lg-8 col-md-6 content-area">
							<!-- Aboute Block -->	
							<div class="aboute-block">
								<img src="{{ asset('template/assets/images/team.jpg') }}" alt="abouteme"/>
								<div class="block-title">
									<h3>Who we are</h3>
								</div>
								<p>Sickle Life is a Sickle Cell Disease advocacy group founded in 2013 by Dr. Sefakor Enam Bankas to champion the cause of persons living with sickle cell disease in Ghana through education and awareness creation about the condition.</p>
								<p>Initial advocacy was through content generated and shared via a blog, www.sicklelife.wordpress.com. The objective of which was to expose readers to the reality of living with sickle cell disease in a credible and relatable manner through the experience of patient and doctor and empower them to make informed choices regarding sickle cell disease based on the knowledge acquired.</p>
								<p>Sickle Life was registered as a Non-profit Organization in 2016 and has grown over the period to include several volunteers and writers, multiple social media accounts, participation in several sickle cell advocacy activities and a website, to consolidate all programs and activities.</p>
								<div class="block-title">
									<h3>Our Mission</h3>
								</div>
								<p>Our mission is to </p>
								<p>Provide education and information about Sickle Cell Disease to the public to empower them to make informed decisions regarding the condition.</p>
								<p>Ensure good health and wellbeing of persons living with Sickle Cell Disease, their family and caregivers.</p>
								<p>Be the foremost Sickle Cell Disease advocacy organisation in Ghana.</p>
								<div class="block-title">
									<h3>Our Vision</h3>
								</div>
								<p>Our vision is </p>
								<p>We envisage, through our activities, a time when sickle cell disease will be a topic of daily discussion and not an illness relegated to the background and for whom no one advocates but its own patients and their families. We will do this by</p>
								<p>Providing timely, relatable and reliable information about Sickle Cell Disease to the public through conferences, research, publications, articles, media and social media engagement.</p>
								<p>Encouraging good health seeking behaviour of persons living with Sickle Cell Disease, their family and caregivers through education, mentorship and capacity building projects of the Sickle Life Support Group.</p>
								<p>Establishing Sickle Life centres in all Regions in Ghana to provide social support to persons living with Sickle Cell Disease and coordinate the activities of the organisation in Ghana as well as to partner African and Global Sickle Cell NGOs for global advocacy.</p>
								<div class="block-title">
									<h3>Our Mantra</h3>
								</div>

								<h3>“Live each day to the fullest. Make it count.”<span>SickleLife</span></h3>
								<p>This is in recognition of the many struggles persons living with sickle cell disease undergo daily. It is a clarion call through our posts to our readers to make the best of their situation, despite the odds and enjoy each moment for its inherent beauty. It also encourages us to seek knowledge about sickle cell disease daily, as if each were our last.</p>			
								<div class="block-title">
									<h3>Our Logo</h3>
								</div>
								<p>The red stethoscope curved into an awareness ribbon is in recognition of the importance of awareness creation in sickle cell disease.</p>
								<p>As medical doctors, stethoscopes are a basic part of our work. We use them daily to save lives. It is our hope that you will be encouraged to find the burgundy ribbon of sickle cell awareness in every part of your life and use it daily to save lives too.</p>
								<p>Sickle cell awareness is not for a specific day or month, it is a way of life.</p>
								<p>Whoever you are, pick up your burgundy ribbon and educate someone about sickle cell disease. Today.</p>
								<p>WE ARE SICKLE LIFE.</p>
								<p>WE ARE SICKLE CELL AWARENESS.</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
								</ul>
							</div><!-- Aboute Block /- -->
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						@include("layouts.subs.right-widget")
					</div><!-- Row / -->
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
		</main>

		
	</div>
	
	<!-- Footer Main -->
	<footer class="container-fluid no-left-padding no-right-padding footer-main">
        @include('layouts.subs.social_media_row')
		@include('layouts.subs.footer')
	</footer><!-- Footer Main /- -->
	
	<!-- JQuery v1.12.4 -->
	<script src="{{ asset('template/assets/js/jquery-1.12.4.min.js') }}"></script>

	<!-- Library - Js -->
	<script src="{{ asset('template/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('template/assets/js/lib.js') }}"></script>
	
	<!-- REVOLUTION JS FILES -->
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('template/assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>
	
	<script type="text/javascript" src="{{ asset('template/assets/slick/slick.min.js') }}"></script>
	<!-- Library - Google Map API -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDW40y4kdsjsz714OVTvrw7woVCpD8EbLE"></script>
	
	<!-- Library - Theme JS -->
	<script src="{{ asset('template/assets/js/functions.js') }}"></script>
	
</body>
</html>