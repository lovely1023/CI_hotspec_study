<div class="container-fluid">
				<h3 class="mt-4">Setting </h3>
                        			
					<?php						
						if($message!='')
						{
						?>
							<div class="card mb-4">
									<div class="card-body">
								
								<div align="center">
								<?php if($message=='success'){
									echo '<span style="color:green">Successfully saved</span>';
								}
								if($message=='fail'){
									echo '<span style="color:red">Please re-try</span>';
								}
											
								?>
								</div>
								
							</div>
							</div>
					<?php
						}			
						 
						
					?>
					<div class="card mb-4">
					 <div class="card-body">
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>setting/save" enctype="multipart/form-data">
			              	<div class="form-group">
							 <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Address</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="address" value="<?php echo $setting->address;?>" name="address" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Phone</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="phone" value="<?php echo $setting->phone;?>" name="phone" >
									</div>
									</div>
								</div>
							</div>
							</div>
							
							
							 
							  <div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="email" value="<?php echo $setting->email;?>" name="email" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Career Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="careeraplynow_email" value="<?php echo $setting->careeraplynow_email;?>" name="careeraplynow_email" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
							<div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Get in Touch Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="getintuch_email" value="<?php echo $setting->getintuch_email;?>" name="getintuch_email" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Consultation Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="bookfreeconsultation_email" value="<?php echo $setting->bookfreeconsultation_email;?>" name="bookfreeconsultation_email" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
							<div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">News Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="news_subscribtion_email" value="<?php echo $setting->news_subscribtion_email;?>" name="news_subscribtion_email" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Blog Email</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="blog_subscribtion_email" value="<?php echo $setting->blog_subscribtion_email;?>" name="blog_subscribtion_email" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
							<div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Name</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="name" value="<?php echo $setting->name;?>" name="name" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Website</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="website" value="<?php echo $setting->website;?>" name="website" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							 <div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Facebook</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="facebook_link" value="<?php echo $setting->facebook_link;?>" name="facebook_link" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Twitter</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="twitter_link" value="<?php echo $setting->twitter_link;?>" name="twitter_link" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
							
							 <div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Google</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="google_link" value="<?php echo $setting->google_link;?>" name="google_link" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Linkedin</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="linkedin_link" value="<?php echo $setting->linkedin_link;?>" name="linkedin_link" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
							<div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Youtube</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="youtube_link" value="<?php echo $setting->youtube_link;?>" name="youtube_link" >
									</div>
									</div>
								</div>
								 <div class="col-sm-6">
								 <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Instagram</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="instagram_link" value="<?php echo $setting->instagram_link;?>" name="instagram_link" >
									</div>
									</div>
								</div>
							 </div>
							</div>
							
						<div class="form-group">
							  <div class="row">
							  <div class="col-sm-6">
							     <div class="row">
								   <div class="col-sm-2">
										<label for="field-1" class="ccontrol-label">Pinterest</label>
									</div>
									<div class="col-sm-10">										
											<input type="text" class="form-control" id="pinterest_link" value="<?php echo $setting->pinterest_link;?>" name="pinterest_link" >
									</div>
									</div>
								</div>
								
							 </div>
							</div>
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $setting->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
		