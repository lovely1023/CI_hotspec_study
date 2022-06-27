
	<!--Top banner-->
	<?php
	
	if(!empty($banners))
	{
	?>
	<section class="hero-banner">
    <?php
	
	 foreach($banners as $banner)
	 {
	?>
		<div class="main-hero-banner">
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
	<!--EXPERIENCE OUR EXCELLENT-->
	<?php 
	
	if(!empty($row1))
	{
	?>
	<section class="experience-banner pb-0">
		<div class="container">
			<?php
			echo $row1->row_content;
			?>
		</div>
	</section>
	<?php
		}
	?>
	<!--BIG DATA AND SOLUTIONS AGENCY-->
	<?php 
	
	if(!empty($row2))
	{
	?>
	<section class="solution-banner pb-3">
		<div class="container">
		<?php
			echo $row2->row_content;
			?>
		</div>
	</section>
<?php
	}
?>
	<!--HOTSPEC CONSULTING-->
	<?php 
	
	if(!empty($row3))
	{
	?>
	<section class="consulting-banner pb-0">
		<div class="container">
		<div class="row">
		<?php
			echo $row3->row_content;
		 ?>
		 
		<div class="col-md-12"> 
        <div class="consulting-slider slider-dot slider-nav"> 
		<?php
		if(!empty($hotspecconsultings))
		{
		 foreach($hotspecconsultings as $consulting)
		 {
		
		?>
        <div class="item d-flex"> 
          <div class="consulting-img"><img src="<?php echo ASSETS.'upload/'.$consulting->image;?>" alt="" class="img-fluid" /> 
          <div class="consulting-img-text none-info"> 
            <h6><?php echo $consulting->name; ?></h6><?php //echo $consulting->role; ?></div> 
			
          <div class="consulting-img-text hover-info"> 
            <h6><?php echo $consulting->name; ?></h6><?php //echo $consulting->role; ?> 
            <p><?php echo $consulting->short_descpription; ?> </p>
			
			<a href="<?php echo BASE_URL ?>services/detail/<?php echo $consulting->id; ?>" class="find-text tc-orange_red bg-sapphire"><span style="font-style: italic;"></span>Read More</a>
			
			</div></div></div> 
			
			<?php
		    }
		}
			?>
      
			
			</div>
		  </div>
		 
		</div>
		</div>
	</section>
    <?php
	
	}
	?>
	<!--REASONS TO CHOOSE US-->
	<?php 
	
	if(!empty($row4))
	{
	?>
	<section class="reasons-banner pt-4">
		<div class="container">
		<?php
			echo $row4->row_content;
		 ?>
		</div>
	</section>
<?php

	}
?>
	<!--HOTSPEC ACADEMY-->
	<?php 
	
	if(!empty($row5))
	{
	?>
	<section class="academy-banner pt-0">
		<div class="container">
		<div class="row">
		<?php
			echo $row5->row_content;
		 ?>
		</div>
		 <div class="col-md-12"> 
    <div class="academy-slider slider-dot slider-nav"> 
	<?php
		if(!empty($programmes))
		{
		 foreach($programmes as $program)
		 {
		
		?>
      <div class="item d-flex"> 
        <div class="academy-box"><a href="<?php echo BASE_URL ?>programme/detail/<?php echo $program->id; ?>"> 
            <div class="academy-img"><img src="<?php echo ASSETS.'upload/'.$program->image;?>" alt="" class="img-fluid" /></div> 
            <div class="academy-text"> 
              <h5 class="tc-sapphire"><?php echo $program->title;?> </h5> 
              <p><?php echo strip_tags($program->short_description);?></p></div></a></div></div> 
    <?php
		    }
		}
			?>
			  
			</div>
		  </div>
		</div>
	</section>
<?php
	}
?>
	<!--SKILLS COVERED-->
	<?php 
	
	if(!empty($row6))
	{
	?>
	<section class="skills-banner pt-2">
		<div class="container">
		<div class="row">
		<?php
			echo $row6->row_content;
		 ?>
		 
		 
				<div class="col-md-12">
					<div class="skills-slider slider-dot slider-nav">
                  <?php
						
					foreach($skillscovereds as $skillscovered)
					{
					?>	
						<div class="item d-flex">
							<div class="skills-box">
								<img src="<?php echo ASSETS.'upload/'.$skillscovered->image;?>" alt="" class="img-fluid">
								<h6 class="tc-sapphire"><?php echo $skillscovered->title; ?></h6>
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
<?php
	}
?>
	<!--SOFTWARE AND TOOLS-->
	<?php 
	
	if(!empty($row7))
	{
	?>
	<section class="software-banner pt-3">
		<div class="container">
		<?php
			echo $row7->row_content;
		 ?>
		</div>
	</section>
<?php

	}
?>
	<!--TARGET GROUP-->
	<?php 
	
	if(!empty($row8))
	{
	?>
	<section class="target-banner pt-0">
		<div class="container">
		<div class="row">
		<?php
			echo $row8->row_content;
		 ?>
		 <div class="col-md-12">
					<div class="target-slider slider-nav">
					
					 <?php
						
					foreach($targetgroup as $target)
					{
					?>	
						<div class="item d-flex">
							<div class="target-box">
								<div class="target-img">
									<img src="<?php echo ASSETS.'upload/'.$target->image;?>" alt="" class="img-fluid">
								</div>
								<div class="target-text">
									<h6 class="tc-sapphire"><?php echo $target->title;?></h6>
									<p><?php echo strip_tags($target->description);?>
									</p>
								</div>
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
<?php
	}
?>
	<!--CAREER PROSPECTS-->
	<?php 
	
	if(!empty($row9))
	{
	?>
	<section class="career-banner pt-0">
		<div class="container">
		<?php
			echo $row9->row_content;
		 ?>
		</div>
	</section>
<?php

	}
?>
	<!--HOTSPEC ACADEMY LEARNING EXPERIENCE-->
	<?php 
	
	if(!empty($row10))
	{
	?>
	<section class="learning-banner pt-0 pb-3">
		<div class="container">
		<div class="row">
		<?php
			echo $row10->row_content;
		 ?>
		 
		 
				<div class="col-md-12">
					<div class="learning-slider slider-dot slider-nav">
                 <?php
						
					foreach($learningexperience as $learningexper)
					{
					?>	
						<div class="item d-flex">
							<div class="learning-box">
								<div class="learning-img">
									<img src="<?php echo ASSETS.'upload/'.$learningexper->image;?>" alt="" class="img-fluid">
								</div>
								<div class="learning-text">
									<h6 class="tc-sapphire"><?php echo $learningexper->title;?></h6>
									<p><?php echo strip_tags($learningexper->description);?>
									</p>
								</div>
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
<?php

	}
?>
	<!--OUR GROUP VALUES-->
	<?php 
	
	if(!empty($row11))
	{
	?>
	<section class="group-banner pt-4 pb-3">
		<div class="container">
		<div class="row">
		<?php
			echo $row11->row_content;
		 ?>
		 
		   <div class="col-md-12">
					<div class="group-slider slider-dot slider-nav">
                      <?php
						
					foreach($ourgroupvalues as $ourgroupvalue)
					{
					?>	
						<div class="item d-flex">
							<div class="group-box">
								<div class="group-img">
									<img src="<?php echo ASSETS.'upload/'.$ourgroupvalue->image;?>" alt="" class="img-fluid">
								</div>
								<div class="group-text">
									<h6 class="tc-sapphire"><?php echo $ourgroupvalue->title;?></h6>
									<p><?php echo strip_tags($ourgroupvalue->description);?></p>
								</div>
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
<?php
	}
?>
	<!--OUR WORK-->
	<?php 
	
	if(!empty($row12))
	{
	?>
	<section class="work-banner pt-4">
		<div class="container">
		<div class="row">
		<?php
			echo $row12->row_content;
		 ?>
		   
				<div class="col-md-12">
					<div class="work-slider slider-dot slider-nav">
                     <?php
					 
					 foreach($ourworks as $work)
					 {
					 ?>
						<div class="item d-flex">
							<div class="work-main-box">

								<div class="work-box">
									<img src="<?php echo ASSETS.'upload/ourwork/'.$work->image;?>" alt="" class="img-fluid">
									<div class="work-icon">
										<img src="<?php echo ASSETS.'upload/ourwork/'.$work->icon;?>" alt="" class="img-fluid">
									</div>
									<div class="work-text-box">
										<h4><?php echo $work->title; ?></h4>
										<p><?php echo $work->short_description; ?></p>
										<a href="<?php echo BASE_URL ?>our-work/<?php echo $work->id; ?>" class="read-text tc-orange_red bg-sapphire">Read
											More<i class="fa fa-caret-right"></i></a>
									</div>
									<div class="work-icon-hover">
										<img src="<?php echo ASSETS.'upload/ourwork/'.$work->icon_bottom;?>" alt="" class="img-fluid">
									</div>
								</div>
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
<?php
	}
?>
	<!--MEET OUR TEAM-->
	<?php 
	
	if(!empty($row13))
	{
	?>
	<section class="expert-team-banner pt-0">
		<div class="container">
		 <div class="row"> 
		<?php
			echo $row13->row_content;
		 ?>
		 
   <div class="col-md-12"> 
    <div class="expert-team-slider slider-dot slider-nav"> 
		<?php
				
			foreach($meetourteams as $ourteam)
			{
			?>	
        <div class="item d-flex"> 
        <div class="expert-team-box"><img id="profileimg<?php echo $ourteam->id; ?>" src="<?php echo ASSETS.'upload/'.$ourteam->image;?>" alt="" class="img-fluid" /> 
          <div class="expert-name"> 
            <h5 class="tc-sapphire" id="name<?php echo $ourteam->id; ?>"><?php echo $ourteam->name; ?></h5> 
            <p class="tc-sapphire" id="role<?php echo $ourteam->id; ?>"><?php echo $ourteam->role; ?></p></div> 
          <div class="expert-link"><a href="javascript:void(0)" onclick="showdetail(<?php echo $ourteam->id; ?>)" class="read-profile bg-orange_red" data-toggle="modal"
								data-target="#exampleModalCenter" class="read-profile bg-orange_red">READ PROFILE</a></div></div>
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
  <?php
    }
  
  ?>
  <?php 
	
	if(!empty($row14))
	{
	?>
  <!--OUR ASSOCIATES-->
	<section class="associates-banner">
		<div class="container">
         <?php
			echo $row19->row_content;
		 ?>
    	</div>
	</section>
  <?php
    }
  
  ?>
	<!--WORKING PROCESS-->
	<?php 
	
	if(!empty($row14))
	{
	?>
	<section class="process-banner">
		<div class="container">
		<?php
			echo $row14->row_content;
		 ?>
		</div>
	</section>
  <?php
    }
  
  ?>
	
	<!--OUR BLOG-->
	<?php 
	
	if(!empty($row15))
	{
	?>
	<section class="blog-banner">
		<div class="container">
		
		 <div class="row">
         <?php
			echo $row15->row_content;
		 ?>
		 
				<div class="col-md-8">

					<div class="left-blog-page">
					<?php
					 foreach($blogs as $blog)
					  {
					   ?>
						<div class="blog-box">
							<div class="blog-img">
								<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
							</div>
							<div class="blog-text-box">
								<div class="blog-text">
									<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="tc-sapphire"><?php echo $blog->title; ?></a>
									<div class="comment-views">
										<div class="comment-box">
											<i class="fa fa-comment"></i>
											<span><?php echo count(getBlogComment($blog->id)); ?> comments</span></span>
										</div>
										<div class="views-box">
											<i class="fa fa-eye"></i>
											<span><?php echo $blog->total_view; ?> views</span>
										</div>
									</div>
									<p><?php echo $blog->short_description; ?></p>
								</div>
								<div class="time-read">
									<div class="time-box">
										<p>Published : <span> <?php echo date('d-m-Y H:i',strtotime($blog->created_at)); ?> </span></p>
										<p>Author : <span> <?php echo $blog->author; ?> </span></p>
									</div>
									<div class="read-box">
										<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="bg-orange_red">Read More<i class="fa fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<?php
						 break;
						  }
						?>
						
					</div>

					

				</div>

				<div class="col-md-4">
					<div class="right-blog">
						<div class="row mx-0">

							<div class="col-md-12 p-0">
								<div class="blog-form">
									<form action="<?php echo BASE_URL ?>blog.html">
										<div class="row">
											<div class="col-md-12">
												<div class="select-search">
													<h4 class="tc-sapphire">search</h4>
												</div>
											</div>

											<div class="col-md-12">
												<input type="text" name="search" id="search" class="form-control"
													placeholder="Enter your search content">
											</div>

											<div class="col-md-12">
												<div class="select-control">
													<select  name="category" id="category">
														<option value="" selected disabled>All Categories</option>
														<?php
														  
														  foreach($blogcategories as $cat)
														  {
														  ?>
														<option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
														<?php
														  }
														?>
													</select>
												</div>
											</div>

											<div class="col-md-12">
												<div class="search-btn">
													<button class="btn bg-orange_red">
														<i class="fa fa-search" aria-hidden="true"></i>Search
													</button>
												</div>
											</div>

										</div>
									</form>
								</div>
							</div>

						

							<div class="col-md-12 p-0">
								<div class="post-slider-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Popular Posts</h4>
									</div>

									<div class="post-slider slider-nav">
                                       <?php 
									   foreach($popular_blogs as $blog)
									   {
									   ?>
										<div class="item d-flex">
											<div class="row mx-0">

												<div class="col-md-12 px-0">
													<div class="post-img">
														<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
													</div>
												</div>

												<div class="col-md-12 px-0">
													<div class="post-box">
														<a href="#" class="tc-sapphire"><?php echo $blog->title; ?></a>
														<div class="post-read-box justify-content-end">
														<div class="post-comment-views">
													
													<div class="post-comment"><span style="font-style: italic;"></span><?php echo count(getBlogComment($blog->id)); ?> comments</span></div>
													
													<div class="post-views"><span style="font-style: italic;"></span><?php echo $blog->total_view; ?> views</div></div>
															<div class="post-read">
																<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="bg-orange_red">Read More<i
																		class="fa fa-caret-right"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php
										
									   }
										?>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
  <?php
    }
  
  ?>
  
	<!--OUR NEWS-->
	<?php 
	
	if(!empty($row16))
	{
	?>
	<section class="news-banner">
		<div class="container">
		<div class="row">
		<?php
			echo $row16->row_content;
		 ?>
		 <div class="col-md-8">		
		  <div class="news-main-box">			
			<div class="row mx-0">				
				<?php
						 if(!empty($newss))
						 {							 
						  foreach($newss as $news)
						  {
						  ?>
							<div class="col-md-12 px-0">
								<div class="news-box mb-0 news-top-box">
									<div class="row">
										<div class="col-md-5">
											<div class="news-img">
												<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>">
													<img src="<?php echo ASSETS;?>upload/news/<?php echo $news->image; ?>" alt="" class="img-fluid">
												</a>
											</div>
										</div>
										<div class="col-md-7 pl-0">
											<div class="news-text-box">
												<div class="news-text">
													<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="tc-sapphire">
														<h2><?php echo $news->title; ?></h2>
													</a>
													<?php echo $news->short_description; ?>
												</div>
												<div class="news-publish-box">
													<div class="news-publish">
														<p>Published : <span> <span> <?php echo date('d-m-Y H:i',strtotime($news->created_at)); ?> </span></p>
													</div>
													<div class="news-publish-read">
														<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="bg-orange_red">Read More<i
																class="fa fa-caret-right"></i></a>
													</div>
												</div>
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
			
			<div class="col-md-4">
					<div class="right-blog">
						<div class="row mx-0">

							<div class="col-md-12 p-0">
								<div class="blog-form">
									<form action="<?php echo BASE_URL ?>news.html">
										<div class="row">
											<div class="col-md-12">
												<div class="select-search">
													<h4 class="tc-sapphire">search</h4>
												</div>
											</div>

											<div class="col-md-12">
												<input type="text" name="search" class="form-control"
													placeholder="Enter your search content" required>
											</div>

											<div class="col-md-12">
												<div class="select-control">
													<select name="cat" id="cat">
														<option value="" selected disabled>All Categories</option>
														 <?php
														  
														  foreach($categories as $cat)
														  {
														  ?>
														<option value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
														<?php
														  }
														?>
														
													</select>
												</div>
											</div>

											<div class="col-md-12">
												<div class="search-btn">
													<button class="btn bg-orange_red">
														<i class="fa fa-search" aria-hidden="true"></i>Search
													</button>
												</div>
											</div>

										</div>
									</form>
								</div>
							</div>
                  <?php
					
					$contact=getContact();
					?>
							<div class="col-md-12 p-0">
								<div class="follow-news">
									<div class="follow-heading">
										<h3 class="tc-sapphire">Follow us</h3>
									</div>
									<div class="follow-link">
										<a href="<?php echo $contact->linkedin_link; ?>" class="tc-sapphire">
											<i class="fa fa-linkedin"></i>
										</a>
										<a href="<?php echo $contact->facebook_link; ?>" class="tc-sapphire">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="<?php echo $contact->twitter_link; ?>" class="tc-sapphire">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="<?php echo $contact->google_link; ?>" class="tc-sapphire">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="<?php echo $contact->instagram_link; ?>" class="tc-sapphire">
											<i class="fa fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>
					</div>
            </div>
         </div>
		</div>
		</div>
	</section>
  <?php
    }
  
  ?>
  <!--OUR CLIENT TESTIMONIALS-->
  <?php 
	
	if(!empty($row17))
	{
	?>
	<section class="testimonials-banner" style="background-image: url(<?php echo ASSETS;?>frontend/images/testimonials-group.png);">
		<div class="container">
		<div class="row">
		<?php
			echo $row17->row_content;
		 ?>
		 
		 <div class="col-md-12"> 
			<div class="testimonials-slider slider-dot slider-nav"> 
			<?php
			foreach($testimonials as $testi)
			{
			?>
			  <div class="item d-flex"> 
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
						<?php
						
						for($i=1;$i<=$testi->star;$i++)
						{
						
						?>
						  <input type="radio" name="ratings[<?php echo $i; ?>]" id="Rating_<?php echo $i; ?>" value="<?php echo $i; ?>" class="radio active" data-validate="{'rating-required':true}" aria-labelledby="Rating_rating_label Rating_1_label" aria-required="true" checked="checked" /> 
						  <label class="rating-<?php echo $i; ?>" for="Rating_13" id="Rating_<?php echo $i; ?>_label"></label> 
						  <?php
						  
						}
						  ?>					
						  
						  </div></div></div></div>
						  
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
  <?php
    }
  
  ?>

	
	<!--LOCATIONS-->
	<?php 
	
	if(!empty($row18))
	{
	?>
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
						<div class="item d-flex">
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
  <?php
    }
  
  ?>	
	<!--CONTACT US-->
	<section class="contact-banner pt-0">
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
<div class="modal fade profile-modal" id="exampleModalCenter" tabindex="-2" role="dialog"
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