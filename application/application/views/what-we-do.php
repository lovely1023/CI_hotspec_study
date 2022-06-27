
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

	<!--WHAT WE DO-->
	<section class="what-software-banner">
		<div class="container">
		<div class="row">
		  <?php echo $page->row_description1; ?>
		</div>
		<?php
		
		$CI =& get_instance();
		$CI->load->model('Common_model');
		$hotspecconsultings	=	$CI->Common_model->getServices();	
		
		?>
		
		<div class="col-md-12"> 
        <div class="consulting-slider slider-dot slider-nav"> 
		<?php
		if(!empty($hotspecconsultings))
		{
		 foreach($hotspecconsultings as $consulting)
		 {
		
		?>
		
        <div class="item"> 
          <div class="consulting-img"><img src="<?php echo ASSETS.'upload/'.$consulting->image;?>" alt="" class="img-fluid" /> 
          <div class="consulting-img-text none-info"> 
            <h6><?php echo $consulting->name; ?></h6><?php //echo $consulting->role; ?></div> 
			
          <div class="consulting-img-text hover-info"> 
            <h6><?php echo $consulting->name; ?></h6><?php echo $consulting->role; ?> 
            <p><?php echo $consulting->short_description; ?> </p>
			
			<a href="<?php echo BASE_URL ?>services/detail/<?php echo $consulting->id; ?>" class="find-text tc-orange_red bg-sapphire"><span style="font-style: italic;"></span>Read More</a>
			
			</div></div></div> 
			
			<?php
		    }
		}
			?>
      
			
			</div>
		  </div>
		
		</div>
	</section>

	<!--WORKING PROCESS-->
	<section class="what-process-banner">
		<div class="container">
		   <?php echo $page->row_description2; ?>
		</div>
	</section>

	<!--HOTSPEC SOLUTIONS-->
	<section class="what-solution-banner">
		<div class="container">
		 <div class="row">
		    <?php echo $page->row_description3; ?>
			<?php 
			
			$ourworks	=	$CI->Common_model->get_recordlist('ourwork','status','1','id');	
			$categories	=	$CI->Common_model->get_recordlist('ourwork_category','status','1','id');	
			
			?>
			<div class="col-md-12">
			 <form action="<?php echo BASE_URL ?>our-work">
					<div class="flex-box">
					 
						<div class="dashbox-inputgorm">
							<input type="text" name="search" placeholder="Search" required>
							<button><img class="search-btn" src="<?php echo ASSETS;?>frontend/images/search-btn.png" alt=""></button>
						</div>

						<div class="dashbox-inputgorm">
						
							<select name="catid">
								<option value="" selected disabled>All Our Work</option>
								<?php
								  
								  foreach($categories as $cat)
								  {
								  ?>
								  <option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
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
					<div class="work-slider slider-dot slider-nav">
                   <?php
					 foreach($ourworks as $ourwork)
					  {
					   ?>
						<div class="item">
							<div class="work-main-box">

								<div class="work-box">
									<img src="<?php echo ASSETS;?>upload/ourwork/<?php echo $ourwork->image; ?>" alt="" class="img-fluid">
									<div class="work-icon">
										<img src="<?php echo ASSETS;?>upload/ourwork/<?php echo $ourwork->icon; ?>" alt="" class="img-fluid">
									</div>
									<div class="work-text-box">
										<h4><?php echo $ourwork->title; ?></h4>
										<p><?php echo $ourwork->short_description; ?></p>
										<a href="<?php echo BASE_URL; ?>our-work/<?php echo $ourwork->id; ?>" class="read-text tc-orange_red bg-sapphire">Read More<i
												class="fa fa-caret-right"></i></a>
									</div>
									<div class="work-icon-hover">
										<img src="<?php echo ASSETS;?>upload/ourwork/<?php echo $ourwork->icon_bottom; ?>" alt="" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
		
					<?php
					  }
					?>	
					</div>
				</div>
				<div class="col-md-12">
					<div class="learn-link">
						<a href="<?php echo BASE_URL ?>our-work" class="bg-orange_red">SEE MORE WORK</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--HOTSPEC SOLUTIONS-->
	<section class="experience-banner what-we-exp pb-0">
		<div class="container">
		    <?php echo $page->row_description4; ?>
		</div>
	</section>
