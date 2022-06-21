<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>pianto</title>
</head>
<body>


    <header>
        <nav id="nav">

        </nav>
    </header>
    
    <main>



    <?php
        include"connection.php";
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


                    
                        header('location: src/home.php');
                        mysqli_close($conn);
                        die();

                  }



?>






                  <form method="post" action="signup.php">

                
        <div id="formul" >

            <img src="assets/Painto.png"  id="logo" alt="">

            <div style="position: absolute; width: 512px;  height: 704px;
            background: rgba(210, 180, 170, 0.71); margin-left: 100px; margin-top: 100px;">

           
            <input type="text" id="inp1" placeholder="first name" name="first_name">
            <input type="text" id="inp2" name="last_name" placeholder="last name">
            <input type="text" id="inp3" name="phone" placeholder="phone">
            <input type="email" id="inp4" name="email" placeholder="email">
            <input type="text" id="inp5" name="adress" placeholder="address">
            <input type="password" id="inp6" name="passwordu" placeholder="password">
            </div>


            <button type="submit"  name="submit" id="btn"> <span id="ca">Create Account</span> </button>
        </div>
        </form>

    </main>
</body>
</html>