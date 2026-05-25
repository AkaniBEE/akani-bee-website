<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$current_page_html = basename($_SERVER['PHP_SELF'], '.html');
function isActive($page, $current) {
    return ($page === $current) ? 'text-primary font-semibold' : 'text-secondary hover:text-primary';
}
function isDropdownActive($pages, $current) {
    return in_array($current, $pages) ? 'text-primary font-semibold' : 'text-secondary hover:text-primary';
}
$cp = $current_page !== basename($_SERVER['PHP_SELF']) ? $current_page : $current_page_html;
?>
<!-- Top Bar -->
<div class="bg-secondary text-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-10 text-sm">
      <div class="flex items-center gap-4">
        <a href="https://twitter.com/" target="_blank" rel="noopener" class="hover:text-primary transition-colors" aria-label="Twitter">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
        </a>
        <a href="https://linkedin.com/" target="_blank" rel="noopener" class="hover:text-primary transition-colors" aria-label="LinkedIn">
          <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
        </a>
      </div>
      <div class="flex items-center gap-6">
        <a href="mailto:info@akanibee.co.za" class="hidden sm:flex items-center gap-2 hover:text-primary transition-colors">
          <i data-lucide="mail" class="w-3.5 h-3.5"></i>
          <span>info@akanibee.co.za</span>
        </a>
        <a href="tel:+27834591583" class="flex items-center gap-2 hover:text-primary transition-colors">
          <i data-lucide="phone" class="w-3.5 h-3.5"></i>
          <span>+27 83 459 1583</span>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Main Navigation -->
<header x-data="{ mobileOpen: false, scrolled: false }"
        @scroll.window="scrolled = (window.scrollY > 80)"
        :class="scrolled ? 'shadow-lg bg-white/95 glass' : 'bg-white'"
        class="sticky top-0 z-50 transition-all duration-300 border-b border-border">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-between h-16 lg:h-20">
      <!-- Logo -->
      <a href="index.php" class="flex-shrink-0">
        <img src="images/logo.png" alt="Akani BEE Ratings" class="h-10 lg:h-14 w-auto">
      </a>

      <!-- Desktop Navigation -->
      <nav class="hidden lg:flex items-center gap-1">
        <a href="index.php" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors <?= isActive('index', $cp) ?>">Home</a>

        <!-- About Dropdown -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['company-overview'], $cp) ?>">
            About <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-1 w-56 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="company-overview.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Company Overview</a>
          </div>
        </div>

        <!-- Services Dropdown -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['what-we-offer','our-process','services'], $cp) ?>">
            Services <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" class="absolute left-0 mt-1 w-56 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="what-we-offer.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">What We Offer</a>
            <a href="our-process.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Our Process</a>
            <a href="services.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">All Services</a>
          </div>
        </div>

        <!-- Statements Dropdown -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['impartiality-statement','appeals-and-complaints-statement','appeals-procedure','popia-statement'], $cp) ?>">
            Statements <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" class="absolute left-0 mt-1 w-64 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="impartiality-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Impartiality Statement</a>
            <a href="appeals-and-complaints-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Appeals &amp; Complaints</a>
            <a href="appeals-procedure.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Appeals Procedure</a>
            <a href="popia-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">POPIA Statement</a>
          </div>
        </div>

        <!-- BEE Information Dropdown -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['bee-codes','explanatory-notes','bee-act-and-amendments','affidavits'], $cp) ?>">
            BEE Information <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" class="absolute left-0 mt-1 w-64 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="bee-codes.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">B-BBEE Codes</a>
            <a href="explanatory-notes.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Explanatory Notes</a>
            <a href="bee-act-and-amendments.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">B-BBEE Act &amp; Amendments</a>
            <a href="affidavits.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Affidavits</a>
          </div>
        </div>

        <a href="faqs.php" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors <?= isActive('faqs', $cp) ?>">FAQs</a>
        <a href="contact.php" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors <?= isActive('contact', $cp) ?>">Contact</a>
      </nav>

      <!-- CTA Button + Mobile Toggle -->
      <div class="flex items-center gap-3">
        <a href="contact.php" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-primary text-white text-sm font-semibold rounded-lg shadow-sm hover:bg-primary-hover transition-all duration-200 hover:shadow-md">
          Build With AKANI
        </a>
        <!-- Mobile Menu Button -->
        <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg hover:bg-muted transition-colors" aria-label="Toggle menu">
          <i data-lucide="menu" x-show="!mobileOpen" class="w-5 h-5 text-secondary"></i>
          <i data-lucide="x" x-show="mobileOpen" x-cloak class="w-5 h-5 text-secondary"></i>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Navigation -->
  <div x-show="mobileOpen" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" class="lg:hidden border-t border-border bg-white shadow-xl">
    <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
      <a href="index.php" class="block px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">Home</a>

      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">
          About <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="open && 'rotate-180'"></i>
        </button>
        <div x-show="open" x-cloak class="pl-4 space-y-1 mt-1">
          <a href="company-overview.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Company Overview</a>
        </div>
      </div>

      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">
          Services <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="open && 'rotate-180'"></i>
        </button>
        <div x-show="open" x-cloak class="pl-4 space-y-1 mt-1">
          <a href="what-we-offer.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">What We Offer</a>
          <a href="our-process.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Our Process</a>
          <a href="services.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">All Services</a>
        </div>
      </div>

      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">
          Statements <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="open && 'rotate-180'"></i>
        </button>
        <div x-show="open" x-cloak class="pl-4 space-y-1 mt-1">
          <a href="impartiality-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Impartiality Statement</a>
          <a href="appeals-and-complaints-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Appeals &amp; Complaints</a>
          <a href="appeals-procedure.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Appeals Procedure</a>
          <a href="popia-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">POPIA Statement</a>
        </div>
      </div>

      <div x-data="{ open: false }">
        <button @click="open = !open" class="w-full flex items-center justify-between px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">
          BEE Information <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="open && 'rotate-180'"></i>
        </button>
        <div x-show="open" x-cloak class="pl-4 space-y-1 mt-1">
          <a href="bee-codes.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">B-BBEE Codes</a>
          <a href="explanatory-notes.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Explanatory Notes</a>
          <a href="bee-act-and-amendments.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">B-BBEE Act &amp; Amendments</a>
          <a href="affidavits.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Affidavits</a>
        </div>
      </div>

      <a href="faqs.php" class="block px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">FAQs</a>
      <a href="contact.php" class="block px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">Contact</a>

      <div class="pt-3 border-t border-border mt-3">
        <a href="contact.php" class="block w-full text-center px-5 py-2.5 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-primary-hover transition-colors">
          Build With AKANI
        </a>
      </div>
    </div>
  </div>
</header>
