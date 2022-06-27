<section class="hero-banner stories-hero-banner">
  <?php
	if(count($banners))
	{
	 foreach($banners as $banner)
	 {
	?>
		<div class="hero-mani-banner">
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

	<section class="succes-detail">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="success-dtl-heding">
						<!-- <h2 class="tc-sapphire">I’ve Just Secured A <span class="tc-orange_red"> Senior Project </span>
                            Manager Role</h2> -->
					</div>
				</div>

				<div class="col-md-8">
					<div class="succes-detail-project">
						<div class="project-manag">
							<img src="<?php echo ASSETS;?>upload/<?php echo $successstory->image; ?>" alt="">
						</div>
						<div class="succes-detail-content">
							<h2><?php echo $successstory->title ?></h2>
							<div class="success-pera">
								<p><?php echo $successstory->description ?></p>

							</div>

						</div>
						<div class="screen-short">
							<img src="<?php echo ASSETS;?>upload/<?php echo $successstory->screenshot; ?>" alt="">
						</div>
					</div>
				</div>
				<div class="col-md-4">
				 <?php
				 $i=1;
					 foreach($successstories as $story)
					  {
						 if($story->id== $successstory->id) 
						 {
							 continue;
						 }
					   ?>
						<a href="<?php echo BASE_URL ?>success-stories/detail/<?php echo $story->id; ?>" class="success-side-project">
							<div class="success-side-detail">
								<div class="successside-img">
									<img src="<?php echo ASSETS;?>upload/<?php echo $story->image; ?>" alt="">
								</div>
								<div class="success-side-detail-content">
									<h5><?php echo $story->title ?></h5>
									<div class="success-side-detail-pera">
										<p><?php echo $story->description ?></p>
									</div>
								</div>
							</div>
						</a>
					<?php
						  if($i==2)
						  {
							  break;
						  }
						  $i++;
					  }
					?>
					
				</div>
			</div>
		</div>
	</section>

	<!--EXPERIENCE OUR EXCELLENT-->
	<section class="experience-banner testimonial-details pb-0">
		<div class="container">
				<?php
			echo $page->row_description2;
			?>
		</div>
	</section>