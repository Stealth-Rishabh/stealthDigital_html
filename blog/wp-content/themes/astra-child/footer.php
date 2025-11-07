<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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
        <!-- ==== footer start ==== -->
        <footer
          class="footer section pb-0"
          data-background="/assets/images/footer/footer-bg.png"
        >
          <div class="container">
            <div class="row gaper">
              <div class="col-12 col-lg-5 col-xl-6">
                <div class="footer__single">
                  <a href="/" class="logo">
                    <img
                      src="/assets/images/logo.png"
                      alt="Stealth Digital Logo"
                    />
                  </a>
                  <div class="footer__single-meta">
                    <a
                      href="https://maps.app.goo.gl/V4wAodQUjrUmepMMA"
                      target="_blank"
                    >
                      <i class="fa-sharp fa-solid fa-location-dot"></i>
                      304, Best Sky Tower, Netaji Subhash Place, Pitampura,
                      Delhi, 110034
                    </a>
                    <a href="tel:918700181135">
                      <i class="fa-sharp fa-solid fa-phone-volume"></i>
                      918700181135
                    </a>
                    <a href="mailto:rishabh@stealthdigital.in">
                      <i class="fa-sharp fa-solid fa-envelope"></i>
                      rishabh@stealthdigital.in
                    </a>
                  </div>
                  <div class="footer__cta text-start">
                    <a href="https://www.stealthdigital.in/contact-us.html" class="btn btn--secondary"
                      >Book an appointment</a
                    >
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-2 col-xl-2">
                <div class="footer__single">
                  <div class="footer__single-intro">
                    <h5>Discover</h5>
                  </div>
                  <div class="footer__single-content">
                    <ul>
                      <li><a href="/">Home</a></li>
                      <li><a href="https://www.stealthdigital.in/about-us.html">About Us</a></li>
                      <li>
                        <a href="https://www.stealthdigital.in/search-engine-marketing.html">Services</a>
                      </li>
                      <li><a href="https://www.stealthdigital.in/blog">Blogs</a></li>
                      <li><a href="https://www.stealthdigital.in/contact-us.html">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-5 col-xl-4">
                <div class="footer__single">
                  <div class="footer__single-intro">
                    <h5>Subscribe to Our Newsletter</h5>
                  </div>
                  <div class="footer__single-content">
                    <p>
                      Stay updated with the latest digital marketing trends and
                      strategies. Subscribe to our newsletter for insights and
                      tips.
                    </p>
                    <div class="footer__single-form">
                      <form id="newsletterForm" action="#" method="post">
                        <div class="input-email">
                          <input
                            type="email"
                            name="subscribe-news"
                            id="subscribeNews"
                            placeholder="Enter Your Email"
                            required
                          />
                          <button type="submit" class="subscribe">
                            <i class="fa-sharp fa-solid fa-paper-plane"></i>
                          </button>
                        </div>
                        <!-- Thank you message -->
                        <div
                          id="thankYouMessage"
                          style="display: none; margin-top: 10px"
                        >
                          Thank you for subscribing!
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="footer__copyright">
                  <div class="row align-items-center gaper">
                    <div class="col-12 col-lg-8">
                      <div
                        class="footer__copyright-text text-center text-lg-start"
                      >
                        <p>
                          Copyright &copy;
                          <span id="copyYear"></span>
                          by Stealth Digital. All Rights Reserved
                        </p>
                      </div>
                    </div>
                    <div class="col-12 col-lg-4">
                      <div
                        class="social justify-content-center justify-content-lg-end"
                      >
                        <a
                          href="https://www.facebook.com/people/Stealth-Digital-SD/61560966751733/"
                          target="_blank"
                        >
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a
                          href="https://www.linkedin.com/company/stealth-digitaly/"
                          target="_blank"
                        >
                          <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a
                          href="https://www.instagram.com/digital_marketing_stealth/"
                          target="_blank"
                        >
                          <i class="fa-brands fa-instagram"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- ==== / footer end ==== -->
      </div>
    </div>
<!-- ==== scroll to top start ==== -->
    <button
      class="progress-wrap"
      aria-label="scroll indicator"
      title="go to top"
    >
      <span></span>
      <svg
        class="progress-circle svg-content"
        width="100%"
        height="100%"
        viewBox="-1 -1 102 102"
      >
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
    </button>
    <!-- ==== / scroll to top end ==== -->

    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="/assets/vendor/jquery/jquery-3.7.0.min.js"></script>
    <!-- bootstrap five js -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="/assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="/assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js"></script>
    <!-- slick js -->
    <script src="/assets/vendor/slick/js/slick.min.js"></script>
    <!-- image loaded js -->
    <script src="/assets/vendor/images-loaded/imagesloaded.pkgd.min.js"></script>
    <!-- isotope js -->
    <script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- chroma js -->
    <script src="/assets/vendor/gsap/chroma.min.js"></script>
    <!-- splittext js -->
    <script src="/assets/vendor/gsap/SplitText.min.js"></script>
    <!-- scrollsmoother js -->
    <script src="/assets/vendor/gsap/ScrollSmoother.min.js"></script>
    <!-- scrollto js -->
    <script src="/assets/vendor/gsap/ScrollToPlugin.min.js"></script>
    <!-- scrolltrigger js -->
    <script src="/assets/vendor/gsap/ScrollTrigger.min.js"></script>
    <!-- gsap js -->
    <script src="/assets/vendor/gsap/gsap.min.js"></script>
    <!-- vanilla tilt js -->
    <script src="/assets/vendor/vanilla-tilt/tilt.jquery.js"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- plugins js -->
    <script src="/assets/js/plugins.js"></script>
    <!-- main js -->
    <script src="/assets/js/main.js"></script>

    <!-- function for the shareable link of social media handles -->
    <script>
      // URL to be shared
      const blogUrl =
        "https://www.stealthdigital.in/blog/improve-social-media-engagement.html";

      // Function for sharing on Facebook
      function shareOnFacebook() {
        const facebookUrl = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(
          blogUrl
        )}`;
        window.open(facebookUrl, "_blank", "width=600,height=400");
      }

      // Function for sharing on LinkedIn
      function shareOnLinkedIn() {
        const linkedinUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(
          blogUrl
        )}`;
        window.open(linkedinUrl, "_blank", "width=600,height=400");
      }

      // Function for Instagram (Copy to Clipboard)
      function shareOnInstagram() {
        if (navigator.clipboard) {
          navigator.clipboard
            .writeText(blogUrl)
            .then(function () {
              alert(
                "Blog URL copied to clipboard. You can paste it in your Instagram bio or Stories."
              );
            })
            .catch(function (err) {
              console.error("Failed to copy text: ", err);
              alert("Oops! Something went wrong while copying the URL.");
            });
        } else {
          console.error("Clipboard API is not supported by this browser.");
          alert(
            "Your browser does not support the Clipboard API. Please copy the URL manually."
          );
        }
      }
    </script>
<?php
wp_footer();
?>
  </body>
</html>
