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

	<!--WHO WE ARE-->
	<section class="we-solution-banner" id="we-solution-banner">
		<div class="container">
		    <?php echo $page->row_description1; ?>
		</div>
	</section>

	<!--REASONS TO CHOOSE US-->
	<section class="reasons-banner">
		<div class="container">		
			<?php echo $page->row_description2; ?>
		</div>
	</section>

	<!--MEET OUR TEAM-->
	<section class="expert-team-banner pt-0">
		<div class="container">
		<div class="row">
		<?php echo $page->row_description3; ?>
		<?php
		$CI =& get_instance();
		$CI->load->model('Common_model');
		$meetourteams =	$CI->Common_model->getMeetourteams();
		
		?>
		
		<div class="col-md-12"> 
    <div class="expert-team-slider slider-dot slider-nav"> 
		<?php
				
			foreach($meetourteams as $ourteam)
			{
			?>	
        <div class="item"> 
        <div class="expert-team-box"><img id="profileimg<?php echo $ourteam->id; ?>" src="<?php echo ASSETS.'upload/'.$ourteam->image;?>" alt="" class="img-fluid" /> 
          <div class="expert-name"> 
            <h5 class="tc-sapphire" id="name<?php echo $ourteam->id; ?>"><?php echo $ourteam->name; ?></h5> 
            <p class="tc-sapphire" id="role<?php echo $ourteam->id; ?>"><?php echo $ourteam->role; ?></p></div> 
          <div class="expert-link"><a href="javascript:void(0)" onclick="showdetail(<?php echo $ourteam->id; ?>)" class="read-profile bg-orange_red" data-toggle="modal"
								data-target="#exampleModalCenter1" class="read-profile bg-orange_red">READ PROFILE</a></div></div>
		<div style="display:none" id="description<?php echo $ourteam->id; ?>"><?php echo $ourteam->description; ?></div>
					<input type="hidden" id="linkdin<?php echo $ourteam->id; ?>" value="<?php echo $ourteam->linkdin; ?>"/>
					<input type="hidden" id="location<?php echo $ourteam->id; ?>" value="<?php echo $ourteam->location; ?>"/>						
		</div> 
     <?php
	 
		}
	 ?>
     
		  
		  </div>
		  
		</div>
		  
		</div>
		
		</div>
	</section>

	<!--LOCATIONS-->
	<section class="location-banner who-location-panel pt-0">
		<div class="container">
		<div class="row">
		<?php echo $page->row_description4; ?>
		<?php
		
		$locations =	$CI->Common_model->getLocation();
		
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
	<section class="contact-banner we-contact-banner pt-3">
		<?php
         $this->load->view('contact');
      ?>
		
	</section>

	
	<script>
function showdetail(id)
{
	$('#name').html($('#name'+id).html());
	$('#role').html($('#role'+id).html());
	$('#location').html('Location: '+$('#location'+id).val());
	$('#description').html($('#description'+id).html());
	$('#profileimg').attr('src',$('#profileimg'+id).attr('src'));
	$('#linkdin').attr('href',$('#linkdin'+id).val());
}
</script>	

<div class="modal fade profile-modal" id="exampleModalCenter1" tabindex="-2" role="dialog"
		aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="profine-midil-box">
						<div class="expert-team-box">
							<img id="profileimg" src="images/Joe2.jpg" alt="" class="img-fluid">
						</div>
						<a href="" id="linkdin" class="profile-icon-in" target="_blank"><i
								class="fa fa-linkedin" aria-hidden="true"></i></a>

						<p class="adrian" id="name"></p>
						<p class="trainer" id="role"></p>
						<p class="trainer" id="location">Location: United Kingdom</p>
						<div id="description">
					
						</div>	
					</div>
				</div>

			</div>
		</div>
	</div>