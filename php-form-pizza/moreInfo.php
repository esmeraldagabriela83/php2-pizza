<!DOCTYPE html>
<html lang="en-EN">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>more info pizza php</title>



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


<section class="container" style="text-align:center ;
                                  color:DarkGoldenRod ;
                                  margin-top:3em ; background-color: floralwhite;
                                  padding: 1.5em;
                                  border-radius: 10px;
                                  box-shadow: 1px 1px 1.5px 1.5px gray">



<?php



$pizzaTypesWithPrice = array(
      'CheesePizza' => 20.70 ,
      'OlivePizza' => 30.95 ,
      'TraditionalPizza' => 100.25 ,
      'ModernPizza' => 50.40 ,
      'StandardPizza' => 25.65 ,
      'CommonPizza' => 150.80 ,
  );

?>

        <h3>Order pizza by name or price </h3>

        <form class="container-form" action="moreInfo.php" method="post" style="display:flex ; align-items:center ; justify-content:center ; flex-direction:column">


          <select name="orderPizza" style="margin:2.5em 0 ; color: DarkGoldenRod ; padding:0.5em" >

                  <option value="ascend name pizza" <?php
                      if(isset($_POST['orderPizza']) && $_POST['orderPizza'] == 'ascend name pizza') {
                          echo 'selected="selected"';
                      }
                  ?> >Ascend by name pizza</option>

                  <option value="downward name pizza" <?php
                      if(isset($_POST['orderPizza']) && $_POST['orderPizza'] == 'downward name pizza') {
                          echo 'selected="selected"';
                      }
                  ?> >Downward by name pizza</option>

                  <option value="price ascend" <?php
                      if(isset($_POST['orderPizza']) && $_POST['orderPizza'] == 'price ascend') {
                          echo 'selected="selected"';
                      }
                  ?> >Ascend by price</option>

                  <option value="price downward"<?php
                      if(isset($_POST['orderPizza']) && $_POST['orderPizza'] == 'price downward') {
                          echo 'selected="selected"';
                      }
                  ?> >Downward by price</option>

              </select>
              <br>
              <input type="submit" value="Order pizza" name="showOrderPizza" style="border:1px solid DarkGoldenRod ;
                                                       cursor: pointer;
                                                       padding:0.5em ;
                                                       border-radius:10px ;
                                                       box-shadow: 1px 1px 1.5px 1.5px gray;
                                                       text-align:center ;
                                                       font-size: 1rem ;
                                                       color:DarkGoldenRod"/>

        </form>


        <div style="margin: 1.5em 0">

      <?php



if(isset($_POST['showOrderPizza'])){


  if ($_POST['orderPizza'] == 'ascend name pizza') {

              ksort($pizzaTypesWithPrice);

          } elseif ($_POST['orderPizza'] == 'downward name pizza'){

              krsort($pizzaTypesWithPrice);

          } elseif ($_POST['orderPizza'] == 'price ascend'){

              asort($pizzaTypesWithPrice);

          } elseif ($_POST['orderPizza'] == 'price downward'){
              arsort($pizzaTypesWithPrice);
          } else {
              echo 'big problem';
          }


          echo '<ul>';
                 foreach($pizzaTypesWithPrice as $pizzaKeyName => $pizzaValuePrice){
                     echo '<li style=" text-align:center ; color:DarkGoldenRod"><strong>' . $pizzaKeyName . '</strong> has the price of <strong>' . $pizzaValuePrice . '</strong> ron.</li>' ;
                 }
          echo '</ul>';


}


       ?>
      </div>




</section>







<section class="container" style="text-align:center ;
                                  color:DarkGoldenRod ;
                                  margin-top:3em ; background-color: floralwhite;
                                  padding: 1.5em;
                                  border-radius: 10px;
                                  box-shadow: 1px 1px 1.5px 1.5px gray">


  <?php
  $days = array('monday', 'Tuesday', 'Wednesday','Thursday','Friday','Saturday','Sunday');

  ?>


    <h3>Order pizza by weekday</h3>


    <form class="container-form" action="moreInfo.php" method="post" style="display:flex ; align-items:center ; justify-content:center ; flex-direction:column">

      <select name="pizzaDay" style="margin:2.5em 0 ; color: DarkGoldenRod ; padding:0.5em" >
              <?php
                  foreach($days  as  $dayKeyIndex => $dayKeyValue){

                      if ($_POST['pizzaDay'] == $dayKeyValue) {
                          // afiseaza optiunea deja selectata
                          echo '<option selected="selected" value="' .$dayKeyValue. '">' . $dayKeyValue . '</option>';
                      } else {
                          // default
                          echo '<option value="' .$dayKeyValue. '">' . $dayKeyValue . '</option>';
                      }

                  }
              ?>
          </select>

 <input type="submit" name="showPizzaDay"   value="Show day"   style="border:1px solid DarkGoldenRod ;
                                                                      cursor: pointer;
                                                                      padding:0.5em ;
                                                                      border-radius:10px ;
                                                                      box-shadow: 1px 1px 1.5px 1.5px gray;
                                                                      text-align:center ;
                                                                      font-size: 1rem ;
                                                                      color:DarkGoldenRod" />

      </form>


  <div  style="margin: 1.5em 0">

<?php

if (isset($_POST['showPizzaDay'])){
    if ($_POST['pizzaDay'] == 'Saturday' || $_POST['pizzaDay'] == 'Sunday') {
        echo '<p style="color:DarkGoldenRod ; text-align:center">Your pizza will be made during the weekend , on <strong>'  . $_POST['pizzaDay'] . '</strong>.<p>';
    } else {
        echo '<p style="color:DarkGoldenRod ; text-align:center">Your pizza will be made during the workday , on <strong>'  . $_POST['pizzaDay'] . '</strong>.<p>';
    }
   }

?>

</div>

</section>





<section class="container" style="text-align:center ;
                                  color:DarkGoldenRod ;
                                  margin-top:3em ;
                                  background-color: floralwhite;
                                  padding: 1.5em;
                                  border-radius: 10px;
                                  box-shadow: 1px 1px 1.5px 1.5px gray">

  <h3>Order pizza by ingredient</h3>

  <?php
  $pizzaTypesArr2 = array('CheesePizza', 'OlivePizza', 'TraditionalPizza','ModernPizza','StandardPizza','CommonPizza');
  ?>

<form class="container-form" action="moreInfo.php" method="post" style="display:flex ; align-items:center ; justify-content:center ; flex-direction:column">
  <select name="pizzaIngredient" style="margin:2.5em 0 ; color: DarkGoldenRod ; padding:0.5em" >
          <?php
              foreach($pizzaTypesArr2 as $pizzaTypeIndex2 => $pizzaTypeValue2){
                  if ($_POST['pizzaIngredient'] == $pizzaTypeValue2){
                      echo '<option selected="selected">' . $pizzaTypeValue2 . '</option>';
                  } else {
                      echo '<option>' . $pizzaTypeValue2 . '</option>';
                  }
              }
          ?>
      </select>
      <input type="submit" name="showIngredient" value="Show ingredient" style="border:1px solid DarkGoldenRod ;
                                               cursor: pointer;
                                               padding:0.5em ;
                                               border-radius:10px ;
                                               box-shadow: 1px 1px 1.5px 1.5px gray;
                                               text-align:center ;
                                               font-size: 1rem ;
                                               color:DarkGoldenRod"/>
</form>

<div   style="margin: 1.5em 0">

<?php

if (isset($_POST['showIngredient'])){

        if ($_POST['pizzaIngredient'] == 'CheesePizza' || $_POST['pizzaIngredient'] == 'TraditionalPizza'){

            echo '<p style="color:DarkGoldenRod ; text-align:center">Pizza <strong>' . $_POST['pizzaIngredient'] . '</strong> contains cheese .</p>' ;

        } elseif ($_POST['pizzaIngredient'] == 'StandardPizza' || $_POST['pizzaIngredient'] == 'CommonPizza'){

            echo '<p style="color:DarkGoldenRod ; text-align:center">Pizza <strong>' . $_POST['pizzaIngredient'] .  '</strong> contains salami .</p>' ;

        }  elseif ($_POST['pizzaIngredient'] == 'OlivePizza' || $_POST['pizzaIngredient'] == 'ModernPizza'){

            echo '<p style="color:DarkGoldenRod ; text-align:center">Pizza <strong>' . $_POST['pizzaIngredient'] .  '</strong> contains olive .</p>' ;

        }else {
            echo 'big problem';
        }
    }


?>

</div>


</section>


<section class="container" style="text-align:center ;
                                  color:DarkGoldenRod ;
                                  margin-top:3em ;
                                  margin-bottom:3em ;
                                  background-color: floralwhite;
                                  padding: 1.5em;
                                  border-radius: 10px;
                                  box-shadow: 1px 1px 1.5px 1.5px gray">


                                  <form enctype="multipart/form-data" method="post">
                                      <input type="file" name="fisier" id="fi" style="border: 2.5px solid DarkGoldenRod;
                                                                              	     border-radius: 5px;
                                                                                     font-size: 14px;
                                      	                                             padding: 10px;
                                      	                                             width: 100%;
                                                                                     display:none" /><br/>

                                                                                <label for="fi">
                                                                                           <img src="images/upload2.png" style="height:2.5em"/><br>
                                                                                           Add the file
                                                                                       </label><br>

                                      <input type="submit" name="upload" value="Send" style="border:1px solid DarkGoldenRod ;
                                                                                             cursor: pointer;
                                                                                             margin-top:1.5em;
                                                                                             padding:0.5em ;
                                                                                             border-radius:10px ;
                                                                                             box-shadow: 1px 1px 1.5px 1.5px gray;
                                                                                             text-align:center ;
                                                                                             font-size: 1rem ;
                                                                                             color:DarkGoldenRod"/>
                                  </form>

<div   style="margin: 1.5em 0">
                                  <?php
                                      if (isset($_POST['upload'])){
                                          $fisierul = $_FILES['fisier'];
//name este cheie predefinita

$nume_nou = 'uploads/' . microtime() . " - " . $fisierul['name'];

                                          // incarcam fisierul din formular (temporar in browser)
                                          // in locatia aleasa de catre noi (uploads/nume...) folder-ul uploads fiind creat manual
                                          move_uploaded_file( $fisierul['tmp_name'], $nume_nou );
                                          // echo 'calea fisierului:  uploads/' . $fisierul['name'];
                                          echo $fisierul['type'] . '<br/>';
                                          if ($fisierul['type'] == 'image/jpeg' ||
                                              $fisierul['type'] == 'image/jpg' ||
                                              $fisierul['type'] == 'image/png'||
                                              $fisierul['type'] == 'image/gif' ||
                                              $fisierul['type'] == 'image/svg + xml'   ){
                                                  echo '<img src="' .$nume_nou . '" alt="my-photo" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;
                                          }  elseif ($fisierul['type'] == 'application/pdf'){
                                              echo '<a href="' . $nume_nou . '" target="_blank">view the pdf</a>';
                                          } elseif ($fisierul['type'] == 'video/mp4'){
                                              echo '<video controls> <source type="video/mp4" src="' .$nume_nou . '"/></video>';
                                          } else {
                                              echo '<a href="' .$nume_nou . '" download>download the file</a>';
                                          }
                                      }

                                  ?>
</div>


</section>


<section class="container" style="text-align:center ;
                                  color:DarkGoldenRod ;
                                  margin-top:3em ;
                                  margin-bottom:3em ;
                                  background-color: floralwhite;
                                  padding: 1.5em;
                                  border-radius: 10px;
                                  box-shadow: 1px 1px 1.5px 1.5px gray">

<?php



$produsePizza=array(

'CheesePizza' => array(
  'health' => 'Delicious  product' ,
  'timpDeLucru' => '3 hours' ,
  'imgPizza' => 'images/data-src-pizza1.jpg' ,
  'ingrediente' => array('cheese' , 'olive' , 'salt' , 'flour')
) ,
'OlivePizza' => array(
  'health' => 'Healthy product' ,
  'timpDeLucru' => '5 hours' ,
  'imgPizza' => 'images/data-src-pizza2.jpg' ,
  'ingrediente' => array('olive' , 'salami' , 'tomatoes' , 'savory' , 'pepper')
) ,
'TraditionalPizza' => array(
  'health' => 'Healthy product' ,
  'timpDeLucru' => '1.5 hours' ,
  'imgPizza' => 'images/data-src-pizza3.jpg' ,
  'ingrediente' => array('basil' , 'olive' , 'onion' , 'Parmesan' , 'pepper')
) ,
'ModernPizza' => array(
  'health' => 'Delicious  product' ,
  'timpDeLucru' => '3.5 hours' ,
  'imgPizza' => 'images/data-src-pizza4.jpg' ,
  'ingrediente' => array('pepper' , 'savory' , 'salt' , 'cheese' , 'tomatoes')
) ,
'StandardPizza' => array(
  'health' => 'Healthy product' ,
  'timpDeLucru' => '2.7 hours' ,
  'imgPizza' => 'images/data-src-pizza5.jpg' ,
  'ingrediente' => array('spices' , 'basil' , 'salt' , 'cheese' , 'flour')
) ,
'CommonPizza' => array(
  'health' => 'Delicious  product' ,
  'timpDeLucru' => '2 hours' ,
  'imgPizza' => 'images/data-src-pizza6.jpg' ,
  'ingrediente' => array('onion' , 'cheese' , 'olive' , 'tomatoes')
)

) ;

 ?>

<form action="moreInfo.php" method="post">

<input type="submit" name="productPresentation" value="Product presentation" style="border:1px solid DarkGoldenRod ;
                                                                                    cursor: pointer;
                                                                                    margin-top:1.5em;
                                                                                    margin-bottom:1.5em;
                                                                                    padding:0.5em ;
                                                                                    border-radius:10px ;
                                                                                    box-shadow: 1px 1px 1.5px 1.5px gray;
                                                                                    text-align:center ;
                                                                                    font-size: 1rem ;
                                                                                    color:DarkGoldenRod"/>

</form>


<?php

if(isset($_POST['productPresentation'])){
  echo '<h3 style="text-align:center ; color:DarkGoldenRod">Pizza products are :</h3>' ;

foreach($produsePizza as $prosusPizzaKey => $prosusPizzaValue){

echo '<article>';

        echo '<h3 style="text-align:center ; color:DarkGoldenRod ; margin:1em 0">Product name is: ' . $prosusPizzaKey . '</h3>' ;

        echo '<img src="' . $prosusPizzaValue['imgPizza'] . '" alt="pizzaImgProduct" style="height: 11em ; border-radius: 10px ; box-shadow: 1px 1px 1.5px 1.5px gray" />' ;

        echo '<p style="text-align:center ; color:DarkGoldenRod ; margin:0.5em 0">Work time is about: ' . $prosusPizzaValue['timpDeLucru'] . '.</p>' ;

        echo '<p style="text-align:center ; color:DarkGoldenRod ; margin:0.5em 0">Ingredients are : ' . implode(" , " , $prosusPizzaValue['ingrediente']) .  '.</p>' ;

        if($prosusPizzaValue['health'] === 'Healthy product'){
          echo '<p style="text-align:center ; color:DarkGoldenRod ; margin:0.5em 0">Recommendation: <strong style="color:green">' . $prosusPizzaValue['health'] . ' </strong></p>' ;
        }else{
          echo '<p style="text-align:center ; color:DarkGoldenRod ; margin:0.5em 0">Recommendation: <strong style="color:red">' . $prosusPizzaValue['health'] . ' </strong></p>' ;
        }

echo '</article>' ;

}

}

?>
</article>

</section>


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


    </div>

  </footer>
  <!--footer-->

</body>
<script src="js/nav.js" type="text/javascript"></script>

</html>
