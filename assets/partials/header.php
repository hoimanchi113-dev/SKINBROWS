<?php
// Shared variables — override before require
$wa_link  = 'https://wa.me/85593970584';
$tg_link  = 'https://t.me/diva_glow_poipet';
$loc_link = 'https://maps.app.goo.gl/Jz2dQN2dV3jJvgbx9?g_st=ic';

$site_url = 'https://divaskinclinicpoipet.com';
$site_name = 'DIVA Skin Clinic Poipet';

// Defaults
if (!isset($page_title))  $page_title = $site_name;
if (!isset($meta_desc))   $meta_desc  = 'Advanced skin treatment clinic in Poipet, Cambodia. Acne, dark spots, melasma, IV whitening, hair removal and more. Open 12PM–3AM.';
if (!isset($canonical))   $canonical  = '/';

// Active nav helper
function nav_active($path) {
  $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
  return ($current === $path || strpos($current, $path) === 0 && $path !== '/') ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="referrer" content="no-referrer">
  <title><?php echo htmlspecialchars($page_title); ?> | DIVA Skin Clinic Poipet</title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <link rel="canonical" href="<?php echo $site_url . $canonical; ?>">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta property="og:url"         content="<?php echo $site_url . $canonical; ?>">
  <meta property="og:type"        content="website">
  <meta property="og:image"       content="https://i.ibb.co/fdwcXfF5/H-nh-gh-p-2-nh-tr-c-v-2-nh-sau-d-ch-v-i-u-tr-m-n-v-th-m-sau-m-n.jpg">
  <meta property="og:site_name"   content="DIVA Skin Clinic Poipet">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<!-- Top bar -->
<div class="topbar">
  Open 12:00 PM – 3:00 AM &nbsp;•&nbsp; By appointment only &nbsp;•&nbsp;
  <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener">WhatsApp: +855 93 970 584</a>
</div>

<!-- Navigation -->
<nav class="nav">
  <div class="nav-inner">
    <a href="/" class="nav-logo">
      DIVA SKIN CLINIC
      <span>Poipet</span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
      <span></span><span></span><span></span>
    </button>

    <div class="nav-links" id="navLinks">
      <a href="/"                   class="<?php echo nav_active('/'); ?>">Home</a>
      <a href="/services/"          class="<?php echo nav_active('/services/'); ?>">Services</a>
      <a href="/price-list/"        class="<?php echo nav_active('/price-list/'); ?>">Price</a>
      <a href="/videos-gallery/"    class="<?php echo nav_active('/videos-gallery/'); ?>">Videos</a>
      <a href="/blog/"              class="<?php echo nav_active('/blog/'); ?>">Blog</a>
      <a href="/about-us/"          class="<?php echo nav_active('/about-us/'); ?>">About</a>
      <a href="/aftercare-support/" class="<?php echo nav_active('/aftercare-support/'); ?>">Aftercare</a>
      <a href="/contact/"           class="<?php echo nav_active('/contact/'); ?>">Contact</a>
      <a href="<?php echo $wa_link; ?>" target="_blank" rel="noopener" class="nav-wa">WhatsApp</a>
    </div>
  </div>
</nav>

<script>
document.getElementById('navToggle').addEventListener('click', function() {
  document.getElementById('navLinks').classList.toggle('open');
});
</script>
