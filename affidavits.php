<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Affidavit Templates | EME & QSE | Akani BEE Ratings</title>
<meta name="description" content="Download free B-BBEE affidavit templates for EME and QSE entities across general, agriculture, construction, finance & ICT sectors.">
<meta name="keywords" content="B-BBEE affidavit template, EME affidavit download, QSE affidavit, BEE affidavit South Africa, difference between affidavit and BEE certificate">
<meta property="og:title" content="B-BBEE Affidavit Templates | EME & QSE Downloads">
<meta property="og:description" content="Download B-BBEE affidavit templates for Exempted Micro Enterprises and Qualifying Small Enterprises across multiple sectors.">
<meta property="og:url" content="https://akanibee.co.za/affidavits.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Affidavits';
$page_subtitle = 'Download affidavit templates for EME and QSE entities across various sector codes.';
$breadcrumbs = [['label' => 'BEE Information'], ['label' => 'Affidavits']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'Agri Affidavit EME', 'url' => 'https://drive.google.com/uc?export=download&id=1P0ChR4_jdqUdf_ykAaMUIZncQNFLiM9J'],
  ['name' => 'Agri Affidavit QSE', 'url' => 'https://drive.google.com/uc?export=download&id=1Iyta_FZup8EZg7Vi94WUz-UTMxAHaOqL'],
  ['name' => 'Construction SC-EME Affidavit', 'url' => 'https://drive.google.com/uc?export=download&id=19sKZgRLZOnM2YWnjrQAS8EAaPlEeZOYG'],
  ['name' => 'DTI BEE Affidavit EME-Gen', 'url' => 'https://drive.google.com/uc?export=download&id=1xDG55oYLCJEvABjnO5BpFyS6-DkY0H9z'],
  ['name' => 'DTI BEE Affidavit EME-Spec', 'url' => 'https://drive.google.com/uc?export=download&id=1X6n0DJ3hkykzXAlHEhCqifaREBcIm7JC'],
  ['name' => 'DTI BEE Affidavit QSE-Gen', 'url' => 'https://drive.google.com/uc?export=download&id=1Yt2IO8tziHixyEEYW_hQzh3GHJKKloW1'],
  ['name' => 'DTI BEE Affidavit QSE-Spec', 'url' => 'https://drive.google.com/uc?export=download&id=1DKTdPyn1HOKTS40f326qJBAQ3k4CxI9X'],
  ['name' => 'Finance Affidavit EME', 'url' => 'https://drive.google.com/uc?export=download&id=12JJZVAe20cJKXpoxRuzAR4awDYfq-YqM'],
  ['name' => 'Finance Affidavit QSE', 'url' => 'https://drive.google.com/uc?export=download&id=1cwcqIH6wR6epxtf7lN4pfJTf3G7FOr48'],
  ['name' => 'ICT EME Affidavit', 'url' => 'https://drive.google.com/uc?export=download&id=1dq2sUODHxt6AJxP5SG_hJJwQrYalo2sD'],
  ['name' => 'ICT QSE Affidavit', 'url' => 'https://drive.google.com/uc?export=download&id=1dq2sUODHxt6AJxP5SG_hJJwQrYalo2sD'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Affidavits</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 max-w-5xl mx-auto">
      <?php foreach ($downloads as $dl): ?>
      <a href="<?= $dl['url'] ?>" class="group flex items-center gap-3 p-4 rounded-xl border border-border bg-white hover:border-primary/30 hover:shadow-lg transition-all duration-300">
        <div class="w-10 h-10 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary transition-colors">
          <i data-lucide="download" class="w-5 h-5 text-primary group-hover:text-white transition-colors"></i>
        </div>
        <span class="text-sm font-medium text-secondary group-hover:text-primary transition-colors leading-snug"><?= $dl['name'] ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
