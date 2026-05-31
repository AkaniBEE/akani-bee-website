<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Verification Agency in South Africa | Akani BEE Ratings</title>
<meta name="description" content="SANAS-accredited B-BBEE verification agency in Sandton. BEE certificates, compliance verification, gap analysis & training for SA businesses.">
<meta name="keywords" content="B-BBEE verification agency, BEE verification agency South Africa, BEE certificate, B-BBEE compliance services, BEE rating agency Johannesburg, BEE verification Sandton, SANAS accredited BEE agency, BEE audit services, BEE consulting South Africa">
<meta property="og:title" content="B-BBEE Verification Agency in South Africa | Akani BEE Ratings">
<meta property="og:description" content="SANAS-accredited B-BBEE verification agency providing BEE certificates, compliance verification, and expert BEE consulting in Johannesburg, South Africa.">
<meta property="og:url" content="https://akanibee.co.za/">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<!-- Hero Slider Section -->
<section x-data="{ current: 0, paused: false, slides: [
  { image: 'images/main-slider/2.png', title: 'Achieve Your Ideal', highlight: 'B-BBEE Level', text: 'Whether you\'re an EME, QSE, or large enterprise, our SANAS-accredited team helps you reach the B-BBEE level your business deserves. 51% Black-owned and trusted across South Africa.' },
  { image: 'images/main-slider/3.png', title: 'Maximise Your Scorecard', highlight: 'With Expert Guidance', text: 'From evidence collation to full verification, we simplify the process so you can focus on growing your business. Let us handle the compliance.' },
  { image: 'images/main-slider/1.png', title: 'Close the Gap', highlight: 'Grow Your Score', text: 'Our gap analysis pinpoints exactly where to improve on Enterprise Development, Supplier Development, and Skills. A clear roadmap to a better B-BBEE rating.' }
] }" x-init="
  if (!window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    setInterval(() => { if (!paused) current = (current + 1) % slides.length }, 7000)
  }
" class="relative h-[600px] sm:h-[700px] lg:h-[800px] overflow-hidden bg-secondary" aria-roledescription="carousel" aria-label="Featured services">

  <!-- Slides -->
  <template x-for="(slide, index) in slides" :key="index">
    <div class="absolute inset-0 transition-all duration-1000 ease-in-out"
         :class="current === index ? 'opacity-100 scale-100' : 'opacity-0 scale-105'">
      <div class="absolute inset-0 bg-cover bg-center" :style="'background-image: url(' + slide.image + ')'"></div>
      <div class="absolute inset-0 bg-black/30"></div>
    </div>
  </template>

  <!-- Content -->
  <div class="relative z-10 h-full flex items-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
      <div class="max-w-2xl">
        <template x-for="(slide, index) in slides" :key="index">
          <div x-show="current === index" x-transition:enter="transition ease-out duration-700 delay-300" x-transition:enter-start="opacity-0 translate-y-8" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <span class="inline-flex items-center px-3 py-1 rounded-full bg-primary/20 text-primary text-sm font-medium mb-6">
              <i data-lucide="award" class="w-3.5 h-3.5 mr-1.5"></i> 51% Black-Owned | SANAS Accredited
            </span>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
              <span x-text="slide.title"></span><br>
              <span class="text-primary" x-text="slide.highlight"></span>
            </h1>
            <p class="mt-6 text-lg text-gray-300 leading-relaxed max-w-xl" x-text="slide.text"></p>
            <div class="mt-8 flex flex-wrap gap-4">
              <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-lg shadow-lg hover:bg-primary-hover transition-all duration-200 hover:shadow-xl hover:-translate-y-0.5">
                Get a Free Quote <i data-lucide="arrow-right" class="w-4 h-4"></i>
              </a>
              <a href="what-we-offer.php" class="inline-flex items-center gap-2 px-6 py-3 border-2 border-white/30 text-white font-semibold rounded-lg hover:bg-white/10 transition-all duration-200">
                View Services
              </a>
            </div>
          </div>
        </template>
      </div>
    </div>
  </div>

  <!-- Slide Indicators + Pause Control -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-3">
    <button @click="paused = !paused" class="w-8 h-8 rounded-full bg-white/10 glass flex items-center justify-center text-white hover:bg-white/20 transition-all" :aria-label="paused ? 'Play carousel' : 'Pause carousel'">
      <i data-lucide="pause" x-show="!paused" class="w-3.5 h-3.5"></i>
      <i data-lucide="play" x-show="paused" x-cloak class="w-3.5 h-3.5"></i>
    </button>
    <template x-for="(slide, index) in slides" :key="'dot-'+index">
      <button @click="current = index" class="w-2.5 h-2.5 rounded-full transition-all duration-300"
              :class="current === index ? 'bg-primary w-8' : 'bg-white/40 hover:bg-white/60'"
              :aria-label="'Go to slide ' + (index + 1)"></button>
    </template>
  </div>

  <!-- Navigation Arrows -->
  <button @click="current = (current - 1 + slides.length) % slides.length" class="absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-xl bg-white/10 glass flex items-center justify-center text-white hover:bg-white/20 transition-all" aria-label="Previous slide">
    <i data-lucide="chevron-left" class="w-5 h-5"></i>
  </button>
  <button @click="current = (current + 1) % slides.length" class="absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-20 w-11 h-11 rounded-xl bg-white/10 glass flex items-center justify-center text-white hover:bg-white/20 transition-all" aria-label="Next slide">
    <i data-lucide="chevron-right" class="w-5 h-5"></i>
  </button>
</section>

<!-- About Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-start">

      <!-- Left: Content -->
      <div>
        <span class="text-primary text-sm font-semibold tracking-wider uppercase">About Us</span>
        <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Trusted B-BBEE Verification Agency in South Africa</h2>
        <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>
        <p class="mt-6 text-lg font-medium text-secondary/80">Akani BEE Ratings (Pty) Ltd is a 51% Black-owned, Level 2 B-BBEE verification agency based in Sandton, Johannesburg.</p>
        <p class="mt-4 text-muted-foreground leading-relaxed">We provide professional B-BBEE verification services, BEE certificates, and compliance support for businesses of all sizes across South Africa. Our values are rooted in quality service delivery, value addition, and time consciousness whilst retaining impartiality and integrity in the end-to-end verification process. As a SANAS-accredited rating agency, our experienced team guarantees seamless BEE verification with constant feedback to keep you informed at every stage.</p>
        <a href="company-overview.php" class="inline-flex items-center gap-2 mt-8 px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-primary-hover transition-all duration-200 shadow-sm hover:shadow-md">
          Read More <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>

      <!-- Right: Value Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
        <!-- Card: Professionalism -->
        <div class="group rounded-xl border border-border bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary/30 transition-all duration-300 hover:-translate-y-1">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
            <i data-lucide="briefcase" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-semibold text-secondary">Professionalism</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">We adhere to professional morals and best practices in verifications.</p>
        </div>

        <!-- Card: Quality -->
        <div class="group rounded-xl border border-border bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary/30 transition-all duration-300 hover:-translate-y-1">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
            <i data-lucide="award" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-semibold text-secondary">Quality</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">Our endeavor is to deliver excellent and high-quality verification services.</p>
        </div>

        <!-- Card: Client Focus -->
        <div class="group rounded-xl border border-border bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary/30 transition-all duration-300 hover:-translate-y-1">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
            <i data-lucide="users" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-semibold text-secondary">Client Focus</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">By putting the needs and interests of clients first, we build together.</p>
        </div>

        <!-- Card: Integrity -->
        <div class="group rounded-xl border border-border bg-white p-6 shadow-sm hover:shadow-lg hover:border-primary/30 transition-all duration-300 hover:-translate-y-1">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center mb-4 group-hover:bg-primary/20 transition-colors">
            <i data-lucide="handshake" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-semibold text-secondary">Integrity</h3>
          <p class="mt-2 text-sm text-muted-foreground leading-relaxed">We uphold high ethical standards fueled by honesty, trustworthiness, and transparency.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-muted">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Our Services</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">B-BBEE Compliance Services We Offer</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
      <!-- Service Card: Verifications -->
      <div class="group relative rounded-2xl bg-white border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
        <div class="p-8">
          <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300">
            <i data-lucide="shield-check" class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-xl font-bold text-secondary">B-BBEE Verifications</h3>
          <p class="mt-3 text-muted-foreground leading-relaxed">Comprehensive BEE verification for EME, QSE, and large enterprises. We issue B-BBEE certificates that are recognised across all sectors and government procurement processes.</p>
          <a href="what-we-offer.php" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-primary hover:text-primary-hover transition-colors">
            Learn more <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>

      <!-- Service Card: Training -->
      <div class="group relative rounded-2xl bg-white border border-border overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
        <div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
        <div class="p-8">
          <div class="w-14 h-14 rounded-xl bg-primary/10 flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-white transition-all duration-300">
            <i data-lucide="presentation" class="w-7 h-7 text-primary group-hover:text-white transition-colors"></i>
          </div>
          <h3 class="text-xl font-bold text-secondary">BEE Training and Insights</h3>
          <p class="mt-3 text-muted-foreground leading-relaxed">Podcasts and training sessions to help you understand the dynamics around BEE and gain better knowledge of the Codes.</p>
          <a href="what-we-offer.php" class="inline-flex items-center gap-1.5 mt-5 text-sm font-semibold text-primary hover:text-primary-hover transition-colors">
            Learn more <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Banner Section -->
<section class="relative py-16 overflow-hidden">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/background/image-4.png')"></div>
  <div class="absolute inset-0 bg-black/30"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="handshake" class="w-8 h-8 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white">Integrity</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="briefcase" class="w-8 h-8 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white">Professionalism</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="medal" class="w-8 h-8 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white">Quality</h3>
      </div>
      <div class="text-center">
        <div class="w-16 h-16 rounded-2xl bg-primary/20 flex items-center justify-center mx-auto mb-4">
          <i data-lucide="users" class="w-8 h-8 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white">Client Focus</h3>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section class="relative pt-24 pb-28 overflow-hidden">
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('images/background/image-1.png')"></div>
  <div class="absolute inset-0 bg-black/30"></div>
  <!-- Bottom fade into footer -->
  <div class="absolute bottom-0 left-0 right-0 h-32 bg-gradient-to-b from-transparent to-[#1a1a2e]"></div>
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-2xl mx-auto lg:mx-0">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Let's Connect</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-white">Request a B-BBEE Verification Quote</h2>
      <div class="mt-2 w-16 h-1 bg-primary rounded-full"></div>

      <!-- CossUI Form Card -->
      <div class="mt-10 rounded-2xl bg-white/[0.12] glass border border-white/15 p-8 lg:p-10 shadow-2xl shadow-black/20">
        <form method="post" action="sendmail.php" class="space-y-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- CossUI Field: Name -->
            <div class="coss-field">
              <label for="name" class="coss-label coss-label--light">Name</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="text" id="name" name="name" placeholder="Your full name" required
                  class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Email -->
            <div class="coss-field">
              <label for="email" class="coss-label coss-label--light">Email</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="email" id="email" name="email" placeholder="you@company.com" required
                  class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Phone -->
            <div class="coss-field">
              <label for="phone" class="coss-label coss-label--light">Phone</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <input type="text" id="phone" name="phone" placeholder="+27 ..." required
                  class="coss-input coss-input--dark">
              </div>
            </div>
            <!-- CossUI Field: Service Type -->
            <div class="coss-field">
              <label for="service_type" class="coss-label coss-label--light">Service Type</label>
              <div class="coss-input-wrapper coss-input-wrapper--dark">
                <select id="service_type" name="service_type" class="coss-select coss-select--dark">
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
            <label for="message" class="coss-label coss-label--light">Message</label>
            <div class="coss-input-wrapper coss-input-wrapper--dark">
              <textarea id="message" name="message" rows="4" placeholder="Tell us about your needs..."
                class="coss-textarea coss-textarea--dark"></textarea>
            </div>
            <p class="coss-field-description text-gray-500">Optional. Describe what you need help with.</p>
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
