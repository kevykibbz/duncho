<!-- footer -->
	<footer class="footer-emp-w3ls py-5 logged_in d-none">
		<div class="fixed-action-btn">
	      <a class="btn-floating btn-large red">
	        <i class="fa fa-bars"></i>
	      </a>
	      <ul class="list-unstyled">
	        <li><a href="<?php echo $User['whatsapp_link'] ?>" class="btn-floating green"><i class="fab fa-whatsapp"></i></a></li>
	        <li><a  href="sms://<?php echo $user['phone'] ?>?body=<?php echo urlencode('greetings,how may i be of assistance?'); ?>"  class="btn-floating red darken-1"><i class="fa fa-envelope-open"></i></a></li>
	        <li><a  href="<?php echo $user['facebook_link'] ?>"  class="btn-floating " style="background:#4267B2"><i class="fa fa-facebook-f"></i></a></li>
	        <li><a  href="<?php echo $user['twitter_link'] ?>" class="btn-floating" style="background:##1DA1F2;"><i class="fab fa-twitter"></i></a></li>
	        <li><a href="<?php echo $user['instagram_link'] ?>" class="btn-floating" style="background:#8a3ab9"><i class="fab fa-instagram"></i></a></li>
	      </ul>
  		</div>
		<div class="container py-xl-5 py-lg-3">
			<div class="row footer-top">
				<div class="col-lg-3 col-sm-6 footer-grid-wthree">
					<h3 class="footer-title text-uppercase text-white mb-lg-5 mb-4">Who We Are</h3>
					<div class="contact-info">
						<p><?php echo $user['description'] ?></p>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-5">
					<div class="contact-info">
						<div class="footer-style-w3ls">
							<h4 class="text-light mb-2">Phone</h4>
							<p><?php echo $user['phone'] ?></p>
						</div>
						<div class="footer-style-w3ls my-4">
							<h4 class="text-light mb-2">Email </h4>
							<p><a href="mailto:<?php echo $user['email_address'] ?>"><?php echo $user['email_address'] ?></a></p>
						</div>
						<div class="footer-style-w3ls">
							<h4 class="text-light mb-2">Location</h4>
							<p><?php echo $user['location'] ?></p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-5 ">
					<h2 class="footer-title text-white mb-lg-5 mb-4">Quick Links</h2>
					<ul class="links list-unstyled">
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About Us</a>
						</li>
						<li>
							<a href="#blog">Blog</a>
						</li>
						<li>
							<a href="index.php#gallery">Gallery</a>
						</li>
						<li>
							<a href="contact.php" class="m-0">Contact Us</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-3 col-sm-6 footer-grid-wthree mt-lg-0 mt-5" id="Newsletter">
					<h2 class="footer-title text-white mb-lg-5 mb-4">Subscribe to our newsletter</h2>
					<form class="subscribe_form">
						<div class="subscribe-message text-center"></div>
						<div class=" form-group">
								<input class="form-control" type="text" name="name" placeholder="Name" required="">
						</div>
						<div class="form-group">
							<input class="form-control" type="email" name="email" placeholder=" Email Address" required="">
						</div>
						<div class="form-group">
						<button type="submit" id="subscribeBtn">
							<span class="fa fa-spinner fa-spin subscribe_spinner" style="display:none"></span>
							<span class="subscribe_text">subscribe</span>
						</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="copy-right-top text-center border-top mt-5">
			<a href="#" class="move-top text-center mt-3"></a>
			<p class="copy-right text-center">&copy; <?php echo date('Y') ?> <?php echo $user['site_name']; ?>. All Rights Reserved | Design by
				<a href="<?php echo $user['designer_link'] ?>"> <?php echo $user['designer_name'] ?> </a>
			</p>
		</div>
	</footer>
	<!-- //footer -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="js/vendors/bootstrap.min.js"></script> 
	<script src="js/vendors/owl.carousel.min.js"></script> 
	<script src="js/vendors/wow.min.js"></script> 
	<script src="js/vendors/own-menu.js"></script> 
	<script src="js/vendors/jquery.sticky.js"></script> 
	<script src="js/vendors/jquery.magnific-popup.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="//code.tidio.co/yijtlq2xmcygrfhxlr5u7s30so7kl1w9.js" async></script>
	<script type="text/javascript" src="js/script.js?v=12.8"></script>
	<script type="text/javascript">
  	$(document).ready(function () {$('.fixed-action-btn').floatingActionButton(); $('.popup-with-zoom-anim').magnificPopup({type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-zoom-in'}); $('.popup-with-move-anim').magnificPopup({type: 'inline', fixedContentPos: false, fixedBgPos: true, overflowY: 'auto', closeBtnInside: true, preloader: false, midClick: true, removalDelay: 300, mainClass: 'my-mfp-slide-bottom'}); });
</script>
<script type="text/javascript">
	$(function()
	{
		document.cookie="userid="+localStorage.userid;
	});
</script>
</body>
</html>