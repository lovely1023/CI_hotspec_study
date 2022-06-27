<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f68f0b54704467e89f0ff85/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
	<footer class="bg-sapphire">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-links bg-orange_red">
						<a href="<?php echo BASE_URL ?>">HOME</a>
						<a href="<?php echo BASE_URL ?>who-we-are">WHO WE ARE</a>
						<a href="<?php echo BASE_URL ?>what-we-do">WHAT WE DO</a>
						<a href="<?php echo BASE_URL ?>consulting">CONSULTING</a>
						<a href="<?php echo BASE_URL ?>academy">ACADEMY</a>
						<a href="<?php echo BASE_URL ?>success-stories">SUCCESS STORIES</a>
						<a href="<?php echo BASE_URL ?>framework">Our FRAMEWORK</a>
						<a href="<?php echo BASE_URL ?>news">news</a>
						<a href="<?php echo BASE_URL ?>blog">BLOG</a>
						<a href="<?php echo BASE_URL ?>career">CAREERS</a>
						<a href="<?php echo BASE_URL ?>faq">FAQ<span>s</span> </a>
						<a href="<?php echo BASE_URL ?>get-in-touch">GET IN TOUCH</a>
						<a href="<?php echo BASE_URL ?>sitemap">SITEMAP</a>
					</div>
				</div>
				
				<?php
					
					$contact=getContact();
					?>
				<div class="col-md-12">
					<div class="footer-list">
						<div class="footer-logo-icon">
							<a href="<?php echo BASE_URL; ?>"><img src="<?php echo ASSETS;?>frontend/images/footer-logo-icon.png" alt="" class="img-fluid"></a>
						</div>
						<div class="address-box">
							<img src="<?php echo ASSETS;?>frontend/images/location.png" alt="" class="img-fluid">
							<span><?php echo $contact->address; ?></span>
						</div>
						<div class="address-box">
							<img src="<?php echo ASSETS;?>frontend/images/call.png" alt="" class="img-fluid">
							<span> <?php echo $contact->phone; ?></span>
						</div>
						<div class="address-box">
							<img src="<?php echo ASSETS;?>frontend/images/massage.png" alt="" class="img-fluid">
							<a href="mailto:<?php echo $contact->email; ?>"><?php echo $contact->email; ?></a>
						</div>
						<div class="address-box">
							<img src="<?php echo ASSETS;?>frontend/images/globe-o.png" alt="" class="img-fluid">
							<a href="http://www.hotspecgroup.com/" target="_blank"><?php echo $contact->website; ?></a>
						</div>
						<div class="lenguage-select">
							<div class="lenguage-select-box">
								<img src="<?php echo ASSETS;?>frontend/images/globe-w.png" alt=""> English
							</div>
							<ul class="enguage-list">
							<!--<li> <a href="#"> <img src="<?php echo ASSETS;?>frontend/images/india-flag.png" alt=""> Hindi</a></li> -->
								<li> <a href="#"> <img src="<?php echo ASSETS;?>frontend/images/usa-flag.png" alt=""> English</a></li>
							</ul>
						</div>

					</div>
				</div>
				
				
			</div>
		</div>

      <div class="footer-coppyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="copy-box">
							<li>© HotSpec Group 2020 <span class="line"> | </span> All Rights Reserved </li>

							<li class="coppyright-logo">
								<a href="<?php echo BASE_URL; ?>">
									<img src="<?php echo ASSETS;?>frontend/images/footer-logo.png" alt="" class="img-fluid">
								</a>
							</li>
							<li>
								<a href="<?php echo BASE_URL; ?>terms-and-conditions">Terms and Conditions</a>
								<span class="line"> | </span>
								<a href="<?php echo BASE_URL; ?>privacy-policy">Privacy Policy</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		

	</footer>

	
	<!--Right Social Icons-->
	<div class="social-icons">
		<a href="<?php echo $contact->facebook_link; ?>" target="_blank">
			<i class="fa fa-facebook"></i>
		</a>
		<a href="<?php echo $contact->instagram_link; ?>" target="_blank">
			<i class="fa fa-instagram"></i>
		</a>
		<a href="<?php echo $contact->google_link; ?>" target="_blank">
			<i class="fa fa-google"></i>
		</a>
		<a href="<?php echo $contact->youtube_link; ?>" target="_blank">
			<i class="fa fa-youtube-play"></i>
		</a>
		<a href="<?php echo $contact->linkedin_link; ?>" target="_blank">
			<i class="fa fa-linkedin"></i>
		</a>
		<a href="<?php echo $contact->twitter_link; ?>" target="_blank">
			<i class="fa fa-twitter"></i>
		</a>
	</div>
	
	
	
	<a href="#" class="up-errow"><img src="<?php echo ASSETS;?>frontend/images/up-errow.png" alt=""></a>
	<div class="modal fade business_consultation book-a-trainig" id="book-a-trainig" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			
				<div class="book-a-trainig-fram">
					<iframe src="https://share.hsforms.com/1cFudnaMIQuC0Sa36iM7mmA4vaye" height="900" width="100%" frameborder="0"></iframe>
				</div>

			</div>
		</div>
	</div>
</div>

  <!--	apply now popup -->
  
  <div class="modal fade business_consultation" id="aplly-now-modal" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<section class="talk-banner get-in-banner apply-now">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="talk-heading">
						<h2 class="tc-sapphire"> apply here</h2>

					</div>
				</div>
			
				<div class="col-md-12">
				<?php if($this->session->flashdata('success')): ?>
					<p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
				<?php endif; ?>
				<?php if($this->session->flashdata('error')): ?>
					<p class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></p>
				<?php endif; ?>
					<div class="contact-form">
						<form method="post" action="<?php echo BASE_URL.'home/apply_now?id='.$_REQUEST['id'];?>" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name*" required>
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name*" required>
								</div>
								<div class="col-md-12 col-sm-12">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
								</div>
								<div class="col-md-12 col-sm-12">
									<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
								</div>
								<div class="col-md-12">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="attachment_file" name="attachment_file" required>
										<label class="custom-file-label" for="customFile">Upload CV and Supporting
											Documents*</label>
									</div>
								</div>
								<div class="col-lg-12">
									<textarea rows="4" name="additional_info" id="additional_info" class="form-control"
										placeholder="Additional Information*" required></textarea>
								</div>
								<div class="col-md-12">
									<div class="submit-btn">
										<button class="btn bg-orange_red">SUBMIT</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
				</div>
			</div>
		</div>
	</div>
	
<div class="modal fade submit-button-modal" id="careermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <span>&#10003;</span> Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="bookafreeconsultationMsg" style="color: green;">
										<p>Thanks for applying! </p> 
										<p>One of our colleagues will get back in touch with you soon!</p>
										<p>Have a great day!</p>
		</div>
      </div>
     
    </div>
  </div>
</div>
	
	
	<!--submit-button-modal-->
<div class="modal fade submit-button-modal" id="submitmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <span>&#10003;</span> Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="bookafreeconsultationMsg" style="color: green;">
										<p>Thanks for booking a consultation with us! </p> 
										<p>One of our consultants will get back in touch with you soon!</p>
										<p>Have a great day!</p>
		</div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>



	<!-- cookies-modal-->
	
	<!-- <div class="modal fade cookies-modal-box" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="notice d-flex justify-content-between align-items-center">
          <div class="cookie-text">This website uses cookies to personalize content and analyse traffic in order to offer you a better experience. <a href="#" class="cookies-learn">Learn more</a></div>
          <div class="buttons d-flex flex-column flex-lg-row">
            <a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">Got it!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->
	
	<div class="cookies-modal-box" id="show-cookies">
		<div class="notice d-flex justify-content-between align-items-center">
			<div class="cookie-text">This website uses cookies to ensure you get the best experience on our website. <a
					href="<?php echo BASE_URL; ?>cookies" class="cookies-learn">Learn more</a></div>
			<div class="buttons d-flex flex-column flex-lg-row">
				<a href="#a" class="btn btn-success btn-sm" data-dismiss="modal">Got it!</a>

			</div>
		</div>
	</div>
	
	
	
	
 

	<div class="search-modal">
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="search-content">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true"> &times; </span>
						</button>
						<div class="modal-body">
							<form>
								<div class="drop-search">
									<input type="search" class="form-control" id="recipient-name" placeholder="Search">
									<button class="btn model-search">search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!---book a free bussiness consultion-->
	<div class="modal fade business_consultation" id="business_consultation" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<section class="talk-banner" id="projects_requests">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="talk-heading">
										<h2 class="tc-sapphire">Book a <span class="tc-orange_red">Free</span> <span
												class="tc-orange_red"> Consultation</span></h2>

										<!-- <h2 class="tc-sapphire">LET'S <span class="tc-orange_red"> TALK </span> ABOUT <span class="tc-orange_red"> YOUR </span> PROJECTS <span class="tc-orange_red"> OR </span> BAU <span class="tc-orange_red"> REQUESTS </span></h2> -->
										<p>Book a free consultation with one of our consultants and let us transform
											your business so
											you can start growing with confidence. You are under no obligation to pay
											for any service.
										</p>
									</div>
								</div>

								<div class="col-lg-5 col-md-12">
									<div class="talk-box">
										<div class="talk-img">
											<img src="<?php echo ASSETS;?>frontend/images/agency.png" alt="" class="img-fluid">
										</div>
										<div class="talk-bau-img">
											<img src="<?php echo ASSETS;?>frontend/images/agency-1.png" alt="" class="img-fluid">
										</div>
									</div>
								</div>

								<div class="col-lg-7 col-md-12">
									<div class="talk-form popup-talk-form">
									<div id="bookafreeconsultationMsg" style="color:green;display:none">
										<p>Thanks for booking a consultation with us! </p> 
										<p>One of our consultants will get back in touch with you soon!</p>
										<p>Have a great day!</p>
									</div>
										<form id="bookafreeconsultationFrm" onsubmit="return sendBookafreeconsultationForm();">
											<div class="row">
												<div class="col-md-6 col-sm-6">
													<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name*" required>
												</div>
												<div class="col-md-6 col-sm-6">
													<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name*" required>
												</div>
												<div class="col-md-6 col-sm-6">
													<input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
												</div>
												<div class="col-md-6 col-sm-6">
													<input type="tel" class="form-control"  name="phone" id="phone" placeholder="Phone Number">
												</div>
												<div class="col-md-12">
													<input type="text" class="form-control"  name="company" id="company" placeholder="Company Name" required>
												</div>
												<div class="col-md-12">
													<select name="service" id="service" class="form-control remove-appearance" required>
														<option value="" selected="" disabled="">Desired Service</option>
															<option value="Information Security Management ">Information Security Management </option>
															<option value="Project Management / Support">Project Management / Support</option>
															<option value="Business Analysis">Business Analysis</option>
															<option value="UI/UX Design">UI/UX Design</option>
															<option value="Technical Operations">Technical Operations</option>
															<option value="Solutions Architecture">Solutions Architecture </option>
															<option value="Robotic Process Automation(RPA)">Robotic Process Automation(RPA)</option>
															<option value="Software Testing">Software Testing</option>
															<option value="Software Development">Software Development</option>
															<option value="Cloud Engineering">Cloud Engineering</option>
															<option value="Data Engineering">Data Engineering </option>
															<option value="Business Intelligence">Business Intelligence</option>
															<option value="Tailored Service">Tailored Service</option>
															<option value="Market Research">Market Research</option>
															<option value="Training">Training</option>
													</select>
												</div>
												<div class="col-md-12">
													<textarea rows="4" name="message" id="message" class="form-control"
														placeholder="Your Message*" required></textarea>
												</div>

												<div class="col-md-12">
													<div class="submit-btn">
														<button class="btn bg-orange_red" >RESERVE YOUR FREE
															CONSULTATION</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>

<script>
function sendBookafreeconsultationForm()
		{
			$.ajax({
			type : 'post',
			url  : '<?php echo BASE_URL;?>home/sendBookafreeconsultationEmail',
			data : $("#bookafreeconsultationFrm").serialize(),
			}).done(function(msg){
				$('#bookafreeconsultationFrm')[0].reset();
				//$("#bookafreeconsultationMsg").show();
				jQuery('#submitmodal').modal('show');
				jQuery('#business_consultation').modal('hide');
				
			});
			return false;
			
		}
</script>

	<div class="modal fade videomodal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close close_video" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true"> &times; </span>
				</button>
				<div class="modal_video">
					<div class="modal-body">
						<div class="iframe-video">
							<video width="100%" height="100%" controls muted>
								<source src="<?php echo BASE_URL; ?>videos/hotspec-video.mp4" type="video/mp4">
							</video>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade profile-modal" id="exampleModalLong" tabindex="-2" role="dialog"
		aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="profine-midil-box">
						<div class="expert-team-box">
							<img src="<?php echo ASSETS;?>frontend/images/Sulaimon.jpg" alt="" class="img-fluid">
						</div>
						<a href="https://www.linkedin.com/in/sulaimon-olatunji-07869818/" class="profile-icon-in"
							target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

						<p class="adrian">Sulaimon Olatunji</p>
						<p class="trainer">Business Strategist</p>
						<p class="trainer">Location: United Kingdom</p>
						<p class="location-dtl">Sulaimon is a certified IT Service Management (ITILV3), PRINCE2
							Certified Business Analyst.
						</p>
						<p class="location-dtl">He has experience in business analysis, software testing and project
							management.
							He has worked in various industries including Information Technology and health industries.
							Sulaimon has a research degree in business information system(Mphil), Msc in Business
							information System and Bsc in Business Administration.

						</p>

					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade profile-modal" id="exampleModalCenter" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="profine-midil-box">
						<div class="expert-team-box">
							<img src="<?php echo ASSETS;?>frontend/images/joe.jpg" alt="" class="img-fluid">
						</div>
						<a href="https://www.linkedin.com/in/mydjoe/" class="profile-icon-in" target="_blank"><i
								class="fa fa-linkedin" aria-hidden="true"></i></a>

						<p class="adrian">Joe Oginni</p>
						<p class="trainer">Managing Director</p>
						<p class="trainer">Location: United Kingdom</p>
						<p class="location-dtl">Joe is a multi skilled IT Professional with vast experience in Database
							Management, Data/Business Intelligence Analysis, Business Analysis and Project Management
						</p>
						<p class="location-dtl">He is a certified Business Analyst and Project Manager with university
							qualifications in Business Information Management System and Engineering
						</p>
						<p class="location-dtl">He has worked within various industry sectors including Engineering,
							Logistics, Retails, E-commerce, and Technology</p>
					</div>
				</div>
			</div>
		</div>




	
		<script src="<?php echo ASSETS;?>frontend/js/popper.min.js"></script>
		<script src="<?php echo ASSETS;?>frontend/js/bootstrap.min.js"></script>
		<script src="<?php echo ASSETS;?>frontend/js/lightbox-plus-jquery.min.js"></script>
		<script src="<?php echo ASSETS;?>frontend/js/owl.carousel.js"></script>
		<script src="<?php echo ASSETS;?>frontend/js/numscroller.js"></script>


		<script>
			$(document).ready(function () {
			 if (!window.localStorage.getItem("notice-accepted")) {	
			      $("#show-cookies").fadeIn();
			    }

		});

		$(document).ready(function () {
			$('.btn-success').on("click", function () {
				$('#show-cookies').fadeOut();				
				window.localStorage.setItem("notice-accepted",'22');
				
				
			});

		});

			$(window).scroll(function () {
				if ($(window).scrollTop() >= 60) {
					$('header').addClass('header-fixed');
				}
				else {
					$('header').removeClass('header-fixed');
				}
			});

			function openCity(evt, cityName) {
				var i, tabcontent, tablinks;
				tabcontent = document.getElementsByClassName("tabcontent");
				for (i = 0; i < tabcontent.length; i++) {
					tabcontent[i].style.display = "none";
				}
				tablinks = document.getElementsByClassName("tablinks");
				for (i = 0; i < tablinks.length; i++) {
					tablinks[i].className = tablinks[i].className.replace(" active", "");
				}
				document.getElementById(cityName).style.display = "block";
				evt.currentTarget.className += " active";
			}

		</script>

		<script>

			// $('.hero-banner').owlCarousel({
			// 	loop: true,
			// 	margin: 5,
			// 	nav: false,
			// 	dots: true,
			// 	autoplay: true,
			// 	autoplaySpeed: 2500,
			// 	dotsSpeed: 2500,
			// 	autoplayTimeout: 3000,
			// 	autoplayHoverPause: true,
			// 	responsive: {

			// 		0: {
			// 			items: 1
			// 		},
			// 		580: {
			// 			items: 1
			// 		},
			// 		767: {
			// 			items: 1
			// 		},
			// 		992: {
			// 			items: 1
			// 		},
			// 		1000: {
			// 			items: 1
			// 		}
			// 	}
			// });

			$('.consulting-slider').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 4500,
				dotsSpeed: 4500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 3
					},
					1000: {
						items: 3
					},
					1200: {
						items: 4
					}
				}
			});

			$('.academy-slider').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 4000,
				dotsSpeed: 4000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 2
					},
					1000: {
						items: 2
					},
					1200: {
						items: 3
					}
				}
			});

			$('.skills-slider').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 3500,
				dotsSpeed: 3500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 3
					},
					1000: {
						items: 3
					},
					1000: {
						items: 4
					}
				}
			});

			$('.nav-slider').owlCarousel({
				loop: true,
				margin: 10,
				nav: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 3000,
				dotsSpeed: 3000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 3
					},
					580: {
						items: 4
					},
					767: {
						items: 5
					},
					992: {
						items: 5
					},
					1000: {
						items: 7
					}
				}
			});

			$('.target-slider').owlCarousel({
				loop: true,
				margin: 40,
				nav: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 5000,
				dotsSpeed: 5000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 2
					},
					1000: {
						items: 2
					},
					1200: {
						items: 3
					}
				}
			});

			$('.learning-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 4500,
				dotsSpeed: 4500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 2
					},
					1000: {
						items: 2
					},
					1000: {
						items: 3
					}
				}
			});

			$('.group-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 4000,
				dotsSpeed: 4000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 3
					},
					1000: {
						items: 3
					}
				}
			});

			$('.work-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 3500,
				dotsSpeed: 3500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 1
					},
					767: {
						items: 2
					},
					992: {
						items: 2
					},
					1000: {
						items: 2
					}
				}
			});

			$('.expert-team-slider').owlCarousel({
				loop: true,
				margin: 65,
				nav: true,
				dots: true,
				// autoplay: true,
				autoplaySpeed: 3000,
				dotsSpeed: 3000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 2
					},
					767: {
						items: 2
					},
					992: {
						items: 3
					},
					1000: {
						items: 3
					}
				}
			});

			$('.location-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 2500,
				dotsSpeed: 2500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 1
					},
					767: {
						items: 2
					},
					992: {
						items: 2
					},
					1000: {
						items: 2
					}
				}
			});

			$('.testimonials-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 4500,
				dotsSpeed: 4500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 1
					},
					767: {
						items: 1
					},
					992: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			});

			$('.post-slider').owlCarousel({
				loop: false,
				margin: 45,
				nav: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 4500,
				dotsSpeed: 4500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 1
					},
					767: {
						items: 1
					},
					992: {
						items: 1
					},
					1000: {
						items: 1
					}
				}
			});

			$('.career-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: false,
				autoplay: true,
				autoplaySpeed: 3500,
				dotsSpeed: 3500,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 1
					},
					580: {
						items: 1
					},
					767: {
						items: 2
					},
					992: {
						items: 3
					},
					1000: {
						items: 3
					}
				}
			});
			$('.associates-slider').owlCarousel({
				loop: true,
				margin: 45,
				nav: true,
				dots: true,
				autoplay: true,
				autoplaySpeed: 3000,
				dotsSpeed: 3000,
				autoplayTimeout: 3000,
				autoplayHoverPause: true,
				responsive: {

					0: {
						items: 2
					},
					580: {
						items: 3
					},
					767: {
						items: 4
					},
					992: {
						items: 5
					},
					1000: {
						items: 5
					}
				}
			});

			//		$( document ).ready(function() {
			//			$('.career-slider .owl-stage .active').addClass("opacity");
			//		});

			$(document).ready(function () {
				$(".search").click(function () {
					$(".user-searchbox").toggleClass("show");
				});
			});

			$(function () {
				$(window).scroll(function () {
					if ($(this).scrollTop() > 200) {
						$('.up-errow img').fadeIn();
					} else {
						$('.up-errow img').fadeOut();
					}
				});

				$('.back-top').click(function () {
					$('body,html').animate({
						scrollTop: 0
					}, 1600);
					return false;
				});
			});
			$(".lenguage-select-box").click(function () {
				$(".enguage-list").toggle();
			});
			$('.drpo-dowon-img').click(function () {
				if ($(this).hasClass('icon-rotet')) {
					$(this).removeClass('icon-rotet');
				} else {
					$('.drpo-dowon-img.icon-rotet').removeClass('icon-rotet');
					$(this).addClass('icon-rotet');
				}
			});
			$(window).scroll(startCounter);
			function startCounter() {
				if ($(window).scrollTop() > 200) {
					$(window).off("scroll", startCounter);
					$('.numscroller').each(function () {
						var $this = $(this);
						jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
							duration: 8000,
							easing: 'swing',
							step: function () {
								$this.text(Math.ceil(this.Counter));
							}
						});
					});
				}
			}
			$("#myBtn").click(function () {
			$("#more").slideToggle("slow");
			var $this = $(this);
			$this.toggleClass("open");

			if ($this.hasClass("open")) {
				$this.html("Less");
			} else {
				$this.html("Read more..");
			}
		});
		

		
		</script>
		<script>
	$( document ).ready(function() {
    var currentLocation ='fdfg'+ window.location;
	
	var loc=currentLocation.split('#');
	
	if(loc.length>1)
	{
		
		jQuery('.s'+loc[1]).click();
	}
	
});
	</script>

</body>

</html>