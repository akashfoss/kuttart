
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
  <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
  <!-- //Font-Awesome-File-Links -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript" src="login.js"></script>

 </head>
<!-- //Head -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for  buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Add padding to container elements */
.container {

    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for save button on extra small screens */
@media screen and (max-width: 300px) {
    .savebtn {
       width: 100%;
    }
}
</style>
<!-- Body -->

<body>
  <div class="topnav" id="myTopnav">
  <a href="session.php" class="active">Home</a>
      <a href="products/men.php">Men</a>
      <a href="products/women.php">Women</a>
      <a href="products/kids.php">Kids</a>
      <a href="products/electronics.php">Electronics</a>
      <a href="products/toys.php">Toys</a>
  <a href="products/contactsession.php">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <div class="topnav-right">
    <a href="user.php" class="active"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
      <a href="index.php">Sign out</a>
    </div>
</div> 

  <?php

    require_once('retrieve.php');
    $usr=$_SESSION['email'];
    $result = $conn->prepare("SELECT * FROM users where email='$usr'");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
  ?>

<form method="post" action="php_code.php" style="border:0px solid #ccc ">
  <div class="container">
    <h1 style="color:red"><center>PROFILE</center></h1>

    <hr>
    <label for="email"><b>Name</b></label>
    <input type="text" value="<?php echo $row['username']; ?>" name="Name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" value="<?php echo $row['email']; ?>" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" value="<?php echo $row['password']; ?>" name="psw" required>

     <label for="Address"><b>Address</b></label>
    <input type="text" value="<?php echo $row['address']; ?>" name="Address" required>

    <label for="City"><b>City</b></label>
    <input type="text" value="<?php echo $row['city']; ?>" name="City" required>

    <label for="Country"><b>Country</b></label>
    <input type="text" value="<?php echo $row['country']; ?>" name="Country" required>

    <label for="Pin"><b>Pin</b></label>
    <input type="text" value="<?php echo $row['pin']; ?>" name="Pin" required>
    

    <div class="clearfix">
      <button type="submit" class="savebtn">Save</button>
    </div>
  </div>
</form>
<?php } ?>


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