# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Overview

Static-content marketing website for DIVA Skin Clinic Poipet (skin/aesthetic clinic in Poipet, Cambodia), built as plain PHP with no framework, no build step, and no dependencies. Every page is server-rendered PHP that mostly emits static HTML with a handful of shared PHP variables (contact links, page metadata).

## Commands

There is no package manager, build step, linter, or test suite in this repo (no `composer.json`, `package.json`, or config files besides the PHP source itself).

- **Run locally**: `php -S localhost:8000` from the repo root, then visit `http://localhost:8000/about-us/` etc. Because routing relies on real directories (see Architecture below), the built-in PHP server works directly with no rewrite rules needed.
- **No tests exist.** Verify changes by loading the affected page(s) in a browser via the command above.

## Architecture

### Routing = directory structure

There is no router and no `.htaccess`/rewrite config. Every URL slug is a real directory containing an `index.php`, e.g. `/acne-treatment-poipet/` → `acne-treatment-poipet/index.php`, `/blog/melasma-pigmentation-treatment-poipet/` → `blog/melasma-pigmentation-treatment-poipet/index.php`. To add a new page/URL, create a new directory with an `index.php` inside it — do not add query-string or `.php`-suffixed routes.

### Shared partials

Every page follows the same three-`require` skeleton:

```php
<?php
$page_title = '...';
$meta_desc  = '...';
$canonical  = '/slug/';
require __DIR__ . '/assets/partials/header.php';   // depth-adjusted, e.g. '/../assets/partials/header.php' one level deep
?>
... page body ...
<?php require __DIR__ . '/assets/partials/footer.php'; ?>
<?php require __DIR__ . '/assets/partials/sticky-contact.php'; ?>
```

- `assets/partials/header.php` — sets shared contact links (`$wa_link`, `$tg_link`, `$loc_link`), computes `$site_url`, defaults `$page_title`/`$meta_desc`/`$canonical` if the page didn't set them, defines `nav_active()` for nav highlighting, and emits `<head>` (OG tags, Google Fonts, `style.css`) plus the top bar and `<nav>`. **Set `$page_title`, `$meta_desc`, and `$canonical` before requiring it** — that's how each page controls its own SEO metadata.
- `assets/partials/footer.php` — footer markup + sitemap-style link columns.
- `assets/partials/sticky-contact.php` — floating WhatsApp/Telegram buttons, required last on every page.
- The relative path to `assets/partials/` depends on directory depth (`__DIR__ . '/assets/...'` at root, `/../assets/...` one level down, `/../../assets/...` for nested `blog/<slug>/`).

### Styling

Single global stylesheet at `assets/css/style.css`, no preprocessor. Design tokens are CSS custom properties on `:root` (`--ink`, `--gold`, `--cream`, `--warm-white`, `--border`, `--text-muted`, `--wa-green`, `--tg-blue`, `--font-display`, `--font-body`, `--radius`, etc.) — reuse these tokens instead of hardcoding colors/fonts. Reusable classes: `.container`, `.section`/`.section-sm`, `.grid-2`/`.grid-3`/`.grid-4`, `.card`, `.btn` (+ `.btn-wa`, `.btn-tg`, `.btn-dark`, `.btn-outline`, `.btn-sm`), `.label`, `.page-hero`, `.blog-card`/`.blog-toc`/`.blog-meta`. Pages otherwise lean heavily on **inline `style="..."` attributes** rather than new CSS classes for one-off layout — follow this existing convention (grid/flex layouts, spacing, colors via `var(--token)`) instead of introducing new global classes for page-specific tweaks.

### Content pattern

Most sections render from **inline PHP arrays looped with `foreach`** rather than hardcoded repeated HTML, e.g. treatment lists, promo pricing, video galleries, before/after image grids (see `index.php`). When adding similar repeating content (services, promos, gallery items), follow this array-of-tuples + `foreach` pattern rather than duplicating markup blocks.

### Page categories

- **Root landing pages** (`/`, `/about-us/`, `/services/`, `/price-list/`, `/contact/`, `/aftercare-support/`, `/videos-gallery/`): one directory per page at repo root.
- **Treatment/service SEO pages** (`/acne-treatment-poipet/`, `/dark-spots-treatment-poipet/`, `/melasma-treatment-poipet/`, `/hair-removal-poipet/`, `/botox-filler-poipet/`, etc.): each targets a specific treatment keyword + "Poipet" for local SEO; title/meta/canonical/H1 all reinforce that same phrase.
- **Blog** (`/blog/index.php` is the listing/index with client-side category filter buttons (`filterPosts()`); `/blog/<slug>/index.php` are individual articles with a `.blog-toc` sidebar of in-page anchor links (`#intro`, etc.) alongside the article body.

### Contact links

`$wa_link` (WhatsApp), `$tg_link` (Telegram), and `$loc_link` (Google Maps) are defined once in `header.php` and used everywhere via `echo`. Update contact details there, not per-page.

### SEO conventions

Every page sets a distinct `$page_title`, `$meta_desc`, and `$canonical` (absolute-path, e.g. `/acne-treatment-poipet/`) reflecting that page's own URL — these feed the `<title>`, meta description, canonical link, and Open Graph tags in `header.php`. Keep new pages consistent with this (title/meta unique per page, canonical matching the actual directory path).
