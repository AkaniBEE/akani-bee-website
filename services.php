<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>BEE Verification & Compliance Services | Akani BEE Ratings</title>
<meta name="description" content="Professional B-BBEE verification, compliance, evidence collation, gap analysis & enterprise development services across South Africa.">
<meta name="keywords" content="BEE verification services South Africa, B-BBEE compliance services, BEE consulting, evidence collation BEE, enterprise and supplier development BEE, affordable BEE verification services">
<meta property="og:title" content="BEE Verification & Compliance Services | Akani BEE Ratings">
<meta property="og:description" content="Full-spectrum B-BBEE services including verification, compliance consulting, evidence collation, and BEE training across South Africa.">
<meta property="og:url" content="https://akanibee.co.za/services.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Our Services';
$page_subtitle = 'Comprehensive B-BBEE services to help your business grow and comply.';
$breadcrumbs = [['label' => 'Services'], ['label' => 'Our Offerings']];
$hero_bg = 'images/background/what-we-offer.jpg';
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
          <p class="mt-3 text-muted-foreground leading-relaxed">Join us for a podcast or training session where we help you understand the dynamics around BEE. Should you need to have better knowledge of the codes, Akani is here for you.</p>
          <a href="contact.php" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-primary hover:text-primary-hover transition-colors">
            Get started <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Banner -->
<section class="relative py-16 overflow-hidden">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/background/image-4.jpg')"></div>
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4"><i data-lucide="handshake" class="w-8 h-8 text-primary"></i></div>
        <h3 class="text-lg font-bold text-white">Integrity</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4"><i data-lucide="briefcase" class="w-8 h-8 text-primary"></i></div>
        <h3 class="text-lg font-bold text-white">Professionalism</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4"><i data-lucide="medal" class="w-8 h-8 text-primary"></i></div>
        <h3 class="text-lg font-bold text-white">Quality</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4"><i data-lucide="users" class="w-8 h-8 text-primary"></i></div>
        <h3 class="text-lg font-bold text-white">Client Focus</h3>
      </div>
    </div>
  </div>
</section>

<?php
$faq_eyebrow = 'Questions';
$faq_heading = 'B-BBEE Verification FAQs';
$faq_subheading = 'Common questions about our B-BBEE verification and compliance services.';
$faq_items = [
  ['q' => 'How long does B-BBEE verification take?', 'a' => 'A typical B-BBEE verification takes 2 to 4 weeks from the time all required evidence is submitted, depending on the size of your entity and the completeness of your documentation. EME affidavits are immediate, while QSE and large enterprise verifications involve evidence review and a site visit.'],
  ['q' => 'What documents do I need for a B-BBEE verification?', 'a' => 'You will typically need your financial statements, a fixed asset register, shareholding and ownership records, payroll and skills development data, procurement records, and evidence of any enterprise and supplier development or socio-economic development contributions. Our team provides a full evidence checklist tailored to your scorecard.'],
  ['q' => 'How much does a B-BBEE certificate cost?', 'a' => 'The cost depends on your entity size and turnover. Exempted Micro Enterprises (EMEs) generally only need an affidavit, while QSE and large enterprise verifications are priced according to scope. Contact us for a free, no-obligation quote for your business.'],
  ['q' => 'Is Akani BEE Ratings SANAS accredited?', 'a' => 'Yes. Akani BEE Ratings is a SANAS-accredited B-BBEE verification agency, so the certificates we issue are recognised across all sectors and by government and corporate procurement processes throughout South Africa.'],
  ['q' => 'How long is a B-BBEE certificate valid?', 'a' => 'A B-BBEE verification certificate is valid for 12 months from the date of issue. EME and QSE affidavits are also valid for one year, after which they must be renewed to keep your compliance status current.'],
];
include 'includes/faq-section.php';
?>

<?php include 'includes/footer.php'; ?>
</body>
</html>
