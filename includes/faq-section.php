<?php
/**
 * Reusable FAQ section — renders an accordion + FAQPage JSON-LD schema.
 *
 * Usage before including:
 *   $faq_items = [
 *     ['q' => 'Question?', 'a' => 'Answer.'],
 *     ...
 *   ];
 *   $faq_heading = 'Frequently Asked Questions';   // optional
 *   $faq_subheading = 'Everything you need to know'; // optional
 *   include 'includes/faq-section.php';
 */
if (!empty($faq_items)):
  $faq_heading = $faq_heading ?? 'Frequently Asked Questions';
  $faq_eyebrow = $faq_eyebrow ?? 'FAQ';
?>
<section class="py-20 lg:py-24 bg-muted/30">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-12">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase"><?= htmlspecialchars($faq_eyebrow, ENT_QUOTES, 'UTF-8') ?></span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary"><?= htmlspecialchars($faq_heading, ENT_QUOTES, 'UTF-8') ?></h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
      <?php if (!empty($faq_subheading)): ?>
      <p class="mt-4 text-muted-foreground"><?= htmlspecialchars($faq_subheading, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>
    </div>

    <!-- FAQ Schema (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($faq_items as $i => $faq): ?>
        {
          "@type": "Question",
          "name": <?= json_encode($faq['q']) ?>,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": <?= json_encode($faq['a']) ?>
          }
        }<?= $i < count($faq_items) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    }
    </script>

    <div class="space-y-4" x-data="{ active: 0 }">
      <?php foreach ($faq_items as $i => $faq): ?>
      <div class="rounded-xl border border-border bg-white overflow-hidden shadow-sm hover:border-primary/20 transition-colors">
        <button @click="active = active === <?= $i ?> ? null : <?= $i ?>" class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-muted/50 transition-colors gap-3">
          <span class="font-medium text-secondary leading-snug"><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8') ?></span>
          <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground flex-shrink-0 transition-transform duration-300" :class="active === <?= $i ?> && 'rotate-180'"></i>
        </button>
        <div x-show="active === <?= $i ?>" x-collapse>
          <div class="px-5 pb-4 text-muted-foreground leading-relaxed border-t border-border pt-3">
            <?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8') ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>
