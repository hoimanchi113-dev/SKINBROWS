<?php
$page_title = 'About DIVA Skin Clinic Poipet';
$meta_desc  = 'Advanced skin treatment clinic in Poipet focused on real skin assessment, suitable treatment direction and clear aftercare. Technology is only a tool.';
$canonical  = '/about-us/';
require __DIR__ . '/../assets/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">About DIVA</span>
    <h1>Advanced Skin Treatment<br>in Poipet</h1>
    <p style="margin-top:14px;max-width:540px">Focused on real skin assessment, suitable treatment direction and clear aftercare.</p>
    <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:28px">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="/services/" class="btn btn-outline">View Services</a>
    </div>
  </div>
</section>

<!-- PHILOSOPHY -->
<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:start">
      <div>
        <span class="label" style="display:block;margin-bottom:12px">Our Approach</span>
        <h2 style="margin-bottom:20px">We do not treat skin by choosing machines like a menu.</h2>
        <p style="color:var(--text-muted);margin-bottom:16px;line-height:1.75">
          Technology, products and devices are supporting tools. The main focus is your real skin condition, treatment goal and safety.
        </p>
        <p style="color:var(--text-muted);line-height:1.75">
          Before choosing CO2, Pico, RF, Peel, Meso, Skinbooster or any other method, we first look at the skin foundation, barrier condition, main concern and expected result.
        </p>
      </div>
      <div style="background:var(--ink);border-radius:var(--radius);padding:32px">
        <p style="font-family:var(--font-display);font-size:1.5rem;color:var(--gold);font-style:italic;line-height:1.3;margin-bottom:16px">"Technology is only a tool."</p>
        <p style="color:#9CA3AF;font-size:.85rem;line-height:1.7">The important part is choosing the right method for the right skin condition, at the right time, with clear aftercare and realistic expectations.</p>
        <p style="color:rgba(200,169,110,.6);font-size:.72rem;margin-top:14px;letter-spacing:.08em">— DIVA Skin Clinic Poipet</p>
      </div>
    </div>
  </div>
</section>

<!-- ALREADY KNOW WHAT YOU WANT -->
<section class="section" style="background:var(--cream)">
  <div class="container" style="max-width:680px;text-align:center">
    <span class="label" style="display:block;margin-bottom:12px">Already Know What You Want?</span>
    <h2 style="margin-bottom:20px">You can ask directly for a specific treatment.</h2>
    <p style="color:var(--text-muted);line-height:1.75;margin-bottom:24px">
      You can ask directly for CO2, Pico, Peel, RF Microneedling, Meso, Skinbooster, Botox, Filler, IV Whitening or Hair Removal.
    </p>
    <p style="color:var(--text-muted);line-height:1.75;margin-bottom:24px">
      Before treatment, DIVA checks your real skin condition or treatment area to confirm whether the selected service is suitable.
    </p>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:12px;max-width:500px;margin:0 auto 28px">
      <div style="background:#fff;border:1px solid var(--border);border-radius:var(--radius-sm);padding:16px;text-align:left">
        <div style="font-size:.72rem;color:var(--gold);letter-spacing:.12em;text-transform:uppercase;margin-bottom:6px">If suitable</div>
        <p style="font-size:.85rem;color:var(--ink)">We can proceed with your chosen service.</p>
      </div>
      <div style="background:#fff;border:1px solid var(--border);border-radius:var(--radius-sm);padding:16px;text-align:left">
        <div style="font-size:.72rem;color:var(--gold);letter-spacing:.12em;text-transform:uppercase;margin-bottom:6px">If another method is better</div>
        <p style="font-size:.85rem;color:var(--ink)">We explain clearly and suggest a safer or more suitable option.</p>
      </div>
    </div>
    <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Send your concern on WhatsApp</a>
  </div>
</section>

<!-- WHAT MAKES DIVA DIFFERENT -->
<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">What Makes DIVA Different</span>
      <h2>Our Treatment Principles</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(230px,1fr));gap:20px">
      <?php
      $points = [
        ['Real Skin Assessment',       'We check skin condition, barrier, main concern and treatment history before selecting a direction.'],
        ['No Menu-Style Treatment',    'Clients do not need to choose machines first. We choose methods based on skin needs.'],
        ['Clear Aftercare',            'Aftercare and homecare guidance help reduce risk and support better recovery.'],
        ['Focused Quality',            'By appointment only, with controlled treatment flow and direct supervision.'],
        ['Local &amp; International Clients','Serving Khmer, Indonesian, Vietnamese and foreign clients in Poipet.'],
        ['Realistic Expectations',     'We explain what can improve, what may take time and what depends on aftercare.'],
      ];
      foreach($points as $i => $p): ?>
      <div class="card">
        <div style="font-family:var(--font-display);font-size:1.4rem;color:rgba(200,169,110,.4);margin-bottom:10px"><?php echo $i+1; ?></div>
        <h3 style="font-size:1rem;margin-bottom:10px"><?php echo $p[0]; ?></h3>
        <p style="font-size:.82rem;color:var(--text-muted);line-height:1.65"><?php echo $p[1]; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section style="background:var(--ink);padding:64px 0">
  <div class="container">
    <div class="text-center mb-32">
      <span class="label" style="display:block;margin-bottom:10px">How We Work</span>
      <h2 style="color:#fff">4 Steps from Concern to Result</h2>
    </div>
    <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(200px,1fr));gap:2px">
      <?php
      $steps = [
        ['1. Consultation',        'Understand concern, goal, history and budget.'],
        ['2. Skin Assessment',     'Check skin condition, barrier and priority problem.'],
        ['3. Treatment Direction', 'Choose suitable methods and explain the plan.'],
        ['4. Aftercare Follow-up', 'Guide recovery, sunscreen, homecare and next visit.'],
      ];
      foreach($steps as $s): ?>
      <div style="background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.07);padding:24px 20px">
        <p style="color:var(--gold);font-size:.78rem;font-weight:500;margin-bottom:8px"><?php echo $s[0]; ?></p>
        <p style="color:#9CA3AF;font-size:.82rem;line-height:1.6"><?php echo $s[1]; ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container">
    <h2>Visit DIVA Skin Clinic Poipet</h2>
    <p>By appointment only. Send your skin photo, concern or service request through WhatsApp or Telegram before visiting.<br>
       <strong>Open 12:00 PM – 3:00 AM</strong> &nbsp;•&nbsp; Poipet, Cambodia</p>
    <div class="cta-btns">
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="btn btn-wa">Contact on WhatsApp</a>
      <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener" class="btn btn-tg">Message on Telegram</a>
      <a href="/aftercare-support/" class="btn btn-outline">Aftercare &amp; Support</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
