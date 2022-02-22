<!-- Header Section -->
<header class="container-fluid no-left-padding no-right-padding header_s header-fix header_s3">
		<!-- Menu Block -->
		<div class="container-fluid no-left-padding no-right-padding menu-block">
			<!-- Container -->
			<div class="container">				
				<nav class="navbar ownavigation navbar-expand-lg">
					<a class="navbar-brand" href="{{ route('index') }}" style="width: 33%;">
                        <img src="{{ asset('template/assets/images/sicklelife-logo.jpg') }}" />
                    </a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar4" aria-controls="navbar4" aria-expanded="false" aria-label="Toggle navigation">
						<i class="fa fa-bars"></i>
					</button>
					<div class="collapse navbar-collapse" id="navbar4">
						<ul class="navbar-nav justify-content-end">
							<li><a class="nav-link" href="{{ route('index') }}">Home</a></li>
							<li class="dropdown">
								<i class="ddl-switch fa fa-angle-down"></i>
								<a class="nav-link dropdown-toggle" href="{{ route('aboutus') }}">About Us</a>
								<ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('aboutus') }}">Who we are</a></li>
									<li class="dropdown">
										<i class="ddl-switch fa fa-angle-down"></i>
										<a class="dropdown-item dropdown-toggle" href>Our work</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="{{ route('events') }}">Events</a></li>
											<li><a class="dropdown-item" href="#">News</a></li>
											<li><a class="dropdown-item" href="{{ route('gallery') }}">Gallery</a></li>
											<li><a class="dropdown-item" href="{{ route('blog') }}">Blog</a></li>
										</ul>
									</li>
									<li><a class="dropdown-item" href="{{ route('team') }}">Meet The Team</a></li>
									<li class="dropdown">
										<i class="ddl-switch fa fa-angle-down"></i>
										<a class="dropdown-item dropdown-toggle" href="{{ route('joinasvolunteer') }}">Get Involved</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="{{ route('makeadonation') }}">Make A Donation</a></li>
											<li><a class="dropdown-item" href="{{ route('joinasvolunteer') }}">Join As Volunteer</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a class="nav-link" href="{{ route('blog') }}">Our Blog</a></li>
							<li><a class="nav-link" href="{{ route('makeadonation') }}"><b>Donate Now</b></a></li>
							<li><a class="nav-link" href="{{ route('contactus') }}">Contact Us</a></li>
						</ul>
					</div>
				</nav>
			</div><!-- Container /- -->
		</div><!-- Menu Block /- -->
		<!-- Search Box -->
		<div class="search-box collapse" id="search-box">
			<div class="container">
				<form>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." required>
						<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit"><i class="pe-7s-search"></i></button>
						</span>
					</div>
				</form>
			</div>
		</div><!-- Search Box /- -->
	</header><!-- Header Section /- -->