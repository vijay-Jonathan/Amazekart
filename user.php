	
<?php 

session_start();
include('dbconnect.php');
	if(!isset($_SESSION['uid'])){
	header('Location:index.php');
	}


$uid=$_SESSION['uid'];

					$sql="SELECT * FROM user_info WHERE user_id='$uid'";
					$run_query=mysqli_query($conn,$sql);
				   // $res=mysqli_query($con,$sql);
                    //$row=mysqli_fetch_array($res);
					$row=mysqli_fetch_array($run_query);
					$f_name=$row['first_name'];
					$l_name=$row['last_name'];
                    $mobile=$row['mobile'];
					$email=$row['email'];
					$address1=$row['address1'];
	                $address2=$row['address2'];
					$image=$row['img'];


					
					
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
					<div class="panel-heading">User Info</div>
					<div class="panel-body">
				<form method="post" action="">
				<div class='row'>
				<?php echo "
					<div class='col-md-7 pull-right'>
						<img src='userpics/$image' style='width:300px;height:200px;'>
					"?>
					<br><br>
				</div>	
				<!-- <div class="col-md-6">
					<img src="assets/prod_images/$image" class="img-responsive center-block  " alt="" style="width:200px ;height:220px">
					

				</div> -->
				
				<div class="row">
					
					<div class="col-md-6 ">
						<label for="f_name"></label>Name :  <?php echo $f_name;?>   <?php echo $l_name;?></label>
						<!-- <input type="text" id="f_name" name="f_name" class="form-control"> -->
					</div>
					
				</div>
				

					<div class="row">
					
						<div class="col-md-6 ">
						<br>

							<label for="email">     Email : <?php echo $email;?> </label>
					<br><br>

							<!-- <input type="text" id="email" name="email" class="form-control"> -->
						</div>
						<br><br>
						
						<div class="col-md-6 ">
							<!-- <label for="password">Password</label> -->
							<!-- <input type="password" id="password" name="password" class="form-control"> -->
						</div>

					</div>

					<div class="row">
						<div class="col-md-6 ">
							<label for="mobile">     Mobile : <?php echo $mobile;?></label>
							<!-- <input type="text" id="mobile" name="mobile" class="form-control"> -->
						</div>
						<br><br>
						<div class="col-md-6"></div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address1">     Address #1 : <?php echo $address1;?></label>
							<!-- <input type="textarea" id="address1" name="address1" class="form-control"> -->
						</div><br><br>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="address2">     Address #2 : <?php echo $address2;?></label>
							<!-- <input type="textarea" id="address2" name="address2" class="form-control"> -->
						</div><br><br>
					</div>

					<br><br>
					<!-- <div class="col-md-12">
						<input type="button" class="btn btn-primary" value="Signup" name="signup" id="signup_btn">
					</div> -->

					</div>
					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-primary text-center">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body"></div>
					<div class="row">
						<div class="col-md-2"><b>Action</b></div>
						<div class="col-md-2"><b>Product Image</b></div>
						<div class="col-md-2"><b>Product Name</b></div>
						<div class="col-md-2"><b>Product Price</b></div>
						<div class="col-md-2"><b>Quantity</b></div>
						<div class="col-md-2"><b>Price in $</b></div>
					</div>
					<br><br>
					<div id='cartdetail'>
					<!--<div class="row">
						<div class="col-md-2"><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span></a>
						</div>
						<div class="col-md-2"><img src="assets/prod_images/tshirt.JPG" width="60px" height="60px"></div>
						<div class="col-md-2">Tshirt</div>
						<div class="col-md-2">$700</div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='1'></div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='700'></div>
					</div>-->
					</div>
					<!--<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">
							<b>Total: $500000</b>
						</div>
					</div>-->
					<div class="panel-footer">

					</div>
				</div>
				<button class='btn btn-success btn-lg pull-right' id='checkout_btn' data-toggle="modal" data-target="#myModal">Checkout</button>
			</div>

			<div class="col-md-2"></div>
		</div>
	</div>


<!-- 
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
			<div class="row">
				<div class="col-md-12" id="cart_msg"></div>
			</div>
				<div class="panel panel-primary text-center">
					<div class="panel-heading">Your Orders</div>
					<div class="panel-body"></div>
					<div class="row"> -->
						<!-- <div class="col-md-2"><b>Action </b></div> 
						<div class="col-md-2"><b>Product Image</b></div>
						<div class="col-md-2"><b>Product Name</b></div>
						<div class="col-md-2"><b>Product Price</b></div>
						<div class="col-md-2"><b>Quantity</b></div>
						<div class="col-md-2"><b>Transaction ID</b></div>
						<div class="col-md-2"><b>Order Status</b></div>
					</div>
					<br><br>
					<div id='userorder'>.
					<div class='row'>
									
				</div>-->
				
					<!--<div class="row">
						<div class="col-md-2"><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
						<a href="#" class="btn btn-success"><span class="glyphicon glyphicon-ok-sign"></span></a>
						</div>
						<div class="col-md-2"><img src="assets/prod_images/tshirt.JPG" width="60px" height="60px"></div>
						<div class="col-md-2">Tshirt</div>
						<div class="col-md-2">$700</div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='1'></div>
						<div class="col-md-2"><input class="form-control" type="text" size="10px" value='700'></div>
					</div>-->
					<!-- </div> -->
					<!--<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4">
							<b>Total: $500000</b>
						</div>
					</div>-->
					<!-- <div class="panel-footer">

					</div>
				</div> -->
				<!-- <button class='btn btn-success btn-lg pull-right' id='checkout_btn' data-toggle="modal" data-target="#myModal">Checkout</button> -->
			<!-- </div>

			<div class="col-md-2"></div>
		</div>
	</div> -->







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
