<?php
$page_title = 'Blog — Skin Knowledge & Clinic Updates';
$meta_desc  = 'Skin knowledge and clinic updates from DIVA Skin Clinic Poipet. Learn about acne, melasma, laser, IV whitening, injectables and more.';
$canonical  = '/blog/';
require __DIR__ . '/../assets/partials/header.php';
?>

<div class="page-hero">
  <div class="container">
    <span class="label">Blog</span>
    <h1>Skin Knowledge &amp; Clinic Updates</h1>
    <p style="margin-top:12px">Learn about skin concerns, treatment options and realistic expectations before visiting DIVA Skin Clinic Poipet.</p>
  </div>
</div>

<!-- Hero gallery strip -->
<div style="background:var(--ink);padding:0 0 40px">
  <div class="container">
    <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:10px">
      <img src="https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg" alt="Acne treatment results" referrerpolicy="no-referrer" style="width:100%;border-radius:8px;height:140px;object-fit:cover;display:block">
      <img src="https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg" alt="Melasma treatment results" referrerpolicy="no-referrer" style="width:100%;border-radius:8px;height:140px;object-fit:cover;display:block">
      <img src="https://i.ibb.co/vCkDwwPT/h-nh-nh-ket-qua-sau-khi-tiem-fillerm-i-xong.jpg" alt="Lip filler results" referrerpolicy="no-referrer" style="width:100%;border-radius:8px;height:140px;object-fit:cover;display:block">
      <img src="https://i.ibb.co/Vc24WDMW/h-nh-nh-b-N-ang-n-m-tr-n-gi-ng-tay-c-m-kim-gi-i-va-noi-dung-thi-u-v-d-ch-v-Truy-n-Tr-ng.jpg" alt="IV whitening infusion" referrerpolicy="no-referrer" style="width:100%;border-radius:8px;height:140px;object-fit:cover;display:block">
    </div>
  </div>
</div>

<section class="section">
  <div class="container">

    <!-- Filter tabs -->
    <div class="filter-wrap mb-32">
      <button class="filter-btn active" data-cat="all" onclick="filterPosts('all',this)">All (33)</button>
      <button class="filter-btn" data-cat="Skin Treatment" onclick="filterPosts('Skin Treatment',this)">Skin Treatment</button>
      <button class="filter-btn" data-cat="Injectables" onclick="filterPosts('Injectables',this)">Injectables</button>
      <button class="filter-btn" data-cat="Wellness" onclick="filterPosts('Wellness',this)">Wellness</button>
      <button class="filter-btn" data-cat="Education" onclick="filterPosts('Education',this)">Education</button>
      <button class="filter-btn" data-cat="Service" onclick="filterPosts('Service',this)">Service</button>
      <button class="filter-btn" data-cat="Body Treatment" onclick="filterPosts('Body Treatment',this)">Body Treatment</button>
    </div>

    <div class="grid-3" id="blog-grid">

      <?php
      $posts = [
        ['acne-treatment-poipet','Skin Treatment','Acne Treatment in Poipet','Causes, types, treatment direction and aftercare at DIVA Skin Clinic Poipet.','https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg'],
        ['melasma-pigmentation-treatment-poipet','Skin Treatment','Melasma and Pigmentation Treatment in Poipet','Melasma, dark spots, freckles and uneven skin tone treatment using Pico laser and chemical peel.','https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg'],
        ['why-acne-keeps-coming-back-poipet','Skin Treatment','Why Does Acne Keep Coming Back?','Real root causes of recurring acne and what it takes to actually control it long-term.','https://i.ibb.co/rRpPnQKX/h-nh-nh-tr-c-v-sau-i-u-tr-da-b-k-ch-ng-n-i-m-n-r-p.png'],
        ['pores-rough-texture-poipet','Skin Treatment','Pores and Rough Skin Texture Treatment','RF microneedling, pore treatment, chemical peel and personalized skin plans in Poipet.','https://i.ibb.co/20Nvwv7m/nen-xuat-hien-o-trang-chinh-nh-i-u-tr-th-m-s-u-m-n-l-ch-n-l-ng-to-v-da-kh-ng-u-m-u-tr-c-sau.png'],
        ['sensitive-skin-barrier-repair-poipet','Skin Treatment','Sensitive Skin and Skin Barrier Repair','Why barrier repair may come before stronger treatment and how DIVA approaches sensitive skin.','https://i.ibb.co/rRpPnQKX/h-nh-nh-tr-c-v-sau-i-u-tr-da-b-k-ch-ng-n-i-m-n-r-p.png'],
        ['steroid-damaged-skin-recovery-poipet','Skin Treatment','Steroid-Damaged Skin — Signs and Recovery','Signs of steroid damage and recovery approach at DIVA Skin Clinic Poipet.','https://i.ibb.co/9HbMwnrB/Signs-of-Steroid-Damaged-Skin.png'],
        ['why-laser-makes-melasma-worse-pih-pie-poipet','Skin Treatment','Why Laser Makes Melasma Worse — PIH and PIE Explained','Did laser make your melasma worse? Understand why this happens and how to treat pigmentation correctly.','https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg'],
        ['how-to-choose-skincare-products','Skin Treatment','How to Choose Skincare Products for Your Skin','Selecting products for acne, pigmentation, sensitive skin, oily skin, and post-treatment recovery.','https://i.ibb.co/Sw0YVkHk/s-n-ph-m-vitamin-b5-d-ng-ti-m.png'],
        ['skin-treatment-guide-poipet','Skin Treatment','Skin Treatment Guide — How to Choose the Right Treatment','Not sure which skin treatment you need? DIVA explains how to understand your skin concern.','https://i.ibb.co/231XLx89/h-nh-nh-gi-ng-va-ph-ng-i-u-tr.jpg'],
        ['laser-technology-diva-skin-clinic-poipet','Skin Treatment','Laser Technology at DIVA Skin Clinic Poipet','CO2 Laser, Pico Laser, RF Microneedling and HIFU — how they work and which concern each treats.','https://i.ibb.co/kgyBrXrf/h-nh-nh-m-y-laser-co2-c-a-diva.jpg'],
        ['iv-whitening-gluta-drip-poipet','Wellness','Whitening Infusion &amp; Gluta Drip in Poipet','What to know before starting IV whitening — ingredients, suitability and realistic results.','https://i.ibb.co/8gx9F5zf/IMG-4534.jpg'],
        ['iv-drip-whitening-infusion-poipet','Wellness','IV Drip and Whitening Infusion in Poipet','IV wellness programs for glow, brightening and recovery at DIVA Skin Clinic Poipet.','https://i.ibb.co/Vc24WDMW/h-nh-nh-b-N-ang-n-m-tr-n-gi-ng-tay-c-m-kim-gi-i-va-noi-dung-thi-u-v-d-ch-v-Truy-n-Tr-ng.jpg'],
        ['mounjaro-weight-management-poipet','Wellness','Mounjaro and Medical Weight Management in Poipet','Suitability, safety and what to expect from injectable weight management in Poipet.','https://i.ibb.co/Kzf4BFws/h-nh-nh-b-t-ti-m-gi-m-c-n-Nh-t-B-n.png'],
        ['technology-devices-diva-skin-clinic-poipet','Service','Technology &amp; Devices at DIVA','CO2 Laser, Pico Laser, HIFU, RF — what each device does and which concern it treats.','https://i.ibb.co/HTNMg4Mm/h-nh-nh-m-y-laser-pico.jpg'],
        ['botox-vs-filler-poipet','Service','Botox vs Filler in Poipet — What Is the Difference?','Learn the difference between Botox and filler and how DIVA selects the right option.','https://i.ibb.co/xqjZxF48/h-nh-nh-gi-i-thi-u-d-ch-v-ti-m-botox-h-m.jpg'],
        ['injectable-treatments-complete-guide-poipet','Injectables','Complete Guide to Injectable Treatments in Poipet','Botox, filler, skinbooster, Rejuran, Profhilo and fat dissolving — what to understand before visiting.','https://i.ibb.co/Kzj6MWkN/h-nh-nh-danh-s-ch-s-n-ph-m-ti-m-chia-theo-nh-m-c-a-Diva.png'],
        ['pdo-thread-lift-nose-chin-poipet','Injectables','PDO Thread Lift — Face Lifting, Nose Thread and Chin Contour','Non-surgical facelift, nose reshaping and chin contour with PDO threads in Poipet.','https://i.ibb.co/0jC7yP0n/h-nh-nh-gi-i-thi-u-v-d-ch-v-c-ng-ch.png'],
        ['prp-rejuran-regenerative-treatments-poipet','Injectables','PRP, Rejuran and Regenerative Skin Treatments','Biological skin regeneration from your own blood or advanced regenerative products at DIVA Poipet.','https://i.ibb.co/Xk2nQtKc/h-nh-nh-chuy-n-vi-n-ang-l-y-m-u-l-m-Prp.png'],
        ['filler-vascular-occlusion-emergency-signs-poipet','Injectables','Filler Vascular Occlusion — Emergency Signs After Filler','Warning signs of filler vascular occlusion, what to do immediately, and how to choose a safe clinic.','https://i.ibb.co/vCkDwwPT/h-nh-nh-ket-qua-sau-khi-tiem-fillerm-i-xong.jpg'],
        ['skin-treatment-for-men-poipet','Injectables','Skin Treatment for Men in Poipet','Acne, forehead lines, dark circles, pores, jaw botox and body treatment for male clients at DIVA.','https://i.ibb.co/xqjZxF48/h-nh-nh-gi-i-thi-u-d-ch-v-ti-m-botox-h-m.jpg'],
        ['body-beauty-hair-removal-poipet','Body Treatment','Body Beauty and Hair Removal in Poipet','Laser hair removal, body brightening, body acne, underarm whitening for all clients in Poipet.','https://i.ibb.co/R4B8SGrq/nh-b-a-d-ch-v-tri-t-l-ng-v-m-ta-nhi-u-v-tr.png'],
        ['keloid-scar-treatment-poipet','Body Treatment','Keloid and Scar Treatment in Poipet','Keloid scar injection, hypertrophic scar, body scar and tattoo removal planned for your condition.','https://i.ibb.co/JRm8ttjm/h-nh-nh-s-n-ph-m-v-k-t-qu-tr-c-sau-khi-ti-m-tan-s-o-l-ic.png'],
        ['3-phase-skin-treatment-system-diva-poipet','Education','The 3-Phase Skin Treatment System at DIVA','Why treatment order matters more than machine name — Control, Drive Change, Stabilize explained.','https://i.ibb.co/gMmsC0FT/IMG-5022.jpg'],
        ['after-laser-peel-microneedling-normal-vs-abnormal-poipet','Education','After Laser, Peel or Microneedling — Normal vs Abnormal','Normal vs abnormal reactions after laser, peel, microneedling, botox or filler — and when to contact the clinic.','https://i.ibb.co/N2fBbMQ5/IMG-2126.jpg'],
        ['skincare-ingredients-what-to-mix-avoid-poipet','Education','Skincare Ingredients — What to Mix and What to Avoid','Wrong ingredient combinations can damage your skin. What works together, what to avoid.','https://i.ibb.co/Sw0YVkHk/s-n-ph-m-vitamin-b5-d-ng-ti-m.png'],
        ['warranty-refund-policy-diva-poipet','Education','Warranty, Treatment Support and Refund Policy','Transparent warranty, support and refund policy for all services at DIVA Skin Clinic Poipet.','https://i.ibb.co/Kzj6MWkN/h-nh-nh-danh-s-ch-s-n-ph-m-ti-m-chia-theo-nh-m-c-a-Diva.png'],
        ['why-consultation-aftercare-matter','Education','Why Clear Consultation and Aftercare Matter','Protecting your results before, during and after treatment at DIVA Skin Clinic Poipet.','https://i.ibb.co/kg50n2D2/kh-ng-gian-ph-ng-t-v-n-h-nh-nh-kh-ng-c-ng-i.jpg'],
        ['why-skin-treatment-results-different','Education','Why Skin Treatment Results Are Different for Each Person','Same treatment, different results? DIVA explains why outcomes vary and what affects your results.','https://i.ibb.co/Xcprn1X/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-da-m-n-th-m.jpg'],
        ['local-clients-poipet-cambodia','Education','DIVA Skin Clinic — For Clients in Poipet, Cambodia','Skin treatment, laser, botox, filler, IV whitening and body treatment for local clients in Poipet.','https://i.ibb.co/YB0QnwTR/h-nh-nh-tr-c-c-a-ch-p-g-n-c-a-c-a-diva-poipet.png'],
        ['diva-skin-clinic-poipet-khach-viet','Education','DIVA Skin Clinic Poipet — Dành cho Khách Việt','Điều trị da, thẩm mỹ và làm đẹp cho khách Việt tại Poipet Cambodia. Tư vấn tiếng Việt.','https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg'],
        ['klinik-kecantikan-poipet-klien-indonesia','Service','Klinik Kecantikan untuk Klien Indonesia di Poipet','Perawatan jerawat, nám, bekas jerawat, laser, botox, filler, infus whitening di Poipet.','https://i.ibb.co/NnFXp7F9/t-n-th-ng-hi-u-slogan.png'],
        ['klinik-kecantikan-poipet-pelanggan-malaysia','Service','Klinik Kecantikan untuk Pelanggan Malaysia di Poipet','Rawatan jerawat, nám, parut jerawat, laser, botox, filler, infus putih di Poipet Cambodia.','https://i.ibb.co/NnFXp7F9/t-n-th-ng-hi-u-slogan.png'],
        ['diva-skin-clinic-poipet-zhongwen','Service','DIVA Skin Clinic Poipet │ 波贝市专业美容皮肤诊所','痘痘、色斑、痘疤、激光、肉毒素、玻尿酸、美白点滴。柬埔寨波贝市。','https://i.ibb.co/NnFXp7F9/t-n-th-ng-hi-u-slogan.png'],

      ];
      foreach($posts as $p): ?>
      <a href="/blog/<?php echo $p[0]; ?>/" class="card blog-card" data-cat="<?php echo $p[1]; ?>" style="text-decoration:none">
        <div class="blog-thumb">
          <img src="<?php echo $p[4]; ?>"
               alt="<?php echo htmlspecialchars(html_entity_decode($p[2])); ?>"
               referrerpolicy="no-referrer" loading="lazy">
        </div>
        <div class="blog-card-body">
          <span class="label mb-8" style="display:block;font-size:.62rem"><?php echo $p[1]; ?></span>
          <h3 style="font-size:.95rem;line-height:1.35;margin-bottom:8px"><?php echo $p[2]; ?></h3>
          <p style="font-size:.8rem;color:var(--text-muted);line-height:1.55"><?php echo $p[3]; ?></p>
        </div>
      </a>
      <?php endforeach; ?>

    </div><!-- #blog-grid -->
  </div>
</section>

<style>
.blog-card[style*="display:none"] { display: none !important; }
</style>

<script>
function filterPosts(cat, btn) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.blog-card').forEach(card => {
    card.style.display = (cat === 'all' || card.dataset.cat === cat) ? '' : 'none';
  });
}
</script>

<!-- Gallery -->
<section style="background:var(--warm-white);padding:48px 0">
  <div class="container">
    <div style="font-size:.62rem;letter-spacing:.2em;text-transform:uppercase;color:var(--gold);margin-bottom:20px;text-align:center">Gallery — DIVA Skin Clinic Poipet</div>
    <div class="grid-4">
      <?php
      $gallery_imgs = [
        ['https://i.ibb.co/VWX9QGLT/h-nh-nh-tr-c-sau-i-u-tr-m-n-n-v-da-kh-ng-u-m-u.jpg','Results'],
        ['https://i.ibb.co/PzcCN9LX/h-nh-nh-i-u-tr-l-ch-n-l-ng-to-da-kh-ng-u-m-u-tr-c-v-sau-3-bu-i.png','Pore results'],
        ['https://i.ibb.co/20Nvwv7m/nen-xuat-hien-o-trang-chinh-nh-i-u-tr-th-m-s-u-m-n-l-ch-n-l-ng-to-v-da-kh-ng-u-m-u-tr-c-sau.png','Skin results'],
        ['https://i.ibb.co/Kck5TjRw/h-nh-nh-tr-c-sau-i-u-tr-m-n-vi-m-l-ch-n-l-ng-to-v-s-o-r-cho-kh-ch-h-ng-nam.jpg','Men results'],
        ['https://i.ibb.co/tpLHFB4X/h-nh-nh-i-u-tr-da-kh-ng-u-m-u-m-n-n-li-ti-l-ch-n-l-ng-to.jpg','Treatment results'],
        ['https://i.ibb.co/cShd5XYw/h-nh-nh-m-t-c-c-ng-ti-m-filler-m-i.jpg','Filler procedure'],
        ['https://i.ibb.co/VYs6C9Qx/h-nh-nh-k-t-qu-tr-c-filler-m-i.jpg','Filler result'],
        ['https://i.ibb.co/gFdqPdqG/h-nh-nh-tay-nh-n-vi-n-ang-c-nh-kim-sau-khi-l-y-ven-c-nh-tay-kh-ch.jpg','IV treatment'],
      ];
      foreach($gallery_imgs as $g): ?>
      <div style="aspect-ratio:1;border-radius:6px;overflow:hidden">
        <img src="<?php echo $g[0]; ?>" alt="<?php echo $g[1]; ?>"
             referrerpolicy="no-referrer" loading="lazy"
             style="width:100%;height:100%;object-fit:cover;display:block">
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
