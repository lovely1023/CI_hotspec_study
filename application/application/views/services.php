<!--Top banner-->
<section class="hero-banner stories-hero-banner">
   <?php
	if(count($banners))
	{
	 foreach($banners as $banner)
	 {
	?>
		<div class="programme-main">
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


 <!--HOTSPEC CONSULTING-->
    <section class="consulting-banner hotspec-service pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="consulting-content">
					 <?php echo $page->description; ?>
                       

                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slider-dot slider-nav">
                        <div class="row">
						<?php
						if(!empty($services))
						{
							foreach($services as $service)
							{
								if(strtolower($service->name)=='overview')
								{
									continue;
								}
							?>
								<div class="col-md-6">
									<div class="digital-box">
										<img src="<?php echo ASSETS.'upload/'.$service->image;?>" alt="" class="img-fluid">
										<div class="digital-text-box">
											<div class="digital-text">
												<h5 class="tc-sapphire"><?php echo $service->name; ?></h5>
												<!-- <span>IT Networking</span> -->
											   <p><?php echo $service->short_description; ?></p>
												<a href="<?php echo BASE_URL ?>services/detail/<?php echo $service->url; ?>#v-pills-home<?php echo $service->id; ?>" class="read-text tc-orange_red bg-sapphire">READ MORE</a>
											</div>
										</div>
									</div>
								</div>
							<?php				
							}
						}else
						{
							?>
							<div class="col-lg-12 col-md-12 d-flex">No service list found</div>
							<?php
						}
						?>
						
						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>