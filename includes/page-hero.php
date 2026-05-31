<?php
// Usage: $page_title, $page_subtitle, $breadcrumbs (array of ['label'=>'', 'url'=>''])
// $hero_bg (optional background image)
$hero_bg = isset($hero_bg) ? $hero_bg : 'images/background/bg-page-title-1.png';

// Generate BreadcrumbList schema
if (isset($breadcrumbs) && !empty($breadcrumbs)):
  $schema_items = [];
  $schema_items[] = ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => 'https://akanibee.co.za/'];
  $pos = 2;
  foreach ($breadcrumbs as $crumb) {
    $item = ['@type' => 'ListItem', 'position' => $pos, 'name' => $crumb['label']];
    if (isset($crumb['url']) && $crumb['url'] !== '#') {
      $item['item'] = 'https://akanibee.co.za/' . $crumb['url'];
    } elseif ($pos === count($breadcrumbs) + 1) {
      $item['item'] = 'https://akanibee.co.za/' . basename($_SERVER['PHP_SELF']);
    }
    $schema_items[] = $item;
    $pos++;
  }
?>
<script type="application/ld+json">
<?= json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => $schema_items
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>
<?php endif; ?>
<section class="relative overflow-hidden">
  <!-- Background Image -->
  <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('<?= htmlspecialchars($hero_bg, ENT_QUOTES, 'UTF-8') ?>')"></div>
  <div class="absolute inset-0 bg-black/30"></div>

  <!-- Content -->
  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 lg:py-28">
    <div class="max-w-3xl animate-fade-in">
      <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white tracking-tight"><?= htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8') ?></h1>
      <?php if (isset($page_subtitle)): ?>
        <p class="mt-4 text-lg text-gray-300"><?= htmlspecialchars($page_subtitle, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>

      <!-- Breadcrumbs -->
      <?php if (isset($breadcrumbs) && !empty($breadcrumbs)): ?>
      <nav class="mt-6 flex items-center gap-2 text-sm" aria-label="Breadcrumb">
        <a href="index.php" class="text-gray-400 hover:text-primary transition-colors">Home</a>
        <?php foreach ($breadcrumbs as $crumb): ?>
          <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-gray-600"></i>
          <?php if (isset($crumb['url'])): ?>
            <a href="<?= htmlspecialchars($crumb['url'], ENT_QUOTES, 'UTF-8') ?>" class="text-gray-400 hover:text-primary transition-colors"><?= htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8') ?></a>
          <?php else: ?>
            <span class="text-primary font-medium"><?= htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8') ?></span>
          <?php endif; ?>
        <?php endforeach; ?>
      </nav>
      <?php endif; ?>
    </div>
  </div>

  <!-- Bottom Wave -->
  <div class="absolute bottom-0 left-0 right-0">
    <svg viewBox="0 0 1440 60" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-auto">
      <path d="M0 60V30C240 10 480 0 720 10C960 20 1200 40 1440 30V60H0Z" fill="white"/>
    </svg>
  </div>
</section>
