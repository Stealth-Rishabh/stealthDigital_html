import React from "react";
import { LogoImage } from "@/data";

const Footer = () => {
  const { light } = LogoImage;
  return (
    <footer className="footer_1">
      <div className="container">
        <div className="row">
          <div className="col-lg-5 col-sm-6 col-md-5">
            <aside className="widget aboutwidget">
              <a href="/">
                <img src={light} alt="" />
              </a>
              <p>
                Welcome to our web design agency. Lorem ipsum is simply free
                text dolor sit amet consectetur adipisicing elit. Tempore
                corrupti temporibus fuga earum asperiores, alias excepturi sit
                mpedit fugit laudantium.
              </p>
            </aside>
          </div>
          <div className="col-lg-4 col-sm-4 col-md-4">
            <aside className="widget contact_widgets">
              <h3 className="widget_title">contact</h3>
              <p>
                66 Broklyn Street, New York
                <br />
                United States of America
              </p>
              <p>P: 666 888 000</p>
              <p>
                E: <a href="#">needhelp@meipaly.com</a>
              </p>
            </aside>
          </div>
          <div className="col-lg-3 col-sm-2 col-md-3">
            <aside className="widget social_widget">
              <h3 className="widget_title">social</h3>
              <ul>
                <li>
                  <a href="#">
                    <i className="fa fa-twitter"></i>Twitter
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i className="fa fa-facebook-square"></i>Facebook
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i className="fa fa-youtube-play"></i>Youtube
                  </a>
                </li>
              </ul>
            </aside>
          </div>
        </div>
        <div className="row">
          <div className="col-lg-12 col-sm-12 text-center">
            <div className="copyright">
              © copyright {new Date().getFullYear()} by{" "}
              <a href="#">Layerdrops.com</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "Stealth Digital",
  "image": "https://www.stealthdigital.in/assets/images/logo.png",
  "url": "https://www.stealthdigital.in/",
  "telephone": "+91-87001 81135",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "304, Best Sky Tower, Netaji Subhash Place",
    "addressLocality": "Delhi",
    "postalCode": "110034",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 28.6922865,
    "longitude": 77.14901069999999
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "09:30",
    "closes": "19:00"
  },
  "sameAs": [
    "https://www.facebook.com/StealthDigital.SD/",
    "https://www.instagram.com/digital_marketing_stealth/",
    "https://www.linkedin.com/company/stealth-digitaly/"
  ] 
}
</script>
  );
};

export default Footer;
