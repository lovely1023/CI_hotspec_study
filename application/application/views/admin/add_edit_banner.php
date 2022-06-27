	
		<div class="container-fluid">
				<h3 class="mt-4">Banner List</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo ADMIN_URL;?>dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add/Edit Banner</li>
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
						
						   $id				=   '';
							$name			=	'';
							$page			=	'';
							$status			=	'';
						if(!empty($banners))
						{
							$id				=   $banners->id;
							$name			=	$banners->name;
							$page			=	$banners->page;
							$status			=	$banners->status;
						}
						
					?>
					<div class="card mb-4">
					 <div class="card-body">
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>dashboard/save_banner" enctype="multipart/form-data">
			              
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Banner Name</label>
									</div>
									<div class="col-sm-8">										
										
											<input type="text" class="form-control" id="bnrName" value="<?php echo $name;?>" name="bnrName" placeholder="Name" aria-required="true" data-validate="required">
									</div>
								</div>
							</div>
							
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Page</label>
									</div>
									<div class="col-sm-8">										
										<select class="form-control" id="page" name="page">
										<?php
										 
										 foreach($pages as $pg)
										 {
										
										?>
											<option <?php echo ($page==$pg->url_key)?'selected="selected"':'';?> value="<?php echo $pg->url_key ?>"><?php echo $pg->title ?></option>
										<?php
										
										 }
										?>					
											
										</select>
									</div>
								</div>
							</div>
							
							 <div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Brochure</label>
									</div>
									<div class="col-sm-8">
									<div class="col-sm-6">
										<input type="file" class="form-control" id="training_brochure"  name="training_brochure">										
									</div>
									<div class="col-sm-6">
									<?php
									if($banners->training_brochure!='')
									{
									?>
									<a href="<?php echo ASSETS.'upload/'.$banners->training_brochure;?>" target="_blank">View</a>
									
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
										<select class="form-control" id="bnrStatus" name="bnrStatus">
											<option value="0" <?php echo ($status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="bnr_id" value="<?php echo $id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
		