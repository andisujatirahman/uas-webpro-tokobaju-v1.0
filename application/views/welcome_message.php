<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('header');?>
  </head>
<body>

<!-- Navbar ================================================== -->
<?php $this->load->view('navbar');?>
</div>
</div>
<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<?php $this->load->view('sidebar');?>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			
		<h4>Latest Products </h4>
			  <ul class="thumbnails">
			  <?php foreach($produk as $produk): ?>
				<li class="span3">
				  <div class="thumbnail">
				  <p style="min-height:160px;">
					<a  href="<?php echo site_url('welcome/detailproduk/'.$produk->id);?>">
						<?php 
							$product_image = ['src'=>'uploads/' . $produk->gambar,
								'width'=>'160',
								'height'=>'160'];
							echo img($product_image);
						?>
					</a>
					</p>
					<div class="caption">
					  <h5><?php echo $produk->brand;?></h5>
					  <h5><?php echo $produk->model;?></h5>
					 
					 
					  <h4 style="text-align:center"><a class="btn" href="<?php echo site_url('welcome/detailproduk/'.$produk->id);?>"> <i class="icon-zoom-in"></i></a> <a class="btn" href="<?php echo site_url('welcome/add_to_cart/'.$produk->id);?>">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">Rp. <?php echo number_format($produk->harga,0,',','.');?></a></h4>
					</div>
				  </div>
				</li>
				<?php endforeach;?>
			  </ul>	
		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>KELOMPOK </h5>
				<a href="https://www.facebook.com/andy.soejatira">ANDI SUJATI RAHMAN</a>
				<a href="">IMAM UTAMA</a> 
				<a href="">SANDY SURYA PRATAMA</a> 
				</div>
			<div class="span3">
				<h5>NPM</h5>
				<a href="">17-111-178</a>  
				<a href="">17-111-222</a>  
				<a href="">17-111-261</a>  
			 </div>
			 
		 </div>
		<p class="pull-right">&copy; ASI-Shop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
</body>
</html>