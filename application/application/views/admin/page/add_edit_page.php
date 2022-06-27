	<script language="Javascript" src="<?php echo base_url(); ?>editor/scripts/innovaeditor.js"></script>
		<div class="container-fluid">
				<h3 class="mt-4">Page </h3>
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
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>page/save" enctype="multipart/form-data">
			              	
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Title</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="title" value="<?php echo $page->title;?>" name="title" placeholder="Title" aria-required="true" data-validate="required">
									</div>
								</div>
							</div>
                            <div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Url</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="url_key" value="<?php echo $page->url_key;?>" name="url_key" placeholder="Url key" aria-required="true" data-validate="required">
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
											<option value="0" <?php echo ($page->status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($page->status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>
						
						  <div class="form-group">
							   <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-2" class="control-label">Page Type</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="pagetype" name="pagetype" onchange="changePageType(this.value)">
											<option value="singlerow" <?php echo ($page->pagetype=='singlerow')?'selected="selected"':'';?>>Single row</option>
											<option value="multirow"  <?php echo ($page->pagetype=='multirow')?'selected="selected"':'';?>>Multi row</option>
										</select>
									</div>
								</div>
						 </div>
							  
					     <div class="form-group singlerow">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Description</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control" name="description" id="description"><?php echo $page->description;?></textarea>	 <script>

									var oEdit1 = new InnovaEditor("oEdit1");					

									oEdit1.width='100%';

									 oEdit1.height=500;			

									oEdit1.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];

									

									oEdit1.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit1.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; //Command to open the Asset Manager add-on.

									oEdit1.onSave = new Function("submitEditContentForm()");

									oEdit1.REPLACE("description");		

									oEdit1.mode="XHTMLBody";

										</script>	
						   </div>					
						   </div>			  		
						  </div>
						 
						  <div class="form-group multirow">
							  <div class="row">
							   <div class="col-sm-2">					
							   <label for="field-1" class="ccontrol-label"><strong>Row Number</strong></label>	
							   </div>
							   
							  <div class="col-sm-8">					
							   <label for="field-1" class="ccontrol-label">
							   <strong>Description</strong></label>	
							   </div>
							   <div class="col-sm-2">					
							     
							   </div>
							   
							  </div>						  
						  </div>
						  
						   <div class="form-group multirow">	
                             <div class="row">
							   <div class="col-sm-2">					
							    <input type="text" name="rowno[]" value="1" style="width:110px">
							   </div>							   
							  <div class="col-sm-8">					
							        <textarea class="form-control" name="row_description1" id="row_description1"><?php echo $page->row_description1;?></textarea>	 
									<script>
									var oEdit0 = new InnovaEditor("oEdit0");
									   oEdit0.width='100%';
									   oEdit0.height=300;	
									   oEdit0.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									   oEdit0.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									  oEdit0.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

								
									oEdit0.onSave = new Function("submitEditContentForm()");

									oEdit0.REPLACE("row_description1");		

									oEdit0.mode="XHTMLBody";
								  </script>							   	
							   </div>							   
							  </div>					   			  		
						    </div>
							
							<div class="form-group multirow">	
                             <div class="row">
							   <div class="col-sm-2">					
							    <input type="text" name="rowno[]" value="2" style="width:110px">
							   </div>							   
							  <div class="col-sm-8">					
							        <textarea class="form-control" name="row_description2" id="row_description2"><?php echo $page->row_description2;?></textarea>	 
									<script>
									var oEdit2 = new InnovaEditor("oEdit2");
									   oEdit2.width='100%';
									   oEdit2.height=300;	
									   oEdit2.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									   oEdit2.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									  oEdit2.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit2.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; 
									
									oEdit2.onSave = new Function("submitEditContentForm()");

									oEdit2.REPLACE("row_description2");		

									oEdit2.mode="XHTMLBody";
								  </script>							   	
							   </div>							   
							  </div>					   			  		
						    </div>
							
							
							
							<div class="form-group multirow">	
                             <div class="row">
							   <div class="col-sm-2">					
							    <input type="text" name="rowno[]" value="3" style="width:110px">
							   </div>							   
							  <div class="col-sm-8">					
							        <textarea class="form-control" name="row_description3" id="row_description3"><?php echo $page->row_description3;?></textarea>	 
									<script>
									var oEdit3 = new InnovaEditor("oEdit3");
									   oEdit3.width='100%';
									   oEdit3.height=300;	
									   oEdit3.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									   oEdit3.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									  oEdit3.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit3.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; 
									
									oEdit3.onSave = new Function("submitEditContentForm()");

									oEdit3.REPLACE("row_description3");		

									oEdit3.mode="XHTMLBody";
								  </script>							   	
							   </div>							   
							  </div>					   			  		
						    </div>
							
							
							<div class="form-group multirow">	
                             <div class="row">
							   <div class="col-sm-2">					
							    <input type="text" name="rowno[]" value="4" style="width:110px">
							   </div>							   
							  <div class="col-sm-8">					
							        <textarea class="form-control" name="row_description4" id="row_description4"><?php echo $page->row_description4;?></textarea>	 
									<script>
									var oEdit4 = new InnovaEditor("oEdit4");
									   oEdit4.width='100%';
									   oEdit4.height=300;	
									   oEdit4.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									   oEdit4.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									  oEdit4.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit4.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; 
									
									oEdit4.onSave = new Function("submitEditContentForm()");

									oEdit4.REPLACE("row_description4");		

									oEdit4.mode="XHTMLBody";
								  </script>							   	
							   </div>							   
							  </div>					   			  		
						    </div>
							
							
							<div class="form-group multirow">	
                             <div class="row">
							   <div class="col-sm-2">					
							    <input type="text" name="rowno[]" value="5" style="width:110px">
							   </div>							   
							  <div class="col-sm-8">					
							        <textarea class="form-control" name="row_description5" id="row_description5"><?php echo $page->row_description5;?></textarea>	 
									<script>
									var oEdit5 = new InnovaEditor("oEdit5");
									   oEdit5.width='100%';
									   oEdit5.height=300;	
									   oEdit5.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									   oEdit5.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									  oEdit5.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit5.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; 
									
									oEdit5.onSave = new Function("submitEditContentForm()");

									oEdit5.REPLACE("row_description5");		

									oEdit5.mode="XHTMLBody";
								  </script>							   	
							   </div>							   
							  </div>					   			  		
						    </div>
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $page->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
<style>
.multirow{
	display:none
}

</style>	
		<script>
		$(function() {
        $('#url_key').on('keypress', function(e) {
            if (e.which == 32){
                
                return false;
            }
        });
      });
	  
	 function changePageType(pagetype)
	 {
		if(pagetype=='multirow') 
		{
		  jQuery('.multirow').show();
          jQuery('.singlerow').hide();		  
		}else
		{
		  jQuery('.multirow').hide();
          jQuery('.singlerow').show();
			
		}
		 
	 }
	 
	changePageType('<?php echo $page->pagetype;  ?>') 
</script>
		