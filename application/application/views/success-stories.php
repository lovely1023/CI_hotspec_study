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

<!--our work-->
	<section class="stories-banner">
		<div class="container">
			<div class="row">
			
				<?php
			echo $page->description;
			?>

				
                   <?php
					 foreach($successstories as $successstory)
					  {
					   ?>
					   <div class="col-lg-4 col-md-6 d-flex">
                    <div class="success-box">
                        <a href="<?php echo BASE_URL ?>success-stories/detail/<?php echo $successstory->id; ?>">
                            <div class="success-img">
                                <img src="<?php echo ASSETS;?>upload/<?php echo $successstory->image; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="success-text">
                                <h4>
                                    <span class="tc-sapphire"><?php echo $successstory->title; ?></span>
                                </h4>
                               <p><?php echo $successstory->description; ?></p>
                            </div>
                            <div class="success-icon-box">
                                <span class="tc-orange_red success-date">
                                    <img src="<?php echo ASSETS;?>frontend/images/user.png" alt="" class="img-fluid"><?php echo $successstory->user_name; ?>
                                </span>
                                <span class="tc-orange_red success-date">
                                    <img src="<?php echo ASSETS;?>frontend/images/calendar.png" alt="" class="img-fluid"><?php echo date('F d, Y',strtotime($successstory->created_at)); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                </div>
						
		
					<?php
					  }
					?>	
					
			</div>
		</div>
    </section>
    

