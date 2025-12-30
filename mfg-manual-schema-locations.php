<?php

// Auto-Inject JSON-LD Schema for My Florida Green Location Pages

add_action('wp_head', function () {
  // Get current URL
    $current_url = home_url($_SERVER['REQUEST_URI'
  ]);

    /* -------------------------
       NAPLES SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-naples/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Naples",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-naples/",
      "telephone": "+12393500266",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "3825 Beck Blvd STE 723",
        "addressLocality": "Naples",
        "addressRegion": "FL",
        "postalCode": "34114",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 26.155333,
        "longitude": -81.68229219999999
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
        "opens": "09:00",
        "closes": "17:00"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       ST. PETE SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-st-pete/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Card St. Petersburg",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-st-pete/",
      "telephone": "+17273696230",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "790b 4th Ave S",
        "addressLocality": "St. Petersburg",
        "addressRegion": "FL",
        "postalCode": "33701",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 27.766844,
        "longitude": -82.6443879
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
        "opens": "10:00",
        "closes": "17:30"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       MELBOURNE SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-melbourne/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Card Melbourne",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-melbourne/",
      "telephone": "+13212502828",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2290 W Eau Gallie Blvd #202b",
        "addressLocality": "Melbourne",
        "addressRegion": "FL",
        "postalCode": "32935",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 28.1291962,
        "longitude": -80.6584953
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
        "opens": "09:00",
        "closes": "17:00"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       SARASOTA SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-sarasota/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Card Sarasota",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-sarasota/",
      "telephone": "+19412177273",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "2805 Fruitville Rd suite 250",
        "addressLocality": "Sarasota",
        "addressRegion": "FL",
        "postalCode": "34237",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 27.338661,
        "longitude": -82.5125557
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
        "opens": "10:00",
        "closes": "17:30"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       JACKSONVILLE SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-jacksonville/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Card Jacksonville",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-jacksonville/",
      "telephone": "+19045393180",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "8833 Perimeter Park Blvd ste 503b",
        "addressLocality": "Jacksonville",
        "addressRegion": "FL",
        "postalCode": "32216",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 30.2521944,
        "longitude": -81.555497
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
        "opens": "09:00",
        "closes": "17:00"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       FORT MYERS SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-fort-myers/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green - Medical Marijuana Fort Myers",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-fort-myers/",
      "telephone": "+12393075307",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "13190 N Cleveland Ave UnitB",
        "addressLocality": "Fort Myers",
        "addressRegion": "FL",
        "postalCode": "33903",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 26.660984,
        "longitude": -81.8837709
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
        "opens": "10:00",
        "closes": "17:00"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       HIALEAH SCHEMA
    ------------------------- */
    if (strpos($current_url, '/find-medical-marijuana-doctor-hialeah/') !== false) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalClinic",
      "name": "My Florida Green Medical Marijuana Card Hialeah",
      "image": "https://myfloridagreen.com/wp-content/uploads/2025/06/Header-Home.webp",
      "@id": "https://myfloridagreen.com/",
      "url": "https://myfloridagreen.com/find-medical-marijuana-doctor-hialeah/",
      "telephone": "+13052473171",
      "priceRange": "$99-$169",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1435 W 49th Pl Suite 701b",
        "addressLocality": "Hialeah",
        "addressRegion": "FL",
        "postalCode": "33012",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.8679795,
        "longitude": -80.3113218
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
        "opens": "09:00",
        "closes": "17:00"
      },
      "sameAs": [
        "http://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen_/",
        "https://www.youtube.com/channel/UC_nhjhvAgEtturIzH1D4Bew",
        "https://www.linkedin.com/company/my-florida-green/",
        "https://myfloridagreen.com/"
      ]
    }
        </script>
        <?php
  }
  /* -------------------------
       schema for all locations
    ------------------------- */

    if (
        strpos($current_url, 'florida-medical-marijuana-card-guide') !== false ||
        strpos($current_url, 'find-florida-medical-marijuana-doctor') !== false
    ) {
        ?>
        <script type="application/ld+json">
        {
      "@context": "https://schema.org",
      "@type": "MedicalOrganization",
      "name": "My Florida Green",
      "url": "https://myfloridagreen.com",
      "description": "Statewide medical marijuana evaluations across Florida with licensed physicians serving seven clinic locations, including St. Petersburg, Naples, Sarasota, Fort Myers, Jacksonville, Melbourne, and Hialeah.",
      "logo": "https://myfloridagreen.com/logo.png",
      "sameAs": [
        "https://www.facebook.com/myfloridagreen",
        "https://www.instagram.com/myfloridagreen",
        "https://www.linkedin.com/company/myfloridagreen"
      ],
      "department": [
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Card St. Petersburg",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "790b 4th Ave S",
            "addressLocality": "St. Petersburg",
            "addressRegion": "FL",
            "postalCode": "33701",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Naples",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "3825 Beck Blvd STE 723",
            "addressLocality": "Naples",
            "addressRegion": "FL",
            "postalCode": "34114",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Card Sarasota",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "2805 Fruitville Rd suite 250",
            "addressLocality": "Sarasota",
            "addressRegion": "FL",
            "postalCode": "34237",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Fort Myers",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "13190 N Cleveland Ave UnitB",
            "addressLocality": "Fort Myers",
            "addressRegion": "FL",
            "postalCode": "33903",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Card Jacksonville",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "8833 Perimeter Park Blvd ste 503b",
            "addressLocality": "Jacksonville",
            "addressRegion": "FL",
            "postalCode": "32216",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green - Medical Marijuana Card Melbourne",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "2290 W Eau Gallie Blvd #202b",
            "addressLocality": "Melbourne",
            "addressRegion": "FL",
            "postalCode": "32935",
            "addressCountry": "US"
          }
        },
        {
          "@type": "MedicalClinic",
          "name": "My Florida Green Medical Marijuana Card Hialeah",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "1435 W 49th Pl Suite 701b",
            "addressLocality": "Hialeah",
            "addressRegion": "FL",
            "postalCode": "33012",
            "addressCountry": "US"
          }
        }
      ]
    }
        </script>
        <?php
  }
});