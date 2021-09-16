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
			<!-- Page Content -->
			<div class="container-fluid no-left-padding no-right-padding page-content">
				<!-- Container -->
				<div class="container">
					<div class="contact-info">
						<div class="block-title">
							<h3>Make a Donation</h3>
						</div>
					</div>
                    <div class="row">
					<div class="col-md-6">
						    <h4>Make an Instant Donation</h4>
							<p>We use a secure and easy electronic money transfer service</p>
                            <div class="contact-form">
                                <form class="row">
                                    <div class="col-md-12 form-group" style="padding-left: 7.5px; padding-right: 7.5px;">
                                        <input type="text" class="form-control" placeholder="Your Name (required)" name="contact-name" id="input_name" required>
                                    </div>
                                    <div class="col-md-12 form-group" style="padding-left: 7.5px; padding-right: 7.5px;">
                                        <input type="text" class="form-control" placeholder="Your Email" name="contact-email" id="input_email">
                                    </div>
                                    <div class="col-md-12 form-group no-bottom-margin">
                                        <button id="btn_submit" name="submit" class="submit">Donate Now</button>
                                    </div>
                                    <div id="alert-msg" class="alert-msg"></div>
                                </form>
                            </div>
                        </div>
						<div class="col-md-6">
						    <h4>Pledge Now, Pay Later</h4>
							<p>Just say how much, and when; we will reach out appropriately. </p>
                            <div class="contact-form">
                                <form class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Name (required)" name="contact-name" id="input_name" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Your Email (required)" name="contact-email" id="input_email" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="text" class="form-control" placeholder="Amount (E.g GHS 1000)" name="contact-subject" id="input_subject">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input type="date" class="form-control" placeholder="Date" name="contact-subject" id="input_subject">
                                    </div>
                                    <div class="col-md-12 form-group no-bottom-margin">
                                        <button id="btn_submit" name="submit" class="submit">Submit Pledge</button>
                                    </div>
                                    <div id="alert-msg" class="alert-msg"></div>
                                </form>
                            </div>
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