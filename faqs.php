<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<title>B-BBEE FAQs & BEE Verification Questions | Akani BEE Ratings</title>
<meta name="description" content="Answers to common B-BBEE questions about verification, BEE certificates, compliance, EME/QSE categories, and scorecard elements.">
<meta name="keywords" content="B-BBEE FAQ, how to get a B-BBEE certificate, what documents needed BEE verification, BEE verification for small businesses, improve your BEE scorecard, B-BBEE compliance questions">
<meta property="og:title" content="B-BBEE FAQs | Common BEE Verification Questions">
<meta property="og:description" content="Answers to the most common questions about B-BBEE verification, certificates, compliance, and scorecard elements.">
<meta property="og:url" content="https://akanibee.co.za/faqs.php">
</head>
<body class="bg-white text-secondary antialiased">

<?php include 'includes/header.php'; ?>

<?php
$page_title = 'Frequently Asked Questions';
$page_subtitle = 'Find answers to common questions about B-BBEE compliance and our verification services.';
$breadcrumbs = [['label' => 'FAQs']];
$hero_bg = 'images/background/bg-page-title-1-faq.png';
include 'includes/page-hero.php';
?>

<!-- FAQ Section -->
<section class="py-20 lg:py-28">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-2xl mx-auto mb-14">
      <span class="text-primary text-sm font-semibold tracking-wider uppercase">Knowledge Base</span>
      <h2 class="mt-3 text-3xl sm:text-4xl font-bold text-secondary">FAQs</h2>
      <div class="mt-3 w-16 h-1 bg-primary rounded-full mx-auto"></div>
    </div>

    <?php
    $faqs_left = [
      ['q' => 'What is B-BBEE?', 'a' => 'Broad-Based Black Economic Empowerment (B-BBEE) is a South African government policy aimed at advancing economic transformation and enhancing the economic participation of Black people in the country. It seeks to address the economic disparities created by apartheid by promoting equality and enabling meaningful participation in the economy.'],
      ['q' => 'Who governs B-BBEE?', 'a' => 'B-BBEE is governed by the Broad-Based Black Economic Empowerment Act of 2003, as amended, and the Generic Codes of Good Practice on Broad-Based Black Economic Empowerment, along with sector-specific Codes of Good Practice. The BEE Commission, as an arm of the DTI, is responsible for regulatory compliance and development of the industry with collaboration with SANAS.'],
      ['q' => 'Why do companies embark on B-BBEE?', 'a' => 'While B-BBEE compliance is not a legislative requirement, companies may face commercial and governmental pressure to maintain a certain level of compliance for securing contracts, licenses, and tenders. A valid B-BBEE certificate can influence procurement scoring and client relationships.'],
      ['q' => 'What is a B-BBEE certificate?', 'a' => 'A B-BBEE certificate summarizes the results of the verification process, showing the entity\'s size, level of Black ownership, and overall B-BBEE status. It is valid for one year and must be renewed annually. The certificate is issued only by a SANAS accredited B-BBEE verification or rating agency.'],
      ['q' => 'How are entities categorized for B-BBEE?', 'a' => 'Entities are categorized based on their turnover into Exempted Micro Enterprises (EMEs), Qualifying Small Enterprises (QSEs), and large enterprises, with each category having different compliance requirements and recognition levels.'],
      ['q' => 'Which entity qualifies as an EME?', 'a' => 'On the General Codes, any entity that has a turnover of less than R10 million qualifies as an EME.'],
      ['q' => 'Which entities are rated QSE?', 'a' => 'A QSE is an entity with annual turnover of above R10 million but less than R50 million on the General Codes. This changes, however, when you consider other Sector specific charters, for example, Construction Codes.'],
      ['q' => 'What are the 5 elements of B-BBEE?', 'a' => 'The five components of the B-BBEE scorecard include ownership, management and control, skills development, enterprise and supplier development, and socio-economic development. Each element contributes to the total B-BBEE score in varying degrees.'],
      ['q' => 'Who must comply with B-BBEE?', 'a' => 'Compliance is essential for businesses engaging with the government, state-owned enterprises, and large corporates. Private companies must also apply the codes if they wish to conduct business with these entities or participate in the supply chain.'],
    ];

    $faqs_right = [
      ['q' => 'Who qualifies for B-BBEE in South Africa?', 'a' => 'To qualify for B-BBEE, a person must be an African, Coloured, or Indian citizen of South Africa by birth or descent. It also includes individuals who were citizens before the enactment of the 1993 Constitution (April 1994) or qualified to be at that date.'],
      ['q' => 'What is the difference between BEE and B-BBEE?', 'a' => 'BEE (Black Economic Empowerment) refers to the government policy, while B-BBEE (Broad-Based Black Economic Empowerment) is the implementation of this policy. Both aim to correct the injustices of the past and promote the economic inclusion of Black South Africans.'],
      ['q' => 'How often does B-BBEE need to be renewed?', 'a' => 'B-BBEE verification needs to be renewed annually for companies seeking to maintain compliance.'],
      ['q' => 'What is the difference between B-BBEE and BBBEE?', 'a' => 'B-BBEE stands for Broad-Based Black Economic Empowerment, while BBBEE stands for Broad-Based Black Economic Empowerment. They refer to the same framework.'],
      ['q' => 'What are the priority elements in B-BBEE scoring?', 'a' => 'The priority elements in B-BBEE scoring include Ownership, Skills Development, Enterprise and Supplier Development, and Socio-Economic Development.'],
      ['q' => 'Can foreign-owned businesses be B-BBEE compliant?', 'a' => 'Yes, foreign-owned businesses operating in South Africa can achieve B-BBEE compliance by adhering to the B-BBEE codes of good practice.'],
      ['q' => 'What is the role of B-BBEE in supplier diversity?', 'a' => 'B-BBEE plays a significant role in promoting supplier diversity by encouraging companies to source goods and services from suppliers that are B-BBEE compliant.'],
      ['q' => 'How does B-BBEE impact employment equity?', 'a' => 'B-BBEE aims to promote employment equity by encouraging companies to implement fair and inclusive employment practices.'],
      ['q' => 'What are the challenges of implementing B-BBEE?', 'a' => 'Some challenges of implementing B-BBEE include navigating complex B-BBEE codes and requirements, ensuring meaningful participation.'],
      ['q' => 'What are the incentives for B-BBEE compliance?', 'a' => 'Incentives for B-BBEE compliance may include preferential procurement opportunities, access to government contracts and incentives.'],
      ['q' => 'How does B-BBEE impact small businesses?', 'a' => 'B-BBEE can have both positive and negative impacts on small businesses. While it provides opportunities for small black-owned businesses.'],
    ];

    $all_faqs = array_merge($faqs_left, $faqs_right);
    ?>

    <!-- FAQ Schema (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        <?php foreach ($all_faqs as $i => $faq): ?>
        {
          "@type": "Question",
          "name": <?= json_encode($faq['q']) ?>,
          "acceptedAnswer": {
            "@type": "Answer",
            "text": <?= json_encode($faq['a']) ?>
          }
        }<?= $i < count($all_faqs) - 1 ? ',' : '' ?>
        <?php endforeach; ?>
      ]
    }
    </script>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6" x-data="{ active: 0 }">
      <!-- Left Column -->
      <div class="space-y-4">
        <?php foreach ($faqs_left as $i => $faq): ?>
        <div class="rounded-xl border border-border overflow-hidden shadow-sm hover:border-primary/20 transition-colors">
          <button @click="active = active === <?= $i ?> ? null : <?= $i ?>" class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-muted/50 transition-colors gap-3">
            <span class="font-medium text-secondary text-sm leading-snug"><?= $faq['q'] ?></span>
            <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground flex-shrink-0 transition-transform duration-300" :class="active === <?= $i ?> && 'rotate-180'"></i>
          </button>
          <div x-show="active === <?= $i ?>" x-collapse>
            <div class="px-5 pb-4 text-sm text-muted-foreground leading-relaxed border-t border-border pt-3">
              <?= $faq['a'] ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Right Column -->
      <div class="space-y-4">
        <?php foreach ($faqs_right as $i => $faq): $idx = $i + count($faqs_left); ?>
        <div class="rounded-xl border border-border overflow-hidden shadow-sm hover:border-primary/20 transition-colors">
          <button @click="active = active === <?= $idx ?> ? null : <?= $idx ?>" class="w-full flex items-center justify-between px-5 py-4 text-left hover:bg-muted/50 transition-colors gap-3">
            <span class="font-medium text-secondary text-sm leading-snug"><?= $faq['q'] ?></span>
            <i data-lucide="chevron-down" class="w-5 h-5 text-muted-foreground flex-shrink-0 transition-transform duration-300" :class="active === <?= $idx ?> && 'rotate-180'"></i>
          </button>
          <div x-show="active === <?= $idx ?>" x-collapse>
            <div class="px-5 pb-4 text-sm text-muted-foreground leading-relaxed border-t border-border pt-3">
              <?= $faq['a'] ?>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
</body>
</html>
