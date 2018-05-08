<?php include('server.php') ?>
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
  <link rel="stylesheet" href="../web/login.css" type="text/css" media="all">

  <!-- //Custom-Stylesheet-Links -->
  <!--fonts -->
  <link href="http://fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <!-- //fonts -->

  <!-- Font-Awesome-File-Links -->
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
  <!-- //Font-Awesome-File-Links -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript" src="login.js"></script>
 </head>
<!-- //Head -->
<!-- Body -->

<body>

    <div class="topnav" id="myTopnav">
  <a href="../web/index.php">Home</a>
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
      <a href="../web/login.php" class="active">Sign in</a>
    </div>
</div>   

  <div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="server.php"> 
      <input type="text" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button type="submit" class="btn" name="login_user">login</button>
      <p class="message">Not registered? <a href="../web/register.php">Create an account</a></p>
    </form>
  </div>
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