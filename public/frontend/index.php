<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body class="index-page">

  <?php include 'header.php'; ?>

  <main class="main">

    <!-- Hero Section -->
    <section class="ecommerce-hero-1 hero section" id="hero">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 content-col" data-aos="fade-right" data-aos-delay="100">
            <div class="content">
              <span class="promo-badge">PROMO LAUNCHING 2025</span>
              <h1>Kembangkan <span>Social Media</span> Anda</h1>
              <p>Tingkatkan kredibilitas dan jangkauan akun Anda dengan followers asli, akun siap pakai, dan subscriber aktif untuk berbagai platform.</p>
              <div class="hero-cta">
                <a href="shop.php" class="btn btn-shop">Belanja Sekarang <i class="bi bi-arrow-right"></i></a>
                <a href="about.php" class="btn btn-collection">Tentang Kami</a>
              </div>
              <div class="hero-features">
                <div class="feature-item">
                  <i class="bi bi-truck"></i>
                  <span>Pengiriman Instan</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-shield-check"></i>
                  <span>Transaksi Aman</span>
                </div>
                <div class="feature-item">
                  <i class="bi bi-arrow-repeat"></i>
                  <span>24/7 Bantuan</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 image-col" data-aos="fade-left" data-aos-delay="200">
            <div class="hero-image">
              <img src="assets/img/product/navbarlogo.webp" alt="Fashion Product" class="main-product" loading="lazy">
              <div class="floating-product product-1" data-aos="fade-up" data-aos-delay="300">
                <img src="assets/img/product/tiktok.png" alt="Product 2">
                <div class="product-info">
                  <h4>Tiktok Followers</h4>
                  <span class="price">$10.99</span>
                </div>
              </div>
              <div class="floating-product product-2" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/product/instagram.webp" alt="Product 3">
                <div class="product-info">
                  <h4>Instagram Followers</h4>
                  <span class="price">IDR19.000</span>
                </div>
              </div>
              <!--<div class="discount-badge" data-aos="zoom-in" data-aos-delay="500">
                <span class="percent">30%</span>
                <span class="text">Discount</span>
              </div>
            -->
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- Info Cards Section -->
    <section id="info-cards" class="info-cards section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 justify-content-center">
          <!-- Info Card 1 -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-truck"></i>
              </div>
              <h3>Pengiriman Instan</h3>
              <p>Proses otomatis dan cepat, pesanan masuk dalam hitungan detik ke akun Anda tanpa perlu konfirmasi manual.</p>
            </div>
          </div><!-- End Info Card 1 -->

          <!-- Info Card 2 -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-piggy-bank"></i>
              </div>
              <h3>Garansi Uang Kembali</h3>
              <p>Kami memberikan jaminan uang kembali jika layanan gagal terkirim atau tidak sesuai dengan deskripsi.</p>
            </div>
          </div><!-- End Info Card 2 -->

          <!-- Info Card 3 -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-percent"></i>
              </div>
              <h3>Harga Terjangkau</h3>
              <p>Nikmati berbagai pilihan layanan dengan harga yang bersahabat tanpa mengurangi kualitas dan kecepatan.</p>
            </div>
          </div><!-- End Info Card 3 -->

          <!-- Info Card 4 -->
          <div class="col-12 col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="info-card text-center">
              <div class="icon-box">
                <i class="bi bi-headset"></i>
              </div>
              <h3>Bantuan 24 Jam</h3>
              <p>Tim support kami siap membantu kapan saja jika Anda mengalami kendala atau memiliki pertanyaan.</p>
            </div>
          </div><!-- End Info Card 4 -->
        </div>

      </div>

    </section><!-- /Info Cards Section -->


    <!-- Category Cards Section -->
    <section id="category-cards" class="category-cards section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="category-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "autoplay": {
                "delay": 5000,
                "disableOnInteraction": false
              },
              "grabCursor": true,
              "speed": 600,
              "slidesPerView": "auto",
              "spaceBetween": 20,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 15
                },
                "576": {
                  "slidesPerView": 3,
                  "spaceBetween": 15
                },
                "768": {
                  "slidesPerView": 4,
                  "spaceBetween": 20
                },
                "992": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 20
                }
              }
            }
          </script>

          <div class="swiper-wrapper">
            <!-- Category Card 1 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="100">
                <div class="category-image">
                  <img src="assets/img/product/instagram.webp" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Instagram</h3>
                <p class="category-count">4 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 2 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="200">
                <div class="category-image">
                  <img src="assets/img/product/youtube.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Youtube</h3>
                <p class="category-count">8 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 3 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="300">
                <div class="category-image">
                  <img src="assets/img/product/tiktok.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Tiktok</h3>
                <p class="category-count">4 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 4 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="400">
                <div class="category-image">
                  <img src="assets/img/product/spotify.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Spotify</h3>
                <p class="category-count">12 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 5 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="500">
                <div class="category-image">
                  <img src="assets/img/product/pornhub.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Porn Hub</h3>
                <p class="category-count">4 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 6 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="600">
                <div class="category-image">
                  <img src="assets/img/product/netflix.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Netflix</h3>
                <p class="category-count">2 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 7 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="700">
                <div class="category-image">
                  <img src="assets/img/product/vidio.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Vidio</h3>
                <p class="category-count">4 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>

            <!-- Category Card 8 -->
            <div class="swiper-slide">
              <div class="category-card" data-aos="fade-up" data-aos-delay="800">
                <div class="category-image">
                  <img src="assets/img/product/facebook.png" alt="Category" class="img-fluid">
                </div>
                <h3 class="category-title">Facebook</h3>
                <p class="category-count">4 Products</p>
                <a href="category.html" class="stretched-link"></a>
              </div>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>

      </div>

    </section><!-- /Category Cards Section -->

    <!-- Best Sellers Section -->
    <section id="best-sellers" class="best-sellers section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Best Sellers</h2>
        <p>Produk Yang Sering Dibeli</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <!-- Product 1 -->
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="product-card">
              <div class="product-image">
                <img src="assets/img/product/instagram.webp" class="img-fluid default-image" alt="Product" loading="lazy">
                <img src="assets/img/product/instagram.webp" class="img-fluid hover-image" alt="Product hover" loading="lazy">
                <div class="product-tags">
                  <span class="badge bg-accent">New</span>
                </div>
                <div class="product-actions">
                  <button class="btn-wishlist" type="button" aria-label="Add to wishlist">
                    <i class="bi bi-heart"></i>
                  </button>
                  <button class="btn-quickview" type="button" aria-label="Quick view">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <h3 class="product-title"><a href="product-details.html">Instagram</a></h3>
                <div class="product-price">
                  <span class="current-price">$89.99</span>
                </div>
                <!-- <div class="product-rating">
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-fill"></i>
                  <i class="bi bi-star-half"></i>
                  <span class="rating-count">(42)</span>
                </div>
              -->
                <button class="btn btn-add-to-cart">
                  <i class="bi bi-bag-plus me-2"></i>Masukan Keranjang
                </button>
              </div>
            </div>
          </div><!-- End Product 1 -->

          <!-- Product 2 -->
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
            <div class="product-card">
              <div class="product-image">
                <img src="assets/img/product/tiktok.png" class="img-fluid default-image" alt="Product" loading="lazy">
                <img src="assets/img/product/tiktok.png" class="img-fluid hover-image" alt="Product hover" loading="lazy">
                <div class="product-tags">
                  <span class="badge bg-sale">Sale</span>
                </div>
                <div class="product-actions">
                  <button class="btn-wishlist" type="button" aria-label="Add to wishlist">
                    <i class="bi bi-heart"></i>
                  </button>
                  <button class="btn-quickview" type="button" aria-label="Quick view">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <h3 class="product-title"><a href="product-details.html">Tiktok</a></h3>
                <div class="product-price">
                  <span class="current-price">$64.99</span>
                  <span class="original-price">$79.99</span>
                </div>

                <button class="btn btn-add-to-cart">
                  <i class="bi bi-bag-plus me-2"></i>Masukan Keranjang
                </button>
              </div>
            </div>
          </div><!-- End Product 2 -->

          <!-- Product 3 -->
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
            <div class="product-card">
              <div class="product-image">
                <img src="assets/img/product/netflix.png" class="img-fluid default-image" alt="Product" loading="lazy">
                <img src="assets/img/product/netflix.png" class="img-fluid hover-image" alt="Product hover" loading="lazy">
                <div class="product-actions">
                  <button class="btn-wishlist" type="button" aria-label="Add to wishlist">
                    <i class="bi bi-heart"></i>
                  </button>
                  <button class="btn-quickview" type="button" aria-label="Quick view">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <h3 class="product-title"><a href="product-details.html">Netflix</a></h3>
                <div class="product-price">
                  <span class="current-price">$119.00</span>
                </div>
                <button class="btn btn-add-to-cart">
                  <i class="bi bi-bag-plus me-2"></i>Masukan Keranjang
                </button>
              </div>
            </div>
          </div><!-- End Product 3 -->

          <!-- Product 4 -->
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
            <div class="product-card">
              <div class="product-image">
                <img src="assets/img/product/pornhub.png" class="img-fluid default-image" alt="Product" loading="lazy">
                <img src="assets/img/product/pornhub.png" class="img-fluid hover-image" alt="Product hover" loading="lazy">
                <div class="product-tags">
                  <span class="badge bg-sold-out">Sold Out</span>
                </div>
                <div class="product-actions">
                  <button class="btn-wishlist" type="button" aria-label="Add to wishlist">
                    <i class="bi bi-heart"></i>
                  </button>
                  <button class="btn-quickview" type="button" aria-label="Quick view">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="product-info">
                <h3 class="product-title"><a href="product-details.html">Ut labore et dolore magna aliqua</a></h3>
                <div class="product-price">
                  <span class="current-price">IDR 75.000</span>
                </div>
                <button class="btn btn-add-to-cart btn-disabled" disabled="">
                  <i class="bi bi-bag-plus me-2"></i>Sold Out
                </button>
              </div>
            </div>
          </div><!-- End Product 4 -->
        </div>
      </div>

      <!-- Section Lihat Semua Produk -->
      <section id="product-list" class="product-list section">
        <div class="container isotope-layout" data-aos="fade-up" data-aos-delay="100" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <div class="row">
            <div class="col-12">
              <div class="product-filters isotope-filters mb-5 d-flex justify-content-center" data-aos="fade-up">
                <div class="text-center mt-5" data-aos="fade-up">
                  <a href="#" class="view-all-btn">Lihat Semua Produk <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> <!-- End Section Lihat Semua Produk -->
    </section><!-- /Best Sellers Section -->

  </main>

  <?php include 'footer.php'; ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/drift-zoom/Drift.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>