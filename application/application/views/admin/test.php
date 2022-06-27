<?php
$date1=date_create("2013-03-15");
$date2=date_create("2013-12-12");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>
<table>

<tr>
	<td class="middle-align">Ajax Modal</td>
	<td>
		<a href="javascript:;" onclick="showAjaxModal();" class="btn btn-default">Show Me</a>
	</td>
</tr>
</table>
<!-- Modal 7 (Ajax Modal)-->
	<div class="modal fade custom-width" id="modal-7">
		<div class="modal-dialog"  style="width: 50%">
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Dynamic Content</h4>
				</div>
				
				<div class="modal-body">
				
					Content is loading...
					
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info">Save changes</button>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript">
		function showAjaxModal()
		{
			$('#modal-7').modal('show', {backdrop: 'static'});
			
			$.ajax({
				url: "data/ajax-content.txt",
				success: function(response)
				{
					$('#modal-7 .modal-body').html(response);
				}
			});
		}
</script>
