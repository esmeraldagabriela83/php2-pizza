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
        <h2>Portfolio site</h2>
        <h3 style="text-align:center ; color:floralwhite">Do not fill in the form with your real data</h3>
        <h2>Create Account</h2>
      </div>

      <form id="form" class="form" action="contact.php" method="POST">

        <div class="form-control">
          <label for="username">Username</label>
          <input type="text" placeholder="pizzaConsumer" id="username" name="name" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['name'])){echo $_POST['name'] ; }
 ?>
          " required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <div class="form-control">
          <label for="username">Email</label>
          <input type="email" placeholder="a@pizza-portfolio.com" id="email" name="email" value="
<?php
//ca sa ramana bifat de catre user
if(isset($_POST['email'])){echo $_POST['email'] ; }
 ?>
          " required />
          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>



      <div class="form-control">
        <label for="dateBirthdayId">Your birthday:</label><br>
            <input type="date" name="dateBirthday" id="dateBirthdayId" value=" <?php
            if( isset($_POST['dateBirthday']) ){
                //CA SA RAMANA BIFAT DE CATRE USER
               echo $_POST['dateBirthday'] ;
            }
            ?> " />
       </div>



        <div class="form-control">
          <label for="username">Password</label>
          <input type="password" placeholder="Password" id="password" name="password" value="
          <?php
          //ca sa ramana bifat de catre user
          if(isset($_POST['password'])){echo $_POST['password'] ; }
           ?>
          " required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>
        <div class="form-control">
          <label for="username">Password check</label>
          <input type="password" placeholder="Password two" id="password2" name="password2" value="
          <?php
          //ca sa ramana bifat de catre user
          if(isset($_POST['password2'])){echo $_POST['password2'] ; }
           ?>
          " required />

          <i class="fa fa-check-circle"></i>
          <i class="fa fa-exclamation-circle"></i>
          <small>Error message</small>
        </div>

        <!-- add comment -->

        <div class="form-control">
          <label for="comment">Write your comment</label>
          <!-- <input type="comment" placeholder="Write your comment" id="comment"/> -->
          <!--TEXTAREA FROM W 3 SCHOOL-->
          <textarea id="comment" placeholder="Comment" name="pizza-comment" rows="4" cols="50" required >
<?php
if (isset($_POST['pizza-comment'])){echo $_POST['pizza-comment'];}
 ?>
          </textarea>

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

            <input type="tel" id="user-phone" name:"phone" size="30" maxlength="10" placeholder="Phone number" value="" required />

        </div>

        <div style="margin-bottom:1em">
          <p>Please select your favorite size:</p>
             <input type="radio" id="radioFamily" name="size" value="family" style="margin-left:0.7em" <?php
            if (isset($_POST['size']) && $_POST['size'] == 'family'){
                echo 'checked="checked"';
            }
        ?>  >

             <label for="radioFamily">Family</label><br>

             <input type="radio" id="radioLarge" name="size" value="large" <?php
            if (isset($_POST['size']) && $_POST['size'] == 'large'){
                echo 'checked="checked"';
            }
        ?> >

             <label for="radioLarge">Large</label><br>

             <input type="radio" id="radioSmall" name="size" value="small" <?php
            if (isset($_POST['size']) && $_POST['size'] == 'small'){
                echo 'checked="checked"';
            }
        ?> >

             <label for="radioSmall">Small</label>


        </div>
        <div class="form-control multiple-pizza">

            <p id="pizzaTypes">Type</p>

              <?php
              $pizzaTypesArr = array('Pizza 1', 'Pizza 2', 'Pizza 3','Pizza 4','Pizza 5','Pizza 6');
              ?>

              <select name="type" size="4" id="pizzaType">
                      <?php
                          foreach($pizzaTypesArr  as  $pizzaTypesEl){

                              if ($_POST['type'] == $pizzaTypesEl) {
                                  // afiseaza optiunea deja selectata
                                  echo '<option selected="selected" value="' .$pizzaTypesEl. '">' . $pizzaTypesEl . '</option>';
                              } else {
                                  // default
                                  echo '<option value="' .$pizzaTypesEl. '">' . $pizzaTypesEl . '</option>';
                              }

                          }
                      ?>
                  </select>

        </div>



        <div class="form-control">

            <p>Delivery Info</p>


            <?php
            $deliveryHours = array("6.30", "7.30", "8.30");
            ?>

            <select name="deliveryTime" id="deliveryTime">
                    <?php
                        foreach($deliveryHours  as  $deliveryKeyIndex => $deliveryValueHour){

                            if ($_POST['deliveryTime'] == $deliveryValueHour) {
                                // afiseaza optiunea deja selectata
                                echo '<option selected="selected" value="'. $deliveryValueHour . '">' . $deliveryValueHour . '</option>';
                            } else {
                                // default
                                echo '<option value="' . $deliveryValueHour . '">' . $deliveryValueHour . '</option>';
                            }

                        }
                    ?>
                </select>

        </div>





        <!-- <div class="form-control"> -->
<p>Only if you want, you can choose some of the ingredients:</p>


<label for="saltId">Salt:</label>
<input type="checkbox" name="salt" id="saltId" <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['salt']) ){
    echo 'checked="checked"' ;
}
?>  /><br>



<label for="pepperId">Pepper:</label>
<input type="checkbox" name="pepper" id="pepperId" <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['pepper']) ){
    echo 'checked="checked"' ;
}
?> /><br>




<label for="oliveId">Olive:</label>
<input type="checkbox" name="olive"  id="oliveId"  <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['olive']) ){
    echo 'checked="checked"' ;
}
?> />



<label for="mushroomsId">Mushrooms:</label>
<input type="checkbox" name="mushrooms" id="mushroomsId" <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['mushrooms']) ){
    echo 'checked="checked"' ;
}
?> /><br>




<label for="cheeseId">Cheese:</label>
<input type="checkbox" name="cheese"  id="cheeseId"  <?php
//CA SA RAMANA BIFAT DE CATRE USER
if( isset($_POST['cheese']) ){
    echo 'checked="checked"' ;
}
?> /><br>


        <!-- </div> -->



        <div style="padding:1.5em 0 1.5em 0">
          <a href="termsAndConditions.html" style="border:1px solid DarkGoldenRod ;
                                                   padding:0.3em ;
                                                   border-radius:10px ;
                                                   box-shadow: 1px 1px 1.5px 1.5px gray;
                                                   text-align:center ;
                                                   color:DarkGoldenRod">
      Terms and conditions info
          </a><br>
        </div>



          <label for="bifaId">Terms and conditions</label><br>
          <input type="checkbox" id="bifaId"  name="bifa" <?php
                      if (isset($_POST['bifa'])){
                          echo 'checked="checked"';
                      }
                  ?>/><br/>






        <div class="form-control">
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


  <div class="container"  style="background-color:floralwhite ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray ; padding:1em 0 ; margin-top: 5em">
    <?php


  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Afisare date formular:</h3>';

  if($_POST['bifa'] && isset($_POST['submit'])){

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Username is : ' . $_POST['name'] . '.</h3>' ;
  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Email address is : ' . $_POST['email'] . '.</h3>' ;
  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Your birthday is on  : ' . $_POST['dateBirthday'] . '.</h3>' ;


  if($_POST['password'] === $_POST['password2']){
  echo '<h3 style="text-align:center ; color:green">Password is : ' . $_POST['password'] . '.</h3>' ;
  }else{
  echo '<h3 style="text-align:center ; color:red">Passwords do not match.</h3>' ;
  }

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">User comment is : ' . $_POST['pizza-comment'] . '.</h3>' ;

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Phone number is : ' . $_POST['phone'] . '.</h3>' ;

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Size of pizza  is : ' . $_POST['size'] . '.</h3>' ;

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Type of pizza  is : ' . $_POST['type'] . '.</h3>' ;

  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Time of delivery  is : ' . $_POST['deliveryTime'] . '.</h3>' ;



  if ( isset($_POST['salt'])){
      //folosesc if  ca sa verific daca bifa de salt a fost selectata
      //ca sa-mi afiseze pasiunea 'salt' in loc de 'on'
      // echo '<h1 style="text-align:center ; color:DarkGoldenRod">The chosen ingredient is :' . $_POST['salt'] . '.</h1>' ;
      echo '<h3 style="text-align:center ; color:green">The chosen ingredient is : salt .</h3>' ;
  }else{
      echo '<h3 style="text-align:center ; color:red">Salt is not a  chosen ingredient.</h3>' ;
  }



  if ( isset($_POST['pepper'])){
      //folosesc if  ca sa verific daca bifa de pepper a fost selectata
      //ca sa-mi afiseze pasiunea 'pepper' in loc de 'on'
      // echo '<h1 style="text-align:center ; color:DarkGoldenRod">The chosen ingredient is :' . $_POST['pepper'] . '.</h1>' ;
      echo '<h3 style="text-align:center ; color:green">The chosen ingredient is : pepper .</h3>' ;
  }else{
      echo '<h3 style="text-align:center ; color:red">Pepper is not a  chosen ingredient.</h3>' ;
  }



  if ( isset($_POST['olive'])){
      //folosesc if  ca sa verific daca bifa de olive a fost selectata
      //ca sa-mi afiseze pasiunea 'olive' in loc de 'on'
      // echo '<h1 style="text-align:center ; color:DarkGoldenRod">The chosen ingredient is :' . $_POST['olive'] . '.</h1>' ;
      echo '<h3 style="text-align:center ; color:green">The chosen ingredient is : olive .</h3>' ;
  }else{
      echo '<h3 style="text-align:center ; color:red">Olive is not a  chosen ingredient.</h3>' ;
  }


  if ( isset($_POST['mushrooms'])){
      //folosesc if  ca sa verific daca bifa de mushrooms a fost selectata
      //ca sa-mi afiseze pasiunea 'mushrooms' in loc de 'on'
      // echo '<h1 style="text-align:center ; color:DarkGoldenRod">The chosen ingredient is :' . $_POST['mushrooms'] . '.</h1>' ;
      echo '<h3 style="text-align:center ; color:green">The chosen ingredient is : mushrooms .</h3>' ;
  }else{
      echo '<h3 style="text-align:center ; color:red">Mushrooms is not a  chosen ingredient.</h3>' ;
  }


  if ( isset($_POST['cheese'])){
      //folosesc if  ca sa verific daca bifa de cheese a fost selectata
      //ca sa-mi afiseze pasiunea 'cheese' in loc de 'on'
      // echo '<h1 style="text-align:center ; color:DarkGoldenRod">The chosen ingredient is :' . $_POST['cheese'] . '.</h1>' ;
      echo '<h3 style="text-align:center ; color:green">The chosen ingredient is : cheese .</h3>' ;
  }else{
      echo '<h3 style="text-align:center ; color:red">Cheese is not a  chosen ingredient.</h3>' ;
  }




  echo '<h3 style="text-align:center ; color:green">Terms and conditions  are checked : ' . $_POST['bifa'] . '.</h3>' ;



  }

      ?>
  </div>



  <div class="container">
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

  <footer style="background-color:floralwhite ; margin-bottom:-2.5em">
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
        <h3 style="padding-bottom:2.5em">sources</h3>
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

        <h5 style="padding-bottom:2.5em"><a href="https://formsubmit.co/live-demo" target="_blank">
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

<script src="js/myPHPform.js" type="text/javascript"></script>

<script src="js/map.js" type="text/javascript"></script>
<script src="js/text-image.js" type="text/javascript"></script>

<script src="js/footer-show-hide.js" type="text/javascript"></script>

</html>
