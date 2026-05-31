<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="Akani BEE Ratings (Pty) Ltd">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="geo.region" content="ZA-GT">
<meta name="geo.placename" content="Sandton, Johannesburg">
<meta name="geo.position" content="-26.0367;28.0611">
<meta name="ICBM" content="-26.0367, 28.0611">
<?php
  $canonical_path = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
  $canonical_suffix = ($canonical_path === 'index.php') ? '' : $canonical_path;
?>
<link rel="canonical" href="https://akanibee.co.za/<?= htmlspecialchars($canonical_suffix, ENT_QUOTES, 'UTF-8') ?>">
<link rel="dns-prefetch" href="https://cdn.tailwindcss.com">
<link rel="dns-prefetch" href="https://unpkg.com">
<link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<!-- Open Graph -->
<meta property="og:site_name" content="Akani BEE Ratings">
<meta property="og:locale" content="en_ZA">
<meta property="og:type" content="website">
<meta property="og:image" content="https://akanibee.co.za/images/logo.png">
<!-- Twitter Card -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@AkaniBEE">
<!-- Organization Schema (site-wide) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Organization", "LocalBusiness"],
  "@id": "https://akanibee.co.za/#organization",
  "name": "Akani BEE Ratings (Pty) Ltd",
  "alternateName": "Akani BEE Ratings",
  "url": "https://akanibee.co.za",
  "logo": "https://akanibee.co.za/images/logo.png",
  "image": "https://akanibee.co.za/images/logo.png",
  "description": "SANAS-accredited B-BBEE verification agency in Sandton, Johannesburg providing BEE certificates, compliance services, evidence collation, gap analysis, and BEE training across South Africa.",
  "telephone": ["+27834591583", "+27786204360"],
  "email": "info@akanibee.co.za",
  "foundingDate": "2020",
  "areaServed": {
    "@type": "Country",
    "name": "South Africa"
  },
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Suite 002, Ground Floor, Block A, 11 Naivasha Street",
    "addressLocality": "Sunninghill",
    "addressRegion": "Gauteng",
    "postalCode": "2191",
    "addressCountry": "ZA"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -26.0367,
    "longitude": 28.0611
  },
  "sameAs": [
    "https://twitter.com/AkaniBEE",
    "https://www.linkedin.com/company/akani-bee-ratings"
  ],
  "priceRange": "$$",
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
    "opens": "08:00",
    "closes": "17:00"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "B-BBEE Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "B-BBEE Verification",
          "description": "Comprehensive B-BBEE verification and certification services for EME, QSE, and large enterprises."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Evidence Collation",
          "description": "Expert guidance in compiling and organising B-BBEE scorecard evidence for verification audits."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "BEE Gap Analysis",
          "description": "Strategic gap analysis to identify improvement areas for your B-BBEE scorecard."
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "BEE Training and Insights",
          "description": "Training sessions and insights to help businesses understand B-BBEE codes and compliance."
        }
      }
    ]
  }
}
</script>
<!-- Tailwind CSS CDN -->
<script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        primary: { DEFAULT: '#ce9b01', hover: '#b88a01', light: '#f5e6b8', dark: '#9d7600', foreground: '#ffffff' },
        secondary: { DEFAULT: '#070D32', light: '#1a2255', dark: '#030618' },
        muted: { DEFAULT: '#f5f5f5', foreground: '#737373' },
        accent: { DEFAULT: '#f5f5f5', foreground: '#171717' },
        input: '#e5e5e5',
        ring: '#ce9b01',
        border: '#e5e5e5',
        foreground: '#0a0a0a',
        background: '#ffffff',
        popover: { DEFAULT: '#ffffff', foreground: '#0a0a0a' },
        destructive: { DEFAULT: '#ef4444', foreground: '#b91c1c' },
        success: { DEFAULT: '#22c55e', foreground: '#166534' },
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
      },
      animation: {
        'fade-in': 'fadeIn 0.6s ease-out',
        'slide-up': 'slideUp 0.6s ease-out',
        'slide-down': 'slideDown 0.3s ease-out',
      },
      keyframes: {
        fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
        slideUp: { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
        slideDown: { '0%': { opacity: '0', transform: 'translateY(-10px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
      },
    },
  },
}
</script>
<!-- Google Fonts - Inter -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<!-- Lucide Icons CDN -->
<script src="https://unpkg.com/lucide@latest"></script>
<style>
  * { font-family: 'Inter', system-ui, -apple-system, sans-serif; }
  [x-cloak] { display: none !important; }
  .glass { backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); }
  html { scroll-behavior: smooth; }


  /* === CossUI Form Component Styles === */

  /* CossUI Field wrapper */
  .coss-field {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: 0.5rem;
  }

  /* CossUI Label */
  .coss-label {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 1rem;
    color: var(--tw-foreground, #0a0a0a);
  }
  .coss-label--light {
    color: #d1d5db;
  }

  /* CossUI Input wrapper - replicates the border/ring/shadow pattern */
  .coss-input-wrapper {
    position: relative;
    display: inline-flex;
    width: 100%;
    border-radius: 0.5rem;
    border: 1px solid #e5e5e5;
    background-color: #ffffff;
    color: #0a0a0a;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.03);
    transition: box-shadow 0.15s ease, border-color 0.15s ease;
  }
  .coss-input-wrapper:focus-within {
    border-color: #ce9b01;
    box-shadow: 0 0 0 3px rgba(206, 155, 1, 0.15);
  }
  .coss-input-wrapper:has([aria-invalid="true"]) {
    border-color: rgba(239, 68, 68, 0.36);
  }
  .coss-input-wrapper:has([aria-invalid="true"]):focus-within {
    border-color: rgba(239, 68, 68, 0.64);
    box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
  }
  .coss-input-wrapper:has(:disabled) {
    opacity: 0.64;
  }

  /* Dark variant (for use on dark backgrounds) */
  .coss-input-wrapper--dark {
    border-color: rgba(255, 255, 255, 0.1);
    background-color: rgba(255, 255, 255, 0.08);
    color: #ffffff;
  }
  .coss-input-wrapper--dark:focus-within {
    border-color: #ce9b01;
    box-shadow: 0 0 0 3px rgba(206, 155, 1, 0.2);
  }

  /* CossUI Input element */
  .coss-input {
    height: 2.25rem;
    width: 100%;
    min-width: 0;
    border-radius: inherit;
    padding-left: calc(0.75rem - 1px);
    padding-right: calc(0.75rem - 1px);
    line-height: 2.25rem;
    outline: none;
    background: transparent;
    font-size: 0.875rem;
  }
  .coss-input::placeholder {
    color: rgba(115, 115, 115, 0.72);
  }
  .coss-input--dark::placeholder {
    color: rgba(156, 163, 175, 0.5);
  }
  .coss-input--sm {
    height: 1.875rem;
    padding-left: calc(0.625rem - 1px);
    padding-right: calc(0.625rem - 1px);
    line-height: 1.875rem;
  }
  .coss-input--lg {
    height: 2.5rem;
    line-height: 2.5rem;
  }

  /* CossUI Textarea */
  .coss-textarea {
    width: 100%;
    min-height: 5rem;
    border-radius: inherit;
    padding: calc(0.375rem - 1px) calc(0.75rem - 1px);
    outline: none;
    background: transparent;
    font-size: 0.875rem;
    resize: vertical;
    field-sizing: content;
  }
  .coss-textarea::placeholder {
    color: rgba(115, 115, 115, 0.72);
  }
  .coss-textarea--dark {
    color: #ffffff;
  }
  .coss-textarea--dark::placeholder {
    color: rgba(156, 163, 175, 0.5);
  }

  /* CossUI Select */
  .coss-select {
    height: 2.25rem;
    width: 100%;
    min-width: 0;
    border-radius: inherit;
    padding-left: calc(0.75rem - 1px);
    padding-right: 2rem;
    line-height: 2.25rem;
    outline: none;
    background: transparent;
    font-size: 0.875rem;
    appearance: none;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%23737373' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.25rem 1.25rem;
  }
  .coss-select--dark {
    color: #d1d5db;
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%239ca3af' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
  }
  .coss-select option {
    color: #0a0a0a;
    background: #ffffff;
  }

  /* CossUI Button */
  .coss-btn {
    position: relative;
    display: inline-flex;
    flex-shrink: 0;
    cursor: pointer;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    white-space: nowrap;
    border-radius: 0.5rem;
    border: 1px solid transparent;
    font-weight: 500;
    font-size: 0.875rem;
    outline: none;
    transition: box-shadow 0.15s ease, background-color 0.15s ease, transform 0.1s ease;
  }
  .coss-btn:focus-visible {
    box-shadow: 0 0 0 2px #ffffff, 0 0 0 4px #ce9b01;
  }
  .coss-btn:disabled {
    pointer-events: none;
    opacity: 0.64;
  }
  .coss-btn svg {
    width: 1rem;
    height: 1rem;
    flex-shrink: 0;
    pointer-events: none;
    opacity: 0.8;
  }

  /* CossUI Button - Default (Primary) variant */
  .coss-btn--default {
    height: 2.25rem;
    padding: 0 calc(0.75rem - 1px);
    border-color: #ce9b01;
    background-color: #ce9b01;
    color: #ffffff;
    box-shadow: 0 1px 2px 0 rgba(206, 155, 1, 0.24), inset 0 1px 0 0 rgba(255, 255, 255, 0.16);
  }
  .coss-btn--default:hover {
    background-color: rgba(206, 155, 1, 0.9);
  }
  .coss-btn--default:active {
    background-color: rgba(206, 155, 1, 0.9);
    box-shadow: inset 0 1px 0 0 rgba(0, 0, 0, 0.08);
  }

  /* CossUI Button - Large */
  .coss-btn--lg {
    height: 2.5rem;
    padding: 0 calc(0.875rem - 1px);
    font-size: 1rem;
  }

  /* CossUI Button - Outline variant */
  .coss-btn--outline {
    height: 2.25rem;
    padding: 0 calc(0.75rem - 1px);
    border-color: #e5e5e5;
    background-color: #ffffff;
    color: #0a0a0a;
    box-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.03);
  }
  .coss-btn--outline:hover {
    background-color: rgba(245, 245, 245, 0.5);
  }

  /* CossUI Button - Ghost variant */
  .coss-btn--ghost {
    height: 2.25rem;
    padding: 0 calc(0.75rem - 1px);
    border-color: transparent;
    background-color: transparent;
    color: #0a0a0a;
  }
  .coss-btn--ghost:hover {
    background-color: rgba(245, 245, 245, 0.5);
  }

  /* CossUI Field Description */
  .coss-field-description {
    font-size: 0.75rem;
    color: #737373;
  }

  /* CossUI Field Error */
  .coss-field-error {
    font-size: 0.75rem;
    color: #b91c1c;
  }
</style>
<!-- Alpine.js for interactivity -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
