<!DOCTYPE html>
<html lang="en-EN">

<head>
  <meta charset="UTF-8">

  <!--map-->
  <!-- https://account.mapbox.com/ -->
  <!-- https://docs.mapbox.com/mapbox-gl-js/example/simple-map/ -->

  <!-- <link href="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.css" rel="stylesheet">
  <script src="https://api.mapbox.com/mapbox-gl-js/v2.8.2/mapbox-gl.js"></script> -->

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
 <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
 <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.js"></script>
 <link
   rel="stylesheet"
   href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.0/mapbox-gl-directions.css"
   type="text/css"
 />

  <!-- <style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style> -->
  <!--map-->
  <title>contact page food shop project</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--ion icons-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--ion icons-->

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  <!--google fonts-->

  <!--font-awesome-->
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--font-awesome-->

  <link rel="stylesheet" href="css/contact.css">

</head>

<body style="background-color:floralwhite">

  <!--https://www.w3schools.com/howto/howto_js_mobile_navbar.asp-->

  <!-- Top Navigation Menu -->
  <div class="topnav">
    <a href="index.html" class="active"><em>PIZZA</em></a>
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">

      <a href="index.html">Home</a>
      <a href="contact.php">Contact</a>
      <a href="shop.php">Shop</a>
    </div>
    <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!----------------------------------------------------------------------------------->

  <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
  <!-- JavaScript Shopping Cart Tutorial for Beginners     https://www.youtube.com/watch?v=YeFzkC2awTM   -->
  <!-------------------------------------------------------------------------------------------------->

  <div class="container">
    <div class="container-form">
      <div class="header">
        <h2>Create Account</h2>
      </div>

      <form id="form" class="form" action="contact.php" method="POST">

        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" placeholder="pizzaConsumer" id="username" name="name" required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Email</label>
          <input type="email" placeholder="a@pizza-portfolio.com" id="email" name="email" required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Password</label>
          <input type="password" placeholder="Password" id="password" name="password" required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Password check</label>
          <input type="password" placeholder="Password two" id="password2" name="password2" required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <!-- add comment -->

        <div class="form-control">
          <label for="username">Write your comment</label>
          <!-- <input type="comment" placeholder="Write your comment" id="comment"/> -->
          <!--TEXTAREA FROM W 3 SCHOOL-->
          <textarea id="comment" placeholder="Comment" name="pizza-comment" rows="4" cols="50" required ></textarea>

          <!--TEXTAREA FROM W 3 SCHOOL-->
          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <!--https://www.youtube.com/watch?v=Cu0OwlJNXuQ   completare formular-->

        <div class="header second">
          <h2>Place your pizza order</h2>
          <p class="ringPizza">You can ring us on 0722 00 00 00 or pick up at Colentina 10 Street</p>
        </div>


        <div class="form-control">


            <label id="label-phone-number" for="user-phone">Write your phone number</label><br></br>

              <input id="userPhone" type="tel" name:"phone" size="30" maxlength="10" placeholder="Phone number" value="" required />

        </div>

        <div style="margin-bottom:1em">
          <p>Please select your favorite size:</p>
             <input type="radio" id="radioFamily" name="size" value="family" style="margin-left:0.7em">

             <label for="radioFamily">Family</label><br>

             <input type="radio" id="radioLarge" name="size" value="large">

             <label for="radioLarge">Large</label><br>

             <input type="radio" id="radioSmall" name="size" value="small">

             <label for="radioSmall">Small</label>


        </div>
        <div class="form-control multiple-pizza">

            <p id="pizzaTypes">Type</p>

              <select name="type" size="4" multiple="multiple" id="pizzaType">
                <option id="pizza1type" value="Pizza 1">Pizza 1</option>
                <option id="pizza2type" value="Pizza 2">Pizza 2</option>
                <option id="pizza3type" value="Pizza 3">Pizza 3</option>
                <option id="pizza4type" value="Pizza 4">Pizza 4</option>
                <option id="pizza5type" value="Pizza 5">Pizza 5</option>
                <option id="pizza6type" value="Pizza 6">Pizza 6</option>
              </select>

        </div>


        <div class="form-control">

            <p>Delivery Info</p>

              <select name="DeliveryTime" id="deliveryTime">
                <option value="6.30">6.30</option>
                <option value="7.30">7.30</option>
                <option value="8.30">8.30</option>
              </select>

        </div>


        <div class="form-control">

              <!-- <input type="submit" value="Submit order" /> -->
              <input id="resetPizza" type="reset" value="Reset order" required /><br>

          <input type="submit" name="submit" id="submit" value="Submit">
        </div>


        <!--continue-->

        <!--https://www.youtube.com/watch?v=Cu0OwlJNXuQ-->

        <!--add comment -->

      </form>
      <ion-icon name="pizza-outline"></ion-icon>
    </div>
  </div>
  <!------------------------------------------------------------------------------------------------>

  <div class="container">

    <?php



echo '<h3 style="text-align:center ; color:DarkGoldenRod ; margin-top:3em">Afisare date formular</h3>';

if(isset($_POST['submit'])){

echo '<h3 style="text-align:center ; color:DarkGoldenRod">Username is : ' . $_POST['name'] . '.</h3>' ;
echo '<h3 style="text-align:center ; color:DarkGoldenRod">Email address is : ' . $_POST['email'] . '.</h3>' ;
echo '<h3 style="text-align:center ; color:DarkGoldenRod">Password is : ' . $_POST['password'] . '.</h3>' ;
echo '<h3 style="text-align:center ; color:DarkGoldenRod">User comment is : ' . $_POST['pizza-comment'] . '.</h3>' ;
echo '<h3 style="text-align:center ; color:DarkGoldenRod">Phone number is : ' . $_POST['phone'] . '.</h3>' ;

}

      ?>

    <!-- <div class="user-data"></div> -->

    <div id="center-svg-pizza">
      <img src="./images/pizza-sharing.svg" alt="pizza-sharing-svg-unDraw" />
    </div>

  </div>

  <!-------------------------------------------------------------------------------------------------------------->

  <!-------------------------------------------------------------------------------------------------------------->
  <div class="container">
    <div class="banner-text">
      <a href="#"><span></span>Bucharest ; Colentina street ; section 2 ; number 10</a>
    </div>
  </div>
  <!-------------------------------------------------------------------------------------------------------------->

  <!--map-->
  <div class="container">
    <h3 class="title-map">Find us on the map</h3>

    <div id="makeMap">
      <div id='map'></div>
    </div>

  </div>
  <!--map-->

  <!-------------------------------------------------------------------------------------------------------------->

  <div class="container text-effect-Illustrator">
    <div id="enjoyPizza"></div>
  </div>

  <!-------------------------------------------------------------------------------------------------------------->

  <footer>
    <div class="container">

      <div id="icons">
        <div class="footerIcons"><a href="https://facebook.com/" target="_blank">
            <ion-icon name="logo-facebook"></ion-icon>
          </a></div>
        <div class="footerIcons"><a href="https://instagram.com/" target="_blank">
            <ion-icon name="logo-instagram"></ion-icon>
          </a></div>
        <div class="footerIcons"><a href="https://twitter.com/" target="_blank">
            <ion-icon name="logo-twitter"></ion-icon>
          </a></div>
      </div>

      <!--sources links-->
      <a href="#" title="show and hide source links" class="btn_show_hide">
        <h3>sources</h3>
      </a>
      <div id="divSources" class="hidden">
        <h5><a href="https://www.youtube.com/watch?v=rsd4FNGTRBw" target="_blank">
            https://www.youtube.com/watch?v=rsd4FNGTRBw
          </a></h5>

        <h5><a href="https://docs.mapbox.com/mapbox-gl-js/example/simple-map/" target="_blank">
            https://docs.mapbox.com/mapbox-gl-js/example/simple-map/
          </a></h5>

        <h5><a href="https://account.mapbox.com/" target="_blank">
            https://account.mapbox.com/
          </a></h5>

        <h5><a href="https://www.youtube.com/watch?v=lBfshkPlMW8" target="_blank">
            https://www.youtube.com/watch?v=lBfshkPlMW8
          </a></h5>

        <h5><a href="https://www.youtube.com/watch?v=Cu0OwlJNXuQ" target="_blank">
            https://www.youtube.com/watch?v=Cu0OwlJNXuQ
          </a></h5>

        <h5><a href="https://formsubmit.co/live-demo" target="_blank">
            https://formsubmit.co/live-demo
          </a></h5>
      </div>
    </div>

  </footer>
  <!--footer-->

</body>
<script src="js/nav.js" type="text/javascript"></script>

<!------activeaza pt verificare in consola si inactivare php------->
<!-- <script src="js/contact-form.js" type="text/javascript"></script> -->

<script src="js/map.js" type="text/javascript"></script>
<script src="js/text-image.js" type="text/javascript"></script>

<script src="js/footer-show-hide.js" type="text/javascript"></script>

</html>
