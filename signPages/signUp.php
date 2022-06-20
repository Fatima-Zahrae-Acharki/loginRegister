<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sing up.css">

</head>
<body>
    
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

			</div>
		</div>
		</div>
	</div>
</div>

</body>
</html>