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

	<!--OUR NEWS-->
	<section class="blog-banner news-page-banner">
		<div class="container">
			<div class="row">

				<div class="col-md-8">

					<div class="">
						<div class="row mx-0">
						
						  <div class="col-md-12 px-0">
							<div class="news-box border-0 py-0 mb-0 news-top-box inner-news">
								<div class="row">
									<div class="col-md-12">
										<div class="news-img">
											<a href="">
												<img src="<?php echo ASSETS;?>upload/news/<?php echo $news->image; ?>" alt="" class="img-fluid">
											</a>
										</div>
									</div>
									<div class="col-md-12 pl-0">
										<div class="news-text-box">
											<div class="news-text">
												<h2 class="tc-sapphire"><?php echo $news->title; ?></h2>
												<?php echo $news->description; ?>
											</div>
											<div class="news-publish-box">
												<div class="news-publish">
													<p>Published : <span> <?php echo date('d-m-Y H:i',strtotime($news->created_at)); ?> </span></p>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							

							
						</div>
						<div class="learn-link">
							<a href="http://wps-dev.com/dev/hotspecdemo/news.html" class="bg-orange_red">BACK</a>
						</div>
					</div>

				</div>

				<div class="col-md-4">
					<div class="right-blog">
						<div class="row mx-0">

							<div class="col-md-12 p-0">
								<div class="blog-form">
									<form>
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
											<a href="<?php echo $contact->linkedin_link; ?>" class="tc-sapphire" target="_blank">
											<i class="fa fa-linkedin"></i>
										</a>
										<a href="<?php echo $contact->facebook_link; ?>" class="tc-sapphire" target="_blank">
											<i class="fa fa-facebook"></i>
										</a>
										<a href="<?php echo $contact->twitter_link; ?>" class="tc-sapphire" target="_blank">
											<i class="fa fa-twitter"></i>
										</a>
										<a href="<?php echo $contact->google_link; ?>" class="tc-sapphire" target="_blank">
											<i class="fa fa-google-plus"></i>
										</a>
										<a href="<?php echo $contact->instagram_link; ?>" class="tc-sapphire" target="_blank">
											<i class="fa fa-instagram"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="col-md-12 p-0">
								<div class="post-slider-box categorie-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Categories</h4>
									</div>

									<div class="categorie-table">
										<table class="table">
										<?php
														  
											  foreach($categories as $cat)
											  {
											  ?>
											  <tr>
												<td>
													<a href="<?php echo BASE_URL ?>news/?cat=<?php echo $cat->id; ?>"><?php echo $cat->name; ?></a>
												</td>
												<td>
													<a href="<?php echo BASE_URL ?>news/?cat=<?php echo $cat->id; ?>"><?php echo get_category_count($cat->id); ?></a>
												</td>
											</tr>
										
											<?php
											  }
											?>											
											
										</table>
									</div>
								</div>
							</div>

							<div class="col-md-12 p-0">
								<div class="post-slider-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Popular Posts</h4>
									</div>

									<div class="post-slider slider-nav">
                                       <?php 
									   foreach($popular_newss as $news)
									   {
									   ?>
										<div class="item">
											<div class="row mx-0">

												<div class="col-md-12 px-0">
													<div class="post-img">
														<img src="<?php echo ASSETS;?>upload/news/<?php echo $news->image; ?>" alt="" class="img-fluid">
													</div>
												</div>

												<div class="col-md-12 px-0">
													<div class="post-box">
														<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="tc-sapphire"><?php echo $news->title; ?></a>
														<div class="post-read-box justify-content-end">
															<div class="post-read">
																<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="bg-orange_red">Read More<i
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

	<!--MOST VIEWED-->
	<section class="article-banner">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="article-heading">
						<h2 class="tc-sapphire"> MOST <span class="tc-orange_red"> VIEWED </span> </h2>
					</div>
				</div>
               <?php 
			   foreach($most_views_newss as $news)
			   {
			   ?>
				<div class="col-lg-4 col-md-6 col-sm-6 d-flex">
					<div class="article-box">
						<div class="simple-news-text">article</div>
						<div class="article-img">
							<img src="<?php echo ASSETS;?>upload/news/<?php echo $news->image; ?>" alt="">
						</div>
						<div class="article-text">
							<a href="<?php echo BASE_URL ?>newsdetail/<?php echo $news->id; ?>" class="tc-sapphire">
								<h4><?php echo $news->title; ?>…</h4>
							</a>
							<p class="tc-orange_red">
							<?php echo date('F d, Y',strtotime($news->created_at)); ?>
							</p>
						</div>
					</div>
				</div>
                <?php
			   }
				?>
				
			</div>
		</div>
	</section>
