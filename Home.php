<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jewelry Online Shop</title>
    <link rel="stylesheet" href="style.css" />

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

    <!--swiper slider for product using swiper demo-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
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
          <li><a href="Home.html" class="active">Home</a></li>
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
          <a href="#" class="nav-user">
            <!--user icon using font awesome-->
            <i class="fa-regular fa-user"></i>
          </a>
          <!--cart icon using font awesome-->
          <a href="#" class="nav-cart">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>0</span>
          </a>
        </div>
      </nav>
    </header>
    <!--Main banner-->
    <section id="main-banner">
      <div class="main-banner-box">
        <!--images-->
        <img src="images/cover (1).jpeg" alt="banner" />
        <!--text-->
        <div class="main-banner-text">
          <h1>Your Dream Jewelry</h1>
          <p>Designer Jewelry, Necklaces, Bracelets and Earrings</p>
          <a href="Category5.html">Shop Now</a>
        </div>
      </div>
    </section>
    <!--service info-->
    <section class="provide">
      <!--box-->
      <div class="info-box">
        <!--icon-->
        <div class="info-icon"><i class="fa-solid fa-plane"></i></div>
        <!--text-->
        <div class="info-text">
          <strong>Free Shipping</strong>
          <p>Enjoy Free Shipping on All Order</p>
        </div>
      </div>

      <!--box-->
      <div class="info-box">
        <!--icon-->
        <div class="info-icon"><i class="fa-regular fa-comments"></i></div>
        <!--text-->
        <div class="info-text">
          <strong>Support 24/7</strong>
          <p>Contact Us Anytime for Immediate Support</p>
        </div>
      </div>

      <!--box-->
      <div class="info-box">
        <!--icon-->
        <div class="info-icon"><i class="fa-regular fa-credit-card"></i></div>
        <!--text-->
        <div class="info-text">
          <strong>100% payment secure</strong>
          <p>Shop with Confidence</p>
        </div>
      </div>
    </section>

    <!--product grid-->
    <section class="product-grid-half">
      <!--box-->
      <div class="product-grid-box product-grid-box1">
        <!--image-->
        <img src="images/tennis bracelet.webp" alt="product" />
        <div class="product-grid-text">
          <span>Beautiful</span>
          <strong>Tennis bracelet</strong>
          <a href="Bracelets.html">Shop Now</a>
        </div>
      </div>

      <!--box-->
      <div class="product-grid-box product-grid-box2">
        <!--image-->
        <img src="images/background-necklace.png" alt="product" />
        <div class="product-grid-text">
          <span>Eye sparkling</span>
          <strong>Necklace</strong>
          <a href="Necklace.html">Shop Now</a>
        </div>
      </div>

      <!--box-->
      <div class="product-grid-box product-grid-box3">
        <!--image-->
        <img src="images/wedding-ring-finger.jpg" alt="product" />
        <div class="product-grid-text">
          <span>Engagement</span>
          <strong>Diamond Ring</strong>
          <a href="Products4.html">Shop Now</a>
        </div>
      </div>

      <!--box-->
      <div class="product-grid-box product-grid-box4">
        <!--image-->
        <img src="images/model earrings.png" alt="product" />
        <div class="product-grid-text">
          <span>Beautiful</span>
          <strong>Earring</strong>
          <a href="Earring.html">Shop Now</a>
        </div>
      </div>
    </section>

    <!--new products-->
    <section id="new-product">
      <!--heading-->
      <div class="new-product-heading">
        <h2>New arrival</h2>
        <p>Add our new products to weekly lineup</p>
      </div>

      <div class="new-product-container">
        <!--swiper-->
        <div class="swiper mySwiperNewProduct">
          <div class="swiper-wrapper">
            <!--slide 1-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/bracelet (2).jpg" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title"
                    >Silver Ocean Bracelet</a
                  >
                  <span>Rs 19,999</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->

            <!--slide 2-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/earring (1).jpg" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title">Diamond Earring</a>
                  <span>Rs 8,999</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->

            <!--slide 3-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/ring (1).jpeg" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title">Blue Diamond Ring</a>
                  <span>Rs 11,999</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->

            <!--slide 4-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/earring (1).webp" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title"
                    >Blue Round Crystal Disco Ball Stud Earring</a
                  >
                  <span>Rs 7,599</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->

            <!--slide 5-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/bracelet (4).webp" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title"
                    >White Diamond Bracelet</a
                  >
                  <span>Rs 13,399</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->

            <!--slide 6-->
            <div class="swiper-slide">
              <!--box-->
              <div class="new-product-box">
                <!--image-->
                <a href="#" class="new-product-img">
                  <img src="images/necklaceeeee_.jpg" alt="product" />
                  <span>New</span>
                  <button class="new-product-cart-button">
                    <i class="fa-solid fa-cart-shopping"></i>Add To Cart
                  </button>
                </a>
                <div class="new-product-text">
                  <a href="#" class="new-product-title"
                    >Sterling Silver Diamond Pendant</a
                  >
                  <span>Rs 9,999</span>
                </div>
              </div>
              <!--box end-->
            </div>
            <!--slide end-->
          </div>

          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiperNewProduct", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          /*After 640px slidesPerView: 1 */
          640: {
            /*After 740px this will apply */ slidesPerView: 2,
            spaceBetween: 20,
          },
          740: {
            /*After 1000px this will apply */ slidesPerView: 3,
            spaceBetween: 20,
          },
          1000: {
            /*After 1224px this will apply */ slidesPerView: 4,
            spaceBetween: 20,
          },
          1224: {
            slidesPerView: 5 /*product per slide*/,
            spaceBetween: 50 /*gape*/,
          },
        },
      });
    </script>

    <!-- Footer -->
    <footer>
      <div class="footer-container">
        <!-- Company Box -->
        <div class="footer-company-box">
          <!-- Logo -->
          <a href="#" class="logo"
            ><img src="images/ICE_DREAM_LOGO_300x300.avif" alt="logo"
          /></a>
          <!-- Details -->
          <p>Elegance in Every Sparkle.</p>
          <!-- Social Links -->
          <div class="footer-social">
            <a
              href="https://www.facebook.com/bruno.bijou.7?mibexid=LQQJ4d"
              target="_blank"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a
              href="https://www.instagram.com/zeh.raan?igsh=OXpwb3licG5jdGJs&utm_source=qr"
              target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a
              href="https://www.tiktok.com/@anisha_a3?is_from_webapp=1&sender_device=pc"
              target="_blank"
              ><i class="fa-brands fa-tiktok"></i
            ></a>
            <a href="https://youtu.be/SpUK7U7kDtE" target="_blank"
              ><i class="fa-brands fa-youtube"></i
            ></a>
          </div>
        </div>

        <!-- Footer Links -->
        <div class="footer-link-box">
          <strong>Main Links</strong>
          <ul>
            <li><a href="Home.html">Home</a></li>
            <li><a href="Category5.html">Category</a></li>
            <li><a href="Products4.html">Products</a></li>
            <li><a href="Testimonial3.html">Testimonials</a></li>
            <li><a href="Blog2.html">Blogs</a></li>
          </ul>
        </div>

        <div class="footer-link-box">
          <strong>Legal</strong>
          <ul>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>

        <div class="footer-link-box">
          <strong>Help</strong>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="contact.html" target="_blank">Contact</a></li>
          </ul>
        </div>
      </div>

      <!-- Bottom -->
      <div class="footer-bottom">
        <span class="footer-owner">Made By Zehraan, Pooja and Richard</span>
        <span class="copyright">&#169; Copyright 2024 -Ice Dream Jewelry</span>
      </div>
    </footer>
  </body>
</html>
