<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>YACoin — Your Alternative Currency</title>
<meta name="description" content="YACoin (YAC) — a proof-of-work cryptocurrency since May 2013. Scrypt-ChaCha mining, supply-based rewards capped at 2% yearly inflation, timelocks, atomic swaps and tokens. Download the latest wallet.">
<meta name="keywords" content="yacoin, YAC, proof of work, scrypt-chacha, scrypt-jane, cpu mining, altcoin, cryptocurrency">
<meta name="theme-color" content="#0b1220">
<meta property="og:title" content="YACoin — Your Alternative Currency">
<meta property="og:image" content="dist/img/yacoin-coin.png">
<meta property="og:description" content="Proof-of-work since 2013. Scrypt-ChaCha mining, capped inflation, timelocks, atomic swaps and tokens.">
<link rel="icon" type="image/png" href="dist/img/favicon.png">
<link rel="apple-touch-icon" href="dist/img/apple-touch-icon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
:root{
  --bg:#070b14;
  --bg-2:#0b1220;
  --surface:#0f1829;
  --surface-2:#13203a;
  --border:#1d2b45;
  --border-strong:#2a3d60;
  --text:#e7eefb;
  --text-2:#a3b2cc;
  --text-3:#6f81a1;
  --brand:#2bb8f0;
  --brand-2:#1a73c9;
  --brand-glow:rgba(43,184,240,.18);
  --ok:#3ddc97;
  --radius:16px;
  --radius-sm:10px;
  --maxw:1160px;
  --shadow:0 10px 40px -12px rgba(0,0,0,.55);
  --font:"Inter",system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
  --mono:"JetBrains Mono",ui-monospace,SFMono-Regular,Menlo,monospace;
}
@media (prefers-color-scheme: light){
  :root:not([data-theme="dark"]){
    --bg:#f6f9fd;--bg-2:#eef3fa;--surface:#ffffff;--surface-2:#f2f6fc;
    --border:#dde5f1;--border-strong:#c6d3e6;--text:#0d1626;--text-2:#45556f;--text-3:#7083a0;
    --brand:#0f8fd0;--brand-2:#145ea8;--brand-glow:rgba(15,143,208,.12);--ok:#13a36a;
    --shadow:0 10px 30px -14px rgba(20,40,80,.25);
  }
}
:root[data-theme="light"]{
  --bg:#f6f9fd;--bg-2:#eef3fa;--surface:#ffffff;--surface-2:#f2f6fc;
  --border:#dde5f1;--border-strong:#c6d3e6;--text:#0d1626;--text-2:#45556f;--text-3:#7083a0;
  --brand:#0f8fd0;--brand-2:#145ea8;--brand-glow:rgba(15,143,208,.12);--ok:#13a36a;
  --shadow:0 10px 30px -14px rgba(20,40,80,.25);
}

*{box-sizing:border-box}
html{scroll-behavior:smooth;-webkit-text-size-adjust:100%}
body{margin:0;background:var(--bg);color:var(--text);font-family:var(--font);font-size:16px;line-height:1.6;-webkit-font-smoothing:antialiased;overflow-x:hidden}
a{color:var(--brand);text-decoration:none}
a:hover{text-decoration:underline}
img,svg{display:block;max-width:100%}
code,.mono{font-family:var(--mono);font-size:.9em}
.wrap{max-width:var(--maxw);margin:0 auto;padding:0 24px}
@media (max-width:600px){.wrap{padding:0 16px}}

/* ---------- Nav ---------- */
.nav{position:sticky;top:0;z-index:50;background:color-mix(in srgb,var(--bg) 78%,transparent);backdrop-filter:saturate(160%) blur(14px);-webkit-backdrop-filter:saturate(160%) blur(14px);border-bottom:1px solid var(--border)}
.nav .wrap{display:flex;align-items:center;gap:24px;height:64px}
.brand{display:flex;align-items:center;gap:10px;color:var(--text);font-weight:800;letter-spacing:-.02em;font-size:1.15rem}
.brand:hover{text-decoration:none}
.brand img{width:32px;height:32px}
.nav-links{display:flex;gap:4px;margin-left:auto}
.nav-links a{color:var(--text-2);font-size:.92rem;font-weight:500;padding:8px 12px;border-radius:8px}
.nav-links a:hover{color:var(--text);background:var(--surface);text-decoration:none}
.nav-cta{margin-left:8px}
@media (max-width:860px){.nav-links{display:none}.nav-cta{margin-left:auto}}

/* ---------- Buttons ---------- */
.btn{display:inline-flex;align-items:center;gap:10px;font-weight:600;font-size:.95rem;padding:12px 20px;border-radius:12px;border:1px solid transparent;cursor:pointer;transition:transform .15s ease,box-shadow .15s ease,background .15s ease;white-space:nowrap}
.btn:hover{text-decoration:none;transform:translateY(-1px)}
.btn svg{width:18px;height:18px;flex:none}
.btn-primary{background:linear-gradient(180deg,var(--brand),var(--brand-2));color:#fff;box-shadow:0 8px 24px -8px var(--brand)}
.btn-primary:hover{box-shadow:0 12px 30px -8px var(--brand)}
.btn-ghost{background:var(--surface);color:var(--text);border-color:var(--border-strong)}
.btn-ghost:hover{border-color:var(--brand)}
.btn-sm{padding:8px 14px;font-size:.88rem;border-radius:10px}

/* ---------- Hero ---------- */
.hero{position:relative;padding:96px 0 72px;overflow:hidden}
.hero::before{content:"";position:absolute;inset:-30% -10% auto -10%;height:720px;background:radial-gradient(ellipse 50% 50% at 50% 40%,var(--brand-glow),transparent 70%);pointer-events:none}
.hero::after{content:"";position:absolute;inset:0;background-image:linear-gradient(var(--border) 1px,transparent 1px),linear-gradient(90deg,var(--border) 1px,transparent 1px);background-size:56px 56px;mask-image:radial-gradient(ellipse 70% 60% at 50% 30%,#000 20%,transparent 75%);-webkit-mask-image:radial-gradient(ellipse 70% 60% at 50% 30%,#000 20%,transparent 75%);opacity:.45;pointer-events:none}
.hero .wrap{position:relative;z-index:1;display:grid;grid-template-columns:1.15fr .85fr;gap:56px;align-items:center}
@media (max-width:920px){.hero{padding:64px 0 48px}.hero .wrap{grid-template-columns:1fr;gap:40px}}
.pill{display:inline-flex;align-items:center;gap:8px;padding:6px 12px 6px 8px;border-radius:999px;background:var(--surface);border:1px solid var(--border-strong);font-size:.85rem;color:var(--text-2);font-weight:500}
.pill:hover{text-decoration:none;border-color:var(--brand);color:var(--text)}
.pill .tag{background:var(--brand);color:#fff;font-weight:700;font-size:.72rem;padding:2px 8px;border-radius:999px;letter-spacing:.02em}
h1{font-size:clamp(2.4rem,5.5vw,4rem);line-height:1.05;letter-spacing:-.035em;margin:20px 0 18px;font-weight:800}
h1 .grad{background:linear-gradient(90deg,var(--brand),#7dd9ff 60%,var(--brand));-webkit-background-clip:text;background-clip:text;color:transparent}
.lead{font-size:1.15rem;color:var(--text-2);max-width:560px;margin:0 0 32px}
.hero-actions{display:flex;flex-wrap:wrap;gap:12px}
.hero-meta{margin-top:20px;font-size:.85rem;color:var(--text-3)}
.hero-meta a{color:var(--text-2)}

.coin-stage{position:relative;display:grid;place-items:center;aspect-ratio:1;max-width:400px;margin:0 auto;width:100%}
.coin-stage .ring{position:absolute;inset:0;border-radius:50%;border:1px dashed var(--border-strong);animation:spin 60s linear infinite}
.coin-stage .ring.r2{inset:12%;border-style:solid;border-color:var(--border);animation-duration:90s;animation-direction:reverse}
.coin-stage .coin{width:62%;height:auto;filter:drop-shadow(0 30px 60px rgba(26,115,201,.45));animation:float 6s ease-in-out infinite}
.coin-stage .chip{position:absolute;background:var(--surface);border:1px solid var(--border-strong);border-radius:12px;padding:8px 12px;font-size:.8rem;box-shadow:var(--shadow);white-space:nowrap}
.coin-stage .chip b{display:block;font-size:.95rem;color:var(--text)}
.coin-stage .chip span{color:var(--text-3)}
.chip.c1{top:8%;left:-2%}.chip.c2{top:44%;right:-6%}.chip.c3{bottom:6%;left:6%}
@media (max-width:480px){.chip.c2{right:0}.chip.c1{left:0}}
@keyframes spin{to{transform:rotate(360deg)}}
@keyframes float{50%{transform:translateY(-10px)}}
@media (prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}html{scroll-behavior:auto}}

/* ---------- Stats strip ---------- */
.stats{border-top:1px solid var(--border);border-bottom:1px solid var(--border);background:var(--bg-2)}
.stats .wrap{display:grid;grid-template-columns:repeat(4,1fr)}
.stat{padding:28px 20px;border-left:1px solid var(--border)}
.stat:first-child{border-left:0}
.stat .v{font-size:1.6rem;font-weight:800;letter-spacing:-.02em}
.stat .k{color:var(--text-3);font-size:.85rem}
@media (max-width:760px){.stats .wrap{grid-template-columns:1fr 1fr}.stat:nth-child(3){border-left:0}.stat:nth-child(n+3){border-top:1px solid var(--border)}}

/* ---------- Sections ---------- */
section{padding:96px 0}
@media (max-width:600px){section{padding:64px 0}}
.eyebrow{color:var(--brand);font-weight:700;font-size:.8rem;letter-spacing:.12em;text-transform:uppercase;margin:0 0 12px}
h2{font-size:clamp(1.8rem,3.6vw,2.6rem);line-height:1.15;letter-spacing:-.03em;margin:0 0 16px;font-weight:800}
.section-lead{color:var(--text-2);font-size:1.08rem;max-width:640px;margin:0 0 48px}
h3{font-size:1.1rem;margin:0 0 8px;letter-spacing:-.01em}

.grid-3{display:grid;grid-template-columns:repeat(3,1fr);gap:20px}
@media (max-width:920px){.grid-3{grid-template-columns:1fr 1fr}}
@media (max-width:600px){.grid-3{grid-template-columns:1fr}}

.card{background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);padding:28px;transition:border-color .2s ease,transform .2s ease}
.card:hover{border-color:var(--border-strong)}
.card p{color:var(--text-2);margin:0;font-size:.97rem}
.icon{width:44px;height:44px;border-radius:12px;display:grid;place-items:center;background:var(--brand-glow);color:var(--brand);margin-bottom:18px}
.icon svg{width:22px;height:22px}

/* ---------- Release ---------- */
.release{background:var(--bg-2);border-top:1px solid var(--border);border-bottom:1px solid var(--border)}
.release-head{display:flex;flex-wrap:wrap;align-items:flex-end;justify-content:space-between;gap:24px;margin-bottom:40px}
.release-head h2{margin:0}
.release-badges{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px}
.badge{display:inline-flex;align-items:center;gap:6px;font-size:.82rem;padding:4px 10px;border-radius:999px;background:var(--surface);border:1px solid var(--border);color:var(--text-2)}
.badge .dot{width:7px;height:7px;border-radius:50%;background:var(--ok);box-shadow:0 0 0 3px color-mix(in srgb,var(--ok) 25%,transparent)}

.release-grid{display:grid;grid-template-columns:1.25fr .75fr;gap:20px;align-items:start}
@media (max-width:920px){.release-grid{grid-template-columns:1fr}}
.release-grid>*{min-width:0}
@media (max-width:600px){.os-tab .yours,.dl .size{display:none}.os-tab{padding:10px 8px}.dl{padding:14px}}

.os-tabs{display:flex;gap:6px;padding:6px;background:var(--surface);border:1px solid var(--border);border-radius:14px;margin-bottom:16px;overflow-x:auto}
.os-tab{flex:1;display:flex;align-items:center;justify-content:center;gap:8px;padding:10px 14px;border-radius:10px;border:0;background:transparent;color:var(--text-2);font:600 .92rem var(--font);cursor:pointer;white-space:nowrap}
.os-tab svg{width:18px;height:18px}
.os-tab[aria-selected="true"]{background:var(--surface-2);color:var(--text);box-shadow:inset 0 0 0 1px var(--border-strong)}
.os-tab .yours{font-size:.68rem;font-weight:700;color:var(--brand);text-transform:uppercase;letter-spacing:.06em}

.dl-list{display:flex;flex-direction:column;gap:10px}
.dl{display:flex;align-items:center;gap:16px;padding:16px 18px;background:var(--surface);border:1px solid var(--border);border-radius:14px;color:var(--text)}
.dl:hover{text-decoration:none;border-color:var(--brand);background:var(--surface-2)}
.dl .what{flex:1;min-width:0}
.dl .what b{display:block;font-size:1rem}
.dl .what span{color:var(--text-3);font-size:.85rem;display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.dl .size{color:var(--text-3);font-size:.85rem;font-family:var(--mono);white-space:nowrap}
.dl .arrow{width:36px;height:36px;border-radius:10px;display:grid;place-items:center;background:var(--brand-glow);color:var(--brand);flex:none}
.dl .arrow svg{width:18px;height:18px}
.dl.featured{border-color:color-mix(in srgb,var(--brand) 55%,var(--border));background:linear-gradient(180deg,color-mix(in srgb,var(--brand) 8%,var(--surface)),var(--surface))}
.dl-sub{display:flex;flex-wrap:wrap;gap:8px 20px;margin-top:16px;font-size:.88rem;color:var(--text-3)}
.dl-sub a{color:var(--text-2)}
select.distro{font:500 .88rem var(--font);color:var(--text);background:var(--surface-2);border:1px solid var(--border-strong);border-radius:8px;padding:6px 10px}

.notes h3{display:flex;align-items:center;justify-content:space-between;gap:12px}
.notes ul{list-style:none;padding:0;margin:16px 0 0;display:flex;flex-direction:column;gap:2px}
.notes li{display:flex;gap:12px;padding:10px 0;border-top:1px solid var(--border);font-size:.94rem;color:var(--text-2)}
.notes li:first-child{border-top:0}
.notes li .pr{font-family:var(--mono);font-size:.8rem;color:var(--text-3);margin-left:auto;white-space:nowrap}
.notes li::before{content:"";flex:none;width:6px;height:6px;border-radius:50%;background:var(--brand);margin-top:.6em}
.notes .foot{margin-top:18px;font-size:.88rem}

/* ---------- Specs ---------- */
.specs{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:start}
@media (max-width:920px){.specs{grid-template-columns:1fr;gap:32px}}
.spec-table{width:100%;border-collapse:collapse;background:var(--surface);border:1px solid var(--border);border-radius:var(--radius);overflow:hidden}
.spec-table th,.spec-table td{text-align:left;padding:14px 20px;border-top:1px solid var(--border);font-size:.95rem;vertical-align:top}
.spec-table tr:first-child th,.spec-table tr:first-child td{border-top:0}
.spec-table th{color:var(--text-3);font-weight:500;width:42%}
.spec-table td{color:var(--text);font-weight:500}
.prose p{color:var(--text-2);margin:0 0 16px}
.prose strong{color:var(--text)}
.callout{margin-top:24px;padding:18px 20px;border-radius:var(--radius-sm);background:var(--brand-glow);border:1px solid color-mix(in srgb,var(--brand) 30%,transparent);font-size:.94rem;color:var(--text-2)}
.callout b{color:var(--text)}

/* ---------- Timeline ---------- */
.timeline{position:relative;margin:0;padding:0;list-style:none;max-width:820px}
.timeline::before{content:"";position:absolute;left:111px;top:6px;bottom:6px;width:2px;background:linear-gradient(var(--brand),var(--border) 30%,var(--border))}
.timeline li{position:relative;display:grid;grid-template-columns:96px 1fr;gap:32px;padding:0 0 32px}
.timeline li::before{content:"";position:absolute;left:106px;top:6px;width:12px;height:12px;border-radius:50%;background:var(--bg);border:2px solid var(--border-strong)}
.timeline li.hl::before{border-color:var(--brand);background:var(--brand);box-shadow:0 0 0 5px var(--brand-glow)}
.timeline time{color:var(--text-3);font-size:.85rem;font-weight:600;text-align:right;padding-top:1px;font-variant-numeric:tabular-nums}
.timeline h3{font-size:1.02rem;margin:0 0 4px}
.timeline p{margin:0;color:var(--text-2);font-size:.94rem}
@media (max-width:600px){
  .timeline::before{left:5px}
  .timeline li{grid-template-columns:1fr;gap:2px;padding-left:28px}
  .timeline li::before{left:0}
  .timeline time{text-align:left}
}

/* ---------- Get involved ---------- */
.cta-band{position:relative;overflow:hidden;border-radius:24px;padding:56px;background:radial-gradient(ellipse 60% 120% at 100% 0%,color-mix(in srgb,var(--brand) 30%,transparent),transparent 60%),linear-gradient(135deg,var(--surface-2),var(--surface));border:1px solid var(--border-strong);display:grid;grid-template-columns:1.2fr .8fr;gap:40px;align-items:center}
@media (max-width:860px){.cta-band{grid-template-columns:1fr;padding:32px 24px}}
.link-list{display:flex;flex-direction:column;gap:10px}
.link-row{display:flex;align-items:center;gap:14px;padding:14px 16px;border-radius:12px;background:color-mix(in srgb,var(--bg) 45%,transparent);border:1px solid var(--border);color:var(--text);font-weight:600}
.link-row:hover{text-decoration:none;border-color:var(--brand)}
.link-row svg{width:20px;height:20px;color:var(--brand);flex:none}
.link-row small{display:block;color:var(--text-3);font-weight:400;font-size:.82rem}
.link-row .go{margin-left:auto;color:var(--text-3)}

/* ---------- Footer ---------- */
footer{border-top:1px solid var(--border);padding:40px 0;color:var(--text-3);font-size:.88rem}
footer .wrap{display:flex;flex-wrap:wrap;gap:16px;justify-content:space-between;align-items:center}
footer nav{display:flex;flex-wrap:wrap;gap:20px}
footer a{color:var(--text-2)}
.theme-btn{background:var(--surface);border:1px solid var(--border);color:var(--text-2);border-radius:8px;padding:6px 10px;cursor:pointer;font:500 .85rem var(--font)}
</style>
</head>
<body>

<!-- Shared SVG symbols -->
<svg width="0" height="0" style="position:absolute" aria-hidden="true">
  <symbol id="i-download" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v12m0 0-5-5m5 5 5-5M4 21h16"/></symbol>
  <symbol id="i-github" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5a11.5 11.5 0 0 0-3.64 22.42c.58.1.79-.25.79-.56v-2c-3.2.7-3.88-1.37-3.88-1.37-.53-1.34-1.29-1.7-1.29-1.7-1.05-.72.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.77 2.71 1.26 3.37.96.1-.75.4-1.26.73-1.55-2.55-.29-5.24-1.28-5.24-5.69 0-1.26.45-2.28 1.18-3.09-.12-.29-.51-1.46.11-3.05 0 0 .97-.31 3.17 1.18a11 11 0 0 1 5.77 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.11 3.05.74.81 1.18 1.83 1.18 3.09 0 4.42-2.69 5.39-5.26 5.68.41.36.78 1.06.78 2.14v3.17c0 .31.21.67.8.56A11.5 11.5 0 0 0 12 .5Z"/></symbol>
  <symbol id="i-windows" viewBox="0 0 24 24" fill="currentColor"><path d="M3 5.1 10.4 4v7.1H3zm0 13.8 7.4 1.1v-7H3zm8.3 1.2L21 21.5V13h-9.7zm0-16.2V11H21V2.5z"/></symbol>
  <symbol id="i-apple" viewBox="0 0 24 24" fill="currentColor"><path d="M16.4 12.6c0-2.5 2-3.7 2.1-3.8a4.6 4.6 0 0 0-3.6-2c-1.5-.1-3 .9-3.7.9-.8 0-2-.9-3.2-.9a4.8 4.8 0 0 0-4 2.5c-1.7 3-.4 7.4 1.2 9.8.8 1.2 1.8 2.5 3 2.4 1.2 0 1.7-.8 3.1-.8 1.5 0 1.9.8 3.2.8s2.1-1.2 2.9-2.4c.9-1.4 1.3-2.7 1.3-2.8 0 0-2.4-1-2.3-3.7ZM14 5.3c.7-.8 1.1-1.9 1-3-1 0-2.1.7-2.8 1.5-.6.7-1.2 1.8-1 2.9 1 .1 2.1-.6 2.8-1.4Z"/></symbol>
  <symbol id="i-linux" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2c-2.2 0-3.5 1.8-3.5 4.4 0 1.5.3 2.4-.6 3.7-1.2 1.6-2.9 3.8-2.9 6.4 0 .7.1 1.3.4 1.8-.8.4-1.9.6-1.9 1.4 0 1.1 2.4 1 3.4 1.7.9.7 2.1.9 2.9.1.5-.5 1.2-.6 2.2-.6s1.7.1 2.2.6c.8.8 2 .6 2.9-.1 1-.7 3.4-.6 3.4-1.7 0-.8-1.1-1-1.9-1.4.3-.5.4-1.1.4-1.8 0-2.6-1.7-4.8-2.9-6.4-.9-1.3-.6-2.2-.6-3.7C15.5 3.8 14.2 2 12 2Zm-1.4 4.1c.4 0 .7.5.7 1.1s-.3 1-.7 1-.7-.4-.7-1 .3-1.1.7-1.1Zm2.8 0c.4 0 .7.5.7 1.1s-.3 1-.7 1-.7-.4-.7-1 .3-1.1.7-1.1ZM12 9c.9 0 2 .6 2 1s-1.1 1.2-2 1.2-2-.8-2-1.2 1.1-1 2-1Z"/></symbol>
  <symbol id="i-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 17 17 7M8 7h9v9"/></symbol>
</svg>

<header class="nav">
  <div class="wrap">
    <a class="brand" href="#top" aria-label="YACoin home"><img src="dist/img/yacoin-coin.png" width="32" height="32" alt="">YACoin</a>
    <nav class="nav-links" aria-label="Main">
      <a href="#about">About</a>
      <a href="#download">Wallet</a>
      <a href="#specs">Technology</a>
      <a href="#history">History</a>
      <a href="#community">Community</a>
    </nav>
    <a class="btn btn-primary btn-sm nav-cta" href="#download"><svg><use href="#i-download"/></svg>Download</a>
  </div>
</header>

<main id="top">

<!-- ================= HERO ================= -->
<div class="hero">
  <div class="wrap">
    <div>
      <a class="pill" href="#download"><span class="tag">NEW</span><span>Wallet <span class="js-ver">v1.11.0</span> is out — tokens, timelocks &amp; more</span></a>
      <h1>Your <span class="grad">Alternative</span><br>Currency.</h1>
      <p class="lead">YACoin is a community-run, open-source proof-of-work cryptocurrency, mined since May 2013. It uses the Scrypt-ChaCha algorithm, and its block rewards are calculated from the total coin supply.</p>
      <div class="hero-actions">
        <a class="btn btn-primary" href="#download" id="heroDl"><svg><use href="#i-download"/></svg><span>Download wallet</span></a>
        <a class="btn btn-ghost" href="https://github.com/yacoin/yacoin" target="_blank" rel="noopener"><svg><use href="#i-github"/></svg>View source</a>
      </div>
      <p class="hero-meta">Latest release <a class="js-ver-link" href="https://github.com/yacoin/yacoin/releases/tag/v1.11.0" target="_blank" rel="noopener"><span class="js-ver">v1.11.0</span></a> · <span class="js-date">October 4, 2026</span> · Windows, macOS &amp; Ubuntu</p>
    </div>
    <div class="coin-stage" aria-hidden="true">
      <div class="ring"></div><div class="ring r2"></div>
      <img class="coin" src="dist/img/yacoin-coin.png" width="259" height="259" alt="YACoin logo">
      <div class="chip c1"><b>Since 2013</b><span>Launched May 8, 2013</span></div>
      <div class="chip c2"><b>≤ 2% / year</b><span>Max supply inflation</span></div>
      <div class="chip c3"><b>Scrypt-ChaCha</b><span>Memory-hard PoW</span></div>
    </div>
  </div>
</div>

<!-- ================= STATS ================= -->
<div class="stats">
  <div class="wrap">
    <div class="stat"><div class="v">2013</div><div class="k">Launched May 8, 2013</div></div>
    <div class="stat"><div class="v">1 min</div><div class="k">Target block time</div></div>
    <div class="stat"><div class="v">21,000</div><div class="k">Blocks per epoch</div></div>
    <div class="stat"><div class="v">Ɏ YAC</div><div class="k">Symbol &amp; ticker</div></div>
  </div>
</div>

<!-- ================= ABOUT ================= -->
<section id="about">
  <div class="wrap">
    <p class="eyebrow">Why YACoin</p>
    <h2>A 2013 coin with a new design.</h2>
    <p class="section-lead">YACoin was one of the first coins to use proof-of-stake and the first to use scrypt-jane. In 2021 the Heliopolis hard fork redesigned it as a pure proof-of-work coin with supply-based economics.</p>

    <div class="grid-3">
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9zM9 1v3M15 1v3M9 20v3M15 20v3M20 9h3M20 14h3M1 9h3M1 14h3"/></svg></div>
        <h3>Pure proof-of-work</h3>
        <p>Since block 1,890,000, YACoin uses proof-of-work only. Proof-of-stake was removed, so new coins come only from mining.</p>
      </div>
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3v18h18"/><path d="m7 15 4-4 3 3 5-6"/></svg></div>
        <h3>Supply-based rewards</h3>
        <p>Block rewards are calculated from the total money supply, and inflation is capped at 2% a year. YACoin was the first PoW coin to do this. Fees are destroyed, so heavy use can make the supply shrink.</p>
      </div>
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2 3 7v10l9 5 9-5V7z"/><path d="m3 7 9 5 9-5M12 12v10"/></svg></div>
        <h3>Scrypt-ChaCha mining</h3>
        <p>YACoin still uses its own memory-hard scrypt-chacha algorithm, also called scrypt-jane. NFactor is fixed at 21, which resists ASICs while staying mineable on many CPUs and GPUs.</p>
      </div>
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></div>
        <h3>Fair epochs</h3>
        <p>Each epoch is a fixed 21,000 blocks. This fixes the "compounding bad luck" problem in mining and makes it easier for small miners and pools to take part.</p>
      </div>
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M7 10V7a5 5 0 0 1 10 0v3"/><rect x="4" y="10" width="16" height="11" rx="2"/><path d="M12 15v2"/></svg></div>
        <h3>Timelocks &amp; atomic swaps</h3>
        <p>CHECKLOCKTIMEVERIFY and relative timelocks (BIP65/BIP68) allow atomic swaps and on-chain loans. The new <code>timelockcoins</code> RPC makes timelocks easier to use.</p>
      </div>
      <div class="card">
        <div class="icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.6 13.4 13.4 20.6a2 2 0 0 1-2.8 0L3 13V3h10l7.6 7.6a2 2 0 0 1 0 2.8Z"/><circle cx="7.5" cy="7.5" r="1.5"/></svg></div>
        <h3>Native tokens</h3>
        <p>New in v1.11.0: a token management system for creating and moving tokens on the YACoin chain, with support for IPFS CIDv1 metadata.</p>
      </div>
    </div>
  </div>
</section>

<!-- ================= RELEASE / DOWNLOAD ================= -->
<section id="download" class="release">
  <div class="wrap">
    <div class="release-head">
      <div>
        <p class="eyebrow">Get the wallet</p>
        <h2>YACoin Core <span class="js-ver">v1.11.0</span></h2>
        <div class="release-badges">
          <span class="badge"><span class="dot"></span>Latest release</span>
          <span class="badge">Published <span class="js-date">October 4, 2026</span></span>
          <span class="badge">Windows · macOS · Ubuntu</span>
        </div>
      </div>
      <a class="btn btn-ghost js-ver-link" href="https://github.com/yacoin/yacoin/releases/tag/v1.11.0" target="_blank" rel="noopener"><svg><use href="#i-github"/></svg>Release on GitHub</a>
    </div>

    <div class="release-grid">
      <div>
        <div class="os-tabs" role="tablist" aria-label="Operating system">
          <button class="os-tab" role="tab" data-os="windows" aria-selected="true"><svg><use href="#i-windows"/></svg>Windows</button>
          <button class="os-tab" role="tab" data-os="macos" aria-selected="false"><svg><use href="#i-apple"/></svg>macOS</button>
          <button class="os-tab" role="tab" data-os="ubuntu" aria-selected="false"><svg><use href="#i-linux"/></svg>Ubuntu</button>
        </div>
        <div class="dl-list" id="dlList" role="tabpanel"><!-- filled by script; static fallback below --></div>
        <noscript>
          <div class="dl-list">
            <a class="dl featured" href="https://github.com/yacoin/yacoin/releases/download/v1.11.0/yacoin-qt-1.11.0-windows.exe"><div class="what"><b>YACoin-Qt for Windows</b><span>yacoin-qt-1.11.0-windows.exe</span></div><span class="size">46.8 MB</span></a>
            <a class="dl" href="https://github.com/yacoin/yacoin/releases/download/v1.11.0/yacoin-qt-1.11.0-macos"><div class="what"><b>YACoin-Qt for macOS</b><span>yacoin-qt-1.11.0-macos</span></div><span class="size">34.9 MB</span></a>
            <a class="dl" href="https://github.com/yacoin/yacoin/releases/download/v1.11.0/yacoin-qt-1.11.0-ubuntu-22.04-qt4"><div class="what"><b>YACoin-Qt for Ubuntu 22.04</b><span>yacoin-qt-1.11.0-ubuntu-22.04-qt4</span></div><span class="size">43.5 MB</span></a>
            <a class="dl" href="https://github.com/yacoin/yacoin/releases/tag/v1.11.0"><div class="what"><b>All builds (daemon, CLI, other Ubuntu versions)</b><span>github.com/yacoin/yacoin/releases</span></div></a>
          </div>
        </noscript>
        <div class="dl-sub">
          <span id="distroWrap" hidden>Ubuntu version
            <select class="distro" id="distro" aria-label="Ubuntu version"></select>
          </span>
          <a class="js-sums" href="https://github.com/yacoin/yacoin/releases/download/v1.11.0/SHA256SUMS">Verify with SHA256SUMS</a>
          <a href="https://github.com/yacoin/yacoin/releases" target="_blank" rel="noopener">All releases</a>
          <a href="https://github.com/yacoin/yacoin" target="_blank" rel="noopener">Build from source</a>
        </div>
        <p class="dl-sub" style="margin-top:8px">On Linux and macOS, make the file executable after downloading: <code>chmod +x yacoin-qt-*</code></p>
      </div>

      <div class="card notes">
        <h3>What's changed <a class="btn btn-sm btn-ghost js-ver-link" href="https://github.com/yacoin/yacoin/releases/tag/v1.11.0" target="_blank" rel="noopener">Notes</a></h3>
        <ul id="notes">
          <li><span>Fix stuck chain</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/103" target="_blank" rel="noopener">#103</a></li>
          <li><span>Implement token management system</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/104" target="_blank" rel="noopener">#104</a></li>
          <li><span>Add RPC <code>timelockcoins</code> + support CIDv1</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/106" target="_blank" rel="noopener">#106</a></li>
          <li><span>Improve yacoind mempool logic</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/108" target="_blank" rel="noopener">#108</a></li>
          <li><span>Improve P2P logic</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/109" target="_blank" rel="noopener">#109</a></li>
          <li><span>Reproducible builds via the depends system</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/111" target="_blank" rel="noopener">#111</a></li>
          <li><span>Fix consensus issues and improve mining-related RPCs</span><a class="pr" href="https://github.com/yacoin/yacoin/pull/112" target="_blank" rel="noopener">#112</a></li>
        </ul>
        <p class="notes foot"><a class="js-compare" href="https://github.com/yacoin/yacoin/compare/v1.1.0...v1.11.0" target="_blank" rel="noopener">Full changelog <span class="js-compare-label">v1.1.0 → v1.11.0</span></a></p>
      </div>
    </div>
  </div>
</section>

<!-- ================= SPECS ================= -->
<section id="specs">
  <div class="wrap specs">
    <div class="prose">
      <p class="eyebrow">Technology</p>
      <h2>How YACoin works</h2>
      <p>Most scrypt coins use a fixed <code>Scrypt(1024,1,1)</code> with SHA-256 and Salsa20. It needs only 128&nbsp;KB of memory per hash, so GPUs and ASICs mine it easily.</p>
      <p>YACoin's original design changed three things: <strong>SHA-3/Keccak-512</strong> for hashing, <strong>ChaCha20/8</strong> as the mixing function, and an <strong>N parameter</strong> that grew over time and pushed memory use into the megabytes.</p>
      <p>Heliopolis fixed NFactor at <strong>21</strong>. Mining stays memory-hard and ASIC-resistant, and stays accessible to CPU and GPU miners. The fork also brought in supply-based rewards, a block size that grows slowly with the supply, and fixes for transaction malleability and timestamp bugs.</p>
      <div class="callout"><b>Upgrading from an old wallet?</b> Clients older than v1.0.0 cannot follow the chain after block 1,890,000. Back up <code>wallet.dat</code>, then install the latest release.</div>
    </div>
    <table class="spec-table">
      <tbody>
        <tr><th>Ticker / symbol</th><td>YAC / Ɏ</td></tr>
        <tr><th>Launch</th><td>May 8, 2013 (by pocopoco)</td></tr>
        <tr><th>Consensus</th><td>Proof-of-work (PoS removed at Heliopolis)</td></tr>
        <tr><th>Algorithm</th><td>Scrypt-ChaCha20/8 + Keccak-512 (scrypt-jane)</td></tr>
        <tr><th>NFactor</th><td>21 (fixed since Heliopolis)</td></tr>
        <tr><th>Block time</th><td>1 minute target</td></tr>
        <tr><th>Monetary policy</th><td>Reward based on total supply, ≤ 2% inflation per year</td></tr>
        <tr><th>Fees</th><td>Destroyed (burned)</td></tr>
        <tr><th>Epoch length</th><td>21,000 blocks</td></tr>
        <tr><th>Block size</th><td>Grows with supply, ≤ 2% per year</td></tr>
        <tr><th>Script features</th><td>CLTV / CSV timelocks, atomic swaps, tokens</td></tr>
        <tr><th>P2P port</th><td class="mono">7688</td></tr>
        <tr><th>License</th><td>MIT, open source</td></tr>
      </tbody>
    </table>
  </div>
</section>

<!-- ================= HISTORY ================= -->
<section id="history" class="release">
  <div class="wrap">
    <p class="eyebrow">History</p>
    <h2>More than a decade of blocks</h2>
    <p class="section-lead">Many coins from 2013 have disappeared. YACoin is still developed by a community of volunteers.</p>
    <ol class="timeline">
      <li class="hl"><time>Oct 2026</time><div><h3>YACoin Core v1.11.0</h3><p>Native tokens, the <code>timelockcoins</code> RPC, IPFS CIDv1 support, mempool, P2P and consensus fixes, and reproducible builds for Windows, macOS and Ubuntu.</p></div></li>
      <li><time>May 2022</time><div><h3>YACoin Core v1.1.0</h3><p>Bug fixes and faster syncing, plus support for atomic swaps.</p></div></li>
      <li class="hl"><time>2021</time><div><h3>Heliopolis hard fork</h3><p>Activated at block 1,890,000 with v1.0.0. YACoin became proof-of-work only, with supply-based rewards, capped inflation, burned fees, 21,000-block epochs and timelocks.</p></div></li>
      <li><time>May 2016</time><div><h3>Block 1,500,000</h3><p>A proof-of-work block that generated 99.04 YAC.</p></div></li>
      <li><time>Apr 2015</time><div><h3>Block 1,000,000</h3><p>One million blocks, with 79.12 YAC generated in the milestone block.</p></div></li>
      <li><time>Feb 2014</time><div><h3>Fork at block 420,000</h3><p>v0.4.2 became mandatory to stop PoS blocks from overriding PoW blocks that were already accepted.</p></div></li>
      <li><time>Dec 2013</time><div><h3>Much faster Qt startup</h3><p>Contributor sairon and an anonymous helper fixed the slow startup of YACoin-Qt.</p></div></li>
      <li><time>Aug 2013</time><div><h3>Coin control</h3><p>Users can now choose which addresses fund a transaction, which helps with privacy. New developer Joe_Bauers took over development.</p></div></li>
      <li><time>May 2013</time><div><h3>Community takes over</h3><p>The original developer, pocopoco, left the project. WindMaster continued development, and github.com/yacoin was created.</p></div></li>
      <li class="hl"><time>May 8, 2013</time><div><h3>YACoin launches</h3><p>pocopoco released YACoin. It introduced a scrypt N parameter that grows over time, with Keccak-512 and ChaCha20/8 inside scrypt.</p></div></li>
    </ol>
  </div>
</section>

<!-- ================= COMMUNITY ================= -->
<section id="community">
  <div class="wrap">
    <div class="cta-band">
      <div>
        <p class="eyebrow">Get involved</p>
        <h2>Built by volunteers. Open to everyone.</h2>
        <p class="section-lead" style="margin-bottom:28px">Anyone can help with YACoin. You can write code, test releases, translate, write guides, run a node or mine.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="https://github.com/yacoin/yacoin" target="_blank" rel="noopener"><svg><use href="#i-github"/></svg>Contribute on GitHub</a>
          <a class="btn btn-ghost" href="https://github.com/yacoin/yacoin/issues" target="_blank" rel="noopener">Report an issue</a>
        </div>
      </div>
      <div class="link-list">
        <a class="link-row" href="https://github.com/yacoin/yacoin" target="_blank" rel="noopener"><svg><use href="#i-github"/></svg><span>Source code<small>github.com/yacoin/yacoin</small></span><svg class="go"><use href="#i-arrow"/></svg></a>
        <a class="link-row" href="https://bitcointalk.org/index.php?topic=206577.0" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg><span>Discussion thread<small>bitcointalk.org</small></span><svg class="go"><use href="#i-arrow"/></svg></a>
        <a class="link-row" href="https://github.com/Thirtybird/cpuminer/releases" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/></svg><span>CPU miner<small>Community cpuminer by Thirtybird</small></span><svg class="go"><use href="#i-arrow"/></svg></a>
      </div>
    </div>
  </div>
</section>

</main>

<footer>
  <div class="wrap">
    <span>Copyleft © 2013–<span id="year">2026</span> YACoin developers · Open-source software</span>
    <nav aria-label="Footer">
      <a href="#download">Wallet</a>
      <a href="https://github.com/yacoin/yacoin/releases" target="_blank" rel="noopener">Releases</a>
      <a href="https://github.com/yacoin/yacoin" target="_blank" rel="noopener">GitHub</a>
      <button class="theme-btn" id="themeBtn" type="button">Toggle theme</button>
    </nav>
  </div>
</footer>

<script>
(function(){
  "use strict";
  var REPO = "yacoin/yacoin";

  // Static snapshot of the latest release. The page renders this immediately,
  // then replaces it with live data from the GitHub API if that request succeeds.
  var release = {
    tag: "v1.11.0",
    url: "https://github.com/yacoin/yacoin/releases/tag/v1.11.0",
    date: "2026-10-04T17:43:43Z",
    assets: [
      ["SHA256SUMS",1710],
      ["yacoin-cli-1.11.0-macos",1008340],["yacoin-cli-1.11.0-ubuntu-16.04",4224344],["yacoin-cli-1.11.0-ubuntu-18.04",4239648],
      ["yacoin-cli-1.11.0-ubuntu-20.04",4352616],["yacoin-cli-1.11.0-ubuntu-22.04",4323280],["yacoin-cli-1.11.0-windows.exe",6314802],
      ["yacoin-qt-1.11.0-macos",34884836],["yacoin-qt-1.11.0-ubuntu-16.04",43488720],["yacoin-qt-1.11.0-ubuntu-18.04-qt4",43070152],
      ["yacoin-qt-1.11.0-ubuntu-20.04-qt4",43251224],["yacoin-qt-1.11.0-ubuntu-22.04-qt4",43508752],["yacoin-qt-1.11.0-windows.exe",46831194],
      ["yacoind-1.11.0-macos",9720168],["yacoind-1.11.0-ubuntu-16.04",12934560],["yacoind-1.11.0-ubuntu-18.04",12637280],
      ["yacoind-1.11.0-ubuntu-20.04",12593000],["yacoind-1.11.0-ubuntu-22.04",12776112],["yacoind-1.11.0-windows.exe",16008313]
    ].map(function(a){return {name:a[0],size:a[1],url:"https://github.com/"+REPO+"/releases/download/v1.11.0/"+a[0]};})
  };

  var KIND = {
    "yacoin-qt": {title:"YACoin-Qt wallet", desc:"Desktop wallet with a graphical interface", order:0},
    "yacoind":   {title:"yacoind daemon",   desc:"Headless full node for servers and miners", order:1},
    "yacoin-cli":{title:"yacoin-cli",       desc:"Command-line RPC client for yacoind", order:2}
  };
  var OS_LABEL = {windows:"Windows", macos:"macOS", ubuntu:"Ubuntu"};

  function esc(s){return String(s).replace(/[&<>"']/g,function(c){return {"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;"}[c];});}
  function fmtSize(b){return b>=1e6?(b/1e6).toFixed(1)+" MB":Math.max(1,Math.round(b/1e3))+" KB";}
  function fmtDate(iso){try{return new Date(iso).toLocaleDateString("en-US",{year:"numeric",month:"long",day:"numeric"});}catch(e){return iso.slice(0,10);}}

  // "yacoin-qt-1.11.0-ubuntu-22.04-qt4" -> {kind, os, distro}
  function classify(name){
    var m = /^(yacoin-qt|yacoind|yacoin-cli)-[\d.]+-(windows|macos|ubuntu-(\d+\.\d+))/.exec(name);
    if(!m) return null;
    return {kind:m[1], os:m[2].indexOf("ubuntu")===0?"ubuntu":m[2], distro:m[3]||null};
  }

  function detectOS(){
    var ua = (navigator.userAgentData && navigator.userAgentData.platform) || navigator.platform || navigator.userAgent || "";
    if(/win/i.test(ua)) return "windows";
    if(/mac|iphone|ipad/i.test(ua)) return "macos";
    if(/linux|x11|ubuntu/i.test(ua)) return "ubuntu";
    return "windows";
  }

  var userOS = detectOS();
  var currentOS = userOS;
  var tabs = document.querySelectorAll(".os-tab");
  var list = document.getElementById("dlList");
  var distroSel = document.getElementById("distro");
  var distroWrap = document.getElementById("distroWrap");

  function distros(){
    var set = {};
    release.assets.forEach(function(a){var c=classify(a.name); if(c&&c.distro) set[c.distro]=1;});
    return Object.keys(set).sort(function(a,b){return parseFloat(b)-parseFloat(a);});
  }

  function renderDistros(){
    var ds = distros(), prev = distroSel.value;
    distroSel.innerHTML = ds.map(function(d,i){return '<option value="'+esc(d)+'">'+esc(d)+(i===0?" (newest)":"")+'</option>';}).join("");
    if(ds.indexOf(prev)>=0) distroSel.value = prev;
  }

  function render(){
    tabs.forEach(function(t){
      var os = t.getAttribute("data-os");
      t.setAttribute("aria-selected", os===currentOS ? "true" : "false");
      var y = t.querySelector(".yours");
      if(os===userOS && !y){ t.insertAdjacentHTML("beforeend",'<span class="yours">· yours</span>'); }
    });
    distroWrap.hidden = currentOS!=="ubuntu";

    var items = release.assets.map(function(a){var c=classify(a.name); return c?{a:a,c:c}:null;})
      .filter(function(x){return x && x.c.os===currentOS && (currentOS!=="ubuntu" || x.c.distro===distroSel.value);})
      .sort(function(x,y){return KIND[x.c.kind].order-KIND[y.c.kind].order;});

    if(!items.length){
      list.innerHTML = '<a class="dl" href="'+esc(release.url)+'" target="_blank" rel="noopener"><div class="what"><b>See all downloads on GitHub</b><span>'+esc(release.url)+'</span></div><span class="arrow"><svg><use href="#i-arrow"/></svg></span></a>';
      return;
    }
    list.innerHTML = items.map(function(x,i){
      var k = KIND[x.c.kind];
      var label = k.title + " for " + OS_LABEL[currentOS] + (x.c.distro ? " "+x.c.distro : "");
      return '<a class="dl'+(i===0?' featured':'')+'" href="'+esc(x.a.url)+'">'+
        '<div class="what"><b>'+esc(label)+'</b><span>'+esc(k.desc)+' · '+esc(x.a.name)+'</span></div>'+
        '<span class="size">'+fmtSize(x.a.size)+'</span>'+
        '<span class="arrow"><svg><use href="#i-download"/></svg></span></a>';
    }).join("");

    var first = items[0];
    var heroDl = document.getElementById("heroDl");
    if(currentOS===userOS && first && first.c.kind==="yacoin-qt"){
      heroDl.href = first.a.url;
      heroDl.querySelector("span").textContent = "Download for " + OS_LABEL[userOS];
    }
  }

  function applyMeta(){
    document.querySelectorAll(".js-ver").forEach(function(e){e.textContent = release.tag;});
    document.querySelectorAll(".js-ver-link").forEach(function(e){e.href = release.url;});
    document.querySelectorAll(".js-date").forEach(function(e){e.textContent = fmtDate(release.date);});
    var sums = release.assets.filter(function(a){return a.name==="SHA256SUMS";})[0];
    document.querySelectorAll(".js-sums").forEach(function(e){ if(sums) e.href = sums.url; });
  }

  // Turn GitHub's auto-generated "What's Changed" bullets into the notes list.
  function applyNotes(body){
    var lines = (body||"").split(/\r?\n/).filter(function(l){return /^\s*[*-]\s+/.test(l) && !/^\s*[*-]\s+(pump|bump) version/i.test(l);});
    if(!lines.length) return;
    var html = lines.slice(0,10).map(function(l){
      l = l.replace(/^\s*[*-]\s+/,"");
      var pr = /https:\/\/github\.com\/[\w.-]+\/[\w.-]+\/pull\/(\d+)/.exec(l);
      var text = l.replace(/\s+by @[\w-]+ in https?:\/\/\S+$/,"").replace(/\s+in https?:\/\/\S+$/,"").replace(/\*\*/g,"");
      return '<li><span>'+esc(text)+'</span>'+(pr?'<a class="pr" href="'+esc(pr[0])+'" target="_blank" rel="noopener">#'+esc(pr[1])+'</a>':'')+'</li>';
    }).join("");
    document.getElementById("notes").innerHTML = html;
    var cmp = /https:\/\/github\.com\/[\w.-]+\/[\w.-]+\/compare\/(\S+)\.\.\.(\S+)/.exec(body);
    document.querySelectorAll(".js-compare").forEach(function(e){
      if(cmp){ e.href = cmp[0]; var lbl=e.querySelector(".js-compare-label"); if(lbl) lbl.textContent = cmp[1]+" → "+cmp[2]; }
      else { e.href = release.url; }
    });
  }

  tabs.forEach(function(t){
    t.addEventListener("click", function(){ currentOS = t.getAttribute("data-os"); render(); });
  });
  distroSel.addEventListener("change", render);

  renderDistros(); applyMeta(); render();

  // Pull the live latest release so the page stays current after new tags.
  if(window.fetch){
    fetch("https://api.github.com/repos/"+REPO+"/releases/latest",{headers:{"Accept":"application/vnd.github+json"}})
      .then(function(r){ if(!r.ok) throw new Error(r.status); return r.json(); })
      .then(function(j){
        if(!j || !j.tag_name || !j.assets || !j.assets.length) return;
        release = {
          tag: j.tag_name, url: j.html_url, date: j.published_at,
          assets: j.assets.map(function(a){return {name:a.name,size:a.size,url:a.browser_download_url};})
        };
        renderDistros(); applyMeta(); render(); applyNotes(j.body);
      })
      .catch(function(){ /* keep the static snapshot */ });
  }

  // Theme toggle: remembered per browser; storage may be unavailable.
  var root = document.documentElement;
  try{ var saved = localStorage.getItem("yac-theme"); if(saved) root.setAttribute("data-theme", saved); }catch(e){}
  document.getElementById("themeBtn").addEventListener("click", function(){
    var cur = root.getAttribute("data-theme") || (matchMedia("(prefers-color-scheme: light)").matches ? "light" : "dark");
    var next = cur==="light" ? "dark" : "light";
    root.setAttribute("data-theme", next);
    try{ localStorage.setItem("yac-theme", next); }catch(e){}
  });

  document.getElementById("year").textContent = new Date().getFullYear();
})();
</script>
</body>
</html>
