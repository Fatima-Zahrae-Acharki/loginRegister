<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" href="login.css">
    <title>pianto</title>
</head>
<body>


    <header>
        <nav id="nav">

        </nav>
    </header>
    
    <main>
        <form action="login.php" method="post">

        <div id="formul" >

            <img src="assets/Painto.png"  id="logo" alt="">

            <div style="position: absolute; width: 512px;  height: 500px;
            background: rgba(210, 180, 170, 0.71); margin-left: 100px; margin-top: 100px;">

           
            <input type="text" id="inp1" name="email" placeholder="email">
            <input type="password" id="inp2" name="passwordu" placeholder="password">
            </div>


            <!-- <button name="submit" id="btn"> <span id="ca">LOGIN</span> </button> -->
            <button name="submit" style="width: 100px; height:50px;"  >  </button>
        </div>
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
           

            header( 'location: src/home.php ');
           exit(); 
          }
        }
?>







    </main>
</body>
</html>