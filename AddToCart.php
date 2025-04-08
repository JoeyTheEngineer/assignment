<?php
session_start();
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jewelry Online Shop</title>
    <link rel="stylesheet" href="style8.css" />

    <!--import font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <!--font-awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
      integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <header id="header">
      <div class="header-top-bar">
        <span>Welcome to Ice Dream Jewelry</span>
      </div>
      <!--navigation-->
      <nav class="navigation">
        <!--logo-->
        <a href="#" class="logo">
          <img src="images/ICE_DREAM_LOGO_300x300.avif" alt="logo" />
        </a>
        <!--menu-button-->
        <input type="checkbox" class="menu-btn" id="menu-btn" />
        <label for="menu-btn" class="menu-icon">
          <span class="nav-icon"></span>
        </label>
        <!--menu-->
        <ul class="menu">
          <li><a href="Home.php" class="active">Home</a></li>
          <li><a href="Category5.html">Category</a></li>
          <li><a href="Products4.html">Products</a></li>
          <li><a href="Testimonial3.html">Testimonials</a></li>
          <li><a href="http://127.0.0.1:5500/Blog2.html#">Blog</a></li>
        </ul>
        <!--right nav-->
        <div class="right-nav">
          <a href="#" class="nav-search">
            <!--search icon using font awesome-->
            <i class="fa-solid fa-magnifying-glass"></i>
          </a>
          <a href="SignUpPage6.html" class="nav-user">
            <!--user icon using font awesome-->
            <i class="fa-regular fa-user"></i>
          </a>
          <!--cart icon using font awesome-->
          <a href="#" class="nav-cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>0</span>
          </a>
        </div>

        <div class="logout">
          <a href="logout.php">Logout</a>
        </div>
      </nav>
    </header>

    <!--****************************ADD TO CART******************************-->

    <!--main container-->
    <main class="container">
      <h1 class="heading">
        <i class="fa-solid fa-cart-shopping"></i>Shopping Cart
      </h1>
      <div class="item-flex">
        <!--checkout section-->
        <section class="checkout">
          <h2 class="section-heading">Payment Details</h2>
          <div class="payment-form">
            <div class="payment-method">
              <button class="method selected">
                <i class="fa-regular fa-credit-card"></i>

                <span>Credit Card</span>
                <ion-icon class="checkmark fill" name="checkmark-circle">
                </ion-icon>
              </button>

              <button class="method">
                <i class="fa-brands fa-paypal"></i>

                <span>Paypal</span>
                <ion-icon class="checkmark" name="checkmark-circle-outline">
                </ion-icon>
              </button>
            </div>

            <form action="#">
              <div class="cardholder-name">
                <label for="cardholder-name" class="label-default"
                  >Cardholder name</label
                >
                <input type="text" name="cardholder-name" id="cardholder-name" class="input-default"
                  required
                />
              </div>
              <div class="card-number">
                <label for="card-number" class="label-default"
                  >Card number</label>
                <input  type="number" name="card-number" max="5" id="card-number" class="input-default"
                  required
                />
              </div>
              <div class="input-flex">
                <div class="expire-date">
                  <label for="expire-date" class="label-default"
                    >Expiration date</label
                  >
                  <div class="input-flex">
                    <input type="number" name="day" id="expire-date" placeholder="31"
                      min="1"
                      max="31"
                      class="input-default"
                      required
                    />
                    /
                    <input type="number" name="month" id="expire-date" placeholder="12"
                      min="1"
                      max="12"
                      class="input-default"
                      required
                    />
                  </div>
                </div>

                <div class="CVV">
                  <label for="CVV" class="label-default">CVV</label>
                  <input
                    type="number"
                    name="CVV"
                    id="CVV"
                    class="input-default"
                    required
                  />
                </div>
              </div>
            </form>
          </div>

          <button class="btn btn-primary">
            <b>Pay</b> Rs <span id="payAmount">70897</span>
          </button>
        </section>

        <!--CART SECTION-->
        <section class="cart">
          <div class="cart-item-box">
            <h2 class="section-heading">Order Summary</h2>
            <!--product 1-->
            <div class="product-card">
              <div class="card">
                <div class="img-box">
                  <img
                    src="images/bracelet (2).jpg"
                    alt="Silver Ocean Bracelet"
                    width="80px"
                    class="product-img"
                  />
                </div>

                <div class="detail">
                  <h4 class="product-name">Silver Ocean Bracelet</h4>
                  <div class="wrapper">
                    <div class="product qty">
                      <button id="decrement">
                        <i class="fa-solid fa-minus"></i>
                      </button>
                      <span id="quantity">1</span>
                      <button id="increment">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                    </div>

                    <div class="price">Rs <span id="price">19999</span></div>
                  </div>
                </div>

                <button class="product-close-btn">
                  <i class="fa-solid fa-x"></i>
                </button>
              </div>
            </div>

            <!--product 2-->
            <div class="product-card">
              <div class="card">
                <div class="img-box">
                  <img
                    src="images/ring (1).jpeg"
                    alt="Blue Diamond Ring"
                    width="80px"
                    class="product-img"
                  />
                </div>

                <div class="detail">
                  <h4 class="product-name">Blue Diamond Ring</h4>
                  <div class="wrapper">
                    <div class="product qty">
                      <button id="decrement">
                        <i class="fa-solid fa-minus"></i>
                      </button>
                      <span id="quantity">1</span>
                      <button id="increment">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                    </div>

                    <div class="price">Rs <span id="price">11999</span></div>
                  </div>
                </div>

                <button class="product-close-btn">
                  <i class="fa-solid fa-x"></i>
                </button>
              </div>
            </div>

            <!--product 3-->
            <div class="product-card">
              <div class="card">
                <div class="img-box">
                  <img
                    src="images/necklace (1).webp"
                    alt="Silver Ocean Bracelet"
                    width="80px"
                    class="product-img"
                  />
                </div>

                <div class="detail">
                  <h4 class="product-name">Luminous Thread Necklace</h4>
                  <div class="wrapper">
                    <div class="product qty">
                      <button id="decrement">
                        <i class="fa-solid fa-minus"></i>
                      </button>
                      <span id="quantity">1</span>
                      <button id="increment">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                    </div>

                    <div class="price">Rs <span id="price">20999</span></div>
                  </div>
                </div>

                <button class="product-close-btn">
                  <i class="fa-solid fa-x"></i>
                </button>
              </div>
            </div>

            <!--product 4-->
            <div class="product-card">
              <div class="card">
                <div class="img-box">
                  <img
                    src="images/earring (2).webp"
                    alt="Silver Ocean Bracelet"
                    width="80px"
                    class="product-img"
                  />
                </div>

                <div class="detail">
                  <h4 class="product-name">Whispering Leaves Earrings</h4>
                  <div class="wrapper">
                    <div class="product qty">
                      <button id="decrement">
                        <i class="fa-solid fa-minus"></i>
                      </button>
                      <span id="quantity">1</span>
                      <button id="increment">
                        <i class="fa-solid fa-plus"></i>
                      </button>
                    </div>

                    <div class="price">Rs <span id="price">17900</span></div>
                  </div>
                </div>

                <button class="product-close-btn">
                  <i class="fa-solid fa-x"></i>
                </button>
              </div>
            </div>
          </div>

          <hr color="grey" />

          <div class="amount">
            <div class="total">
              <span>Total</span> <span>Rs <span id="total">70897</span></span>
            </div>
          </div>
        </section>
      </div>
    </main>
    <script src="./CartScript.js"></script>


    <?php
if(isset($_SESSION['email'])){
  $email=$_SESSION['email'];
  $query=mysqli_query($conn, "SELECT login.* FROM `login` WHERE login.email='$email'");
 // while($row=mysqli_fetch_array($query)){
 // header("location: login6.php");
 // }
}
?>

  </body>
</html>
