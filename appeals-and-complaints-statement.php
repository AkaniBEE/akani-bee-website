<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>Appeals & Complaints Procedure | Akani BEE Ratings</title>
<meta name="description" content="Akani BEE Ratings' appeals and complaints procedure for B-BBEE verification decisions. Fair, transparent dispute resolution.">
<meta property="og:title" content="Appeals & Complaints Procedure | Akani BEE Ratings">
<meta property="og:description" content="Our transparent process for handling appeals and complaints related to B-BBEE verification decisions.">
<meta property="og:url" content="https://akanibee.co.za/appeals-and-complaints-statement.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Appeals & Complaints Statement';
$breadcrumbs = [['label' => 'Statements'], ['label' => 'Appeals & Complaints']];
$hero_bg = 'images/background/bg-page-title-1-complaint.png';
include 'includes/page-hero.php';
?>

<!-- Content Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Statements</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">Appeals and Complaints Statement</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <div class="space-y-8">
      <!-- Appeals Card -->
      <div class="rounded-2xl border border-border bg-white p-8 lg:p-10 shadow-sm">
        <div class="flex items-start gap-4 mb-6">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
            <i data-lucide="gavel" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-bold text-secondary pt-2">Appeals</h3>
        </div>
        <p class="text-muted-foreground leading-relaxed text-justify">
          At Akani BEE Ratings, we are committed to upholding the highest standards of impartiality, integrity, and fairness in all our verification activities. We understand that stakeholders may occasionally have concerns or disputes related to verification decisions or outcomes. To ensure transparency and provide a fair avenue for resolving such concerns, the Rating Agency has established an Appeals Procedure (MAN107) which allows our clients and stakeholders to submit formal appeals or complaints regarding verification decisions or any matter related to the verification process. The procedure involves a thorough and independent review of the appeal by our Appeals Review Committee (ARC). The ARC consists of individuals who were not directly involved in the original verification process, ensuring an objective and unbiased assessment. To submit an appeal, please contact our Verification Manager at <a href="mailto:appeals@akanibee.co.za" class="text-primary hover:underline font-medium">appeals@akanibee.co.za</a>.
        </p>
      </div>

      <!-- Complaints Card -->
      <div class="rounded-2xl border border-border bg-white p-8 lg:p-10 shadow-sm">
        <div class="flex items-start gap-4 mb-6">
          <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0">
            <i data-lucide="message-circle" class="w-6 h-6 text-primary"></i>
          </div>
          <h3 class="text-lg font-bold text-secondary pt-2">Complaints</h3>
        </div>
        <p class="text-muted-foreground leading-relaxed text-justify">
          We are dedicated to maintaining the highest level of impartiality, integrity, and professionalism in all our verification activities. Akani BEE understands that clients and related parties may have complaints related to our services. To ensure that complaints are addressed promptly and fairly, our procedure allows our clients and stakeholders to submit formal complaints about any aspect of our services or any potential non-conformities. As a responsive and accountable agency, we encourage you to bring any complaint to our attention, as it presents an opportunity for us to continuously improve and uphold our commitment to impartiality and excellence. We value the feedback of our clients and stakeholders and take all complaints seriously. Your input is instrumental in helping us improve our services and adherence to verification principles. To submit a complaint, please contact our Verification Manager at <a href="mailto:complaints@akanibee.co.za" class="text-primary hover:underline font-medium">complaints@akanibee.co.za</a>.
        </p>
      </div>
    </div>

    <!-- Related Statements -->
    <div class="mt-10 flex flex-wrap gap-3 justify-center">
      <a href="impartiality-statement.php" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-secondary text-secondary rounded-lg font-medium text-sm hover:bg-secondary hover:text-white transition-all duration-200">
        <i data-lucide="scale" class="w-4 h-4"></i> Impartiality Statement
      </a>
      <a href="appeals-procedure.php" class="inline-flex items-center gap-2 px-5 py-2.5 border-2 border-secondary text-secondary rounded-lg font-medium text-sm hover:bg-secondary hover:text-white transition-all duration-200">
        <i data-lucide="list-ordered" class="w-4 h-4"></i> Appeals Procedure
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
