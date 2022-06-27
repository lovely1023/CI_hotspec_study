	
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title pull-left">
							Add/Edit Profile Details
						</div>
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
					
					<div class="panel-body">
						
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>dashboard/save_profile">
			              <div class="col-sm-6">
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">First Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_firstName" value="<?php echo $profile_detail->user_firstName;?>" name="user_firstName" placeholder="First Name" aria-required="true" data-validate="required">
									</div>
								</div>
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Last Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_lastName" value="<?php echo $profile_detail->user_lastName;?>" name="user_lastName" placeholder="Last Name" aria-required="true" data-validate="required">
									</div>
								</div>
								
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Email</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_email" value="<?php echo $profile_detail->user_email;?>" name="user_email" placeholder="Email" aria-required="true" data-validate="required">
									</div>
								</div>
								
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Phone</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_phone" value="<?php echo $profile_detail->user_phone;?>" name="user_phone" placeholder="Phone" aria-required="true" data-validate="required">
									</div>
								</div>
								
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">User Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_username" value="<?php echo $profile_detail->user_username;?>" name="user_username" placeholder="User Name" aria-required="true" data-validate="required">
									</div>
								</div>
								
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Password</label>
									</div>
									<div class="col-sm-8">
										<input type="password" class="form-control" id="user_password" value="<?php echo $profile_detail->user_password;?>" name="user_password" placeholder="Password" aria-required="true" data-validate="required">
									</div>
								</div>
								
								 <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">User Address</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="user_address" value="<?php echo $profile_detail->user_address;?>" name="user_address" placeholder="User Address" aria-required="true" data-validate="required">
									</div>
								</div>
								
							</div>
			  
						  </div>	
						
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $profile_detail->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
						</form>
						
					</div>
				
				</div>
			
			</div>
		</div>	