<?php
/**
 * One entry in the client strip: the logo image when a file has been supplied,
 * otherwise the company name set as a wordmark. Included from
 * clients-section.php, which provides $c.
 */
if (!empty($c['logo'])): ?>
<img src="<?= htmlspecialchars($c['logo'], ENT_QUOTES, 'UTF-8') ?>"
     alt="<?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?>"
     width="200" height="80" loading="lazy" decoding="async">
<?php else: ?>
<span class="coss-marquee__wordmark"><?= htmlspecialchars($c['name'], ENT_QUOTES, 'UTF-8') ?></span>
<?php endif; ?>
