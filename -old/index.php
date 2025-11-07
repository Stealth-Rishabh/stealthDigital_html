<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stealth Digital</title>
    <link rel="icon" type="image/x-icon" href="img-webp/favicon.webp">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SEQ0LX8Q0K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-SEQ0LX8Q0K');
    </script>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5NW7F5FL');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5NW7F5FL" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- <header class="header-s3 pt-2 d-none d-md-block">
        <div class="header-container">
            <div class="header-top-container">
                <div class="container">
                    <div class="header-s3__top">
                        <div class="p-left">
                            <div class="tb-single-info-s2">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>
                                        <a
                                            href="mailto:rishabh@stealthtechnocrats.com"><span>[rishabh@stealthtechnocrats.com]</span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-right">
                            <div class="tb-single-info-s2">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path
                                            d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
                                    </svg>
                                </div>
                                <div class="content">
                                    <p>
                                        <a href="https://goo.gl/maps/CCii1n3S433CvobB6">Delhi & Mohali</a>
                                        <a href="https://maps.app.goo.gl/MTPwzeEZKFTtK9ns8" target="_blank">India</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!-- <header class="py-md-3 py-2">
        <div class="container">
            <div class="row align-items-center gy-3">
                <div class="col-md-6 col-12 d-flex justify-content-md-start justify-content-center">
                    <a href=""> <img src="img-webp/stealthlogo.webp" alt="logo-img" class="logo-img"></a>
                </div>
                <div class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center">
                    <a href="tel:91-918700181135">
                        Call Now- +91-918700181135
                    </a>
                </div>
            </div>
        </div>
    </header> -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img-webp/logo.webp" alt="logo-img" class="logo-img"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg width="50" height="50" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058">
                    </path>
                    <path class="line line2" d="M 20,50 H 80"></path>
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942">
                    </path>
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#our-service"> Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#our-partner">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#whyNewsections">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="banner py-md-5 py-2" id="applynow">
  <div class="container mobile_container_hero">
    <div class="row align-items-center">
      <!--<div class="col-12">-->
        <!-- Image for mobile view (only visible under 768px) -->
      <!--  <img src="	https://stealthdigital.in/DM/img-webp/banner_img.webp" alt="Banner Image" class="img-fluid banner-mobile-img d-block d-md-none">-->
      <!--</div>-->
      <div class="col-12 col-md-6 ">
        <div class="banner-left pt-1 pt-lg-2 ps-lg-4">
          <div class="banner_cont_text mobile_banner_text">
            <h2><span class="blue_head_m">Empower Your Educational</span> </h2>
            <h2><span class="blue_head_m">Institution with Cutting-Edge</span></h2>
            <h2 class="comp d-none d-md-block">
              <span class="blue_head_m">Digital</span><br> Marketing Solutions
            </h2>
            <h3 class="comp d-block d-md-none">
              <span class="blue_head_m">Digital Marketing Solutions</span>
            </h3>
            <p>Attract, Engage, and Enrol More Students<br> with Customized Strategies Designed for<br> Schools,
              Colleges, and Universities.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end form_container_mobile">
        <div class="banner-right text-center">
          <div class="right-form">
            <h3 class="form-top text-center">Boost Your Enrolments Today<br> Get a Free Consultation</h3>
            <form method="post" action="stealth_crm_api.php" enctype="multipart/form-data" id="stealthdidtallp">
              <div class="mb-3">
                <input type="text" class="form-control banner-form shadow-none" id="fullname" name="fullname"
                  placeholder="Name*" required>
              </div>
              <div class="mb-3">
                <input type="email" class="form-control shadow-none banner-form shadow-none" placeholder="Email*"
                  id="email" name="email" required>
              </div>
              <div class="mb-3">
                <input type="tel" name="phone" placeholder="Phone*" class="form-control shadow-none banner-form shadow-none"
                  id="phone" minlength="10" maxlength="10" pattern="[5-9]{1}[0-9]{9}" required>
              </div>
              <div class="mb-3 brdr-btm">
                <select class="form-select service border-0 p-0 pb-1 shadow-none" aria-label="Default select example"
                  id="stealthdigitallp" name="service" required>
                  <option selected>Service*</option>
                  <option value="digitalmarketing">Digital Marketing</option>
                  <option value="paidcampaignmarketing">Paid Ads/PPC</option>
                  <option value="socialmediamarketing">Social Media Page Management</option>
                  <option value="searchengineoptimization">SEO</option>
                  <option value="website/app development">Website/App Development</option>
                </select>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control banner-form shadow-none" id="bussinessName" name="bussinessName"
                  placeholder="Business Name*" required>
              </div>
              <div class="mb-3">
                <input type="text" class="form-control banner-form shadow-none" id="query" name="query" placeholder="Query*"
                  required>
              </div>
              <input type="hidden" id="referrerid" name="referrer_name" value="" />
              <input type="hidden" id="keyword" name="keyword" value="" />
              <input type="hidden" id="network" name="network" value="" />
              <input type="hidden" id="campaign_url" name="campaign_url" value="" />
              <input type="hidden" id="campaign_name" name="campaign_name" value="" />
              <input type="hidden" id="sourceId" name="source" value="" />
              <input type="hidden" id="mediumId" name="medium" value="" />
              <input type="hidden" name="orderid" value="1022" />
              <input type="hidden" name="sitename" value="StealthDigital" />
              <button type="submit" class="btn btn-form">Apply Now!</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="counter sect">
        <div class="container">
            <div class="row text-center row-cols-2 row-cols-lg-4">
                <div class="col py-4 ">
                    <div class="project br-right">
                        <p class="mb-0">545+</p>
                        <span>Finished Projects</span>
                    </div>
                </div>
                <div class="col py-4 ">
                    <div class="project br-right">
                        <p class="mb-0">50+</p>
                        <span>Active Clients</span>
                    </div>
                </div>
                <div class="col py-4 ">
                    <div class="project br-right">
                        <p class="mb-0">08+</p>
                        <span>Successful Years</span>
                    </div>
                </div>
                <div class="col py-4 ">
                    <div class="project ">
                        <p class="mb-0">225+</p>
                        <span>Projects Won</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="industrysec">
        <div class="container">
            <div class="sec-heading text-center h-color mb-2">INDUSTRIES SERVED</div>
            <p class="text-center">In today's digital age, the internet is not just a platform for information but a
                global marketplace
                where brands compete for attention and customers. As a digital marketing agency,
                Stealth Digital understands the intricacies of this competitive arena.</p>
            <div class="row gy-3 mt-2 mobile_grid_image">
                <div class="col-md-3 ">
                    <div class="position-relative">
                        <img src="img-webp/educationimg.webp" alt="education" class="img-fluid">
                        <div class="innertext">
                            <h6>EDUcation</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative">
                        <img src="img-webp/indus2.webp" alt="education" class="img-fluid">
                        <div class="innertext">
                            <h6>REAL ESTATE</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative">
                        <img src="img-webp/indus3.webp" alt="education" class="img-fluid">
                        <div class="innertext">
                            <h6>LOGISTICS / TRAVEL</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="position-relative">
                        <img src="img-webp/indus4.webp" alt="education" class="img-fluid">
                        <div class="innertext">
                            <h6>healthcare</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="our-services sect" id="our-service">
        <div class="container">
            <div class="sec-heading text-center h-color">Our Services</div>
            <div class="services-heading">
                <!-- <p>Complete Digital Marketing Service Served under
                    a single umbrella at Stealth Technocrats
                </p> -->
                <!-- <p>Delivering transformational growth to Schools, Colleges, Universities & Hospitals through our
                    tailored Digital Marketing Services</p> -->
                <!-- <p>Our Services</p> -->
            </div>
            <!-- <div class="services-sub-heading mb-lg-5  mb-3">
                <p>Right from organic to paid media, social to mobile, email to chatbots, and more,
                    we are here to help you for all digital marketing needs.
                </p>
            </div> -->
            <div class="row gy-4 mobile_service_layout">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/tech-icon.webp" alt="cl-1" class="">
                            </div>
                            <div class="side content">
                                <p class=" mt-3 mb-0 shown-title mrgn-lft max-ctn"> Search Engine
                                    Optimization </p>
                                <ul class="shown-list  mb-0">
                                    <li>Enterprise SEO</li>
                                    <li>Ecommerce SEO</li>
                                    <li>Local SEO</li>
                                    <!-- <li class="side-b show-more-content">
                                        <ul class="p-0 show-less mb-0">
                                            <li>Youtube Ads</li>
                                            <li>Instagram Ads</li>
                                            <li>Linkedin Ads</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto btn-box" data-bs-toggle="modal" data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/cl-2.webp" alt="cl-2" class=""></div>
                            <div class="side content ">
                                <p class="mt-3 mb-0 shown-title mrgn-lft max-ctn"> Online Reputation
                                    Management</p>
                                <ul class="shown-list  mb-0">
                                    <li>Brand Reputation Management</li>
                                    <li>Corporate Reputation Management</li>
                                    <li>Hotel Reputation Management</li>
                                    <!-- <li class="side-b  show-mark-content">
                                        <ul class=" show-less mb-0 p-0">
                                            <li>Youtube Marketing</li>
                                            <li>Linkedin Marketing</li>
                                            <li>Pinterest Marketing</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto  btn-box" data-bs-toggle="modal"
                                    data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/cl-3.webp" alt="cl-3" class=""></div>
                            <div class="side content">
                                <p class="mt-3 mb-0 shown-title max-ctn">Social Media
                                    Marketing </p>
                                <ul class="shown-list  mb-0">
                                    <li>Facebook Marketing
                                    </li>
                                    <li>Twitter Marketing
                                    </li>
                                    <!-- <li class="side-b  show-seo-content">
                                        <ul class=" show-less mb-0 p-0">
                                            <li>E-Commerce SEO Services</li>
                                            <li>Amazon SEO Services</li>
                                            <li>MagentoSEO Services</li>
                                            <li>WooCommerceSEO Services</li>
                                            <li>ShofipySEO Services</li>
                                            <li>Guest Blogging Services</li>
                                            <li>Mobile SEO</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto  btn-box" data-bs-toggle="modal"
                                    data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/cl-4.webp" alt="cl-4" class=""></div>
                            <div class="side  content">
                                <p class="mt-3 mb-0 shown-title max-ctn mrgn-lftt">Website & App Design and Development
                                </p>
                                <ul class="shown-list  mb-0">
                                    <li>Website Design and Development
                                    </li>
                                    <li>Mobile Website Designing
                                    </li>
                                    <li>Ecommerce Website Development
                                    </li>
                                    <!-- <li class="side-b  show-mange-content">
                                        <ul class=" show-less mb-0 mt-2 p-0">
                                            <li>Start-Up Reputation Management</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto  btn-box" data-bs-toggle="modal"
                                    data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/cl-4.webp" alt="cl-4" class=""></div>
                            <div class="side  content">
                                <p class="mt-3 mb-0 shown-title max-ctn">Search Marketing
                                </p>
                                <ul class="shown-list  mb-0">
                                    <li>Display Marketing
                                    </li>
                                    <li>Remarketing
                                    </li>
                                    <li>Mobile Advertising
                                    </li>
                                    <li>Lead Based Marketing
                                    </li>
                                    <li>Affiliate Marketing
                                    </li>
                                    <li>Email Marketing
                                    </li>
                                    <!-- <li class="side-b  show-mange-content">
                                        <ul class=" show-less mb-0 mt-2 p-0">
                                            <li>Start-Up Reputation Management</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto  btn-box" data-bs-toggle="modal"
                                    data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service-box">
                        <div class="service-box-inner">
                            <div class="box-img text-center"><img src="img-webp/cl-4.webp" alt="cl-4" class=""></div>
                            <div class="side  content">
                                <p class="mt-3 mb-0 shown-title max-ctn mrgn-lfttt">Copywriting and Content Marketing
                                </p>
                                <ul class="shown-list  mb-0">
                                    <li>Quora Marketing
                                    </li>
                                    <li>Content Marketing
                                    </li>
                                    <li>Guest Posting
                                    </li>
                                    <!-- <li class="side-b  show-mange-content">
                                        <ul class=" show-less mb-0 mt-2 p-0">
                                            <li>Start-Up Reputation Management</li>
                                        </ul>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="service-box-inner">
                            <!-- <div class="show text-center mt-2 ads-show-more">
                                <img src="img-webp/plus.webp" alt="plus" class=" content-icon plus_ic">
                                <img src="img-webp/minus.webp" alt="minus" class=" content-icon minus_ic">
                            </div> -->
                            <div class="text-center mt-3">
                                <a href="#applynow" class="mx-auto btn-box enquire_btn">Enquire Now</a>
                                <!-- <button type="button " class="mx-auto  btn-box" data-bs-toggle="modal"
                                    data-bs-target="#ser-model1">
                                    Enquire Now
                                </button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="why-us  sect  ">
        <div class="effect" data-content="WHY CHOOSE US WHY CHOOSE  "></div>
        <div class="container">
            <div class="sec-heading text-center text-white">Why choose Us</div>
            <p> Stealth Technocrats: Your Digital Marketing Allies. We are a dynamic digital marketing service provider
                dedicated to propelling your brand to the forefront of the digital domain. With a team of passionate
                experts, and a strategic blend of cutting-edge technology and creative expertise, we craft customized
                digital marketing solutions that drive growth, boost brand visibility, and connect you with your target
                audience. From SEO and social media management to PPC advertising and content marketing, we're your
                trusted partner in navigating the ever-evolving digital world.
            </p>
        </div>
    </section> -->
    <section class="whyNewsection sect " id="whyNewsections">
        <div class="container">
            <div class="sec-heading text-center h-color">WHY CHOOSE US ?</div>
            <div class="row gy-3">
                <div class="col-md-3">
                    <div class="why_box">
                        <img class="img-fluid" src="img-webp/WHY1.webp" data-loaded="true">
                        <div class="whycontent">
                            <h6>Our Team
                                </span> </h6>
                            <p>Stealth is home to experienced professionals well- versed in learning clients'
                                bespoke requirements to devise value-driven digital campaigns.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why_box">
                        <img class="img-fluid" src="img-webp/why2.webp" data-loaded="true">
                        <div class="whycontent">
                            <h6>Holistic Techniques
                            </h6>
                            <p>Stealth adopts a holistic approach while targeting digital channels, including SEO
                                services, social media marketing, PPC advertising, content marketing, and web
                                development, ensuring effective CRO and ROI.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why_box">
                        <img class="img-fluid" src="img-webp/why3.webp" data-loaded="true">
                        <div class="whycontent">
                            <h6>Structured And Transparent Workflow
                            </h6>
                            <p>Stealth ensures structured and transparent workflows, enabling clients to track each
                                campaign's development and success with ease.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="why_box">
                        <img class="img-fluid" src="img-webp/why4.webp" data-loaded="true">
                        <div class="whycontent">
                            <h6>Experience And Expertise
                            </h6>
                            <p>With over 16 years of experience and numerous accolades up their sleeves, Stealth
                                offers proven digital marketing services that yield positive results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="certificate-our sect">
        <div class="effect" data-content="OUR CERTIFICATIONS OUR CE"> </div>
        <div class="container">
            <div class="sec-heading text-center h-color">Our Certifications</div>
            <div class="row choose_sec gy-4">
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="certificate" data-bs-toggle="modal" data-bs-target="#certificate-modal1">
                        <img class="img-fluid lozad" src="img-webp/certificate1.webp" data-loaded="true">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="certificate" data-bs-toggle="modal" data-bs-target="#certificate-modal2">
                        <img class="img-fluid lozad" src="img-webp/certificate2.webp" alt="certificate2"
                            data-loaded="true">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="certificate" data-bs-toggle="modal" data-bs-target="#certificate-modal3">
                        <img class="img-fluid lozad" src="img-webp/certificate3.webp" alt="certificate3"
                            data-loaded="true">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 ">
                    <div class="certificate" data-bs-toggle="modal" data-bs-target="#certificate-modal4">
                        <img class="img-fluid lozad" src="img-webp/certificate4.webp" alt="certificate4"
                            data-loaded="true">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section class="our-partners sect " id="our-partner">
        <div class="container">
            <div class="sec-heading text-center h-color">Our Valuable Partners</div>
            <div class="splide" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partnerlogos.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partnerlogos2.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <!-- <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partner1.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partner2.webp" alt="partner2" class="img-fluid partner-img">
                            </div>
                        </li> -->
                        <!-- <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partner3.webp" alt="partner3" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partner4.webp" alt="partner4" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/partner5.webp" alt="partner5" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/jeanie_logo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/gurugram.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/sessh_logo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/trust_pocket_logo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/discount_logo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/Col Brown.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/brookfield.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/planet.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/procur.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/Pixel logo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/Ridge-Valley-final-logo-1024x252.webp" alt="partner1"
                                    class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/criticarelogo.svg" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/delhilogo.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/BRDS-Logo-2021.webp" alt="partner1" class="img-fluid partner-img">
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="partner-inner">
                                <img src="img-webp/genesis-ggs-new-logo-home.webp.webp" alt="partner1"
                                    class="img-fluid partner-img">
                            </div> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="custmor-review sect">
        <div class="effect" data-content="OUR HAPPY CLIENTS OUR HA   "></div>
        <div class="container pt-3">
            <div class="splide splider " role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="custmor-review-inner ">
                                <img src="img-webp/comam.webp" alt="comam" class="comma-img">
                                <p class="text-white">"It is always a pleasure and the best experience working with Stealth for our online marketing campaigns. Its being a long time we are working together and the team member always provides you the outstanding services, which make you feel that you are working with the team who knows how to make any campaign a huge success. Thanks a lot for all your efforts and best of luck for your future endeavors."
                                </p>
                                <h4 class="h-color">Alannah Harper
                                </h4>
                                <h5 class="h-color">-CEO Shofipy</h5>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custmor-review-inner ">
                                <img src="img-webp/comam.webp" alt="comam" class="comma-img">
                                <p class="text-white">We would highly recommend Stealth Technocrats web designers to
                                    others!
                                    Their SEO service is
                                    invaluable and has really put us on the map, we receive most our business through
                                    calls.
                                </p>
                                <h4 class="h-color">Alannah Harper
                                </h4>
                                <h5 class="h-color">-CEO Shofipy</h5>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custmor-review-inner ">
                                <img src="img-webp/comam.webp" alt="comam" class="comma-img">
                                <p class="text-white">We would highly recommend Stealth Technocrats web designers to
                                    others!
                                    Their SEO service is
                                    invaluable and has really put us on the map, we receive most our business through
                                    calls.
                                </p>
                                <h4 class="h-color">Alannah Harper
                                </h4>
                                <h5 class="h-color">-CEO Shofipy</h5>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custmor-review-inner ">
                                <img src="img-webp/comam.webp" alt="comam" class="comma-img">
                                <p class="text-white">We would highly recommend Stealth Technocrats web designers to
                                    others!
                                    Their SEO service is
                                    invaluable and has really put us on the map, we receive most our business through
                                    calls.
                                </p>
                                <h4 class="h-color">Alannah Harper
                                </h4>
                                <h5 class="h-color">-CEO Shofipy</h5>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custmor-review-inner ">
                                <img src="img-webp/comam.webp" alt="comam" class="comma-img">
                                <p class="text-white">We would highly recommend Stealth Technocrats web designers to
                                    others!
                                    Their SEO service is
                                    invaluable and has really put us on the map, we receive most our business through
                                    calls.
                                </p>
                                <h4 class="h-color">Alannah Harper
                                </h4>
                                <h5 class="h-color">-CEO Shofipy</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <section class="clientsSec">
        <div class="container">
            <div class="sec-heading text-center h-color">Client Testimonials</div>
            <div class="row testimonials_mobile">
                <div class="col-md-4">
                    <div class="clientBox">
                        <img src="img-webp/partner2.webp" alt="imt" class="img-fluid">
                        <p class="text-center mt-3">
                            "It is always a pleasure and the best experience working with Stealth for our online
                            marketing campaigns. Its being a long time we are working together and the team member
                            always provides you the outstanding services, which make you feel that you are working with
                            the team who knows how to make any campaign a huge success. Thanks a lot for all your
                            efforts and best of luck for your future endeavors."
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="clientBox blue">
                        <img src="img-webp/gla-university-logo.webp" alt="imt" class="img-fluid">
                        <p class="text-center mt-3">
                            "The team of Stealth has been instrumental in helping us building an incredible lead
                            generating machine through our AdWords and remarketing campaigns. Working with Rishabh as
                            our marketing partner is a pleasure; with his guidance we have seen an increase in lead
                            flow, tremendous efficiency and a very solid ROI."
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="clientBox">
                        <img src="img-webp/procure.webp" alt="imt" class="img-fluid">
                        <p class="text-center mt-3">
                            "We have worked with many small and big digital agencies which are known to in their fields,
                            but Stealth Education is really an expert in the education sector. The team member's gives
                            you customized solutions, timely result and assurance that you can rely on them and enjoy
                            the difference of working with the people who know the pulse of the industry."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq sect">
        <div class="container">
            <div class="sec-heading text-center h-color">FAQs</div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item mb-lg-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none acc-btn bg-transparent   collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                            aria-controls="collapseOne">
                            What Exactly is Branding?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                        <div class="accordion-body ">
                            Branding is a comprehensive and strategic process that involves creating and shaping a
                            unique identity, image, and perception for a company, product, service, or individual. It
                            goes beyond just designing a logo or choosing a color scheme; it encompasses the entire
                            experience and impression that people have when they interact with that brand.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-lg-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none bg-transparent   acc-btn collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            How Branding Works?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Branding works by creating a cohesive and consistent identity through visual elements and
                            messaging. It establishes a unique and memorable presence in the minds of consumers. This
                            identity is reinforced through various marketing channels, such as advertising, social
                            media, and packaging. Consistency in brand presentation builds trust and loyalty. Customer
                            experiences and interactions with the brand contribute to its image, and feedback loops help
                            refine and adapt the branding strategy to meet evolving market needs, ultimately influencing
                            consumer perceptions and purchasing decisions.
                        </div>
                    </div>
                </div>
                <div class="accordion-item mb-lg-3 border-0">
                    <h2 class="accordion-header">
                        <button class="accordion-button shadow-none bg-transparent   acc-btn collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            What Type of Creative Services do you Offer?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- I offer text-based creative services, including content generation, editing, and creative
                            writing assistance. I can help brainstorm ideas for creative projects and marketing
                            campaigns, as well as provide design inspiration and branding guidance. While I can provide
                            valuable support in these areas, the actual creative execution and design work are typically
                            performed by human professionals. -->
                            At Stealth Digital, we offer text-based creative services, including content generation,
                            editing, and creative writing assistance. With our creative designers brainstorming ideas
                            for creative projects and marketing campaigns, we also provide design inspiration and
                            branding guidance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-sec ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 text-center">
                    <div class="contectContent">
                        <p class="text-white mb-0">Let’s achieve remarkable business success together!</p>
                        <h6 class="text-white fw-bold footer_mobile_text">Sail Through Success with Stealth Digital</h6>
                    </div>
                    <a href="#applynow" class="btn contactbutton">Contact with Us! <img src="img-webp/contactic.webp"
                            alt="contact-img" class="img-fluid"></a>
                    <!-- <button class="btn contactbutton">Contact with Us! <img src="img-webp/contactic.webp"
                            alt="contact-img" class="img-fluid"></button> -->
                </div>
            </div>
        </div>
    </section>
    <footer class="footer-s1">
        <div class="footer-cr">
            <div class="container">
                <div class="footer-cr-container">
                    <div class="p-left">
                        <p>2023-2024 © All rights reserved by Stealth Digital</p>
                    </div>
                    <div class="p-right">
                        <!-- <ul class="cr-menu">
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Terms and Conditions</a></li>
                </ul> -->
                    </div>
                    <div class="p-right">
                        <ul class="social-icons-s1  mb-0">
                            <li>
                                <a href="https://www.facebook.com/people/Stealth-Digital-SD/61560966751733/"
                                    target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                    </svg>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="https://twitter.com/StealthtechST" target="_blank"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                    </svg></a>
                            </li> -->
                            <li>
                                <a href="https://www.linkedin.com/company/stealth-digitaly/about/?viewAsMember=true"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z" />
                                    </svg></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/digital_marketing_stealth" target="_blank"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path
                                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                    </svg></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="phone-icon-wrapper">
    <div class="phone-icon desktop-view">
        <a href="tel:+91-918700181135">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
        </a>
    </div>
    <div class="phone-icon mobile-view">
        <a href="tel:+91-918700181135">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
            </svg>
            <span>Contact Us</span>
        </a>
    </div>
</div>

    </footer>
    <!-- <div class="modal fade" id="ser-model1" tabindex="-1" aria-labelledby=ser-model1Label" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="modal fade" id="certificate-modal1" tabindex="-1" aria-labelledby="certificate-modal1Label"
        aria-hidden="true">
        <div class="modal-dialog modal-lg  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ratio ratio-16x9">
                    <img class="" src="img-webp/certificate1.webp" alt="certificate1" data-loaded="true">
                </div>
                <div class="modal-footer border-0 p-3">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate-modal2" tabindex="-1" aria-labelledby="certificate-modal2Label"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ratio ratio-16x9">
                    <img class="" src="img-webp/certificate2.webp" alt="certificate2" data-loaded="true">
                </div>
                <div class="modal-footer border-0 p-3">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate-modal3" tabindex="-1" aria-labelledby="certificate-modal3Label"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ratio ratio-16x9">
                    <img class="" src="img-webp/certificate3.webp" alt="certificate3" data-loaded="true">
                </div>
                <div class="modal-footer border-0 p-3">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="certificate-modal4" tabindex="-1" aria-labelledby="certificate-modal4Label"
        aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ratio ratio-16x9">
                    <img class="" src="img-webp/certificate4.webp" alt="certificate4" data-loaded="true">
                </div>
                <div class="modal-footer border-0 p-3">
                </div>
            </div>
        </div>
    </div>
</body>
<script src="js/bootstrap.min.js"></script>
<script src="js/splide-min.js"></script>
<script src="js/main.js"></script>
<script>
    jQuery(document).ready(function () {
        jQuery('#fullname').on('input', function () {
            var inputVal = jQuery(this).val();
            // Use a regex to allow only letters and spaces
            var validName = /^[a-zA-Z\s]*$/;

            // If the input doesn't match the allowed characters, remove the invalid ones
            if (!validName.test(inputVal)) {
                jQuery(this).val(inputVal.replace(/[^a-zA-Z\s]/g, ''));
            }
        });
    });
</script>

<script>
    jQuery(document).ready(function () {
        jQuery('#phone').on('keypress', function (event) {
            var charCode = event.which;
            // Check if the entered key is a number or not
            if (!(charCode >= 48 && charCode <= 57)) {
                event.preventDefault();
            }
            // Check if the length of input is already 12, if so, prevent further input
            if (jQuery(this).val().length >= 12) {
                event.preventDefault();
            }
        });
    });

</script>
<script>
    jQuery(document).ready(function () {
        jQuery('#stealthdidtallp').on('submit', function (event) {
            if (jQuery('#stealthdigitallp').val() === "Service*") {
                alert("Please select a valid service.");
                event.preventDefault();
            }
        });
    });

</script>

</html>