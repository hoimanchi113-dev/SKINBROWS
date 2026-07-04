<?php
$page_title = 'Services in Poipet — Skin Treatment, Laser, Injectables, Body, Wellness';
$meta_desc  = 'Skin treatment, laser, injectables, body treatment, IV whitening, hair removal and PMU in Poipet, Cambodia. DIVA Skin Clinic Poipet.';
$canonical  = '/services/';
require __DIR__ . '/../assets/partials/header.php';
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">Services in Poipet</span>
    <h1>Skin Treatment &amp; Aesthetic Services</h1>
    <p style="margin-top:14px">
      Skin Treatment • Laser • Injectables • Body Treatment • IV Whitening • PMU<br>
      Choose by your concern — not only by machine name. We check your skin condition, goal and budget, then select a suitable treatment direction.
    </p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:28px">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="/price-list/" class="btn btn-outline">View Promotion Price</a>
    </div>
  </div>
</section>

<!-- POPULAR TREATMENTS -->
<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">Popular Treatments</span>
      <h2>What Clients Search For in Poipet</h2>
      <p class="text-muted" style="margin-top:10px">Service names use your concern + in Poipet — so you find exactly what you need.</p>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:14px">
      <?php
      $popular = [
        [
          'Acne Treatment in Poipet',
          'Acne, pimples, oily skin, clogged pores and acne marks.',
          ['Acne','Peel','LED'],
          'from $50',
          '/acne-treatment-poipet/',
          'https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg'
        ],
        [
          'Dark Spots Treatment in Poipet',
          'Pigmentation, PIH, melasma and uneven skin tone.',
          ['Pico','Peel','Meso'],
          'from $70',
          '/dark-spots-treatment-poipet/',
          'https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg'
        ],
        [
          'Large Pores Treatment in Poipet',
          'Pores, rough skin texture, acne scars and blackheads.',
          ['RF','CO2','Peel'],
          '$90',
          '/pores-treatment-poipet/',
          'https://i.ibb.co/20Nvwv7m/nen-xuat-hien-o-trang-chinh-nh-i-u-tr-th-m-s-u-m-n-l-ch-n-l-ng-to-v-da-kh-ng-u-m-u-tr-c-sau.png'
        ],
        [
          'Acne Scar Treatment in Poipet',
          'CO2 laser, RF microneedling and collagen remodelling support.',
          ['CO2','RF','Meso'],
          'from $90',
          '/acne-scar-treatment-poipet/',
          'https://i.ibb.co/Kck5TjRw/h-nh-nh-tr-c-sau-i-u-tr-m-n-vi-m-l-ch-n-l-ng-to-v-s-o-r-cho-kh-ch-h-ng-nam.jpg'
        ],
        [
          'IV Whitening in Poipet',
          'Skin whitening drip, glutathione IV and recovery programs.',
          ['IV Glow','Gluta','Vitamin C'],
          '$55',
          '/iv-whitening-poipet/',
          'https://i.ibb.co/Vc24WDMW/h-nh-nh-b-N-ang-n-m-tr-n-gi-ng-tay-c-m-kim-gi-i-va-noi-dung-thi-u-v-d-ch-v-Truy-n-Tr-ng.jpg'
        ],
        [
          'Underarm Hair Removal in Poipet',
          'Less unwanted hair, smoother underarm skin.',
          ['Laser','Hair Removal'],
          '$15',
          '/hair-removal-poipet/',
          'https://i.ibb.co/R4B8SGrq/nh-b-a-d-ch-v-tri-t-l-ng-v-m-ta-nhi-u-v-tr.png'
        ],
        [
          'Back Acne Treatment in Poipet',
          'Back acne, acne marks, rough body skin and dark marks.',
          ['Body Peel','Laser','Repair'],
          'from $50',
          '/back-acne-treatment-poipet/',
          'https://i.ibb.co/VWX9QGLT/h-nh-nh-tr-c-sau-i-u-tr-m-n-n-v-da-kh-ng-u-m-u.jpg'
        ],
        [
          'Leg Dark Spots Treatment in Poipet',
          'Dark spots on legs, hyperpigmentation, uneven skin tone on body.',
          ['Peel','Laser','Meso'],
          'from $50',
          '/leg-dark-spots-treatment-poipet/',
          'https://i.ibb.co/PzcCN9LX/h-nh-nh-i-u-tr-l-ch-n-l-ng-to-da-kh-ng-u-m-u-tr-c-v-sau-3-bu-i.png'
        ],
        [
          'Laser Tattoo Removal in Poipet',
          'Old tattoos, cosmetic tattoo removal and unwanted ink.',
          ['Pico','Laser'],
          'from $30',
          '/laser-tattoo-removal-poipet/',
          'https://i.ibb.co/HTNMg4Mm/h-nh-nh-m-y-laser-pico.jpg'
        ],
        [
          'Melasma Treatment in Poipet',
          'Melasma, deep pigmentation, hormonal spots and blotchy skin.',
          ['Pico','Peel','Meso'],
          'from $70',
          '/melasma-treatment-poipet/',
          'https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg'
        ],
      ];
      foreach($popular as $s): ?>
      <a href="<?php echo $s[4]; ?>" style="text-decoration:none">
        <div class="card" style="padding:0;overflow:hidden;display:flex;flex-direction:column;height:100%">
          <div style="height:160px;overflow:hidden;flex-shrink:0">
            <img src="<?php echo $s[5]; ?>" alt="<?php echo htmlspecialchars($s[0]); ?>"
                 referrerpolicy="no-referrer" loading="lazy"
                 style="width:100%;height:100%;object-fit:cover;display:block;transition:transform .35s"
                 onmouseover="this.style.transform='scale(1.04)'"
                 onmouseout="this.style.transform='scale(1)'">
          </div>
          <div style="padding:18px;flex:1;display:flex;flex-direction:column">
            <h3 style="font-size:.95rem;margin-bottom:6px;line-height:1.35"><?php echo $s[0]; ?></h3>
            <p style="font-size:.8rem;color:var(--text-muted);margin-bottom:12px;line-height:1.5;flex:1"><?php echo $s[1]; ?></p>
            <div style="display:flex;align-items:center;justify-content:space-between">
              <div style="display:flex;gap:5px;flex-wrap:wrap">
                <?php foreach($s[2] as $tag): ?>
                <span class="chip"><?php echo $tag; ?></span>
                <?php endforeach; ?>
              </div>
              <span style="font-family:var(--font-display);font-size:1.05rem;color:var(--gold);white-space:nowrap;margin-left:8px"><?php echo $s[3]; ?></span>
            </div>
          </div>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SERVICE GROUPS -->
<section class="section" style="background:var(--cream)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">Service Groups</span>
      <h2>All Treatment Categories</h2>
    </div>

    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:20px">

      <!-- 1. Skin Treatment -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:rgba(200,169,110,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:1rem;font-weight:500">1</div>
          <h3 style="font-size:1.05rem;margin:0">Skin Treatment</h3>
        </div>
        <ul style="list-style:none;font-size:.83rem;color:var(--text-muted);line-height:2">
          <li>• <a href="/acne-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Acne treatment</a></li>
          <li>• <a href="/dark-spots-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Dark spots &amp; melasma</a></li>
          <li>• <a href="/pores-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Pores &amp; acne scars</a></li>
          <li>• <a href="/acne-scar-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">CO2 / Pico / RF</a></li>
          <li>• Peel / Meso / LED</li>
        </ul>
        <a href="/acne-treatment-poipet/" style="font-size:.78rem;color:var(--gold);text-decoration:none;letter-spacing:.06em">View details →</a>
      </div>

      <!-- 2. Injectables -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:rgba(200,169,110,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:1rem;font-weight:500">2</div>
          <h3 style="font-size:1.05rem;margin:0">Injectables &amp; Skin Boosters</h3>
        </div>
        <ul style="list-style:none;font-size:.83rem;color:var(--text-muted);line-height:2">
          <li>• <a href="/botox-filler-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Botox</a></li>
          <li>• <a href="/botox-filler-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Filler</a></li>
          <li>• Skinbooster</li>
          <li>• Rejuran / Profhilo</li>
          <li>• Meso / PRP</li>
        </ul>
        <a href="/botox-filler-poipet/" style="font-size:.78rem;color:var(--gold);text-decoration:none;letter-spacing:.06em">View details →</a>
      </div>

      <!-- 3. Body Treatment -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:rgba(200,169,110,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:1rem;font-weight:500">3</div>
          <h3 style="font-size:1.05rem;margin:0">Body Treatment</h3>
        </div>
        <ul style="list-style:none;font-size:.83rem;color:var(--text-muted);line-height:2">
          <li>• <a href="/back-acne-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Back acne</a></li>
          <li>• <a href="/leg-dark-spots-treatment-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Leg dark spots</a></li>
          <li>• Underarm brightening</li>
          <li>• <a href="/hair-removal-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Hair removal</a></li>
          <li>• <a href="/laser-tattoo-removal-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Mole / skin tag removal</a></li>
        </ul>
        <a href="/back-acne-treatment-poipet/" style="font-size:.78rem;color:var(--gold);text-decoration:none;letter-spacing:.06em">View details →</a>
      </div>

      <!-- 4. PMU & Beauty -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:rgba(200,169,110,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:1rem;font-weight:500">4</div>
          <h3 style="font-size:1.05rem;margin:0">PMU &amp; Beauty</h3>
        </div>
        <ul style="list-style:none;font-size:.83rem;color:var(--text-muted);line-height:2">
          <li>• <a href="/pmu-lip-blush-eyebrow-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Lip blush</a></li>
          <li>• Dark lip correction</li>
          <li>• <a href="/pmu-lip-blush-eyebrow-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Hairstroke eyebrow</a></li>
          <li>• <a href="/laser-tattoo-removal-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">Tattoo removal</a></li>
        </ul>
        <a href="/pmu-lip-blush-eyebrow-poipet/" style="font-size:.78rem;color:var(--gold);text-decoration:none;letter-spacing:.06em">View details →</a>
      </div>

      <!-- 5. Wellness & Brightening -->
      <div class="card">
        <div style="display:flex;align-items:center;gap:12px;margin-bottom:16px">
          <div style="width:36px;height:36px;background:rgba(200,169,110,.15);border-radius:8px;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:1rem;font-weight:500">5</div>
          <h3 style="font-size:1.05rem;margin:0">Wellness &amp; Brightening</h3>
        </div>
        <ul style="list-style:none;font-size:.83rem;color:var(--text-muted);line-height:2">
          <li>• <a href="/iv-whitening-poipet/" style="color:var(--text-muted);text-decoration:none" onmouseover="this.style.color='var(--gold)'" onmouseout="this.style.color='var(--text-muted)'">IV Whitening</a></li>
          <li>• Glutathione drip</li>
          <li>• Vitamin C drip</li>
          <li>• Recovery support</li>
          <li>• Body glow</li>
        </ul>
        <a href="/iv-whitening-poipet/" style="font-size:.78rem;color:var(--gold);text-decoration:none;letter-spacing:.06em">View details →</a>
      </div>

    </div>
  </div>
</section>

<!-- TREATMENT VIDEOS STRIP -->
<section class="section" style="background:var(--ink)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px;color:var(--gold)">Treatment Videos</span>
      <h2 style="color:#fff">See Treatments in Action</h2>
    </div>
    <div class="video-grid">
      <?php
      $vids = [
        ['Acne Peel Treatment','X81wlAVa7Sg','https://youtu.be/X81wlAVa7Sg'],
        ['IV Whitening in Poipet','Jg90u5LaPlM','https://youtu.be/Jg90u5LaPlM'],
        ['Back Acne Treatment','JSH7C4dF-NY','https://youtu.be/JSH7C4dF-NY'],
        ['Hair Removal in Poipet','X24OroVeZT0','https://youtu.be/X24OroVeZT0'],
        ['Laser Tattoo Removal','6MPQaHCsQ68','https://youtu.be/6MPQaHCsQ68'],
        ['CO2 Laser Scar Treatment','iAMXVqgJdJE','https://youtu.be/iAMXVqgJdJE'],
      ];
      foreach($vids as $v): ?>
      <a href="<?php echo $v[2]; ?>" target="_blank" rel="noopener" class="video-card">
        <div class="video-thumb">
          <img src="https://img.youtube.com/vi/<?php echo $v[1]; ?>/mqdefault.jpg" referrerpolicy="no-referrer"
               alt="<?php echo htmlspecialchars($v[0]); ?>"
               referrerpolicy="no-referrer" loading="lazy">
          <div class="video-play">
            <svg width="14" height="16" viewBox="0 0 14 16" fill="none"><path d="M1 1l12 7L1 15V1z" fill="#1C1208"/></svg>
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

<!-- FINAL CTA -->
<section class="cta-section">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:14px">Need Help Choosing?</span>
    <h2>Not sure which treatment is right for you?</h2>
    <p>Send your skin photo or describe your concern. We will suggest suitable options and current promotion price.</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Send Skin Photo on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
