<?php
/**
 * One entry in the client strip: the logo image when a file has been supplied,
 * otherwise the company name set as a wordmark. Included from
 * clients-section.php, which provides $c.
 *
 * 'dark' => true marks a logo that is published white-on-transparent and so
 * needs a dark chip behind it; the chip is applied by the parent <li>.
 */
if (!empty($c['logo'])): ?>
<img src="<?= htmlspecialchars($c['logo'], ENT_QUOTES, 'UTF-8') ?>"
     alt="<?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?>"
     width="200" height="80" loading="lazy" decoding="async">
<?php else: ?>
<span class="coss-marquee__wordmark"><?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?></span>
<?php endif; ?>
