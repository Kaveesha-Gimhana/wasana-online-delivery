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
                    <a class="nav-link" href="{{ url('/All_Products') }}">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="btn order-btn" href="{{ url('/All_Products') }}">Order Now</a>
                </li>

                <li class="nav-item ms-3">
                    <button class="btn nav-btn-login">
                        <i class="bi bi-person-circle"></i> Log In
                    </button>
                </li>

                <li class="nav-item ms-3">
                    <button class="btn position-relative nav-cart-btn">
                        <i class="bi bi-cart4"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                            99+
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
                    <a class="car-btn btn mb-3" href="{{ url('/All_Products') }}">Oder Now</a>
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
                    <img src="https://picsum.photos/id/251/600/400" class="card-img-top">
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
                    <img src="https://picsum.photos/id/1016/600/400" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Gateau Cake</h5>
                        <p>Premium layered cake.</p>
                        <button class="btn card-slider-btn">Order Now</button>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="card card-slider">
                    <img src="https://picsum.photos/id/1025/600/400" class="card-img-top">
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
                            We Build Modern & Creative Websites
                        </h1>

                        <p>
                            We create professional, responsive, and modern web
                            applications using Laravel, Bootstrap, and modern
                            technologies.
                        </p>

                        <p>
                            Our mission is to provide high-quality digital
                            solutions with beautiful user experiences.
                        </p>

                        <!-- Info Boxes -->
                        <div class="row g-4 mt-2">

                            <div class="col-6">

                                <div class="about-box">

                                    <h3>5+</h3>
                                    <p>Years Experience</p>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="about-box">

                                    <h3>120+</h3>
                                    <p>Projects Completed</p>

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
<footer class="footer-main pt-5 pb-3">
    <div class="container">
        <div class="row g-4">

            <!-- Brand -->
            <div class="col-md-4">
                <h4 class="footer-logo">Wasana Bakers</h4>
                <p class="footer-text">
                    Fresh, delicious and custom-made cakes delivered to your doorstep with love and care.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="col-md-2">
                <h5 class="footer-title">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ url('/products') }}">Products</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>

            <!-- Support -->
            <div class="col-md-3">
                <h5 class="footer-title">Support</h5>
                <ul class="footer-links">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Delivery Info</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-md-3">
                <h5 class="footer-title">Contact</h5>
                <p class="footer-text">
                    📍 Galle, Sri Lanka <br>
                    📞 +94 77 123 4567 <br>
                    ✉ info@wasana.lk
                </p>

                <!-- Social -->
                <div class="social-icons">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-whatsapp"></i></a>
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        const wrapper = document.getElementById("sliderWrapper");
        let cards = document.querySelectorAll(".card");
        const nextBtn = document.getElementById("nextBtn");
        const prevBtn = document.getElementById("prevBtn");
        const dotsContainer = document.getElementById("dots");

        let index = 0;
        let autoSlide;
        let cardsPerView = 4;
        let totalCards = cards.length;

        // Clone cards for seamless infinite loop
        function cloneCards() {
            // Remove old clones if any
            document.querySelectorAll('.card.clone').forEach(clone => clone.remove());

            cards = document.querySelectorAll(".card"); // refresh

            // Clone first few cards and append at the end
            for (let i = 0; i < cardsPerView; i++) {
                const clone = cards[i].cloneNode(true);
                clone.classList.add('clone');
                wrapper.appendChild(clone);
            }

            // Clone last few cards and prepend at the beginning
            for (let i = totalCards - cardsPerView; i < totalCards; i++) {
                const clone = cards[i].cloneNode(true);
                clone.classList.add('clone');
                wrapper.prepend(clone);
            }

            cards = document.querySelectorAll(".card"); // update list
        }

        function getCardsPerView() {
            if (window.innerWidth <= 576) return 1;
            if (window.innerWidth <= 991) return 2;
            return 4;
        }

        function updateSlider(smooth = true) {
            cardsPerView = getCardsPerView();
            const cardWidth = cards[0].offsetWidth + 20; // gap is 20px

            wrapper.style.transition = smooth ? 'transform 0.6s ease-in-out' : 'none';
            wrapper.style.transform = `translateX(-${(index + cardsPerView) * cardWidth}px)`;
        }

        function createDots() {
            dotsContainer.innerHTML = "";
            for (let i = 0; i < totalCards; i++) {
                const dot = document.createElement("div");
                dot.classList.add("dot");
                dot.addEventListener("click", () => {
                    index = i;
                    updateSlider();
                    restartAuto();
                });
                dotsContainer.appendChild(dot);
            }
        }

        function updateDots() {
            const dots = document.querySelectorAll(".dot");
            dots.forEach((dot, i) => {
                dot.classList.toggle("active", i === index % totalCards);
            });
        }

        function nextSlide() {
            index++;
            updateSlider();
            updateDots();

            // Reset to beginning when we reach the cloned cards
            if (index >= totalCards) {
                setTimeout(() => {
                    index = 0;
                    updateSlider(false); // jump without animation
                }, 600);
            }
        }

        function prevSlide() {
            index--;
            updateSlider();
            updateDots();

            // Reset when going before the first real card
            if (index < 0) {
                setTimeout(() => {
                    index = totalCards - 1;
                    updateSlider(false);
                }, 600);
            }
        }

        function startAuto() {
            autoSlide = setInterval(nextSlide, 5000);
        }

        function stopAuto() {
            clearInterval(autoSlide);
        }

        function restartAuto() {
            stopAuto();
            startAuto();
        }

        // Event Listeners
        nextBtn.addEventListener("click", () => {
            nextSlide();
            restartAuto();
        });

        prevBtn.addEventListener("click", () => {
            prevSlide();
            restartAuto();
        });

        document.querySelector(".slider-container").addEventListener("mouseenter", stopAuto);
        document.querySelector(".slider-container").addEventListener("mouseleave", startAuto);

        window.addEventListener("resize", () => {
            cardsPerView = getCardsPerView();
            cloneCards(); // re-clone on resize
            updateSlider(false);
            createDots();
            updateDots();
        });

        // Initialize
        window.onload = () => {
            cloneCards();
            cardsPerView = getCardsPerView();
            createDots();
            updateSlider(false); // initial position (no animation)
            startAuto();
        };
    </script>
</body>

</html>