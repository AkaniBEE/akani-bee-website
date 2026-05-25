<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE Verification Appeals Procedure | Akani BEE Ratings</title>
<meta name="description" content="Formal appeals procedure for B-BBEE verification disputes. Step-by-step guide to submitting and resolving appeals.">
<meta property="og:title" content="B-BBEE Verification Appeals Procedure | Akani BEE Ratings">
<meta property="og:description" content="Our structured, step-by-step process for handling B-BBEE verification appeals and disputes.">
<meta property="og:url" content="https://akanibee.co.za/appeals-procedure.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Appeals Procedure';
$page_subtitle = 'Our structured process for handling verification appeals fairly and transparently.';
$breadcrumbs = [['label' => 'Statements'], ['label' => 'Appeals Procedure']];
$hero_bg = 'images/background/bg-page-title-1-complaint.png';
include 'includes/page-hero.php';
?>

<!-- Process Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-16">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Procedure</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Appeals Procedure</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <!-- Timeline -->
    <div class="relative">
      <div class="hidden lg:block absolute top-24 left-0 right-0 h-0.5 bg-border" aria-hidden="true"></div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8">
        <!-- Step 1 -->
        <div class="group text-center">
          <div class="relative z-10 w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
            <i data-lucide="file-text" class="w-7 h-7"></i>
          </div>
          <div class="rounded-xl border border-border bg-white p-5 shadow-sm group-hover:shadow-lg group-hover:border-primary/30 transition-all duration-300">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">Step 1</span>
            <h3 class="text-base font-bold text-secondary">Formal Appeal Submission</h3>
            <p class="mt-2 text-sm text-muted-foreground">Submit a written appeal within a specified period from the date of receiving the verification report or decision.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="group text-center">
          <div class="relative z-10 w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
            <i data-lucide="check-circle" class="w-7 h-7"></i>
          </div>
          <div class="rounded-xl border border-border bg-white p-5 shadow-sm group-hover:shadow-lg group-hover:border-primary/30 transition-all duration-300">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">Step 2</span>
            <h3 class="text-base font-bold text-secondary">Acknowledgment</h3>
            <p class="mt-2 text-sm text-muted-foreground">Receive acknowledgment within 48 hours from the Appeals Coordinator.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="group text-center">
          <div class="relative z-10 w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
            <i data-lucide="users" class="w-7 h-7"></i>
          </div>
          <div class="rounded-xl border border-border bg-white p-5 shadow-sm group-hover:shadow-lg group-hover:border-primary/30 transition-all duration-300">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">Step 3</span>
            <h3 class="text-base font-bold text-secondary">Panel Formation</h3>
            <p class="mt-2 text-sm text-muted-foreground">An Appeals Review Panel is formed to review the appeal, ensuring a fair and impartial process.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="group text-center">
          <div class="relative z-10 w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
            <i data-lucide="search" class="w-7 h-7"></i>
          </div>
          <div class="rounded-xl border border-border bg-white p-5 shadow-sm group-hover:shadow-lg group-hover:border-primary/30 transition-all duration-300">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">Step 4</span>
            <h3 class="text-base font-bold text-secondary">Review &amp; Investigation</h3>
            <p class="mt-2 text-sm text-muted-foreground">The panel conducts a comprehensive review and investigation, considering all relevant documentation.</p>
          </div>
        </div>

        <!-- Step 5 -->
        <div class="group text-center">
          <div class="relative z-10 w-16 h-16 rounded-2xl bg-primary text-white flex items-center justify-center mx-auto mb-6 shadow-lg group-hover:scale-110 transition-transform duration-300">
            <i data-lucide="badge-check" class="w-7 h-7"></i>
          </div>
          <div class="rounded-xl border border-border bg-white p-5 shadow-sm group-hover:shadow-lg group-hover:border-primary/30 transition-all duration-300">
            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full bg-primary/10 text-primary text-xs font-semibold mb-3">Step 5</span>
            <h3 class="text-base font-bold text-secondary">Appeal Decision</h3>
            <p class="mt-2 text-sm text-muted-foreground">The Appeals Review Committee makes a decision and communicates it within 30 days.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
