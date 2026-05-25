<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Act & Amendments | Downloads | Akani BEE Ratings</title>
<meta name="description" content="Download the B-BBEE Act, gazette amendments, BEE Commissioner Practice Guide, and verification manual for compliance.">
<meta name="keywords" content="B-BBEE Act, BEE Act South Africa, B-BBEE amendments, BEE legislation, BEE Commissioner Practice Guide, BEE verification manual">
<meta property="og:title" content="B-BBEE Act & Amendments | Legislation Downloads">
<meta property="og:description" content="Access the B-BBEE Act, amendments, and essential compliance legislation documents for South African businesses.">
<meta property="og:url" content="https://akanibee.co.za/bee-act-and-amendments.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'B-BBEE Act & Amendments';
$page_subtitle = 'Access the B-BBEE Act, Commissioner Practice Guide, and Verification Manual.';
$breadcrumbs = [['label' => 'BEE Information'], ['label' => 'B-BBEE Act & Amendments']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'BEE Act Gazette', 'url' => 'https://drive.google.com/uc?export=download&id=1Dcxpmq2oRD3Mw5LN6uIXrbgidKcC6BXI'],
  ['name' => 'BEE Commissioner Practice Guide', 'url' => 'https://drive.google.com/uc?export=download&id=11jJCYqIYM0NCyIgu024fykTrTJx7u-GT'],
  ['name' => 'Verification Manual', 'url' => 'https://drive.google.com/uc?export=download&id=1tBBa3uZtdUZLhc3q7JkCQ5k80swElrGV'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">B-BBEE Act and Amendments</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
      <?php foreach ($downloads as $dl): ?>
      <a href="<?= $dl['url'] ?>" class="group flex items-center gap-3 p-5 rounded-xl border border-border bg-white hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
          <i data-lucide="download" class="w-6 h-6 text-primary group-hover:text-white transition-colors"></i>
        </div>
        <span class="text-sm font-semibold text-secondary group-hover:text-primary transition-colors leading-snug"><?= $dl['name'] ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
