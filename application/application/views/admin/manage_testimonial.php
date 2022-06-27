<?php //echo '<pre>';print_r($booked_details);?>

	<div class="row" style="margin-bottom:50px;">
	    <div class="panel-heading">
						<div class="panel-title pull-left">
							Testimonial Details
						</div>
						<div class="panel-title pull-right">
							<a href="<?php echo ADMIN_URL;?>dashboard/add_edit_testimonial"><button class="btn btn-orange">Add New</button></a>
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
	
	
		<table class="table table-bordered datatable" id="table-city-lists">
			<thead>
				<tr>
				    <th style="width:20px;">
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1">
						</div>
					</th>
					<th>S.No.</th>
					<th>Name</th>
					<th>Action</th>
					
					
				</tr>
			</thead>
			<tbody>
			    <?php if(!empty($testimonial_details)){
					 $sn   =  1;
					foreach($testimonial_details as $cval)
					{
	
					   
				?>
				    <tr class="odd gradeX" id="<?php echo $cval->id;?>">
					
				    <td>
						<div class="checkbox checkbox-replace">
							<input type="checkbox" id="chk-1" value="<?php echo $cval->id;?>">
						</div>
					</td>
					<td><?php echo $sn;?></td>
					<td><strong><?php echo ucwords($cval->name);?></strong></td>
					 <td class="center">
					   <a href="<?php echo ADMIN_URL;?>dashboard/add_edit_testimonial/<?php echo $cval->id;?>" class="btn btn-default btn-sm btn-icon icon-left">
							<i class="entypo-pencil"></i>
							Edit
						</a>
						
						<a href="javascript:void(0);" onclick="delete_testimonial(<?php echo $cval->id;?>)" class="btn btn-danger btn-sm btn-icon icon-left">
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
			var $bus_table = $('#table-city-lists');
			
			// Initialize DataTable
			$bus_table.DataTable( {
				"bStateSave": false,
				"iDisplayLength": 8,
				"aoColumns": [
					{ "bSortable": false },
					null,
					null,
				   { "bSortable": false }
				],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$bus_table.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		
	function delete_testimonial(Id)
	 {
		 if(confirm('Are you sure to delete the details?'))
		 {
			 $.ajax({
				 type : 'post',
				 url  :  '<?php echo ADMIN_URL;?>dashboard/delete_testimonial',
				 data : {id:Id},
			 }).done(function(msg){
				 $("#"+Id).remove();
			 })
		 }
		
	 }	
</script>		