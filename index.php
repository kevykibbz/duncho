<?php
	include('header.php');
	$sql =$con->prepare("SELECT * FROM testimonials ORDER BY RAND()");
  $sql->execute();
  $result=$sql->get_result();
?>
	<!-- main banner -->
	<div class="main-top logged_in d-none" id="home">

		<!-- banner -->
		<div class="banner_w3lspvt">
			<div class="csslider infinity" id="slider1">
				<input type="radio" name="slides" id="slides_1" />
				<input type="radio" name="slides" checked="checked" id="slides_2" />
				<input type="radio" name="slides" id="slides_3" />
				<ul class="banner_slide_bg">
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<h5>The easier way to find models</h5>
								<h3 class="w3ls_pvt-title">Discover Models or Be Discovered</h3>
								<a href="contact.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Contact Us</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<h5>The easier way to find models</h5>
								<h3 class="w3ls_pvt-title">Discover Models or Be Discovered</h3>
								<a href="contact.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Contact Us</a>
							</div>
						</div>
					</li>
					<li>
						<div class="container">
							<div class="w3ls_banner_txt">
								<h5>The easier way to find models</h5>
								<h3 class="w3ls_pvt-title">Discover Models or Be Discovered</h3>
								<a href="contact.php" style="max-width: 150px;" class="btn button-style mt-sm-5 mt-4">Contact Us</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="navigation">
					<div>
						<label for="slides_1"></label>
						<label for="slides_2"></label>
						<label for="slides_3"></label>
					</div>
				</div>
			</div>
		</div>
		<!-- //banner -->
	</div>
	<!-- //main banner -->

	<!-- banner bottom -->
	<div class="w3ls-welcome pt-5 logged_in d-none" id="about">
		<div class="container pt-sm-3">
			<div class="row">
				<div class="col-lg-6 welcome-left py-xl-5 py-lg-3">
					<h3>Welcome To Our <?php echo $user['site_name'] ?> Website</h3>
					<h4 class="mb-sm-5 mb-4 mt-3 font-italic">Together we’ll make this world <br>more beautiful.
					</h4>
					<div class="row support-bottom">
						<div class="col-6 support-grid">
							<div class="icon-effect">
								<span class="fa fa-spinner" aria-hidden="true"></span>
							</div>
							<h5 class="mt-4 mb-3">Make Over</h5>
							<p>Ut enim ad minima ven aiam, quis no strum ullam corp oris susc ipit.</p>
						</div>
						<div class="col-6 support-grid">
							<div class="icon-effect grid-w3ls-2">
								<span class="fa fa-star-o" aria-hidden="true"></span>
							</div>
							<h5 class="mt-4 mb-3">Stylist</h5>
							<p>Ut enim ad minima ven aiam, quis no strum ullam corp oris susc ipit.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 welcome-right p-lg-0 mt-3 text-lg-right text-center">
					<img src="images/img.jpg" alt=" " class="img-fluid">
				</div>
			</div>
		</div>
	</div>
	<!-- //banner bottom -->

	<!-- services -->
	<div class="serives-agile py-5 logged_in d-none" id="services">
		<div class="container py-xl-5 py-lg-3">
			<div class="row support-bottom text-center">
				<div class="col-md-4 services-w3ls-grid">
					<i class="fa fa-eye" aria-hidden="true"></i>
					<h4 class="text-white text-uppercase mt-md-5 mt-4 mb-3">Heading Here</h4>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
				<div class="col-md-4 services-w3ls-grid my-md-0 my-4">
					<i class="fa fa-gift" aria-hidden="true"></i>
					<h4 class="text-white text-uppercase mt-md-5 mt-4 mb-3">Heading Here</h4>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
				<div class="col-md-4 services-w3ls-grid">
					<i class="fa fa-heart-o" aria-hidden="true"></i>
					<h4 class="text-white text-uppercase mt-md-5 mt-4 mb-3">Heading Here</h4>
					<p>Ut enim ad minima veniam, quis nostrum ullam corporis suscipit laboriosam.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog-w3ls py-5 logged_in d-none" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="title text-center mb-5">
				<h3 class="mb-2">Blog Posts</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="row package-grids">
				<div class="col-lg-4 posts-agiles">
					<div class="posts-top">
						<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>Sep</span>
						</h3>
					</div>
					<div class="posts-w3ls-bottom py-4">
						<h4 class="mb-2">Sit accus antium</h4>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa fa-thumbs-up mr-1"></i>20 Likes</a>
							</li>
							<li class="mx-3">
								<a href="#">
									<i class="fa fa-comments mr-1"></i>48 Comments</a>
							</li>
						</ul>
						<p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
							nostrud exercitation.</p>
					</div>
				</div>
				<div class="col-lg-4 posts-agiles my-lg-0 my-4">
					<div class="posts-top">
						<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>16
							<span>Sep</span>
						</h3>
					</div>
					<div class="posts-w3ls-bottom py-4">
						<h4 class="mb-2">Sit accus antium</h4>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa fa-thumbs-up mr-1"></i>20 Likes</a>
							</li>
							<li class="mx-3">
								<a href="#">
									<i class="fa fa-comments mr-1"></i>48 Comments</a>
							</li>
						</ul>
						<p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
							nostrud exercitation.</p>
					</div>
				</div>
				<div class="col-lg-4 posts-agiles">
					<div class="posts-top">
						<a href="#" data-toggle="modal" data-target=".bd-example-modal-lg">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>20
							<span>Sep</span>
						</h3>
					</div>
					<div class="posts-w3ls-bottom py-4">
						<h4 class="mb-2">Sit accus antium</h4>
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa fa-thumbs-up mr-1"></i>20 Likes</a>
							</li>
							<li class="mx-3">
								<a href="#">
									<i class="fa fa-comments mr-1"></i>48 Comments</a>
							</li>
						</ul>
						<p class="mt-3">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
							nostrud exercitation.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- middle section -->
	<section class="w3ls-bnrbtm py-5 logged_in d-none" id="middle">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-xl-5 col-lg-7">
					<span class="w3-line text-uppercase">Fashion Look</span>
					<h3 class="agile-title mt-2 mb-3">Creating Your Beauty Image</h3>
					<p class="text-botm">Donec consequat sapien ut leo cursus rhoncus. Nullam dui mi, vulputate ac metus at</p>
				</div>
			</div>
		</div>
	</section>
	<!-- //middle section -->

	<!-- gallery -->
	<section class="w3-gallery logged_in d-none">
  <div class="porfolio-inf py-5">
    <div class="container pt-lg-5 pb-lg-4">
      <div class="row title-content" style="margin-bottom:10px !important;">
        <div class="col-lg-4 title-left">
          <h3 class="hny-title">Top fashions</h3>
        </div>
        <div class="col-lg-8 title-info">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eligendi minima accusantium
            reiciendis, cupiditate optio corrupti quis quam at!.Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum.</p>
        </div>
      </div>
      <div class="port-text-cards text-left mt-5 mb-3 d-flex">
        <button class="btn active filter-button" data-filter="all" onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">All</button>
        <button class="btn filter-button" data-filter="photo"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Women</button>
        <button class="btn filter-button" data-filter="graphic"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Men</button>
        <button class="btn filter-button" data-filter="webdesign"onclick="$('.filter-button').removeClass('active');$(this).addClass('active');">Teens</button>
      </div>
      <br />

      <div class="row">
      	<?php
  			$userid='';
  			if(isset($_SESSION['userid']))
  			{
  				$userid=$_SESSION['userid'];
  			}
      	?>
      	<input type="hidden" name="userid" id="userid" value="<?php echo $userid;?>">
      	<div class="col-12">
      		   <div class="cart-message text-center" id="cart-message"></div>
      	</div>
      	<?php 	
      		$query=$con->query('SELECT * FROM cart ORDER BY id DESC ');
      		while($rows=$query->fetch_assoc()):
      	 ?>
        <div class="col-md-3 filter photo">
          <div class="each-item">
            <a href="#"><img class="port-image img-fuild lazy"  loading="lazy" src="images/<?php echo $rows['item'] ?>"  alt="" /></a>
          </div>
          <div class="course-content">
            <div class="course-info row">
              <h6 class="col-12"><a class="course-instructor" href="#">Christina Rose</a></h6>
              <button class="btn btn-info col-12 text-center course-titlegulp-wrapper addcart_btn" onclick="addCart(localStorage.userid,<?php echo $rows['id'] ?>)" disabled>add to cart</button>
            </div>
          </div>
        </div>
    	<?php 	endwhile; ?>
    	<script type="text/javascript">
			 function addCart(email,id)
			 {
			 	 	$.ajax(
			    {
			        url: "php/cart.php",
			        method:'post',
			        dataType: "text",
			        data:{'id':id,'email':email},
			        success:function(callback)
			        {
			          eval(callback);
			        },
			        error:function()
			        {
			          alert('something went wrong');
			        }
			    });
			 }
			</script>
      </div>
    </div>
    <!-- //gallery container -->
  </div>
</section>
<!-- //gallery -->

	<!-- newsletter -->
	<div class="newsletter_right_w3agile py-5 logged_in d-none" id="newsletter">
		<div class="container py-xl-5 py-lg-3">
			<div class="title news-titl text-center mb-5">
				<h3 class="mb-2">Our Newsletter</h3>
				<p>Ut enim ad minim veniam, quis nostrud ullam.</p>
			</div>
			<div class="n-right-w3ls">
				<form class="subscribe_form">
					<div class="subscribe-message text-center"></div>
					<div class="row">
						<div class="col-md-4 form-group">
							<input class="form-control" type="text" name="name" placeholder="Name" required="">
						</div>
						<div class="col-md-4 form-group">
							<input class="form-control" type="email" name="email" placeholder=" Email Address" required="">
						</div>
						<div class="col-md-4 form-group">
							<input class="form-control submit" type="submit" value="subscribe">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- //newsletter -->

    <!-- testimonials -->
	<section class="w3l-customers-6 logged_in d-none">
  	<!--/customers -->
	  <div class="customers-6-infhny py-5">
	    <div class="container py-lg-5">

	        <div class="row title-content mb-5">
	            <div class="col-lg-4 title-left">
	              <h3 class="hny-title">Happy clients</h3>
	            </div>
	            <div class="col-lg-8 title-info">
	              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae eligendi minima accusantium
	                reiciendis, cupiditate optio corrupti quis quam at!.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
	            </div>
	         </div>
	        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	            <!-- Carousel indicators -->
	            <ol class="carousel-indicators">
	              <li data-target="#myCarousel" data-slide-to="0" class="active"  style="cursor:pointer;"></li>
	              <li data-target="#myCarousel" data-slide-to="1"  style="cursor:pointer;"></li>
	              <li data-target="#myCarousel" data-slide-to="2"  style="cursor:pointer;"></li>
	            </ol>   
	            <!-- Wrapper for carousel items -->
	            <div class="carousel-inner"> 
	            	<?php
	            			if($result->num_rows >0)
            				{
            					while($row=$result->fetch_assoc())
            					{
            						?>
            						    <div class="item carousel-item active" style="cursor:pointer;">
						                <div class="img-box"><img loading="lazy" src="images/c1.jpg" alt=""></div>
						                <p class="testimonial"><?php echo $row['message'] ?></p>
						                <p class="overview"><b><?php echo $row['name'] ?></b>client <span><?php echo $obj->time_diff($row['date']); ?>.</span></p>
						                <div class="star-rating">
						                  <ul class="list-inline">
						                    <li class="list-inline-item"><span class="fa fa-star"></span></li>
						                    <li class="list-inline-item"><span class="fa fa-star"></span></li>
						                    <li class="list-inline-item"><span class="fa fa-star"></span></li>
						                    <li class="list-inline-item"><span class="fa fa-star"></span></li>
						                    <li class="list-inline-item"><span class="fa fa-star-o"></span></li>
						                  </ul>
						                </div>
						              </div>
            						<?php
            					}
            				}
	          		?>
	            </div>
	            <!-- Carousel controls -->
	            <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev" style="cursor:pointer;">
	              <span class="fa fa-angle-left"></span>
	            </a>
	            <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"  style="cursor:pointer;">
	              <span class="fa fa-angle-right"></span>
	            </a>
	          </div>
	      </div>
	    <!--//customers -->
	  </div>
	</section>
	<!-- //customers-6-->
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