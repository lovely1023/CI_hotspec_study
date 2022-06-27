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

	<section class="what-solution-banner">
		<div class="container">
			<div class="row">
			    <?php echo $page->description; ?>
				<div class="col-md-12">
                    <div class="dashbox-inputgorm programme-input">
					  <form>
                        <input type="text" name="search" value="<?php  echo $_REQUEST['search']; ?>" placeholder="Search Programmes" required>
                        <button type="submit"><img class="search-btn" src="<?php echo BASE_URL; ?>images/search-btn.png" alt=""></button>
					 </form>
                    </div>
                </div>
				<?php
				if(!empty($programes))
				{
				foreach($programes as $programme)
				{
				?>				
				 <div class="col-lg-4 col-md-6 d-flex">
                    <div class="programme-box">
					<div class="programme-img">
						<img src="<?php echo ASSETS.'upload/'.$programme->image;?>"  alt="" class="img-fluid">
					</div>							
					<div class="programme-text">
                            <h4 class="tc-sapphire"><?php echo $programme->title; ?></h4>
                            <p><?php echo $programme->short_description; ?></p>
                            </div>
                        <div class="programme-btn">
                            <a href="<?php echo BASE_URL ?>programme/detail/<?php echo $programme->id; ?>" class="bg-orange_red">read more <i class="fa fa-caret-right"></i></a>
                        </div>	
						
					</div>					
				</div>
				<?php				
				}
				}else
				{
					?>
					<div class="col-lg-12 col-md-12 d-flex">No programmes list found</div>
					<?php
				}
				?>
				
				

			</div>
		</div>
	</section>