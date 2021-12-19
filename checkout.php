<!-- login -->
	<?php 
		include('header.php');
		$select_opt1=['email'=>$_COOKIE['userid']];
    	$rsedit=$obj->select('users',$select_opt1);
	?>
	<div class="address py-5" id="contact">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Duncho | confirm address</h3>
			</div>
			<div class="row">
				<div class="col-lg-6 mx-auto mt-lg-0 mt-5">
					<div class="address-grid">
						<p class="text-center">Total Cost: $ <?php $sql =$con->prepare("SELECT sum(price) as total  FROM `cart_items` ");
                    $sql->execute();
                    $result=$sql->get_result();
                    while ($row =$result->fetch_assoc())
                    { 
                       echo number_format($row['total']);
                    } ?></p>
						<p class="text-center">Total Items: <?php 
																		$email=$_COOKIE['userid'];
																		$query=$con->query("SELECT * FROM `cart_items` WHERE email='$email'"); echo $query->num_rows;?></p>
						<p class="text-center">Physical adress: <?php echo $rsedit[0]['address'] ?></p>
						<p class="text-center">Email adress: <?php echo $rsedit[0]['email'] ?></p>
						<p class="text-center">Phone number: <?php echo $rsedit[0]['phone'] ?></p>
						<p class="text-center">Helpline: <a href="tel:<?php echo $user['phone'] ?>"><?php echo $user['phone'] ?></a></p>
						<form class="mt-3">
						    <select class="form-control" name="gender" required="">
						    	<option value="sample pickup location one">sample pickup location one</option>
						    	<option value="sample pickup location two">sample pickup location two</option>
						    	<option value="sample pickup location three">sample pickup location three</option>
						    </select>
							<div class="text-center mt-3">
								<a href="finish.php" class="btn btn-info btn-block">
								 <span class="fa fa-spinner fa-spin profile_spinner" style="display:none"></span>
								<span class="profile_text">Finish</span>
							</a>
							</div>
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
        $('.removecart_btn,.checkotbtn').attr('disabled',false);
      }
    });
  </script>
	<?php include('footer.php') ?>