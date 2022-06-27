
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-heading">
						<h2 class="tc-sapphire">Get in <span class="tc-orange_red"> Touch </span></h2>
					</div>
				</div>
				<div class="col-md-12">
					<div class="contact-form">
					 <p id="seccMsg"></p>
						<form id="contactFrm" onsubmit="return sendcontactus();">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<input type="text" class="form-control" name="fname" id="fname" placeholder="First Name*" required>
								</div>
								<div class="col-md-6 col-sm-6">
									<input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name*" required>
								</div>
								<div class="col-md-6">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email*" required>
								</div>
								<div class="col-md-6">
									<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
								</div>
								<div class="col-md-12">
									<input type="text" class="form-control" name="company" id="company" placeholder="Company Name">
								</div>
								<div class="col-lg-12">
									<textarea rows="4" class="form-control" name="message" id="message" placeholder="Your Message*" required></textarea>
								</div>

								<div class="col-md-12">
									<div class="submit-btn">
										<button class="btn bg-orange_red">SUBMIT</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		
<div class="modal fade submit-button-modal" id="contactsubmitmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <span>&#10003;</span> Success</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div id="bookafreeconsultationMsg" style="color: green;">
										<p>Thanks for getting in touch!</p> 
										<p>One of our colleagues will get back in touch with you soon!</p>
										<p>Have a great day!</p>
		</div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>		
<script>
function sendcontactus()
		{
			$.ajax({
			type : 'post',
			url  : '<?php echo BASE_URL;?>home/sendEmail',
			data : $("#contactFrm").serialize(),
			}).done(function(msg){
				$('#contactFrm')[0].reset();
				$('#contactsubmitmodal').modal('show');
			
				
			});
			return false;
			
		}
</script>