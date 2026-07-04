<?php
$page_title = 'Treatment Videos & Gallery — DIVA Skin Clinic Poipet';
$meta_desc  = 'Watch real treatment videos from DIVA Skin Clinic Poipet. Acne peel, IV whitening, laser, hair removal, tattoo removal, lip filler and more.';
$canonical  = '/videos-gallery/';
require __DIR__ . '/../assets/partials/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">Treatment Videos</span>
    <h1>Video Gallery</h1>
    <p style="margin-top:14px">Real treatment videos from DIVA Skin Clinic Poipet. Vertical 9:16 format — easy to watch on mobile.</p>
  </div>
</section>

<section class="section" style="background:var(--warm-white)">
  <div class="container">

    <?php
    $all_videos = [
      'Skin Treatment' => [
        ['Acne Peel Treatment in Poipet',        'X81wlAVa7Sg', 'https://youtu.be/X81wlAVa7Sg',       '/acne-treatment-poipet/'],
        ['Skin Treatment — Acne, Scars, Pores',  'HReFzBgrye4', 'https://youtu.be/HReFzBgrye4',       '/acne-treatment-poipet/'],
        ['Glow Peel / Brightening Peel',         'Liay1dd1Aoc', 'https://youtu.be/Liay1dd1Aoc',       '/acne-treatment-poipet/'],
        ['Acne Peel at DIVA Skin Clinic',        'e7pifFrPQfU', 'https://youtu.be/e7pifFrPQfU',       '/acne-treatment-poipet/'],
        ['Skin Care Treatment',                  '1HZ_-Y8vvfI', 'https://youtu.be/1HZ_-Y8vvfI',       '/acne-treatment-poipet/'],
      ],
      'Laser Treatment' => [
        ['CO2 Fractional Laser — Scar &amp; Rejuvenation', 'iAMXVqgJdJE', 'https://youtu.be/iAMXVqgJdJE', '/acne-scar-treatment-poipet/'],
        ['CO2 Fractional Laser Mechanism',       'vHysUv4i9Vo', 'https://youtu.be/vHysUv4i9Vo',       '/acne-scar-treatment-poipet/'],
        ['Laser Tattoo Removal in Poipet',       '6MPQaHCsQ68', 'https://youtu.be/6MPQaHCsQ68',       '/laser-tattoo-removal-poipet/'],
        ['Laser Tattoo Removal at DIVA',         'g4Ak5aNGNX4', 'https://youtu.be/g4Ak5aNGNX4',       '/laser-tattoo-removal-poipet/'],
        ['Laser Tattoo Removal (Full Process)',   'mmy5dFZwlrs', 'https://youtu.be/mmy5dFZwlrs',       '/laser-tattoo-removal-poipet/'],
        ['HIFU Treatment',                       'jrdoU7jc4aQ', 'https://youtu.be/jrdoU7jc4aQ',       '/botox-filler-poipet/'],
        ['HIFU Facelift',                        'HhyN9_t_Cmg', 'https://youtu.be/HhyN9_t_Cmg',       '/botox-filler-poipet/'],
      ],
      'Body Treatment' => [
        ['Underarm Hair Removal in Poipet',      'X24OroVeZT0', 'https://youtu.be/X24OroVeZT0',       '/hair-removal-poipet/'],
        ['Arm Hair Removal in Poipet',           'Eu1eP66nrMY', 'https://youtu.be/Eu1eP66nrMY',       '/hair-removal-poipet/'],
        ['Underarm Peeling in Poipet',           'f-YxYgccg2c', 'https://youtu.be/f-YxYgccg2c',       '/back-acne-treatment-poipet/'],
        ['Underarm Whitening in Poipet',         'ABEqLTbiu1Y', 'https://youtu.be/ABEqLTbiu1Y',       '/back-acne-treatment-poipet/'],
        ['Back Acne Treatment in Poipet',        'JSH7C4dF-NY', 'https://youtu.be/JSH7C4dF-NY',       '/back-acne-treatment-poipet/'],
        ['Back Acne Treatment at DIVA',          'GhMn0OONi8s', 'https://youtu.be/GhMn0OONi8s',       '/back-acne-treatment-poipet/'],
        ['Dark Spots on Legs Treatment',         'cRec_hss22o', 'https://youtu.be/cRec_hss22o',       '/leg-dark-spots-treatment-poipet/'],
      ],
      'Wellness' => [
        ['IV Whitening in Poipet',               'Jg90u5LaPlM', 'https://youtu.be/Jg90u5LaPlM',       '/iv-whitening-poipet/'],
        ['IV Whitening &amp; Glutathione Drip',  'q9zM9ZL_zQw', 'https://youtu.be/q9zM9ZL_zQw',       '/iv-whitening-poipet/'],
      ],
      'Beauty & PMU' => [
        ['Lip Filler in Poipet',                 'yKGBmRSffsE', 'https://youtu.be/yKGBmRSffsE',       '/botox-filler-poipet/'],
        ['Lip Filler at DIVA Skin Clinic',       'd9_MVEXMals', 'https://youtu.be/d9_MVEXMals',       '/botox-filler-poipet/'],
        ['Dark Lip Correction for Men',          '4lroliozc_w', 'https://youtu.be/4lroliozc_w',       '/pmu-lip-blush-eyebrow-poipet/'],
        ['Lips Nano Collagen PMU',               'CHmDLuaSRT0', 'https://youtu.be/CHmDLuaSRT0',       '/pmu-lip-blush-eyebrow-poipet/'],
        ['Hairstroke 9D Eyebrow',                'uyUcRMXXtSk', 'https://youtu.be/uyUcRMXXtSk',       '/pmu-lip-blush-eyebrow-poipet/'],
        ['Hairstroke 9D Eyebrow (2)',             'PBg8jD2ca3k', 'https://youtu.be/PBg8jD2ca3k',       '/pmu-lip-blush-eyebrow-poipet/'],
        ['Thread Nose Lift in Poipet',           'YaJWiUfrHRI', 'https://youtu.be/YaJWiUfrHRI',       '/botox-filler-poipet/'],
        ['Structural Rhinoplasty',               'muKmVZO3gTo', 'https://youtu.be/muKmVZO3gTo',       '/botox-filler-poipet/'],
      ],
    ];

    foreach($all_videos as $group => $videos): ?>
    <div style="margin-bottom:52px">
      <div style="display:flex;align-items:center;gap:14px;margin-bottom:24px">
        <div style="width:32px;height:2px;background:var(--gold)"></div>
        <h2 style="font-size:1.2rem"><?php echo $group; ?> Videos</h2>
      </div>
      <div class="video-grid" style="padding-bottom:8px">
        <?php foreach($videos as $v): ?>
        <div class="video-card" style="display:flex;flex-direction:column;gap:0">
          <a href="<?php echo $v[2]; ?>" target="_blank" rel="noopener" style="text-decoration:none">
            <div class="video-thumb">
              <img src="https://img.youtube.com/vi/<?php echo $v[1]; ?>/mqdefault.jpg"
                   alt="<?php echo htmlspecialchars(html_entity_decode($v[0])); ?>"
                   referrerpolicy="no-referrer" loading="lazy">
              <div class="video-play">
                <svg width="14" height="16" viewBox="0 0 14 16" fill="none"><path d="M1 1l12 7L1 15V1z" fill="#1C1208"/></svg>
              </div>
              <div class="video-title"><?php echo $v[0]; ?></div>
            </div>
          </a>
          <!-- Action buttons below card -->
          <div style="display:flex;gap:6px;margin-top:8px">
            <a href="<?php echo $v[2]; ?>" target="_blank" rel="noopener"
               style="flex:1;text-align:center;font-size:.68rem;padding:6px 8px;background:var(--ink);color:#fff;border-radius:4px;text-decoration:none">Watch</a>
            <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener"
               style="flex:1;text-align:center;font-size:.68rem;padding:6px 8px;background:var(--wa-green);color:#fff;border-radius:4px;text-decoration:none">WhatsApp</a>
          </div>
          <a href="<?php echo $v[3]; ?>"
             style="display:block;text-align:center;font-size:.65rem;color:var(--text-muted);margin-top:5px;text-decoration:none;white-space:nowrap;overflow:hidden;text-overflow:ellipsis"
             onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">View service →</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:14px">Ready to Visit?</span>
    <h2>Send your concern and we will help.</h2>
    <p>Open 12:00 PM – 3:00 AM • By appointment only • Poipet, Cambodia</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
