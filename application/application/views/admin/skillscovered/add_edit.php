		<div class="container-fluid">
				<h3 class="mt-4">Skills Covered </h3>
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
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>skillscovered/save" enctype="multipart/form-data">
			              	
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Title</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="title" value="<?php echo $skillscovered->title;?>" name="title" placeholder="Title" aria-required="true" data-validate="required">
									</div>
								</div>
							</div>
							 <div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Image</label>
									</div>
									<div class="col-sm-8">
									<div class="col-sm-6">
										<input type="file" class="form-control" id="image"  name="image">										
									</div>
									<div class="col-sm-6">
									<?php
									if($skillscovered->image!='')
									{
									?>
									<img src="<?php echo ASSETS.'upload/'.$skillscovered->image;?>" height="75" width="75">
									<?php
									
									}
									?>
									</div>
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
											<option value="0" <?php echo ($skillscovered->status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($skillscovered->status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>		  
					     
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $skillscovered->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
		