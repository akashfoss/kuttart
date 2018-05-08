<?php 
  session_start(); 

  //if (!isset($_SESSION['username'])) {
  	//$_SESSION['msg'] = "You must log in first";
  	//header('location: login.php');
  //}

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<!-- Head -->

<head>
	<title>Kuttart</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="keywords" content="Kuttart, shopping cart, flat ui, open source, mobile friendly, ecommerce, amazon, flipcart, snapdeal">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Index-Page-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->
	<!--fonts -->
	<link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //fonts -->

	<!-- Font-Awesome-File-Links -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<script type="text/javascript" src="js/style.js"></script>
	<!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->

<body>
	
   <div class="topnav" id="myTopnav">
  <a href="#home" class="active">Home</a>
    <div class="dropdown">
    <button class="dropbtn">Products
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="products/men.php">Men</a>
      <a href="products/women.php">Women</a>
      <a href="products/kids.php">Kids</a>
      <a href="products/electronics.php">Electronics</a>
      <a href="products/toys.php">Toys</a>
    </div>
  </div>
  <a href="#contact">Contact</a>

  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <div class="topnav-right">
      <a href="login.php">Sign in</a>
    </div>
</div> 


	<div class="banner">
		<div class="banner-layer">
			<h1 class="title-w3layouts">
				<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>KUTTART</h1>
		</div>
		<!-- cart's-Product-Display -->
		<div class="wthreeproductdisplay">
			<div class="container">
				<div class="top-grid">
					<div class="cart-grid" id="cart-1">
						<div class="img">
							<img src="images/d5.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$60.00</li>
							<li class="right-text">$115.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #001" />
								<button type="submit" class="button w3l-cart" data-id="cart-1">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-2">
						<div class="img">
							<img src="images/d1.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$95.00</li>
							<li class="right-text">$195.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #002" />
								<button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-3">
						<div class="img">
							<img src="images/d8.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$40.00</li>
							<li class="right-text">$95.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #003" />
								<button type="submit" class="button w3l-cart" data-id="cart-3">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-4">
						<div class="img">
							<img src="images/d4.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$95.00</li>
							<li class="right-text">$195.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #004" />
								<button type="submit" class="button w3l-cart" data-id="cart-4">add to cart</button>
							</form>
						</div>
					</div>

					<div class="clear"></div>
				</div>
				<div class="bot-grid">
					<div class="cart-grid" id="cart-5">
						<div class="img">
							<img src="images/d7.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$20.00</li>
							<li class="right-text">$45.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #005" />
								<button type="submit" class="button w3l-cart" data-id="cart-5">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-6">
						<div class="img">
							<img src="images/d3.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$50.00</li>
							<li class="right-text">$95.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #006" />
								<button type="submit" class="button w3l-cart" data-id="cart-6">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-7">
						<div class="img">
							<img src="images/d2.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$25.00</li>
							<li class="right-text">$65.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #007" />
								<button type="submit" class="button w3l-cart" data-id="cart-7">add to cart</button>
							</form>
						</div>
					</div>
					<div class="cart-grid" id="cart-8">
						<div class="img">
							<img src="images/d6.jpg" alt="img">
						</div>
						<ul class="info">
							<li>$36.00</li>
							<li class="right-text">$84.00</li>
						</ul>
						<div class="snipcart-details ">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="w3l_item" value="Striped Top ">
								<input type="hidden" name="amount" value="25.00">
								<input type="hidden" name="item_name" value="Product #008" />
								<button type="submit" class="button w3l-cart" data-id="cart-8">add to cart</button>
							</form>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</div>
		</div>
		

		<div class="icon-bar">
  <!-- //cart's-Product-Display -->
		<i class="fa flipcart"> <div class="wthreecartaits wthreecartaits2 cart cart box_1">
			<form action="#" method="post" class="last">
				<input type="hidden" name="cmd" value="_cart" />
				<input type="hidden" name="display" value="1" />
				<button class="w3view-cart" type="submit" name="submit" value="">
					<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>
				</button>
			</form>
		</div></i>
</div>


		<div class="copyright text-center">
			<p>© 2018 Shopping Cart. Kuttart | Design by Developers at CSE-B</p>
		</div>		
	</div>

	<!-- Default-JavaScript -->
	<script src="js/jquery-2.2.3.js"></script>
	<!-- Custom-JavaScript-File-Links -->

	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
	<script>
		// Mini Cart
		paypal1.minicart1.render({ //use only unique class names other than paypal1.minicart1.Also Replace same class name in css and minicart.min.js
			action: '#'
		});

		if (~window.location.search.indexOf('reset=true')) {
			paypal1.minicart1.reset();
		}
	</script>
	<!-- //cart-js -->

</body>
<!-- //Body -->

</html>