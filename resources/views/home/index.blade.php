<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Home - SickleLife</title>

	<!-- Standard Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('template/assets/images/favicon.ico') }}" />
	
	<!-- For iPhone 4 Retina display: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-114x114-precomposed.png') }}">
	
	<!-- For iPad: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-72x72-precomposed.html') }}">
	
	<!-- For iPhone: -->
	<link rel="apple-touch-icon-precomposed" href="{{ asset('template/assets/images/apple-touch-icon-57x57-precomposed.png') }}">	
	
	<!-- Library - Google Font Familys -->
	<link href="../../../../fonts.googleapis.com/css8896.css?family=Hind:300,400,500,600,700%7cMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/revolution/css/settings.css') }}">

	<!-- Library -->
    <link href="{{ asset('template/assets/css/lib.css') }}" rel="stylesheet">
	
	<!-- Custom - Common CSS -->
	<link rel="stylesheet" href="{{ asset('template/assets/css/rtl.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/style.css') }}">

	<style>
		.regular-b {
			font-size: 22px;
			margin-top: 24px;
		}

		.dramatic-bg {
			position: relative; 
			/* height: 100vh; */
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.dramatic-bg::before {
			content: "";
			opacity: 0.4; 
			padding-bottom:40px; 
			background-image: url({{ asset('template/assets/images/blue-sky.jpg') }}); 
			background-attachment: fixed;
			background-size: cover;
			position: absolute;
			top: 0px;
			right: 0px;
			bottom: 0px;
			left: 0px;
		}
	</style>

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

	@include("layouts.subs.header")

	<div class="main-container">
	
		<main class="site-main">

			<!-- Slider Section -->
			<div class="container-fluid no-left-padding no-right-padding slider-section">
				<div id="mm-slider-1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="mm-slider-1" data-source="gallery">
					<!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
					<div id="mm-slider-1" class="rev_slider fullwidthabanner" data-version="5.4.1">
						<ul>	
							<!-- SLIDE  -->
							<li data-index="rs-26" data-transition="random-static,random-premium,random,boxslide,slotslide-horizontal,slotslide-vertical,boxfade,slotfade-horizontal,slotfade-vertical" data-slotamount="default,default,default,default,default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default,default,default,default,default,default,default" data-easeout="default,default,default,default,default,default,default,default,default,default" data-masterspeed="default,default,default,default,default,default,default,default,default,default"  data-rotate="0,0,0,0,0,0,0,0,0,0"  data-saveperformance="off"  class="slide-overlay" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="{{ asset('template/assets/images/medical-services.jpg') }}"  alt="" title="slide-1"  width="1920" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 1 -->
								<a class="slidecnt1 tp-caption tp-layer-selectable tp-resizeme category-link" href="#" target="_self" rel="nofollow"			 id="slide-26-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-56','-70','-70','-57']" 
								data-fontsize="['14','14','18','18']"
									data-height="none"
									data-whitespace="nowrap"					 
									data-type="text" 
									data-actions=''
									data-responsive_offset="on"
									data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);br:0px 0px 0px 0px;"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]">Sickle Cell Screening </a>

								<!-- LAYER NR. 2 -->
								<a class="slidecnt2 tp-caption tp-layer-selectable tp-resizeme post-title" href="#" target="_self" rel="nofollow" id="slide-26-layer-2" 
									data-x="['center','center','center','center']" data-hoffset="['0','-1','-1','-1']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['6','-5','-5','-5']" 
									data-fontsize="['40','30','30','23']"
									data-lineheight="['40','40','40','30']"
									data-width="['601','601','601','435']"
									data-height="['81','81','81','none']"
									data-whitespace="normal"
						 			data-type="text" 
									data-actions=''
									data-responsive_offset="on" 
									data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]">Screening to identify people with the condition saves lives.</a>

								<!-- LAYER NR. 3 -->
								<a class="slidecnt3 tp-caption rev-btn tp-layer-selectable" href="{{ route('events') }}" target="_self" rel="nofollow" id="slide-26-layer-3" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['80','73','73','59']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"						 
									data-type="button" 
									data-actions=''
									data-responsive_offset="on" 
									data-responsive="off"
									data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(21,21,21);bg:rgba(255,255,255,1);"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[2,2,2,2]"
									data-paddingright="[20,20,20,20]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[20,20,20,20]">READ MORE </a>
							</li>
							<!-- SLIDE  -->
							<li data-index="rs-28" data-transition="random-static,random-premium,random,boxslide,slotslide-horizontal,slotslide-vertical,boxfade,slotfade-horizontal,slotfade-vertical" data-slotamount="default,default,default,default,default,default,default,default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"  data-randomtransition="on" data-easein="default,default,default,default,default,default,default,default,default,default" data-easeout="default,default,default,default,default,default,default,default,default,default" data-masterspeed="default,default,default,default,default,default,default,default,default,default"  data-rotate="0,0,0,0,0,0,0,0,0,0"  data-saveperformance="off"  class="slide-overlay" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
								<!-- MAIN IMAGE -->
								<img src="{{ asset('template/assets/images/team.jpg') }}"  alt="" title="slide-1"  width="1920" height="600" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
								<!-- LAYERS -->

								<!-- LAYER NR. 4 -->
								<a class="slidecnt1 tp-caption tp-layer-selectable tp-resizeme category-link" href="#" target="_self" rel="nofollow" id="slide-28-layer-1" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['-56','-70','-70','-57']" 
									data-fontsize="['14','14','18','18']"
									data-height="none"
									data-whitespace="nowrap"						 
									data-type="text" 
									data-actions=''
									data-responsive_offset="on" 
									data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);br:0px 0px 0px 0px;"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]">Team  Work</a>

								<!-- LAYER NR. 5 -->
								<a class="slidecnt2 tp-caption tp-layer-selectable tp-resizeme post-title" href="#" target="_self" rel="nofollow" id="slide-28-layer-2" 
									data-x="['center','center','center','center']" data-hoffset="['0','-1','-1','-1']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['6','-5','-5','-5']" 
									data-fontsize="['40','30','30','23']"
									data-lineheight="['40','40','40','30']"
									data-width="['601','601','601','435']"
									data-height="['81','81','81','none']"
									data-whitespace="normal"						 
									data-type="text" 
									data-actions=''
									data-responsive_offset="on" 
									data-frames='[{"delay":0,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
									data-textAlign="['center','center','center','center']"
									data-paddingtop="[0,0,0,0]"
									data-paddingright="[0,0,0,0]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[0,0,0,0]">A team of volunteers with a common goal...</a>

								<!-- LAYER NR. 6 -->
								<a class="slidecnt3 tp-caption rev-btn tp-layer-selectable" href="{{ route('events') }}" target="_self" rel="nofollow" id="slide-28-layer-3" 
									data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
									data-y="['middle','middle','middle','middle']" data-voffset="['80','73','73','59']" 
									data-width="none"
									data-height="none"
									data-whitespace="nowrap"						 
									data-type="button" 
									data-actions=''
									data-responsive_offset="on" 
									data-responsive="off"
									data-frames='[{"delay":0,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(21,21,21);bg:rgba(255,255,255,1);"}]'
									data-textAlign="['inherit','inherit','inherit','inherit']"
									data-paddingtop="[2,2,2,2]"
									data-paddingright="[20,20,20,20]"
									data-paddingbottom="[0,0,0,0]"
									data-paddingleft="[20,20,20,20]">READ MORE </a>
							</li>
						</ul>
						<div class="tp-bannertimer tp-bottom"></div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div><!-- Slider Section /- -->
			
			<!-- Trending Section -->
			<div class="container-fluid no-left-padding no-right-padding trending-section">
				<!-- Container -->
				<div class="container">
					<!-- Section Header -->
					<div class="section-header">
						<h3>What We Do</h3>
					</div><!-- Section Header /- -->
					<div class="trending-carousel">
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="{{ asset('template/assets/images/education.jpg') }}" alt="Education" /></a></div>
							<div class="entry-content">
								<div class="entry-header">
									<span><a href="#">Educate the public</a></span>
									<h3 class="entry-title"><a href="#">We inform the  public about Sickle 
                                        Cell Disease for informed decisions regarding the condition.</a></h3>
								</div>
							</div>
						</div>
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="{{ asset('template/assets/images/checkup.jpg') }}" alt="Trending" /></a></div>
							<div class="entry-content">
								<div class="entry-header">
									<span><a href="#">Outreach for the needy</a></span>
									<h3 class="entry-title"><a href="#">We ensure good health and wellbeing of persons living with Sickle Cell Disease, 
                                        their family and caregivers.</a></h3>
								</div>
							</div>
						</div>
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="{{ asset('template/assets/images/awareness.jpg') }}" alt="Advocacy for the vulnerable" /></a></div>
							<div class="entry-content">
								<div class="entry-header">
									<span><a href="#">Advocacy for the vulnerable</a></span>
									<h3 class="entry-title"><a href="#">We are the foremost Sickle Cell Disease advocacy organisation in Ghana.</a></h3>
								</div>
							</div>
						</div>
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="{{ asset('template/assets/images/medical-services.jpg') }}" alt="Counselling" /></a></div>
							<div class="entry-content">
								<div class="entry-header">
									<span><a href="#" title="Nature">Counselling</a></span>
									<h3 class="entry-title"><a href="#">We provide genetic counselling about sickle cell disease and answer sickle cell related questions.</a></h3>
								</div>
							</div>
						</div>
						<div class="type-post">
							<div class="entry-cover"><a href="#"><img src="{{ asset('template/assets/images/collaboration.jpg') }}" alt="Collaboration" /></a></div>
							<div class="entry-content">
								<div class="entry-header">
									<span><a href="#" title="Nature">Collaboration</a></span>
									<h3 class="entry-title"><a href="#">We work together with other organizations to provide sickle cell related services.</a></h3>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Container /- -->
			</div><!-- Trending Section /- -->
			<div class="container-fluid no-left-padding no-right-padding trending-section dramatic-bg">
				<div class="section-header" style="color: #000; text-shadow: 0.5px 0.5px #00a; opacity: 1;">
					<h2 style="font-weight: 700;">Live each day to the fullest. Make it count!</h2>
					<p style="margin: 30px 15% 10px; font-size: 24px; font-weight: 600;">This is in recognition of the many struggles persons living with sickle cell disease undergo daily. It is a clarion call through our posts to our readers to make the best of their situation, despite the odds and enjoy each moment for its inherent beauty. It also encourages us to seek knowledge about sickle cell disease daily, as if each were our last.</p>
				</div>
			</div>

			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<!-- Content Area -->
						<div class="col-lg-8 col-md-6 content-area">
							<!-- Row -->
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<h1>Welcome to Sickle Life</h1>
									<p class="regular-b">We are a Sickle Cell Disease advocacy group based in Accra, Ghana, and incorporated as a non-profit NGO. Our desire is to see every person born with Sickle Cell Disease “live each day to the fullest, and make it count” and “empower the public to make informed choices regarding Sickle Cell Disease”.</p>
									<p class="regular-b">We engage in a plethora of activities that are geared towards helping patients live an enhanced lifestyle, sensitising the public to support them and reduce the incidence of Sickle Cell Disease.</p>
									<p class="regular-b">We hope you’ll have a pleasant user experience navigating our site. We appreciate comments and feedback from you.</p>
									<p class="regular-b">Please subscribe to our blog via email to receive all posts directly and join us on social media. You can like or follow us directly from the website. Let’s get interactive.</p>
									<p class="regular-b">Live each day to the fullest. Make it count!</p>
									<p class="regular-b"><b>Keep following Sickle Life for updates.</b><br>
									#SickleCellAwareness<br>
									#WorldSickleCellDay<br>
									#SickleLife</p>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-6">
									<div class="type-post">
										<div class="entry-cover">
											<div class="post-meta">
												<span class="byline">by <a href="#" title="Indesign">inDesign</a></span>
												<span class="post-date"><a href="#">MARCH 17, 2017</a></span>
											</div>
											<a href="#"><img src="{{ asset('template/assets/images/sicklestatus.jpeg') }}" alt="Post" /></a>
										</div>
										<div class="entry-content">
											<div class="entry-header">	
												<span class="post-category"><a href="#" title="Health">Health</a></span>
												<h3 class="entry-title"><a href="#" title="Beautiful Rio de Janeiro">World Sickle Cell Day 2019</a></h3>
											</div>								
											<p>World Health Days are an essential part of public health policy. They provide opportunity for raising awareness and mobilising local and international support for a wide spectrum of medical conditions. Sickle Cell Disease is a potentially fatal disease and one of the main causes of...</p>
											<a href="#" title="Read More">Read More</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-6">
									<div class="type-post">
										<div class="entry-cover">
											<div class="post-meta">
												<span class="byline">by <a href="#" title="Indesign">inDesign</a></span>
												<span class="post-date"><a href="#">MARCH 17, 2017</a></span>
											</div>
											<a href="#"><img src="{{ asset('template/assets/images/inform.jpg') }}" alt="Post" /></a>
										</div>
										<div class="entry-content">
											<div class="entry-header">	
												<span class="post-category"><a href="#" title="Health">Health</a></span>
												<h3 class="entry-title"><a href="#" title="New Fashion Outfits">Patient-Centered Care; The Sickle Life Experience.</a></h3>
											</div>								
											<p>In February 2018, Sickle Life was honoured to speak at the first Institute for Healthcare Improvement (IHI)   Africa Forum on Quality and Safety in Healthcare held from 19th to 21st February in Durban, South Africa. The IHI Africa forum brought together health workers, improvement managers and policymakers from across Africa and beyond in multiple...</p>
											<a href="#" title="Read More">Read More</a>
										</div>
									</div>
								</div>
							</div><!-- Row /- -->
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						@include("layouts.subs.right-widget")
					</div>
				</div><!-- Container /- -->
			</div><!-- Page Content /- -->
			
		</main>
		
	</div>
	
	<!-- Footer Main -->
	<footer class="container-fluid no-left-padding no-right-padding footer-main footer-section1">
		<div class="container-fluid no-left-padding no-right-padding subscribe-block">
			<!-- Container -->
			<div class="container">
				<h3>Subscribe</h3>
				<p>Subscribe to our newsletter to receive to be notified of posts and updates</p>
				<form class="newsletter">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="enter your email address here">
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="button">subscribe</button>
						</span>
					</div>
				</form>
			</div><!-- Container /- -->
		</div>
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
		
	<!-- Library - Theme JS -->
	<script src="{{ asset('template/assets/js/functions.js') }}"></script>
	
</body>
</html>