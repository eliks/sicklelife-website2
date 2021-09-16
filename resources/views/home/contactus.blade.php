<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

	<title>Contact Us - SickleLife</title>

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
			<!-- Contact-Us Section -->	
			<div class="container-fluid no-left-padding no-right-padding contact-section">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1493.0662186173709!2d-0.23412635401553544!3d5.529361364273512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMzEnNDYuMCJOIDDCsDEzJzU5LjgiVw!5e0!3m2!1sen!2sjp!4v1628486779207!5m2!1sen!2sjp" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		
			</div>
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="contact-info">
						<div class="block-title">
							<h3>Contact Us</h3>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6">
						    <p>We'd love to hear from you</p>
                            <div class="contact-form">
                                <form class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Name (required)" name="contact-name" id="input_name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Email (required)" name="contact-email" id="input_email" required>
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" placeholder="Subject" name="contact-subject" id="input_subject">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" placeholder="Your message..." rows="5" name="textarea-message" id="textarea_message"></textarea>
                                    </div>
                                    <div class="col-md-12 form-group no-bottom-margin">
                                        <button id="btn_submit" name="submit" class="submit">Send</button>
                                    </div>
                                    <div id="alert-msg" class="alert-msg"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Widget : Our Address -->
                            <aside class="widget widget_social">
								<h3 class="widget-title">Our Address</h3>
                                <ul>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p><b><i class="fa fa-map-marker"></i></b> Quarmine Street, Accra</p>
                                            <p><b><i class="fa fa-phone"></i></b> +233 246 428 080</p>
                                            <p><b><i class="fa fa-envelope"></i></b> sicklelifemd@gmail.com</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p><b><i class="fa fa-map-marker"></i></b> Ghana GPS: GA3220682</p>
                                            <p><b><i class="fa fa-phone"></i></b> +233 209 031 118</p>
                                        </div>
                                    </div>
                                </ul>
							</aside><!-- Widget : Follow Us /- -->
                            @include("layouts.subs.social_media_aside")
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
	
	<!-- Library - Theme JS -->
	<script src="{{ asset('template/assets/js/functions.js') }}"></script>
	
</body>
</html>