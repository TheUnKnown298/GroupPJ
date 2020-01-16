<?php include('server.php') ?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>ShopCon Login</title>
    <!-- <link rel="stylesheet" type="text/css" href="style2.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<body>

    <!-- <div class="header">
        <h2>Login</h2>
    </div> -->
	<?php
	$conn = mysqli_connect("localhost","root","","nhahang");
	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);
 
	?>

                        <!-- <action="login.php" method = "post" >

                            <?php include('errors.php'); ?>

                            <div class="input-group">
                                <label>Username</label>
                                <input type="text" name="username">
                            </div>
                            <div class="input-group">
                                <label>Password</label>
                                <input type="password" name="password">
                            </div>
                             <div class="input-group">
                                <button type="submit" class="btn" name="login_user">Login</button>
                            </div> -->
                            <!-- <p>
                                Not yet a member? <a href="register.php">Sign up</a>
                            </p>
                        </form> -->
    	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" method="post" action="login.php">
				<?php include('errors.php'); ?>
					<span class="login100-form-title p-b-53">
						Sign In With
					</span>

					<a href="#" class="btn-face m-b-20">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>

					<a href="#" class="btn-google m-b-20">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
						Google
					</a>
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
                            Username
                
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" 
						<?php
                                //  $conn = mysqli_connect("localhost","root","","nhahang") or die ('Không thể kết nối tới database');
                                //  $sql = "SELECT * FROM user";
                                //  $result = mysqli_query($conn, $sql);
                                //  if (!$result){
                                //     die ('Câu truy vấn bị sai');
                                //  }
                                //  while($row = mysqli_fetch_assoc($result)){
								// 	 echo $row['username'];
								//  }
								 ?>
								 >
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
                            Password
    
						</span>

						<a href="#" class="txt2 bo1 m-l-5">
							Forgot?
						</a>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password"
						<?php
                                //  $conn = mysqli_connect("localhost","root","","nhahang") or die ('Không thể kết nối tới database');
                                //  $sql = "SELECT * FROM user";
                                //  $result = mysqli_query($conn, $sql);
                                //  if (!$result){
                                //     die ('Câu truy vấn bị sai');
                                //  }
                                //  while($row = mysqli_fetch_assoc($result)){
								// 	 echo $row['pass'];
								//  }
								 ?> >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button type="submit" class="login100-form-btn" name="login_user">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Not a member?
						</span>

						<a href="register.php" class="txt2 bo1">
							Sign up now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>