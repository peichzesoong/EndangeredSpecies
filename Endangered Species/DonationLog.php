<html>
<head>
	<title> Donation Success</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="donationlogstyle.css" rel="stylesheet">
</head>

<body>
<!-- Heading for Donation Log --> 
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-4"><b>Donation Success</b></h1>
		</div>
		<div class="col-12">
			<p class="lead">Thank you for your kind donation.</p>
		</div>
	</div>
</div>

<!--- Bootstrap at PHP content -->
<div class="container-fluid">
	<div class="row welcome">
		<div class="col-12">

<!--- PHP for forms -->
<?php
//retrieve form data in variables
$input1 = $_POST ['fname'];
$input2 = $_POST ['lname'];
$input3 = $_POST ['address'];
$input4 = $_POST ['state'];
$input5 = $_POST ['postcode'];
$input6 = $_POST ['payment_type'];
$input7 = $_POST ['card_no'];
$input8 = $_POST ['CVV_no'];
$input9 = $_POST ['exp_date_month'];
$input10 = $_POST ['exp_date_year'];

//print all the form details based on input
echo "<h2>Personal Information</h2>";
echo "First name : <i>$input1</i>";
echo "<br>";
echo "Last name : <i>$input2</i>";
echo "<br>";
echo "Address : <i>$input3</i>";
echo "<br>";
echo "State : <i>$input4</i>";
echo "<br>";
echo "Postcode : <i>$input5</i>";
echo "<br>";
echo "<br>";
echo "<h2>Payment Information</h2>";
echo "Payment Type: <i>$input6</i>";
echo "<br>";
echo "Credit Card Number: <i>$input7</i>";
echo "<br>";
echo "CVV Number: <i>$input8</i>";
echo "<br>";
echo "Expiration Date: <i>$input9 / $input10</i>";
?>
		</div>
	</div>
</div>

<!-- Back Button -->
<div class="container-fluid padding">
	<div class="row text-center">
		<div class="col-12">
			<br>
			<a href="wayspreserve.html" class="btn btn-primary">Back</a>
		</div>
	</div>
</div>
</body>
</html>