<script language="Javascript" src="<?php echo base_url(); ?>editor/scripts/innovaeditor.js"></script>	
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
							$image 			=	'';
							
							$description		=	'';
							$status			=	'';
						if(!empty($banners))
						{
							$id				=   $banners->id;
							$name			=	$banners->name;
							$image 			=	$banners->image;
							$status			=	$banners->status;
							$description	=	$banners->description;
						}
					?>
					<div class="card mb-4">
					 <div class="card-body">
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>dashboard/save_banner_item/<?php echo $bnr_id; ?>" enctype="multipart/form-data">
			              
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Name</label>
									</div>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="bnrName" value="<?php echo $name;?>" name="bnrName" placeholder="Name" aria-required="true" data-validate="required">
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
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Image</label>
									</div>
									<div class="col-sm-8">
									<div class="col-sm-6">
										<input type="file" class="form-control" id="bnrFile"  name="bnrFile" <?php if(empty($id)){ ?>aria-required="true" data-validate="required"<?php }?>>
										
									</div>
									<div class="col-sm-6">
									<?php
									if($image!='')
									{
									?>
									<img src="<?php echo ASSETS.'upload/'.$image;?>" height="75" width="75">
									<?php
									
									}
									?>
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
						   <textarea class="form-control" name="description" id="description"><?php echo $description;?></textarea>	
                            
							<script>

									var oEdit1 = new InnovaEditor("oEdit1");					

									oEdit1.width='100%';

									 oEdit1.height=500;			

									oEdit1.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];

									oEdit1.css="<?php echo base_url(); ?>stylesheets/editor_styles.css"; //Specify external css file here

									oEdit1.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit1.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; 

									oEdit1.onSave = new Function("submitEditContentForm()");

									oEdit1.REPLACE("description");		

									oEdit1.mode="XHTMLBody";

										</script>	
						   
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
		