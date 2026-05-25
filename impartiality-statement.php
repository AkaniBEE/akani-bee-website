<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Impartiality Statement | Akani BEE Ratings</title>
<meta name="description" content="Akani BEE Ratings' commitment to unbiased, independent B-BBEE verification in accordance with SANAS requirements.">
<meta property="og:title" content="Impartiality Statement | Akani BEE Ratings">
<meta property="og:description" content="Our commitment to unbiased and independent B-BBEE verification, free from conflicts of interest.">
<meta property="og:url" content="https://akanibee.co.za/impartiality-statement.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Impartiality Statement';
$breadcrumbs = [['label' => 'Statements'], ['label' => 'Impartiality Statement']];
$hero_bg = 'images/background/bg-page-title-1-impartiality.png';
include 'includes/page-hero.php';
?>

<!-- Content Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Statements</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Impartiality Statement</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <!-- Statement Card -->
    <div class="rounded-2xl border border-border bg-white p-8 lg:p-10 shadow-sm">
      <div class="flex items-start gap-4 mb-6">
        <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
          <i data-lucide="scale" class="w-6 h-6 text-primary"></i>
        </div>
        <div>
          <h3 class="text-lg font-bold text-secondary">Our Commitment to Impartiality</h3>
        </div>
      </div>
      <p class="text-muted-foreground leading-relaxed text-justify">
        AKANI BEE is committed to upholding the principles of impartiality and independence as outlined in SANAS R47-03. We declare that our verification activities are conducted with complete objectivity, free from any undue commercial, financial, or other pressures. We maintain a strict policy to identify, manage, and mitigate any potential conflicts of interest that may arise during our verification processes. Our personnel are trained to adhere to the highest ethical standards and are prohibited from engaging in activities that could compromise impartiality. AKANI BEE Ratings strives to ensure that all our clients receive fair and unbiased treatment throughout the verification process.
      </p>
    </div>

    <!-- Related Statements Navigation -->
    <div class="mt-10 flex flex-wrap gap-3 justify-center">
      <a href="appeals-and-complaints-statement.php" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-secondary text-secondary rounded-lg font-medium text-sm hover:bg-secondary hover:text-white transition-all duration-200">
        <i data-lucide="gavel" class="w-4 h-4"></i> Appeals &amp; Complaints
      </a>
      <a href="appeals-procedure.php" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-secondary text-secondary rounded-lg font-medium text-sm hover:bg-secondary hover:text-white transition-all duration-200">
        <i data-lucide="scale" class="w-4 h-4"></i> Appeals Procedure
      </a>
      <a href="popia-statement.php" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-secondary text-secondary rounded-lg font-medium text-sm hover:bg-secondary hover:text-white transition-all duration-200">
        <i data-lucide="file-text" class="w-4 h-4"></i> POPIA Statement
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
