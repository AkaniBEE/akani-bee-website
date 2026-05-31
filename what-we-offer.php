<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Verification Services & Training | Akani BEE Ratings</title>
<meta name="description" content="B-BBEE verification services including BEE certificates, evidence collation, gap analysis, and training. Trusted across South Africa.">
<meta name="keywords" content="B-BBEE verification services, BEE compliance services, evidence collation BEE, BEE gap analysis, BEE training South Africa, BEE scorecard assistance, BEE certificate services South Africa">
<meta property="og:title" content="B-BBEE Verification Services | Akani BEE Ratings">
<meta property="og:description" content="Comprehensive B-BBEE verification, evidence collation, gap analysis, and BEE training services for businesses of all sizes across South Africa.">
<meta property="og:url" content="https://akanibee.co.za/what-we-offer.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'What We Offer';
$page_subtitle = 'Comprehensive B-BBEE services tailored for businesses of all sizes.';
$breadcrumbs = [['label' => 'Services'], ['label' => 'Our Offerings']];
$hero_bg = 'images/background/what-we-offer.png';
include 'includes/page-hero.php';
?>

<!-- Services Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Our Services</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">What We Offer</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <!-- B-BBEE Verifications -->
      <div class="group relative rounded-2xl bg-white border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
        <div class="p-8">
          <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300">
            <i data-lucide="shield-check" class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-xl font-bold text-secondary">B-BBEE Verifications</h3>
          <p class="mt-3 text-muted-foreground leading-relaxed">New certifications and renewals. Size does not matter; our team will verify what you implemented in the financial year.</p>
          <a href="contact.php" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-primary hover:text-primary-hover transition-colors">
            Get started <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- BEE Training -->
      <div class="group relative rounded-2xl bg-white border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
        <div class="p-8">
          <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300">
            <i data-lucide="presentation" class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-xl font-bold text-secondary">BEE Training and Insights</h3>
          <p class="mt-3 text-muted-foreground leading-relaxed">Join us for a podcast or training session where we help you understand the dynamics around BEE. Should you need to have better knowledge of the Codes, we are here for you.</p>
          <a href="contact.php" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-primary hover:text-primary-hover transition-colors">
            Get started <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="relative py-20 overflow-hidden">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/background/image-4.png')"></div>
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl sm:text-4xl font-bold text-white">Ready to Get Started?</h2>
    <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">Contact us today to discuss your B-BBEE verification needs and how we can help your business grow.</p>
    <a href="contact.php" class="inline-flex items-center gap-2 mt-8 px-8 py-4 bg-primary text-white font-semibold rounded-lg hover:bg-primary-hover transition-all duration-200 shadow-lg hover:shadow-xl text-lg">
      Build With AKANI <i data-lucide="arrow-right" class="w-5 h-5"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
