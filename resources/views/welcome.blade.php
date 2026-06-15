<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home | Wasana Delivery</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/overoll_user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="antialiased">
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-4">

            <!-- Logo + Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/nav-logo.png') }}" alt="logo" class="logo">
                <div class="ms-2">
                    <h5 class="mb-0">Wasana Bakers</h5>
                    <small>Online Cake Delivery</small>
                </div>
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                ☰
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/all-products') }}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="btn order-btn" href="{{ url('/all-products') }}">Order Now</a>
                    </li>

                    <li class="nav-item ms-3">
                        <button class="btn nav-btn-login">
                            <i class="bi bi-person-circle"></i> Log In
                        </button>
                    </li>

                    <li class="nav-item ms-3">
                        <!-- <button class="btn position-relative nav-cart-btn">
                        <i class="bi bi-cart4"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                            99+
                        </span>
                    </button> -->
                        <button class="btn position-relative nav-cart-btn" id="cartBtn">
                            <i class="bi bi-cart4"></i>

                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                                3
                            </span>
                        </button>
                    </li>

                </ul>
            </div>

        </div>
    </nav>
    <!-- Navbar Section End -->
    <!-- Carosel Section Start -->
    <div class="container-fluid carosel-main pt-5 pb-5">
        <div class="row">
            <div class="col-md-6 carosel-div">
                <P class="carosel-head-text">“Crafted to Perfection. <br> Delivered with Elegance.” </P>
            </div>
            <div class="col-md-6 carosel-dive p-3">
                <div class="car-div-p">
                    <p class="pt-5 pb-3">
                        We deliver fresh, beautifully crafted icing cakes straight to your doorstep. Perfect for birthdays, <br>
                        surprises, and special celebrations, our cakes are made with quality ingredients and designed <br>
                        with care. Enjoy fast service, custom designs, and reliable delivery—bringing sweetness, <br>
                        convenience, and joy to every moment.
                    </p>
                    <!-- <button class="car-btn btn mb-3">Order Now</button> -->
                    <a class="car-btn btn mb-3" href="{{ url('/all-products') }}">Oder Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Carosel Section End -->
    <!-- Card Slider Section Start -->
    <div class="carosel-bg">
        <div class="container-fluid py-5 px-3">

            <div class="slider-container">

                <div id="sliderWrapper" class="slider-wrapper">

                    <!-- CARD 1 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/birthday_cake.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Birthday Cake</h5>
                            <p>Delicious fresh chocolate cake.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/anniversary_cake.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Anniversary Cake</h5>
                            <p>Soft and creamy vanilla flavor.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/v.jpeg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Valentine Cake</h5>
                            <p>Fresh strawberry cream cake.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                    <!-- CARD 4 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/christmas_cake.jpg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Christmas Cake</h5>
                            <p>Special festive cake.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                    <!-- CARD 5 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/7d83baca37abd108ed3918184480583c.jpg.jpeg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Gateau Cake</h5>
                            <p>Premium layered cake.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                    <!-- CARD 6 -->
                    <div class="card card-slider">
                        <img src="{{ asset('images/746e73d8c5c37517d29dd7f876f47f06.jpg.jpeg') }}" class="card-img-top">
                        <div class="card-body text-center">
                            <h5>Bento Cake</h5>
                            <p>Mini cute cake.</p>
                            <button class="btn card-slider-btn">Order Now</button>
                        </div>
                    </div>

                </div>

                <!-- NAV BUTTONS -->
                <button id="prevBtn" class="nav-btn left">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <button id="nextBtn" class="nav-btn right">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

            <div id="dots" class="indicator-dots"></div>

        </div>
    </div>
    <!-- Card Slider Section Start -->
    <!-- About Section Start -->
    <!-- <div>
        <center>
        
        </center>
    </div> -->
    <!-- About Section End -->

    <!-- About Section -->
    <section class="about-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <!-- About Image -->
                <div class="col-lg-6">

                    <div class="about-image">

                        {{-- Laravel Image Path --}}
                        <img src="{{ asset('images/abouttest01.jpg') }}" alt="About Us">

                    </div>

                </div>

                <!-- About Content -->
                <div class="col-lg-6">

                    <div class="about-content">

                        <h5>ABOUT US</h5>

                        <h1>
                            Baking Happiness Since Day One
                        </h1>

                        <p>
                           Horana Wasana Bakers is your trusted local bakery, 
                           offering fresh, delicious icing cakes and sweet treats.
                            We bring quality, creativity, and reliable home delivery 
                            for every special celebration.
                        </p>

                        <!-- Info Boxes -->
                        <div class="row g-4 mt-2">

                            <div class="col-6">

                                <div class="about-box">

                                    <h3>30+</h3>
                                    <p>Years Experience</p>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="about-box">

                                    <h3>300+</h3>
                                    <p>Our Outlets</p>

                                </div>

                            </div>

                        </div>

                        <!-- Button -->
                        <!-- <a href="#" class="btn btn-primary about-btn mt-4">
                            Learn More
                        </a> -->

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- About Section End -->
    <!-- Footer Start -->
    <!-- Footer Start -->
    <footer class="footer-main pt-5 pb-3">
        <div class="container">
            <div class="row g-4">

                <!-- Brand & About -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-logo">Wasana Bakers</h4>
                    <p class="footer-text">
                        Fresh, delicious and custom-made cakes delivered to your doorstep with love and care.
                    </p>
                    <!-- Social Icons -->
                    <div class="social-icons mt-3">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 ps-lg-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{ url('/products') }}">Products</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">About</a></li>
                    </ul>
                </div>

                <!-- Support -->
                <div class="col-lg-2 col-md-6">
                    <h5 class="footer-title">Support</h5>
                    <ul class="footer-links">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Delivery Info</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms</a></li>
                    </ul>
                </div>

                <!-- Contact Info & Map -->
                <div class="col-lg-5 col-md-6">
                    <h5 class="footer-title">Find Us</h5>
                    <div class="row g-3">
                        <div class="col-12">
                            <p class="footer-text mb-2">
                                <i class="bi bi-geo-alt-fill text-orange me-2"></i> Galle, Sri Lanka <br>
                                <i class="bi bi-telephone-fill text-orange me-2"></i> +94 77 123 4567 <br>
                                <i class="bi bi-envelope-fill text-orange me-2"></i> info@wasana.lk
                            </p>
                        </div>
                        <!-- Modern Google Map Embed -->
                        <div class="col-12">
                            <div class="footer-map-container">
                                <iframe 
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.5749004025915!2d80.0900809!3d6.6910419999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3b50b2b6888d5%3A0x2c24ea9de840a24c!2sWasana%20Bakers%20(Pvt)%20Ltd%20-%20Head%20Office!5e1!3m2!1sen!2ssg!4v1781520383342!5m2!1sen!2ssg" 
                                    width="100%" 
                                    height="150" 
                                    style="border:0;" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <hr class="footer-line">

            <div class="text-center footer-bottom">
                © 2026 Wasana Bakers | All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- Footer End -->
    <!-- Footer End -->


    
    <!-- Cart Popup Overlay -->
    <div class="cart-overlay" id="cartOverlay"></div>

    <!-- Cart Drawer -->
    <div class="cart-drawer" id="cartDrawer">

        <div class="cart-header">
            <h5><i class="bi bi-cart3"></i> Shopping Cart</h5>
            <button class="close-cart" id="closeCart">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="cart-body">

            <!-- Product -->
            <div class="cart-item">
                <img src="{{ asset('images/birthday_cake.jpg') }}" alt="cake">

                <div class="cart-info">
                    <h6>Chocolate Birthday Cake</h6>
                    <p>Rs. 4,500</p>

                    <div class="qty-box">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>
                </div>

                <i class="bi bi-trash3 remove-btn"></i>
            </div>

            <!-- Product -->
            <div class="cart-item">
                <img src="{{ asset('images/christmas_cake.jpg') }}" alt="cake">

                <div class="cart-info">
                    <h6>Christmas Cake</h6>
                    <p>Rs. 3,200</p>

                    <div class="qty-box">
                        <button>-</button>
                        <span>2</span>
                        <button>+</button>
                    </div>
                </div>

                <i class="bi bi-trash3 remove-btn"></i>
            </div>

        </div>

        <div class="cart-footer">

            <div class="subtotal">
                <span>Total</span>
                <strong>Rs. 10,900</strong>
            </div>

            <button class="checkout-btn">
                Proceed To Checkout
            </button>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>