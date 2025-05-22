<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body class="category-page">

  <?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Layanan</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Beranda</a></li>
            <li class="current">Layanan</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">

            <!-- Product Categories Widget -->
            <div class="product-categories-widget widget-item">

              <h3 class="widget-title">Kategori</h3>

              <ul class="category-tree list-unstyled mb-0">
                <!-- Clothing Category -->
                <li class="category-item">
                  <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-clothing-subcategories" aria-expanded="false" aria-controls="categories-1-clothing-subcategories">
                    <a href="javascript:void(0)" class="category-link">Youtube</a>
                    <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                  </div>
                  <ul id="categories-1-clothing-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                    <li><a href="#" class="subcategory-link">Layanan Subscribers</a></li>
                    <li><a href="#" class="subcategory-link">Layanan Like</a></li>
                  </ul>
                </li>

                <!-- Electronics Category -->
                <li class="category-item">
                  <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-electronics-subcategories" aria-expanded="false" aria-controls="categories-1-electronics-subcategories">
                    <a href="javascript:void(0)" class="category-link">Facebook</a>
                    <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                  </div>
                  <ul id="categories-1-electronics-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                    <li><a href="#" class="subcategory-link">Layanan Views</a></li>
                    <li><a href="#" class="subcategory-link">Layanan Like</a></li>
                  </ul>
                </li>

                <!-- Home & Kitchen Category -->
                <li class="category-item">
                  <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-home-subcategories" aria-expanded="false" aria-controls="categories-1-home-subcategories">
                    <a href="javascript:void(0)" class="category-link">Instagram</a>
                    <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                  </div>
                  <ul id="categories-1-home-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                    <li><a href="#" class="subcategory-link">Layanan Share</a></li>
                    <li><a href="#" class="subcategory-link">Layanan Forward</a></li>
                  </ul>
                </li>

                <!-- Beauty & Personal Care Category -->
                <li class="category-item">
                  <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#categories-1-beauty-subcategories" aria-expanded="false" aria-controls="categories-1-beauty-subcategories">
                    <a href="javascript:void(0)" class="category-link">Pornhub</a>
                    <span class="category-toggle">
                      <i class="bi bi-chevron-down"></i>
                      <i class="bi bi-chevron-up"></i>
                    </span>
                  </div>
                  <ul id="categories-1-beauty-subcategories" class="subcategory-list list-unstyled collapse ps-3 mt-2">
                    <li><a href="#" class="subcategory-link">Akun</a></li>
                    <li><a href="#" class="subcategory-link">Premium</a></li>
                  </ul>
                </li>

            </div><!--/Product Categories Widget -->

            <!-- Pricing Range Widget -->
            <div class="pricing-range-widget widget-item">

              <h3 class="widget-title">Price Range</h3>

              <div class="price-range-container">
                <div class="current-range mb-3">
                  <span class="min-price">$0</span>
                  <span class="max-price float-end">$1000</span>
                </div>

                <div class="range-slider">
                  <div class="slider-track"></div>
                  <div class="slider-progress"></div>
                  <input type="range" class="min-range" min="0" max="1000" value="0" step="10">
                  <input type="range" class="max-range" min="0" max="1000" value="500" step="10">
                </div>

                <div class="price-inputs mt-3">
                  <div class="row g-2">
                    <div class="col-6">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control min-price-input" placeholder="Min" min="0" max="1000" value="0" step="10">
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group input-group-sm">
                        <span class="input-group-text">$</span>
                        <input type="number" class="form-control max-price-input" placeholder="Max" min="0" max="1000" value="500" step="10">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="filter-actions mt-3">
                  <button type="button" class="btn btn-sm btn-primary w-100">Apply Filter</button>
                </div>
              </div>

            </div><!--/Pricing Range Widget -->



            <!-- Brand Filter Widget -->
            <div class="brand-filter-widget widget-item">

              <h3 class="widget-title">Filter by Social Media</h3>

              <div class="brand-filter-content">
                <div class="brand-search">
                  <input type="text" class="form-control" placeholder="Search brands...">
                  <i class="bi bi-search"></i>
                </div>

                <div class="brand-list">
                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand1">
                      <label class="form-check-label" for="brand1">
                        Youtube
                        <span class="brand-count">(24)</span>
                      </label>
                    </div>
                  </div>

                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand2">
                      <label class="form-check-label" for="brand2">
                        Instagram
                        <span class="brand-count">(18)</span>
                      </label>
                    </div>
                  </div>

                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand3">
                      <label class="form-check-label" for="brand3">
                        Netflix
                        <span class="brand-count">(12)</span>
                      </label>
                    </div>
                  </div>

                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand4">
                      <label class="form-check-label" for="brand4">
                        Spotify
                        <span class="brand-count">(9)</span>
                      </label>
                    </div>
                  </div>

                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand5">
                      <label class="form-check-label" for="brand5">
                        Vidio
                        <span class="brand-count">(7)</span>
                      </label>
                    </div>
                  </div>

                  <div class="brand-item">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="brand6">
                      <label class="form-check-label" for="brand6">
                        Pornhub
                        <span class="brand-count">(6)</span>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="brand-actions">
                  <button class="btn btn-sm btn-outline-primary">Apply Filter</button>
                  <button class="btn btn-sm btn-link">Clear All</button>
                </div>
              </div>

            </div><!--/Brand Filter Widget -->

          </div>

        </div>

        <div class="col-lg-8">

          <!-- Category Header Section -->
          <section id="category-header" class="category-header section">

            <div class="container" data-aos="fade-up">

              <!-- Filter and Sort Options -->
              <div class="filter-container mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-3">
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="filter-item search-form">
                      <label for="productSearch" class="form-label">Search Products</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="productSearch" placeholder="Search for products..." aria-label="Search for products">
                        <button class="btn search-btn" type="button">
                          <i class="bi bi-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-2">
                    <div class="filter-item">
                      <label for="priceRange" class="form-label">Price Range</label>
                      <select class="form-select" id="priceRange">
                        <option selected="">All Prices</option>
                        <option>Under $25</option>
                        <option>$25 to $50</option>
                        <option>$50 to $100</option>
                        <option>$100 to $200</option>
                        <option>$200 &amp; Above</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-2">
                    <div class="filter-item">
                      <label for="sortBy" class="form-label">Sort By</label>
                      <select class="form-select" id="sortBy">
                        <option selected="">Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest Arrivals</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="filter-item">
                      <label class="form-label">View</label>
                      <div class="d-flex align-items-center">
                        <div class="view-options me-3">
                          <button type="button" class="btn view-btn active" data-view="grid" aria-label="Grid view">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                          </button>
                          <button type="button" class="btn view-btn" data-view="list" aria-label="List view">
                            <i class="bi bi-list-ul"></i>
                          </button>
                        </div>
                        <div class="items-per-page">
                          <select class="form-select" id="itemsPerPage" aria-label="Items per page">
                            <option value="12">12 per page</option>
                            <option value="24">24 per page</option>
                            <option value="48">48 per page</option>
                            <option value="96">96 per page</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row mt-3">
                  <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="active-filters">
                      <span class="active-filter-label">Active Filters:</span>
                      <div class="filter-tags">
                        <span class="filter-tag">
                          Followers <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                        <span class="filter-tag">
                          $50 to $100 <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                        <button class="clear-all-btn">Clear All</button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>

          </section><!-- /Category Header Section -->

          <!-- Category Product List Section -->
          <section id="category-product-list" class="category-product-list section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">
                <!-- Product 1 -->
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label">Terbaru</span>
                      <img src="assets/img/product/youtube.png" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Masukan Keranjang</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">10 Ribu Followers | Tidak ada Garansi</a></h3>
                        <div class="product-price">
                          <span>IDR.149.000</span>
                        </div>
                      </div>
                      <!-- <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star"></i>
                        </div>
                        <span class="rating-number">4.0</span>
                      </div>-->

                      <!--
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #3b82f6;"></span>
                        <span class="color-option" style="background-color: #22c55e;"></span>
                        <span class="color-option active" style="background-color: #f97316;"></span>
                      </div>
                      -->
                    </div>
                  </div>
                </div>
                <!-- End Product 1 -->

                <!-- Product 2 -->
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-sale">-30%</span>
                      <img src="assets/img/product/instagram.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Masukan Keranjang</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">1000 Like | Garansi 15 Hari</a></h3>
                        <div class="product-price">
                          <span class="original">IDR 199.000</span>
                          <span class="sale">IDR 100.000</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Product 2 -->

                <!-- Product 3 
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <img src="assets/img/product/product-9.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Cras ornare tristique elit</a></h3>
                        <div class="product-price">
                          <span>$89.50</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star"></i>
                          <i class="bi bi-star"></i>
                        </div>
                        <span class="rating-number">3.0</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option active" style="background-color: #ef4444;"></span>
                        <span class="color-option" style="background-color: #64748b;"></span>
                        <span class="color-option" style="background-color: #eab308;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 3 -->

                <!-- Product 4 
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <img src="assets/img/product/product-11.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Integer vitae libero ac risus</a></h3>
                        <div class="product-price">
                          <span>$119.00</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="rating-number">5.0</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #10b981;"></span>
                        <span class="color-option active" style="background-color: #8b5cf6;"></span>
                        <span class="color-option" style="background-color: #ec4899;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 4 -->

                <!-- Product 5 
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-sold">Sold Out</span>
                      <img src="assets/img/product/product-2.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn disabled">Sold Out</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Donec eu libero sit amet quam</a></h3>
                        <div class="product-price">
                          <span>$75.00</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                        </div>
                        <span class="rating-number">4.7</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option active" style="background-color: #4b5563;"></span>
                        <span class="color-option" style="background-color: #e11d48;"></span>
                        <span class="color-option" style="background-color: #4f46e5;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 5 -->

                <!-- Product 6 
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-hot">Hot</span>
                      <img src="assets/img/product/product-12.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Pellentesque habitant morbi tristique</a></h3>
                        <div class="product-price">
                          <span>$64.95</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                          <i class="bi bi-star"></i>
                        </div>
                        <span class="rating-number">3.6</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #eab308;"></span>
                        <span class="color-option" style="background-color: #14b8a6;"></span>
                        <span class="color-option active" style="background-color: #facc15;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 6 -->
              </div>

            </div>

          </section><!-- /Category Product List Section -->

          <!-- Category Pagination Section -->
          <section id="category-pagination" class="category-pagination section">

            <div class="container">
              <nav class="d-flex justify-content-center" aria-label="Page navigation">
                <ul>
                  <li>
                    <a href="#" aria-label="Previous page">
                      <i class="bi bi-arrow-left"></i>
                      <span class="d-none d-sm-inline">Previous</span>
                    </a>
                  </li>

                  <li><a href="#" class="active">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="ellipsis">...</li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#">10</a></li>

                  <li>
                    <a href="#" aria-label="Next page">
                      <span class="d-none d-sm-inline">Next</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>

          </section><!-- /Category Pagination Section -->

        </div>

      </div>
    </div>

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