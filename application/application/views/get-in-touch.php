<!--Top banner-->
	<section class="hero-banner stories-hero-banner">

   <?php
	if(count($banners))
	{
	 foreach($banners as $banner)
	 {
	?>
		<div class="item">
			<div class="banner-slider" style="background-image: url(<?php echo ASSETS;?>upload/<?php echo $banner->image ?>);">
				<div class="banner_frame">
					<img src="<?php echo ASSETS;?>frontend/images/inner_shape.png" alt="" class="img-fluid">
				</div>

				<div class="container">
					<div class="row">
					<?php echo $banner->description ?>
					</div>
				</div>
			</div>
		</div>

		
    <?php
	 }
	 }
	?>	

	</section>

	<!--LOCATIONS-->
	<?php
		
		
		$CI =& get_instance();
		$CI->load->model('Common_model');
		
		$locations =	$CI->Common_model->getLocation();
		
	?>
	
	<section class="location-banner get-location-banner">
		<div class="container">
		<div class="row">
		<?php echo $page->row_description4; ?>
		
		<div class="col-md-12">
					<div class="location-slider slider-dot slider-nav">
                     <?php
					 
					 if(!empty($locations))
					 {
						 foreach($locations as $location)
						 {
					 
					 ?>
						<div class="item">
							<div class="location-box">
								<div class="row mx-0">

									<div class="col-lg-7 col-md-12 p-0">
										<div class="location-content">
											<div class="flag-text">
												<img class="fleg" src="images/usa-flag.png" alt="">
												<span><?php echo $location->country_name ?></span>
											</div>
											<p class="address-text">
												<strong><?php echo $location->address ?></strong>
											</p>
											<p>
												<strong>Support : </strong> <?php echo $location->hr_phone ?>
											</p>
											<p>
												<strong>Sales : </strong> <?php echo $location->sales_phone ?>
											</p>
											<p>
												<strong>Email : </strong>
												<a href="#"> <?php echo $location->email ?></a>
											</p>
											<p>
												<strong>Opening Time : </strong> <?php echo $location->opening_time ?>
											</p>
										</div>
									</div>

									<div class="col-lg-5 col-md-12 p-0">
										<div class="location-map">
											<iframe
												src="<?php echo $location->google_map ?>"
												width="600" height="450" frameborder="0" style="border:0;"
												allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
										</div>
									</div>

								</div>
							</div>
						</div>
						<?php
					   }
					  }
						?>

					</div>
				</div>
		</div>
		</div>
	</section>

	<!--GET IN TOUCH-->
	<section class="talk-banner get-in-banner">
	
	
		<div class="container">
			<div class="row">
				 <?php echo $page->row_description2; ?>

				<div class="col-lg-7 col-md-12">
					<div class="talk-form">
				
						<form method="post" id="contactFrm" onsubmit="return sendcontactus();">
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
									<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
								</div>
								<div class="col-md-12">
									<textarea rows="4" class="form-control" name="message" id="message" placeholder="Your Message*" required></textarea>
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
	
<div class="modal fade submit-button-modal" id="getintouchubmitmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
										<p>Thanks for getting in touch!</p> 
										<p>One of our colleagues will get back in touch with you soon!</p>
										<p>Have a great day!</p>
		</div>
      </div>
     
    </div>
  </div>
</div>		
<script>
function sendcontactus()
		{
			$.ajax({
			type : 'post',
			url  : '<?php echo BASE_URL;?>home/sendgettouchEmail',
			data : $("#contactFrm").serialize(),
			}).done(function(msg){
				$('#contactFrm')[0].reset();
				$("#getintouchubmitmodal").modal('show');
				
			});
			return false;
			
		}
</script>