<!-- login -->
	<?php 
		include('header.php');
		$select_opt1=['email'=>$_COOKIE['userid']];
    	$rsedit=$obj->select('users',$select_opt1);
	?>
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | Order Finish</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="alert alert-success address-grid">
						<i class="fa fa-check-circle"></i> We have received your order and is now awaiting release from our store.We will notify you upon arrival.
						<div class="text-center mt-2">
							<a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> shop more</a>
						</div>
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