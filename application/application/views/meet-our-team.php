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

	<section class="expert-team-banner meet-uor-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="expert-team-heading">
						<h2 class="tc-sapphire">Meet Our <span class="tc-orange_red"> team </span></h2>
					
						<div class="team-list">
							<form>
							<?php
							$locations=array();
							$roles=array();
							$pathways=array();
							if(!empty($filtermeetourteams))
							{
								$locations = array_column($filtermeetourteams, 'location');
								$locations=array_unique($locations);
								$roles = array_column($filtermeetourteams, 'role');
								$roles=array_unique($roles);
								$pathways = array_column($filtermeetourteams, 'pathways');
								$pathways=array_unique($pathways);
                            }
							?>
							<div class="row">
								<div class="col-md-3">
										<div class="form-group team-list-drop">
											<select class="form-control"  name="location" id="exampleFormControlSelect1">
												<option value="">all location</option>
												<?php
												foreach($locations as $location)
												{
												?>
												<option <?php if($_REQUEST['location']==$location){ echo'selected'; } ?> value="<?php echo $location; ?>"><?php echo $location; ?></option>
												<?php
												}
												?>
											
											</select>
											<span class="team-list-icon"> <i class="fa fa-angle-down"
													aria-hidden="true"></i> </span>
										</div>
								</div>
								<div class="col-md-3 px-0">
										<div class="form-group team-list-drop">
											<select class="form-control" name="role" id="exampleFormControlSelect1">
												<option value="">all roles</option>
												<?php
												foreach($roles as $role)
												{
												?>
												<option <?php if($_REQUEST['role']==$role){ echo'selected'; } ?> value="<?php echo $role; ?>"><?php echo $role; ?></option>
												<?php
												}
												?>
											</select>
											<span class="team-list-icon"> <i class="fa fa-angle-down"
													aria-hidden="true"></i> </span>
										</div>
								</div>
								<div class="col-md-3">
										<div class="form-group team-list-drop">
											<select class="form-control" name="pathways" id="exampleFormControlSelect1">
												<option value="">ALL DEPARTMENTS</option>
											<?php
												foreach($pathways as $path)
												{
													if($path!='')
													{
												?>
												<option <?php if($_REQUEST['pathways']==$path){ echo'selected'; } ?> value="<?php echo $path; ?>"><?php echo $path; ?></option>
												<?php
													}
												}
												?>
											</select>
											<span class="team-list-icon"> <i class="fa fa-angle-down"
													aria-hidden="true"></i> </span>
										</div>
								</div>
								<div class="col-md-3 pl-0">
										<div class="form-group team-list-drop eam-list-drop-sumit">
											 <button type="submit" class="btn">Submit</button>
										</div>
								</div>
							</div>
						</form>
						</div>
					</div>
				</div>
				
				<?php
				
				foreach($meetourteams as $ourteam)
				{
				?>				
				<div class="col-md-4">
					<div class="expert-team-box">
						<img src="<?php echo ASSETS.'upload/'.$ourteam->image;?>" id="profileimg<?php echo $ourteam->id; ?>" alt="" class="img-fluid">
						<div class="expert-name">
							<h5 class="tc-sapphire" id="name<?php echo $ourteam->id; ?>"><?php echo $ourteam->name; ?></h5>
							<p class="tc-sapphire" id="role<?php echo $ourteam->id; ?>"><?php echo $ourteam->role; ?></p>
						</div>
						<div class="expert-link">
							<a href="#" onclick="showdetail(<?php echo $ourteam->id; ?>)" class="read-profile bg-orange_red" data-toggle="modal"
								data-target="#exampleModalCenter">READ PROFILE</a>
						</div>
					</div>
					<div style="display:none" id="description<?php echo $ourteam->id; ?>"><?php echo $ourteam->description; ?></div>
					<input type="hidden" id="linkdin<?php echo $ourteam->id; ?>" value="<?php echo $ourteam->linkdin; ?>"/>
					<input type="hidden" id="location<?php echo $ourteam->id; ?>" value="<?php echo $ourteam->location; ?>"/>
				</div>
				<?php				
				}
				?>
				
				

			</div>
		</div>
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