<?php
$page_title = 'Contact — DIVA Skin Clinic Poipet';
$meta_desc  = 'Contact DIVA Skin Clinic Poipet via WhatsApp or Telegram. Open 12PM–3AM by appointment only. Located in Poipet, Cambodia.';
$canonical  = '/contact/';
require __DIR__ . '/../assets/partials/header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="label" style="display:block;margin-bottom:12px">Contact</span>
    <h1>Get in Touch</h1>
    <p style="margin-top:14px">Send your skin photo or concern via WhatsApp or Telegram. We will reply during clinic hours.</p>
  </div>
</section>

<section class="section" style="background:var(--warm-white)">
  <div class="container">
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:40px;align-items:start">

      <div>
        <span class="label" style="display:block;margin-bottom:16px">Send a Message</span>

        <div style="display:flex;flex-direction:column;gap:14px;margin-bottom:32px">
          <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener"
             style="display:flex;align-items:center;gap:16px;background:var(--wa-green);color:#fff;padding:18px 22px;border-radius:var(--radius);text-decoration:none">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/><path d="M12 0C5.373 0 0 5.373 0 12c0 2.09.538 4.05 1.476 5.758L0 24l6.395-1.676A11.943 11.943 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.818 9.818 0 01-5.007-1.37l-.36-.214-3.72.976.992-3.628-.235-.373A9.818 9.818 0 1112 21.818z"/></svg>
            <div>
              <div style="font-weight:600;font-size:.95rem">WhatsApp</div>
              <div style="font-size:.8rem;opacity:.85">+855 93 970 584</div>
            </div>
          </a>

          <a href="<?php echo $tg_link; ?>" target="_blank" rel="noopener"
             style="display:flex;align-items:center;gap:16px;background:var(--tg-blue);color:#fff;padding:18px 22px;border-radius:var(--radius);text-decoration:none">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="white"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm5.894 8.221l-1.97 9.28c-.145.658-.537.818-1.084.508l-3-2.21-1.447 1.394c-.16.16-.295.295-.605.295l.213-3.053 5.56-5.023c.242-.213-.054-.333-.373-.12L7.17 13.367l-2.96-.924c-.643-.204-.657-.643.136-.953l11.57-4.461c.537-.194 1.006.131.978.192z"/></svg>
            <div>
              <div style="font-weight:600;font-size:.95rem">Telegram</div>
              <div style="font-size:.8rem;opacity:.85">@diva_glow_poipet</div>
            </div>
          </a>

          <a href="<?php echo $loc_link; ?>" target="_blank" rel="noopener"
             style="display:flex;align-items:center;gap:16px;background:var(--ink);color:#fff;padding:18px 22px;border-radius:var(--radius);text-decoration:none">
            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
            <div>
              <div style="font-weight:600;font-size:.95rem">Google Maps</div>
              <div style="font-size:.8rem;opacity:.85">DIVA Skin Clinic Poipet</div>
            </div>
          </a>
        </div>

        <div style="background:var(--cream);border-radius:var(--radius);padding:20px 22px">
          <p class="label" style="margin-bottom:10px">Opening Hours</p>
          <p style="font-size:.9rem;color:var(--ink);font-weight:500">12:00 PM – 3:00 AM</p>
          <p style="font-size:.82rem;color:var(--text-muted);margin-top:4px">Daily • By appointment only<br>Poipet, Banteay Meanchey, Cambodia</p>
        </div>
      </div>

      <div>
        <span class="label" style="display:block;margin-bottom:16px">How to Contact</span>
        <div style="display:flex;flex-direction:column;gap:16px">
          <?php
          $steps = [
            ['Send your concern','Describe your skin problem, or simply tell us which service you are interested in.'],
            ['Send a photo if possible','A clear photo of your skin or treatment area helps us give a faster, more accurate response.'],
            ['We will reply during clinic hours','Our team replies during 12:00 PM – 3:00 AM daily. We will suggest suitable services and current promotion price.'],
            ['Schedule a visit','Once we confirm suitability, we will arrange an appointment time for you.'],
          ];
          foreach($steps as $i => $s): ?>
          <div style="display:flex;gap:14px;align-items:start">
            <div style="width:28px;height:28px;background:rgba(200,169,110,.15);border-radius:50%;display:flex;align-items:center;justify-content:center;font-family:var(--font-display);color:var(--gold);font-size:.9rem;flex-shrink:0;margin-top:2px"><?php echo $i+1; ?></div>
            <div>
              <p style="font-weight:500;font-size:.88rem;margin-bottom:4px"><?php echo $s[0]; ?></p>
              <p style="font-size:.8rem;color:var(--text-muted);line-height:1.6"><?php echo $s[1]; ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div style="margin-top:24px;padding:16px;background:rgba(200,169,110,.08);border:1px solid rgba(200,169,110,.2);border-radius:var(--radius-sm)">
          <p style="font-size:.8rem;color:var(--text-muted);line-height:1.65">
            <strong style="color:var(--ink)">By appointment only.</strong> We do not accept walk-in clients without prior contact. Please message us first to confirm availability and schedule your visit.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/../assets/partials/footer.php'; ?>
<?php require __DIR__ . '/../assets/partials/sticky-contact.php'; ?>
