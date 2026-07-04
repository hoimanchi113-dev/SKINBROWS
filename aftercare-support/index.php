<?php
$page_title = 'Aftercare & Support — DIVA Skin Clinic Poipet';
$meta_desc  = 'Aftercare guide, consultation policy, warranty and support information from DIVA Skin Clinic Poipet. Clear aftercare, clear responsibility, safer recovery.';
$canonical  = '/aftercare-support/';
require __DIR__ . '/../assets/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">Aftercare & Support</span>
    <h1>Clear Aftercare.<br>Clear Responsibility.<br>Safer Recovery.</h1>
    <p style="margin-top:14px">Understanding what DIVA is responsible for — and what depends on you — protects both your results and your health.</p>
  </div>
</section>

<section class="section" style="background:var(--warm-white)">
  <div class="container" style="max-width:720px">

    <?php
    $sections = [
      ['Consultation Is Not Selling',
       'At DIVA, consultation means assessing your skin condition, concern and history before recommending any treatment. We do not use consultation to upsell unnecessary services. If a treatment is not suitable for your current skin condition, we will explain clearly and recommend a safer direction.'],
      ['Homecare Is Not Compulsory',
       'Homecare products are sometimes recommended to support better recovery. They are not compulsory. If you choose not to use homecare, we will still guide you on what to avoid and what to protect your skin during recovery.'],
      ['What DIVA Is Responsible For',
       'DIVA is responsible for choosing a suitable treatment method based on your real skin condition, explaining the treatment plan and expected results clearly, guiding you through aftercare and recovery steps, and being available to answer questions during your recovery period.'],
      ['What May Be Outside DIVA\'s Control',
       'Results can be affected by your skin\'s individual response, sun exposure during recovery, homecare compliance, existing skin conditions, hormonal changes, and lifestyle factors. DIVA explains realistic expectations before every treatment.'],
    ];
    foreach($sections as $s): ?>
    <div style="margin-bottom:36px;padding-bottom:36px;border-bottom:1px solid var(--border)">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
        <div style="width:28px;height:2px;background:var(--gold);flex-shrink:0"></div>
        <h2 style="font-size:1.1rem"><?php echo $s[0]; ?></h2>
      </div>
      <p style="color:var(--text-muted);line-height:1.8;padding-left:40px"><?php echo $s[1]; ?></p>
    </div>
    <?php endforeach; ?>

    <!-- AFTERCARE BY TREATMENT TYPE -->
    <div style="margin-bottom:36px">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:20px">
        <div style="width:28px;height:2px;background:var(--gold);flex-shrink:0"></div>
        <h2 style="font-size:1.1rem">Aftercare by Treatment Type</h2>
      </div>
      <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:12px;padding-left:40px">
        <?php
        $types = [
          ['Laser / CO2 / Pico',       'Avoid sun. Keep area clean. No scrubbing for 7–14 days. Use gentle moisturiser. Contact us if unusual redness, swelling or blistering occurs.','/acne-scar-treatment-poipet/'],
          ['Chemical Peel',            'Skin may flake 3–7 days. Do not pick or peel. Keep moisturised. SPF is essential. Avoid heat and sweating.', '/acne-treatment-poipet/'],
          ['RF Microneedling',         'Redness and slight swelling is normal for 1–3 days. Avoid makeup for 24 hours. SPF daily. No gym for 48 hours.', '/pores-treatment-poipet/'],
          ['Botox / Filler',           'Avoid rubbing the treated area. No intense heat or exercise for 24 hours. Follow up if you notice unusual changes within 2 weeks.','/botox-filler-poipet/'],
          ['PMU / Lip Blush',          'Keep the area dry for 3–5 days. No makeup on treated area. Expect some colour change during healing.','/pmu-lip-blush-eyebrow-poipet/'],
          ['Tattoo Removal',           'Area may crust or blister. Keep clean and dry. Avoid picking. SPF when healed.','/laser-tattoo-removal-poipet/'],
        ];
        foreach($types as $t): ?>
        <div style="background:#fff;border:1px solid var(--border);border-radius:var(--radius-sm);padding:16px">
          <p style="font-size:.72rem;color:var(--gold);font-weight:500;letter-spacing:.08em;margin-bottom:8px;text-transform:uppercase"><?php echo $t[0]; ?></p>
          <p style="font-size:.8rem;color:var(--text-muted);line-height:1.6;margin-bottom:8px"><?php echo $t[1]; ?></p>
          <a href="<?php echo $t[2]; ?>" style="font-size:.72rem;color:var(--gold);text-decoration:none">View service →</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- WHEN TO CONTACT -->
    <div style="background:rgba(200,169,110,.08);border:1px solid rgba(200,169,110,.25);border-radius:var(--radius);padding:24px 28px;margin-bottom:36px">
      <h2 style="font-size:1.05rem;margin-bottom:14px">When to Contact DIVA</h2>
      <ul style="list-style:none;font-size:.84rem;color:var(--text-muted);line-height:2.2">
        <li>• Unusual or increasing pain after treatment</li>
        <li>• Severe redness, swelling or warmth that worsens after 48 hours</li>
        <li>• Signs of infection: pus, unusual odour, fever</li>
        <li>• Blistering or open wounds after laser</li>
        <li>• Filler-related changes: blanching, discolouration, or loss of feeling near injection area</li>
        <li>• Any result or reaction you are unsure about</li>
      </ul>
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa btn-sm" style="margin-top:16px;display:inline-flex">Contact DIVA on WhatsApp</a>
    </div>

    <!-- WARRANTY / SUPPORT -->
    <div style="padding-bottom:36px;border-bottom:1px solid var(--border)">
      <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
        <div style="width:28px;height:2px;background:var(--gold);flex-shrink:0"></div>
        <h2 style="font-size:1.1rem">Support, Warranty &amp; Refund</h2>
      </div>
      <div style="padding-left:40px">
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:12px">
          DIVA provides post-treatment support for reactions or questions related to the service received. Support is available via WhatsApp or Telegram during clinic hours.
        </p>
        <p style="color:var(--text-muted);line-height:1.8;margin-bottom:12px">
          Refund or re-treatment requests are handled case by case and depend on the nature of the concern. DIVA does not guarantee specific results, as skin response varies between individuals.
        </p>
        <p style="color:var(--text-muted);line-height:1.8">
          For detailed warranty, support or refund questions, please contact DIVA directly.
          <a href="/blog/warranty-refund-policy-diva-poipet/" style="color:var(--gold);text-decoration:none"> Read our full policy article →</a>
        </p>
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2>Have a question about recovery?</h2>
    <p>Send a message during clinic hours. Open 12:00 PM – 3:00 AM • Poipet, Cambodia</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
