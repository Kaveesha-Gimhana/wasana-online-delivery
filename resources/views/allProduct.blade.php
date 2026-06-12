<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wasana Bakers | All Products</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('CSS/products.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/overoll_user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
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
                        <a class="nav-link" href="">Products</a>
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
    <!-- Products Section Start -->
    <div class="products-page">

        <!-- Sidebar -->
        <div class="sidebar">

            <h3 class="browse-title">Browse by</h3>
            <hr>

            <ul class="category-list">
                <li class="active">All Products</li>
                <li>Anniversary Cake</li>
                <li>Birthday Cake</li>
                <li>Cake</li>
                <li>Christmas Cake</li>
                <li>New Year Cake</li>
                <li>Other Icing Cake</li>
                <li>Parchment Cake</li>
                <li>Sweets</li>
                <li>Valentine's Cake</li>
            </ul>

            <div class="filter-section">
                <h1 class="browse-title mt-5">Filter by</h1>
                <hr>

                <p class="price-text">Price</p>

                <input type="range" class="form-range">

                <div class="price-range">
                    <span>LKR 100</span>
                    <span>LKR 15,000</span>
                </div>
            </div>

        </div>

        <!-- Product Content -->
        <div class="product-content">

            <!-- Banner -->
            <div class="product-banner">

                <img src="https://images.unsplash.com/photo-1509440159596-0249088772ff?q=80&w=1400&auto=format&fit=crop">

                <div class="banner-overlay">
                    <div class="banner-text">
                        <h2>All Products</h2>

                        <p class="product-p">
                            Wasana Cakes are freshly baked, soft, and flavorful
                            ranging from Birthday, Anniversary, Christmas,
                            New Year, Valentine’s, to iced varieties crafted
                            with premium ingredients for every celebration
                            and joyful moment.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Product Grid -->
            <div class="product-grid">

    @foreach($products as $product)

    <div class="product-card">

    <a href="{{ url('/product/'.$product->product_code) }}" class="product-card-link">

        <img src="{{ asset('uploads/products/'.$product->image) }}"
             alt="{{ $product->product_code }}">

        <h3>{{ $product->product_code }}</h3>

        <p>LKR {{ number_format($product->price, 2) }}</p>

    </a>

    <a href="#" class="btn product-card-cart">
        Add To Cart
    </a>

</div>

    @endforeach

</div>

        </div>

    </div>
    <!-- Products Section End -->

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
</body>

</html>