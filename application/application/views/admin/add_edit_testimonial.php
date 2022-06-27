	
		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-primary" data-collapsed="0">
				
					<div class="panel-heading">
						<div class="panel-title pull-left">
							Add/Edit Testimonial
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
						
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>dashboard/save_testimonial">
			              <div class="col-sm-6">
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Name</label>
									</div>
									<div class="col-sm-8">
								<input type="text" class="form-control" id="name" value="<?php echo $testimonial->name;?>" name="name" placeholder="Name" aria-required="true" data-validate="required">
									</div>
								</div>
							</div>
			  
						  </div>	
						  
						   	<div class="form-group">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Details</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control ckeditor" name="description"><?php echo $testimonial->description;?></textarea>		
						   </div>					
						   </div>			  		
						   </div>
                        
						
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="testimonial_id" value="<?php echo $testimonial->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
						</form>
						
					</div>
				
				</div>
			
			</div>
		</div>	