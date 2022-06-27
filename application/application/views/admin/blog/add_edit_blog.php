	<script language="Javascript" src="<?php echo base_url(); ?>editor/scripts/innovaeditor.js"></script>
		<div class="container-fluid">
				<h3 class="mt-4">Blog </h3>
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
						<form role="form" class="form-horizontal form-groups-bordered validate" method="post" action="<?php echo ADMIN_URL;?>blog/save" enctype="multipart/form-data">
			              	
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Title</label>
									</div>
									<div class="col-sm-8">									
											<input type="text" class="form-control" id="title" value="<?php echo $blog->title;?>" name="title" placeholder="Title" required>
									</div>
								</div>
							</div>
							<div class="form-group">
							  <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-1" class="ccontrol-label">Author</label>
									</div>
									<div class="col-sm-8">									
											<input type="text" class="form-control" id="author" value="<?php echo $blog->author;?>" name="author" placeholder="Author" required>
									</div>
								</div>
							</div>	
                            <div class="form-group">
							   <div class="col-sm-12">
								   <div class="col-sm-4">
									<label for="field-2" class="control-label">Category</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="category_id" name="category_id" required>										
										<option value="">Select</option>
										<?php
										
										foreach($categories as $category)
										{
										?>	
											<option value="<?php echo $category->id ?>" <?php echo ($blog->category_id==$category->id)?'selected="selected"':'';?>><?php echo $category->name ?>
											</option>
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
										<label for="field-2" class="control-label">Is Popular</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="is_popular" name="is_popular">
											<option value="1"  <?php echo ($blog->is_popular==1)?'selected="selected"':'';?>>Yes</option>
											<option value="0" <?php echo ($blog->is_popular==0)?'selected="selected"':'';?>>No</option>
										
										</select>
									</div>
								</div>
							  </div>
							  
							    <div class="form-group">
							   <div class="col-sm-12">
								   <div class="col-sm-4">
										<label for="field-2" class="control-label">Is Video</label>
									</div>
									<div class="col-sm-8">
										<select class="form-control" id="is_video" name="is_video">
											
											<option value="0" <?php echo ($blog->is_video==0)?'selected="selected"':'';?>>No</option>
											<option value="1"  <?php echo ($blog->is_video==1)?'selected="selected"':'';?>>Yes</option>
										
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
										<input type="file" class="form-control" id="image"  name="image">										
									</div>
									<div class="col-sm-6">
									<?php
									if($blog->image!='')
									{
									?>
									<img src="<?php echo ASSETS.'upload/blog/'.$blog->image;?>" height="75" width="75">
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
											<option value="0" <?php echo ($blog->status==0)?'selected="selected"':'';?>>Inactive</option>
											<option value="1"  <?php echo ($blog->status==1)?'selected="selected"':'';?>>Active</option>
										</select>
									</div>
								</div>
							  </div>
							  
							  
						  <div class="form-group">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Short Description</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control" name="short_description" id="short_description"><?php echo $blog->short_description;?></textarea>	 
						    <script>
									var oEdit2 = new InnovaEditor("oEdit2");
									  oEdit2.width='100%';
									  oEdit2.height=300;	
									oEdit2.arrStyle = ["BODY",false,"","margin:5px; padding:0px; font-family:Verdana, Tahoma, Arial, Helvetica, sans-serif; font-size:10pt;"];
									oEdit2.features=["Save","Preview","|","Undo","Redo","|","Numbering","Bullets","|","Indent","Outdent","|","Superscript","Subscript","|","Image","Flash","Media","|","Table","Guidelines","Absolute","|","Characters","Line","Form","Hyperlink","ClearAll","BRK","StyleAndFormatting","TextFormatting","ListFormatting","BoxFormatting","ParagraphFormatting","CssText","Styles","|","Paragraph","FontName","FontSize","|","Bold","Italic","Underline","Strikethrough","|","ForeColor","BackColor","|","JustifyLeft","JustifyCenter","JustifyRight","JustifyFull","|","XHTMLSource","Clean"];

									oEdit2.cmdAssetManager = "modalDialogShow('<?php echo base_url(); ?>editor/assetmanager/assetmanager.php',640,465)"; //Command to open the Asset Manager add-on.
									oEdit2.onSave = new Function("submitEditContentForm()");
									oEdit2.REPLACE("short_description");	
									oEdit2.mode="XHTMLBody";

								</script>	
						   </div>					
						   </div>			  		
						  </div>	  
							  
					     <div class="form-group">				
						   <div class="col-sm-12">					
						   <div class="col-sm-2">					
						   <label for="field-1" class="ccontrol-label">Description</label>			
						   </div>					
						   <div class="col-sm-8">	
						   <textarea class="form-control" name="description" id="description"><?php echo $blog->description;?></textarea>	 <script>

									var oEdit1 = new InnovaEditor("oEdit1");					

									oEdit1.width='100%';

									 oEdit1.height=400;			

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
								<div class="col-sm-offset-3 col-sm-5">
								    <input type="hidden" name="id" id="id" value="<?php echo $blog->id;?>">
									<input type="submit" class="btn btn-success" value="Submit">
									<input type="reset" class="btn btn-orange" value="Reset">
								</div>
								
							</div>
							
						</form>				
				
				      </div>
			
			        </div>
    </div>
		