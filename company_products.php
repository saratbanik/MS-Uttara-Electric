<?php
// ═══════════════════════════════════════════════════
//  M/S UTTARA ELECTRIC — index.php
// ═══════════════════════════════════════════════════

$site = [
      'name'             => 'M/S Uttara Electric',
      'tagline'          => 'All Kinds of Electric Goods Suppiler & Wholesaler. Nawabpur Road, Dhaka & Ramganj, Lakshmipur.',
      'email'            => 'uttaraelectric@gmail.com',
      'email2'            => 'msuttaraelectric@gmail.com',
      'email3'            => 'contact@msuttaraelectric.com.bd',
      'facebook'         => 'https://www.facebook.com/msuttaraelectric',
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


$products = [
      ['name' => 'Domestic Cable',            'file' => 'mep-product-cable.png'],
      ['name' => 'Power Cable',               'file' => 'mep-product-power-cable.png'],
      ['name' => 'Switch Elite Series',       'file' => 'mep-product-switch.png'],
      ['name' => 'Switch Golden Series',      'file' => 'mep-product-switch-2.png'],
      ['name' => 'Switch Piano Series',       'file' => 'mep-product-switch-3.png'],
      ['name' => 'Switch Combined Series',    'file' => 'mep-product-switch-4.png'],
      ['name' => 'Switch Premium Series',     'file' => 'mep-product-switch-5.png'],
      ['name' => 'Switch Tulip Series',       'file' => 'mep-product-switch-6.png'],
      ['name' => 'Switch Smart Series',       'file' => 'mep-product-switch-7.png'],
      ['name' => 'Switch Elegant Series',     'file' => 'mep-product-switch-8.png'],
      ['name' => 'DP Main Switch Conceal',    'file' => 'mep-product-dp-main-switch-no-bg.png'],
      ['name' => 'DP Main Switch',            'file' => 'mep-product-dp-main-switch-2-no-bg.png'],
      ['name' => 'KitKat Fuse',               'file' => 'mep-product-kitkatfuse-no-bg.png'],
      ['name' => 'LED Bulb 09 Watt',          'file' => 'mep-product-bulb-1-no-bg.png'],
      ['name' => 'LED Bulb 20 Watt',          'file' => 'mep-product-bulb-2-no-bg.png'],
      ['name' => 'LED Tube Light With Shade', 'file' => 'mep-product-bulb-3-no-bg.png'],
      ['name' => 'Panel Light',               'file' => 'mep-product-pannel-light-no-bg.png'],
      ['name' => 'Premium Celling Fan',       'file' => 'mep-product-celling-fan-1-no-bg.png'],
      ['name' => 'Crown Celling Fan',         'file' => 'mep-product-celling-fan-2-no-bg.png'],
      ['name' => 'Premium Gold Celling Fan',  'file' => 'mep-product-celling-fan-3-no-bg.png'],
      ['name' => 'Super Celling Fan',         'file' => 'mep-product-celling-fan-4-no-bg.png'],
      ['name' => 'Speed King Celling Fan',    'file' => 'mep-product-celling-fan-5-no-bg.png'],
      ['name' => 'Fresh Air Exhaust Fan',     'file' => 'mep-product-exhaust-fan-no-bg.png'],
      ['name' => 'PVC Pipe Size 1"',          'file' => 'mep-product-polymer-pipe-1-no-bg.png'],
      ['name' => 'PVC Pipe Black Size 1"',    'file' => 'mep-product-polymer-pipe-2-no-bg.png'],
      ['name' => '2 ping PVC Round Plug',     'file' => 'mep-product-plug-1-no-bg.png'],
      ['name' => '2 ping PVC Flat Plug',      'file' => 'mep-product-polymer-plug-2-no-bg.png'],
      ['name' => 'Iron Plug with indicator',  'file' => 'mep-product-plug-3-no-bg.png'],
      ['name' => 'Jar Type Pendent Holder',   'file' => 'mep-product-holder-1-no-bg.png'],
      ['name' => 'Winner Bracket Holder',     'file' => 'mep-product-holder-2-no-bg.png'],
      ['name' => 'Premium Batten Holder',     'file' => 'mep-product-holder-3-no-bg.png'],
      ['name' => 'Premium Batten Black Holder', 'file' => 'mep-product-holder-4-no-bg.png'],
      ['name' => 'Lili Hirace Porcelain Batten Holder',   'file' => 'mep-product-holder-5-no-bg.png'],
      ['name' => 'EGM Batten Holder',                     'file' => 'mep-product-holder-6-no-bg.png'],
      ['name' => 'Extension Universal Multi Socket',      'file' => 'mep-product-extension-no-bg.png'],
      ['name' => 'Pilot Tester',                          'file' => 'mep-product-tester-no-bg.png'],
      ['name' => 'Circuit Breaker Box',                   'file' => 'mep-product-circuit-breaker-no-bg.png'],
      ['name' => 'Premium Ceiling Rose ',                 'file' => 'mep-product-ceiling-rose-1-no-bg.png'],
      ['name' => 'EGM Ceiling Rose ',                     'file' => 'mep-product-ceiling-rose-2-no-bg.png'],
];

$main_products = [
      [
            'name'   => 'Switchgear & Safety',
            'img'    => 'images/switchgear-and-safety-1.png',
            'imgs'   => ['images/switchgear-and-safety-1.png', 'images/switchgear-and-safety-2.png', 'images/switchgear-and-safety-3.png', 'images/switchgear-and-safety-4.png'],
            'desc'   => 'MCBs, RCCBs, ACBs, contactors, isolators, distribution boards and complete switchgear protection devices.',
            'icon'   => 'bi-lightning-charge-fill',
      ],
      [
            'name'   => 'Wiring & Cables',
            'img'    => 'images/wiring-and-cables-1.png',
            'imgs'   => ['images/wiring-and-cables-1.png'],
            'desc'   => 'Premium-grade PVC insulated wires and cables for residential, commercial and industrial applications.',
            'icon'   => 'bi-plugin',
      ],
      [
            'name'   => 'PVC Conduits',
            'img'    => 'images/pvc-conduits-1.png',
            'imgs'   => ['images/pvc-conduits-1.png'],
            'desc'   => 'Full range of PVC conduit pipes, junction boxes, bends, fittings and electrical enclosures.',
            'icon'   => 'bi-slash-circle',
      ],
      [
            'name'   => 'Lighting & Fixtures',
            'img'    => 'images/lighting-and-fixtures-1.png',
            'imgs'   => ['images/lighting-and-fixtures-1.png', 'images/lighting-and-fixtures-2.png', 'images/lighting-and-fixtures-3.png', 'images/lighting-and-fixtures-4.png'],
            'desc'   => 'LED panels, downlights, tube lights, floodlights, street lights and all types of lighting fixtures.',
            'icon'   => 'bi-lightbulb-fill',
      ],
      [
            'name'   => 'Installation Materials',
            'img'    => 'images/installation-materials-1.png',
            'imgs'   => ['images/installation-materials-1.png', 'images/installation-materials-2.png'],
            'desc'   => 'Cable trays, trunking systems, DIN rails, terminal blocks and all electrical installation accessories.',
            'icon'   => 'bi-tools',
      ],
      [
            'name'   => 'Industrial Electrical Equipment',
            'img'    => 'images/industrial-grade-electrical-equipment-1.png',
            'imgs'   => ['images/industrial-grade-electrical-equipment-1.png'],
            'desc'   => 'Heavy-duty industrial air circuit breakers, motor starters, VFDs and motor control centres.',
            'icon'   => 'bi-gear-wide-connected',
      ],
      [
            'name'   => 'Fancy Lighting & Decorative Fixtures',
            'img'    => 'images/fancy-lighting-and-decorative-fixture-3.png',
            'imgs'   => ['images/fancy-lighting-and-decorative-fixture-1.png', 'images/fancy-lighting-and-decorative-fixture-2.png', 'images/fancy-lighting-and-decorative-fixture-3.png', 'images/fancy-lighting-and-decorative-fixture-4.png'],
            'desc'   => 'Designer chandeliers, pendant lights, Edison filament bulbs and decorative luxury lighting fixtures.',
            'icon'   => 'bi-stars',
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
      <title>M/S Uttara Electric. All Kinds of Electric Goods Wholesaler & Supplier. Nawabpur Road, Dhaka & Ramganj,
            Lakshmipur.</title>

      <link rel="canonical" href="https://msuttaraelectric.com.bd/company_products.php">

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
      <!-- Custom CSS -->
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="company_products.css">
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
                              <li class="nav-item"><a class="nav-link active" href="company_products.php">Products</a>
                              </li>
                              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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
                        <li><a href="company_products.php" class="oc-link active"><span class="oc-icon"><i
                                                class="bi bi-lightning-charge-fill"></i></span>Products<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>
                        <li><a href="about.php" class="oc-link"><span class="oc-icon"><i
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
    Products of the COMPANIES WE WORK WITH
══════════════════════════════════════ -->
      <section class="section-white company-products-section">
            <div class="container-fluid">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">MEP Group</div>
                        <h2 class="section-heading">Available <span>Products</span></h2>
                        <p class="section-sub">MEP offers over 2,000 products.</p>
                  </div>
                  <div class="row g-4">
                        <?php foreach ($products as $i => $b): ?>
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-3" data-aos="zoom-in"
                              data-aos-delay="<?= ($i % 4) * 80 ?>">
                              <div class="brand-card">
                                    <img src="images/<?= $b['file'] ?>" alt="<?= $b['name'] ?>" loading="lazy"
                                          class="brand-img">
                                    <h4 class="brand-name"><?= $b['name'] ?></h4>
                              </div>
                        </div>
                        <?php endforeach; ?>
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
                                          <a href="http://www.youtube.com/@msuttaraelectric" target="_blank"
                                                aria-label="Email">
                                                <i class="bi bi-youtube"></i>
                                          </a>
                                    </div>
                              </div>
                        </div>

                        <!-- Quick Links -->
                        <div class="col-lg-2 col-md-6 col-6 " style="padding-right:10px;padding-left:40px">
                              <h4 class="footer-heading">Quick Links</h4>
                              <ul class="footer-links">
                                    <li><a href="index.php#home"><i class="bi bi-chevron-right"></i> Home</a></li>
                                    <li><a href="index.php#products"><i class="bi bi-chevron-right"></i> Products</a>
                                    </li>
                                    <li><a href="index.php#services"><i class="bi bi-chevron-right"></i> Services</a>
                                    </li>
                                    <li><a href="index.php#brands"><i class="bi bi-chevron-right"></i> Brands</a></li>
                                    <li><a href="index.php#about"><i class="bi bi-chevron-right"></i> About Us</a></li>
                                    <li><a href="index.php#locations"><i class="bi bi-chevron-right"></i> Locations</a>
                                    </li>
                              </ul>
                        </div>

                        <!-- Products -->
                        <div class="col-lg-3 col-md-6 col-6" style="padding-left:10px">
                              <h4 class="footer-heading">Our Products</h4>
                              <ul class="footer-links">
                                    <?php foreach ($main_products as $p): ?>
                                    <li><a href="index.php#products"><i class="bi bi-chevron-right"></i>
                                                <?= $p['name'] ?></a></li>
                                    <?php endforeach; ?>
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