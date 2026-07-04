<?php
$page_title = 'Promotion Price in Poipet — Current Promotion';
$meta_desc  = 'Current promotion price for skin treatment, laser, IV whitening, hair removal, botox and filler at DIVA Skin Clinic Poipet.';
$canonical  = '/price-list/';
require __DIR__ . '/../assets/partials/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">Current Promotion</span>
    <h1>Promotion Price in Poipet</h1>
    <p style="margin-top:14px">Contact us to confirm current promotion price. Prices are for reference — contact us to confirm current promotion and schedule an appointment.</p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:28px">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact for Current Price</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
    </div>
  </div>
</section>

<section class="section" style="background:var(--warm-white)">
  <div class="container" style="max-width:700px">

    <!-- NOTICE -->
    <div style="background:rgba(200,169,110,.1);border:1px solid rgba(200,169,110,.3);border-radius:var(--radius);padding:16px 20px;margin-bottom:40px;font-size:.83rem;color:var(--text-muted);line-height:1.65">
      <strong style="color:var(--ink)">Note:</strong> Prices shown are current promotion reference prices. Final price depends on skin condition, area size and treatment plan. Contact DIVA to confirm before visiting.
    </div>

    <?php
    $groups = [
      [
        'Skin Care',
        'Basic to advanced skin care and peeling treatments.',
        [
          ['Basic Skin Care',       '$30',   '/acne-treatment-poipet/'],
          ['Brightening Skin Care', '$48',   '/acne-treatment-poipet/'],
          ['Acne Peel',             '$50',   '/acne-treatment-poipet/'],
          ['Acne Peel Treatment',   'Contact','/acne-peel-treatment-poipet/'],
          ['Blackhead Treatment',   'Contact','/blackhead-treatment-poipet/'],
          ['Skin Treatment',        'Contact','/acne-treatment-poipet/'],
        ]
      ],
      [
        'Laser & Texture',
        'Pico laser, CO2 laser, RF microneedling and skin resurfacing.',
        [
          ['Pico Laser (full face)', '$72',  '/dark-spots-treatment-poipet/'],
          ['Pico Laser Treatment',   'Contact','/pico-laser-treatment-poipet/'],
          ['CO2 Laser',              '$90',  '/acne-scar-treatment-poipet/'],
          ['CO2 Laser Treatment',    'Contact','/co2-laser-treatment-poipet/'],
          ['RF Microneedling',       '$90',  '/pores-treatment-poipet/'],
          ['RF Microneedling Treatment', 'Contact','/rf-microneedling-poipet/'],
          ['Meso / Skinbooster',     'Contact','/pores-treatment-poipet/'],
        ]
      ],
      [
        'Wellness & Brightening',
        'IV whitening, glutathione drip, vitamin C and wellness programs.',
        [
          ['IV Whitening',           '$55',  '/iv-whitening-poipet/'],
          ['Skin Whitening Drip',    'Contact','/skin-whitening-drip-poipet/'],
          ['Glutathione Drip',       'Contact','/iv-whitening-poipet/'],
          ['Vitamin C IV',           'Contact','/iv-whitening-poipet/'],
        ]
      ],
      [
        'Beauty & Body',
        'Hair removal, tattoo removal, lip blush and PMU services.',
        [
          ['Underarm Hair Removal',  '$15',  '/hair-removal-poipet/'],
          ['Leg Hair Removal',       'Contact','/hair-removal-poipet/'],
          ['Face Hair Removal',      'Contact','/face-hair-removal-poipet/'],
          ['Laser Tattoo Removal',   'from $30','/laser-tattoo-removal-poipet/'],
          ['Lip Blush (PMU) — Overview', 'Contact','/pmu-lip-blush-eyebrow-poipet/'],
          ['Lip Blush Treatment',    'Contact','/lip-blush-poipet/'],
          ['Hairstroke Eyebrow — Overview', 'Contact','/pmu-lip-blush-eyebrow-poipet/'],
          ['Eyebrow PMU Treatment',  'Contact','/eyebrow-pmu-poipet/'],
        ]
      ],
      [
        'Injectables',
        'Botox, filler, HIFU and skin booster injections.',
        [
          ['Botox',                  'from $90','/botox-filler-poipet/'],
          ['Filler',                 'from $69','/botox-filler-poipet/'],
          ['HIFU',                   'Contact','/botox-filler-poipet/'],
          ['Skinbooster / Rejuran',  'Contact','/botox-filler-poipet/'],
        ]
      ],
    ];

    foreach($groups as $g): ?>
    <div style="margin-bottom:44px">
      <div style="display:flex;align-items:baseline;gap:12px;margin-bottom:6px">
        <div style="width:28px;height:2px;background:var(--gold);flex-shrink:0;margin-bottom:4px"></div>
        <h2 style="font-size:1.25rem"><?php echo $g[0]; ?></h2>
      </div>
      <p style="font-size:.82rem;color:var(--text-muted);margin-bottom:16px;padding-left:40px"><?php echo $g[1]; ?></p>
      <div style="border:1px solid var(--border);border-radius:var(--radius);overflow:hidden">
        <?php foreach($g[2] as $i => $row): ?>
        <a href="<?php echo $row[2]; ?>" class="price-row" style="padding:14px 20px;<?php echo $i > 0 ? 'border-top:1px solid var(--border);' : ''; ?>">
          <span class="price-name"><?php echo $row[0]; ?></span>
          <span class="price-tag"><?php echo $row[1]; ?></span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

    <!-- BACK ACNE / BODY ADD-ON -->
    <div style="background:var(--ink);border-radius:var(--radius);padding:24px 28px;margin-top:8px">
      <p style="color:var(--gold);font-size:.68rem;letter-spacing:.18em;text-transform:uppercase;margin-bottom:10px">Body Treatment</p>
      <p style="color:#E5DDD0;font-size:.88rem;line-height:1.7;margin-bottom:16px">
        Back acne, leg dark spots, underarm peeling — prices depend on area size and condition. Contact us with a photo for a quick estimate.
      </p>
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa btn-sm">Send Photo on WhatsApp</a>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:14px">Ready When You Are</span>
    <h2>Ready to start?</h2>
    <p>Send your skin photo or tell us your concern. We will confirm current promotion price and available schedule.</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
      <a href="/services/" class="btn btn-outline">View All Services</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
