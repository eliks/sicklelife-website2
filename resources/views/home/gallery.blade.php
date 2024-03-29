<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Gallery - SickleLife</title>

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

	<style>
		.btn-special {
			color: #222222;
			background-color: #fefefe;
			border-color: #dedede;
		}
		.btn-special.active {
			color: #ffffff;
			background-color: #303030;
			border-color: #202020;
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
		
	@include('layouts.subs.header')

	<div class="main-container">
	
		<main class="site-main">
			
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="row">
						<div class="content-area col-sm-12">
							<div class="block-title">
								<h3>Our Gallery</h3>
							</div>
							<div class="row">
								<div class="col-sm-12 basket-menu" style="text-align: center; margin-bottom: 21px;">
									<a href="#" class="btn btn-special basket active" data-filter="*">All</a>
									@foreach($baskets as $basket)
										<a href="#" class="btn btn-special basket" data-filter=".{{ Str::slug($basket->name) }}">{{ $basket->name }}</a>
									@endforeach
								</div>
							</div>
							<!-- Row -->
							<div class="row blog-masonry-list">
								@foreach($albums as $album)
									<div class="col-lg-4 col-sm-6 blog-masonry-box element-item @foreach($album->baskets as $el_basket) {{ Str::slug($el_basket->name) }} @endforeach">
										<div class="type-post post-position">
											<div class="entry-cover">
												<div class="post-meta">
													<span class="byline">by <a href="{{ $album->url }}" title="{{ $album->author_name }}">{{ $album->author_name }}</a></span>
													<span class="post-date"><a href="{{ $album->url }}">MARCH 17, 2017</a></span>
												</div>
												<a href="{{ route('gallerydetails') }}"><img src="{{ asset($album->image_url) }}" alt="Post" /></a>
											</div>
											<div class="entry-content">
												<div class="entry-header">	
													<span class="post-category"><a href="{{ $album->url }}" title="{{ $album->category_str }}">{{ $album->category_str }}</a></span>
													<h3 class="entry-title"><a href="{{ $album->url }}" title="{{ $album->title }}">{{ $album->title }}</a></h3>
												</div>
												<a href="{{ $album->url }}" title="View Photos">View Photos</a>
											</div>
										</div>
									</div>
								@endforeach								
							</div><!-- Row /- -->
						</div>
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
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
	<!-- Library - Theme JS -->
	<script src="{{ asset('template/assets/js/functions.js') }}"></script>
	<script>
		// init Isotope
		var $grid = $('.blog-masonry-list').isotope({
		// options
		});
		// filter items on button click
		$('.basket-menu').on( 'click', 'a', function() {
			var filterValue = $(this).attr('data-filter');
			$grid.isotope({ filter: filterValue });
			$(".basket-menu a").removeClass("active");
			$(this).addClass('active');
		});
	</script>
	
</body>
</html>