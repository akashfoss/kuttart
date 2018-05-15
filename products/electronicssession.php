 <?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "akash", "kuttart");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  
 ?>  
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
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="all">
	<!-- //Custom-Stylesheet-Links -->
	<!--fonts -->
	<link href="//fonts.googleapis.com/css?family=Marcellus+SC" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //fonts -->

	<!-- Font-Awesome-File-Links -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/font-awesome.css" type="text/css" media="all">  
  
	<script type="text/javascript" src="../js/style.js"></script>
	<!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->

<body>

      <div class="topnav" id="myTopnav">
  <a href="../session.php">Home</a>
      <a href="mensession.php">Men</a>
      <a href="womensession.php">Women</a>
      <a href="kidssession.php">Kids</a>
      <a href="electronicssession.php" class="active">Electronics</a>
      <a href="toyssession.php">Toys</a>
<a href="contactsession.php">Contact</a>

  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
  <div class="topnav-right">
    <a href="../user.php"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
      <a href="../index.php">Sign out</a>
    </div>
</div> 

	<div class="banner">
		<div class="banner-layer">
			<h1 class="title-w3layouts">
				<span class="fa fa-cart-arrow-down" aria-hidden="true"></span>Electronic's collection</h1>
		</div>
		<!-- cart's-Product-Display -->
		 <br />  
           <div class="container" style="width:700px;">  
                <?php  
                $query = "SELECT * FROM tbl_product where category='Electronics' ORDER BY id ASC";  
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
                <div class="col-md-4">  
                     <form method="post" action="electronicssession.php?action=add&id=<?php echo $row["id"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
                <div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_name"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td>$ <?php echo $values["item_price"]; ?></td>  
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>  
                               <td><a href="../session.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                               <td align="right"><a href="https://www.paypal.com/in/signin">Checkout</a></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  

		<div class="icon-bar">
  <!-- //cart's-Product-Display -->
		<i class="fa flipcart"> <div class="wthreecartaits wthreecartaits2 cart cart box_1">

		</div></i>
</div>


		<div class="copyright text-center">
			<p>© 2018 Shopping Cart. Kuttart | Design by Developers at CSE-B</p>
		</div>		
	</div>

	<!-- Default-JavaScript -->
	<script src="../js/jquery-2.2.3.js"></script>
	<!-- Custom-JavaScript-File-Links -->

	<!-- cart-js -->
	<script src="../js/minicart.min.js"></script>
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