<?php 
   $page    = $this->uri->segment(1);
   $page1    = $this->uri->segment(2);
   
   	 $user_id= $this->session->userdata['user_id'];

 
?>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       
<main class="main_sec">
    <div class="container">
      <ul class="log_bx">
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign Up</a></li>
      </ul>
      <div class="logo">
        <a href="<?php echo BASE_URL;?>"><img src="<?php echo ASSETS;?>frontend/images/logohome.png" alt="Logo" /></a>
      </div>
<form name="searchFrm" id="searchFrm" class="search_hm" method="post" action="<?php echo BASE_URL;?>bus-lists">
      
        <div class="row mar0">
          <div class="col-md-10 pad0">
            <div class="row mar0 search_inp">
              <div class="col-lg-3 col-md-6 col-sm-12 pad0">
                <div class="inp_group">
                  
				  <?php //echo form_dropdown("city_from",$form_cities,""," placeholder='Leaving From' class='form-control cityFrom' required");?>
				  <input id="cityfrom" placeholder="From" class='cityFrom form-control'  name="city_from">
                  <i class="fa fa-location-arrow"></i>
                  <a href="javascript:void(0)" onclick="changeds()"><i class="fa fa-exchange" aria-hidden="true"></i></a>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 pad0">
                <div class="inp_group gto">
                  <input id="cityto" placeholder="To" class='cityTo form-control'  name="city_to">
				  <?php //echo form_dropdown("city_to",$to_cities,""," placeholder='Going To' class='form-control cityTo' required");?>
                  <i class="fa fa-map-marker"></i>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 pad0">
                <div class="inp_group">
                  <input class="form-control" type="text" placeholder="Date of Journey" name="jrn_date" id="jrn_date" autocomplete="off" required>
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-12 pad0">
                <div class="inp_group">
                  <input class="form-control" type="text" placeholder="Date of Return (Optional)" name="re_jrn_date" id="re_jrn_date" autocomplete="off" >
                  <i class="fa fa-calendar"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-2 pad0">
            <button class="btn_search" type="submit">Search</button>
          </div>
        </div>
        	 <script>
			  
			 $(function() {
				 $( "#re_jrn_date" ).datepicker({ dateFormat: 'yy-mm-dd',minDate: 0 });
				  $( "#jrn_date" ).datepicker({ dateFormat: 'yy-mm-dd',minDate: 0 });		 
			   
			});
						
				function changeds()
				{
					var frm=jQuery('#cityfrom').val();
					jQuery('#cityfrom').val(jQuery('#cityto').val());
					jQuery('#cityto').val(frm);
				}				
			  </script>
      </form>
    </div>
  </main>
 <script>
  
    var city=[<?php
	foreach($form_cities as $cityname)
	echo '"'.$cityname.'",';
	?>];
	
  $( "#cityfrom" ).autocomplete({
  source: city
});
  
$( "#cityto" ).autocomplete({
  source: city
});
</script>