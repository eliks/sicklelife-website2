<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Events - SickleLife</title>

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
	
	
	<link rel="stylesheet" type="text/css" href="{{ asset('template/assets/revolution/css/settings.css') }}">
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
					<div class="row">
						<!-- Content Area -->
						<div class="col-xl-8 col-lg-8 col-md-6 col-12 content-area">
							<!-- Row -->
							<div class="row blog-masonry-list" style="position: relative; height: 3089.2px;">
								@foreach($listed_events as $listed_event)
									<div class="col-lg-6 col-md-6 col-sm-6 blog-masonry-box" style="position: absolute; left: 0%; top: 0px;">
										<div class="type-post">
											<div class="entry-cover">
												<div class="post-meta">
													<span class="byline">by <a href="#" title="{{ $listed_event->author_name }}">{{ $listed_event->author_name }}</a></span>
													<span class="post-date"><a href="#">{{ $listed_event->listing_date }}</a></span>
												</div>
												<a href="#"><img src="{{ asset($listed_event->image_url) }}" alt="Post"></a>
											</div>
											<div class="entry-content">
												<div class="entry-header">	
													<span class="post-category"><a href="#" title="{{ $listed_event->category_str }}">{{ $listed_event->category_str }}</a></span>
													<h3 class="entry-title"><a href="#" title="{{ $listed_event->title }}">{{ $listed_event->title }}</a></h3>
												</div>								
												<p>{{ Str::limit($listed_event->body, 200) }}</p>
												<a href="{{ route('events.show', ['id' => $listed_event->id, 'slug'=>Str::slug($listed_event->title)]) }}" title="Read More">Read More</a>
											</div>
										</div>
									</div>
								@endforeach
							</div><!-- Row /- -->
							<!-- Pagination -->
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Posts navigation</h2>
								<div class="nav-links">
									<a class="prev page-numbers" href="#">Previous</a>
									<span class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>1
									</span>
									<a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>2</a>
									<a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>3</a>
									<a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>...</a>
									<a class="page-numbers" href="#"><span class="meta-nav screen-reader-text">Page </span>6</a>
									<a class="next page-numbers" href="#">Next</a>
								</div>
							</nav><!-- Pagination /- -->
						</div><!-- Content Area /- -->
						@include("layouts.subs.widget_area")
					</div>
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
	
	<!-- Library - Theme JS -->
	<script src="{{ asset('template/assets/js/functions.js') }}"></script>
	
</body>
</html>