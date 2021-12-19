<!-- login -->
	<?php get_header();?>
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Login</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<form  class="login_form">
							<?php 
							   $email=$password='';
							   if(isset($_GET['email']) and isset($_GET['reset_password']))
							   {
							   	 $email=$_GET['email'];
							   	 $password=$_GET['reset_password'];
							   }
							?>
							<div class="form-group">
								<input type="email" class="form-control" id="lemail" placeholder="Email" name="email" value="<?php echo $email; ?>">
								<span class="text-danger lemail-feedback"></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="lpassword" placeholder="password" name="password"  value="<?php echo $password; ?>">
								<span class="text-danger lpassword-feedback"></span>
							</div>
							<button type="submit" id="loginBtn">
								 <span class="fa fa-spinner fa-spin login_spinner" style="display:none"></span>
								<span class="login_text">login</span>
							</button>
							<p class="mt-2 row">
								<span class="col-md-6 col-12">Dont have an account? <a href="<?php echo get_template_directory_uri();?>/register.php">Register here</a></span>
								<span class=" col-ms-6 col-12 text-right">Forgotten password? <a href="<?php echo get_template_directory_uri();?>/forgotten_password.php">Reset here</a></span>
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //customers-6-->
 	<script type="text/javascript">
  	$(function()
  	{
	  	if(localStorage.userid  !=='' && localStorage.userid !==undefined)
	  	{
	  		alert('hello');
	  		window.location='index.php';
	  	}
	  	else
	  	{
	  		alert('no');
	  		$('.logged_in,.login_links').removeClass('d-none');
	  	}
  	});
  </script>
<?php get_footer();?>
