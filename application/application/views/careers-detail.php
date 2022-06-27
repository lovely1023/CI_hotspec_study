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
					   <div class="col-md-12">
                            <div class="banner-content">
                                <h2 class="tc-sapphire">
                                    CAREES <span class="tc-orange_red"> DETAIL </span>                                   
                                </h2>
                               
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>

		
    <?php
	 }
	 }
	?>	
</section>


 <section class="term-and-condition privecy-polcy join-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
				<?php echo $career->description; ?>
					<div class="learn-link">
						<a href="<?php echo BASE_URL; ?>apply-now?id=<?php echo $career->id;  ?>" class="bg-orange_red" data-toggle="modal" data-target="#aplly-now-modal">Apply Now</a>
					</div>
				</div>
            </div>
        </div>
</section>