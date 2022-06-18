<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>reister popup</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
  <link rel="stylesheet" href="./style1.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="popup-container">
	<label class="popup-button" for="login-popup">Login</label>
	<input type="checkbox" id="login-popup">
	<div class="popup">
		<label for="login-popup" class="transparent-label"></label>
		<div class="popup-inner">
			<label for="login-popup" class="popup-close-btn"><span class='bi bi-x' style="font-size: 50px;"></span></label>
			
			<div class="poup">
			<div class="popup-title">
				<h6>Painto</h6>
			</div>
			<div class="popup-content">
				<form method="post" action="registerpopup.php">
					<ul>
						<li>
							<input type="text" name="first_name" placeholder="First name">
						</li>
						<li>
							<input type="text" name="last_name" placeholder="Last name">
						</li>
						<li>
							<input type="text" name="phone" placeholder="Phone number">
						</li>
						<li>
							<input type="text" name="email" placeholder="Email">
						</li>
						<li>
							<input type="text" name="adress" placeholder="Address">
						</li>
						<li>
							<input type="password" name="passwordu" placeholder="Password">
						</li>
						<li>
							<p>By clicking below and creating an account, i agree to Painto's <span>Terms of services</span> and<span> privacy policy</span> </p>
						</li>
						<li>
							<button  name="submit">Create account</button>
						</li>
					</ul>
				</form>
				<?php
        include"./connection.php";
        if (isset($_POST['submit'])) {

                  //data  info
                  $user_ID = $_POST['user_ID'];
                  $first_name = $_POST['first_name'];
                  $last_name = $_POST['last_name'];
                  $phone = $_POST['phone'];
                  $adress = $_POST['adress'];
                  $passwordu = $_POST['passwordu'];
                  $email = $_POST['email'];



                    //data info >> database >> client
                        $sql = "INSERT INTO user(`user_ID`,`first_name`, `last_name`, `phone`, `adress`, `passwordu`, `email` ) VALUES ('$user_ID','$first_name', '$last_name','$phone','$adress' , '$passwordu','$email')";
						
                        $query = mysqli_query($conn, $sql);


                    
                        header('location: loginpopup.php');
                        mysqli_close($conn);
                        die();

                  }



?>

			</div>
		</div>
		</div>
	</div>
</div>

  
</body>
</html>
