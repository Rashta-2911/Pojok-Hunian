<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pojok Hunian — Semarang</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet" />

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --bg:       #F8F7F4;
      --bg2:      #EFECEA;
      --dark:     #1C2B45;
      --gold:     #E8A820;
      --gold-lt:  #FEF3D0;
      --gold-dk:  #C48A10;
      --muted:    #6B7280;
      --white:    #FFFFFF;
      --radius:   14px;
      --radius-sm:8px;
      --font:     'Poppins', sans-serif;
      --shadow:   0 4px 24px rgba(28,43,69,0.08);
      --shadow-lg:0 12px 48px rgba(28,43,69,0.13);
    }

    html { scroll-behavior: smooth; }

    body {
      font-family: var(--font);
      background: var(--bg);
      color: var(--dark);
      overflow-x: hidden;
      line-height: 1.6;
      font-size: 15px;
    }

    img { display: block; max-width: 100%; }
    a   { text-decoration: none; color: inherit; }

    /* ════ NAVBAR ════ */
    .navbar {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 5vw;
      height: 68px;
      background: rgba(248,247,244,0.92);
      backdrop-filter: blur(16px);
      -webkit-backdrop-filter: blur(16px);
      border-bottom: 1px solid rgba(232,168,32,0.15);
    }

    .navbar-brand {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--dark);
      letter-spacing: -0.01em;
    }

    .navbar-brand span { color: var(--gold); }

    .navbar-logo {
      width: 38px; height: 40px;
      border-radius: 10px;
      overflow: hidden;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }

    .navbar-logo img { width: 100%; height: 100%; object-fit: contain; }

    .navbar-links {
      display: flex; align-items: center;
      gap: 2rem; list-style: none;
    }

    .navbar-links a {
      font-size: 0.8rem; font-weight: 500;
      color: var(--muted);
      letter-spacing: 0.03em;
      transition: color 0.2s;
    }

    .navbar-links a:hover { color: var(--dark); }

    .navbar-cta {
      background: var(--dark) !important;
      color: var(--white) !important;
      padding: 0.45rem 1.2rem !important;
      border-radius: 50px !important;
      font-size: 0.8rem !important;
      font-weight: 600 !important;
      transition: background 0.2s, transform 0.15s !important;
    }

    .navbar-cta:hover {
      background: var(--gold) !important;
      color: var(--dark) !important;
      transform: translateY(-1px) !important;
    }

    /* ════ HERO ════ */
    .hero {
      margin-top: 68px;
      min-height: calc(100vh - 68px);
      display: grid;
      grid-template-columns: 1fr 1fr;
      align-items: stretch;
    }

    .hero-left {
      display: flex; flex-direction: column; justify-content: center;
      padding: 5rem 3.5rem 5rem 5vw;
      animation: fadeUp 0.8s ease both;
    }

    .hero-badge {
      display: inline-flex; align-items: center; gap: 6px;
      background: var(--gold-lt);
      color: var(--gold-dk);
      border: 1px solid rgba(232,168,32,0.35);
      border-radius: 50px;
      font-size: 0.68rem; font-weight: 600;
      letter-spacing: 0.1em; text-transform: uppercase;
      padding: 0.35rem 1rem;
      width: fit-content; margin-bottom: 1.75rem;
    }

    .hero-badge::before { content: "●"; font-size: 0.45rem; }

    .hero-title {
      font-size: clamp(2.2rem, 4vw, 3.6rem);
      font-weight: 700;
      line-height: 1.18;
      letter-spacing: -0.025em;
      margin-bottom: 1.2rem;
    }

    .hero-title em {
      font-style: italic; font-weight: 400;
      color: var(--gold);
    }

    .hero-desc {
      font-size: 0.92rem; font-weight: 300;
      color: var(--muted); line-height: 1.9;
      max-width: 400px; margin-bottom: 2rem;
    }

    .hero-stats {
      display: flex; gap: 0;
      margin-bottom: 2rem;
      background: var(--white);
      border-radius: var(--radius);
      border: 1px solid rgba(232,168,32,0.15);
      box-shadow: var(--shadow);
      width: fit-content;
      overflow: hidden;
    }

    .stat-item {
      padding: 1rem 1.5rem;
      text-align: center;
    }

    .stat-val {
      font-size: 1.55rem; font-weight: 700;
      color: var(--dark); display: block; line-height: 1;
    }

    .stat-key {
      font-size: 0.68rem; color: var(--muted);
      font-weight: 400; margin-top: 4px; display: block;
    }

    .stat-divider {
      width: 1px;
      background: rgba(232,168,32,0.2);
      align-self: stretch;
    }

    .hero-actions { display: flex; gap: 0.75rem; flex-wrap: wrap; }

    .btn-primary {
      background: var(--dark); color: var(--white);
      padding: 0.78rem 1.8rem; border-radius: 50px;
      font-family: var(--font); font-size: 0.86rem; font-weight: 600;
      transition: background 0.2s, transform 0.15s;
      display: inline-block;
    }

    .btn-primary:hover { background: var(--gold); color: var(--dark); transform: translateY(-2px); }

    .btn-secondary {
      background: transparent; color: var(--dark);
      padding: 0.78rem 1.6rem; border-radius: 50px;
      font-family: var(--font); font-size: 0.86rem; font-weight: 500;
      border: 1.5px solid rgba(28,43,69,0.18);
      transition: border-color 0.2s, color 0.2s;
      display: inline-block;
    }

    .btn-secondary:hover { border-color: var(--gold); color: var(--gold); }

    /* mosaic */
    .hero-right {
      position: relative; overflow: hidden;
      animation: fadeUp 0.8s 0.15s ease both;
    }

    .hero-mosaic {
      display: grid;
      grid-template-columns: 1.5fr 1fr;
      grid-template-rows: 1fr 1fr;
      gap: 8px;
      height: 100%;
      min-height: calc(100vh - 68px);
      padding: 16px 16px 16px 8px;
    }

    .mosaic-main {
      grid-row: 1 / 3;
      border-radius: var(--radius); overflow: hidden;
      background: var(--gold-lt);
      display: flex; align-items: center; justify-content: center;
    }

    .mosaic-main img {
      width: 100%; height: 100%;
      object-fit: contain; padding: 1.5rem;
    }

    .mosaic-main-placeholder { font-size: 5rem; opacity: 0.3; }

    .mosaic-a {
      border-radius: var(--radius); overflow: hidden;
      background: var(--bg2);
      display: flex; align-items: center; justify-content: center;
      font-size: 2.2rem;
    }

    .mosaic-b {
      border-radius: var(--radius); overflow: hidden;
      background: var(--dark);
      display: flex; align-items: center; justify-content: center;
      padding: 1.5rem; text-align: center;
    }

    .mosaic-b p {
      font-size: 0.95rem; font-weight: 400;
      color: var(--white); line-height: 1.6;
    }

    .mosaic-b p em { font-style: italic; color: var(--gold); font-weight: 300; }

    /* ════ SECTION BASE ════ */
    .section { padding: 5rem 5vw; }
    .section-white { background: var(--white); }
    .section-dark  { background: var(--dark); }
    .section-bg    { background: var(--bg); }

    .section-label {
      font-size: 0.68rem; font-weight: 600;
      letter-spacing: 0.2em; text-transform: uppercase;
      color: var(--gold); margin-bottom: 0.55rem; display: block;
    }

    .section-title {
      font-size: clamp(1.65rem, 2.6vw, 2.4rem);
      font-weight: 700; letter-spacing: -0.02em;
      line-height: 1.22; color: var(--dark);
    }

    .section-header { margin-bottom: 2.75rem; }
    .section-header-center {
      text-align: center; max-width: 480px;
      margin: 0 auto 2.75rem;
    }

    /* ════ GALERI ════ */
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(12, 1fr);
      grid-template-rows: 260px 260px;
      gap: 10px;
    }

    .g-item {
      border-radius: var(--radius-sm); overflow: hidden;
      position: relative; background: var(--bg2); cursor: pointer;
    }

    .g-item::after {
      content: attr(data-label);
      position: absolute; bottom: 0; left: 0; right: 0;
      padding: 0.6rem 0.9rem;
      background: linear-gradient(transparent, rgba(20,30,50,0.78));
      color: #fff; font-size: 0.72rem; font-weight: 500;
      opacity: 0; transform: translateY(4px);
      transition: opacity 0.25s, transform 0.25s;
    }

    .g-item:hover::after { opacity: 1; transform: translateY(0); }

    .g-item .img-placeholder {
      width: 100%; height: 100%;
      display: flex; align-items: center; justify-content: center;
      font-size: 3rem; transition: transform 0.4s ease;
    }

    .g-item:hover .img-placeholder { transform: scale(1.05); }

    .g-item img {
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      object-fit: cover; transition: transform 0.4s ease;
    }

    .g-item:hover img { transform: scale(1.05); }

    .g1 { grid-column: 1 / 5;   grid-row: 1;     background: #FEE9A0; }
    .g2 { grid-column: 5 / 8;   grid-row: 1;     background: #C5CEDF; }
    .g3 { grid-column: 8 / 10;  grid-row: 1;     background: #D9DEEA; }
    .g4 { grid-column: 1 / 4;   grid-row: 2;     background: #E8D5C0; }
    .g5 { grid-column: 10 / 13; grid-row: 1 / 3; background: #EEF0EC; }
    .g6 { grid-column: 4 / 10;  grid-row: 2;     background: #FEF0C0; }

    .g5 img { object-fit: contain; background: #EEF0EC; }

    /* ════ FASILITAS ════ */
    .fasilitas-layout {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 4rem; align-items: start;
    }

    .desc-text p {
      font-size: 0.9rem; font-weight: 300;
      color: var(--muted); line-height: 1.9;
      margin-bottom: 1rem;
    }

    .desc-text p strong { color: var(--dark); font-weight: 600; }

    .perks-grid {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 0.65rem; margin-top: 1.4rem;
    }

    .perk-card {
      display: flex; align-items: flex-start; gap: 0.7rem;
      padding: 0.85rem 0.95rem;
      background: var(--white);
      border-radius: var(--radius-sm);
      border: 1px solid rgba(232,168,32,0.18);
      transition: border-color 0.2s, box-shadow 0.2s, transform 0.2s;
    }

    .perk-card:hover {
      border-color: var(--gold);
      box-shadow: 0 4px 16px rgba(232,168,32,0.1);
      transform: translateY(-2px);
    }

    .perk-icon { font-size: 1rem; flex-shrink: 0; margin-top: 2px; }

    .perk-info strong {
      font-size: 0.8rem; font-weight: 600;
      display: block; margin-bottom: 2px;
    }

    .perk-info span { font-size: 0.72rem; color: var(--muted); font-weight: 300; }

    .fasilitas-visual { position: relative; }

    .fasilitas-img {
      border-radius: var(--radius); overflow: hidden;
      aspect-ratio: 4/5; background: var(--gold-lt);
    }

    .fasilitas-img img { width: 100%; height: 100%; object-fit: cover; }

    .fasilitas-img .img-placeholder {
      width: 100%; height: 100%;
      display: flex; align-items: center; justify-content: center;
      font-size: 5rem; opacity: 0.25;
    }

    .float-card {
      position: absolute; bottom: 2rem; left: -1.5rem;
      background: var(--white);
      border-radius: var(--radius-sm);
      padding: 0.9rem 1.2rem;
      box-shadow: var(--shadow-lg);
      border: 1px solid rgba(232,168,32,0.2);
      min-width: 170px;
    }

    .float-card .fc-val {
      font-size: 1.7rem; font-weight: 700;
      color: var(--gold); display: block; line-height: 1;
    }

    .float-card .fc-lbl {
      font-size: 0.72rem; color: var(--muted);
      font-weight: 400; display: block; margin-top: 4px;
    }

    /* ════ HARGA ════ */
    .pricing-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 1.15rem;
    }

    .price-card {
      background: var(--white);
      border: 1.5px solid rgba(232,168,32,0.18);
      border-radius: var(--radius);
      padding: 1.7rem 1.45rem;
      position: relative; overflow: hidden;
      transition: transform 0.25s, box-shadow 0.25s, border-color 0.25s;
    }

    .price-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow-lg);
      border-color: var(--gold);
    }

    .price-card.featured { background: var(--dark); border-color: var(--gold); }

    .featured-badge {
      position: absolute; top: 1.1rem; right: 1.1rem;
      background: var(--gold); color: var(--dark);
      font-size: 0.6rem; font-weight: 700;
      letter-spacing: 0.08em; text-transform: uppercase;
      padding: 0.2rem 0.6rem; border-radius: 50px;
    }

    .price-type {
      font-size: 0.66rem; font-weight: 600;
      letter-spacing: 0.18em; text-transform: uppercase;
      color: var(--gold); margin-bottom: 0.4rem; display: block;
    }

    .price-name {
      font-size: 1.15rem; font-weight: 700;
      margin-bottom: 1rem; color: var(--dark);
    }

    .price-card.featured .price-name { color: var(--white); }

    .price-amount {
      font-size: 2rem; font-weight: 700;
      color: var(--dark); line-height: 1; margin-bottom: 0.2rem;
    }

    .price-card.featured .price-amount { color: var(--gold); }

    .price-period {
      font-size: 0.74rem; color: var(--muted);
      font-weight: 400; margin-bottom: 1.2rem;
    }

    .price-card.featured .price-period { color: rgba(255,255,255,0.45); }

    .price-divider { height: 1px; background: rgba(232,168,32,0.18); margin-bottom: 1.2rem; }

    .price-features { list-style: none; display: flex; flex-direction: column; gap: 0.5rem; }

    .price-feature {
      font-size: 0.81rem; color: var(--muted); font-weight: 400;
      display: flex; align-items: center; gap: 0.5rem;
    }

    .price-card.featured .price-feature { color: rgba(255,255,255,0.55); }

    .price-feature::before {
      content: "✓"; color: var(--gold);
      font-weight: 700; font-size: 0.78rem; flex-shrink: 0;
    }

    .price-btn {
      display: block; margin-top: 1.6rem;
      text-align: center; padding: 0.7rem;
      border-radius: 50px;
      font-family: var(--font); font-size: 0.81rem; font-weight: 600;
      border: 1.5px solid rgba(232,168,32,0.4); color: var(--dark);
      transition: background 0.2s, color 0.2s, border-color 0.2s;
    }

    .price-btn:hover { background: var(--gold); color: var(--dark); border-color: var(--gold); }

    .price-card.featured .price-btn {
      background: var(--gold); color: var(--dark); border-color: var(--gold);
    }

    .price-card.featured .price-btn:hover { background: var(--gold-dk); border-color: var(--gold-dk); }

    .price-note {
      text-align: center; margin-top: 1.5rem;
      font-size: 0.76rem; color: var(--muted); font-weight: 300;
    }

    /* ════ TESTIMONI ════ */
    .testi-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 1.15rem; }

    .testi-card {
      background: rgba(255,255,255,0.06);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: var(--radius); padding: 1.5rem;
      transition: background 0.2s, border-color 0.2s;
    }

    .testi-card:hover {
      background: rgba(255,255,255,0.09);
      border-color: rgba(232,168,32,0.3);
    }

    .testi-stars { color: var(--gold); font-size: 0.78rem; letter-spacing: 0.06em; margin-bottom: 0.85rem; }

    .testi-quote {
      font-size: 0.88rem; font-style: italic; font-weight: 300;
      color: rgba(255,255,255,0.82); line-height: 1.78; margin-bottom: 1.2rem;
    }

    .testi-author { display: flex; align-items: center; gap: 0.65rem; }

    .testi-avatar {
      width: 35px; height: 35px; border-radius: 50%;
      background: var(--gold);
      display: flex; align-items: center; justify-content: center;
      font-size: 0.88rem; font-weight: 700; color: var(--dark); flex-shrink: 0;
    }

    .testi-name { font-size: 0.83rem; font-weight: 600; color: var(--white); display: block; line-height: 1.3; }
    .testi-info { font-size: 0.71rem; color: rgba(255,255,255,0.38); font-weight: 300; }

    /* ════ LOKASI ════ */
    .lokasi-layout { display: grid; grid-template-columns: 1fr 1.3fr; gap: 3.5rem; align-items: start; }

    .lokasi-address {
      font-size: 1rem; font-weight: 500; line-height: 1.65;
      margin-bottom: 1.65rem; color: var(--dark);
    }

    .lokasi-list { display: flex; flex-direction: column; gap: 0.65rem; }

    .lokasi-item {
      display: flex; align-items: center; gap: 0.85rem;
      padding: 0.78rem 1rem; background: var(--bg2);
      border-radius: var(--radius-sm); transition: background 0.2s;
    }

    .lokasi-item:hover { background: var(--gold-lt); }

    .lokasi-ico {
      width: 32px; height: 32px; background: var(--gold-lt);
      border-radius: 8px; display: flex; align-items: center;
      justify-content: center; font-size: 0.9rem; flex-shrink: 0;
    }

    .lokasi-item-text strong { font-size: 0.82rem; font-weight: 600; display: block; }
    .lokasi-item-text span  { font-size: 0.74rem; color: var(--muted); font-weight: 300; }

    .map-wrap {
      border-radius: var(--radius); overflow: hidden;
      min-height: 440px;
      border: 1.5px solid rgba(232,168,32,0.2);
      box-shadow: var(--shadow);
    }

    .map-wrap iframe { width: 100%; height: 100%; min-height: 440px; border: 0; display: block; }

    /* ════ KONTAK ════ */
    .kontak-layout { display: grid; grid-template-columns: 1fr 1.15fr; gap: 3.5rem; align-items: start; }

    .kontak-intro { font-size: 0.9rem; font-weight: 300; color: var(--muted); line-height: 1.88; }
    .kontak-intro strong { color: var(--dark); font-weight: 600; }

    .kontak-channels { display: flex; flex-direction: column; gap: 0.8rem; margin-top: 1.65rem; }

    .kontak-channel {
      display: flex; align-items: center; gap: 1rem;
      padding: 1rem 1.15rem;
      background: var(--bg2);
      border-radius: var(--radius);
      border: 1.5px solid transparent;
      transition: border-color 0.2s, transform 0.2s, background 0.2s;
      color: var(--dark);
    }

    .kontak-channel:hover { border-color: var(--gold); transform: translateX(4px); background: var(--white); }

    .ch-icon {
      width: 40px; height: 40px; border-radius: 10px;
      background: var(--gold-lt);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.05rem; flex-shrink: 0;
    }

    .ch-text strong { font-size: 0.85rem; font-weight: 600; display: block; margin-bottom: 2px; }
    .ch-text span   { font-size: 0.76rem; color: var(--muted); font-weight: 300; }

    .ch-arrow {
      margin-left: auto; color: var(--gold); font-size: 1rem;
      opacity: 0; transition: opacity 0.2s, transform 0.2s;
    }

    .kontak-channel:hover .ch-arrow { opacity: 1; transform: translateX(3px); }

    .kontak-form {
      background: var(--white); border-radius: var(--radius);
      padding: 1.9rem 1.65rem;
      border: 1.5px solid rgba(232,168,32,0.18);
      box-shadow: var(--shadow);
    }

    .kontak-form h3 { font-size: 1.25rem; font-weight: 700; margin-bottom: 1.4rem; }

    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 0.8rem; }
    .form-group { margin-bottom: 0.9rem; }

    .form-group label {
      display: block; font-size: 0.68rem; font-weight: 600;
      letter-spacing: 0.08em; text-transform: uppercase;
      color: var(--dark); margin-bottom: 0.38rem;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%; padding: 0.7rem 0.88rem;
      border: 1.5px solid rgba(232,168,32,0.25);
      border-radius: var(--radius-sm);
      background: var(--bg);
      font-family: var(--font); font-size: 0.86rem; color: var(--dark);
      outline: none;
      transition: border-color 0.2s, background 0.2s;
      -webkit-appearance: none;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus { border-color: var(--gold); background: var(--white); }

    .form-group textarea { resize: vertical; min-height: 100px; }

    .btn-submit {
      width: 100%; margin-top: 0.5rem; padding: 0.85rem;
      background: var(--dark); color: var(--white);
      border: none; border-radius: 50px;
      font-family: var(--font); font-size: 0.88rem; font-weight: 600;
      cursor: pointer;
      transition: background 0.2s, transform 0.15s;
      display: flex; align-items: center; justify-content: center; gap: 6px;
    }

    .btn-submit:hover { background: var(--gold); color: var(--dark); transform: translateY(-2px); }
    .btn-submit::after { content: "↗"; }

    /* ════ FOOTER ════ */
    footer { background: var(--dark); padding: 2.1rem 5vw; }

    .footer-inner {
      display: flex; align-items: center; justify-content: space-between;
      flex-wrap: wrap; gap: 1rem;
    }

    .footer-brand {
      font-size: 1.1rem; font-weight: 700; color: var(--white);
      display: flex; align-items: center; gap: 8px;
    }

    .footer-brand span { color: var(--gold); }

    .footer-logo {
      width: 30px; height: 35px; border-radius: 7px;
      overflow: hidden; background: rgba(232,168,32,0.15);
      display: flex; align-items: center; justify-content: center;
    }

    .footer-logo img { width: 100%; height: 100%; object-fit: fill; }

    .footer-links { display: flex; gap: 1.5rem; list-style: none; }

    .footer-links a {
      font-size: 0.76rem; color: rgba(255,255,255,0.38);
      font-weight: 400; transition: color 0.2s;
    }

    .footer-links a:hover { color: var(--gold); }

    .footer-copy { font-size: 0.73rem; color: rgba(255,255,255,0.25); font-weight: 300; }

    /* ════ TOAST ════ */
    .toast {
      position: fixed; bottom: 1.75rem; right: 1.75rem;
      background: var(--dark); color: var(--white);
      padding: 0.82rem 1.5rem; border-radius: 50px;
      font-size: 0.83rem; font-weight: 500;
      border: 1px solid rgba(232,168,32,0.3);
      opacity: 0; transform: translateY(10px);
      transition: opacity 0.3s, transform 0.3s;
      z-index: 999; pointer-events: none;
    }

    .toast.show { opacity: 1; transform: translateY(0); }

    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(24px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ════ RESPONSIVE ════ */
    @media (max-width: 960px) {
      .hero { grid-template-columns: 1fr; }
      .hero-right { display: none; }
      .hero-left { padding: 3rem 5vw; }
      .fasilitas-layout { grid-template-columns: 1fr; }
      .fasilitas-visual { display: none; }
      .pricing-grid { grid-template-columns: 1fr; }
      .testi-grid   { grid-template-columns: 1fr; }
      .lokasi-layout { grid-template-columns: 1fr; }
      .map-wrap { min-height: 300px; }
      .map-wrap iframe { min-height: 300px; }
      .kontak-layout { grid-template-columns: 1fr; }
      .form-row { grid-template-columns: 1fr; }
      .gallery-grid {
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 180px 180px 180px 180px;
      }
      .g1, .g2, .g3, .g4, .g5, .g6 { grid-column: auto; grid-row: auto; }
      .g5 { grid-row: span 2; }
      .g5 img { object-fit: contain; }
      .navbar-links { display: none; }
      .hero-stats { gap: 0; }
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="navbar-brand">
      <div class="navbar-logo">
        <img src="images/Logo Kos.png" alt="Logo" onerror="this.style.display='none'" />
      </div>
      Pojok <span>Hunian</span>
    </div>
    <ul class="navbar-links">
      <li><a href="#galeri">Galeri</a></li>
      <li><a href="#fasilitas">Fasilitas</a></li>
      <li><a href="#harga">Harga</a></li>
      <li><a href="#lokasi">Lokasi</a></li>
      <li><a href="#kontak" class="navbar-cta">Hubungi Kami</a></li>
    </ul>
  </nav>

  <!-- HERO -->
  <section class="hero" id="beranda">
    <div class="hero-left">
      <span class="hero-badge">Tersedia · Semarang Selatan</span>

      <h1 class="hero-title">
        Nyaman, bersih,<br>terasa seperti<br><em>rumah sendiri</em>
      </h1>

      <p class="hero-desc">
        Pojok Hunian menawarkan hunian premium dengan fasilitas lengkap, suasana tenang, dan lokasi strategis — cocok untuk mahasiswa &amp; karyawan.
      </p>

      <div class="hero-stats">
        <div class="stat-item">
          <span class="stat-val">18</span>
          <span class="stat-key">Kamar tersedia</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <span class="stat-val">4.6★</span>
          <span class="stat-key">Rating penghuni</span>
        </div>
        <div class="stat-divider"></div>
        <div class="stat-item">
          <span class="stat-val">3 th</span>
          <span class="stat-key">Sejak 2022</span>
        </div>
      </div>

      <div class="hero-actions">
        <a href="#kontak" class="btn-primary">Tanya Kamar Kosong</a>
        <a href="#galeri" class="btn-secondary">Lihat Galeri</a>
      </div>
    </div>

    <div class="hero-right">
      <div class="hero-mosaic">
        <div class="mosaic-main">
          <img src="images/Logo Kos.png" alt="Kos Shinta" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
          <div class="mosaic-main-placeholder" style="display:none;">🏠</div>
        </div>
        <div class="mosaic-a">🛏</div>
        <div class="mosaic-b">
          <p>"Harga terjangkau,<br>fasilitas <em>lengkap</em>"</p>
        </div>
      </div>
    </div>
  </section>

  <!-- GALERI -->
  <section class="section section-white" id="galeri">
    <div class="section-header">
      <span class="section-label">Galeri Foto</span>
      <h2 class="section-title">Lihat kondisi nyata setiap sudut kos</h2>
    </div>
    <div class="gallery-grid">
      <div class="g-item g1" data-label="Kamar Tipe Premium"><div class="img-placeholder">🛏</div></div>
      <div class="g-item g2" data-label="Kamar Mandi Dalam"><div class="img-placeholder">🚿</div></div>
      <div class="g-item g3" data-label="Ruang Bersama"><div class="img-placeholder">🛋</div></div>
      <div class="g-item g4" data-label="Dapur Bersama"><div class="img-placeholder">🍳</div></div>
      <div class="g-item g5" data-label="Area Parkir">
        <img src="images/Parkiran.jpeg" alt="Area Parkir" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
        <div class="img-placeholder" style="display:none;">🚗</div>
      </div>
      <div class="g-item g6" data-label="Taman & Teras"><div class="img-placeholder">🌿</div></div>
    </div>
  </section>

  <!-- FASILITAS -->
  <section class="section section-bg" id="fasilitas">
    <div class="fasilitas-layout">
      <div>
        <div class="section-header">
          <span class="section-label">Tentang Kos</span>
          <h2 class="section-title">Hunian yang dirancang untuk kenyamanan</h2>
        </div>
        <div class="desc-text">
          <p><strong>Kos Shinta</strong> berdiri sejak 2022 dengan konsep hunian bersih, aman, dan nyaman. Dikelola langsung oleh pemilik, setiap kamar dirawat secara berkala.</p>
          <p>Berlokasi di kawasan tenang Banyumanik, Semarang — dekat kampus Undip, rumah sakit, dan pusat perbelanjaan. Cocok untuk <strong>mahasiswa</strong>, <strong>karyawan</strong>, maupun keluarga kecil.</p>
        </div>
        <div class="perks-grid">
          <div class="perk-card"><span class="perk-icon">📶</span><div class="perk-info"><strong>WiFi Fiber 100 Mbps</strong><span>Unlimited, stabil 24 jam</span></div></div>
          <div class="perk-card"><span class="perk-icon">❄️</span><div class="perk-info"><strong>AC Setiap Kamar</strong><span>1/2 PK, belum termasuk listrik</span></div></div>
          <div class="perk-card"><span class="perk-icon">🔒</span><div class="perk-info"><strong>Keamanan 24 Jam</strong><span>CCTV terpasang</span></div></div>
          <div class="perk-card"><span class="perk-icon">🚿</span><div class="perk-info"><strong>Kamar Mandi Dalam</strong><span>Air panas &amp; shower</span></div></div>
          <div class="perk-card"><span class="perk-icon">👕</span><div class="perk-info"><strong>Laundry Kiloan</strong><span>Antar-jemput dari kamar</span></div></div>
          <div class="perk-card"><span class="perk-icon">🚗</span><div class="perk-info"><strong>Parkir Motor</strong><span>Area parkir tersedia</span></div></div>
          <div class="perk-card"><span class="perk-icon">🍳</span><div class="perk-info"><strong>Dapur Bersama</strong><span>Lengkap dengan peralatan masak</span></div></div>
          <div class="perk-card"><span class="perk-icon">🧹</span><div class="perk-info"><strong>Cleaning Service</strong><span>Koridor 2×/minggu</span></div></div>
        </div>
      </div>
      <div class="fasilitas-visual">
        <div class="fasilitas-img">
          <img src="images/Depan Kos.jpg" alt="Tampak Depan Kos" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
          <div class="img-placeholder" style="display:none;">🏡</div>
        </div>
        <div class="float-card">
          <span class="fc-val">100%</span>
          <span class="fc-lbl">Penghuni puas — survei 2024</span>
        </div>
      </div>
    </div>
  </section>

  <!-- HARGA -->
  <section class="section section-white" id="harga">
    <div class="section-header-center">
      <span class="section-label">Paket Harga</span>
      <h2 class="section-title">Transparan, tanpa biaya tersembunyi</h2>
    </div>
    <div class="pricing-grid">
      <div class="price-card">
        <span class="price-type">Tipe A</span>
        <div class="price-name">Kamar Standar</div>
        <div class="price-amount">Rp 600K</div>
        <div class="price-period">per bulan · ukuran 3×4 m</div>
        <div class="price-divider"></div>
        <ul class="price-features">
          <li class="price-feature">Kasur &amp; lemari bawaan</li>
          <li class="price-feature">Kipas angin</li>
          <li class="price-feature">WiFi unlimited</li>
          <li class="price-feature">Kamar mandi bersama</li>
          <li class="price-feature">Parkir motor gratis</li>
        </ul>
        <a href="#kontak" class="price-btn">Tanya Ketersediaan</a>
      </div>

      <div class="price-card featured">
        <span class="featured-badge">Paling Diminati</span>
        <span class="price-type">Tipe B</span>
        <div class="price-name">Kamar Premium</div>
        <div class="price-amount">Rp 850K</div>
        <div class="price-period">per bulan · ukuran 4×4 m</div>
        <div class="price-divider" style="background:rgba(232,168,32,0.22)"></div>
        <ul class="price-features">
          <li class="price-feature">AC 1/2 PK + listrik included</li>
          <li class="price-feature">Kamar mandi dalam + air panas</li>
          <li class="price-feature">Kasur, meja, &amp; lemari bawaan</li>
          <li class="price-feature">WiFi fiber 100 Mbps</li>
          <li class="price-feature">Parkir motor &amp; mobil</li>
          <li class="price-feature">Laundry kiloan diskon 20%</li>
        </ul>
        <a href="#kontak" class="price-btn">Tanya Ketersediaan</a>
      </div>

      <div class="price-card">
        <span class="price-type">Tipe C</span>
        <div class="price-name">Kamar Eksekutif</div>
        <div class="price-amount">Rp 1,1 Jt</div>
        <div class="price-period">per bulan · ukuran 4×5 m</div>
        <div class="price-divider"></div>
        <ul class="price-features">
          <li class="price-feature">Semua fasilitas Tipe B</li>
          <li class="price-feature">TV 32" + Netflix</li>
          <li class="price-feature">Mini kulkas</li>
          <li class="price-feature">Sofa &amp; meja kerja ergonomis</li>
          <li class="price-feature">Laundry gratis 5 kg/bulan</li>
          <li class="price-feature">Cleaning kamar 1×/minggu</li>
        </ul>
        <a href="#kontak" class="price-btn">Tanya Ketersediaan</a>
      </div>
    </div>
    <p class="price-note">Harga dapat berubah sewaktu-waktu · Diskon tersedia untuk kontrak 6 &amp; 12 bulan</p>
  </section>

  <!-- TESTIMONI -->
  <section class="section section-dark" id="testimoni">
    <div class="section-header-center">
      <span class="section-label">Kata Penghuni</span>
      <h2 class="section-title" style="color:var(--white)">Mereka sudah merasakan perbedaannya</h2>
    </div>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote">"Sudah 2 tahun tinggal di sini, nggak pernah ada masalah. Pemiliknya responsif, kos selalu bersih, dan WiFi-nya kenceng banget buat kerja remote."</p>
        <div class="testi-author">
          <div class="testi-avatar">D</div>
          <div><span class="testi-name">Dinda Ayu</span><span class="testi-info">Penghuni sejak 2023 · Karyawan swasta</span></div>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★★</div>
        <p class="testi-quote">"Tempatnya nyaman banget, kamar mandinya bersih dan ada air panas. Lokasinya juga strategis, deket kampus dan minimarket. Highly recommended!"</p>
        <div class="testi-author">
          <div class="testi-avatar">R</div>
          <div><span class="testi-name">Rizal Fadhli</span><span class="testi-info">Penghuni sejak 2022 · Mahasiswa Undip</span></div>
        </div>
      </div>
      <div class="testi-card">
        <div class="testi-stars">★★★★☆</div>
        <p class="testi-quote">"Harganya worth it banget untuk fasilitasnya. AC dingin, kamar luas, dan yang paling penting — suasananya tenang, cocok buat belajar."</p>
        <div class="testi-author">
          <div class="testi-avatar">S</div>
          <div><span class="testi-name">Sinta Rahayu</span><span class="testi-info">Penghuni sejak 2024 · Mahasiswi</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- LOKASI -->
  <section class="section section-bg" id="lokasi">
    <div class="lokasi-layout">
      <div>
        <div class="section-header">
          <span class="section-label">Lokasi &amp; Akses</span>
          <h2 class="section-title">Strategis di jantung Banyumanik</h2>
        </div>
        <p class="lokasi-address">Jl. Tusam Raya No. 20J, Banyumanik<br>Semarang, Jawa Tengah 50268</p>
        <div class="lokasi-list">
          <div class="lokasi-item"><div class="lokasi-ico">🎓</div><div class="lokasi-item-text"><strong>Universitas Diponegoro (UNDIP)</strong><span>± 2,8 km · 6 menit naik motor</span></div></div>
          <div class="lokasi-item"><div class="lokasi-ico">🏥</div><div class="lokasi-item-text"><strong>RS Banyumanik</strong><span>± 2,0 km · 5 menit naik motor</span></div></div>
          <div class="lokasi-item"><div class="lokasi-ico">🛒</div><div class="lokasi-item-text"><strong>Superindo Mulawarman</strong><span>± 900 m · 3 menit berkendara</span></div></div>
          <div class="lokasi-item"><div class="lokasi-ico">🚌</div><div class="lokasi-item-text"><strong>Halte Banyumanik</strong><span>± 2,4 km · 6 menit naik motor</span></div></div>
          <div class="lokasi-item"><div class="lokasi-ico">🍜</div><div class="lokasi-item-text"><strong>Warung &amp; Restoran</strong><span>Banyak pilihan dalam radius 500 m</span></div></div>
        </div>
      </div>
      <div class="map-wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3959.505573238406!2d110.4252516!3d-7.0672274!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70891320ad5e7f%3A0xe934470d663bb36d!2sKos%20Bu%20Shinta!5e0!3m2!1sid!2sid!4v1776737852778!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Lokasi Kos Shinta"></iframe>
      </div>
    </div>
  </section>

  <!-- KONTAK -->
  <section class="section section-white" id="kontak">
    <div class="section-header-center">
      <span class="section-label">Hubungi Kami</span>
      <h2 class="section-title">Ada pertanyaan? Kami siap membantu</h2>
    </div>
    <div class="kontak-layout">
      <div>
        <p class="kontak-intro">Hubungi kami melalui salah satu saluran di bawah, atau isi form untuk pertanyaan lebih detail. Kami merespons dalam <strong>kurang dari 2 jam</strong>.</p>
        <div class="kontak-channels">
          <a href="https://wa.me/6282393534793" target="_blank" class="kontak-channel">
            <div class="ch-icon">📱</div>
            <div class="ch-text"><strong>WhatsApp (Paling Cepat)</strong><span>+62 823-9353-4793 · Aktif 07.00–22.00</span></div>
            <span class="ch-arrow">→</span>
          </a>
          <a href="mailto:kosshinta@gmail.com" class="kontak-channel">
            <div class="ch-icon">✉️</div>
            <div class="ch-text"><strong>Email</strong><span>kosshinta@gmail.com</span></div>
            <span class="ch-arrow">→</span>
          </a>
          <a href="https://instagram.com" target="_blank" class="kontak-channel">
            <div class="ch-icon">📸</div>
            <div class="ch-text"><strong>Instagram</strong><span>@kosshinta · DM terbuka</span></div>
            <span class="ch-arrow">→</span>
          </a>
        </div>
      </div>
      <div class="kontak-form">
        <h3>Kirim Pesan Langsung</h3>
        <div class="form-row">
          <div class="form-group"><label>Nama</label><input type="text" id="f-nama" placeholder="Nama lengkap" /></div>
          <div class="form-group"><label>No. WhatsApp</label><input type="text" id="f-wa" placeholder="08xx-xxxx-xxxx" /></div>
        </div>
        <div class="form-group">
          <label>Tipe Kamar yang Diminati</label>
          <select id="f-tipe">
            <option value="">Pilih tipe kamar...</option>
            <option>Tipe A — Standar (Rp 600K/bulan)</option>
            <option>Tipe B — Premium (Rp 850K/bulan)</option>
            <option>Tipe C — Eksekutif (Rp 1,1 Jt/bulan)</option>
            <option>Belum tahu, minta rekomendasi</option>
          </select>
        </div>
        <div class="form-group"><label>Rencana Masuk</label><input type="text" id="f-tanggal" placeholder="Contoh: Bulan depan / 1 Januari 2026" /></div>
        <div class="form-group"><label>Pesan / Pertanyaan</label><textarea id="f-pesan" placeholder="Tulis pertanyaan atau keterangan tambahanmu di sini..."></textarea></div>
        <button class="btn-submit" onclick="kirimPesan()">Kirim Pesan</button>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-inner">
      <div class="footer-brand">
        <div class="footer-logo"><img src="images/Logo Kos.png" alt="Logo" onerror="this.style.display='none'" /></div>
        Pojok <span>Hunian</span>
      </div>
      <ul class="footer-links">
        <li><a href="#galeri">Galeri</a></li>
        <li><a href="#fasilitas">Fasilitas</a></li>
        <li><a href="#harga">Harga</a></li>
        <li><a href="#lokasi">Lokasi</a></li>
        <li><a href="#kontak">Kontak</a></li>
      </ul>
      <p class="footer-copy">© 2025 Pojok Hunian, Semarang</p>
    </div>
  </footer>

  <div class="toast" id="toast">Pesan terkirim! Kami akan segera menghubungi kamu ✓</div>

  <script>
    function kirimPesan() {
  var nama = document.getElementById('f-nama').value.trim();
  var wa   = document.getElementById('f-wa').value.trim();
  var tipe = document.getElementById('f-tipe').value;
  var tanggal = document.getElementById('f-tanggal').value;
  var pesan = document.getElementById('f-pesan').value;

  if (!nama || !wa) {
    alert('Mohon isi nama dan nomor WhatsApp ya 😊');
    return;
  }

  // Format isi pesan
  var text = `Halo, saya ${nama}.
  No WA: ${wa}
  Tipe kamar: ${tipe || '-'}
  Rencana masuk: ${tanggal || '-'}

  Pesan:
  ${pesan || '-'}`;

  // Nomor tujuan (punya kamu)
    var nomorAdmin = '6282393534793';

  // Redirect ke WhatsApp
    var url = `https://wa.me/${nomorAdmin}?text=${encodeURIComponent(text)}`;

    window.open(url, '_blank');

    document.getElementById('f-nama').value = '';
    document.getElementById('f-wa').value = '';
    document.getElementById('f-tipe').value = '';
    document.getElementById('f-tanggal').value = '';
    document.getElementById('f-pesan').value = '';

    document.getElementById('toast').classList.add('show');
    setTimeout(() => {
    document.getElementById('toast').classList.remove('show');
  }, 3000);
}
  </script>
</body>
</html>