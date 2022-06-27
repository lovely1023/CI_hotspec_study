<?php //echo '<pre>';print_r($booked_details);?>
 <div class="container-fluid">
                        <h3 class="mt-4">Banner List</h3>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo ADMIN_URL;?>dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Banner</li>
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
								if($message=='dsuccess'){
									echo '<span style="color:green">Successfully deleted</span>';
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
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                               <a href="<?php echo ADMIN_URL;?>dashboard/add_edit_banner"><button class="btn btn-orange">Add New</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
		<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
				    <th style="width:20px;">
						ID
					</th>
					<th>Name</th>	
					<th>Page</th>				
					<th>Banner items</th>
					<th>Status</th>
					<th>Action</th>
					
					
				</tr>
			</thead>
			<tbody>
			    <?php if(!empty($banner_details)){
					 $sn   =  1;
					foreach($banner_details as $bnrval)
					{
	
					   
				 ?>
				    <tr class="odd gradeX" id="<?php echo $bnrval->id;?>">
					
				    <td>
						<?php echo $bnrval->id;?>
					</td>
					<td><?php echo $bnrval->name;?></td>
					<td><?php echo $bnrval->page;?></td>
					
					<td><a href="<?php echo ADMIN_URL;?>dashboard/manage_banner_item/<?php echo $bnrval->id;?>">Add/Edit Image</a></td>
					<td><?php echo ($bnrval->status==1)?'Active':'Inactive';?></td>
					 <td class="center">
					   <a href="<?php echo ADMIN_URL;?>dashboard/add_edit_banner/<?php echo $bnrval->id;?>" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="<?php echo ADMIN_URL;?>dashboard/delete_banner/<?php echo $bnrval->id;?>" class="btn btn-danger btn-sm btn-icon icon-left">
							<i class="entypo-cancel"></i>
							Delete
						</a>
						
						
					</td>
					
				</tr>
                <?php
					$sn++;	
					}
				}else{
				?>	

				<div class="gradeA">
				    
						No record found
					
				</div>
				<?php
				}
				?>
				
			</tbody>
			
		</table>
		
	            </div>
			</div>
		</div>
	</div>