<?php
	session_start();
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Amazekart</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="navbar navbar-default navbar-fixed-top" id="topnav">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Amazekart</a>
			</div>


		</div>
	</div>
	<p><br><br></p>
	<p><br><br></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="err_msg"></div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Payment Gateway</div>
					<div class="panel-body">
				<form method="post" action="">
					<div class="row">
						<div class="col-md-6">
							<label for="name">Card Number</label>
							<input type="text" id="card_no" name="card_no" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="name">Card Holder's Name</label>
							<input type="text" id="card_holder_name" name="card_holder_name" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="cvv">CVV</label>
							<input type="password" id="CVV" name="CVV" class="form-control">
						</div>
						<div class="col-md-6">
							<label for="date">Card Expiry Date</label>
							<input type="date" id="exp_date" name="exp_date" class="form-control">
						</div>
					</div>
					<br><br>
					<div class="col-md-12">
						<input type="button" class="btn btn-primary" value="Proceed" name="Proceed" id="proceed_payment_btn">
					</div>

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>






	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="assets/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</body>
<div class="foot"><footer>
 </footer></div>
<style> .foot{text-align: center;}
</style>
</html>
