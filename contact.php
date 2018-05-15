<?php 
if(isset($_POST['submit'])){
    $to = "akashkrishnan705@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script type="text/javascript" src="login.js"></script>
 </head>
<!-- //Head -->
<!-- Body -->

<body>

    <div class="topnav" id="myTopnav">
  <a href="index.php">Home</a>
      <a href="products/men.php">Men</a>
      <a href="products/women.php">Women</a>
      <a href="products/kids.php">Kids</a>
      <a href="products/electronics.php">Electronics</a>
      <a href="products/toys.php">Toys</a>
  <a href="contact.php" class="active">Contact</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <div class="topnav-right">
      <a href="login.php" >Sign in</a>
    </div>
</div> 

  <div class="login-page">
  <div class="form">
    <form action="" method="post">
First Name: <input type="text" name="first_name"><br>
Last Name: <input type="text" name="last_name"><br>
Email: <input type="text" name="email"><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<button type="submit" class="btn" name="Submit">Submit</button>
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
  

</body>
<!-- //Body -->

</html>

