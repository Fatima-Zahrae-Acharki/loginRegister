<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="painters.css">
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <title>PIANTOOOOOO</title>
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
        
          
            <img src="assets/Hiring Professional House Painters_ Always Ask This Question About Your Cost Estimate.jpeg" id="headerimg">
            <h1 id="abtus">OUR PAINTERS</h1>
        
    </header>
   


    <main>


    
        <div id="card">

        <?php
    //  session_start();
    //   echo $_SESSION["id_user"];

      include './connection.php';

      $painter = "select * from painter ";
      $result = mysqli_query($conn ,$painter);

      while($row = mysqli_fetch_assoc($result) ){






     ?>
        <section class="section-plans" id="section-plans" >
           
       
            <div class="row" >
              <div class="col-1-of-3">
                <div class="card">
                  <div class="card__side card__side--front-1">
                    <div class="card__title card__title--1">
                   
                     <img src="assets/painter.jpg" style="width: 200px; height: 200px; margin-top:30px; border;">
                    </div>
        
                    <div class="card__details">
                     <h3 id="pntr" style="margin-top:50px; margin-left: 70px; font-family:'Inter'; "><?php echo $row ['firstName'] ?> <?php echo $row ['lastName'] ?></h3>
                    </div>

                    <div class="card__details">
                        <p style="text-align: center; font-size: 15px "><?php echo $row ['description'] ?></p>
                    </div>
                  </div>
                  <div class="card__side card__side--back card__side--back-1">
                    <div class="card__cta">
                      <div class="card__price-box">
                        <p class="card__price-only">Shi daka d atay</p>
                        <p class="card__price-value">KITLI BATAL</p>
                      </div>
                      <a href="appointment/appointment.php" class="btn btn--white">Select</a>
                    </div>
                  </div>
                </div>
              </div>


      
             
        
          
          </section>

          <?php }?>
        </div>

    
        <!-- <div>
            <img src="assets/rkhama.png" id="rkhama">
           <img src="assets/f1 low.png" id="f1low">
           <h1 id="joinO">Join Our Newsletter</h1>
           <h2 id="tuned">and Stay Updated!</h2>
    
            <div id="biginp">
                <input type="text" placeholder="enter your email " id="eym">
                <button type="submit" id="btnbrown"><span id="sub">Subscribe</span> </button>
            </div> -->
    
    </div>

   
    </main>
    <!-- <footer>
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
    </footer> -->
</body>
</html>