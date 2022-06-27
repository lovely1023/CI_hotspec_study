	<script language="Javascript" src="<?php echo base_url(); ?>editor/scripts/innovaeditor.js"></script>
		<div class="container-fluid">
				<h3 class="mt-4">Programme </h3>
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
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>programme/save" enctype="multipart/form-data">
			              	
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Title</label>
									</div>
									<div class="col-sm-8">										
											<input type="text" class="form-control" id="title" value="<?php echo $programme->title;?>" name="title" placeholder="Title" aria-required="true" data-validate="required">
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
									if($programme->image!='')
									{
									?>
									<img src="<?php echo ASSETS.'upload/'.$programme->image;?>" height="75" width="75">
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
										<label for="field-1" class="ccontrol-label">Training Brochure</label>
									</div>
									<div class="col-sm-8">
									<div class="col-sm-6">
										<input type="file" class="form-control" id="training_brochure"  name="training_brochure">										
									</div>
									<div class="col-sm-6">
									<?php
									if($programme->training_brochure!='')
									{
									?>
									<a href="<?php echo ASSETS.'upload/'.$programme->training_brochure;?>" target="_blank">View</a>
									
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
										<label for="field-1" class="ccontrol-label">Short Description </label>
									</div>
									<div class="col-sm-8">										
									 <textarea class="form-control" id="short_description" name="short_description" required><?php echo $programme->short_description ;?></textarea>
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
											<option value="0" <?php echo ($programme->status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($programme->status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>
							  
					     <div class="form-group">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Description</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control" name="description" id="description"><?php echo $programme->description;?></textarea>	 <script>

									var oEdit1 = new InnovaEditor("oEdit1");					

									oEdit1.width='100%';

									 oEdit1.height=500;			

									oEdit1.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];

									oEdit1.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									oEdit1.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit1.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; //Command to open the Asset Manager add-on.

									oEdit1.onSave = new Function("submitEditContentForm()");

									oEdit1.REPLACE("description");		

									oEdit1.mode="XHTMLBody";

										</script>	
						   </div>					
						   </div>			  		
						  </div>
						  
						    <div class="form-group">
							<?php  
							
							$tabdescription= unserialize($programme->tabdescription);
							$tabtitle=array();
							$tabdesc=array();
							
							if(!empty($tabdescription))
							{
								$tabtitle=$tabdescription['tabtitle'];
								$tabdesc=$tabdescription['tabdescription'];
							}

							?>
							  <div class="row">
								   <div class="col-sm-12">
										<h3>Tab List</h3>
									</div>
							    </div>
							   </div>		
								<div class="form-group">	
								 <div class="row">
								    <div class="col-sm-3" >Title</div>
									<div class="col-sm-8" >Description</div>									
									<div class="col-sm-1" ><a href="javascript:void(0);" id="add-more-tab"> Add More</a></div>
								 </div>
								</div>
								 
							<div id="tab_container">

							    <?php
								if(!empty($tabtitle))
								{
									for($i=0;$i<count($tabtitle);$i++)
									{	
								?>
								<div class="form-group">
                                  <div class="row">								
									<div class="col-sm-3" >
									 <input type="text" class="form-control" name="tabdescription[tabtitle][]" value="<?php echo $tabtitle[$i]; ?>"  >
									
									</div>
									<div class="col-sm-8" >
									<textarea class="form-control" rows="8"  id="tabdescription" name="tabdescription[tabdescription][]"><?php echo $tabdesc[$i]; ?></textarea>
									
									</div>
									 <div class="col-sm-1" ><a href="javscript:void(0);" class="remove-more" style="color:#FF0000;"> Remove</a></div>
								 </div>
								</div>
								<?php
									}
								}else{
									?>
									<div class="form-group">
									  <div class="row">								
										<div class="col-sm-3" >
										 <input type="text" class="form-control" name="tabdescription[tabtitle][]" value=""  >
										
										</div>
										<div class="col-sm-8" >
										<textarea class="form-control" id="tabdescription" name="tabdescription[tabdescription][]"></textarea>
										
										</div>
										 <div class="col-sm-1" >&nbsp;</div>
									 </div>
									</div>
									<?php
								}
								?> 
							  
							</div>  
							
							
							
							<div class="form-group">
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $programme->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
<script>
$("#add-more-tab").on("click", function(){
			 var html	=	'';
			 html		+=	'<div class="form-group"> <div class="row">';	
			 html		+=	'<div class="col-sm-3" ><input type="text" class="form-control" name="tabdescription[tabtitle][]" value="" ></div>';
			 html		+=	'<div class="col-sm-8" ><textarea rows="8" class="form-control" id="tabdescription2" name="tabdescription[tabdescription][]"></textarea></div>';
			 html		+=	'<div class="col-sm-1" ><a href="javscript:void(0);" class="remove-more" style="color:#FF0000;"> Remove</a></div>';
			 html		+=	'</div></div>';
			 
			 $("#tab_container").append(html);
			 
			
		 });
 $("body").on("click",".remove-more", function(event){
			 event.preventDefault();
			$(this).parents(".form-group").remove();
		 })		 
</script>	
		