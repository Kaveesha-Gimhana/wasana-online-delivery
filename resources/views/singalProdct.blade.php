<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wasana Bakers | All Product</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('CSS/products.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/overoll_user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg custom-navbar sticky-top">
        <div class="container-fluid px-4">

            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/nav-logo.png') }}" alt="logo" class="logo">
                <div class="ms-2">
                    <h5 class="mb-0">Wasana Bakers</h5>
                    <small>Online Cake Delivery</small>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                ☰
            </button>

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
    <div class="container-fluid">
        <div class="wb-single-product">

            <div class="row mb-4">
                <div class="col-12">
                    <a href="{{ url()->previous() }}" class="wb-back-btn">
                        <i class="bi bi-arrow-left"></i> Back to Previous Page
                    </a>
                </div>
            </div>

            <div class="row g-4 align-items-center">

                <div class="col-lg-5">
                    <div class="wb-product-image-box">
                        <img src="{{ asset('uploads/products/'.$product->image) }}"
                            alt="{{ $product->product_code }}"
                            class="wb-product-image">
                    </div>
                </div>

                <div class="col-lg-7">

                    <div class="wb-product-details">

                        <h2 class="wb-product-title">
                            {{ $product->product_code }}
                        </h2>

                        <h3 class="wb-product-price">
                            Rs. {{ number_format($product->price, 2) }}
                        </h3>

                        <div class="mb-3">
                            <label class="wb-label">
                                Select Option
                            </label>

                            <select class="form-select wb-product-select">
                                <option selected>Choose Cake Type</option>
                                <option>Chocolate</option>
                                <option>Ribbon</option>
                                <option>Vanilla</option>
                            </select>
                        </div>

                        <div class="mb-4">

                            <label class="wb-label">
                                Quantity
                            </label>

                            <div class="wb-qty-wrapper">

                                <button type="button"
                                    class="wb-qty-btn"
                                    onclick="decreaseQty()">
                                    -
                                </button>

                                <input type="text"
                                    id="wbQty"
                                    value="1"
                                    readonly>

                                <button type="button"
                                    class="wb-qty-btn"
                                    onclick="increaseQty()">
                                    +
                                </button>

                            </div>

                        </div>

                        <div class="wb-description-box">

                            <h5>Description</h5>

                            <p>
                                {{ $product->description }}
                            </p>

                        </div>

                        <div class="wb-btn-group">

                            <button class="btn wb-cart-btn">
                                <i class="bi bi-cart-plus"></i>
                                Add To Cart
                            </button>

                            <button class="btn wb-buy-btn">
                                <i class="bi bi-lightning-charge"></i>
                                Buy Now
                            </button>

                        </div>

                        <div class="wb-contact-group">

                            <a href="javascript:void(0)"
                                onclick="openWhatsApp()"
                                class="wb-contact-btn">
                                <i class="bi bi-whatsapp"></i>
                            </a>

                            <a href="#"
                                class="wb-contact-btn">
                                <i class="bi bi-telephone"></i>
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

    <div class="cart-overlay" id="cartOverlay"></div>

    <div class="cart-drawer" id="cartDrawer">

        <div class="cart-header">
            <h5><i class="bi bi-cart3"></i> Shopping Cart</h5>
            <button class="close-cart" id="closeCart">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <div class="cart-body">

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
    
    <script>
        let qty = 1;

        // මෙතන 'fnction' එක 'function' ලෙස නිවැරදි කලා
        function increaseQty() {
            qty++;
            document.getElementById('wbQty').value = qty;
        }

        // මෙතනත් 'fnction' එක 'function' ලෙස නිවැරදි කලා
        function decreaseQty() {
            if (qty > 1) {
                qty--;
                document.getElementById('wbQty').value = qty;
            }
        }
    </script>
    
    <script>
        // මෙතනත් 'fnction' එක 'function' ලෙස නිවැරදි කලා
        function openWhatsApp() {
            let phone = "94711500900";
            let url = window.location.href;
            let message = "Hi, I am interested in this product: \n" + url;
            let whatsappURL = "https://wa.me/" + phone + "?text=" + encodeURIComponent(message);
            window.open(whatsappURL, "_blank");
        }
    </script>
</body>

</html>