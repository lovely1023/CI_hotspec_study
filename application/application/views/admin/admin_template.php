<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
<?php
		
	
		$this->load->view('admin/includes/header');
?>

</head>
<body class="sb-nav-fixed">
  <?php $this->load->view('admin/includes/top-nav');?>
  
<div id="layoutSidenav">
	
     <?php $this->load->view('admin/includes/left_sidebar');?>
	 
	<div id="layoutSidenav_content">
       <main>
       

		<?php
	      	$this->load->view($contents);
        ?>

		</main>
		<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
	</div>

</div>
<?php
		$this->load->view('admin/includes/footer');
?>