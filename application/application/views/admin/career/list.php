<div class="container-fluid">
			<h3 class="mt-4">Career List</h3>
			<ol class="breadcrumb mb-4">
				<li class="breadcrumb-item"><a href="<?php echo ADMIN_URL;?>dashboard">Dashboard</a></li>
				<li class="breadcrumb-item active">Career</li>
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
							   <a href="<?php echo ADMIN_URL;?>career/add_edit"><button class="btn btn-orange">Add New</button></a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th style="width:20px;">ID</th>
											<th>Title</th>	
											<th>Work Location</th>	
											<th>Work Type</th>												
											<th>Status</th>
											<th>Action</th>
											
											
										</tr>
									</thead>
									<tbody>
										<?php if(!empty($careers)){
											 $sn   =  1;
											foreach($careers as $career)
											{

											   
										 ?>
											<tr class="odd gradeX" id="<?php echo $career->id;?>">
											
											<td><?php echo $career->id;?></td>
											<td><?php echo $career->title;?></td>
											<td><?php echo $career->work_location;?></td>
											<td><?php echo $career->work_type;?></td>											
											<td><?php echo ($career->status==1)?'Active':'Inactive';?></td>
											 <td class="center">
											   <a href="<?php echo ADMIN_URL;?>career/add_edit/<?php echo $career->id;?>" class="btn btn-default btn-sm btn-icon icon-left">
													<i class="entypo-pencil"></i>
													Edit
												</a>												
												<a href="<?php echo ADMIN_URL;?>career/delete/<?php echo $career->id;?>" class="btn btn-danger btn-sm btn-icon icon-left">
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
										<div class="gradeA">No record found</div>
										<?php
										}
										?>										
									</tbody>
								</table>
				            </div>
			            </div>
			     </div>
</div>