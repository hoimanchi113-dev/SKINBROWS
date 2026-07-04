<?php
$page_title = 'Blog';
$meta_desc = 'Skin knowledge and clinic updates from DIVA Skin Clinic Poipet.';
$canonical = '/blog/';
require __DIR__ . '/../assets/partials/header.php';
?>

<div class="page-hero">
 <div class="container">
 <span class="label">Blog</span>
 <h1>Skin Knowledge &amp; Clinic Updates</h1>
 <p>Learn about skin concerns, treatment options and realistic expectations before visiting DIVA Skin Clinic Poipet.</p>
 </div>
</div>

<div style="background:var(--ink);padding:0 0 48px">
 <div class="container">
 <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:12px">
 <img src="https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg" alt="Acne treatment results" style="width:100%;border-radius:8px;height:150px;object-fit:cover">
 <img src="https://i.ibb.co/HTnyFKc0/h-nh-nh-k-t-qu-tr-c-sau-i-u-tr-n-m.jpg" alt="Melasma treatment results" style="width:100%;border-radius:8px;height:150px;object-fit:cover">
 <img src="https://i.ibb.co/vCkDwwPT/h-nh-nh-ket-qua-sau-khi-tiem-fillerm-i-xong.jpg" alt="Lip filler results" style="width:100%;border-radius:8px;height:150px;object-fit:cover">
 <img src="https://i.ibb.co/Vc24WDMW/h-nh-nh-b-N-ang-n-m-tr-n-gi-ng-tay-c-m-kim-gi-i-va-noi-dung-thi-u-v-d-ch-v-Truy-n-Tr-ng.jpg" alt="IV whitening infusion" style="width:100%;border-radius:8px;height:150px;object-fit:cover">
 </div>
 </div>
</div>

<section class="section">
 <div class="container">

 <!-- Filter tabs -->
 <div style="display:flex;flex-wrap:wrap;gap:8px;margin-bottom:32px">
 <button class="blog-filter active" data-cat="all" onclick="filterPosts('all',this)">All (34)</button>
 <button class="blog-filter" data-cat="Skin Treatment" onclick="filterPosts('Skin Treatment',this)">Skin Treatment</button>
 <button class="blog-filter" data-cat="Injectables" onclick="filterPosts('Injectables',this)">Injectables</button>
 <button class="blog-filter" data-cat="Wellness" onclick="filterPosts('Wellness',this)">Wellness</button>
 <button class="blog-filter" data-cat="Education" onclick="filterPosts('Education',this)">Education</button>
 <button class="blog-filter" data-cat="Service" onclick="filterPosts('Service',this)">Service</button>
 <button class="blog-filter" data-cat="Body Treatment" onclick="filterPosts('Body Treatment',this)">Body Treatment</button>
 </div>

 <div class="grid-3" id="blog-grid">

 <a href="/blog/acne-treatment-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Acne Treatment in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Causes, types, treatment direction and aftercare at DIVA Skin Clinic Poipet.</p>
 </a>

 <a href="/blog/melasma-pigmentation-treatment-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Melasma and Pigmentation Treatment in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Melasma, dark spots, freckles and uneven skin tone treatment using Pico laser, chemical peel and personalized plans.</p>
 </a>

 <a href="/blog/why-acne-keeps-coming-back-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Why Does Acne Keep Coming Back?</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Real root causes of recurring acne and what it takes to actually control it long-term.</p>
 </a>

 <a href="/blog/pores-rough-texture-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Pores and Rough Skin Texture Treatment</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">RF microneedling, pore treatment, chemical peel and personalized skin plans in Poipet.</p>
 </a>

 <a href="/blog/sensitive-skin-barrier-repair-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Sensitive Skin and Skin Barrier Repair</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Why barrier repair may come before stronger treatment and how DIVA approaches sensitive skin.</p>
 </a>

 <a href="/blog/steroid-damaged-skin-recovery-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Steroid-Damaged Skin — Signs and Recovery</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Is your skin red, thin, burning or dependent on a whitening cream? Signs of steroid damage and recovery approach.</p>
 </a>

 <a href="/blog/why-laser-makes-melasma-worse-pih-pie-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Why Laser Makes Melasma Worse — PIH and PIE Explained</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Did laser make your melasma worse? Understand why this happens and how to treat pigmentation correctly.</p>
 </a>

 <a href="/blog/how-to-choose-skincare-products/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">How to Choose Skincare Products for Your Skin</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Selecting products for acne, pigmentation, sensitive skin, oily skin, and post-treatment recovery.</p>
 </a>

 <a href="/blog/skin-treatment-guide-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Skin Treatment Guide — How to Choose the Right Treatment</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Not sure which skin treatment you need? DIVA explains how to understand your skin concern and choose correctly.</p>
 </a>

 <a href="/blog/laser-technology-diva-skin-clinic-poipet/" class="card blog-card" data-cat="Skin Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Skin Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Laser Technology at DIVA Skin Clinic Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">CO2 Laser, Pico Laser, RF Microneedling and HIFU — how they work and which skin concern each treats.</p>
 </a>

 <a href="/blog/iv-whitening-gluta-drip-poipet/" class="card blog-card" data-cat="Wellness" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Wellness</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Whitening Infusion &amp; Gluta Drip in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">What to know before starting IV whitening at DIVA Skin Clinic Poipet — ingredients, suitability and realistic results.</p>
 </a>

 <a href="/blog/iv-drip-whitening-infusion-poipet/" class="card blog-card" data-cat="Wellness" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Wellness</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">IV Drip and Whitening Infusion in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">IV wellness programs for glow, brightening and recovery at DIVA Skin Clinic Poipet.</p>
 </a>

 <a href="/blog/mounjaro-weight-management-poipet/" class="card blog-card" data-cat="Wellness" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Wellness</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Mounjaro and Medical Weight Management in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Looking for Mounjaro or injectable weight management in Poipet? Suitability, safety and what to expect.</p>
 </a>

 <a href="/blog/technology-devices-diva-skin-clinic-poipet/" class="card blog-card" data-cat="Service" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Service</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Technology &amp; Devices at DIVA</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">CO2 Laser, Pico Laser, HIFU, RF and more — what each device does and which concern it treats.</p>
 </a>

 <a href="/blog/botox-vs-filler-poipet/" class="card blog-card" data-cat="Service" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Service</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Botox vs Filler in Poipet — What Is the Difference?</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Learn the difference between Botox and filler — what each treatment does and how DIVA selects the right option.</p>
 </a>


 <a href="/blog/injectable-treatments-complete-guide-poipet/" class="card blog-card" data-cat="Injectables" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Injectables</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Complete Guide to Injectable Treatments in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Botox, filler, skinbooster, Rejuran, Profhilo and fat dissolving — what to understand before your visit.</p>
 </a>

 <a href="/blog/pdo-thread-lift-nose-chin-poipet/" class="card blog-card" data-cat="Injectables" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Injectables</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">PDO Thread Lift — Face Lifting, Nose Thread and Chin Contour</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Non-surgical facelift, nose reshaping and chin contour with PDO threads in Poipet. Minimal downtime.</p>
 </a>

 <a href="/blog/prp-rejuran-regenerative-treatments-poipet/" class="card blog-card" data-cat="Injectables" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Injectables</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">PRP, Rejuran and Regenerative Skin Treatments</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Biological skin regeneration from your own blood or advanced regenerative products at DIVA Poipet.</p>
 </a>

 <a href="/blog/filler-vascular-occlusion-emergency-signs-poipet/" class="card blog-card" data-cat="Injectables" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Injectables</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Filler Vascular Occlusion — Emergency Signs After Filler</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Warning signs of filler vascular occlusion, what to do immediately, and how to choose a safe clinic.</p>
 </a>

 <a href="/blog/skin-treatment-for-men-poipet/" class="card blog-card" data-cat="Injectables" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Injectables</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Skin Treatment for Men in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Acne, forehead lines, dark circles, pores, jaw botox and body treatment for male clients at DIVA.</p>
 </a>

 <a href="/blog/body-beauty-hair-removal-poipet/" class="card blog-card" data-cat="Body Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Body Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Body Beauty and Hair Removal in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Laser hair removal, body brightening, body acne, underarm whitening for all clients in Poipet.</p>
 </a>

 <a href="/blog/keloid-scar-treatment-poipet/" class="card blog-card" data-cat="Body Treatment" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Body Treatment</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Keloid and Scar Treatment in Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Keloid scar injection, hypertrophic scar, body scar and tattoo removal planned for your condition.</p>
 </a>

 <a href="/blog/3-phase-skin-treatment-system-diva-poipet/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">The 3-Phase Skin Treatment System at DIVA</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Why treatment order matters more than machine name — Control, Drive Change, Stabilize explained.</p>
 </a>

 <a href="/blog/after-laser-peel-microneedling-normal-vs-abnormal-poipet/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">After Laser, Peel or Microneedling — Normal vs Abnormal</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Normal vs abnormal reactions after laser, peel, microneedling, botox or filler — and when to contact the clinic.</p>
 </a>

 <a href="/blog/skincare-ingredients-what-to-mix-avoid-poipet/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Skincare Ingredients — What to Mix and What to Avoid</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Wrong ingredient combinations can damage your skin. What works together, what to avoid, and how to build a routine.</p>
 </a>

 <a href="/blog/warranty-refund-policy-diva-poipet/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Warranty, Treatment Support and Refund Policy</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Transparent warranty, support and refund policy for all services at DIVA Skin Clinic Poipet explained clearly.</p>
 </a>

 <a href="/blog/why-consultation-aftercare-matter/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Why Clear Consultation and Aftercare Matter</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Protecting your results before, during and after treatment at DIVA Skin Clinic Poipet.</p>
 </a>

 <a href="/blog/why-skin-treatment-results-different/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Why Skin Treatment Results Are Different for Each Person</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Same treatment, different results? DIVA explains why skin treatment outcomes vary and what affects your results.</p>
 </a>

 <a href="/blog/local-clients-poipet-cambodia/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Education</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">DIVA Skin Clinic — For Clients in Poipet, Cambodia</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Skin treatment, laser, botox, filler, IV whitening and body treatment for local clients in Poipet.</p>
 </a>

 <a href="/blog/diva-skin-clinic-poipet-khach-viet/" class="card blog-card" data-cat="Education" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Điều Trị Da</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">DIVA Skin Clinic Poipet — Dành cho Khách Việt</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Điều trị da, thẩm mỹ và làm đẹp cho khách Việt tại Poipet Cambodia. Tư vấn tiếng Việt.</p>
 </a>

 <a href="/blog/klinik-kecantikan-poipet-klien-indonesia/" class="card blog-card" data-cat="Service" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Service</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Klinik Kecantikan untuk Klien Indonesia di Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Perawatan jerawat, nám, bekas jerawat, laser, botox, filler, infus whitening, body treatment di Poipet.</p>
 </a>

 <a href="/blog/klinik-kecantikan-poipet-pelanggan-malaysia/" class="card blog-card" data-cat="Service" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Service</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">Klinik Kecantikan untuk Pelanggan Malaysia di Poipet</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">Rawatan jerawat, nám, parut jerawat, laser, botox, filler, infus putih, rawatan badan di Poipet Cambodia.</p>
 </a>

 <a href="/blog/diva-skin-clinic-poipet-zhongwen/" class="card blog-card" data-cat="Service" style="text-decoration:none">
 <div style="background:var(--cream);height:180px;border-radius:4px;margin-bottom:16px;display:flex;align-items:center;justify-content:center;color:var(--text-light);font-size:.8rem">[ Image ]</div>
 <span class="label mb-8" style="display:block;font-size:.65rem">Service</span>
 <h3 style="font-size:1rem;line-height:1.4;margin-bottom:8px">DIVA Skin Clinic Poipet │ 波贝市专业美容皮肤诊所</h3>
 <p style="font-size:.82rem;color:var(--text-muted)">痘痘、色斑、痘疤、激光、肉毒素、玻尿酸、美白点滴、身体护理。柬埔寨波贝市。</p>
 </a>

 </div><!-- end #blog-grid -->
 </div>
</section>

<style>
.blog-filter {
 background: transparent;
 border: 1px solid var(--gold);
 color: var(--gold);
 padding: 6px 16px;
 border-radius: 20px;
 font-size: .72rem;
 letter-spacing: .08em;
 cursor: pointer;
 transition: all .2s;
}
.blog-filter:hover,
.blog-filter.active {
 background: var(--gold);
 color: var(--ink);
}
.blog-card[style*="display:none"] { display: none !important; }
</style>

<script>
function filterPosts(cat, btn) {
 document.querySelectorAll('.blog-filter').forEach(b => b.classList.remove('active'));
 btn.classList.add('active');
 document.querySelectorAll('.blog-card').forEach(card => {
 if (cat === 'all' || card.dataset.cat === cat) {
 card.style.display = '';
 } else {
 card.style.display = 'none';
 }
 });
}
</script>

<section style="background:var(--warm-white);padding:40px 0">
 <div class="container">
 <div style="font-size:.7rem;letter-spacing:.18em;text-transform:uppercase;color:var(--gold);margin-bottom:20px;text-align:center">Gallery — DIVA Skin Clinic Poipet</div>
 <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:12px">
 <img src="https://i.ibb.co/VWX9QGLT/h-nh-nh-tr-c-sau-i-u-tr-m-n-n-v-da-kh-ng-u-m-u.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/PzcCN9LX/h-nh-nh-i-u-tr-l-ch-n-l-ng-to-da-kh-ng-u-m-u-tr-c-v-sau-3-bu-i.png" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/20Nvwv7m/nen-xuat-hien-o-trang-chinh-nh-i-u-tr-th-m-s-u-m-n-l-ch-n-l-ng-to-v-da-kh-ng-u-m-u-tr-c-sau.png" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/Kck5TjRw/h-nh-nh-tr-c-sau-i-u-tr-m-n-vi-m-l-ch-n-l-ng-to-v-s-o-r-cho-kh-ch-h-ng-nam.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/tpLHFB4X/h-nh-nh-i-u-tr-da-kh-ng-u-m-u-m-n-n-li-ti-l-ch-n-l-ng-to.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/bgbtkWt7/bisotin-jnjection-ti-m-b-p-tr-m-n-i-lo-n.png" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/cShd5XYw/h-nh-nh-m-t-c-c-ng-ti-m-filler-m-i.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/VYs6C9Qx/h-nh-nh-k-t-qu-tr-c-filler-m-i.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/gFdqPdqG/h-nh-nh-tay-nh-n-vi-n-ang-c-nh-kim-sau-khi-l-y-ven-c-nh-tay-kh-ch.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/srLk7TS/IMG-4527.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/jkqnYYrL/IMG-4526.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 <img src="https://i.ibb.co/TMQPVzyg/IMG-1023-Original.jpg" alt="DIVA Skin Clinic Poipet" loading="lazy" style="width:100%;border-radius:8px;object-fit:cover;height:180px;display:block">
 </div>
 </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>