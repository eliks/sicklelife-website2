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
							<article class="type-post">
								<div class="entry-cover">
									<img src="{{ asset($listed_blog->image_url) }}" alt="{{ $listed_blog->title }}" />
								</div>
								<div class="entry-content">
									<div class="entry-header">	
										<span class="post-category"><a href="#" title="{{ $listed_blog->category_str }}">{{ $listed_blog->category_str }}</a></span>
										<h3 class="entry-title">{{ $listed_blog->title }}</h3>
										<div class="post-meta">
											<span class="byline">by <a href="#" title="{{ $listed_blog->author_name }}">{{ $listed_blog->author_name }}</a></span>
											<span class="post-date">{{ $listed_blog->listing_date }}</span>
										</div>
									</div>								
									{!! $listed_blog->body !!}
									<p>(The writers are persons living with Sickle Cell Disease and Sickle Cell Disease Advocates from Sickle Life. All Views expressed are personal, please contact your doctor/counsellor for further information.)</p>
								</div>
							</article>
							@foreach($listed_blog->authors as $author)
								@include("layouts.subs.teammember_tile", ["tile_teammember" => $author])
							@endforeach
							<!-- Related Post -->
							<div class="related-post">
								<h3>You May Also Like</h3>
								<div class="related-post-block">
									@foreach($similar_blogs as $similar_blog)
									<div class="related-post-box">
										<a href="#"><img src="{{ asset($similar_blog->image_url) }}" alt="{{ $similar_blog->title }}" /></a>
										<span><a href="#" title="{{ $similar_blog->category_str }}">{{ $similar_blog->category_str }}</a></span>
										<h3><a href="{{ route('blog.show', ['id' => $similar_blog->id, 'slug'=>Str::slug($similar_blog->title)]) }}" title="{{ $similar_blog->title }}">{{ $similar_blog->title }}</a></h3>
									</div>
									@endforeach
								</div>
							</div><!-- Related Post /- -->
							<!-- Comment Area -->
							{{-- <div class="comments-area">
								<h2 class="comments-title">3 Comments</h2>
								<ol class="comment-list">
									<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://via.placeholder.com/70x70" class="avatar avatar-72 photo"/>
													<b class="fn">Alice Chaptman</b>
												</div>
												<div class="comment-metadata">
													<a href="#">10 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
										<ol class="children">
											<li class="comment byuser comment-author-admin bypostauthor odd alt depth-2 parent">
												<div class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="img" src="http://via.placeholder.com/70x70" class="avatar avatar-72 photo"/>
															<b class="fn">Droid Vader</b>
														</div>
														<div class="comment-metadata">
															<a href="#">8 hours ago</a>											
														</div>
													</footer>
													<div class="comment-content">
														<p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves.</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
													</div>
												</div>
											</li>
										</ol>
									</li>
									<li class="comment byuser comment-author-admin bypostauthor even thread-odd thread-alt depth-1">
										<div class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="img" src="http://via.placeholder.com/70x70" class="avatar avatar-72 photo"/>
													<b class="fn">Giana Blankard</b>
												</div>
												<div class="comment-metadata">
													<a href="#">16 hours ago</a>											
												</div>
											</footer>
											<div class="comment-content">
												<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class="comment-reply-link" href="#" title="Reply">Reply</a>
											</div>
										</div>
									</li>
								</ol><!-- comment-list /- -->
								<!-- Comment Form -->
								<div class="comment-respond">
									<h2 class="comment-reply-title">Leave a Reply</h2>
									<form method="post" class="comment-form">
										<p class="comment-form-author">
											<input id="author" name="author" placeholder="Name" size="30" maxlength="245" required="required" type="text"/>
										</p>
										<p class="comment-form-email">
											<input id="email" name="email" placeholder="Email" required="required" type="email"/>
										</p>
										<p class="comment-form-url">
											<input id="url" name="url" placeholder="Website" required="required" type="url"/>
										</p>
										<p class="comment-form-comment">
											<textarea id="comment" name="comment" placeholder="Enter your comment here..." rows="8" required="required"></textarea>
										</p>
										<p class="form-submit">
											<input name="submit" class="submit" value="Post Comment" type="submit"/>
										</p>
									</form>
								</div><!-- Comment Form /- -->
							</div> --}}
							<!-- Comment Area /- -->
						</div><!-- Content Area /- -->
						<!-- Widget Area -->
						<div class="col-lg-4 col-md-6 widget-area">
							<!-- Widget : Future Events -->
							<aside class="widget widget_latestposts">
								<h3 class="widget-title">Future Events</h3>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Beautiful Landscape View of Rio de Janeiro" href="#">Beautiful Landscape View of Rio de Janeiro</a></h5>
									<span><a href="#">march 14, 2017</a></span>
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Enjoy Your Holiday with Adventures" href="#">Enjoy Your Holiday with Adventures</a></h5>
									<span><a href="#">march 15, 2017</a></span>
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Best Photography Experience Shooting" href="#">Best Photography Experience Shooting</a></h5>
									<span><a href="#">march 15, 2017</a></span>									
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="How to Forecast Your Retirement Savings" href="#">How to Forecast Your Retirement Savings</a></h5>
									<span><a href="#">march 16, 2017</a></span>									
								</div>
							</aside><!-- Widget : Latest Post /- -->

							<!-- Widget : Past Events -->
							<aside class="widget widget_latestposts">
								<h3 class="widget-title">Past Events</h3>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Beautiful Landscape View of Rio de Janeiro" href="#">Beautiful Landscape View of Rio de Janeiro</a></h5>
									<span><a href="#">march 14, 2017</a></span>
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Enjoy Your Holiday with Adventures" href="#">Enjoy Your Holiday with Adventures</a></h5>
									<span><a href="#">march 15, 2017</a></span>
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="Best Photography Experience Shooting" href="#">Best Photography Experience Shooting</a></h5>
									<span><a href="#">march 15, 2017</a></span>									
								</div>
								<div class="latest-content">
									<a href="#" title="Recent Posts"><i><img src="http://via.placeholder.com/100x80" class="wp-post-image" alt="blog-1" /></i></a>
									<h5><a title="How to Forecast Your Retirement Savings" href="#">How to Forecast Your Retirement Savings</a></h5>
									<span><a href="#">march 16, 2017</a></span>									
								</div>
							</aside><!-- Widget : Latest Post /- -->
							<aside class="widget widget_social">
								<h3 class="widget-title">FOLLOW US</h3>
								<ul>
									<li><a href="#" title=""><i class="ion-social-facebook-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-twitter-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-instagram-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-googleplus-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-pinterest-outline"></i></a></li>
									<li><a href="#" title=""><i class="ion-social-vimeo-outline"></i></a></li>
								</ul>
							</aside><!-- Widget : Follow Us /- -->
						</div><!-- Widget Area /- -->
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