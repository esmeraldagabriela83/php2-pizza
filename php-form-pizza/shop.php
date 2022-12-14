<!DOCTYPE html>
<html lang="en-EN">

<head>
  <meta charset="UTF-8">
  <title>shop page food shop project</title>

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

  <link rel="stylesheet" href="css/style.css">

  <script src="js/foodTutorial.js" type="text/javascript" async></script>
</head>

<body style="background-color:mintcream">

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

<section class="container content-section">
           <h3 class="section-header">Pizza</h3>
           <div class="shop-items">
               <div class="shop-item">
                   <span class="shop-item-title">Pizza 1</span>
                   <img class="shop-item-image" src="./images/pizza-1.jpg" alt="shop-img img1">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$12.93</span><br/>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Pizza 2</span>
                   <img class="shop-item-image" src="./images/pizza-2.jpg" alt="shop-img img2">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$14.3</span><br/>
                       <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Pizza 3</span>
                   <img class="shop-item-image" src="./images/pizza-3.jpg" alt="shop-img img3">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$9.7</span><br/>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Pizza 4</span>
                   <img class="shop-item-image" src="./images/pizza-4.jpg" alt="shop-img img4">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.15</span><br/>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
           </div>
       </section>
       <section class="container content-section">
           <h3 class="section-header">Salad</h3>
           <div class="shop-items">
               <div class="shop-item">
                   <span class="shop-item-title">Salad 1</span>
                   <img class="shop-item-image" src="./images/salad-1.jpg" alt="shop-img img5">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$19.97</span><br/>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
               <div class="shop-item">
                   <span class="shop-item-title">Salad 2</span>
                   <img class="shop-item-image" src="./images/salad-2.jpg" alt="shop-img img6">
                   <div class="shop-item-details">
                       <span class="shop-item-price">$6.23</span><br/>
                       <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                   </div>
               </div>
           </div>
       </section>
       <section class="container content-section">
           <h3 class="section-header">Cart</h3>
           <div class="cart-row">
               <span class="cart-item cart-header cart-column">ITEM</span>
               <span class="cart-price cart-header cart-column">PRICE</span>
               <span class="cart-quantity cart-header cart-column">QUANTITY</span>
           </div>
           <div class="cart-items">  </div>
           <div class="cart-total">
               <strong class="cart-total-title">Total</strong>
               <span class="cart-total-price">$0</span>
           </div>
           <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
       </section>

  <!---------------------------------------------------------------------------------------------------->
<!--if total > 56.08-->
<div id="ifTotal" class="container"></div>
<!--if total > 56.08-->
  <!---------------------------------------------------------------------------------------------------->
<!--fixed button-->

<!--just change text on mouseover-->
<button class="floating-btn btn-primary" id="fixed-shop-btn">
  <!-- Get in Touch -->
</button>
<!--just change text on mouseover-->

<!--fixed button-->



  <footer>
        <div class="container">

            <div id="icons">
                <div class="footerIcons"><a href="https://facebook.com/" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a></div>
                <div class="footerIcons"><a href="https://instagram.com/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a></div>
                <div class="footerIcons"><a href="https://twitter.com/" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a></div>
            </div>

        <!--sources links-->
        <a href="#" title="show and hide source links" class="btn_show_hide"><h3>sources</h3></a>
        <div id="divSources" class="hidden">

             <h5><a href="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                target="_blank">
                https://images.unsplash.com/photo-
                1513104890138-7c749659a591?ixlib=
                rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=
                crop&w=1170&q=80
              </a></h5>

              <h5><a href="https://images.unsplash.com/photo-1590947132387-155cc02f3212?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                 target="_blank">
                 https://images.unsplash.com/photo-
                 1590947132387-155cc02f3212?ixlib=
                 rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                 1wYWdlfHx8fGVufDB8fHx8&auto=
                 format&fit=crop&w=1170&q=80
               </a></h5>

               <h5><a href="https://images.unsplash.com/photo-1604382354936-07c5d9983bd3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                  target="_blank">
                  https://images.unsplash.com/photo-
                  1604382354936-07c5d9983bd3?ixlib=
                  rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                  1wYWdlfHx8fGVufDB8fHx8&auto=
                  format&fit=crop&w=1170&q=80
                </a></h5>

                <h5><a href="https://images.unsplash.com/photo-1588315029754-2dd089d39a1a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80"
                   target="_blank">
                   https://images.unsplash.com/photo-
                   1588315029754-2dd089d39a1a?ixlib=
                   rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                   1wYWdlfHx8fGVufDB8fHx8&auto=
                   format&fit=crop&w=1171&q=80
                 </a></h5>

                 <h5><a href="https://images.unsplash.com/photo-1515683359900-6922e4964be1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                    target="_blank">
                    https://images.unsplash.com/photo-
                    1515683359900-6922e4964be1?ixlib=
                    rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                    1wYWdlfHx8fGVufDB8fHx8&auto=
                    format&fit=crop&w=1170&q=80
                  </a></h5>

                  <h5><a href="https://images.unsplash.com/photo-1523218507958-81785af4f6e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                     target="_blank">
                    https://images.unsplash.com/photo-
                    1523218507958-81785af4f6e2?ixlib=
                    rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by
                    1wYWdlfHx8fGVufDB8fHx8&auto=
                    format&fit=crop&w=1170&q=80
                   </a></h5>

                <h5><a href="https://www.youtube.com/watch?v=YeFzkC2awTM"
                   target="_blank">
                   https://www.youtube.com/watch?v=YeFzkC2awTM
                 </a></h5>

                 <h5><a href="https://images.unsplash.com/photo-1539798488725-7387f3229c49?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                    target="_blank">
                   https://images.unsplash.com/photo-1539798488725-7387f3229c49?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80
                  </a></h5>

                  <h5><a href="https://images.unsplash.com/photo-1517686469429-8bdb88b9f907?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170"
                     target="_blank">
                    https://images.unsplash.com/photo-1517686469429-8bdb88b9f907?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170
                   </a></h5>
        </div>
        </div>

      </footer>
          <!--footer-->

</body>
<script src="js/nav.js" type="text/javascript"></script>
<script src="js/food.js" type="text/javascript"></script>

<script src="js/footer-show-hide.js" type="text/javascript"></script>
</html>
