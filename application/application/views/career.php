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

<section class="vacancie-banner">
		<div class="container">
			<div class="row">
			<?php if($this->session->flashdata('success')): ?>
					<script>
					$(document).ready(function(){
 	                    $('#careermodal').modal('show');
                   });
				
					</script>
				<?php endif; ?>
				<?php if($this->session->flashdata('error')): ?>
					<div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
				<?php endif; ?>
				<?php echo $page->description; ?>

				<div class="col-md-12">
					<div class="dashbox-inputgorm programme-input">
					   <form>
						<input type="text" name="search" placeholder="search vacancies" value="<?php if(!empty($_REQUEST['search'])){echo$_REQUEST['search']; } ?>" required>
						<button type="submit"><img class="search-btn" src="<?php echo ASSETS;?>frontend/images/search-btn.png" alt=""></button>
					  </form>
					</div>
				</div>
               <?php
			   
			   if(!empty($careers))
			   {
			     foreach($careers as $career)
				 {
			   ?>
				<div class="col-lg-4 col-md-6 col-sm-6 d-flex">
					<div class="vacancie-box">
						<div class="vacancie-title">
							<h4 class="tc-sapphire"><?php echo $career->title; ?></h4>
							<div class="vacancie-icon-box">
								<span><img src="<?php echo ASSETS;?>frontend/images/location.png" alt="" class="img-fluid"><?php echo $career->work_location; ?></span>
								<span><img src="<?php echo ASSETS;?>frontend/images/user-o.png" alt="" class="img-fluid"> <?php echo $career->work_type; ?></span>
							</div>
						</div>
						<p><?php echo $career->short_description; ?></p>
						<div class="vacancie-btn">
							<a href="<?php echo BASE_URL; ?>apply-now?id=<?php echo $career->id;  ?>" class="bg-orange_red" data-toggle="modal" data-target="#aplly-now-modal">APPLY NOW</a>
							<a href="<?php echo BASE_URL; ?>careers-detail/<?php echo $career->id;  ?>" class="bg-orange_red">SEE DETAILS</a>
						</div>
					</div>
				</div>
				<?php
			   }
			   }else{
				?>

				<div class="col-lg-12 col-md-12 col-sm-12 d-flex">
					<p>No List Found</p>
				</div>
				<?php
			     }
				?>		

			</div>
		</div>
	</section>