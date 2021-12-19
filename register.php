	<?php include('header.php'); ?>
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Register</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<form  class="register_form">
							<div class="form-group">
								<input type="text" id="name" class="form-control invalid" placeholder="Name" name="name" >
								<span class="text-danger name-feedback"></span>
							</div>
							<div class="form-group">
								<input type="email" id="email" class="form-control" placeholder="Email" name="email">
								<span class="text-danger email-feedback"></span>
							</div>
							<div class="form-group">
								<input type="password" id="password" class="form-control" placeholder="password" name="password">
								<span class="text-danger password-feedback"></span>
							</div>
							<div class="form-group">
								<input type="password" id="cpassword" class="form-control" placeholder="confirm password" name="cpassword">
								<span class="text-danger cpassword-feedback"></span>
							</div>
							<button type="submit" id="registerBtn">
								 <span class="fa fa-spinner fa-spin register_spinner" style="display:none"></span>
								<span class="register_text">register</span>
							</button>
							<p class="mt-2 text-cente">Already have an account? <a href="login.php">Login here</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
  	$(function()
  	{
	  	if(localStorage.userid  !=='' && localStorage.userid !==undefined)
	  	{
	  		window.location='index.php';
	  	}
	  	else
	  	{
	  		$('.logged_in,.reg_links').removeClass('d-none');
	  	}
  	});
  </script>
	<?php include('footer.php') ?>