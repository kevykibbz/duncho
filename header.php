<?php include('php/class.php');include('php/user.php'); $obj=new urbanXplore(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $user['site_name'] ?></title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="<?php echo $user['key_words'];?>" />
	<meta name="author" content="mjtech" />
	<meta charset="utf-8">
	<meta name="theme-color" content="#FC427B">
	<meta name="msapplication-navbutton-color" content="#FC427B">
	<meta name="apple-mobile-web-app-status-bar-style" content="#FC427B">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:site_name" content="<?php echo $user['site_name'];?>">
	<meta property="og:url" content="https://<?php echo $_SERVER['SERVER_NAME'] ?>/index.php">  
	<meta property="og:type" content="website"> 
	<meta property="og:type" content="article">
	<meta property="og:title" content="<?php echo $user['site_name'];?> home">
	<meta property="og:description" content="<?php echo $user['site_name'];?> <?php echo $user['description'];?>.">
	<meta property="og:image" content="https:/<?php echo $_SERVER['SERVER_NAME'] ?>/images/<?php echo $user['site_image'] ?>">
	<!-- Document Title -->
	<title><?php echo $user['site_name'];?></title>
	<!-- Favicon -->
	<link rel="shortcut icon" href="images/hmslogo.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/responsive.css">
	<link href="//fonts.googleapis.com/css?family=Srisakdi:400,700&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	 rel="stylesheet">
</head>
<body>

	<!-- header -->
	<header class="sticky-top logged_in d-none" style="background:#fff;">
		<div class="container-fluid">
			<div class="header d-md-flex justify-content-between align-items-center py-3 px-xl-5 px-lg-3 px-2">
				<!-- logo -->
				<div id="logo">
					<h1><a class="" href="index.php"><?php echo $user['site_name'] ?></a></h1>
				</div>
				<!-- //logo -->
				<!-- nav -->
				<div class="nav_w3ls">
					<nav>
						<label for="drop" class="toggle">Menu</label>
						<input type="checkbox" id="drop" />
						<ul class="menu">
						 	<li class="active home-links d-none"><a href="index.php">Home</a></li>
							<li class="mx-lg-4 mx-md-3 my-md-0 my-2 reg_links login_links home-links d-none">
							<label for="drop-2" class="toggle toogle-2 ">More <span class="fa fa-angle-down" aria-hidden="true"></span>
							</label>
							<a href="#" class="home-links">More <span class="fa fa-angle-down d-none" aria-hidden="true"></span></a>
							<input type="checkbox" id="drop-2" />
							<ul>
								<li><a href="about.php" class="drop-text">About us</a></li>
								<li><a href="contact.php" class="drop-text">Contact us</a></li>
								<li class="d-none home-links"><a href="comment.php" class="drop-text">Add testimonial</a></li>
								<li class="home-links d-none"><a href="mycart.php" class="drop-text">My cart <span class="badge badge-pill badge-danger p-2 float-right">
								<?php
								if (isset($_COOKIE['userid'])) {
									$email = $_COOKIE['userid'];
									
									// Assuming $obj->select returns an array or false in case of an error
									$select = $obj->select('cart_items', ['email' => $email]);

									if (is_array($select)) {
										echo number_format(count($select));
									} else {
										// Handle the case where $select is not an array (perhaps log an error)
										echo "Error retrieving cart items";
									}
								}
								?>
								</span></a></li>
								<li class="home-links d-none"><a href="profile.php" class="drop-text">Profile</a></li>
								<li class="home-links d-none"><a href="password.php" class="drop-text">change password</a></li>
							</ul>
						</li>
						<li  class="mx-lg-4 mx-md-3 my-md-0 my-2 home-links d-none"><a href="#gallery">Gallery</a></li>
						<li class="mx-lg-4 mx-md-3 my-md-0 my-2 d-none login_links"><a href="register.php">Register</a></li>
						<li class="mx-lg-4 mx-md-3 my-md-0 my-2 d-none reg_links"><a href="login.php">Login</a></li>
						<li class="home-links d-none"><a href="#" onclick="delete localStorage.userid;window.location='login.php';">Logout</a></li>
						</ul>
					</nav>
				</div>
				<!-- //nav -->
			</div>
		</div>
	</header>
	<!-- //header -->	