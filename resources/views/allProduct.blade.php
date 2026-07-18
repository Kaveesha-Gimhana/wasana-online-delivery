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
    @include('layouts.navbar')
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