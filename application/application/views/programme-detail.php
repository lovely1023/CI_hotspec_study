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
 <section class="stories-banner mobile-story">
        <div class="container">
            <div class="row">
			
			
			<div class="col-md-12"> 
  <div class="stories-heading"> 
  <?php
  $title=explode(' ',$programme->title);
  ?>
    <h2 class="tc-sapphire" align="center"> <?php echo $title[0] ?> <span class="tc-orange_red"> <?php echo $title[1] ?> </span></h2></div></div> 
   <div class="col-lg-8"> 
  <div class="career-tabs"> 
    <div class="row"> 
	<?php  
		
		$tabdescription= unserialize($programme->tabdescription);
		$tabtitle=array();
		$tabdesc=array();
		
		if(!empty($tabdescription))
		{
			$tabtitle=$tabdescription['tabtitle'];
			$tabdesc=$tabdescription['tabdescription'];
		}
       
		?>
      <div class="nav flex-column nav-pills col-lg-4 id=" v-pills-tab"="" role="tablist" aria-orientation="vertical">
	  <?php
	     $class='active';
				if(!empty($tabtitle))
				{
					for($i=0;$i<count($tabtitle);$i++)
					{	
				      if(!empty($tabtitle[$i]))
					  {
				?>
	  <a class="nav-link <?php echo $class; ?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home<?php echo $i; ?>" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $tabtitle[$i];?><span style="font-style: italic;"></span></a>
	     <?php
		 $class='';
					  }
				   }
				}
		 ?>
	  
	  </div> 
      <div class="tab-content col-lg-8 career-life" id="v-pills-tabContent"> 
       
		 <?php
		  $class='show active';
				if(!empty($tabtitle))
				{
					for($i=0;$i<count($tabtitle);$i++)
					{	
				      if(!empty($tabtitle[$i]))
					  {
				?>
			<div class="tab-pane fade <?php echo $class;?>" id="v-pills-home<?php echo $i; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"> 
          <h5><?php echo $tabtitle[$i];?></h5>
          <p class="career-fmd"><?php echo $tabdesc[$i]; ?></p></div> 
		   <?php
		   $class='';
		      
					  }
				   }
				}
		 ?>
		  
		  </div>
		  </div>
		  </div> 
		  
		  
  <div class="career-mobie-accodian career-life"> 
    <div class="col-md-12"> 
      <div id="accordion"> 
	   <?php
				if(!empty($tabtitle))
				{
					for($i=0;$i<count($tabtitle);$i++)
					{	
				      if(!empty($tabtitle[$i]))
					  {
				?>
        <div class="dashbod-tabbox">
		<a class="collapsed card-link" data-toggle="collapse" href="#collapseOne<?php echo $i; ?>"><?php echo $tabtitle[$i];?></a> 
          <div id="collapseOne<?php echo $i; ?>" class="collapse" data-parent="#accordion"> 
            <h5><?php echo $tabtitle[$i];?></h5> 
            <?php echo $tabdesc[$i]; ?>
			
			</div>
			
			</div> 
			
			<?php
					  }
				   }
				}
		 ?>
		  
       
			
			</div></div></div></div>

        <div class="col-lg-4"> 
		<div class="career-devlop"> 
		<?php
					
					$contact=getContact();
					?>
		<h2>Start Your Career Development</h2><a href="#" data-toggle="modal" data-target="#book-a-trainig" class="get-start-prog">Get Started ></a><a href="mailto:<?php echo $contact->email ?>"><?php echo $contact->email ?></a> 
		<p><?php echo $contact->phone ?></p></div>
			   <?php 
				
				echo $programme->description;
				?>
			 <?php
  
  if($programme->training_brochure!='')
  {
  ?>	
	         <a href="<?php echo ASSETS.'upload/'.$programme->training_brochure;?>" target="_blank" class="career-book-now"> DOWNLOAD TRAINING BROCHURE<span style="font-style: italic;"></span></a>
	<?php
	
  }
	?>		 
	   </div>
			
			

			
		   </div>
        </div>
    </section>

    <section class="testimonials-banner" style="background-image: url(<?php echo ASSETS;?>frontend/images/testimonials-group.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-heading">
                        <h1>SUCCESS STORIES AND REVIEWS</h1>
                    </div>
                </div>
				 
		 <div class="col-md-12"> 
			<div class="testimonials-slider slider-dot slider-nav"> 
			<?php
			foreach($testimonials as $testi)
			{
			?>
			  <div class="item"> 
				<div class="testimonials-box"> 
				  <div class="chat-icon"><img src="images/chat.png" alt="" /></div> 
				  <div class="testimonials-text"> 
					<h3 class="tc-orange_red"><?php echo $testi->title; ?></h3> 
					<p><?php echo $testi->description; ?></p></div> 
				  <div class="name-box"> 
					<div class="name-img"><img src="<?php echo ASSETS;?>upload/<?php echo $testi->bottom_image; ?>" alt="" class="img-fluid" /></div>
					<div class="name-text"> 
					  <h5 class="tc-sapphire"><?php echo $testi->user_name; ?></h5> 
					  <p><?php echo $testi->designation; ?></p> 
					  <div class="review-field-rating"> 
						<div class="review-control-vote"> 
						  <input type="radio" name="ratings[13]" id="Rating_13" value="16" class="radio active" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_1_label" aria-required="true" checked="checked" /> 
						  <label class="rating-1" for="Rating_13" id="Rating_1_label"></label> 
						  <input type="radio" name="ratings[13]" id="Rating_23" value="17" class="radio" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_2_label" aria-required="true" checked="checked" /> 
						  <label class="rating-2" for="Rating_23" id="Rating_2_label"></label> 
						  <input type="radio" name="ratings[13]" id="Rating_33" value="18" class="radio" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_3_label" aria-required="true" checked="checked" /> 
						  <label class="rating-3" for="Rating_33" id="Rating_3_label"></label> 
						  <input type="radio" name="ratings[13]" id="Rating_43" value="19" class="radio" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_4_label" aria-required="true" checked="checked" /> 
						  <label class="rating-4" for="Rating_43" id="Rating_4_label"></label> 
						  <input type="radio" name="ratings[13]" id="Rating_53" value="20" class="radio" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_5_label" aria-required="true" /> 
						  <label class="rating-5" for="Rating_53" id="Rating_5_label"></label></div></div></div></div>
						  
				</div>
			  </div> 
			
			<?php
			
			}
			?>
			  
			  </div>
	  </div>
		 
		 </div>
        </div>
    </section>
  <section class="academy-banner ather-programme pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="consulting-content">
                        <h2 class="tc-sapphire">OTHER <span class="tc-orange_red"> PROGRAMMES </span></h2>
                     
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="academy-slider slider-dot slider-nav">
                      <?php
				if(!empty($programes))
				{
				foreach($programes as $programme1)
				{
					if($programme1->title != $programme->title) {
				?>				
				 <div class="item">
                    <div class="programme-box">
					<div class="programme-img">
						<img src="<?php echo ASSETS.'upload/'.$programme1->image;?>"  alt="" class="img-fluid">
					</div>							
					<div class="programme-text">
                            <h4 class="tc-sapphire"><?php echo $programme1->title; ?></h4>
                            <p><?php echo $programme1->short_description; ?></p>
                            </div>
                        <div class="programme-btn">
                            <a href="<?php echo BASE_URL ?>programme/detail/<?php echo $programme1->id; ?>" class="bg-orange_red">read more <i class="fa fa-caret-right"></i></a>
                        </div>	
						
					</div>					
				</div>
				<?php				
				}
			}
				}
				?>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="career-view">
        <a href="<?php echo BASE_URL ?>programme" class="career-programme"> view all programme</a>
    </section>
	