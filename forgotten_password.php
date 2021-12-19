<!-- forgotten password -->
	<?php include('header.php'); ?>
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Forgotten password</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<div class="message text-center"></div>
						<form  class="forgotten_password_form">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" id="femail">
								<span class="text-danger femail-feedback"></span>
							</div>
							<button type="submit" id="frgpswBtn">
								 <span class="fa fa-spinner fa-spin reset_spinner" style="display:none"></span>
								<span class="reset_text">submit</span>
							</button>
							<p class="mt-2 row">
								<span class="col-12 text-center">All good ? <a href="login.php">Login here</a></span>
							</p>
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