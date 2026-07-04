<?php
$page_title = 'Advanced Skin Treatment in Poipet';
$meta_desc  = 'Acne, dark spots, melasma, large pores, acne scars, IV whitening, hair removal and body skin treatment in Poipet, Cambodia. Open 12PM–3AM.';
$canonical  = '/';
require __DIR__ . '/assets/partials/header.php';
?>

<!-- ═══════════════ HERO ═══════════════ -->
<section style="background:var(--ink);padding:72px 0 56px;overflow:hidden;position:relative">
  <div style="position:absolute;inset:0;background:radial-gradient(ellipse at 72% 50%,rgba(200,169,110,.07) 0%,transparent 65%);pointer-events:none"></div>
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:center">

      <!-- Left: headline -->
      <div>
        <span class="label" style="display:block;margin-bottom:16px">Advanced Skin Treatment in Poipet</span>
        <h1 style="color:#fff;margin-bottom:18px">Skin treatment<br>based on your<br><em style="color:var(--gold);font-style:italic">real condition.</em></h1>
        <p style="color:#9CA3AF;margin-bottom:28px;line-height:1.75;max-width:400px">
          Acne, dark spots, melasma, large pores, acne scars, IV whitening, hair removal and body skin treatment in Poipet.
        </p>
        <div style="display:flex;gap:12px;flex-wrap:wrap">
          <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
          <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Telegram</a>
        </div>
      </div>

      <!-- Right: search chips -->
      <div style="background:rgba(255,255,255,.05);border:1px solid rgba(200,169,110,.2);border-radius:12px;padding:24px">
        <p class="label" style="margin-bottom:14px">Popular concerns clients search for</p>
        <div style="display:flex;flex-wrap:wrap;gap:8px">
          <?php
          $chips = [
            ['Acne Treatment',    '/acne-treatment-poipet/'],
            ['Dark Spots',        '/dark-spots-treatment-poipet/'],
            ['Large Pores',       '/pores-treatment-poipet/'],
            ['Acne Scars',        '/acne-scar-treatment-poipet/'],
            ['IV Whitening',      '/iv-whitening-poipet/'],
            ['Hair Removal',      '/hair-removal-poipet/'],
            ['Back Acne',         '/back-acne-treatment-poipet/'],
            ['Tattoo Removal',    '/laser-tattoo-removal-poipet/'],
          ];
          foreach($chips as $c): ?>
          <a href="<?php echo $c[1]; ?>"
             style="background:rgba(255,255,255,.07);border:1px solid rgba(255,255,255,.12);color:#E5DDD0;padding:6px 14px;border-radius:20px;font-size:.78rem;text-decoration:none;transition:background .15s"
             onmouseover="this.style.background='rgba(200,169,110,.2)'"
             onmouseout="this.style.background='rgba(255,255,255,.07)'"><?php echo $c[0]; ?></a>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ═══════════════ POPULAR TREATMENTS ═══════════════ -->
<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label mb-8" style="display:block">Popular Treatments</span>
      <h2>Treatments in Poipet</h2>
      <p class="text-muted mt-24" style="margin-top:10px">Choose by your concern — not only by machine name.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(250px,1fr));gap:16px">
      <?php
      $treatments = [
        ['Acne Treatment in Poipet',       'Acne, pimples, oily skin, clogged pores and acne marks.', 'from $50', '/acne-treatment-poipet/'],
        ['Dark Spots Treatment in Poipet', 'Pigmentation, PIH, melasma and uneven tone.',             'from $70', '/dark-spots-treatment-poipet/'],
        ['Large Pores Treatment in Poipet','Pores, rough skin texture, blackheads.',                  '$90',      '/pores-treatment-poipet/'],
        ['Acne Scar Treatment in Poipet',  'CO2, RF microneedling and collagen support.',             'from $90', '/acne-scar-treatment-poipet/'],
        ['IV Whitening in Poipet',         'Skin whitening drip, IV glow and recovery.',              '$55',      '/iv-whitening-poipet/'],
        ['Underarm Hair Removal in Poipet','Less unwanted hair, smoother underarm.',                  '$15',      '/hair-removal-poipet/'],
        ['Back Acne Treatment in Poipet',  'Back acne, acne marks, rough body skin.',                 'from $50', '/back-acne-treatment-poipet/'],
        ['Laser Tattoo Removal in Poipet', 'Old tattoos, eyebrow tattoo and unwanted ink.',           'from $30', '/laser-tattoo-removal-poipet/'],
      ];
      foreach($treatments as $t): ?>
      <a href="<?php echo $t[3]; ?>" style="text-decoration:none">
        <div class="card" style="height:100%">
          <span class="label mb-8" style="display:block"><?php echo explode(' in Poipet', $t[0])[1] ?? 'Treatment'; ?></span>
          <h3 style="font-size:1rem;margin-bottom:8px"><?php echo $t[0]; ?></h3>
          <p style="font-size:.82rem;color:var(--text-muted);margin-bottom:14px;line-height:1.55"><?php echo $t[1]; ?></p>
          <span style="font-family:var(--font-display);font-size:1.1rem;color:var(--gold)"><?php echo $t[2]; ?></span>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-32">
      <a href="/services/" class="btn btn-outline">View All Services →</a>
    </div>
  </div>
</section>

<!-- ═══════════════ JULY PROMOTION ═══════════════ -->
<section style="background:var(--ink);padding:64px 0">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">Current Promotion</span>
      <h2 style="color:#fff">Promotion Price — Current Promotion</h2>
      <p style="color:#9CA3AF;margin-top:10px;font-size:.88rem">Contact us to confirm current promotion price. Liên hệ để xác nhận và đặt lịch.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(155px,1fr));gap:12px;max-width:820px;margin:0 auto 32px">
      <?php
      $promos = [
        ['$30','Basic Skin Care',       '/price-list/'],
        ['$48','Brightening Skin Care', '/price-list/'],
        ['$50','Acne Peel',             '/acne-treatment-poipet/'],
        ['$90','RF Microneedling',      '/pores-treatment-poipet/'],
        ['$55','IV Whitening',          '/iv-whitening-poipet/'],
        ['$15','Underarm Hair Removal', '/hair-removal-poipet/'],
        ['$69','Filler (from)',         '/botox-filler-poipet/'],
        ['$90','Botox (from)',          '/botox-filler-poipet/'],
        ['$72','Pico Laser (from)',     '/dark-spots-treatment-poipet/'],
        ['$90','CO2 Laser (from)',      '/acne-scar-treatment-poipet/'],
      ];
      foreach($promos as $p): ?>
      <a href="<?php echo $p[2]; ?>" style="text-decoration:none">
        <div style="background:rgba(255,255,255,.05);border:1px solid rgba(200,169,110,.22);border-radius:10px;padding:18px 14px;text-align:center;transition:border-color .2s"
             onmouseover="this.style.borderColor='rgba(200,169,110,.6)'"
             onmouseout="this.style.borderColor='rgba(200,169,110,.22)'">
          <div style="font-family:var(--font-display);font-size:1.7rem;color:var(--gold);line-height:1"><?php echo $p[0]; ?></div>
          <div style="font-size:.73rem;color:#9CA3AF;margin-top:6px;line-height:1.4"><?php echo $p[1]; ?></div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="text-center">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Hỏi giá qua WhatsApp</a>
      &nbsp;
      <a href="/price-list/" class="btn btn-outline" style="color:var(--gold);border-color:var(--gold)">Full Price List →</a>
    </div>
  </div>
</section>

<!-- ═══════════════ TREATMENT VIDEOS ═══════════════ -->
<section class="section" style="background:var(--cream)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">Treatment Videos</span>
      <h2>Video Gallery</h2>
      <p class="text-muted" style="margin-top:10px;font-size:.88rem">Video thực tế tại DIVA Skin Clinic Poipet. Scroll để xem thêm →</p>
    </div>

    <div class="video-grid">
      <?php
      $videos = [
        ['IV Whitening in Poipet',      'Jg90u5LaPlM', 'https://youtu.be/Jg90u5LaPlM',      '/iv-whitening-poipet/'],
        ['Acne Peel Treatment',         'X81wlAVa7Sg', 'https://youtu.be/X81wlAVa7Sg',      '/acne-treatment-poipet/'],
        ['Back Acne Treatment',         'JSH7C4dF-NY', 'https://youtu.be/JSH7C4dF-NY',      '/back-acne-treatment-poipet/'],
        ['Hair Removal in Poipet',      'X24OroVeZT0', 'https://youtu.be/X24OroVeZT0',      '/hair-removal-poipet/'],
        ['Laser Tattoo Removal',        '6MPQaHCsQ68', 'https://youtu.be/6MPQaHCsQ68',      '/laser-tattoo-removal-poipet/'],
        ['Dark Spots on Legs',          'cRec_hss22o', 'https://youtu.be/cRec_hss22o',      '/leg-dark-spots-treatment-poipet/'],
        ['Glow Peel Treatment',         'Liay1dd1Aoc', 'https://youtu.be/Liay1dd1Aoc',      '/acne-treatment-poipet/'],
        ['CO2 Laser Scar Treatment',    'iAMXVqgJdJE', 'https://youtu.be/iAMXVqgJdJE',      '/acne-scar-treatment-poipet/'],
        ['Lip Filler in Poipet',        'yKGBmRSffsE', 'https://youtu.be/yKGBmRSffsE',      '/botox-filler-poipet/'],
        ['HIFU Facelift in Poipet',     'HhyN9_t_Cmg', 'https://youtu.be/HhyN9_t_Cmg',      '/services/'],
      ];
      foreach($videos as $v): ?>
      <a href="<?php echo $v[2]; ?>" target="_blank" rel="noopener" class="video-card">
        <div class="video-thumb">
          <img src="https://img.youtube.com/vi/<?php echo $v[1]; ?>/mqdefault.jpg" referrerpolicy="no-referrer"
               alt="<?php echo htmlspecialchars($v[0]); ?>"
               referrerpolicy="no-referrer" loading="lazy">
          <div class="video-play">
            <svg width="14" height="16" viewBox="0 0 14 16" fill="none">
              <path d="M1 1l12 7L1 15V1z" fill="#1C1208"/>
            </svg>
          </div>
          <div class="video-title"><?php echo $v[0]; ?></div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-32">
      <a href="/videos-gallery/" class="btn btn-outline">View All Videos →</a>
    </div>
  </div>
</section>

<!-- ═══════════════ WHY CHOOSE DIVA ═══════════════ -->
<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">Why Choose DIVA</span>
      <h2>Not treatment like a menu</h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(210px,1fr));gap:20px">
      <?php
      $reasons = [
        ['Technology is a tool',        'We focus on the skin concern and treatment goal first. Method is chosen after real skin assessment.'],
        ['Consultation is responsibility','We explain treatment and aftercare clearly before starting. No upselling, no unnecessary add-ons.'],
        ['By appointment only',         'Each client gets enough time for proper treatment, consultation and follow-up.'],
        ['Realistic expectations',      'We explain what can improve, what may take time and what depends on aftercare.'],
      ];
      foreach($reasons as $r): ?>
      <div class="card">
        <div class="divider"></div>
        <h3 style="font-size:1rem;margin-bottom:10px"><?php echo $r[0]; ?></h3>
        <p style="font-size:.82rem;color:var(--text-muted);line-height:1.65"><?php echo $r[1]; ?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-32">
      <a href="/about-us/" class="btn btn-outline">About DIVA →</a>
    </div>
  </div>
</section>

<!-- ═══════════════ BEFORE/AFTER GALLERY ═══════════════ -->
<section style="background:var(--ink);padding:56px 0">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:8px">Results</span>
      <h2 style="color:#fff">Before &amp; After</h2>
    </div>
    <div class="grid-4">
      <?php
      $gallery = [
        ['https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg','Acne treatment results'],
        ['https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg','Melasma treatment results'],
        ['https://i.ibb.co/VWX9QGLT/h-nh-nh-tr-c-sau-i-u-tr-m-n-n-v-da-kh-ng-u-m-u.jpg','Skin results'],
        ['https://i.ibb.co/Kck5TjRw/h-nh-nh-tr-c-sau-i-u-tr-m-n-vi-m-l-ch-n-l-ng-to-v-s-o-r-cho-kh-ch-h-ng-nam.jpg','Acne scar results'],
        ['https://i.ibb.co/20Nvwv7m/nen-xuat-hien-o-trang-chinh-nh-i-u-tr-th-m-s-u-m-n-l-ch-n-l-ng-to-v-da-kh-ng-u-m-u-tr-c-sau.png','Pore texture results'],
        ['https://i.ibb.co/vCkDwwPT/h-nh-nh-ket-qua-sau-khi-tiem-fillerm-i-xong.jpg','Lip filler results'],
        ['https://i.ibb.co/PzcCN9LX/h-nh-nh-i-u-tr-l-ch-n-l-ng-to-da-kh-ng-u-m-u-tr-c-v-sau-3-bu-i.png','Pore treatment results'],
        ['https://i.ibb.co/Vc24WDMW/h-nh-nh-b-N-ang-n-m-tr-n-gi-ng-tay-c-m-kim-gi-i-va-noi-dung-thi-u-v-d-ch-v-Truy-n-Tr-ng.jpg','IV whitening'],
      ];
      foreach($gallery as $g): ?>
      <div style="aspect-ratio:1;border-radius:var(--radius-sm);overflow:hidden">
        <img src="<?php echo $g[0]; ?>"
             alt="<?php echo htmlspecialchars($g[1]); ?>"
             referrerpolicy="no-referrer" loading="lazy"
             style="width:100%;height:100%;object-fit:cover;display:block">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════════════ FINAL CTA ═══════════════ -->
<section class="cta-section">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:14px">Get Started</span>
    <h2>Need help choosing<br>the right treatment?</h2>
    <p>Send your skin photo or concern. We will suggest suitable options and price.<br>
       Open 12:00 PM – 3:00 AM &nbsp;•&nbsp; Poipet, Cambodia</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
      <a href="<?php echo $loc_link; ?>" target="_blank" rel="noopener" class="btn btn-dark">Location</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/assets/partials/footer.php'; ?>
<?php require __DIR__ . '/assets/partials/sticky-contact.php'; ?>
