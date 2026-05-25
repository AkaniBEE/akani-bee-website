<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>About Akani BEE Ratings | B-BBEE Verification Agency Johannesburg</title>
<meta name="description" content="51% Black-owned, Level 2 B-BBEE verification agency in Sandton. Professional BEE verification and compliance services across South Africa.">
<meta name="keywords" content="about Akani BEE Ratings, B-BBEE verification agency Johannesburg, BEE rating agency South Africa, Level 2 BEE agency, Black owned BEE agency">
<meta property="og:title" content="About Akani BEE Ratings | B-BBEE Verification Agency Johannesburg">
<meta property="og:description" content="51% Black-owned, Level 2 B-BBEE verification agency in Sandton providing professional verification and compliance services across South Africa.">
<meta property="og:url" content="https://akanibee.co.za/company-overview.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Company Overview';
$page_subtitle = 'Learn about our mission, vision, and the values that drive Akani BEE Ratings.';
$breadcrumbs = [['label' => 'About'], ['label' => 'Company Overview']];
$hero_bg = 'images/background/bg-page-title-1.png';
include 'includes/page-hero.php';
?>

<!-- About Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

      <!-- Left: Overview -->
      <div>
        <span class="text-primary text-sm font-semibold tracking-wider uppercase">Overview</span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">AKANI BEE Ratings</h2>
        <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>
        <p class="mt-6 text-lg font-medium text-secondary/80">AKANI BEE Ratings (Pty) Ltd is a 51% Black owned B-BBEE verification agency.</p>
        <p class="mt-4 text-muted-foreground leading-relaxed">We are rapidly evolving through adapting to relentless changing business challenges. We conduct B-BEE business in accordance with regulatory requirements. Our values are rooted in quality service delivery, value addition, and time consciousness whilst retaining impartiality and integrity in the end-to-end process. As a Level 2 Rating agency, our experienced and professional team guarantees seamless verification processes with constant feedback to our clients to keep them in the loop on the project.</p>
      </div>

      <!-- Right: Accordion -->
      <div x-data="{ active: 0 }" class="space-y-4">
        <!-- Mission -->
        <div class="rounded-xl border border-border overflow-hidden shadow-sm">
          <button @click="active = active === 0 ? null : 0" class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-muted/50 transition-colors">
            <span class="font-semibold text-secondary flex items-center gap-3">
              <i data-lucide="target" class="w-5 h-5 text-primary"></i> Mission
            </span>
            <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground transition-transform duration-300" :class="active === 0 && 'rotate-180'"></i>
          </button>
          <div x-show="active === 0" x-collapse>
            <div class="px-6 pb-5 text-muted-foreground leading-relaxed border-t border-border pt-4">
              AKANI is a Tsonga word/name meaning Building together. Our mission therefore follows the same philosophy: "Together WE Build."
            </div>
          </div>
        </div>

        <!-- Vision -->
        <div class="rounded-xl border border-border overflow-hidden shadow-sm">
          <button @click="active = active === 1 ? null : 1" class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-muted/50 transition-colors">
            <span class="font-semibold text-secondary flex items-center gap-3">
              <i data-lucide="eye" class="w-5 h-5 text-primary"></i> Vision
            </span>
            <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground transition-transform duration-300" :class="active === 1 && 'rotate-180'"></i>
          </button>
          <div x-show="active === 1" x-collapse>
            <div class="px-6 pb-5 text-muted-foreground leading-relaxed border-t border-border pt-4">
              Empowering South Africa's economic transformation through leading B-BBEE verification services.
            </div>
          </div>
        </div>

        <!-- Goals -->
        <div class="rounded-xl border border-border overflow-hidden shadow-sm">
          <button @click="active = active === 2 ? null : 2" class="w-full flex items-center justify-between px-6 py-4 text-left hover:bg-muted/50 transition-colors">
            <span class="font-semibold text-secondary flex items-center gap-3">
              <i data-lucide="trophy" class="w-5 h-5 text-primary"></i> Our Goals
            </span>
            <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground transition-transform duration-300" :class="active === 2 && 'rotate-180'"></i>
          </button>
          <div x-show="active === 2" x-collapse>
            <div class="px-6 pb-5 text-muted-foreground leading-relaxed border-t border-border pt-4">
              Excellence, Empowerment, Innovation and Sustainability.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section class="relative pt-24 pb-28 overflow-hidden">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/background/contact-bg-ov.png')"></div>
  <div class="absolute inset-0 bg-secondary/75"></div>
  <!-- Bottom fade into footer -->
  <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-secondary-dark"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Let's Connect</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-white">Get In Touch</h2>
      <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>

      <!-- CossUI Form Card -->
      <div class="mt-10 rounded-2xl bg-white/[0.12] glass border border-white/15 p-8 lg:p-10 shadow-2xl shadow-black/20">
        <form method="post" action="sendmail.php" class="space-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- CossUI Field: Name -->
            <div class="coss-field">
              <label class="coss-label coss-label--light">Name</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="text" name="name" placeholder="Your full name" required class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Email -->
            <div class="coss-field">
              <label class="coss-label coss-label--light">Email</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="email" name="email" placeholder="you@company.com" required class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Phone -->
            <div class="coss-field">
              <label class="coss-label coss-label--light">Phone</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="text" name="phone" placeholder="+27 ..." required class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Service Type -->
            <div class="coss-field">
              <label class="coss-label coss-label--light">Service Type</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <select name="service_type" class="coss-select coss-select--dark">
                  <option value="">Select a service</option>
                  <option value="B-BBEE Verifications">B-BBEE Verifications</option>
                  <option value="Evidence Collation">Evidence Collation</option>
                  <option value="BEE Training and Insights">BEE Training and Insights</option>
                  <option value="Gap Analysis">Gap Analysis</option>
                </select>
              </div>
            </div>
          </div>
          <!-- CossUI Field: Message -->
          <div class="coss-field">
            <label class="coss-label coss-label--light">Message</label>
            <div class="coss-input-wrapper coss-input-wrapper--dark">
              <textarea name="message" rows="4" placeholder="Tell us about your needs..." class="coss-textarea coss-textarea--dark"></textarea>
            </div>
          </div>
          <!-- CossUI Button -->
          <button type="submit" class="coss-btn coss-btn--default coss-btn--lg">
            <i data-lucide="send" class="w-4 h-4"></i> Submit Now
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
