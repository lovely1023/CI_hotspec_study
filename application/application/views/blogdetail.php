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

	<!--OUR BLOG-->
	<section class="blog-banner blog-page-banner">
		<div class="container">
			<div class="row">

				<div class="col-md-8">

					<div class="left-blog-page">
					<?php
					
					$blogs_comment=getBlogComment($blog->id);
					
					?>
						<div class="blog-box">
							<div class="blog-img">
								<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
							</div>
							<div class="blog-text-box">
								<div class="blog-text">
									<a href="#" class="tc-sapphire"><?php echo $blog->title; ?></a>
									<div class="comment-views">
										<div class="comment-box">
											<i class="fa fa-comment"></i>
											<span><?php echo count($blogs_comment); ?> comments</span>
										</div>
										<div class="views-box">
											<i class="fa fa-eye"></i>
											<span><?php echo $blog->total_view; ?> views</span>
										</div>
									</div>
									<p><?php echo $blog->description; ?></p>
								</div>
								<div class="time-read">
									<div class="time-box">
										<p>Published : <span> <?php echo date('d-m-Y H:i',strtotime($blog->created_at)); ?> </span></p>
										<p>Author : <span> <?php echo $blog->author; ?> </span></p>
									</div>
									
								</div>
							</div>
							
							<div class="comment-views-section">
		<div class="row">
		<?php
		
		if(!empty($blogs_comment))
		{
			foreach($blogs_comment as $comment)
			{
		
		?>
			<div class="col-12 col-md-3">
				<div class="comment-user-views">
				<a class="user-avtar" href="#">
						<img src="http://wps-dev.com/dev/hotspecdemo/assets/upload/1600600773.png" alt="Profile Avatar">
					</a>
					<div class="info">
						<a href="#"><?php echo $comment->name ?></a>
						<span><?php  echo timeAgo($comment->created_at) ?></span>
					</div>
					
				</div>
			</div>
		
			<div class="col-12 col-md-9">
				<div class="comment-user-detail">
					<p><?php echo $comment->blog_comment ?>.</p>
				</div>
			</div>
			
		<?php
			}	
		
		}
		
		?>		
			
			
			
		</div>
	</div>
							
								<form class="comment-fill" id="blogcommentform" onsubmit="return submitcomment()">
								<input type="hidden"  id="blog_id" name="blog_id" value="<?php echo $blog->id; ?>">
								 
									<div class="contact-form comment-fill-main-box">
										<div class="row">
											<div class="col-md-12">
												<h5 class="comment-reply-title tc-sapphire">Leave a Reply </h5>
												<p class="comment-notes">Your email address will not be published. Required fields are marked<span
														class="required">*</span></p>
											<p id="blogseccMsg"></p>			
												<div class="comment-area">
												<!--	<label>Comment</label> -->
													<textarea class="form-control form-control" id="exampleFormControlTextarea1" name="blog_comment" rows="3" placeholder="Comment" required></textarea>
												</div>
											</div>
											<div class="col-md-6">
												<div class="comment-area">
												<!--	<label>Example textarea</label>-->
													<input type="text" class="form-control" id="firstName" name="name" required placeholder="Name*">
												</div>
											</div>
											<div class="col-md-6">
											<div class="comment-area">
												<!--	<label>Example textarea</label>-->
													<input type="email" class="form-control" id="email" name="email" required placeholder="Email*">
												</div>
											
											</div>
											<div class="col-md-12">
												<div class="comment-area">
												<!--	<label>Example textarea</label>-->
													<input type="url" class="form-control" id="website" name="website"  placeholder="Website">
												</div>
												</div>
												<div class="col-md-12">
												<div class="submit-btn">
													<button type="submit" class="btn bg-orange_red">Post Comment</button>
												</div>
												</div>
										</div>
									</div>
								</form>
						</div>
			
						<div class="learn-link">
							<a href="<?php echo BASE_URL; ?>blog" class="bg-orange_red">BACK</a>
						</div>
						
					</div>
					

				</div>
<script>
function submitcomment()
		{
			$.ajax({
			type : 'post',
			url  : '<?php echo BASE_URL;?>home/submitBlogComment',
			data : $("#blogcommentform").serialize(),
			}).done(function(msg){
				$('#blogcommentform')[0].reset();
				$("#blogseccMsg").html('<span style="color:green;">Successfully submitted your comment.</span>');
				
			});
			return false;
			
		}
</script>				

				<div class="col-md-4">
					<div class="right-blog">
						<div class="row mx-0">

							<div class="col-md-12 p-0">
								<div class="blog-form">
									<form action="<?php echo BASE_URL?>blog">
										<div class="row">
											<div class="col-md-12">
												<div class="select-search">
													<h4 class="tc-sapphire">search</h4>
												</div>
											</div>

											<div class="col-md-12">
												<input type="text" name="search" id="search" value="<?php echo $_REQUEST['search']; ?>" class="form-control"
													placeholder="Enter your search content">
											</div>

											<div class="col-md-12">
												<div class="select-control">
													<select name="category" id="category">
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
								<div class="post-slider-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Popular Posts</h4>
									</div>

									<div class="post-slider slider-nav">
                                       <?php 
									   foreach($popular_blogs as $blog)
									   {
									   ?>
										<div class="item">
											<div class="row mx-0">

												<div class="col-md-12 px-0">
													<div class="post-img">
														<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
													</div>
												</div>

												<div class="col-md-12 px-0">
													<div class="post-box">
														<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="tc-sapphire"><?php echo $blog->title; ?></a>
														<div class="post-read-box">
															<div class="post-comment-views">
																<div class="post-comment">
																	<i class="fa fa-comment"></i>
																	<span><?php echo count(getBlogComment($blog->id)); ?>  comments</span>
																</div>
																<div class="post-views">
																	<i class="fa fa-eye"></i>
																	<span><?php echo $blog->total_view; ?> views</span>
																</div>
															</div>
															<div class="post-read">
																<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="bg-orange_red">Read More<i
																		class="fa fa-caret-right"></i></a>
															</div>
														</div>
														
														<?php /*?><div class="post-read-box justify-content-end">
															<div class="post-read">
																<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="bg-orange_red">Read More<i
																		class="fa fa-caret-right"></i></a>
															</div>
														</div><?php */?>
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

							<div class="col-md-12 p-0">
								<div class="post-slider-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Recent Posts</h4>
									</div>

									<div class="post-slider slider-nav">
                                        <?php 
									   foreach($recent_blogs as $blog)
									   {
									   ?>
										<div class="item">
											<div class="row mx-0">

												<div class="col-md-12 px-0">
													<div class="post-img">
														<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
													</div>
												</div>

												<div class="col-md-12 px-0">
													<div class="post-box">
														<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="tc-sapphire"><?php echo $blog->title; ?></a>
														<div class="post-read-box">
															<div class="post-comment-views">
																<div class="post-comment">
																	<i class="fa fa-comment"></i>
																	<span><?php echo count(getBlogComment($blog->id)); ?> comments</span>
																</div>
																<div class="post-views">
																	<i class="fa fa-eye"></i>
																	<span><?php echo $blog->total_view; ?> views</span>
																</div>
															</div>
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

							<div class="col-md-12 p-0">
								<div class="post-slider-box">

									<div class="post-title">
										<h4 class="tc-sapphire">Video Posts</h4>
									</div>

									<div class="post-slider slider-nav">
                                      <?php 
									   foreach($video_blogs as $blog)
									   {
									   ?>
										<div class="item">
											<div class="row mx-0">

												<div class="col-md-12 px-0">
													<div class="post-img">
														<img src="<?php echo ASSETS;?>upload/blog/<?php echo $blog->image; ?>" alt="" class="img-fluid">
													</div>
												</div>

												<div class="col-md-12 px-0">
													<div class="post-box">
														<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="tc-sapphire"><?php echo $blog->title; ?></a>
														<div class="post-read-box">
															<div class="post-comment-views">
																<div class="post-comment">
																	<i class="fa fa-comment"></i>
																	<span><?php echo count(getBlogComment($blog->id)); ?> comments</span>
																</div>
																<div class="post-views">
																	<i class="fa fa-eye"></i>
																	<span><?php echo $blog->total_view; ?> views</span>
																</div>
															</div>
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
