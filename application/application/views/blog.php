<!--Top banner-->
<?php

if(empty(get_cookie('blogsubscribe')
)) {
	
?>
<div class="popup">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Subscribe here</h5>
				<a href='' class='close'><span aria-hidden="true">×</span></a>
			</div>
			<div class="modal-body">
			    <div class="subcribemsg" style="color:green;display:none;">
			    <p>Thank you for subscribing to our Blog!</p> 
                <p>Have a great day!</p>
			   </div>
				<form method="POST" id="subscribeform" onsubmit="return subscribe();">
				 <input type ="hidden" name="page" value="Blog"/>
					<div class="row">
						<div class="col-md-12">
							<input type="email" class="form-control" id="subscribeemail" name="email" placeholder="Enter your Email" required>
						</div>
						<div class="learn-link">
							<button type="submit"  class="bg-orange_red">Subscribe Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
}
?>	
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
					if(count($blogs))
					{
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
											<span><?php echo count(getBlogComment($blog->id)); ?>  comments</span>
										</div>
										<div class="views-box">
											<i class="fa fa-eye"></i>
											<span><?php echo $blog->total_view; ?>  views</span>
										</div>
									</div>
									<p><?php echo strip_tags($blog->short_description); ?></p>
								</div>
								<div class="time-read">
									<div class="time-box">
										<p>Published : <span> <?php echo date('d-m-Y H:i',strtotime($blog->created_at)); ?>  </span></p>
										<p>Author : <span> <?php echo $blog->author; ?> </span></p>
									</div>
									<div class="read-box">
										<a href="<?php echo BASE_URL ?>blogdetail/<?php echo $blog->id; ?>" class="bg-orange_red">Read More<i class="fa fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>

						<?php
						
						  }
					}else
					{
						?>
						
						<div class="blog-box">Now blog found</div>
						<?php
						
					}
						?>
						
					</div>

					<div class="page-box" style="display:none;">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" tabindex="-1">
									<i class="fa fa-angle-double-left"></i> Prev
								</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">1</a>
							</li>
							<li class="page-item">
								<a class="page-link active" href="#">2</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">3</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">4</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">5</a>
							</li>
							<li class="page-item">
								<a class="page-link" href="#">
									Next <i class="fa fa-angle-double-right"></i>
								</a>
							</li>
						</ul>
					</div>

				</div>

				<div class="col-md-4">
					<div class="right-blog">
						<div class="row mx-0">

							<div class="col-md-12 p-0">
								<div class="blog-form">
									<form method="get">
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
														<option <?php if($_REQUEST['category']==$cat->id){ echo'selected'; } ?> value="<?php echo $cat->id; ?>"><?php echo $cat->name; ?></option>
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
														<a href="#" class="tc-sapphire"><?php echo $blog->title; ?></a>
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
<script>

		$(function () {
			var overlay = $('<div id="overlay"></div>');
			overlay.show();
			overlay.appendTo(document.body);
			$('.popup').show();
			$('.close').click(function () {
				$('.popup').hide();
				overlay.appendTo(document.body).remove();
				return false;
			});

			$('.close').click(function () {
				$('.popup').hide();
				overlay.appendTo(document.body).remove();
				return false;
			});
		});
		
function subscribe()
{
	
	var email=jQuery('#subscribeemail').val();
	
	$.ajax({
	url:"<?php echo BASE_URL ?>home/blogsubscribe",
	method:"post",
	data:jQuery('#subscribeform').serialize(),
	success:function(res){
	 jQuery('.subcribemsg').show();
	 setTimeout(function(){ jQuery('.subcribemsg').hide(); $('.close').click();}, 3000);

	}
		
	});
	
	return false;
	
}		

</script>