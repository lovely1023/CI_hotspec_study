<!--Top banner-->
	<section class="hero-banner stories-hero-banner">
<?php
	if(count($banners))
	{
	 foreach($banners as $banner)
	 {
	?>
		<div class="career-main">
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
									<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
								</div>
								<div class="col-md-12">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="attachment_file" name="attachment_file">
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
