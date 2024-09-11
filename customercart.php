<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
       
 <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
 <link rel="stylesheet" href="css/animate.css">

 <link rel="stylesheet" href="css/owl.carousel.min.css">
 <link rel="stylesheet" href="css/owl.theme.default.min.css">
 <link rel="stylesheet" href="css/magnific-popup.css">

 <link rel="stylesheet" href="css/aos.css">

 <link rel="stylesheet" href="css/ionicons.min.css">

 <link rel="stylesheet" href="css/bootstrap-datepicker.css">
 <link rel="stylesheet" href="css/jquery.timepicker.css">


 <link rel="stylesheet" href="css/flaticon.css">
 <link rel="stylesheet" href="css/icomoon.css">
 <link rel="stylesheet" href="css/style.css">
	 <!-- font awesome cdn link  -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .container {
            background-color: pink;
            padding: 20px;
            border-radius: 8px;
        }
        .form-control {
            border-radius: 4px;
        }
        .btn-warning {
            background-color: red;
            border-color: red;
            color: white;
        }
        .btn-warning:hover {
            background-color: darkred;
            border-color: darkred;
        }
        .alert {
            display: none;
        }
        .border-bottom-custom {
            border-bottom: 2px solid #ccc;
            padding-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="py-1 bg-black">
	<div class="container">
		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
			<div class="col-lg-12 d-block">
				<div class="row d-flex">
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						<span class="text">+ 1235 2355 98</span>
					</div>
					<div class="col-md pr-4 d-flex topper align-items-center">
						<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						<span class="text">youremail@email.com</span>
					</div>
					<div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						<span class="text">3-5 Business days delivery &amp; Free Returns</span>
					</div>
				</div>
			</div>
		</div>
	  </div>
 </div>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
	  <a class="navbar-brand" href="index.php">Gifterzz</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="oi oi-menu"></span> Menu
	  </button>

	  <div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
		  <li class="nav-item dropdown">
		  <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>
		  <div class="dropdown-menu" aria-labelledby="dropdown04">
			  <a class="dropdown-item" href="shop.php">Shop</a>
			
			<a class="dropdown-item" href="cart.php">Cart</a>
			<a class="dropdown-item" href="checkout.php">Checkout</a>
			<a class="dropdown-item" href="faqs.php">FAQs</a>
		  </div>
		</li>
		  <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
		  <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
		  <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
		  <li class="nav-item"><a href="login.php" class="nav-link">login</a></li>
		  <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>

		</ul>
	  </div>
	</div>
  </nav>
  
<div class="container">
    <form class="form-horizontal" action="" method="post" id="contact_form">
        <fieldset>
            <legend>Personal Details</legend>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">First Name</label>
                <div class="col-md-8">
                    <input name="first_name" placeholder="First Name" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">Last Name</label>
                <div class="col-md-8">
                    <input name="last_name" placeholder="Last Name" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">E-Mail</label>
                <div class="col-md-8">
                    <input name="email" placeholder="E-Mail Address" class="form-control" type="email" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">Phone #</label>
                <div class="col-md-8">
                    <input name="phone" placeholder="Enter Your Number" class="form-control" type="tel" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">Address</label>
                <div class="col-md-8">
                    <input name="address" placeholder="Address" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">City</label>
                <div class="col-md-8">
                    <input name="city" placeholder="City" class="form-control" type="text" required>
                </div>
            </div>

            <h1 class="border-bottom-custom">Product Details</h1>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">Product Color</label>
                <div class="col-md-8">
                    <input name="product_color" placeholder="Product Color" class="form-control" type="text" required>
                </div>
            </div>

            <!-- Text input -->
            <div class="form-group row">
                <label class="col-md-4 col-form-label">Product Qty</label>
                <div class="col-md-8">
                    <input name="product_qty" placeholder="Product Qty" class="form-control" type="number" required>
                </div>
            </div>

            <!-- Success message -->
            <div class="alert alert-success" role="alert" id="success_message">
                Success! Thanks for contacting us, we will get back to you shortly.
            </div>

            <!-- Button -->
            <div class="form-group row">
                <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-warning" name="send">
                        Send <span class="glyphicon glyphicon-send"></span>
                    </button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Show the success message using JavaScript
    <?php if (isset($_POST['send'])): ?>
    document.getElementById('success_message').style.display = 'block';
    <?php endif; ?>
</script>
</body>
</html>

<?php
if (isset($_POST['send'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "costomer";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO costomer (first_name, last_name, email, phone, address, city, product_color, product_qty) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $first_name, $last_name, $email, $phone, $address, $city, $product_color, $product_qty);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $product_color = $_POST['product_color'];
    $product_qty = $_POST['product_qty'];

    if ($stmt->execute()) {
        echo "<script>document.getElementById('success_message').style.display = 'block';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?> 
