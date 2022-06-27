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
			<div class="row">
			
				<?php
			echo $page->row_description1;
			?>

				<div class="col-md-12">
				 <form >
					<div class="flex-box">
						<div class="dashbox-inputgorm">
							<input type="text" name="search" value="<?php  echo $_REQUEST['search'] ?>" placeholder="Search" >
							<button><img class="search-btn" src="<?php echo ASSETS;?>frontend/images/search-btn.png" alt=""></button>
						</div>

						<div class="dashbox-inputgorm">
						
							<select name="catid" onchange='this.form.submit()'>
								<option value="" selected>All Our Work</option>
								<?php
								  
								  foreach($categories as $cat)
								  {
								  ?>
								  <option <?php if($_REQUEST['catid']==$cat->id){ echo'selected'; } ?> value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
								<?php
								  }
								?>
							</select>
							<button class="select-btn"><img src="<?php echo ASSETS;?>frontend/images/select-arrowwhite.png" alt=""></button>
						
						</div>
					</div>
					</form>	
				</div>
				<div class="col-md-12">
					<div class="row">
                   <?php
					 foreach($ourworks as $ourwork)
					  {
					   ?>
						<div class="col-md-6">
							<div class="digital-box">
								<img src="<?php echo ASSETS;?>upload/ourwork/<?php echo $ourwork->image; ?>" alt="" class="img-fluid">
								<div class="digital-text-box">
									<div class="digital-text">
										<h5 class="tc-sapphire"><?php echo $ourwork->title; ?></h5>
										<p><?php echo $ourwork->short_description; ?> </p>
										<a href="<?php echo BASE_URL; ?>our-work/<?php echo $ourwork->id; ?>" class="read-text tc-orange_red bg-sapphire">READ MORE</a>
									</div>
								</div>
							</div>
						</div>
		
					<?php
					  }
					?>	
					</div>
				</div>
				<!-- <div class="learn-link">
					<a href="meet-our-team.html" class="bg-orange_red">SEE MORE WORK</a>
				</div> -->
			</div>
		</div>
    </section>
    
<section class="experience-banner what-we-exp pb-0">
		<div class="container">
			<?php
			echo $page->row_description2;
			?>
		</div>
</section>

