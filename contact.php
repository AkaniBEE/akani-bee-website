<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Contact Akani BEE Ratings | B-BBEE Verification Agency Sandton</title>
<meta name="description" content="Contact Akani BEE Ratings in Sandton for B-BBEE verification and BEE certificates. Call +27 83 459 1583 or email info@akanibee.co.za.">
<meta name="keywords" content="contact BEE verification agency, BEE verification agency Sandton, BEE agency near me, B-BBEE verification Sunninghill, BEE consultants Gauteng">
<meta property="og:title" content="Contact Akani BEE Ratings | B-BBEE Verification Agency Sandton">
<meta property="og:description" content="Get in touch with our B-BBEE verification team in Sunninghill, Sandton. Professional support for BEE certificates and compliance.">
<meta property="og:url" content="https://akanibee.co.za/contact.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Contact Us';
$page_subtitle = 'Reach out for B-BBEE verification inquiries, guidance, or any questions you might have.';
$breadcrumbs = [['label' => 'Contact Us']];
$hero_bg = 'images/background/contact-bg.png';
include 'includes/page-hero.php';
?>

<!-- Contact Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20">

      <!-- Contact Form -->
      <div>
        <span class="text-primary text-sm font-semibold tracking-wider uppercase">Send a Message</span>
        <h2 class="mt-3 text-3xl font-bold text-secondary">Send Us a Message</h2>
        <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>
        <p class="mt-4 text-muted-foreground">Reach out for B-BBEE verification inquiries, guidance, or any questions you might have.</p>

        <form method="post" action="sendemailcontact.php" id="contact-form" class="mt-8 space-y-6">
          <!-- CossUI Field: Name -->
          <div class="coss-field">
            <label for="username" class="coss-label">Name</label>
            <div class="coss-input-wrapper">
              <input type="text" id="username" name="username" placeholder="Your full name" required
                class="coss-input">
            </div>
          </div>
          <!-- CossUI Field: Email -->
          <div class="coss-field">
            <label for="cemail" class="coss-label">Email</label>
            <div class="coss-input-wrapper">
              <input type="email" id="cemail" name="email" placeholder="you@company.com" required
                class="coss-input">
            </div>
            <p class="coss-field-description">We'll never share your email with anyone else.</p>
          </div>
          <!-- CossUI Field: Message -->
          <div class="coss-field">
            <label for="cmessage" class="coss-label">Message</label>
            <div class="coss-input-wrapper">
              <textarea id="cmessage" name="message" rows="5" placeholder="Tell us about your needs..." required
                class="coss-textarea"></textarea>
            </div>
          </div>
          <!-- CossUI Button -->
          <button type="submit" class="coss-btn coss-btn--default coss-btn--lg">
            <i data-lucide="send" class="w-4 h-4"></i> Submit
          </button>
        </form>
      </div>

      <!-- Contact Info Cards -->
      <div>
        <span class="text-primary text-sm font-semibold tracking-wider uppercase">Get in Touch</span>
        <h2 class="mt-3 text-3xl font-bold text-secondary">Contact Info</h2>
        <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>
        <p class="mt-4 text-muted-foreground">Get in touch with us for comprehensive B-BBEE verification and advisory services.</p>

        <div class="mt-8 space-y-5">
          <!-- Address Card -->
          <a href="https://maps.app.goo.gl/xcqFPuyLV9ysQSS4A" target="_blank" rel="noopener" class="group flex items-start gap-5 p-5 rounded-xl border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
              <i data-lucide="map-pin" class="w-6 h-6 text-primary"></i>
            </div>
            <div>
              <h3 class="font-semibold text-secondary">Our Office</h3>
              <p class="mt-1 text-sm text-muted-foreground leading-relaxed">Suite 002, Ground Floor, Block A<br>11 Naivasha Street, Sunninghill<br>Sandton 2191</p>
            </div>
          </a>

          <!-- Phone Card -->
          <div class="flex items-start gap-5 p-5 rounded-xl border border-border">
            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
              <i data-lucide="phone" class="w-6 h-6 text-primary"></i>
            </div>
            <div>
              <h3 class="font-semibold text-secondary">Phone</h3>
              <a href="tel:+27834591583" class="mt-1 text-sm text-muted-foreground hover:text-primary transition-colors block">+27 83 459 1583</a>
              <a href="tel:+27786204360" class="text-sm text-muted-foreground hover:text-primary transition-colors block">+27 78 620 4360</a>
            </div>
          </div>

          <!-- Email Card -->
          <a href="mailto:info@akanibee.co.za" class="group flex items-start gap-5 p-5 rounded-xl border border-border hover:border-primary/30 hover:shadow-lg transition-all duration-300">
            <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
              <i data-lucide="mail" class="w-6 h-6 text-primary"></i>
            </div>
            <div>
              <h3 class="font-semibold text-secondary">Email</h3>
              <p class="mt-1 text-sm text-muted-foreground">info@akanibee.co.za</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="pb-0">
  <div class="w-full h-[400px] lg:h-[500px]">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7232.57016972799!2d28.065413528270025!3d-26.03068509020915!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9573cd5156dc39%3A0x27f30cd2463c62f1!2s11%20Naivasha%20Rd%2C%20Sunninghill%2C%20Johannesburg%2C%202157!5e0!3m2!1sen!2sza!4v1760919407770!5m2!1sen!2sza"
      class="w-full h-full border-0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
