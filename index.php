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

$products = [
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

$services = [
      [
            'name'  => 'Conduit Wiring',
            'img'   => 'images/conduit-wiring-1.jpg',
            'desc'  => 'Professional surface and concealed conduit wiring installations for homes, offices and industrial facilities.',
      ],
      [
            'name'  => 'Electrical Maintenance',
            'img'   => 'images/electrical-maintenance-1.jpg',
            'desc'  => 'Scheduled and emergency electrical maintenance to keep your systems running safely and efficiently.',
      ],
      [
            'name'  => 'Circuiting',
            'img'   => 'images/circuiting-1.webp',
            'desc'  => 'Expert circuit design, load balancing, installation and testing for all types of electrical systems.',
      ],
      [
            'name'  => 'Main Panel Board Setup',
            'img'   => 'images/main-panel-board-setup-1.jpg',
            'desc'  => 'Professional main distribution board installation, bus-bar wiring and full commissioning services.',
      ],
      [
            'name'  => 'Data & Networking Cabling',
            'img'   => 'images/conduit-wiring-3.jpg',
            'desc'  => 'Structured cabling, LAN/WAN network installation and complete data infrastructure setup and testing.',
      ],
      [
            'name'  => 'Electrical Contractor',
            'img'   => 'images/electrical-contractor-1.webp',
            'desc'  => 'Full-scale turnkey electrical contracting for residential, commercial and industrial construction projects.',
      ],
      [
            'name'  => 'Licensed Electrician',
            'img'   => 'images/licensed-elctrician-1.webp',
            'desc'  => 'Government-certified licensed electricians available for all electrical work, inspections and compliance.',
      ],
];

$brands = [
      ['name' => 'MEP Group',           'file' => 'mep-group-logo.png'],
      ['name' => 'ABB',                 'file' => 'abb-logo.png'],
      ['name' => 'Siemens',             'file' => 'siemens-logo.png'],
      ['name' => 'Chint',               'file' => 'chint-logo.png'],
      ['name' => 'Legrand',             'file' => 'legrand-logo.png'],
      ['name' => 'Super Star Group',    'file' => 'super-star-group-logo.png'],
      ['name' => 'Walton',              'file' => 'walton-logo.png'],
      ['name' => 'BRB',                 'file' => 'brb-logo.png'],
      ['name' => 'Philips',             'file' => 'philips-logo.png'],
      ['name' => 'Transtec',            'file' => 'transtec-logo.png'],
      ['name' => 'Schneider Electric',  'file' => 'schneider-electric-logo.png'],
      ['name' => 'Mitsubishi Electric', 'file' => 'mitsubishi-electric-logo.png'],
      ['name' => 'Hager',               'file' => 'hager-logo.png'],
      ['name' => 'Megaman',             'file' => 'megaman-logo.png'],
      ['name' => 'Energypac',           'file' => 'energypac-electronics-ltd-logo.png'],
      ['name' => 'Energy+',             'file' => 'energyplus-logo.png'],
      ['name' => 'Havells',             'file' => 'havells-logo.png'],
      ['name' => 'Prodip',              'file' => 'prodip-logo.png'],
      ['name' => 'Osaka',               'file' => 'osaka-logo.png'],
];

$companies = [
      ['name' => 'Thermax Group',  'file' => 'thermax-group-logo.png'],
      ['name' => 'Anwar Landmark', 'file' => 'anwar-landmark-logo.png'],
      ['name' => 'Sheltech',       'file' => 'sheltech-logo.png'],
];

$hero_slides = [
      [
            'bg'    => 'images/wiring-and-cables-1.png',
            'badge' => 'Established Since 1990',
            'h1'    => 'Trusted Electrical Goods<br><span>Wholesaler & Supplier</span>',
            'sub'   => 'Your one-stop source for switchgear, cables, lighting and all electrical products — serving Dhaka & Lakshmipur.',
            'btn1'  => ['Explore Products', '#products'],
            'btn2'  => ['Our Services',     '#services'],
      ],
      [
            'bg'    => 'images/lighting-and-fixtures-2.png',
            'badge' => 'Premium Lighting Solutions',
            'h1'    => 'LED Lights & Fancy<br><span>Decorative Fixtures</span>',
            'sub'   => 'From energy-saving LED panels to elegant chandeliers — complete lighting solutions for every space.',
            'btn1'  => ['View Lighting',    '#products'],
            'btn2'  => ['Find Our Shops',   '#locations'],
      ],
      [
            'bg'    => 'images/main-panel-board-setup-2.jpg',
            'badge' => 'Professional Electrical Services',
            'h1'    => 'Expert Installation &<br><span>Wiring Services</span>',
            'sub'   => 'Licensed electricians, panel board setup, conduit wiring and full electrical contracting services.',
            'btn1'  => ['Our Services',     '#services'],
            'btn2'  => ['Contact on WhatsApp', 'https://wa.me/' . $site['whatsapp']],
      ],
];

$certificate = [
      ['name' => 'BRB Cable 2018-2019', 'file' => 'Certificate-1.png'],
      ['name' => 'BRB Cable 2019-2020', 'file' => 'Certificate-2.png'],
      ['name' => 'Osaka Lighting 2020-2021', 'file' => 'Certificate-3.png']
]
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
      <link rel="canonical" href="https://msuttaraelectric.com.bd/">
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
                              <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                              <li class="nav-item"><a class="nav-link" href="company_products.php">Products</a></li>
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
                        <li><a class="oc-link active" href="index.php"><span class="oc-icon"><i
                                                class="bi bi-house-fill"></i></span>Home<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>
                        <li><a class="oc-link" href="company_products.php"><span class="oc-icon"><i
                                                class="bi bi-lightning-charge-fill"></i></span>Products<i
                                          class="bi bi-chevron-right oc-arrow"></i></a></li>
                        <li><a class="oc-link" href="about.php"><span class="oc-icon"><i
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
     HERO SLIDER
══════════════════════════════════════ -->
      <section id="home">
            <div class="swiper hero-swiper">
                  <div class="swiper-wrapper">
                        <?php foreach ($hero_slides as $i => $slide): ?>
                        <div class="swiper-slide hero-slide"
                              style="background-image: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,0.45) 60%, rgba(0,0,0,0.15) 100%), url('<?= $slide['bg'] ?>');">
                              <div class="container h-100">
                                    <div class="row h-100 align-items-center">
                                          <div class="col-lg-7 col-md-9">
                                                <div class="hero-content">
                                                      <div class="hero-badge">
                                                            <i class="bi bi-lightning-charge-fill"></i>
                                                            <?= $slide['badge'] ?>
                                                      </div>
                                                      <h1 class="hero-title"><?= $slide['h1'] ?></h1>
                                                      <p class="hero-sub"><?= $slide['sub'] ?></p>
                                                      <div class="hero-btns">
                                                            <a href="<?= $slide['btn1'][1] ?>"
                                                                  class="btn-hero-primary text-center"><?= $slide['btn1'][0] ?></a>
                                                            <a href="<?= $slide['btn2'][1] ?>"
                                                                  class="btn-hero-outline text-center"
                                                                  <?= strpos($slide['btn2'][1], 'http') === 0 ? 'target="_blank" rel="noopener"' : '' ?>>
                                                                  <?= $slide['btn2'][0] ?>
                                                            </a>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <?php endforeach; ?>
                  </div>
                  <!-- Pagination -->
                  <div class="swiper-pagination hero-pagination"></div>
                  <!-- Navigation -->
                  <div class="swiper-button-prev hero-btn-prev"><i class="bi bi-chevron-left"></i></div>
                  <div class="swiper-button-next hero-btn-next"><i class="bi bi-chevron-right"></i></div>
            </div>
      </section>

      <!-- ══════════════════════════════════════
     STATS BAR
══════════════════════════════════════ -->
      <section class="stats-bar">
            <div class="container">
                  <div class="row g-0">
                        <div class="col-6 col-md-3">
                              <div class="stat-item">
                                    <div class="stat-num"><span class="counter" data-target="35">0</span>+</div>
                                    <div class="stat-label">Years Experience</div>
                              </div>
                        </div>
                        <div class="col-6 col-md-3">
                              <div class="stat-item stat-item-mb-last">
                                    <div class="stat-num "><span class="counter" data-target="20000">0</span>+</div>
                                    <div class="stat-label">Happy Customers</div>
                              </div>
                        </div>
                        <div class="col-6 col-md-3">
                              <div class="stat-item">
                                    <div class="stat-num"><span class="counter" data-target="100">0</span>+</div>
                                    <div class="stat-label">Trusted Brands</div>
                              </div>
                        </div>
                        <div class="col-6 col-md-3">
                              <div class="stat-item stat-item-last">
                                    <div class="stat-num"><span class="counter" data-target="2">0</span></div>
                                    <div class="stat-label">Shop Locations</div>
                              </div>
                        </div>
                  </div>
            </div>
      </section>



      <!-- ══════════════════════════════════════
     PRODUCTS
══════════════════════════════════════ -->
      <section id="products" class="section-gray">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">What We Sell</div>
                        <h2 class="section-heading">Our <span>Product Categories</span></h2>
                        <p class="section-sub">Premium-grade electrical products from world-renowned brands — available
                              wholesale and retail.</p>
                  </div>
                  <div class="row g-4">
                        <?php foreach ($products as $i => $p): ?>
                        <?php $carouselId = 'productCarousel' . $i; ?>
                        <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                              <div class="product-card">
                                    <div class="product-img-wrap">
                                          <?php if (count($p['imgs']) === 1): ?>
                                          <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>" class="product-img"
                                                loading="lazy">
                                          <?php else: ?>
                                          <div id="<?= $carouselId ?>" class="carousel slide h-100"
                                                data-bs-ride="carousel">
                                                <!-- Indicators -->
                                                <div class="carousel-indicators">
                                                      <?php foreach ($p['imgs'] as $ci => $cimg): ?>
                                                      <button type="button" data-bs-target="#<?= $carouselId ?>"
                                                            data-bs-slide-to="<?= $ci ?>"
                                                            <?= $ci === 0 ? 'class="active" aria-current="true"' : '' ?>
                                                            aria-label="Slide <?= $ci + 1 ?>">
                                                      </button>
                                                      <?php endforeach; ?>
                                                </div>
                                                <!-- Slides -->
                                                <div class="carousel-inner h-100">
                                                      <?php foreach ($p['imgs'] as $ci => $cimg): ?>
                                                      <div class="carousel-item h-100 <?= $ci === 0 ? 'active' : '' ?>">
                                                            <img src="<?= $cimg ?>"
                                                                  alt="<?= $p['name'] ?> <?= $ci + 1 ?>"
                                                                  class="product-img" loading="lazy">
                                                      </div>
                                                      <?php endforeach; ?>
                                                </div>
                                                <!-- Controls -->
                                                <button class="carousel-control-prev" type="button"
                                                      data-bs-target="#<?= $carouselId ?>" data-bs-slide="prev">
                                                      <span class="carousel-control-prev-icon"
                                                            aria-hidden="true"></span>
                                                      <span class="visually-hidden">Previous</span>
                                                </button>
                                                <button class="carousel-control-next" type="button"
                                                      data-bs-target="#<?= $carouselId ?>" data-bs-slide="next">
                                                      <span class="carousel-control-next-icon"
                                                            aria-hidden="true"></span>
                                                      <span class="visually-hidden">Next</span>
                                                </button>
                                          </div>
                                          <span class="product-img-count"><i class="bi bi-images"></i>
                                                <?= count($p['imgs']) ?> Photos</span>
                                          <?php endif; ?>
                                    </div>
                                    <div class="product-body">
                                          <div class="product-icon-wrap">
                                                <i class="bi <?= $p['icon'] ?>"></i>
                                          </div>
                                          <h3 class="product-name"><?= $p['name'] ?></h3>
                                          <p class="product-desc"><?= $p['desc'] ?></p>
                                          <a href="https://wa.me/<?= $site['whatsapp'] ?>?text=Hello%2C%20I%20am%20interested%20in%20<?= urlencode($p['name']) ?>."
                                                target="_blank" rel="noopener" class="product-enquire-btn">
                                                <i class="bi bi-whatsapp me-2"></i>Enquire Now
                                          </a>
                                    </div>
                              </div>
                        </div>
                        <?php endforeach; ?>
                  </div>
            </div>
      </section>

      <!-- ══════════════════════════════════════
     SERVICES
══════════════════════════════════════ -->
      <section id="services" class="section-white">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">What We Do</div>
                        <h2 class="section-heading">Electrical Installation &amp; <span>Wiring Services</span></h2>
                        <p class="section-sub">Professional electrical installation work by our licensed and experienced
                              team.</p>
                  </div>
                  <div class="row g-4">
                        <?php foreach ($services as $i => $s): ?>
                        <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="<?= ($i % 3) * 80 ?>">
                              <div class="service-card">
                                    <div class="service-img-wrap">
                                          <img src="<?= $s['img'] ?>" alt="<?= $s['name'] ?>" class="service-img"
                                                loading="lazy">
                                          <div class="service-overlay">
                                                <a href="https://wa.me/<?= $site['whatsapp'] ?>?text=Hello%2C%20I%20need%20<?= urlencode($s['name']) ?>%20service."
                                                      target="_blank" rel="noopener" class="service-overlay-btn">
                                                      <i class="bi bi-whatsapp me-1"></i> Request Service
                                                </a>
                                          </div>
                                    </div>
                                    <div class="service-body">
                                          <h3 class="service-name"><?= $s['name'] ?></h3>
                                          <p class="service-desc"><?= $s['desc'] ?></p>
                                    </div>
                              </div>
                        </div>
                        <?php endforeach; ?>
                        <!-- 7th card fills to 8 - show CTA -->
                        <div class="col-sm-6 col-lg-4" data-aos="fade-up" data-aos-delay="160">
                              <div class="service-cta-card service-buttons">
                                    <i class="bi bi-headset cta-card-icon"></i>
                                    <h3>Need a Service?</h3>
                                    <p>Call us or message on WhatsApp to book our licensed electrical team for any work.
                                    </p>
                                    <a href="tel:<?= preg_replace('/\s+/', '', $site['main_phone']) ?>"
                                          class="btn-orange mb-2 d-block text-center">
                                          <i class="bi bi-telephone-fill me-2"></i><?= $site['main_phone'] ?>
                                    </a>
                                    <a href="https://wa.me/<?= $site['whatsapp'] ?>" target="_blank" rel="noopener"
                                          class="btn-outline-orange d-block text-center">
                                          <i class="bi bi-whatsapp me-2"></i><?= $site['whatsapp_display'] ?>
                                    </a>
                              </div>
                        </div>
                  </div>
            </div>
      </section>

      <!-- ══════════════════════════════════════
     BRANDS
══════════════════════════════════════ -->
      <section id="brands" class="section-gray">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">Trusted Products</div>
                        <h2 class="section-heading">Brands We <span>Stock & Supply</span></h2>
                        <p class="section-sub">We carry products from 100+ globally trusted electrical brands.</p>
                  </div>
            </div>
            <!-- Infinite marquee -->
            <div class="brands-marquee-wrap" data-aos="fade-up">
                  <div class="brands-marquee">
                        <div class="brands-track" id="brandsTrack">
                              <?php
                              // Duplicate for seamless loop
                              $all_brands = array_merge($brands, $brands);
                              foreach ($all_brands as $b):
                                    if ($b['name'] == 'Mitsubishi Electric' || $b['name'] == 'Energypac' || $b['name'] == 'Energy+' || $b['name'] == 'MEP Group' || $b['name'] == 'Osaka'): ?>
                              <div class="brand-item ">
                                    <img src="images/<?= $b['file'] ?>" alt="<?= $b['name'] ?>" loading="lazy"
                                          class=" p-1 rounded" style="background:white;">
                                    <span><?= $b['name'] ?></span>
                              </div>
                              <?php else: ?>
                              <div class="brand-item">
                                    <img src="images/<?= $b['file'] ?>" alt="<?= $b['name'] ?>" loading="lazy" class="">
                                    <span><?= $b['name'] ?></span>
                              </div>
                              <?php endif ?>
                              <?php endforeach; ?>
                        </div>
                  </div>
            </div>
      </section>



      <!-- ══════════════════════════════════════
     COMPANIES WE WORK WITH
══════════════════════════════════════ -->
      <section class="section-white companies-section">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">Our Clientele</div>
                        <h2 class="section-heading">Companies We <span>Work With</span></h2>
                        <p class="section-sub">Trusted by leading construction, development and textile companies across
                              Bangladesh.</p>
                  </div>
                  <div class="row justify-content-center g-4">
                        <?php foreach ($companies as $i => $c):
                              if ($c['name'] == 'Anwar Landmark' || $c['name'] == 'Sheltech'): ?>
                        <div class="col-12 col-md-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                              <div class="company-card">
                                    <img src="images/<?= $c['file'] ?>" alt="<?= $c['name'] ?>" loading="lazy"
                                          class="rounded p-0" style="height:80px; background:white;">
                                    <p class="company-name"><?= $c['name'] ?></p>
                              </div>
                        </div>
                        <?php else: ?>
                        <div class="col-12 col-md-4" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                              <div class="company-card">
                                    <img src="images/<?= $c['file'] ?>" alt="<?= $c['name'] ?>" loading="lazy">
                                    <p class="company-name"><?= $c['name'] ?></p>
                              </div>
                        </div>
                        <?php endif ?>
                        <?php endforeach; ?>
                  </div>
            </div>
      </section>


      <!-- ══════════════════════════════════════
     OFFICIAL DISTRIBUTER
══════════════════════════════════════ -->
      <section class="section-white section-distributer">
            <DIV class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">Distributer</div>
                        <h2 class="section-heading">Official <span>Distributer </span></h2>
                        <p class="section-sub">Established in 1974, Mohammadi Electric Wires and Multi Products (MEP)
                              Limited is one of the leading and integrated electric accessories manufacturers of
                              Bangladesh. MEP currently offers over 2,000 products to its customers.</p>
                  </div>
                  <div class="company-card col-lg-4 col-12 m-auto" onclick="location.href='company_products.php'">
                        <img src="images/mep-group-logo.png" alt="" style="background:white; width:150px; height:100px"
                              class="p-2 rounded ">
                        <p>MEP Group</p>
                        <p class="distributer-see-products">See Products</p>
                  </div>
            </DIV>
      </section>
      <!-- ══════════════════════════════════════
     ACHIEVEMENTS & AWARDS
══════════════════════════════════════ -->
      <section class="section-achievement">
            <div class="container">
                  <div class="text-center mb-5" data-aos="fade-up">
                        <div class="section-tag">Our Achievements</div>
                        <h2 class="section-heading">Awards &amp; <span>Certifications</span></h2>
                        <p class="section-sub">Proud distributor and partner with leading electrical brands across
                              Bangladesh.</p>
                  </div>
                  <div class="achievement-grid">
                        <?php foreach ($certificate as $i => $cert): ?>
                        <div class="certificate-card" data-aos="zoom-in" data-aos-delay="<?= $i * 100 ?>">
                              <div class="cert-image-wrapper">
                                    <img src="images/<?= htmlspecialchars($cert['file']) ?>"
                                          alt="<?= htmlspecialchars($cert['name']) ?>" class="cert-image"
                                          loading="lazy">
                              </div>
                              <p><?= htmlspecialchars($cert['name']) ?></p>
                        </div>
                        <?php endforeach; ?>
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

                        <!-- Products -->
                        <div class="col-lg-3 col-md-6 col-6" style="padding-left:10px">
                              <h4 class="footer-heading">Our Products</h4>
                              <ul class="footer-links">
                                    <?php foreach ($products as $p): ?>
                                    <li><a href="#products"><i class="bi bi-chevron-right"></i> <?= $p['name'] ?></a>
                                    </li>
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