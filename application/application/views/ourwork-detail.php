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
	<section class="what-solution-banner main-our-work">
		<div class="container">
		<?php
		
		echo $ourwork->description;
		?>
			
		</div>
    </section>
    
<section class="experience-banner what-we-exp pb-0">
		<div class="container">
			<?php
			echo $page->row_description2;
			?>
		</div>
</section>

