<!-- login -->
	<?php include('header.php');?>
	<div class="address py-5 logged_in d-none" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Change account password</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<form  class="password_form">
							<div class="message text-center"></div>
							<div class="form-group">
								<input type="password" class="form-control" id="rpassword" placeholder="new password" name="password" >
								<span class="text-danger resetpassword-feedback"></span>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" id="rpassword2" placeholder="confirm new password" name="cpassword">
								<span class="text-danger resetpassword2-feedback"></span>
							</div>
							<button type="submit" id="passwordBtn">
								 <span class="fa fa-spinner fa-spin password_spinner" style="display:none"></span>
								<span class="password_text">change password</span>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
  	$(function()
  	{
	  	if(localStorage.userid ==='' || localStorage.userid ===undefined)
	  	{
	  		window.location='login.php';
	  	}
	  	else
	  	{
	  		$('.logged_in,.home-links').removeClass('d-none');
	  		$('.addcart_btn').attr('disabled',false);
	  	}
  	});
  </script>
	<?php include('footer.php') ?>