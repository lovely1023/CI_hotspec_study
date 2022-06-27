<?php //echo '<pre>';print_r($booked_details);?>

	<div class="row" style="margin-bottom:50px;">
	    <div class="panel-heading">
						<div class="panel-title pull-left">
							Package Details
						</div>
						<div class="panel-title pull-right">
							<a href="<?php echo ADMIN_URL;?>dashboard/add_package"><button class="btn btn-orange">Add New</button></a>
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
	     </div>
	
	
		<table class="table table-bordered datatable" id="pack-lists">
			<thead>
				<tr>
					<th>S.No.</th>
					<th>Image</th>
					<th>Name</th>
					<th>No. of days</th>
					<th>Price</th>
					<th>Action</th>
					
					
				</tr>
			</thead>
			<tbody>
			    <?php if(!empty($pack_details)){
					 $sn   =  1;
					foreach($pack_details as $pval)
					{
	
					   
				?>
				    <tr class="odd gradeX" id="<?php echo $pval->id;?>">
					<td><?php echo $sn;?></td>
					<td><img src="<?php echo ASSETS.'upload/packages/'.$pval->img;?>" height="75" width="75"></td>
					<td><strong><?php echo ucwords($pval->name);?></strong></td>
					<td><strong><?php echo ucwords($pval->noofdays);?></strong></td>
					<td><strong><?php echo ucwords($pval->price);?></strong></td>
					 <td class="center">
					   <a href="<?php echo ADMIN_URL;?>dashboard/edit_package/<?php echo $pval->id;?>" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="javascript:void(0);" onclick="delete_package(<?php echo $pval->id;?>)" class="btn btn-danger btn-sm btn-icon icon-left">
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
		
		
	<script type="text/javascript">
		$( document ).ready( function() {
			var $pack_table = $('#pack-lists');
			
			// Initialize DataTable
			$pack_table.DataTable( {
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
					null,
					null,
				   { "bSortable": false }
				],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$pack_table.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		
	function delete_package(Id)
	 {
		 if(confirm('Are you sure to delete the details?'))
		 {
			 $.ajax({
				 type : 'post',
				 url  :  '<?php echo ADMIN_URL;?>dashboard/delete_package',
				 data : {id:Id},
			 }).done(function(msg){
				 $("#"+Id).remove();
			 })
		 }
		
	 }	
</script>		