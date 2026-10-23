<?php
// ═══════════════════════════════════════════════════
//  M/S Uttara Electric — index.php
// ═══════════════════════════════════════════════════

$site = [
      'name'             => 'M/S Uttara Electric',
      'tagline'          => 'All Kinds of Electric Goods Suppiler & Wholesaler. Nawabpur Road, Dhaka & Ramganj, Lakshmipur.',
      'email'            => 'uttaraelectric@gmail.com',
      'email2'            => 'msuttaraelectric@gmail.com',
      'email3'            => 'contact@msuttaraelectric.com.bd',
      'facebook'         => 'https://www.facebook.com/msuttaraelectric',
      'instagram'        => 'https://www.instagram.com/msuttaraelectric',
      'whatsapp'         => '8801727778767',
      'whatsapp_display' => '+88 1727-778767',
      'main_phone'       => '+880 1740-861240',
      'established'      => '1990',
      'year'             => date('Y'),
];

$branches = [
      [
            'city'    => 'Dhaka',
            'label'   => 'Nawabpur Road Branch',
            'address' => 'Shop No. 320 (Ground Floor), Kaptan Bazar Complex (Building No. 1), Nawabpur Road, Dhaka-1100',
            'phones'  => ['+880 2226-637925', '+880 1740-861240', '+880 1727-778767'],
            'map'     => 'https://maps.app.goo.gl/Au3PG7SJGJJuq5TA9',
            'icon'    => 'bi-building',
      ],
      [
            'city'    => 'Lakshmipur',
            'label'   => 'Ramganj Branch',
            'address' => 'Sonapur Bazar, Ramganj, Lakshmipur-3720',
            'phones'  => ['+880 1712-276394', '+880 1717-054426', '+880 1757-750105'],
            'map'     => 'https://maps.app.goo.gl/kNBHnJ13B9Ep5riNA',
            'icon'    => 'bi-shop',
      ],
];



?>
<!DOCTYPE html>
<html lang="en">

<head>
      <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
      <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
      <link rel="shortcut icon" href="/favicon.ico" />
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
      <meta name="apple-mobile-web-app-title" content="MyWebSite" />
      <link rel="manifest" href="/site.webmanifest" />

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="color-scheme" content="light dark">
      <meta name="description"
            content="M/S Uttara Electric. All Kinds of Electric Goods Wholesaler & Supplier. Nawabpur Road, Dhaka & Ramganj, Lakshmipur.">
      <title> M/S Uttara Electric. All Kinds of Electric Goods Wholesaler & Supplier. Nawabpur Road, Dhaka & Ramganj,
            Lakshmipur.</title>

      <link rel="canonical" href="https://msuttaraelectric.com.bd/about.php">

      <!-- Bootstrap 5 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Bootstrap Icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <!-- Swiper -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
      <!-- AOS -->
      <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&display=swap"
            rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
            rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="style.css">
</head>

<body>

      <!-- ══════════════════════════════════════
     FLOATING WHATSAPP BUTTON
══════════════════════════════════════ -->
      <a href="https://wa.me/<?= $site['whatsapp'] ?>?text=Hello%2C%20I%20am%20interested%20in%20your%20electrical%20products."
            class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
            <i class="bi bi-whatsapp"></i>
      </a>

      <!-- ══════════════════════════════════════
     TOP BAR
══════════════════════════════════════ -->
      <div class="topbar d-none d-md-block">
            <div class="container">
                  <div class="row align-items-center">
                        <div class="col-md-8">
                              <div class="topbar-left">
                                    <a href="tel:+8801740861240" class="topbar-item">
                                          <i class="bi bi-telephone-fill"></i>
                                          <?= $site['main_phone'] ?>
                                    </a>
                                    <a href="mailto:<?= $site['email'] ?>" class="topbar-item">
                                          <i class="bi bi-envelope-fill"></i>
                                          <?= $site['email2'] ?>
                                    </a>
                                    <span class="topbar-item">
                                          <i class="bi bi-geo-alt-fill"></i>
                                          Nawabpur Road, Dhaka &amp; Ramganj, Lakshmipur
                                    </span>
                              </div>
                        </div>
                        <div class="col-md-4 text-end">
                              <div class="topbar-right">
                                    <a href="<?= $site['facebook'] ?>" target="_blank" rel="noopener"
                                          class="topbar-social" aria-label="Facebook">
                                          <i class="bi bi-facebook"></i>
                                    </a>
                                    <a href="<?= $site['instagram'] ?>" target="_blank" rel="noopener"
                                          class="topbar-social" aria-label="Instagram">
                                          <i class="bi bi-instagram"></i>
                                    </a>
                                    <a href="http://www.youtube.com/@msuttaraelectric" target="_blank" rel="noopener"
                                          class="topbar-social" aria-label="Youtube">
                                          <i class="bi bi-youtube"></i>
                                    </a>
                                    <span class="topbar-divider">|</span>
                                    <span class="topbar-badge">Since <?= $site['established'] ?></span>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

      <!-- ══════════════════════════════════════
     NAVBAR
══════════════════════════════════════ -->
      <nav class="navbar navbar-expand-lg sticky-top" id="mainNavbar">
            <div class="container">

                  <!-- MOBILE: Hamburger LEFT -->
                  <button class="navbar-toggler d-lg-none me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Open navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"> </span>
                  </button>

                  <!-- LOGO: right on mobile via ms-auto, normal on desktop -->
                  <a class="navbar-brand  ms-lg-0 me-lg-auto" href="#home">
                        <img src="images/ms-ue-light-mode-logo.png" alt="UE Logo" class="theme-logo brand-logo"
                              data-light-src="images/ms-ue-light-mode-logo.png"
                              data-dark-src="images/ms-ue-dark-mode-logo.png">
                        <div class="logoName">
                              <h1>M/S UTTARA ELECTRIC</h1>
                              <p>All Kinds of Electric Goods Wholesaler & Supplier</p>
                        </div>
                  </a>

                  <!-- DESKTOP: Inline nav links -->
                  <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
                        <ul class="navbar-nav ms-auto align-items-center">
                              <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                              <li class="nav-item"><a class="nav-link" href="company_products.php">Products</a></li>
                              <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                              <li class="nav-item theme-switch-item">
                                    <div class="theme-switch-wrap">
                                          <label class="switch">
                                                <input type="checkbox" class="theme-toggle"
                                                      aria-label="Toggle dark mode" title="Toggle dark mode">
                                                <span class="slider"></span>
                                          </label>
                                    </div>
                              </li>
                              <li class="nav-item ms-lg-3">
                                    <a class="nav-cta-btn"
                                          href="https://wa.me/<?= $site['whatsapp'] ?>?text=Hello%2C%20I%20need%20assistance."
                                          target="_blank" rel="noopener">
                                          <i class="bi bi-whatsapp me-1"></i> WhatsApp Us
                                    </a>
                              </li>
                        </ul>
                  </div>
            </div>
      </nav>

      <!-- MOBILE OFFCANVAS MENU (slides from left) -->
      <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header">
                  <a href="#home" class="offcanvas-logo" data-bs-dismiss="offcanvas">
                        <img src="images/ms-ue-light-mode-logo.png" alt="UE Logo"
                              class="theme-logo offcanvas-brand-logo" data-light-src="images/ms-ue-light-mode-logo.png"
                              data-dark-src="images/ms-ue-dark-mode-logo.png">
                        <div class="offcanvas-logoName">
                              <h1>M/S UTTARA ELECTRIC</h1>
                              <p>All Kinds of Electric Goods Wholesaler & Supplier</p>
                        </div>
                  </a>
                  <button type="button" class="oc-close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                  </button>
            </div>
            <div class="oc-divider"></div>
            <div class="offcanvas-body">
                  <ul class="oc-nav">
                        <div>
                              <div class="theme-switch-wrap">
                                    <span class="theme-toggle-text" data-light-text="Switch to dark mode"
                                          data-dark-text="Switch to light mode">Switch to dark mode</span>
                                    <label class="switch">
                                          <input type="checkbox" class="theme-toggle" aria-label="Toggle dark mode"
                                                title="Toggle dark mode">
                                          <span class="slider"></span>
                                    </label>
                              </div>
                        </div>
                        <li><a href="index.php" class="oc-link "><span class="oc-icon"><i
                                                class="bi bi-house-fill"></i></span>Home<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>
                        <li><a href="company_products.php" class="oc-link"><span class="oc-icon"><i
                                                class="bi bi-lightning-charge-fill"></i></span>Products<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>
                        <li><a href="about.php" class="oc-link active"><span class="oc-icon"><i
                                                class="bi bi-info-circle-fill"></i></span>About Us<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>

                  </ul>
                  <div class="oc-divider"></div>
                  <div class="oc-cta">
                        <a href="tel:<?= preg_replace('/\s+/', '', $site['main_phone']) ?>" class="oc-call-btn">
                              <i class="bi bi-telephone-fill me-2"></i><?= $site['main_phone'] ?>
                        </a>
                        <div class=" d-flex justify-content-around">

                              <a href="https://wa.me/<?= $site['whatsapp'] ?>?text=Hello%2C%20I%20need%20assistance."
                                    target="_blank" rel="noopener" class="oc-whatsapp-btn">
                                    <i class="bi bi-whatsapp me-2"></i>
                              </a>
                              <a href="<?= $site['facebook'] ?>" target="_blank" rel="noopener" class="oc-facebook-btn">
                                    <i class="bi bi-facebook"></i>
                              </a>
                        </div>
                  </div>
                  <div class="oc-divider"></div>

            </div>
      </div>

      <!-- ══════════════════════════════════════
     ABOUT
══════════════════════════════════════ -->
      <section id="about" class="section-about">
            <div class="container">
                  <div class="row align-items-center g-5">
                        <div class="col-lg-5" data-aos="fade-right">
                              <div class="about-logo-box">
                                    <img src="images/ue-logo-with-name.png" alt="UE Logo"
                                          class="oc-logo-icon theme-logo about-logo-img"
                                          data-light-src="images/ue-logo-with-name.png"
                                          data-dark-src="images/ue-logo-with-name-white-with-background-removed.png">
                                    <div class="about-est-badge">
                                          <div class="est-year"><?= $site['established'] ?></div>
                                          <div class="est-label">Est. Year</div>
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-7" data-aos="fade-left">
                              <div class="section-tag">About Us</div>
                              <h2 class="section-heading">Powering Bangladesh<br>Since
                                    <span><?= $site['established'] ?></span>
                              </h2>
                              <p class="about-text">
                                    M/S Uttara Electric has been a trusted name in electrical goods wholesale and supply
                                    for over 35 years.
                                    With two branches — one in Nawabpur Road, Dhaka and another in Ramganj, Lakshmipur —
                                    we serve contractors,
                                    builders, electricians and homeowners across Bangladesh.
                              </p>
                              <p class="about-text">
                                    We stock a comprehensive range of products from the world's leading electrical
                                    brands including ABB, Siemens,
                                    Schneider Electric, Legrand, Philips and many more. Whether you need a single switch
                                    or a complete electrical
                                    fit-out, we have it all under one roof.
                              </p>
                              <div class="row g-3 mt-1">
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>35+ Years in Business</span>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>Certified & Branded Products</span>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>Wholesale & Retail Available</span>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>Licensed Electricians</span>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>Thousands of Happy Customers</span>
                                          </div>
                                    </div>
                                    <div class="col-sm-6">
                                          <div class="about-feat">
                                                <i class="bi bi-check-circle-fill"></i>
                                                <span>2 Convenient Locations</span>
                                          </div>
                                    </div>
                              </div>
                              <div class="mt-4 d-flex flex-wrap gap-3 about-buttons">
                                    <a href="<?= $site['facebook'] ?>" target="_blank" rel="noopener"
                                          class="btn btn-outline-orange">
                                          <i class="bi bi-facebook me-2"></i>Follow on Facebook
                                    </a>
                                    <a href="#locations" class="btn btn-outline-orange">
                                          <i class="bi bi-geo-alt me-2"></i>Find Our Shops
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>



      <!-- ══════════════════════════════════════
     LOCATIONS
══════════════════════════════════════ -->
      <section id="locations" class="section-locations">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">Find Us</div>
                        <h2 class="section-heading">Our <span>Shop Locations</span></h2>
                        <p class="section-sub">Visit us at either of our two branches — we're here to help you find
                              exactly what you need.</p>
                  </div>
                  <div class="row g-4 justify-content-center">
                        <?php foreach ($branches as $i => $b): ?>
                              <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?= $i * 120 ?>">
                                    <div class="location-card">
                                          <div class="location-header">
                                                <div class="location-icon">
                                                      <i class="bi <?= $b['icon'] ?>"></i>
                                                </div>
                                                <div>
                                                      <div class="location-city"><?= $b['city'] ?></div>
                                                      <h3 class="location-name"><?= $b['label'] ?></h3>
                                                </div>
                                          </div>
                                          <div class="location-body">
                                                <div class="location-info">
                                                      <i class="bi bi-geo-alt-fill"></i>
                                                      <span><?= $b['address'] ?></span>
                                                </div>
                                                <div class="location-phones">
                                                      <?php foreach ($b['phones'] as $phone): ?>
                                                            <a href="tel:<?= preg_replace('/\s+/', '', $phone) ?>"
                                                                  class="location-phone">
                                                                  <i class="bi bi-telephone-fill"></i>
                                                                  <?= $phone ?>
                                                            </a>
                                                      <?php endforeach; ?>
                                                </div>
                                          </div>
                                          <div class="location-footer">
                                                <a href="<?= $b['map'] ?>" target="_blank" rel="noopener" class="w-100">
                                                      <i class="bi bi-geo-alt-fill me-2"></i>Get Directions on Google Maps
                                                </a>
                                          </div>
                                    </div>
                              </div>
                        <?php endforeach; ?>
                  </div>

                  <!-- Quick contact strip -->
                  <div class="quick-contact-strip mt-5" data-aos="fade-up">
                        <div class="row align-items-center g-3">
                              <div class="col-md-4 text-center">
                                    <a href="tel:<?= preg_replace('/\s+/', '', $site['main_phone']) ?>"
                                          class="quick-contact-item">
                                          <i class="bi bi-telephone-fill"></i>
                                          <div>
                                                <small>Call Us</small>
                                                <strong><?= $site['main_phone'] ?></strong>
                                          </div>
                                    </a>
                              </div>
                              <div class="col-md-4 text-center">
                                    <a href="https://wa.me/<?= $site['whatsapp'] ?>" target="_blank" rel="noopener"
                                          class="quick-contact-item">
                                          <i class="bi bi-whatsapp"></i>
                                          <div>
                                                <small>WhatsApp</small>
                                                <strong><?= $site['whatsapp_display'] ?></strong>
                                          </div>
                                    </a>
                              </div>
                              <div class="col-md-4 text-center">
                                    <a href="mailto:<?= $site['email'] ?>" class="quick-contact-item">
                                          <i class="bi bi-envelope-fill"></i>
                                          <div>
                                                <small>Email Us</small>
                                                <strong><?= $site['email2'] ?></strong>
                                          </div>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>


      <!-- ══════════════════════════════════════
     FOOTER
══════════════════════════════════════ -->
      <footer class="site-footer">
            <div class="container">
                  <div class="row g-5">
                        <!-- Brand col -->
                        <div class="col-lg-4 col-md-6">
                              <div class="footer-brand">
                                    <img src="images/ms-ue-dark-mode-logo.png" alt="M/S Uttara Electric"
                                          class="footer-logo">
                                    <div class="footer-brand-name">M/S UTTARA ELECTRIC</div>
                                    <p class="footer-brand-sub">All Kinds of Electric Goods Wholesaler & Supplier</p>
                                    <p class="footer-about">Established in 1990, we are one of Bangladesh's most trusted
                                          electrical goods wholesalers, serving contractors and homeowners across Dhaka
                                          and Lakshmipur.</p>
                                    <div class="footer-socials">

                                          <a href="https://wa.me/<?= $site['whatsapp'] ?>" target="_blank"
                                                rel="noopener" aria-label="WhatsApp">
                                                <i class="bi bi-whatsapp"></i>
                                          </a>
                                          <a href="mailto:<?= $site['email2'] ?>" aria-label="Email">
                                                <i class="bi bi-envelope-fill"></i>
                                          </a>
                                          <a href="<?= $site['facebook'] ?>" target="_blank" rel="noopener"
                                                aria-label="Facebook">
                                                <i class="bi bi-facebook"></i>
                                          </a>
                                          <a href="http://www.youtube.com/@msuttaraelectric" aria-label="Email"
                                                target="_blank">
                                                <i class="bi bi-youtube"></i>
                                          </a>
                                          <a href="<?= $site['instagram'] ?>" target="_blank" rel="noopener"
                                                aria-label="Instagram">
                                                <i class="bi bi-instagram"></i>
                                          </a>
                                    </div>
                              </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-lg-2 col-md-6 col-6 " style="padding-right:10px;padding-left:40px">
                              <h4 class="footer-heading">Quick Links</h4>
                              <ul class="footer-links">
                                    <li><a href="#home"><i class="bi bi-chevron-right"></i> Home</a></li>
                                    <li><a href="#products"><i class="bi bi-chevron-right"></i> Products</a></li>
                                    <li><a href="#services"><i class="bi bi-chevron-right"></i> Services</a></li>
                                    <li><a href="#brands"><i class="bi bi-chevron-right"></i> Brands</a></li>
                                    <li><a href="#about"><i class="bi bi-chevron-right"></i> About Us</a></li>
                                    <li><a href="#locations"><i class="bi bi-chevron-right"></i> Locations</a></li>
                              </ul>
                        </div>


                        <!-- Contact -->
                        <div class="col-lg-3 col-md-6">
                              <h4 class="footer-heading">Contact Us</h4>
                              <?php foreach ($branches as $b): ?>
                                    <div class="footer-branch">
                                          <strong><?= $b['label'] ?></strong>
                                          <p><?= $b['address'] ?></p>
                                          <?php foreach ($b['phones'] as $ph): ?>
                                                <a href="tel:<?= preg_replace('/\s+/', '', $ph) ?>"><i
                                                            class="bi bi-telephone-fill me-1"></i><?= $ph ?></a><br>
                                          <?php endforeach; ?>
                                    </div>
                              <?php endforeach; ?>
                              <div class="mt-3">
                                    <a href="mailto:<?= $site['email'] ?>" class="footer-email">
                                          <i class="bi bi-envelope-fill me-1"></i><?= $site['email'] ?>
                                    </a><br>
                                    <a href="mailto:<?= $site['email2'] ?>" class="footer-email">
                                          <i class="bi bi-envelope-fill me-1"></i>msuttaraelectric@gmail.com
                                    </a><br>
                                    <a href="mailto:<?= $site['email3'] ?>" class="footer-email">
                                          <i class="bi bi-envelope-fill me-1"></i>contact@msuttaraelectric.com.bd
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                  <div class="container">
                        <p class="footer-copy">
                              © <?= $site['year'] ?> <?= $site['name'] ?>. All Rights Reserved.<br>
                              <span>Developed by <a href="https://www.linkedin.com/in/saratbanik" target="_blank"
                                          rel="noopener">SARAT BANIK</a></span>
                        </p>
                  </div>
            </div>
      </footer>

      <div id="smartScrollWrapper" class="smart-scroll-wrapper">
            <svg class="progress-ring" viewBox="0 0 56 56">
                  <circle class="progress-ring__track" cx="28" cy="28" r="24" />
                  <circle class="progress-ring__circle" cx="28" cy="28" r="24" />
            </svg>
            <button id="smartScrollBtn" class="smart-scroll-btn" aria-label="Scroll">
                  <i class="bi bi-arrow-down"></i>
            </button>
      </div>

      <!-- ══════ Scripts ══════ -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
      <script src="script.js"></script>
</body>

</html>