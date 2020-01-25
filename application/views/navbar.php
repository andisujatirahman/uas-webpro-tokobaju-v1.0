<div id="header">
<div class="container">
<div id="welcomeLine" class="row">
	<div class="span6">Selamat datang!<strong> User</strong></div>
	<div class="span6">
	<div class="pull-right">
		
		<a href="<?php echo site_url('welcome/cart');?>"><span class="btn btn-mini btn-primary"><i class="icon-shopping-cart icon-white"></i> [ <?php echo $this->cart->total_items();?> ] Itemes in your cart </span> </a> 
	</div>
	</div>
</div>
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/bootshop/themes/images/logo.png');?>" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="<?php echo site_url('welcome/cariproduk');?>" >
		
		  <select class="srchTxt" name="kategori">
			<option>Kaos</option>
			<option>Kemeja</option>
			<option>Batik</option>
			<option>Baju anak</option>
		
		</select> 
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>
    <ul id="topMenu" class="nav pull-right">
	 <li class=""><a href="<?php echo site_url('welcome/konfirmasi');?>">Konfirmasi Pembayaran</a></li>
	 <li class=""><a href="login.php">Contact</a></li>
	 <li class="">
	 <a href="<?php echo site_url('login');?>"><span class="btn btn-large btn-success">Login</span></a>
	<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h3>Login Block</h3>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal loginFrm">
			  <div class="control-group">								
				<input type="text" id="inputEmail" placeholder="Email">
			  </div>
			  <div class="control-group">
				<input type="password" id="inputPassword" placeholder="Password">
			  </div>
			  <div class="control-group">
				<label class="checkbox">
				<input type="checkbox"> Remember me
				</label>
			  </div>
			</form>		
			<button type="submit" class="btn btn-success">Sign in</button>
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		  </div>
	</div>
	</li>
    </ul>
  </div>
</div>