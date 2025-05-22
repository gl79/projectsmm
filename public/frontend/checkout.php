<!DOCTYPE html>
<html lang="en">

<?php include 'head.php'; ?>

<body class="checkout-page">

  <?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Checkout</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li class="current">Checkout</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Checkout Section -->
    <section id="checkout" class="checkout section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-7">
            <!-- Checkout Form -->
            <div class="checkout-container" data-aos="fade-up">
              <form class="checkout-form">
                <!-- Customer Information -->
                <div class="checkout-section" id="customer-info">
                  <div class="section-header">
                    <div class="section-number">1</div>
                    <h3>Informasi Customer</h3>
                  </div>
                  <div class="section-content">
                    <div class="row">
                      <div class="col-md-6 form-group">
                        <label for="first-name">Nama Depan</label>
                        <input type="text" name="first-name" class="form-control" id="first-name" placeholder="Your First Name" required="">
                      </div>
                      <div class="col-md-6 form-group">
                        <label for="last-name">Nama Belakang</label>
                        <input type="text" name="last-name" class="form-control" id="last-name" placeholder="Your Last Name" required="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email">Alamat Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                    </div>
                    <div class="form-group">
                      <label for="phone">Nomor Handphone</label>
                      <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required="">
                    </div>
                  </div>
                </div>

                <!-- Payment Method -->
                <div class="checkout-section" id="payment-method">
                  <div class="section-header">
                    <div class="section-number">3</div>
                    <h3>Metode Pembayaran</h3>
                  </div>
                  <div class="section-content">
                    <div class="payment-options">
                      <div class="payment-option active">
                        <input type="radio" name="payment-method" id="credit-card" checked="">
                        <label for="credit-card">
                          <span class="payment-icon"><i class="bi bi-credit-card-2-front"></i></span>
                          <span class="payment-label">Credit / Debit Card</span>
                        </label>
                      </div>
                      <div class="payment-option">
                        <input type="radio" name="payment-method" id="paypal">
                        <label for="paypal">
                          <span class="payment-icon"><i class="bi bi-paypal"></i></span>
                          <span class="payment-label">PayPal</span>
                        </label>
                      </div>
                      <div class="payment-option">
                        <input type="radio" name="payment-method" id="apple-pay">
                        <label for="apple-pay">
                          <span class="payment-icon"><i class="bi bi-apple"></i></span>
                          <span class="payment-label">Apple Pay</span>
                        </label>
                      </div>
                    </div>

                    <div class="payment-details" id="credit-card-details">
                      <div class="form-group">
                        <label for="card-number">Card Number</label>
                        <div class="card-number-wrapper">
                          <input type="text" class="form-control" name="card-number" id="card-number" placeholder="1234 5678 9012 3456" required="">
                          <div class="card-icons">
                            <i class="bi bi-credit-card-2-front"></i>
                            <i class="bi bi-credit-card"></i>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="expiry">Expiration Date</label>
                          <input type="text" class="form-control" name="expiry" id="expiry" placeholder="MM/YY" required="">
                        </div>
                        <div class="col-md-6 form-group">
                          <label for="cvv">Security Code (CVV)</label>
                          <div class="cvv-wrapper">
                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="123" required="">
                            <span class="cvv-hint" data-bs-toggle="tooltip" data-bs-placement="top" title="3-digit code on the back of your card">
                              <i class="bi bi-question-circle"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="card-name">Name on Card</label>
                        <input type="text" class="form-control" name="card-name" id="card-name" placeholder="John Doe" required="">
                      </div>
                    </div>

                    <div class="payment-details d-none" id="paypal-details">
                      <p class="payment-info">You will be redirected to PayPal to complete your purchase securely.</p>
                    </div>

                    <div class="payment-details d-none" id="apple-pay-details">
                      <p class="payment-info">You will be prompted to authorize payment with Apple Pay.</p>
                    </div>
                  </div>
                </div>

                <!-- Order Review -->
                <div class="checkout-section" id="order-review">
                  <div class="section-header">
                    <div class="section-number">4</div>
                    <h3>Buat Pesanan</h3>
                  </div>
                  <div class="section-content">
                    <div class="form-check terms-check">
                      <input class="form-check-input" type="checkbox" id="terms" name="terms" required="">
                      <label class="form-check-label" for="terms">
                        Saya Menyetujui <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Syarat dan Ketentuan</a> and <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a>
                      </label>
                    </div>
                    <div class="success-message d-none">Your order has been placed successfully! Thank you for your purchase.</div>
                    <div class="place-order-container">
                      <button type="submit" class="btn btn-primary place-order-btn">
                        <span class="btn-text">Buat Pesanan</span>
                        <span class="btn-price">$240.96</span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-lg-5">
            <!-- Order Summary -->
            <div class="order-summary" data-aos="fade-left" data-aos-delay="200">
              <div class="order-summary-header">
                <h3>Ringkasan Pesanan</h3>
                <span class="item-count">2 Items</span>
              </div>

              <div class="order-summary-content">
                <div class="order-items">
                  <div class="order-item">
                    <div class="order-item-image">
                      <img src="assets/img/product/instagram.webp" alt="Product" class="img-fluid">
                    </div>
                    <div class="order-item-details">
                      <h4>Instagram</h4>
                      <p class="order-item-variant">Garansi: 15 Hari</p>
                      <div class="order-item-price">
                        <span class="quantity">2 Followers ×</span>
                        <span class="price">$89.99</span>
                      </div>
                    </div>
                  </div>

                  <div class="order-item">
                    <div class="order-item-image">
                      <img src="assets/img/product/pornhub.png" alt="Product" class="img-fluid">
                    </div>
                    <div class="order-item-details">
                      <h4>Pornhub</h4>
                      <p class="order-item-variant">Garansi: 30 Hari</p>
                      <div class="order-item-price">
                        <span class="quantity">3 ×</span>
                        <span class="price">$59.99</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="order-totals">
                  <div class="order-subtotal d-flex justify-content-between">
                    <span>Subtotal</span>
                    <span>$209.97</span>
                  </div>
                  <div class="order-shipping d-flex justify-content-between">
                    <span>Biaya Layanan</span>
                    <span>$9.99</span>
                  </div>
                  <div class="order-tax d-flex justify-content-between">
                    <span>Pajak</span>
                    <span>$21.00</span>
                  </div>
                  <div class="order-total d-flex justify-content-between">
                    <span>Total</span>
                    <span>$240.96</span>
                  </div>
                </div>

                <div class="secure-checkout">
                  <div class="secure-checkout-header">
                    <i class="bi bi-shield-lock"></i>
                    <span>Secure Checkout</span>
                  </div>
                  <div class="payment-icons">
                    <i class="bi bi-credit-card-2-front"></i>
                    <i class="bi bi-credit-card"></i>
                    <i class="bi bi-paypal"></i>
                    <i class="bi bi-apple"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Terms and Privacy Modals -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Checkout Section -->

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