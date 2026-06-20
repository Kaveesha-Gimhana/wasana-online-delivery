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

    <style>
        /* ==========================================================================
           1. RESET & MAIN WRAPPER STYLING
           ========================================================================== */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }



        /* Fullscreen Overlay Box */
        .premium-loader-wrapper {
            position: fixed;
            inset: 0;
            background: radial-gradient(circle at center, #1e293b 0%, #0f172a 100%);
            z-index: 99999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                visibility 0.6s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Class to trigger structural fade-out via Javascript integration hook */
        .premium-loader-wrapper.fade-out {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        /* ==========================================================================
           2. ANIMATION CORE - THE FLUID ROTATING RING
           ========================================================================== */
        .loader-core-container {
            position: relative;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .fluid-ring {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid transparent;
            /* Gradient dynamic composition representation mimicking Wasana Palette */
            border-top-color: #ff5722;
            border-right-color: rgba(255, 87, 34, 0.2);
            animation: spinFluid 1.2s cubic-bezier(0.5, 0.1, 0.4, 0.9) infinite;
        }

        /* Inner soft pulse icon/dot placeholder frame node */
        /* .loader-center-pulse {
            position: absolute;
            width: 24px;
            height: 24px;
            background: linear-gradient(135deg, #ff7043, #ff5722);
            border-radius: 50%;
            box-shadow: 0 0 25px rgba(255, 87, 34, 0.7);
            animation: pulseCore 1.5s ease-in-out infinite;
        } */

        .loader-logo {
            position: absolute;
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            animation: logoPulse 1.5s ease-in-out infinite;
        }

        .loader-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            border-radius: 50%;
        }

        @keyframes logoPulse {

            0%,
            100% {
                transform: scale(0.95);
            }

            50% {
                transform: scale(1.08);
            }
        }

        /* ==========================================================================
           3. BRANDING TYPOGRAPHY & LOADING PROGRESS BAR
           ========================================================================== */
        .brand-meta-group {
            text-align: center;
            margin-top: 32px;
        }

        .brand-meta-group h2 {
            color: #ffffff;
            font-size: 24px;
            font-weight: 800;
            letter-spacing: 0.5px;
            margin-bottom: 4px;
        }

        .brand-meta-group h2 span {
            color: #ff5722;
            /* Matches primary interactive layouts */
        }

        .brand-meta-group p {
            color: #64748b;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        /* Progress Bar UI Element Track Container */
        .progress-track {
            width: 180px;
            height: 4px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 20px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
        }

        /* Deterministic progress fill animation sequence line */
        .progress-fill-line {
            position: absolute;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, #ff7043, #ff5722);
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(255, 87, 34, 0.5);
            animation: fillProgress 2.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        /* ==========================================================================
           4. CSS KEYFRAMES SYSTEM DEFINITIONS
           ========================================================================== */
        @keyframes spinFluid {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulseCore {

            0%,
            100% {
                transform: scale(0.9);
                opacity: 0.8;
            }

            50% {
                transform: scale(1.15);
                opacity: 1;
                box-shadow: 0 0 35px rgba(255, 87, 34, 0.9);
            }
        }

        @keyframes fillProgress {
            0% {
                width: 0%;
            }

            30% {
                width: 45%;
            }

            65% {
                width: 70%;
            }

            100% {
                width: 100%;
            }
        }

        /* Dummy content frame box only to showcase layout transition normalization */
        .demo-main-content {
            text-align: center;
            color: #f8fafc;
        }

        .demo-main-content h1 {
            font-size: 40px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .demo-main-content p {
            color: #94a3b8;
            font-size: 16px;
        }
    </style>
</head>

<body class="antialiased">
    <!-- Premium Loader Component Start -->
    <div class="premium-loader-wrapper" id="globalPageLoader">

        <!-- Rotating Ring Elements Block -->
        <div class="loader-core-container">
            <div class="fluid-ring"></div>

            <div class="loader-logo">
                <img src="{{ asset('images/nav-logo.png') }}" alt="Wasana Logo">
            </div>
        </div>

        <!-- Typography Branding Metrics Track -->
        <div class="brand-meta-group">
            <h2>Wasana <span>Bakers</span></h2>
            <p>Online Delivery</p>

            <!-- Structural Track Bar System -->
            <div class="progress-track">
                <div class="progress-fill-line"></div>
            </div>
        </div>

    </div>
    <!-- Premium Loader Component End -->
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

        <div class="container" id="about">

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
        <div class="container" id="contact">
            <div class="row g-4">

                <!-- Brand & About -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-logo">Wasana Bakers</h4>
                    <p class="footer-text">
                        Horana Wasana Bakery, founded in 1995 by Mr. Dayananda Bobuwala and
                        Mrs. Anusha Wijayanthi Perera in Govinna, Ratiala, is rooted in the founders’
                        strong connection to Horana. Today, it continues its tradition of
                        quality while offering convenient online delivery.
                    </p>
                    <!-- Social Icons -->
                    <div class="social-icons mt-3">
                        <a href="https://www.facebook.com/horanawasana?rdid=eJthX9nNmE2HlClT&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F1BVHn3G3a8%2F#"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/wasana_online_store/?next=%2F"><i class="bi bi-instagram"></i></a>
                        <a href="#" onclick="openWhatsApp()"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 ps-lg-4">
                    <h5 class="footer-title">Quick Links</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="{{ url('/all-products') }}">Products</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="#about">About</a></li>
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
                                <i class="bi bi-geo-alt-fill text-orange me-2"></i> No. 18, Wasana Bakers Factory,<br> Kandana,Horana <br> Sri lanka. <br>
                                <i class="bi bi-telephone-fill text-orange me-2"></i> 034 22 50 600 <br>
                                <i class="bi bi-envelope-fill text-orange me-2"></i> <a href="mailto:wasanadelivery@gmail.com">wasanadelivery@gmail.com</a>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const loaderElement = document.getElementById("globalPageLoader");

            if (!loaderElement) return;

            // Home page first load only
            if (sessionStorage.getItem("wasana_home_loaded")) {

                loaderElement.style.display = "none";

            } else {

                sessionStorage.setItem("wasana_home_loaded", "true");

                setTimeout(() => {
                    loaderElement.classList.add("fade-out");

                    setTimeout(() => {
                        loaderElement.style.display = "none";
                    }, 600);

                }, 2600);

            }

        });
    </script>
    <script>
        // මෙතනත් 'fnction' එක 'function' ලෙස නිවැරදි කලා
        function openWhatsApp() {
            let phone = "94711500900";
            let url = window.location.href;
            //let message = "Hi, I am interested in this product: \n" + url;
            let whatsappURL = "https://wa.me/" + phone + "?text=" + encodeURIComponent();
            window.open(whatsappURL, "_blank");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cart.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>

</html>