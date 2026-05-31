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
        <a href="https://wa.me/27786204360" target="_blank" rel="noopener" class="flex items-center gap-2 hover:text-green-400 transition-colors">
          <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          <span class="hidden md:inline">WhatsApp</span>
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

        <!-- About Dropdown (includes Statements) -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['company-overview','impartiality-statement','appeals-and-complaints-statement','appeals-procedure','popia-statement'], $cp) ?>">
            About <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 mt-1 w-64 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="company-overview.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Company Overview</a>
            <div class="my-1 border-t border-border"></div>
            <p class="px-3 py-1 text-xs text-muted-foreground font-medium uppercase tracking-wider">Statements</p>
            <a href="impartiality-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Impartiality Statement</a>
            <a href="appeals-and-complaints-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Appeals &amp; Complaints</a>
            <a href="appeals-procedure.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Appeals Procedure</a>
            <a href="popia-statement.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">POPIA Statement</a>
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

        <!-- Resources Dropdown (BEE Information + FAQs) -->
        <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @keydown.escape.prevent="open = false" @focusout="if (!$el.contains($event.relatedTarget)) open = false" class="relative">
          <button @click="open = !open" @keydown.enter.prevent="open = !open" @keydown.space.prevent="open = !open" aria-haspopup="true" :aria-expanded="open" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1 <?= isDropdownActive(['bee-codes','explanatory-notes','bee-act-and-amendments','affidavits','faqs'], $cp) ?>">
            Resources <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="open && 'rotate-180'"></i>
          </button>
          <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" class="absolute left-0 mt-1 w-64 rounded-xl border border-border bg-white shadow-xl p-1.5">
            <a href="faqs.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">FAQs</a>
            <div class="my-1 border-t border-border"></div>
            <p class="px-3 py-1 text-xs text-muted-foreground font-medium uppercase tracking-wider">BEE Information</p>
            <a href="bee-codes.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">B-BBEE Codes</a>
            <a href="explanatory-notes.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Explanatory Notes</a>
            <a href="bee-act-and-amendments.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">B-BBEE Act &amp; Amendments</a>
            <a href="affidavits.php" class="block px-3 py-2 rounded-lg text-sm hover:bg-muted transition-colors">Affidavits</a>
          </div>
        </div>

        <a href="contact.php" class="px-3 py-2 rounded-lg text-sm font-medium transition-colors <?= isActive('contact', $cp) ?>">Contact</a>
      </nav>

      <!-- CTA Button + Mobile Toggle -->
      <div class="flex items-center gap-3">
        <a href="contact.php" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 bg-primary text-white text-sm font-semibold rounded-lg shadow-sm hover:bg-primary-hover transition-all duration-200 hover:shadow-md">
          Get a Free Quote
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
          <p class="px-4 pt-2 pb-1 text-xs text-muted-foreground font-medium uppercase tracking-wider">Statements</p>
          <a href="impartiality-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Impartiality Statement</a>
          <a href="appeals-and-complaints-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Appeals &amp; Complaints</a>
          <a href="appeals-procedure.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Appeals Procedure</a>
          <a href="popia-statement.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">POPIA Statement</a>
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
          Resources <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="open && 'rotate-180'"></i>
        </button>
        <div x-show="open" x-cloak class="pl-4 space-y-1 mt-1">
          <a href="faqs.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">FAQs</a>
          <p class="px-4 pt-2 pb-1 text-xs text-muted-foreground font-medium uppercase tracking-wider">BEE Information</p>
          <a href="bee-codes.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">B-BBEE Codes</a>
          <a href="explanatory-notes.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Explanatory Notes</a>
          <a href="bee-act-and-amendments.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">B-BBEE Act &amp; Amendments</a>
          <a href="affidavits.php" class="block px-4 py-2 rounded-lg text-sm text-muted-foreground hover:bg-muted transition-colors">Affidavits</a>
        </div>
      </div>

      <a href="contact.php" class="block px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-muted transition-colors">Contact</a>

      <div class="pt-3 border-t border-border mt-3">
        <a href="contact.php" class="block w-full text-center px-5 py-2.5 bg-primary text-white text-sm font-semibold rounded-lg hover:bg-primary-hover transition-colors">
          Get a Free Quote
        </a>
      </div>
    </div>
  </div>
</header>
