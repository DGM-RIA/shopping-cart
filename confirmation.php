<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shopping Cart</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Main CSS file -->
    <link href="css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>




  <body>
  	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Spuds R' Us</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li><a href="index.php">Home</a></li>
	      <li><a href="products.php">Products</a></li>
	      <li><a href="cart.php">Cart</a></li>
	      <li><a href="checkout.php">Checkout</a></li>
	      <li><a href="admin.php">Admin Panel</a></li>
	    </ul>
	  </div>
	</nav>


    <!--MAIN CONTENT-->
    <div class="container">
    	<div class="row">
    		<div class="col-xs-12">
    			<h1>Thank your for your order!</h1>
    			<hr>
    		</div>
    	</div>


    	<div class="row">
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                
                <h2>You can expect your Potato gun to arrive in the next week. Contact us if you have any questions.</h2>
                
                <pre style="color: black;">
                    <?php
                        echo 'hi';
                        echo $_REQUEST['Bfirstname'];
                        print_r($_REQUEST);


                    ?>
                </pre>

            </div>            
        </div>

        <br><br>


        





    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>

</html>