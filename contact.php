<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title> Pianto </title>
</head>
<body>
<nav>
    <img src="loginRegister/assets/painto logo 1.png" alt="">
    <ul>
      <a href="../loginRegister/src/home.php"><li>Home</li></a>
      <a href=""><li>services</li></a>
      <a href="./painters.php"><li>painters</li></a>
      <a href="./contact.php"><li>contact</li></a>
    </ul>
    <input type="button" value="Login" id="login">
  </nav>
    <header>
       
            
                <img src="assets/header.png" id="header">
                <h1 id="Inter">Our Contact</h1>
            
            
       
    </header>

    <main>
            
        <h3 id="cnt">CONTACT</h3>
        <h1 id="gt">Get in <span id="touch">Touch</span> </h1>
        <h6 id="stay">Stay tuned for any new designs or painters</h6>

        <div>
            <img src="assets/google-maps 1.png"  id="map" >
            <h6 id="adress">adress</h6>
        </div>

        <div>
            <img src="assets/phone 1.png" id="phone">
            <h6 id="phonep">Phone</h6>
        </div>

        <h6 id="add">3646 solicode, Tanger</h6>

        <div>
            <img src="assets/comments 1.png" id="cmt">
            <h6 id="mail">Email</h6>
        </div>

        <h6 id="email">painto.website@gmail.com</h6>

        <hr id="line">

        <div>
            <img src="assets/facebook.png" id="fb" >
            <img src="assets/youtube.png" id="ytb">
            <img src="assets/twitter.png" id="twt">
            <img src="assets/instagram.png" id="ig">
        </div>


        <form id="form" action="" method="$_POST">

            <h5 id="phonefrm">Phone</h5>

                <input type="text" placeholder="first name" id="first" name="firstName">
                <input type="text" placeholder="last name" id="last" name="lastName">
                <h5 id="formem">Email</h5>
                <input type="text" placeholder="Your Email" id="emailfrm" name="email">
                <h5 id="message">Message</h5>
                <input type="message" placeholder="message" id="formmsg" name="">
                <button id="btn" name="submit" > Send message</button> 
</form>
<?php
        include"./connection.php";
        if (isset($_POST['submit'])) {

                  //data  info
                  
                  $contact_id = $_POST['contat_ID'];
                  $first_name = $_POST['firstName'];
                  $last_name = $_POST['lastName'];
                  $email = $_POST['email'];
                  $message = $_POST['message'];
                  



                    //data info >> database >> client
                        $sql = "INSERT INTO contact(`contact_ID`, `firstName`, `lastName`, `email`, `message` ) VALUES ('$contact_ID', '$firstName', '$lastName','$email','$message')";
						
                        $query = mysqli_query($conn, $sql);


                    
                        header('location: loginpopup.php');
                        mysqli_close($conn);
                        die();

                  }



?>


        <div id="mapsol">
            <div class="mapouter"><div class="gmap_canvas"><iframe width="1312" height="455" id="gmap_canvas" src="https://maps.google.com/maps?q=solicode,%20Tangier&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" 
                marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:455px;width:1312px; border-radius: 30px;}</style><a href="https://www.embedgooglemap.net">google maps embed wordpress</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:455px;width:1312px;}</style></div></div>
        </div>

<div>
        <img src="assets/rkhama.png" id="rkhama">
       <img src="assets/f1 low.png" id="f1low">
       <h1 id="joinO">Join Our Newsletter</h1>
       <h2 id="tuned">and Stay Updated!</h2>

        <div id="biginp">
            <input type="text" placeholder="enter your email " id="eym">
            <button type="submit" id="btnbrown"><span id="sub">Subscribe</span> </button>
        </div>

</div>
     
        
    </main>

    <footer>
        <div id="f1">

            <img src="assets/painto logo 1.png" id="logoF">
            <img src="assets/Follow Us.png" id="followus">
            <img src="assets/Support.png" id="support">

            <img src="assets/facebook.png" id="fbftr">
            <img src="assets/youtube.png" id="ytbftr">
            <img src="assets/twitter.png" id="twtftr" >
            <img src="assets/instagram.png" id="igftr" >

            <h3 id="title1">FAQs</h3>
            <h3 id="title2">Privacy Policy</h3>
            <h3 id="title3">Contact</h3>

        </div>

        <div id="f2">
                <p id="copyr">Copyright © 2022 Painto Project by Filo-san</p>
        </div>
    </footer>
</body>
</html>