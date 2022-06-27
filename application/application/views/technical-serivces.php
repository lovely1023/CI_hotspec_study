
	<!--Top banner-->
<section class="hero-banner stories-hero-banner">
      <?php
	if(count($banners))
	{
	 foreach($banners as $banner)
	 {
	?>
		<div class="technical-service">
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

	<!--WHAT WE DO-->
<section class="stories-banner business-servic mobile-story">
		<div class="container">
		  <?php echo $page->row_description1; ?>
		</div>
	</section>

	<!--WORKING PROCESS-->
<section class="testimonials-banner" style="background-image: url(<?php echo ASSETS;?>frontend/images/testimonials-group.png);">
		<div class="container">
		   <?php echo $page->row_description2; ?>
		</div>
	</section>

	<!--HOTSPEC SOLUTIONS-->
<section class="consulting-banner other-servis pb-0">
		<div class="container">
		    <?php echo $page->row_description3; ?>
		</div>
	</section>
