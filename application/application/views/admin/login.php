<!-- This is needed when you send requests via Ajax -->
<script type="text/javascript">
var baseurl = '<?php echo site_url('admin/login');?>';
</script>
<div class="container">
	
	 <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
									<?php
						
						if($this->session->flashdata('message')!='')
						{
						?>
                       <div align="center">
								<?php 
								echo '<span style="color:red">'.$this->session->flashdata('message').'</span>';
								?>
								</div>
					  <?php
					  
					  }
					  ?>	
                                    <div class="card-body">
										
											<form method="post" role="form" id="form_login" action="<?php echo $base_url?>admin/access/login">
											
											<div class="form-group">
                                                <label class="small mb-1" for="username">User name</label>
                                                <input class="form-control py-4" name="username" id="username" type="text" placeholder="User name" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="password">Password</label>
                                                <input class="form-control py-4" name="password" id="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                               <button type="submit" class="btn btn-primary btn-block btn-login">
														<i class="entypo-login"></i>
														Login In
													</button>
                                            </div>
												
																							
												
											</form>
			                </div>                                  
			</div>
		</div>
	</div>
</div>
