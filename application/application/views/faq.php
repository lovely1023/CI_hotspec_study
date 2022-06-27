 <?php
	
	if(!empty($banners))
	{
	?>
	<section class="hero-banner stories-hero-banner">
    <?php
	
	 foreach($banners as $banner)
	 {
	?>
		<div class="faq-main">
			<div class="banner-slider" style="background-image: url(<?php echo ASSETS;?>upload/<?php echo $banner->image ?>);">
				<div class="banner_frame">
					<img src="<?php echo ASSETS;?>frontend/images/home_shape.png" alt="" class="img-fluid">
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
	?>
		
	</section>
    <?php
	}
	?>
 <section class="dashbod-mainpanel faq-panel">
        <div class="container">
            <div class="row">
              

                <div class="col-md-12">
                    <div id="accordion">
                       <?php
					   if(count($faqs))
					   {
						   $class="";
						   $class1="show";
					    foreach($faqs as $faq)
						{
					   ?>
                        <div class="dashbod-tabbox">
                            <a class="<?php echo $class;  ?> card-link" data-toggle="collapse" href="#collapseOne<?php echo $faq->id; ?>"><?php echo $faq->title ?></a>
                            <div id="collapseOne<?php echo $faq->id; ?>" class="collapse <?php echo $class1;  ?>" data-parent="#accordion">
                                <div class="dashbod-tabcontent">
                                   <?php echo $faq->description ?>
                                </div>
                            </div>
                        </div>
                      <?php
					    $class="collapsed";
						 $class1="";
						}
					   }
					  ?>
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    
	
	<section class="location-banner">
		<div class="container">
		 <div class="row">
		<?php
			echo $row18->row_content;
		 ?>
		 
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
  
    
	<!--CONTACT US-->
	<section class="contact-banner pt-0">
	 <?php
       $this->load->view('contact');
      ?>
	</section>

   