<!DOCTYPE html>
<html lang="en" >
<head>

  <meta charset="UTF-8">
  <title>login popup</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
  <link rel="stylesheet" href="./style.css">
  
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
				<form method="post" action="">
					<ul>
						<li>
							<input type="text" name="email" placeholder="Email">
						</li>
						<li>
							<input type="password" name="passwordu" placeholder="Password">
						</li>
						<li>
							<button name="submit">Log in</button>
						</li>
						<li>
							<p >Don’t have an account ? Please <span><a href="./registerpopup.html"> REGISTER</a></span> </p>
						</li>
					</ul>
				</form>
				<?php
      session_start();
            include 'connection.php';
    if(isset($_POST['submit'])){
      $email = htmlspecialchars($_POST['email']);
      $passwordu =  htmlspecialchars($_POST['passwordu']);
      //validation
      $valid = 0;
          //email validation
          $checkEmail = mysqli_query($conn, "SELECT * from user WHERE email = '$email' AND passwordu = '$passwordu'");
          $result = $checkEmail->fetch_assoc();
          if (mysqli_num_rows($checkEmail) == 0) {
            $valid++;
          }

          //password validation

          if($valid != 0){
            echo  "<p>wrong email or password</p>";
          }else{
           

            header( 'location: ');
           exit(); 
          }
        }
?>
			</div>
		</div>
		</div>
	</div>
</div>
<!-- partial -->
  
</body>
</html>
