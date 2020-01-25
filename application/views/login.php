<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view('header');?>
  </head>
<body>
<!-- Navbar ================================================== -->

<!-- Header End====================================================================== -->

<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->

<!-- Sidebar end=============================================== -->
<div class="span9">
   	
	<div class="row">
		<div class="span4 offset4">
			<div class="well">
			<h5>Login</h5><br/>
			<form action="<?php echo site_url('login/proses_login');?>" method="post">
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Username</label>
				<div class="controls">
				  <input name="username" class="span3"  type="text" id="inputEmail0" placeholder="">
				</div>
			  </div>
			  <div class="control-group">
				<label class="control-label" for="inputEmail0">Password</label>
				<div class="controls">
				  <input name="password" class="span3"  type="password" id="inputEmail0" placeholder="">
				</div>
			  </div>
			  <div class="controls">
			  <button type="submit" class="btn btn-primary">Login</button>
			  </div>
			</form>
		</div>
		</div>
		<div class="span1"> &nbsp;</div>
	</div>	
	
</div>
</div>

<!-- Footer ================================================================== -->

		<br><br>
		<p class="Container" align="center" >&copy; ASI-Shop | TIF-RM-CNSA
	
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?php echo base_url('assets/bootshop/themes/js/jquery.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootstrap.min.js');?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/bootshop/themes/js/google-code-prettify/prettify.js');?>"></script>
	
	<script src="<?php echo base_url('assets/bootshop/themes/js/bootshop.js');?>"></script>
    <script src="<?php echo base_url('assets/bootshop/themes/js/jquery.lightbox-0.5.js');?>"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
</body>
</html>