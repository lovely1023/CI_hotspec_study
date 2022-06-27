<div class="container-fluid">
				<h3 class="mt-4">Location </h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo ADMIN_URL;?>dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add/Edit</li>
                        </ol>				
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
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>location/save" enctype="multipart/form-data">			              	
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Country Name</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="country_name" value="<?php echo $location->country_name;?>" name="country_name"  required>
									</div>
								</div>
							</div>
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Address</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="address" value="<?php echo $location->address;?>" name="address"  required>
									</div>
								</div>
							</div>
							
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">HR Phone</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="hr_phone" value="<?php echo $location->hr_phone;?>" name="hr_phone"  required>
									</div>
								</div>
							</div>						
					    	<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Sales Phone</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="sales_phone" value="<?php echo $location->sales_phone;?>" name="sales_phone"  required>
									</div>
								</div>
							</div>						
						 <div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Email</label>
									</div>
									<div class="col-sm-8">										
											<input type="email" class="form-control" id="email" value="<?php echo $location->email;?>" name="email"  required>
									</div>
								</div>
							</div>						
						  <div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Opening Time</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="opening_time" value="<?php echo $location->opening_time;?>" name="opening_time"  required>
									</div>
								</div>
							</div>						
						
						   <div class="form-group">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Google Map</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control" name="google_map" id="google_map"><?php echo $location->google_map;?></textarea>
						   </div>					
						   </div>			  		
						  </div>
							
							  
							  <div class="form-group">
							   <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-2" class="control-label">Status</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="status" name="status">
											<option value="0" <?php echo ($location->status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($location->status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>
							  
					  
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $location->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
		