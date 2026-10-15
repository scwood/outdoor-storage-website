<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Outdoor Storage</title>
    <meta name="theme-color" content="#fed104" />
    <link rel="icon" href="images/favicon/favicon.ico" sizes="any" />
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=Manrope:wght@600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      *,
      *::before,
      *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }
      :root {
        /* Brand — sampled from images/logo.jpg */
        --yellow: #fed104; /* logo field; action color, always with --ink text */
        --yellow-dark: #e5bc00; /* CTA hover */
        --yellow-light: #fff8db; /* tint surface */
        --gold-dark: #8a6a00; /* accent TEXT on white; raw yellow is only 1.47:1 */

        --ink: #1c1c1c; /* structural dark: surfaces and text */

        --white: #ffffff;
        --off-white: #faf9f6;
        --border: #e3e0d8;
        --text: #1f1d18;
        --text-muted: #5f5c54;

        --success: #2e6b35; /* semantic, not brand */
        --error: #b91c1c;
        --radius: 10px;
      }
      body {
        font-family: "DM Sans", sans-serif;
        font-size: 16px;
        color: var(--text);
        background: var(--white);
        line-height: 1.65;
      }

      /* NAV */
      nav {
        position: sticky;
        top: 0;
        z-index: 100;
        background: var(--white);
        border-bottom: 1px solid var(--border);
        padding: 0 2rem;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        height: 70px;
      }
      .nav-logo img {
        height: 48px;
        width: auto;
        display: block;
      }
      .nav-links {
        display: flex;
        gap: 2rem;
        list-style: none;
        align-items: center;
      }
      .nav-toggle {
        display: none;
        background: none;
        border: 0;
        padding: 0.5rem;
        cursor: pointer;
        color: var(--ink);
      }
      .nav-toggle svg {
        width: 26px;
        height: 26px;
        display: block;
      }
      .nav-links a {
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        color: var(--text-muted);
        transition: color 0.2s;
      }
      .nav-links a:hover {
        color: var(--ink);
      }
      .nav-cta {
        background: var(--yellow) !important;
        color: var(--ink) !important;
        padding: 0.5rem 1.25rem;
        border-radius: 6px;
        font-weight: 600 !important;
        border: 1.5px solid var(--ink);
      }
      .nav-cta:hover {
        background: var(--yellow-dark) !important;
      }
      .nav-pay {
        border: 1.5px solid var(--ink);
        color: var(--ink) !important;
        padding: 0.45rem 1.1rem;
        border-radius: 6px;
        font-weight: 600 !important;
        transition:
          background 0.2s,
          color 0.2s;
      }
      .nav-pay:hover {
        background: var(--yellow-light);
        color: var(--ink) !important;
      }
      .hero {
        padding: 5rem 2rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        align-items: center;
        max-width: 1100px;
        margin: 0 auto;
      }
      .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--gold-dark);
        margin-bottom: 1rem;
      }
      .hero-eyebrow::before {
        content: "";
        display: block;
        width: 18px;
        height: 2px;
        background: var(--yellow);
        border-radius: 1px;
      }
      .hero-text h1 {
        font-family: "Manrope", sans-serif;
        font-weight: 800;
        letter-spacing: -0.02em;
        font-size: clamp(1.75rem, 3.4vw, 2.5rem);
        line-height: 1.15;
        color: var(--ink);
        margin-bottom: 1.25rem;
      }
      .hero-text h1 em {
        font-style: normal;
        color: var(--gold-dark);
      }
      .hero-services {
        list-style: disc;
        padding-left: 1.2rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        margin-bottom: 2rem;
        font-size: 1.05rem;
        color: var(--text-muted);
      }
      .hero-service-label {
        font-weight: 600;
        color: var(--text);
      }
      .hero-service-desc {
        font-size: 1rem;
      }
      .hero-contact {
        margin-bottom: 1.25rem;
        display: flex;
        flex-wrap: wrap;
        gap: 1.25rem;
        font-size: 1.05rem;
        font-weight: 500;
        color: var(--ink);
      }
      .hero-contact a {
        color: inherit;
        text-decoration: none;
      }
      .hero-contact a:hover {
        color: var(--gold-dark);
      }
      .hero-contact-item {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
      }
      .hero-contact-item svg {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
      }
      .hero-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
      }
      .btn-primary {
        border: 1.5px solid var(--ink);
        display: inline-block;
        background: var(--yellow);
        color: var(--ink);
        padding: 0.75rem 1.75rem;
        border-radius: 7px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition: background 0.2s;
      }
      .btn-primary:hover {
        background: var(--yellow-dark);
      }
      .btn-secondary {
        display: inline-block;
        border: 1.5px solid var(--ink);
        color: var(--ink);
        padding: 0.75rem 1.75rem;
        border-radius: 7px;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        transition:
          background 0.2s,
          color 0.2s;
      }
      .btn-secondary:hover {
        background: var(--yellow-light);
        color: var(--ink);
      }
      .hero-img {
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .hero-img img {
        /* Source is 200px wide and an opaque JPEG. The white card makes the logo's
           own white background read as intentional against the cream hero.
           box-sizing is border-box, so the cap is 200 (source) + 40 (padding)
           + 2 (border) = 242px — this keeps the mobile `width: 100%` rule below
           from upscaling it. Raise the cap when a higher-res logo lands, and drop
           the background/padding if that file has transparency. */
        max-width: 242px;
        height: auto;
        display: block;
        background: var(--white);
        padding: 1.25rem;
      }

      /* FEATURE STRIP */
      .features-strip {
        background: var(--ink);
        padding: 1.5rem 2rem;
      }
      .features-strip-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        gap: 2rem;
        flex-wrap: wrap;
        justify-content: center;
      }
      .feature-pill {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        font-size: 0.88rem;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.85);
      }
      .feature-pill .icon {
        width: 30px;
        height: 30px;
        border-radius: 7px;
        background: rgba(255, 255, 255, 0.13);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }
      .feature-pill .icon svg {
        width: 15px;
        height: 15px;
      }

      /* LOCATIONS */
      #locations {
        background: var(--white);
      }
      .locations-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 1.5rem;
      }
      .location-card {
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 1.5rem;
        transition: border-color 0.2s;
      }
      .location-card:hover {
        border-color: var(--ink);
      }
      .location-card h3 {
        font-family: "Manrope", sans-serif;
        font-weight: 700;
        letter-spacing: -0.01em;
        font-size: 1.15rem;
        color: var(--ink);
        margin-bottom: 0.3rem;
      }
      .location-address {
        font-size: 0.9rem;
        color: var(--text-muted);
      }
      .location-actions {
        display: flex;
        gap: 1rem;
        flex-wrap: wrap;
        margin-top: 1.5rem;
      }
      .lot-map {
        margin-top: 1.25rem;
        margin-bottom: 0;
      }
      .lot-map-body {
        padding: 0 1.25rem 1.25rem;
      }
      .lot-map-body a {
        display: block;
        border: 1px solid var(--border);
        border-radius: var(--radius);
        overflow: hidden;
        line-height: 0;
      }
      /* The two lot maps have wildly different shapes — Parker is 5366x1499
         (3.58:1) and Highlands Ranch is 1914x2327 (0.82:1). A fixed-height box
         with object-fit: contain letterboxes both into the same footprint, so
         the tall map can't stretch its location card past the wide one's. */
      .lot-map-body img {
        display: block;
        width: 100%;
        height: 170px;
        object-fit: contain;
        background: var(--white);
      }
      /* These maps only show row letters, not space numbers or availability —
         the label has to say so, and they're unreadable until opened full size. */
      .lot-map-note {
        margin-top: 0.6rem;
        font-size: 0.85rem;
        color: var(--text-muted);
      }

      /* SECTIONS */
      section {
        padding: 5rem 2rem;
        /* Must clear the 70px sticky nav, or an anchored heading lands under it. */
        scroll-margin-top: 80px;
      }
      .section-inner {
        max-width: 1100px;
        margin: 0 auto;
      }
      .section-label {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--gold-dark);
        margin-bottom: 0.65rem;
      }
      .section-label::before {
        content: "";
        display: block;
        width: 14px;
        height: 2px;
        background: var(--yellow);
        border-radius: 1px;
      }
      .section-title {
        font-family: "Manrope", sans-serif;
        font-weight: 700;
        letter-spacing: -0.02em;
        font-size: clamp(1.6rem, 3vw, 2.2rem);
        color: var(--ink);
        margin-bottom: 0.9rem;
      }
      .section-sub {
        color: var(--text-muted);
        max-width: 520px;
        margin-bottom: 2.75rem;
      }

      /* GALLERY */
      #photos {
        background: var(--off-white);
      }
      .gallery-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1rem;
      }
      .gallery-item {
        border-radius: var(--radius);
        background: #ded9c9;
        aspect-ratio: 4/3;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        position: relative;
        border: 1px solid #c9c3ae;
      }
      .gallery-item svg {
        opacity: 0.25;
      }
      .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
      }
      .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(28, 28, 28, 0.65));
        color: var(--white);
        font-size: 0.8rem;
        font-weight: 500;
        padding: 1rem 0.85rem 0.7rem;
      }

      /* UNITS */
      #units {
        background: var(--white);
      }
      .units-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
        gap: 1.25rem;
      }
      .unit-card {
        border: 1px solid var(--border);
        border-radius: var(--radius);
        padding: 1.5rem;
        transition: border-color 0.2s;
      }
      .unit-card:hover {
        border-color: var(--ink);
      }
      .unit-card h3 {
        font-family: "Manrope", sans-serif;
        font-weight: 700;
        letter-spacing: -0.01em;
        font-size: 1.15rem;
        color: var(--ink);
        margin-bottom: 0.3rem;
      }
      .unit-card .size {
        font-size: 0.78rem;
        font-weight: 700;
        color: var(--gold-dark);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 0.75rem;
      }
      .unit-card p {
        font-size: 0.9rem;
        color: var(--text-muted);
        margin-bottom: 1rem;
      }
      .unit-card .from {
        font-size: 0.9rem;
        font-weight: 600;
        color: var(--ink);
      }

      /* FAQ */
      #faq {
        background: var(--off-white);
      }
      .faq-list {
        max-width: 720px;
      }
      details {
        border: 1px solid var(--border);
        border-radius: var(--radius);
        background: var(--white);
        margin-bottom: 0.75rem;
        overflow: hidden;
        transition: border-color 0.2s;
      }
      details[open] {
        border-color: var(--ink);
      }
      summary {
        padding: 1.1rem 1.25rem;
        font-weight: 500;
        cursor: pointer;
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 0.97rem;
        color: var(--text);
      }
      summary::-webkit-details-marker {
        display: none;
      }
      summary::after {
        content: "+";
        font-size: 1.2rem;
        color: var(--text-muted);
        flex-shrink: 0;
      }
      details[open] summary {
        color: var(--ink);
      }
      details[open] summary::after {
        content: "−";
        color: var(--ink);
      }
      .faq-body {
        padding: 0 1.25rem 1.25rem;
        font-size: 0.95rem;
        color: var(--text-muted);
        line-height: 1.7;
      }

      /* CONTACT */
      #contact {
        background: var(--white);
      }
      .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1.5fr;
        gap: 3rem;
        align-items: start;
      }
      .contact-info h3 {
        font-family: "Manrope", sans-serif;
        font-weight: 700;
        letter-spacing: -0.01em;
        font-size: 1.2rem;
        color: var(--ink);
        margin-bottom: 1.5rem;
      }
      .contact-detail {
        display: flex;
        gap: 0.75rem;
        align-items: flex-start;
        margin-bottom: 1.25rem;
        font-size: 0.95rem;
      }
      .contact-detail .icon {
        width: 34px;
        height: 34px;
        border-radius: 8px;
        background: var(--yellow-light);
        color: var(--ink);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        margin-top: 1px;
      }
      .contact-detail .icon svg {
        width: 16px;
        height: 16px;
      }
      .contact-detail strong {
        display: block;
        font-weight: 600;
        color: var(--ink);
      }
      .contact-detail span {
        color: var(--text-muted);
      }
      .contact-detail a {
        color: inherit;
        text-decoration: none;
      }
      /* Underline on hover as well as color, so the affordance isn't color-only. */
      .contact-detail a:hover {
        color: var(--gold-dark);
        text-decoration: underline;
      }
      .contact-form {
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }
      .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
      }
      .form-field {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
      }
      .form-field label {
        font-size: 0.85rem;
        font-weight: 500;
        color: var(--text-muted);
      }
      .form-field input,
      .form-field textarea,
      .form-field select {
        border: 1px solid var(--border);
        border-radius: 7px;
        padding: 0.65rem 0.9rem;
        font-family: "DM Sans", sans-serif;
        font-size: 0.95rem;
        color: var(--text);
        background: var(--white);
        transition: border-color 0.2s;
        outline: none;
      }
      .form-field input:focus,
      .form-field textarea:focus,
      .form-field select:focus {
        border-color: var(--ink);
      }
      .form-field textarea {
        resize: vertical;
        min-height: 110px;
      }
      .form-submit {
        background: var(--yellow);
        color: var(--ink);
        border: none;
        border-radius: 7px;
        padding: 0.75rem 2rem;
        font-size: 0.95rem;
        font-weight: 600;
        font-family: "DM Sans", sans-serif;
        cursor: pointer;
        transition: background 0.2s;
        align-self: flex-start;
        border: 1.5px solid var(--ink);
      }
      .form-submit:hover {
        background: var(--yellow-dark);
      }
      .contact-map {
        margin-top: 1.75rem;
        border-radius: var(--radius);
        overflow: hidden;
        border: 1px solid var(--border);
        line-height: 0;
      }
      .contact-map iframe {
        width: 100%;
        height: 240px;
        border: 0;
        display: block;
      }

      /* FOOTER */
      footer {
        background: var(--ink);
        color: rgba(255, 255, 255, 0.6);
        padding: 2.5rem 2rem;
        font-size: 0.87rem;
      }
      .footer-inner {
        max-width: 1100px;
        margin: 0 auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 1.25rem;
      }
      .footer-logo img {
        height: 38px;
        width: auto;
        filter: brightness(0) invert(1);
      }
      .footer-links {
        display: flex;
        gap: 1.5rem;
      }
      .footer-links a {
        color: rgba(255, 255, 255, 0.55);
        text-decoration: none;
        transition: color 0.2s;
      }
      .footer-links a:hover {
        color: var(--white);
      }

      .placeholder-bg {
        width: 80px;
        height: 80px;
      }

      @media (max-width: 768px) {
        .hero {
          grid-template-columns: 1fr;
          padding: 3rem 1.25rem;
          gap: 2rem;
        }
        .hero-img img {
          width: 100%;
        }
        .gallery-grid {
          grid-template-columns: repeat(2, 1fr);
        }
        .contact-grid {
          grid-template-columns: 1fr;
          gap: 2rem;
        }
        .form-row {
          grid-template-columns: 1fr;
        }
        nav {
          padding: 0 1.25rem;
        }
        .nav-toggle {
          display: block;
        }
        .nav-links {
          position: absolute;
          top: 70px;
          right: 0;
          left: 0;
          flex-direction: column;
          align-items: stretch;
          gap: 0;
          background: var(--white);
          border-bottom: 1px solid var(--border);
          padding: 0.5rem 1.25rem 1rem;
          box-shadow: 0 8px 16px rgba(0, 0, 0, 0.06);
          display: none;
        }
        nav.open .nav-links {
          display: flex;
        }
        .nav-links li {
          width: 100%;
        }
        .nav-links a {
          display: block;
          padding: 0.75rem 0;
          font-size: 1rem;
        }
        .nav-cta,
        .nav-pay {
          text-align: center;
          margin-top: 0.5rem;
        }
        section {
          padding: 3.5rem 1.25rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- NAV -->
    <nav id="site-nav">
      <button
        class="nav-toggle"
        aria-label="Toggle menu"
        aria-expanded="false"
        onclick="
          document.getElementById('site-nav').classList.toggle('open');
          this.setAttribute(
            'aria-expanded',
            document.getElementById('site-nav').classList.contains('open'),
          );
        "
      >
        <svg
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
        >
          <path d="M3 6h18M3 12h18M3 18h18" />
        </svg>
      </button>
      <ul class="nav-links">
        <li><a href="#locations">Locations</a></li>
        <li><a href="#photos">Facility</a></li>
        <li><a href="#units">Unit Sizes</a></li>
        <li><a href="#faq">FAQ</a></li>
        <li><a href="#contact">Contact</a></li>
        <li>
          <a
            href="https://www.uhaul.com/Auth/OrderLookUp/"
            target="_blank"
            rel="noopener"
            class="nav-pay"
            >Login</a
          >
        </li>
        <li><a href="#locations" class="nav-cta">Reserve a Unit</a></li>
      </ul>
    </nav>

    <!-- HERO -->
    <div class="hero-wrap">
      <div class="hero">
        <div class="hero-img">
          <img src="images/logo.jpg" alt="Outdoor Storage" />
        </div>
        <div class="hero-text">
          <div class="hero-eyebrow">Serving the South Denver Metro Area</div>
          <h1 class="hero-text">
            RV & Boat Storage
          </h1>
          <div>
          <div class="hero-contact">
            <span class="hero-contact-item">
              <svg viewBox="0 0 16 16" fill="none">
                <path
                  d="M8 1.5C5.5 1.5 3.5 3.5 3.5 6c0 3.5 4.5 8.5 4.5 8.5S12.5 9.5 12.5 6C12.5 3.5 10.5 1.5 8 1.5z"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
                <circle
                  cx="8"
                  cy="6"
                  r="1.5"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
              </svg>
              <b>Parker &amp; Highlands Ranch</b>
            </span>
            <a href="tel:+13039056666" class="hero-contact-item">
              <svg viewBox="0 0 16 16" fill="none">
                <path
                  d="M3 2.5c0 6.5 4 10.5 10 10.5l.5-2.5-2.5-1-.5 1C8 9.5 6.5 8 5.5 5.5l1-.5L5.5 2.5 3 2.5z"
                  stroke="currentColor"
                  stroke-width="1.5"
                />
              </svg>
              <b>(303) 905-6666</b>
            </a>
          </div>
          <div class="hero-actions">
            <a href="#locations" class="btn-primary">Reserve a Unit</a>
            <a href="#contact" class="btn-secondary">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

    <!-- FEATURE STRIP -->
    <div class="features-strip">
      <div class="features-strip-inner">
        <div class="feature-pill">
          <div class="icon">
            <svg viewBox="0 0 16 16" fill="none">
              <rect
                x="2"
                y="7"
                width="12"
                height="8"
                rx="1.5"
                stroke="white"
                stroke-width="1.5"
              />
              <path
                d="M5 7V5a3 3 0 016 0v2"
                stroke="white"
                stroke-width="1.5"
              />
            </svg>
          </div>
          Secure Access
        </div>
        <div class="feature-pill">
          <div class="icon">
            <svg viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="6" stroke="white" stroke-width="1.5" />
              <path
                d="M8 4v4l3 2"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
          </div>
          24-Hour Access
        </div>
        <div class="feature-pill">
          <div class="icon">
            <svg viewBox="0 0 16 16" fill="none">
              <path
                d="M1.5 3h13M1.5 13h13"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                d="M3.5 8h7M8.75 5.75L11 8l-2.25 2.25"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </div>
          Drive-Through Spaces
        </div>
        <div class="feature-pill">
          <div class="icon">
            <svg viewBox="0 0 16 16" fill="none">
              <path
                d="M8 1.5L2 4.5V8c0 3 2.5 5.5 6 7 3.5-1.5 6-4 6-7V4.5L8 1.5z"
                stroke="white"
                stroke-width="1.5"
              />
              <path d="M5 8l2 2 4-4" stroke="white" stroke-width="1.5" />
            </svg>
          </div>
          Month-to-Month
        </div>
        <div class="feature-pill">
          <div class="icon">
            <svg viewBox="0 0 16 16" fill="none">
              <rect
                x="1.5"
                y="2.5"
                width="13"
                height="9"
                rx="1.5"
                stroke="white"
                stroke-width="1.5"
              />
              <path
                d="M6 14h4"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
          </div>
          Online Reservations
        </div>
      </div>
    </div>

    <!-- LOCATIONS -->
    <section id="locations">
      <div class="section-inner">
        <div class="section-label">Our Locations</div>
        <h2 class="section-title">Two locations in the south metro</h2>
        <p class="section-sub">
          Pick the facility closest to you to reserve a unit or pay your bill.
        </p>
        <div class="locations-grid">
          <div class="location-card">
            <h3>Parker</h3>
            <p class="location-address">
              9575 N Motsenbocker Rd, Parker, CO 80134
            </p>
            <div class="contact-map">
              <iframe
                src="https://www.google.com/maps?q=9575+N+Motsenbocker+Rd,+Parker,+CO+80134&z=15&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Map showing Outdoor Storage at 9575 N Motsenbocker Rd, Parker, CO 80134"
              ></iframe>
            </div>
            <details class="lot-map">
              <summary>View lot map</summary>
              <div class="lot-map-body">
                <a href="images/parker-lot-map.png" target="_blank">
                  <img
                    src="images/parker-lot-map.png"
                    alt="Lot layout for the Parker facility, showing parking rows A through H plus row J, and the dump station"
                  />
                </a>
                <p class="lot-map-note">
                  Row layout only — open full size to zoom in.
                </p>
              </div>
            </details>
            <div class="location-actions">
              <a
                href="https://www.uhaul.com/Locations/Self-Storage-near-Parker-CO-80134/1039663/"
                target="_blank"
                class="btn-primary"
                >Reserve a Unit</a
              >
              <a
                href="https://storageaffiliatepayments.com/?locationId=78dc2820-c177-4544-b43b-269da4dcce12"
                target="_blank"
                class="btn-secondary"
                >Pay Online</a
              >
            </div>
          </div>
          <div class="location-card">
            <h3>Highlands Ranch</h3>
            <p class="location-address">5440 Kelly Ct, Littleton, CO 80125</p>
            <div class="contact-map">
              <iframe
                src="https://www.google.com/maps?q=5440+Kelly+Ct,+Littleton,+CO+80125&z=15&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Map showing Outdoor Storage at 5440 Kelly Ct, Littleton, CO 80125"
              ></iframe>
            </div>
            <details class="lot-map">
              <summary>View lot map</summary>
              <div class="lot-map-body">
                <a href="images/highlands-ranch-lot-map.png" target="_blank">
                  <img
                    src="images/highlands-ranch-lot-map.png"
                    alt="Lot layout for the Highlands Ranch facility, showing the upper and lower lots, parking rows A through P, the gate, and the dump station"
                  />
                </a>
                <p class="lot-map-note">
                  Row layout only — open full size to zoom in.
                </p>
              </div>
            </details>
            <div class="location-actions">
              <!-- TODO: replace with the Highlands Ranch reservation URL; site root is a stand-in -->
              <a
                href="https://outdoorstoragesantafe.storageunitsoftware.com/"
                target="_blank"
                class="btn-primary"
                >Reserve a Unit</a
              >
              <!-- TODO: replace with the Highlands Ranch payment URL; site root is a stand-in -->
              <a
                href="https://outdoorstoragesantafe.storageunitsoftware.com/"
                target="_blank"
                class="btn-secondary"
                >Pay Online</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FACILITY PHOTOS -->
    <section id="photos">
      <div class="section-inner">
        <div class="section-label">The Facilities</div>
        <h2 class="section-title">
          Secure, well maintained, and easy to access
        </h2>
        <p class="section-sub">
          Our facilities are fully fenced, and have 24 hour access. They are well maintained, and easy to navigate - whether you're moving in or stopping by the first time</p>
        <div class="gallery-grid">
          <div class="gallery-item">
            <img
              src="images/SF entrance.jpg"
              alt="Highlands Ranch entrance"
            />
            <div class="gallery-caption">Highlands Ranch Entrance</div>
          </div>
          <div class="gallery-item">
            <img src="images/SF gate.jpg" alt="Highlands Ranch gate" />
            <div class="gallery-caption">Highlands Ranch Gate</div>
          </div>
          <div class="gallery-item">
            <img src="images/SF row.jpg" alt="Highlands ranch row" />
            <div class="gallery-caption">Highlands Ranch Storage Row</div>
          </div>
          <div class="gallery-item">
            <img
              src="images/P entrance.jpg"
              alt="Parker entrance"
            />
            <div class="gallery-caption">Parker Entrance</div>
          </div>
          <div class="gallery-item">
            <img src="images/P gate.jpg" alt="Parker gate" />
            <div class="gallery-caption">Parker Gate</div>
          </div>
          <div class="gallery-item">
            <img
              src="images/P row.jpg"
              alt="Parker row"
            />
            <div class="gallery-caption">Parker Storage Row</div>
          </div>
        </div>
      </div>
    </section>

    <!-- UNIT SIZES -->
    <section id="units">
      <div class="section-inner">
        <div class="section-label">Unit Sizes</div>
        <h2 class="section-title">Find the right fit</h2>
        <p class="section-sub">
          We can accommodate recreational vehicles up to 50 feet in length. Store your trailer, boat, or RV with us today!
        </p>
        <div class="units-grid">
          <div class="unit-card">
            <div class="size">20' Outdoor Parking</div>
            <h3>Small</h3>
            <p>Great for small trailers.</p>
          </div>
          <div class="unit-card">
            <div class="size">30' Outdoor Parking</div>
            <h3>Medium</h3>
            <p>Popular for longer trailers and boats.</p>
          </div>
          <div class="unit-card">
            <div class="size">40' Outdoor Parking</div>
            <h3>Large</h3>
            <p>Great for longer trailers and 5th Wheels</p>
          </div>
          <div class="unit-card">
            <div class="size">50'Outdoor Parking</div>
            <h3>Extra Large</h3>
            <p>
              For very long trailers or two smaller trailers parked bumper to
              bumper
            </p>
          </div>
        </div>
        <div style="margin-top: 2rem">
          <a href="#locations" class="btn-primary"
            >Check Availability &amp; Reserve</a
          >
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq">
      <div class="section-inner">
        <div class="section-label">FAQ</div>
        <h2 class="section-title">Common questions</h2>
        <p class="section-sub">
          If you don't see your question here, reach out — we're glad to help.
        </p>
        <div class="faq-list">
          <details>
            <summary>What are your access hours?</summary>
            <div class="faq-body">
              Our facility is accessible 24 hours a day, 365 days a year.</div>
          </details>
          <details>
            <summary>Do you require a long-term contract?</summary>
            <div class="faq-body">
              No — all of our units are rented on a month-to-month basis. There
              are no long-term commitments required, and you can move out with 2
              days' written notice.
            </div>
          </details>
          <details>
            <summary>Is my stuff safe?</summary>
            <div class="faq-body">
              We have video surveillance at the entrance, a fully fenced
              facility, and a gated entry that requires a personal access code.
              We take the security of your belongings seriously.
            </div>
          </details>
          <details>
            <summary>Do you have drive through spaces?</summary>
            <div class="faq-body">
              Many of our spaces are drive through accessible. When making a
              reservation, choose the drive through option.
            </div>
          </details>
          <details>
            <summary>How do I pay?</summary>
            <div class="faq-body">
              You can pay online through our tenant portal, by phone, or by
              mail.  We accept major credit cards and ACH payments. Autopay is
              available and encouraged!
            </div>
          </details>
          <details>
            <summary>What can't I store?</summary>
            <div class="faq-body">
              We don't allow hazardous materials, flammable liquids, perishable
              food, live animals, or illegal items. We only store recreational
              vehicles 2000 or newer. When in doubt, just ask — we're happy to
              clarify.
            </div>
          </details>
          <details>
            <summary>How do I cancel my storage?</summary>
            <div class="faq-body">
              Send us a written notice (email works great) with at least 2 days
              notice. Be sure to clear everything from your space.
            </div>
          </details>
        </div>
      </div>
    </section>
    
    <!-- CONTACT -->
    <section id="contact">
      <div class="section-inner">
        <div class="section-label">Get in Touch</div>
        <h2 class="section-title">We'd love to hear from you</h2>
        <p class="section-sub">
          Have a question or want to talk through your options? Reach out and
          we'll get back to you quickly.
        </p>
        <div class="contact-grid">
          <div class="contact-info">
            <h3>Office Info</h3>
            <div class="contact-detail">
              <div class="icon">
                <svg viewBox="0 0 16 16" fill="none">
                  <path
                    d="M3 2.5c0 6.5 4 10.5 10 10.5l.5-2.5-2.5-1-.5 1C8 9.5 6.5 8 5.5 5.5l1-.5L5.5 2.5 3 2.5z"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                </svg>
              </div>
              <div>
                <strong>Rentals</strong
                ><span
                  ><a href="tel:+13039056666">(303) 905-6666</a><br />
                  <a href="mailto:rentals@outdoorstorage.net"
                    >rentals@outdoorstorage.net</a
                  ></span
                >
              </div>
            </div>
            <div class="contact-detail">
              <div class="icon">
                <svg viewBox="0 0 16 16" fill="none">
                  <rect
                    x="1.5"
                    y="3.5"
                    width="13"
                    height="9"
                    rx="1.5"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <path
                    d="M1.5 6.5h13"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                </svg>
              </div>
              <div>
                <strong>Billing</strong
                ><span
                  ><a href="tel:+13036809300">(303) 680-9300</a><br />
                  <a href="mailto:office@outdoorstorage.net"
                    >office@outdoorstorage.net</a
                  ></span
                >
              </div>
            </div>
            <div class="contact-detail">
              <div class="icon">
                <svg viewBox="0 0 16 16" fill="none">
                  <path
                    d="M8 1.5C5.5 1.5 3.5 3.5 3.5 6c0 3.5 4.5 8.5 4.5 8.5S12.5 9.5 12.5 6C12.5 3.5 10.5 1.5 8 1.5z"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                  <circle
                    cx="8"
                    cy="6"
                    r="1.5"
                    stroke="currentColor"
                    stroke-width="1.5"
                  />
                </svg>
              </div>
              <div>
                <strong>Payment Address</strong
                ><span>9457 University Blvd., #401, Highlands Ranch, CO 80126</span>
              </div>
            </div>
          </div>
          <form class="contact-form" action="contact.php" method="POST">
            <div class="form-row">
              <div class="form-field">
                <label for="fname">First name</label
                ><input
                  type="text"
                  id="fname"
                  name="fname"
                  placeholder="Jane"
                />
              </div>
              <div class="form-field">
                <label for="lname">Last name</label
                ><input
                  type="text"
                  id="lname"
                  name="lname"
                  placeholder="Smith"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="form-field">
                <label for="email">Email</label
                ><input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="jane@email.com"
                />
              </div>
              <div class="form-field">
                <label for="phone">Phone (optional)</label
                ><input
                  type="tel"
                  id="phone"
                  name="phone"
                  placeholder="(303) 905-6666"
                />
              </div>
            </div>
            <div class="form-row">
              <div class="form-field">
                <label for="location">Which location?</label
                ><select id="location" name="location">
                  <option value="">Select a location…</option>
                  <option>Parker</option>
                  <option>Highlands Ranch</option>
                </select>
              </div>
              <div class="form-field">
                <label for="subject">What can we help with?</label
                ><select id="subject" name="subject">
                  <option value="">Select a topic…</option>
                  <option>Unit availability</option>
                  <option>Pricing &amp; rates</option>
                  <option>Account / billing</option>
                  <option>General question</option>
                </select>
              </div>
            </div>
            <div class="form-field">
              <label for="message">Message</label
              ><textarea
                id="message"
                name="message"
                placeholder="Tell us a bit about what you need…"
              ></textarea>
            </div>
            <button type="submit" class="form-submit">Send Message</button>
            <?php if (isset($_GET['sent']) && $_GET['sent'] === '1'): ?>
            <p style="color: var(--success); font-size: 0.9rem; font-weight: 500">
              &#10003; Message sent! We'll be in touch soon.
            </p>
            <?php elseif (isset($_GET['error'])): ?>
            <p style="color: var(--error); font-size: 0.9rem; font-weight: 500">
              Something went wrong. Please try again or call us directly.
            </p>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </section>

    <script>
      (function () {
        var nav = document.getElementById("site-nav");
        var toggle = nav.querySelector(".nav-toggle");
        nav.querySelectorAll(".nav-links a").forEach(function (link) {
          link.addEventListener("click", function () {
            nav.classList.remove("open");
            toggle.setAttribute("aria-expanded", "false");
          });
        });
      })();
    </script>

    <!-- FOOTER -->
    <footer>
      <div class="footer-inner">
        <div>
          <div style="margin-top: 0.5rem; font-size: 0.82rem">
            9575 N Motsenbocker Rd, Parker, CO 80134<br />
            5440 Kelly Ct, Littleton, CO 80125
          </div>
        </div>
        <div class="footer-links">
          <a href="#locations">Locations</a>
          <a href="#photos">Facility</a>
          <a href="#faq">FAQ</a>
          <a href="#contact">Contact</a>
          <a href="#locations">Reserve</a>
        </div>
        <div style="font-size: 0.82rem">© 2025 Outdoor Storage</div>
      </div>
    </footer>
  </body>
</html>
