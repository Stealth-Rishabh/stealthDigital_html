<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- required meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- #favicon -->
<!-- 	   <?php wp_head(); ?> -->
    <link
      rel="shortcut icon"
      href="/assets/images/favicon.png"
      type="image/x-icon"
    />
    <!-- #title -->
    <title>How to Improve Social Media Engagement for Your Business: Top Tips</title>
    
    <!-- #keywords -->
    <!-- <meta name="keywords" content="social media engagement, social media services Delhi NCR, social media management services, SMM services for restaurant, digital marketing services"> -->
    
    <!-- #description -->
    <meta name="description" content="Boost social media engagement with expert tips! Stealth Digital offers top Social Media Services in Delhi NCR to grow your brand. Get started today!">
    
    <link rel="canonical" href="https://www.stealthdigital.in/blog/improve-social-media-engagement.html">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="How to Improve Social Media Engagement for Your Business: Top Tips">
    <meta property="og:description" content="Boost social media engagement with expert tips! Stealth Digital offers top Social Media Services in Delhi NCR to grow your brand. Get started today!">
    <meta property="og:image" content="https://www.stealthdigital.in/assets/images/blog/blog-social-media-engagement.webp">
    <meta property="og:url" content="https://www.stealthdigital.in/blog/improve-social-media-engagement.html">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="Stealth Digital" />
    
    <!-- ==== css dependencies start ==== -->
    <!-- bootstrap five css -->
    <link
      rel="stylesheet"
      href="/assets/vendor/bootstrap/css/bootstrap.min.css"
    />
    <!-- glyphter css -->
    <link rel="stylesheet" href="/assets/vendor/glyyphter/css/xpovio.css" />
    <!-- font awesome six css -->
    <link rel="stylesheet" href="/assets/vendor/font-awesome/css/all.css" />
    <!-- nice select css -->
    <link
      rel="stylesheet"
      href="/assets/vendor/nice-select/css/nice-select.css"
    />
    <!-- magnific popup css -->
    <link
      rel="stylesheet"
      href="/assets/vendor/magnific-popup/css/magnific-popup.css"
    />
    <!-- slick css -->
    <link rel="stylesheet" href="/assets/vendor/slick/css/slick.css" />
    <!-- ==== / css dependencies end ==== -->
    <!-- main css -->
    <link rel="stylesheet" href="/assets/css/main.min.css" />

    <style>
      .unique-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
      }
      .unique-table th, .unique-table td {
        border: 1px solid #ddd;
        padding: 12px;
        text-align: left;
      }
      .unique-table th {
        background-color: #f4f4f4;
        color: #333;
      }
      .unique-table tr:nth-child(even) {
        background-color: #353333;
      }
      
      .comparison-table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
      }
      
      .comparison-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
      }
      
      .comparison-table th,
      .comparison-table td {
        padding: 12px 15px;
        border: 1px solid #dddddd;
      }
      
      .comparison-table tbody tr {
        border-bottom: 1px solid #dddddd;
      }
      
      .comparison-table tbody tr:nth-of-type(even) {
        background-color: #353333;
      }
      
      .comparison-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
      }
		.text-wrapping{
word-wrap: break-word;
}

ul.page-numbers {
    display: flex!important;
    border: none!important;;
}

ul.page-numbers:hover {
    background-color: transparent!important;
}

.blog-main .pagination{
	justify-content: center!important;
}

.pagination .page-numbers{
	width: 50px;
    min-width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid #d9d9d9;
    background-color: #000;
    color: #fff;
	gap: 5px;
    transition-behavior: normal;
    transition-duration: 0.3s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
    transition-property: all;
}

.page-numbers.current{
	background-color: #e50814;
}

.pagination .page-numbers:hover{
	background-color: #e50814;
}

.prev.page-numbers > .prev-page,.next.page-numbers > .next-page{
padding:0;
}

.prev.page-numbers > .prev-page:hover,.next.page-numbers > .next-page:hover{
background-color: #e50814;
	color:white!important;
}

/* .header{
	margin-bottom: 0;
} */

.input-email input{
	border:none;
}

.input-email input:focus{
	background: transparent;
    border:none;
}

.input-email > .subscribe{
	background: transparent;
}

    </style>

    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Stealth Digital",
        "url": "https://www.stealthdigital.in/",
        "logo": "https://www.stealthdigital.in/assets/images/logo.png",
        "sameAs": [
          "https://www.facebook.com/StealthDigital.SD/",
          "https://www.instagram.com/digital_marketing_stealth/",
          "https://www.linkedin.com/company/stealth-digitaly/"
        ]
      }
    </script>
  </head>

  <body>
    <!-- ... (header and navigation code remains the same) ... -->
    <div class="top-strip">
        <div class="container">
          <a href="tel:918700181135" class="top-strip-item">
            <i class="fa-solid fa-phone-volume"></i> 918700181135
          </a>

          <a href="mailto:rishabh@stealthdigital.in" class="top-strip-item">
            <i class="fa-solid fa-envelope"></i> rishabh@stealthdigital.in
          </a>
        </div>
      </div>
      <div class="my-app">
        <!-- ==== preloader start ==== -->
        <div id="preloader">
          <div id="loader"></div>
        </div>
        <!-- ==== / preloader end ==== -->
        <!-- ==== mouse cursor drag start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner">
          <span>Drag</span>
        </div>
        <!-- ==== / mouse cursor drag end ==== -->
        <!-- ==== header start ==== -->
        <header class="header">
          <div class="primary-navbar secondary--navbar">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <nav class="navbar p-0">
                    <div class="navbar__logo">
                      <a href="/" aria-label="go to home">
                        <img
                          src="/assets/images/logo.png"
                          alt="Stealth Digital Logo"
                        />
                      </a>
                    </div>
                    <div class="navbar__options">
                      <div class="navbar__menu">
                        <ul>
                          <li class="navbar__item">
                            <a href="/">Home</a>
                          </li>
                          <li class="navbar__item">
                            <a href="https://www.stealthdigital.in/about-us.html">About Us</a>
                          </li>
                          <li
                            class="navbar__item navbar__item--has-children nav-fade"
                          >
                            <a
                              href="javascript:void(0)"
                              aria-label="dropdown menu"
                              class="navbar__dropdown-label"
                              >Services</a
                            >
                            <ul class="navbar__sub-menu">
                              <li>
                                <a href="https://www.stealthdigital.in/search-engine-marketing.html"
                                  >Search Engine Marketing</a
                                >
                              </li>
                              <li>
                                <a href="https://www.stealthdigital.in/search-engine-optimization.html"
                                  >Search Engine Optimization</a
                                >
                              </li>
                              <li>
                                <a href="https://www.stealthdigital.in/social-media-marketing.html"
                                  >Social Media Marketing</a
                                >
                              </li>
                              <li>
                                <a href="https://www.stealthdigital.in/content-marketing.html"
                                  >Content Marketing</a
                                >
                              </li>
                              <li>
                                <a href="https://www.stealthdigital.in/website-design-and-development.html"
                                  >Website Design & Development</a
                                >
                              </li>
                            </ul>
                          </li>
                          <li class="navbar__item">
                            <a href="https://www.stealthdigital.in/blog">Blogs</a>
                          </li>
                          <li class="navbar__item">
                            <a href="https://www.stealthdigital.in/contact-us.html">Contact Us</a>
                          </li>
                        </ul>
                      </div>
                      <button
                        class="open-offcanvas-nav d-flex"
                        aria-label="toggle mobile menu"
                        title="open offcanvas menu"
                      ></button>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </header>
  
        <div class="offcanvas-nav">
          <div class="offcanvas-menu">
            <nav class="offcanvas-menu__wrapper">
              <div class="offcanvas-menu__header nav-fade">
                <div class="logo">
                  <a href="/">
                    <img
                      src="/assets/images/logo.png"
                      alt="Stealth Digital Logo"
                      title="Stealth Digital"
                    />
                  </a>
                </div>
                <a
                  href="javascript:void(0)"
                  aria-label="close offcanvas menu"
                  class="close-offcanvas-menu"
                >
                  <i class="fa-light fa-xmark-large"></i>
                </a>
              </div>
              <div class="offcanvas-menu__list">
                <div class="navbar__menu">
                  <ul>
                    <li class="navbar__item nav-fade">
                      <a href="/">Home</a>
                    </li>
                    <li class="navbar__item navbar__item--has-children nav-fade">
                      <a
                        href="javascript:void(0)"
                        aria-label="dropdown menu"
                        class="navbar__dropdown-label"
                        >Services</a
                      >

                      <ul class="navbar__sub-menu">
                        <li>
                          <a href="https://www.stealthdigital.in/search-engine-marketing.html"
                            >Search Engine Marketing</a
                          >
                        </li>
                        <li>
                          <a href="https://www.stealthdigital.in/search-engine-optimization.html"
                            >Search Engine Optimization</a
                          >
                        </li>
                        <li>
                          <a href="https://www.stealthdigital.in/content-marketing.html"
                            >Content Marketing</a
                          >
                        </li>
                        <li>
                          <a href="https://www.stealthdigital.in/social-media-marketing.html"
                            >Social Media Marketing</a
                          >
                        </li>
                        <li>
                          <a href="https://www.stealthdigital.in/website-design-and-development.html"
                            >Website Design & Development</a
                          >
                        </li>
                      </ul>
                    </li>
                    <li class="navbar__item nav-fade">
                      <a href="https://www.stealthdigital.in/about-us.html">About Us</a>
                    </li>
                    <li class="navbar__item nav-fade">
                      <a href="https://www.stealthdigital.in/blog">Blogs</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="offcanvas-menu__options nav-fade">
                <div class="offcanvas__mobile-options d-flex">
                  <a href="https://www.stealthdigital.in/contact-us.html" class="btn btn--secondary"
                    >Let's Talk</a
                  >
                </div>
              </div>
              <div
                style="
                  display: flex;
                  justify-content: space-between;
                  padding-left: 1.5rem;
                  flex-wrap: wrap;
                  gap: 2rem;
                "
              >
                <a href="mailto:rishabh@stealthdigital.in"
                  >Email : rishabh@stealthdigital.in</a
                >

                <a href="tel:918700181135">Call Us : 918700181135</a>
              </div>
              <div class="offcanvas-menu__social social nav-fade">
                <a
                  href="https://www.facebook.com/people/Stealth-Digital-SD/61560966751733/"
                  target="_blank"
                  aria-label="share us on facebook"
                >
                  <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a
                  href="https://www.linkedin.com/company/stealth-digitaly/"
                  target="_blank"
                  aria-label="share us on linkedin"
                >
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a
                  href="https://www.instagram.com/digital_marketing_stealth/"
                  target="_blank"
                  aria-label="share us on instagram"
                >
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </div>
            </nav>
          </div>
        </div>
		<div id="content" class="site-content">
			<div class="ast-container"></div>
			<?php astra_content_top(); ?>