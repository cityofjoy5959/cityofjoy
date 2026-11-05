<?php
// seo_helper.php - Centralized High-Performance SEO & Rich Snippets Manager

if (!function_exists('get_base_url')) {
    function get_base_url() {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost:8000';
        return rtrim($protocol . $host, '/');
    }
}

function render_seo_tags($page = 'home', $custom = []) {
    $baseUrl = get_base_url();

    // Default configuration library per page
    $defaults = [
        'home' => [
            'title' => 'Male Doorstep Massage in Kolkata | City of Joy Therapy | Home & Hotel Service',
            'description' => 'Professional doorstep & hotel male massage therapy across Kolkata. Certified male therapists offering Deep Tissue, Reflexology, and Body Scrubbing at fixed rates from ₹799.',
            'keywords' => 'male massage kolkata, male to male massage kolkata, doorstep massage in kolkata, hotel massage service kolkata, male therapist kolkata, body massage for men kolkata, deep tissue massage kolkata, home spa service kolkata, reflexology kolkata, body scrubbing kolkata, salt lake massage, new town massage, park street massage',
            'canonical' => $baseUrl . '/',
            'og_type' => 'website',
            'og_image' => $baseUrl . '/assets/hero_spa_male_massage.jpg',
            'og_image_alt' => 'Professional Doorstep Male Massage Therapy in Kolkata - City of Joy Therapy',
            'schemas' => ['LocalBusiness', 'FAQPage', 'WebSite']
        ],
        'about' => [
            'title' => 'About Us | City of Joy Therapy Kolkata | Certified Male Massage Therapists',
            'description' => 'Learn about City of Joy Therapy - Kolkata\'s premier male-to-male doorstep massage and wellness sanctuary. Discrete, hygienic, certified male therapists at your home or hotel.',
            'keywords' => 'about city of joy therapy, male massage therapists kolkata, professional male masseurs kolkata, discreet doorstep massage salt lake, hotel room massage kolkata',
            'canonical' => $baseUrl . '/about',
            'og_type' => 'article',
            'og_image' => $baseUrl . '/assets/hero_spa_male_massage.jpg',
            'og_image_alt' => 'Certified Male Therapists at City of Joy Therapy Kolkata',
            'schemas' => ['BreadcrumbList', 'AboutPage']
        ],
        'services' => [
            'title' => 'Male Massage Services & Rates Kolkata | Deep Tissue, Reflexology, Body Scrub',
            'description' => 'Explore our male massage therapies in Kolkata: Deep Tissue, Head & Foot Reflexology, Body Scrubbing, and Men\'s Wellness Therapy. Fixed rates: ₹799 (60m) & ₹999 (90m).',
            'keywords' => 'male massage price kolkata, deep tissue massage kolkata, male body scrub kolkata, reflexology massage kolkata, doorstep massage rates kolkata, hotel spa service rates kolkata',
            'canonical' => $baseUrl . '/services',
            'og_type' => 'website',
            'og_image' => $baseUrl . '/assets/service_deep_tissue.jpg',
            'og_image_alt' => 'Doorstep Male Massage Services in Kolkata',
            'schemas' => ['BreadcrumbList', 'ServiceList']
        ],
        'privacy' => [
            'title' => 'Privacy Policy | City of Joy Therapy Kolkata',
            'description' => 'Review the privacy policy of City of Joy Therapy. Learn how we safeguard your personal details, booking discretion, and communication data.',
            'keywords' => 'privacy policy, confidentiality, discrete massage service kolkata',
            'canonical' => $baseUrl . '/privacy-policy',
            'og_type' => 'website',
            'og_image' => $baseUrl . '/assets/hero_spa_male_massage.jpg',
            'og_image_alt' => 'City of Joy Therapy Privacy Policy',
            'schemas' => ['BreadcrumbList']
        ],
        'terms' => [
            'title' => 'Terms & Conditions | City of Joy Therapy Kolkata',
            'description' => 'Read the terms and conditions for booking doorstep and hotel male massage sessions with City of Joy Therapy in Kolkata.',
            'keywords' => 'terms and conditions, booking terms, doorstep massage policy kolkata',
            'canonical' => $baseUrl . '/terms-and-conditions',
            'og_type' => 'website',
            'og_image' => $baseUrl . '/assets/hero_spa_male_massage.jpg',
            'og_image_alt' => 'City of Joy Therapy Terms and Conditions',
            'schemas' => ['BreadcrumbList']
        ]
    ];

    $cfg = array_merge($defaults[$page] ?? $defaults['home'], $custom);

    // Primary Meta Tags
    echo "\n  <!-- Primary SEO Meta Tags -->\n";
    echo "  <title>" . htmlspecialchars($cfg['title'], ENT_QUOTES, 'UTF-8') . "</title>\n";
    echo "  <meta name=\"description\" content=\"" . htmlspecialchars($cfg['description'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta name=\"keywords\" content=\"" . htmlspecialchars($cfg['keywords'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta name=\"author\" content=\"City of Joy Therapy\">\n";
    echo "  <meta name=\"robots\" content=\"index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1\">\n";
    echo "  <link rel=\"canonical\" href=\"" . htmlspecialchars($cfg['canonical'], ENT_QUOTES, 'UTF-8') . "\">\n";

    // Local SEO & Geo Meta Tags for Kolkata
    echo "\n  <!-- Local SEO Geotags for Kolkata -->\n";
    echo "  <meta name=\"geo.region\" content=\"IN-WB\">\n";
    echo "  <meta name=\"geo.placename\" content=\"Kolkata\">\n";
    echo "  <meta name=\"geo.position\" content=\"22.5726;88.3639\">\n";
    echo "  <meta name=\"ICBM\" content=\"22.5726, 88.3639\">\n";

    // Open Graph / Facebook Meta Tags
    echo "\n  <!-- Open Graph / Facebook -->\n";
    echo "  <meta property=\"og:type\" content=\"" . htmlspecialchars($cfg['og_type'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:site_name\" content=\"City of Joy Therapy\">\n";
    echo "  <meta property=\"og:title\" content=\"" . htmlspecialchars($cfg['title'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:description\" content=\"" . htmlspecialchars($cfg['description'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:url\" content=\"" . htmlspecialchars($cfg['canonical'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:image\" content=\"" . htmlspecialchars($cfg['og_image'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:image:width\" content=\"1200\">\n";
    echo "  <meta property=\"og:image:height\" content=\"630\">\n";
    echo "  <meta property=\"og:image:alt\" content=\"" . htmlspecialchars($cfg['og_image_alt'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta property=\"og:locale\" content=\"en_IN\">\n";

    // Twitter Cards
    echo "\n  <!-- Twitter Card -->\n";
    echo "  <meta name=\"twitter:card\" content=\"summary_large_image\">\n";
    echo "  <meta name=\"twitter:title\" content=\"" . htmlspecialchars($cfg['title'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta name=\"twitter:description\" content=\"" . htmlspecialchars($cfg['description'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta name=\"twitter:image\" content=\"" . htmlspecialchars($cfg['og_image'], ENT_QUOTES, 'UTF-8') . "\">\n";
    echo "  <meta name=\"twitter:image:alt\" content=\"" . htmlspecialchars($cfg['og_image_alt'], ENT_QUOTES, 'UTF-8') . "\">\n";

    // Schema.org Structured Data (JSON-LD)
    render_json_ld_schemas($cfg['schemas'], $baseUrl, $cfg);
}

function render_json_ld_schemas($schemas, $baseUrl, $cfg) {
    if (empty($schemas)) return;

    $scripts = [];

    // 1. HealthAndBeautyBusiness (LocalBusiness) Schema
    if (in_array('LocalBusiness', $schemas)) {
        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'HealthAndBeautyBusiness',
            '@id' => $baseUrl . '/#business',
            'name' => 'City of Joy Therapy',
            'alternateName' => ['City of Joy Therapy Kolkata', 'City of Joy Male Massage Kolkata'],
            'url' => $baseUrl . '/',
            'logo' => $baseUrl . '/assets/city_of_joy_therapy_logo_full.png',
            'image' => $baseUrl . '/assets/hero_spa_male_massage.jpg',
            'description' => 'Premier doorstep and hotel male massage therapy and body scrub sanctuary in Kolkata. Certified male therapists, natural botanical oils, and 100% discretion.',
            'telephone' => '+919830414714',
            'priceRange' => '₹799 - ₹999',
            'currenciesAccepted' => 'INR',
            'paymentAccepted' => 'Cash, UPI, Online',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Kolkata',
                'addressRegion' => 'West Bengal',
                'addressCountry' => 'IN'
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 22.5726,
                'longitude' => 88.3639
            ],
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    'opens' => '08:00',
                    'closes' => '23:00'
                ]
            ],
            'areaServed' => [
                ['@type' => 'AdministrativeArea', 'name' => 'Kolkata'],
                ['@type' => 'AdministrativeArea', 'name' => 'Salt Lake (Bidhannagar)'],
                ['@type' => 'AdministrativeArea', 'name' => 'New Town'],
                ['@type' => 'AdministrativeArea', 'name' => 'Park Street'],
                ['@type' => 'AdministrativeArea', 'name' => 'Ballygunge'],
                ['@type' => 'AdministrativeArea', 'name' => 'Alipore'],
                ['@type' => 'AdministrativeArea', 'name' => 'Rajarhat'],
                ['@type' => 'AdministrativeArea', 'name' => 'Gariahat'],
                ['@type' => 'AdministrativeArea', 'name' => 'South Kolkata'],
                ['@type' => 'AdministrativeArea', 'name' => 'North Kolkata']
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'Therapeutic Male Massage Services',
                'itemListElement' => [
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Deep Tissue Massage (60 min)',
                            'description' => 'Targeted deep pressure therapy engineered to relieve severe muscle tension, back knots, and physical fatigue.'
                        ],
                        'price' => '799',
                        'priceCurrency' => 'INR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Deep Tissue Massage (90 min)',
                            'description' => 'Extended deep muscle recovery and tension release with therapeutic warm essential oils.'
                        ],
                        'price' => '999',
                        'priceCurrency' => 'INR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Head & Foot Reflexology (60 min)',
                            'description' => 'Scalp acupressure combined with sole pressure point reflexology to melt mental stress.'
                        ],
                        'price' => '799',
                        'priceCurrency' => 'INR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Rejuvenating Body Scrubbing (60 min)',
                            'description' => 'Full-body exfoliation removing dead skin cells and restoring smooth vitality.'
                        ],
                        'price' => '799',
                        'priceCurrency' => 'INR'
                    ],
                    [
                        '@type' => 'Offer',
                        'itemOffered' => [
                            '@type' => 'Service',
                            'name' => 'Men\'s Full Body Relaxation Therapy (60 min)',
                            'description' => 'Full-body Swedish and aromatherapy fusion designed for complete peace of mind.'
                        ],
                        'price' => '799',
                        'priceCurrency' => 'INR'
                    ]
                ]
            ],
            'aggregateRating' => [
                '@type' => 'AggregateRating',
                'ratingValue' => '4.9',
                'reviewCount' => '284',
                'bestRating' => '5',
                'worstRating' => '1'
            ],
            'sameAs' => [
                'https://instagram.com',
                'https://facebook.com'
            ]
        ];
    }

    // 2. FAQPage Schema (Enables Google Search Result Accordions)
    if (in_array('FAQPage', $schemas)) {
        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'How can I view therapist profiles and photos?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Once you send your session preferences via WhatsApp (+91 9830414714), our coordinator shares available therapist profiles, experience details, and photos confidentially for your review and selection.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is hotel room service available in Kolkata?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Certified male therapists arrive discretely at your specified hotel room anywhere in Kolkata (Park Street, Salt Lake, New Town, Airport hotels, etc.).'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What are the exact rates for doorstep massage?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our prices are strictly fixed with no hidden fees: 60 Minutes Session is ₹799, and 90 Minutes Session is ₹999.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What payment modes are accepted?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We accept payment post-service via UPI (Google Pay, PhonePe, Paytm) or Cash directly to the therapist.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I book a session via WhatsApp?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Absolutely! Simply message us on WhatsApp (+91 9830414714) to chat directly with our coordinator for instantaneous slot inquiries, therapist selection, and confirmations.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Are your oils and botanicals safe for sensitive skin?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. All our carrier oils are 100% cold-pressed organic jojoba, coconut, and sweet almond formulations, free of synthetic fragrances, parabens, and mineral oils. Fragrance-free alternatives are always available upon request.'
                    ]
                ]
            ]
        ];
    }

    // 3. WebSite Schema
    if (in_array('WebSite', $schemas)) {
        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            '@id' => $baseUrl . '/#website',
            'url' => $baseUrl . '/',
            'name' => 'City of Joy Therapy',
            'description' => 'Male doorstep and hotel massage therapy in Kolkata',
            'inLanguage' => 'en-IN'
        ];
    }

    // 4. BreadcrumbList Schema (for subpages)
    if (in_array('BreadcrumbList', $schemas)) {
        $breadcrumbs = [
            [
                '@type' => 'ListItem',
                'position' => 1,
                'name' => 'Home',
                'item' => $baseUrl . '/'
            ]
        ];

        if (strpos($cfg['canonical'], '/services') !== false) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Services & Rates',
                'item' => $baseUrl . '/services'
            ];
        } elseif (strpos($cfg['canonical'], '/about') !== false) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'About Us',
                'item' => $baseUrl . '/about'
            ];
        } elseif (strpos($cfg['canonical'], '/privacy-policy') !== false) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Privacy Policy',
                'item' => $baseUrl . '/privacy-policy'
            ];
        } elseif (strpos($cfg['canonical'], '/terms-and-conditions') !== false) {
            $breadcrumbs[] = [
                '@type' => 'ListItem',
                'position' => 2,
                'name' => 'Terms & Conditions',
                'item' => $baseUrl . '/terms-and-conditions'
            ];
        }

        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $breadcrumbs
        ];
    }

    // 5. ServiceList Schema for services page
    if (in_array('ServiceList', $schemas)) {
        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'name' => 'Male Doorstep Massage Therapies Kolkata',
            'description' => 'Comprehensive doorstep massage menu and fixed pricing for home and hotel sessions in Kolkata',
            'itemListElement' => [
                [
                    '@type' => 'Service',
                    'name' => 'Deep Tissue Massage',
                    'serviceType' => 'Deep Tissue Massage Therapy',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'City of Joy Therapy'
                    ],
                    'areaServed' => 'Kolkata, West Bengal',
                    'offers' => [
                        ['@type' => 'Offer', 'name' => 'Standard (60 min)', 'price' => '799', 'priceCurrency' => 'INR'],
                        ['@type' => 'Offer', 'name' => 'Extended (90 min)', 'price' => '999', 'priceCurrency' => 'INR']
                    ]
                ],
                [
                    '@type' => 'Service',
                    'name' => 'Head & Foot Reflexology',
                    'serviceType' => 'Acupressure & Reflexology Therapy',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'City of Joy Therapy'
                    ],
                    'areaServed' => 'Kolkata, West Bengal',
                    'offers' => [
                        ['@type' => 'Offer', 'name' => 'Standard (60 min)', 'price' => '799', 'priceCurrency' => 'INR'],
                        ['@type' => 'Offer', 'name' => 'Extended (90 min)', 'price' => '999', 'priceCurrency' => 'INR']
                    ]
                ],
                [
                    '@type' => 'Service',
                    'name' => 'Rejuvenating Body Scrubbing',
                    'serviceType' => 'Exfoliation & Body Scrub',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'City of Joy Therapy'
                    ],
                    'areaServed' => 'Kolkata, West Bengal',
                    'offers' => [
                        ['@type' => 'Offer', 'name' => 'Standard (60 min)', 'price' => '799', 'priceCurrency' => 'INR'],
                        ['@type' => 'Offer', 'name' => 'Extended (90 min)', 'price' => '999', 'priceCurrency' => 'INR']
                    ]
                ],
                [
                    '@type' => 'Service',
                    'name' => 'Men\'s Full Body Relaxation Therapy',
                    'serviceType' => 'Swedish & Relaxation Massage',
                    'provider' => [
                        '@type' => 'LocalBusiness',
                        'name' => 'City of Joy Therapy'
                    ],
                    'areaServed' => 'Kolkata, West Bengal',
                    'offers' => [
                        ['@type' => 'Offer', 'name' => 'Standard (60 min)', 'price' => '799', 'priceCurrency' => 'INR'],
                        ['@type' => 'Offer', 'name' => 'Extended (90 min)', 'price' => '999', 'priceCurrency' => 'INR']
                    ]
                ]
            ]
        ];
    }

    // 6. AboutPage Schema
    if (in_array('AboutPage', $schemas)) {
        $scripts[] = [
            '@context' => 'https://schema.org',
            '@type' => 'AboutPage',
            '@id' => $baseUrl . '/about#webpage',
            'url' => $baseUrl . '/about',
            'name' => 'About City of Joy Therapy',
            'description' => 'Dedicated to professional, hygienic, and discrete doorstep male massage therapy across Kolkata.',
            'mainEntity' => [
                '@type' => 'HealthAndBeautyBusiness',
                'name' => 'City of Joy Therapy',
                'url' => $baseUrl . '/'
            ]
        ];
    }

    // Output all JSON-LD blocks
    echo "\n  <!-- Schema.org Rich Structured Data (JSON-LD) -->\n";
    foreach ($scripts as $data) {
        echo "  <script type=\"application/ld+json\">\n";
        echo json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        echo "\n  </script>\n";
    }
}
?>
