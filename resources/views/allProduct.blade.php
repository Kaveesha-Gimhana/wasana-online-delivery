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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <!-- Navbar Section Start -->
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container">

            <!-- Logo + Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/nav-logo.png') }}" alt="logo" class="logo">
                <div class="ms-2">
                    <h5 class="mb-0 text-white">Wasana Bakers</h5>
                    <small class="text-light">Online Cake Delivery</small>
                </div>
            </a>

            <!-- Toggle Button -->
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                ☰
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/products') }}">Products</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Contact Us</a>
                    </li>

                    <!-- Order Button -->
                    <li class="nav-item ms-3">
                        <a class="btn order-btn" href="{{ url('/products') }}">Order Now</a>
                    </li>

                    <!-- Login Icon -->
                    <li class="nav-item ms-3 text-white">
                        <button class="btn nav-btn-login"><i class="bi bi-person-circle"></i> Log In</button>
                    </li>

                    <!-- Cart -->
                    <li class="nav-item ms-3 text-white">
                        <button type="button" class="btn position-relative nav-cart-btn">
                            <i class="bi bi-cart4"></i>
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill">
                                99+
                                <span class="visually-hidden">unread messages</span>
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
                <h1>All Products</h1>

                <p>
                    Wasana Cakes are freshly baked, soft, and flavorful
                    ranging from Birthday, Anniversary, Christmas,
                    New Year, Valentine’s, to iced varieties crafted
                    with premium ingredients for every celebration
                    and joyful moment.
                </p>
            </div>

        </div>

        <!-- Top Bar -->
        <div class="top-bar">

            <p>332 products</p>

            <select>
                <option>Sort by: Recommended</option>
                <option>Price Low to High</option>
                <option>Price High to Low</option>
            </select>

        </div>

        <!-- Product Grid -->
        <div class="product-grid">

            <!-- CARD -->
            <!-- Copy this card 30 times -->

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=1">
                <h3 class="">P 01</h3>
                <p>LKR 3,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=2">
                <h3>P 02</h3>
                <p>LKR 2,500.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=3">
                <h3>P 03</h3>
                <p>LKR 4,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=4">
                <h3>P 04</h3>
                <p>LKR 1,800.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=5">
                <h3>P 05</h3>
                <p>LKR 5,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=6">
                <h3>P 06</h3>
                <p>LKR 2,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=7">
                <h3>P 07</h3>
                <p>LKR 2,700.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=8">
                <h3>P 08</h3>
                <p>LKR 3,200.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=9">
                <h3>P 09</h3>
                <p>LKR 6,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=10">
                <h3>P 10</h3>
                <p>LKR 2,900.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=11">
                <h3>P 11</h3>
                <p>LKR 4,500.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=12">
                <h3>P 12</h3>
                <p>LKR 3,900.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=13">
                <h3>P 13</h3>
                <p>LKR 2,400.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=14">
                <h3>P 14</h3>
                <p>LKR 3,600.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=15">
                <h3>P 15</h3>
                <p>LKR 7,000.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=16">
                <h3>P 16</h3>
                <p>LKR 5,300.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=17">
                <h3>P 17</h3>
                <p>LKR 1,900.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=18">
                <h3>P 18</h3>
                <p>LKR 3,100.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=19">
                <h3>P 19</h3>
                <p>LKR 4,200.00</p>
            </div>

            <div class="product-card">
                <img src="https://picsum.photos/300/300?random=20">
                <h3>P 20</h3>
                <p>LKR 2,100.00</p>
            </div>

            <!-- add more same widiyata random=30 wenakam -->

        </div>

    </div>

</div>
<!-- Products Section End -->
</body>
</html>