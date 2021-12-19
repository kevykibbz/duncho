<!-- login -->
	<?php 
		include('header.php');
	?>
	<div class="address py-5 logged_in d-none" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Profile</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<form  class="change_profile_form">
							<div class="message text-center"></div>
							<div class="mx-auto" style="position:relative;width:200px; height:200px">
							   <img src="" class="img-fluid profile_img mx-auto" alt="profile" style="border-radius:50%;width:200px; height:200px">
							   <i class="fa fa-camera profiler" onclick="$('#change_profile').click();"></i>
							   <input type="file" name="profile_img" style="display:none;" id="change_profile" accept="image/*">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="name" placeholder="name" name="name"  required >
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="userid" placeholder="Email" name="email" readonly>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="country" placeholder="country" name="country" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="city" placeholder="city" name="city" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="address" placeholder="physical address" name="address" required>
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" id="phone" placeholder="Add Phone" name="phone" required>
								<span class="text-danger phone-feedback"></span>
							</div>
						    <select class="form-control" name="gender" required="">
						    	<option value="male">Male</option>
						    	<option value="female">Female</option>
						    	<option value="other">Other</option>
						    </select>
							<button type="submit" id="profileBtn">
								 <span class="fa fa-spinner fa-spin profile_spinner" style="display:none"></span>
								<span class="profile_text">change profile</span>
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
	  		$('input[name]').each(function()
  			{
  				$(this).val(localStorage[$(this).attr('id')]);
  			});
  			$('form img').attr('src','images/profile/'+localStorage.profile);
	  		$('.logged_in,.home-links').removeClass('d-none');
	  	}
  	});
  </script>
	<?php include('footer.php') ?>