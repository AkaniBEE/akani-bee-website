<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Codes of Good Practice & Sector Codes | Akani BEE Ratings</title>
<meta name="description" content="Download B-BBEE Codes of Good Practice and sector codes for transport, agriculture, finance, ICT, construction and more.">
<meta name="keywords" content="B-BBEE codes of good practice, BEE sector codes, amended BEE codes, BEE codes download, construction BEE code, ICT sector code, financial sector BEE code">
<meta property="og:title" content="B-BBEE Codes of Good Practice | Sector Codes Download">
<meta property="og:description" content="Access and download the latest B-BBEE codes of good practice and sector-specific codes for compliance in South Africa.">
<meta property="og:url" content="https://akanibee.co.za/bee-codes.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'B-BBEE Codes';
$page_subtitle = 'Access and download the latest B-BBEE codes of good practice and sector-specific codes.';
$breadcrumbs = [['label' => 'BEE Information'], ['label' => 'B-BBEE Codes']];
$hero_bg = 'images/background/bee-information.png';
include 'includes/page-hero.php';

$downloads = [
  ['name' => 'Transport Bus Commuter Coach Services', 'url' => 'https://drive.google.com/uc?export=download&id=1nzgg1F-12ExG1YP5o6c8ehXXLZ2MUaU9'],
  ['name' => 'Transport Domestic Aviation', 'url' => 'https://drive.google.com/uc?export=download&id=1Vzk05V5mvvTpVFmtrmmn933WyjdnMSQv'],
  ['name' => 'Transport-Forwarding-Clearing', 'url' => '#'],
  ['name' => 'Transport Maritime Transport Services', 'url' => 'https://drive.google.com/uc?export=download&id=1TLM5o20dZOh2PdvUAcjmXg_J2ZlvS78i'],
  ['name' => 'Transport Rail', 'url' => 'https://drive.google.com/uc?export=download&id=1bxIFfUd2p2FaIlo10pT9-qeQYe6ISoVY'],
  ['name' => 'Transport Road Freight', 'url' => 'https://drive.google.com/uc?export=download&id=1TecLInbu08nyWEJeQ2xowi2BuB7C4HVg'],
  ['name' => 'Transport Taxi Industry', 'url' => 'https://drive.google.com/uc?export=download&id=1f70_kwIFd8ELwneYYor8FLxNNa3SPQwv'],
  ['name' => 'Agric Codes', 'url' => 'https://drive.google.com/uc?export=download&id=1BkMrwOJWL1c9uDGQ7eYQn21-lKBskpS3'],
  ['name' => 'MAC Gazette 39887 1 April 2016', 'url' => 'https://drive.google.com/uc?export=download&id=1fJX1_5cG9s1admK9GW9mWLy203qogO71'],
  ['name' => 'Financial Sector Code', 'url' => 'https://drive.google.com/uc?export=download&id=121UxQzBmNx_HAv0vIof-gaJKhw4X8Gwj'],
  ['name' => 'FORESTRY SC 21 APRIL 2017 GAZETTE 40803', 'url' => 'https://drive.google.com/uc?export=download&id=1wKDCpz_WHyCGwQ3zAk-9QidtauPESiyI'],
  ['name' => 'Amended COGP Gazette 36928 of 11 Oct 2013', 'url' => 'https://drive.google.com/uc?export=download&id=1yHJ8YhZmba-OBZ8uyHRvyM-Fb4xRTZqs'],
  ['name' => 'Amended Construction Final 1 Dec 2017', 'url' => 'https://drive.google.com/uc?export=download&id=1mTtX6DSNjCCZAUPJAnEHtZ-MBT1FGoIF'],
  ['name' => 'Amended Finance Final 1 December 2017', 'url' => 'https://drive.google.com/uc?export=download&id=1Tov-x0PBRHlWZrbj82a3DUCvBFD1M2FV'],
  ['name' => 'Gazette 41866 Statement 000 - YES Initiative', 'url' => 'https://drive.google.com/uc?export=download&id=1w5vnLUKs4cWGfrt6_hxmFh2zhnJd0qRk'],
  ['name' => 'Defence COGP Gazette 42391 - 12 April 2019', 'url' => 'https://drive.google.com/uc?export=download&id=1LTRjmIiyQPzp3gusIPrDVvzmOI9Lg5Ff'],
  ['name' => 'Property Sector Amended Codes Gazette 40910', 'url' => 'https://drive.google.com/uc?export=download&id=1CEg4rQO13bBHQRkUKDy2maZp2O4h-Ted'],
  ['name' => 'Tourism Amended Sector Code Gazette No 39430', 'url' => 'https://drive.google.com/uc?export=download&id=1589AvcF5PX8NqQISkGw7Hhe7hdek_6nt'],
  ['name' => 'Amended ICT Sector Code - Gazette 40407', 'url' => 'https://drive.google.com/uc?export=download&id=1WEnXSqycYb2Z_4PJ8xNHWuUp6D6c6Kq7'],
];
?>

<!-- Downloads Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">BEE Information</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">B-BBEE Codes</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
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
