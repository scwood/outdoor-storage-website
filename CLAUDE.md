# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this repo is

Two brochure sites for storage businesses — one per top-level directory:

- `outdoor storage/` — "Outdoor Storage", yellow/ink brand. **Two** facilities: Parker (9575 N Motsenbocker Rd, Parker, CO 80134) and Highlands Ranch (5440 Kelly Ct, Littleton, CO 80125). The one under active development (has the dev-server config; recent commits all touch it).
- `rocky mountain storage/` — "Rocky Mountain Storage", navy/green brand. A single facility at 17700 E Colfax Ave, Aurora, CO 80011.

Each is a **single self-contained `index.php`** (~1,380 lines): all CSS in one `<style>` block in `<head>`, all markup inline, a small `<script>` at the bottom. There is no build step, no package manager, no framework, no tests. Edits are made directly to `index.php`.

The two files were near-identical in structure and diverged only in brand tokens, copy, and hero logo (`images/logo.jpg` vs `images/logo_big.png`). They have since split further — see the multi-location handling below. A structural or copy change requested for "the site" usually means `outdoor storage/index.php`; ask before mirroring it into the other one.

## Running locally

```bash
php -S localhost:8321 -t "outdoor storage"
```

`outdoor storage/.claude/launch.json` defines this as the `outdoor-storage` preview config — prefer `preview_start {name: "outdoor-storage"}` over running the server by hand. PHP is required (not a static server) so the two `<?php ?>` blocks in the contact form render. There is no config for `rocky mountain storage/`; copy the launch.json and change the `-t` target if you need it.

## Deployment

Manual upload via cPanel — see `README.md` (credentials in Bitwarden). Nothing in this repo automates a deploy.

**`contact.php` is not in this repo.** The contact form posts to `contact.php` and the page reads back `?sent=1` / `?error=...` to render the success/failure message. That handler only exists on the server, so form submission cannot be tested locally — the POST will 404 against `php -S`.

## Page structure (both sites)

Fixed anchor IDs are wired into the nav, the footer links, and the mobile-menu close handler: `#photos` (facility gallery), `#units` (unit sizes), `#faq`, `#contact` — plus `#locations` on `outdoor storage/` only. Renaming one means updating all of those call sites.

### External reservation / payment links

The two sites handle these differently:

- **`rocky mountain storage/`** — single location, so the two external destinations are repeated in the nav, hero, units section, and footer: U-Haul reservations (`uhaul.com/Locations/...1039317/`) and online payments (`storageaffiliatepayments.com/?locationId=...`). If one changes, check all four occurrences.
- **`outdoor storage/`** — two locations, so no CTA links out directly. The nav "Reserve"/"Pay Online" buttons, both hero buttons, the units-section button, and the footer "Reserve" link are all in-page anchors to `#locations`. The four external URLs (Reserve + Pay for each location, on `*.storageunitsoftware.com`) appear **only** inside the two `.location-card`s in that section. Add per-location links there, not to the CTAs. Four `<!-- TODO -->` comments mark links still pointing at a site root instead of a real deep link.

The `outdoor storage/` contact form posts a `location` field (Parker / Highlands Ranch) that server-side `contact.php` must read to include in the notification email.

## CSS conventions

- Everything is driven by CSS custom properties on `:root`. Restyling means changing tokens, not hunting hex codes. Contrast is deliberate: `outdoor storage` uses `--gold-dark` for accent *text* because the raw `--yellow` is only 1.47:1 on white, and `--yellow` surfaces always pair with `--ink` text. Keep that split when adding yellow elements.
- `--success` / `--error` are semantic, not brand — used only by the form status messages.
- One breakpoint, `@media (max-width: 768px)`, near the end of the style block. All responsive behavior lives there, including the mobile nav: `.nav-links` is hidden and revealed by an `.open` class on `#site-nav`, toggled by the inline `onclick` on `.nav-toggle` and cleared by the bottom `<script>` when a link is tapped. Both halves must stay in sync (`aria-expanded` is set in each).
- Load-bearing comments in the CSS explain *why* a value is what it is (e.g. the `.hero-img img` `max-width: 242px` cap is derived from the source image's 200px width plus padding and border, to stop the mobile `width: 100%` rule from upscaling an opaque JPEG). Read them before changing the magic numbers around them.
- Formatting is Prettier-style HTML/CSS — 2-space indent, attributes one per line when they wrap. Match it.
