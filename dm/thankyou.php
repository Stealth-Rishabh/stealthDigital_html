<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Stealth Digital</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  <!-- Place favicon.ico in the root directory -->
  <!-- CSS here -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="font-flaticon/flaticon.css" />
  <link rel="stylesheet" href="css/dripicons.css" />
  <link rel="stylesheet" href="css/slick.css" />
  <link rel="stylesheet" href="css/meanmenu.css" />
  <link rel="stylesheet" href="css/default.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.3/cdn.min.js" defer></script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEQ0LX8Q0K"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-SEQ0LX8Q0K");
  </script>
  <!-- Google Tag Manager -->
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js",
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5NW7F5FL");
  </script>
  <!-- End Google Tag Manager -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    jQuery(document).ready(function () {
      url = new URL(window.location.href);
      var campaign_name = url.searchParams.get("utm_campaign");
      var keyword = url.searchParams.get("utm_keyword");
      var source = url.searchParams.get("utm_source");
      var medium = url.searchParams.get("utm_medium");
      var network = url.searchParams.get("utm_network");
      document.getElementById("campaign_url").value = window.location.href;
      document.getElementById("campaign_name").value = campaign_name;
      document.getElementById("keyword").value = keyword;
      document.getElementById("sourceId").value = source;
      document.getElementById("mediumId").value = medium;
      document.getElementById("network").value = network;
      if (document.referrer) {
        var myReferer = document.referrer;
        document.getElementById("referrerid").value = myReferer;
      } else {
        document.getElementById("referrerid").value = 'None';
      }
    });
  </script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NW7F5FL" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="circle"></div>
  <div class="cursor"></div>
  <a href="tel:+918700181135">
    <div class="phone"><img src="img/logo/phone.gif" alt="phone"></div>
  </a>
  <a href="https://api.whatsapp.com/send?phone=918700181135">
    <div class="whatsapp"><img src="img/logo/whatsapp.gif" alt="whatsapp"></div>
  </a>

  <a href="https://api.whatsapp.com/send?phone=918700181135">
    <div class="strip">
      <img src="img/logo/whatsapp.gif" alt="whatsapp" style="width: 30px;">
      <h5 class="pt-2" style="margin-left: 10px; color: #fff;">Whatsapp Us</h5>
    </div>
  </a>


  <!-- header -->
  <header class="header-area header-three">

    <div id="header-sticky" class="menu-area">
      <div class="container">
        <div class="second-menu">
          <div class="row align-items-end">
            <div class="col-xl-6 col-lg-3">
              <div class="logo">
                <a href="#"><img src="img/logo.png" alt="logo" /></a>
              </div>
            </div>
            <div class="col-xl-6 col-lg-9">
              <div class="main-menu text-right text-xl-right">
                <nav id="mobile-menu">
                  <ul id="menu-one-page-menu-2" class="menu">
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="index.html">Home</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="#about">About Us</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="#our-services">Services</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="#our-clients">Clients</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom">
                      <a href="#contact">Contact</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <div class="col-12">
              <div class="mobile-menu"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="thankyou">
    <div class="container">
      <div class="row text-center">
        <h1>Thank Ypu</h1>
      </div>
    </div>
  </section>

  <footer class="pt-10">
    <div class="footer-container">
      <div class="space-y-6 sm:max-w-md sm:mx-auto sm:text-center">
        <img src="img/logo.png" class="footer-logo" />
        <p>
          Drive Results, Dominate Digital - Results-driven agency specializing in innovative digital marketing solutions
        </p>
        <div class="button-container">
          <a href="javascript:void(0)" class="primary-button">
            Let's get started
          </a>

        </div>
      </div>
      <div class="footer-bottom">
        <p>© 2023-2024 - All rights reserved by Stealth Digital</p>
        <ul class="footer-links">
          <div class="col-lg-4 col-md-6 social justify-content-center justify-content-lg-end">
            <a href="https://www.facebook.com/people/Stealth-Digital-SD/61560966751733/" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
            <!-- <a href="https://www.twitter.com/" target="_blank">
                                <i class="fa-brands fa-twitter"></i>
                              </a> -->
            <a href="https://www.linkedin.com/company/stealth-digitaly/" target="_blank">
              <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/digital_marketing_stealth/" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </ul>
      </div>
    </div>
  </footer>
</body>

</html>