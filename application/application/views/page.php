 <?php
	if(count($banners))
	{
		?>
		<!--Top banner-->	
	<section class="hero-banner stories-hero-banner">
		 <?php
		 foreach($banners as $banner)
		 {
		?>
			<div class="item">
				<div class="banner-slider" style="background-image: url(<?php echo ASSETS;?>upload/<?php echo $banner->image ?>);">
					<div class="banner_frame">
						<img src="<?php echo ASSETS;?>frontend/images/inner_shape.png" alt="" class="img-fluid">
					</div>

					<div class="container">
						<div class="row">
						<?php echo $banner->description ?>
						</div>
					</div>
				</div>
			</div>

			
		<?php
		 }
		?>

	</section>
<?php
 }
?>	

<?php
if(!empty($page->description))
{
	echo $page->description;
}

if(!empty($page->row_description1))
{
	echo $page->row_description1;
}

if(!empty($page->row_description2))
{
	echo $page->row_description2;
}

if(!empty($page->row_description3))
{
	echo $page->row_description3;
}

if(!empty($page->row_description4))
{
	echo $page->row_description4;
}

if(!empty($page->row_description5))
{
	echo $page->row_description4;
}

?>