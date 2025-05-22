<header id="header" class="header position-relative">
    <!-- Top Bar -->
    <div class="top-bar py-2">
        <div class="container-fluid container-xl">
            <div class="row align-items-center">
                <div class="col-lg-4 d-none d-lg-flex">
                    <div class="top-bar-item">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <span>Butuh Bantuan? Hubungi Kami : </span>
                        <a href="tel:+1234567890">+1 (234) 567-890</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 text-center">
                    <div class="announcement-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 3000
                                },
                                "slidesPerView": 1,
                                "direction": "vertical",
                                "effect": "slide"
                            }
                        </script>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">🚚 24/7 Bantuan</div>
                            <div class="swiper-slide">💰 30 Hari Garansi.</div>
                            <div class="swiper-slide">🎁 20% Discount Pembelian Pertama</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-none d-lg-block">
                    <div class="d-flex justify-content-end">
                        <div class="top-bar-item dropdown">
                            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="bi bi-cash me-2"></i>IDR
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="bi bi-check2 me-2 selected-icon"></i>IDR</a></li>
                                <li><a class="dropdown-item" href="#">USD</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid container-xl">
            <div class="d-flex py-3 align-items-center justify-content-between">

                <!-- Logo -->
                <a href="index.php" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <img src="assets/img/navbarlogo.webp" alt="">
                    <h1 class="sitename">Zeps Media</h1>
                </a>

                <!-- Search 
                <form class="search-form desktop-search-form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Produk ...">
                        <button class="btn" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>-->

                <!-- Actions -->
                <div class="header-actions d-flex align-items-center justify-content-end">

                    <!-- Mobile Search Toggle 
                    <button class="header-action-btn mobile-search-toggle d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
                        <i class="bi bi-search"></i>
                    </button>-->

                    <!-- Account -->
                    <div class="dropdown account-dropdown">
                        <button class="header-action-btn" data-bs-toggle="dropdown">
                            <i class="bi bi-person"></i>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-header">
                                <h6>Welcome to <span class="sitename">Zeps Media</span></h6>
                                <p class="mb-0">Grow Your Business</p>
                            </div>
                            <div class="dropdown-footer">
                                <a href="/admin" class="btn btn-primary w-100 mb-2">Masuk</a>
                                <a href="/admin" class="btn btn-outline-primary w-100">Daftar</a>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist 
            <a href="account.html" class="header-action-btn d-none d-md-block">
              <i class="bi bi-heart"></i>
              <span class="badge">0</span>
            </a> -->

                    <!-- Cart -->
                    <a href="keranjang.php" class="header-action-btn">
                        <i class="bi bi-cart3"></i>
                        <span class="badge">3</span>
                    </a>

                    <!-- Mobile Navigation Toggle -->
                    <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav">
        <div class="container-fluid container-xl">
            <div class="position-relative">
                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="index.php" class="">Beranda</a></li>
                        <li><a href="about.php">Tentang Kami</a></li>
                        <li><a href="shop.php">Layanan</a></li>
                        <li><a href="product-details.php">Product Details</a></li>
                        <li><a href="keranjang.php">Keranjang</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!-- Mobile Search Form 
    <div class="collapse" id="mobileSearch">
        <div class="container">
            <form class="search-form">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Produk ...">
                    <button class="btn" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
            </form>
        </div>-->
    </div>

</header>