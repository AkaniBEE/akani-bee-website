<?php
/**
 * Reusable client / sponsor logo strip — a continuously scrolling marquee.
 *
 * Usage before including:
 *   $client_logos = [
 *     ['name' => 'Company Name', 'logo' => 'images/clients/company.png', 'url' => 'https://example.co.za'],
 *     ...   // 'url' is optional; omit it and the logo renders unlinked
 *   ];
 *   $clients_heading    = 'Trusted By';            // optional
 *   $clients_subheading = 'Businesses we work with'; // optional
 *   include 'includes/clients-section.php';
 *
 * Renders nothing when $client_logos is empty, so the section simply does not
 * appear until real logos are supplied.
 *
 * The track is output twice. The first copy is what people read; the second is
 * aria-hidden and exists only so the loop can restart seamlessly at -50%.
 */
if (!empty($client_logos)):
  $clients_heading    = $clients_heading    ?? 'Trusted By';
  $clients_subheading = $clients_subheading ?? 'Businesses that rely on our verification services.';

  // With only a handful of logos the track would be narrower than the screen,
  // and translating it by -50% would scroll a visible gap across. Repeat the
  // list until each set is comfortably wider than any viewport.
  $repeat = max(1, (int) ceil(9 / count($client_logos)));
?>
<!-- Client / Sponsor Logos -->
<section class="py-16 lg:py-20 bg-muted overflow-hidden" aria-labelledby="clients-heading">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Our Clients</span>
      <h2 id="clients-heading" class="mt-3 text-3xl font-bold text-secondary"><?= htmlspecialchars($clients_heading, ENT_QUOTES, 'UTF-8') ?></h2>
      <div class="mt-2 w-16 h-1 bg-primary rounded-full mx-auto"></div>
      <?php if ($clients_subheading): ?>
      <p class="mt-4 text-muted-foreground max-w-2xl mx-auto"><?= htmlspecialchars($clients_subheading, ENT_QUOTES, 'UTF-8') ?></p>
      <?php endif; ?>
    </div>
  </div>

  <div class="coss-marquee mt-12" role="region" aria-label="Client logos">
    <div class="coss-marquee__track">
      <?php for ($copy = 0; $copy < 2; $copy++): ?>
      <ul class="coss-marquee__set"<?= $copy ? ' aria-hidden="true"' : '' ?>>
        <?php for ($r = 0; $r < $repeat; $r++): ?>
        <?php foreach ($client_logos as $i => $c): ?>
        <?php $dup = ($copy || $r); // only the very first pass is read out ?>
        <li class="coss-marquee__item"<?= $dup ? ' aria-hidden="true"' : '' ?>>
          <?php if (!empty($c['url'])): ?>
          <a href="<?= htmlspecialchars($c['url'], ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noopener"
             <?= $dup ? 'tabindex="-1"' : '' ?>>
            <img src="<?= htmlspecialchars($c['logo'], ENT_QUOTES, 'UTF-8') ?>"
                 alt="<?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?>"
                 width="200" height="80" loading="lazy" decoding="async">
          </a>
          <?php else: ?>
          <img src="<?= htmlspecialchars($c['logo'], ENT_QUOTES, 'UTF-8') ?>"
               alt="<?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?>"
               width="200" height="80" loading="lazy" decoding="async">
          <?php endif; ?>
        </li>
        <?php endforeach; ?>
        <?php endfor; ?>
      </ul>
      <?php endfor; ?>
    </div>
  </div>
</section>
<?php endif; ?>
