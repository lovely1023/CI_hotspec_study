<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<title>HotSpec Group</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo ASSETS;?>frontend/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ASSETS;?>frontend/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo ASSETS;?>frontend/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo ASSETS;?>frontend/fonts/MyriadPro-Light.otf">
	<link rel="stylesheet" href="<?php echo ASSETS;?>frontend/css/style.css">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/images/favicon-16x16.png">
	<link
		href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
		rel="stylesheet">
		<script src="https://smtpjs.com/v3/smtp.js"></script>
	<script src="<?php echo ASSETS;?>frontend/js/smtp.js"></script>
		<script src="<?php echo ASSETS;?>frontend/js/jquery-3.3.1.slim.min.js"></script>
		<script>
		function seturl(action)
		{
			$('#gsearchform').attr('action',action);
		}
		</script>
</head>

<body>


	<header>
		<div class="container p-0">
			<nav class="navbar navbar-expand-lg navbar-dark">
			<?php
			
			 $pages    = $this->uri->segment(1);
			 $pages3    = $this->uri->segment(3);
			
			?>
				<a class="navbar-brand" href="<?php echo BASE_URL;?>">
					<img src="<?php echo ASSETS;?>frontend/images/logo-group.png" alt="logo">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav"
					aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon bar-1"></span>
					<span class="navbar-toggler-icon bar-2"></span>
					<span class="navbar-toggler-icon bar-3"></span>
				</button>

				<div class="collapse navbar-collapse sidenav" id="sidenav">
					<!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()"></a>-->
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link <?php if($pages==''){echo'active';} ?>" href="<?php echo BASE_URL; ?>">Home</a>
						</li>
						<li class="nav-item main_dropdown">
							<a class="nav-link <?php if($pages=='who-we-are'){echo'active';} ?>" href="<?php echo BASE_URL;?>who-we-are">Who we are</a>
							<img class="drpo-dowon-img" src="<?php echo ASSETS;?>frontend/images/prev-down.png" alt="" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu more_dropdown" aria-labelledby="dropdown01">
								<ul>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='meet-our-team'){echo'active';} ?>" href="<?php echo BASE_URL;?>meet-our-team">Meet our team</a>
									</li>

								</ul>
							</div>

						</li>
						<li class="nav-item main_dropdown">
							<a class="nav-link <?php if($pages=='what-we-do'){echo'active';} ?>" href="<?php echo BASE_URL;?>what-we-do">What we do</a>
							<img class="drpo-dowon-img" src="<?php echo ASSETS;?>frontend/images/prev-down.png" alt="" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu more_dropdown" aria-labelledby="dropdown01">
								<ul>
									<li class="nav-item">
										<a class="nav-link <?php if($pages3=='business-service'){echo'active';} ?>" href="<?php echo BASE_URL;?>services/detail/business-service">Business services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages3=='technical-services'){echo'active';} ?>" href="<?php echo BASE_URL;?>services/detail/technical-services">Technical SERVICES</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages3=='tailored-services'){echo'active';} ?>" href="<?php echo BASE_URL;?>services/detail/tailored-services">Tailored services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages3=='market-research'){echo'active';} ?>" href="<?php echo BASE_URL;?>services/detail/market-research">Market Research</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages3=='training'){echo'active';} ?>" href="<?php echo BASE_URL;?>services/detail/training">Training</a>
									</li>

								</ul>
							</div>

						</li>
						<li class="nav-item  main_dropdown">
							<a class="nav-link <?php if($pages=='consulting'){echo'active';} ?>" href="<?php echo BASE_URL;?>consulting">Consulting</a>
							<img class="drpo-dowon-img" src="<?php echo ASSETS;?>frontend/images/prev-down.png" alt="" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu more_dropdown" aria-labelledby="dropdown01">
								<ul>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='services'){echo'active';} ?>" href="<?php echo BASE_URL;?>services">Services</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='our-work'){echo'active';} ?>" href="<?php echo BASE_URL;?>our-work">Our work</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='testimonials-and-reviews'){echo'active';} ?>" href="<?php echo BASE_URL;?>testimonials-and-reviews">Testimonials and
											Reviews</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item main_dropdown">
							<a class="nav-link <?php if($pages=='academy'){echo'active';} ?>" href="<?php echo BASE_URL;?>academy">Academy</a>
							<img class="drpo-dowon-img" src="<?php echo ASSETS;?>frontend/images/prev-down.png" alt="" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu more_dropdown" aria-labelledby="dropdown01">
								<ul>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='programme'){echo'active';} ?>" href="<?php echo BASE_URL;?>programme">PROGRAMMES</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='success-stories'){echo'active';} ?>" href="<?php echo BASE_URL;?>success-stories">SUCCESS&nbsp;STORIES</a>
									</li>


								</ul>
							</div>
						</li>
						<li class="nav-item main_dropdown more-after">
							<a class="nav-link" href="#">More</a>
							<img class="drpo-dowon-img" src="<?php echo ASSETS;?>frontend/images/prev-down.png" alt="" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
							<div class="dropdown-menu more_dropdown" aria-labelledby="dropdown01">
								<ul>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='framework'){echo'active';} ?>" href="<?php echo BASE_URL;?>framework">Our&nbsp;FRAMEWORK</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='news'){echo'active';} ?>" href="<?php echo BASE_URL;?>news">NEWS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='blog'){echo'active';} ?>" href="<?php echo BASE_URL;?>blog">BLOG</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='career'){echo'active';} ?>" href="<?php echo BASE_URL;?>career">CAREERS</a>
									</li>
									<li class="nav-item">
										<a class="nav-link <?php if($pages=='faq'){echo'active';} ?>" href="<?php echo BASE_URL;?>faq">FAQ<span>s</span> </a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item get-tuch">
							<a class="nav-link <?php if($pages=='get-in-touch'){echo'active';} ?>" href="<?php echo BASE_URL;?>get-in-touch">Get In Touch</a>
						</li>
					</ul>
				</div>
				<div class="user-search">
					<form action="<?php echo BASE_URL; ?>home/search" id="gsearchform">
						<div class="user-searchbox">
							<div class="dashbod-headerselectbox">
								<select onChange="seturl(this.value)">
									<option value="<?php echo BASE_URL; ?>home/search">All</option>
									<option value="<?php echo BASE_URL; ?>services">Services</option>
									<option value="<?php echo BASE_URL; ?>programme">Programmes</option>
									<option value="<?php echo BASE_URL; ?>news">News</option>
									<option value="<?php echo BASE_URL; ?>blog">Blog</option>
									<option value="<?php echo BASE_URL; ?>career">Careers</option>
								</select>
								<div class="form-righticonbox">
									<img src="<?php echo ASSETS;?>frontend/images/select-arrow.png" alt="">
								</div>
							</div>
							<input type="text" id="search" name="search" class="form-control" placeholder="Search">

						</div>
						<div class="search"></div>
					</form>
						
				</div>
			</nav>
		</div>
	</header>
