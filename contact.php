<?php include('header.php');?>
<!-- contact -->
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Contact Us</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row address-row">
				<div class="col-lg-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s" style="cursor:pointer;">
						<h4 class="mb-3">Address</h4>
						<p><i class="fa fa-map-marker"></i> <?php echo $user['location'] ?></p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s"  style="cursor:pointer;">
						<h4 class="mb-3">Phone </h4>
						<p><a href="tel:+<?php echo $user['phone'] ?>"><i class="fa fa-phone"></i> <?php echo $user['phone'] ?></a></p>
						<p><a href="tel:+<?php echo $user['phone2'] ?>"><i class="fa fa-phone"></i> <?php echo $user['phone2'] ?></a></p>
					</div>
					<div class="address-info agileits-info wow fadeInRight animated" data-wow-delay=".6s"  style="cursor:pointer;">
						<h4 class="mb-3">Mail</h4>
						<p>
							<a href="mailto:<?php echo $user['email_address'] ?>"><i class="fa fa-envelope-open"></i> <?php echo $user['email_address'] ?></a>
						</p>
						<p>
							<a href="mailto:<?php echo $user['email_address2'] ?>"><i class="fa fa-envelope-open"></i> <?php echo $user['email_address2'] ?></a>
						</p>
					</div>
				</div>
				<div class="col-lg-6 address-left mt-lg-0 mt-5">
					<div class="address-grid"  style="cursor:pointer;">
						<h4 class="mb-3">Get In Touch</h4>
						<form  class="contact_form">
							<div class="message text-center"></div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name" id="cname">
								<span class="text-danger cname-feedback"></span>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" id="cemail">
								<span class="text-danger cemail-feedback"></span>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Subject" name="subject" id="csubject">
								<span class="text-danger csubject-feedback"></span>
							</div>
							<div class="form-group">
								<textarea placeholder="Message" class="form-control" id="cmessage" name="message"></textarea>
								<span class="text-danger cmessage-feedback"></span>
							</div>
							<button type="submit" id="contactBtn">
								 <span class="fa fa-spinner fa-spin contact_spinner" style="display:none"></span>
								<span class="contact_text">send</span>
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