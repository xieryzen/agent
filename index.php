<?php
require_once __DIR__ . '/auth.php';
nx_require_login();
?>
<!doctype html>
<html lang="id" data-engines="20" data-mc="13" data-mcp="fabric,folia,geyser,paper,purpur,spigot,velocity">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover,interactive-widget=resizes-content">
<title>NexHost AI — AI agent dengan komputer sendiri</title>
<meta name="description" content="NexHost AI: AI agent dengan komputer Linux sendiri dan 20 engine uji E2E — Roblox Studio, Minecraft, Android APK, video animasi, website & QA, VPS. Dibuat, diuji, dan dibuktikan dengan screenshot.">
<meta name="theme-color" content="#ffffff">
<link rel="icon" type="image/svg+xml" href="/favicon.svg">
<link rel="preload" href="/assets/fonts/geist-latin.woff2" as="font" type="font/woff2" crossorigin>
<link rel="stylesheet" href="/assets/fonts/zfonts.css?v=439412">
<meta property="og:title" content="NexHost AI — AI agent dengan komputer sendiri & 20 engine uji E2E">
<meta property="og:description" content="Roblox Studio, Minecraft, Android APK, video animasi, website & QA, VPS — dibuat, diuji end-to-end, dan dibuktikan dengan screenshot.">
<meta property="og:image" content="https://ai.nexhostku.com/assets/landing-ai/roblox-play.webp">
<link rel="stylesheet" href="/assets/landing.css?v=439412">
<script src="/assets/landing.js?v=439412"></script>
</head>
<body class="zx">
<a class="skip" href="#utama">Lewati ke konten</a>
<div class="zx-shell">

<!-- slim left rail (z.ai) -->
<aside class="zx-rail" aria-label="Navigasi samping">
  <a class="rl-ic rl-logo" href="/" title="NexHost AI"><img src="/assets/nx-logo.svg" alt="NexHost AI" width="20" height="20"></a>
  <a class="rl-ic on" href="#mulai" title="Beranda"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 10.5 12 4l8 6.5V20a1 1 0 0 1-1 1h-4.5v-6h-5v6H5a1 1 0 0 1-1-1Z"/></svg></a>
  <a class="rl-ic" href="login.php" title="Riwayat chat (masuk dulu)"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg></a>
  <a class="rl-ic" href="#engine" title="Engine"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.8 20 7v10l-8 4.2L4 17V7Z"/><path d="m4 7 8 4.3L20 7M12 11.3v9.9"/></svg></a>
  <span class="rl-sp"></span>
  <a class="rl-ic" href="https://chat.whatsapp.com/DZyLn0WCWiuL3AIk21p8VY?s=cl&amp;p=a&amp;iam=2" target="_blank" rel="noopener" title="Grup WhatsApp"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12Z"/></svg></a>
  <a class="rl-av" href="login.php" title="Masuk">N</a>
</aside>

<div class="zx-panel">
<header class="zx-top" id="nav">
  <a class="zx-brand" href="/"><img src="/assets/nx-logo.svg" alt="" width="20" height="20"><b>NexHost</b><span>AI</span></a>
  <nav class="zx-links" id="navLinks" aria-label="Navigasi">
    <a href="#engine">Engine</a><a href="#roblox">Roblox</a><a href="#minecraft">Minecraft</a><a href="#video">Video</a><a href="#model">Model</a><a href="#faq">FAQ</a>
  </nav>
  <span class="zx-sp"></span>
  <a class="zx-tl" href="https://portal.nexhostku.com/" target="_blank" rel="noopener">Portal<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
  <a class="zx-tl hide-s" href="login.php" rel="noopener">Daftar<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7 17 17 7M8 7h9v9"/></svg></a>
  <a class="zx-signin" href="login.php">Masuk</a>
  <button class="zx-burger" id="navBurger" type="button" aria-label="Menu" aria-expanded="false"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
</header>

<main id="utama">
<!-- ============================================================ HOME (chat-first, z.ai) -->
<section class="zx-home" id="mulai">
  <div class="zx-hero">
    <img class="zx-dots" src="/assets/landing-ai/halftone.webp?v=439412" alt="" aria-hidden="true">
    <h1 class="zx-h1">Mau bikin apa hari ini?</h1>
    <p class="zx-sub">AI agent dengan komputer sendiri — menulis kode, menjalankan, lalu menguji hasilnya dengan 20 engine end-to-end.</p>
  </div>
  <div class="zx-cards">
    <a class="zc" href="login.php" data-p="Buatkan game obby Roblox dengan checkpoint, leaderstats, dan DataStore, lalu uji sampai lulus QA">
      <span class="zc-box zc-rbx" aria-hidden="true">
        <span class="mk-win"><span class="mk-bar"><i></i><i></i><i></i></span><img src="/assets/landing-ai/roblox-play.webp?v=317668" alt="" loading="lazy" decoding="async"></span>
      </span>
      <span class="zc-l">Game Roblox</span>
    </a>
    <a class="zc" href="login.php" data-p="Buat plugin Minecraft Paper /shop dengan GUI chest dan ekonomi, lalu uji di server">
      <span class="zc-box zc-mc" aria-hidden="true">
        <span class="mk-win"><span class="mk-bar"><i></i><i></i><i></i></span><img src="/assets/landing-ai/minecraft-test.webp?v=317668" alt="" loading="lazy" decoding="async"></span>
      </span>
      <span class="zc-l">Plugin Minecraft</span>
    </a>
    <a class="zc" href="login.php" data-p="Bikin aplikasi Android kasir sederhana, kirim file APK-nya">
      <span class="zc-box zc-apk" aria-hidden="true">
        <img class="mk-free" src="/assets/landing-ai/android-phone.webp?v=317668" alt="" loading="lazy" decoding="async">
      </span>
      <span class="zc-l">Aplikasi Android</span>
    </a>
    <a class="zc" href="login.php" data-p="Buat video animasi 3D 30 detik promosi warung kopi, lengkap dengan narasi">
      <span class="zc-box zc-vid" aria-hidden="true">
        <span class="mk-reels"><img src="/assets/styles/flat2d.webp" alt="" loading="lazy"><img src="/assets/styles/cerita3d.webp" alt="" loading="lazy"><img src="/assets/styles/lowpoly3d.webp" alt="" loading="lazy"></span>
      </span>
      <span class="zc-l">Video Animasi</span>
    </a>
    <a class="zc" href="login.php" data-p="Bikinkan landing page toko online lalu cek tampilannya di desktop dan HP">
      <span class="zc-box zc-web" aria-hidden="true">
        <span class="mk-site"><span class="ms-nav"><i></i><b></b><b></b><b></b><em></em></span><span class="ms-h">Kopi Senja</span><span class="ms-l"></span><span class="ms-l s"></span><span class="ms-btn"></span><span class="ms-row"><i></i><i></i><i></i></span></span>
      </span>
      <span class="zc-l">Website</span>
    </a>
    <a class="zc" href="login.php" data-p="Panel Pterodactyl saya error 500, tolong cek dan perbaiki di VPS">
      <span class="zc-box zc-vps" aria-hidden="true">
        <span class="mk-term"><span class="mt-l c">$ systemctl status nginx</span><span class="mt-l g">● active (running)</span><span class="mt-l c">$ curl -I panel.domain.id</span><span class="mt-l g">HTTP/2 200 · OK</span><span class="mt-l">backup → /root/nx-bak/</span></span>
      </span>
      <span class="zc-l">Server &amp; VPS</span>
    </a>
  </div>

  <form class="zx-comp" id="zxComp" action="login.php" method="get" autocomplete="off">
    <label class="sr" for="zxIn">Pesan untuk NexHost AI</label>
    <textarea id="zxIn" name="q" rows="2" maxlength="8000" placeholder="Suruh NexHost AI mengerjakan apa saja…"></textarea>
    <div class="zx-bar">
      <a class="zx-ib" href="login.php" title="Lampirkan file (masuk dulu)"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5v14M5 12h14"/></svg></a>
      <span class="zx-sp"></span>
      <a class="zx-model" href="#model" title="Model AI"><b>Claude Opus 5.5</b><em>Thinking</em><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></a>
      <button class="zx-send" id="zxSend" type="submit" title="Kirim — kamu akan diminta masuk dulu" disabled><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 19V5M5 12l7-7 7 7"/></svg></button>
    </div>
  </form>
  <p class="zx-legal">Dibuat oleh AI, cek ulang hal penting. <a href="#engine">Kemampuan</a><a href="#faq">FAQ</a><a href="https://chat.whatsapp.com/DZyLn0WCWiuL3AIk21p8VY?s=cl&amp;p=a&amp;iam=2" target="_blank" rel="noopener">Grup WhatsApp</a></p>
  <a class="zx-more" href="#engine" aria-label="Gulir ke kemampuan"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></a>
</section>

<!-- ============================================================ ENGINE -->
<section class="sec" id="engine">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Engine</p>
      <h2 class="h2">Satu AI, 20 engine — semua terpasang di komputernya.</h2>
      <p class="lead">Tidak ada tebak-tebakan. Setiap hasil kerja dijalankan, diuji seperti pengguna sungguhan, dan difoto sebelum diserahkan ke kamu.</p>
    </div>
    <div class="stat-row rv">
      <div class="stat"><b data-count="20">20</b><span>Engine uji E2E</span></div>
      <div class="stat"><b>3.500+</b><span>Skill siap pakai</span></div>
      <div class="stat"><b>100 jt</b><span>Karakter per lampiran</span></div>
      <div class="stat"><b>100 MB</b><span>Upload per file</span></div>
      <div class="stat"><b>24/7</b><span>Siap bekerja</span></div>
    </div>
    <div class="egrid">
      <a class="etile rv" href="#roblox"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.8 20 7v10l-8 4.2L4 17V7Z"/><path d="m4 7 8 4.3L20 7M12 11.3v9.9"/></svg></span><span class="tag">nxrbx</span></span><b>Roblox Studio</b><span class="et-d">Place dibangun via Rojo, dimainkan player sungguhan, QA 7 cek.</span></a>
      <a class="etile rv" href="#minecraft"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 4.5c2.5-.6 5 .4 6.5 2-3.2-.8-5.6-.3-7.5.9M9.5 9.5 3 16l2 2 6.5-6.5"/><path d="m8 8 3-3 8 8-3 3Z"/></svg></span><span class="tag">nxmc</span></span><b>Minecraft</b><span class="et-d">Plugin &amp; addon diuji di server Paper asli — login in-game beneran.</span></a>
      <a class="etile rv" href="#android"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="9" width="14" height="10" rx="2"/><path d="M8 9a4 4 0 0 1 8 0M7.5 4.5 9 7M16.5 4.5 15 7M10 12.5h.01M14 12.5h.01"/></svg></span><span class="tag">nxapk</span></span><b>Android APK</b><span class="et-d">Kotlin native + SDK 35, dikemas jadi .apk bertanda tangan.</span></a>
      <a class="etile rv" href="#video"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2.5"/><path d="M7 4v16M17 4v16M3 9h4M3 15h4M17 9h4M17 15h4"/><path d="m10.5 9.8 3.5 2.2-3.5 2.2Z"/></svg></span><span class="tag">nxvideo</span></span><b>Video Animasi</b><span class="et-d">3D kartun, low-poly, flat 2D — narasi + musik, keluar MP4.</span></a>
      <a class="etile rv" href="#web"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="4" width="19" height="13" rx="2"/><path d="M8 21h8M12 17v4M2.5 8h19"/></svg></span><span class="tag">nxqa</span></span><b>Website &amp; QA</b><span class="et-d">Dibangun, dijalankan, dites Chromium di desktop + HP.</span></a>
      <a class="etile rv" href="#vps"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="7" rx="2"/><rect x="3" y="13" width="18" height="7" rx="2"/><path d="M7 7.5h.01M7 16.5h.01"/></svg></span><span class="tag">agent</span></span><b>VPS &amp; Server</b><span class="et-d">Masuk sebagai root, perbaiki, verifikasi dari dalam &amp; luar.</span></a>
      <a class="etile rv" href="#integrasi"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg></span><span class="tag">oauth</span></span><b>GitHub &amp; Drive</b><span class="et-d">Repo privat, PR, rilis, Actions — baca/tulis file Drive.</span></a>
      <a class="etile rv" href="#integrasi"><span class="et-top"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span><span class="tag">riset</span></span><b>Riset TikTok &amp; YouTube</b><span class="et-d">Unduh &amp; pelajari video referensi, terapkan ke hasil kerja.</span></a>
    </div>
  </div>
</section>

<!-- ============================================================ ROBLOX -->
<section class="sec" id="roblox">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">nxrbx — Engine Roblox <em class="new">Baru</em></p>
      <h2 class="h2">Game kamu dimainkan dulu sebelum dikirim.</h2>
      <p class="lead">Obby, simulator, tycoon, tool, GUI, sampai DataStore — AI membangun place dengan Rojo, menjalankan server &amp; client di Luau VM, lalu memasukkan player sungguhan untuk mencoba setiap fitur. Hasilnya file <b>.rbxl</b> yang langsung dibuka di Roblox Studio.</p>
      <div class="stages"><span class="on">01 Build</span><span>02 Lint</span><span>03 Play</span><span>04 QA</span></div>
    </div>
    <div class="stage rv"><figure class="win big"><div class="win-bar"><i></i><i></i><i></i><span>127.0.0.1:25590/?stage=play</span></div><img src="/assets/landing-ai/roblox-play.webp?v=317668" alt="NexHost Roblox Studio — gameplay live: player Budi, leaderboard, chat, explorer, output" loading="lazy" decoding="async"></figure></div>
    <div class="duo">
      <div class="tm rv" data-type><div class="tm-bar"><i></i><i></i><i></i><span>nxrbx · CoinRush</span></div><pre class="tm-o"><span class="tl c">$ nxrbx build &amp;&amp; nxrbx lint</span><span class="tl g">[nxrbx] BUILD OK -&gt; build/CoinRush.rbxl</span><span class="tl d">  selene 0 error · luau-lsp 0 error · stylua rapi</span><span class="tl c">$ nxrbx start &amp;&amp; nxrbx join --player Budi</span><span class="tl g">ROBLOX SERVER READY · 1 Script server jalan · 0 error</span><span class="tl ">JOIN OK Budi · pos=(0, 4, 0) health=100/100</span><span class="tl c">$ nxrbx touch Coin1 --expect &quot;Coins=5&quot;</span><span class="tl g">  EXPECT &#039;Coins=5&#039; -&gt; OK</span><span class="tl c">$ nxrbx rejoin --player Budi --expect &quot;Coins=15&quot;</span><span class="tl g">REJOIN OK Budi · Coins=15 (DataStore tersimpan)</span><span class="tl c">$ nxrbx qa</span><span class="tl ok">RBX E2E QA LULUS  ·  7/7 PASS</span></pre></div>      <div class="duo-shots">
        <figure class="win rv sm"><div class="win-bar"><i></i><i></i><i></i><span>127.0.0.1:25590/?stage=qa</span></div><img src="/assets/landing-ai/roblox-qa.webp?v=317668" alt="Laporan Roblox E2E QA LULUS" loading="lazy" decoding="async"></figure>        <figure class="win rv sm"><div class="win-bar"><i></i><i></i><i></i><span>127.0.0.1:25590/?stage=build</span></div><img src="/assets/landing-ai/roblox-build.webp?v=317668" alt="Laporan build place Roblox" loading="lazy" decoding="async"></figure>      </div>
    </div>
    <div class="grid3">
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.8 20 7v10l-8 4.2L4 17V7Z"/><path d="m4 7 8 4.3L20 7M12 11.3v9.9"/></svg></span><b>Build .rbxl via Rojo</b><p>Struktur project rapi (server, client, shared). File .rbxl/.rbxlx milikmu juga bisa langsung diuji.</p></div>
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 4 6v6c0 4.5 3.4 8.3 8 9 4.6-.7 8-4.5 8-9V6Z"/><path d="m9 12 2 2 4-4"/></svg></span><b>Lint & type-check</b><p>Selene + luau-lsp dengan definisi API Roblox terbaru. Salah nama properti langsung ketahuan.</p></div>
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M13 2 4 14h7l-1 8 9-12h-7Z"/></svg></span><b>Server + client sungguhan</b><p>Script, LocalScript & ModuleScript jalan di konteksnya, lengkap dengan batas client/server.</p></div>
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span><b>Player nyata menguji</b><p>Part, GUI, ProximityPrompt, ClickDetector, RemoteEvent, keyboard, chat, tool, pembelian.</p></div>
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg></span><b>DataStore + rejoin</b><p>Player keluar lalu masuk lagi — koin, level, dan inventori dipastikan benar-benar tersimpan.</p></div>
      <div class="feat rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 8h3l2-3h6l2 3h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z"/><circle cx="12" cy="13.5" r="3.5"/></svg></span><b>QA 7 cek + screenshot</b><p>0 runtime error, 0 infinite yield. Build, gameplay, dan laporan QA difoto otomatis.</p></div>
    </div>
    <p class="fine rv">Didukung: Players &amp; Character, Humanoid, TweenService, DataStore/OrderedDataStore, MarketplaceService (Developer Product &amp; Gamepass), CollectionService, Raycast, TextChatService, Teams, Sound, Animation, dan 900+ kelas Instance lainnya.</p>
  </div>
</section>

<!-- ============================================================ MINECRAFT -->
<section class="sec" id="minecraft">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">nxmc — Engine Minecraft</p>
      <h2 class="h2">Login beneran, bukan kira-kira.</h2>
      <p class="lead">AI menyalakan server Minecraft asli, masuk sebagai player <b>NexHostQA</b>, menjalankan command, membuka Chest GUI, lalu memastikan tidak ada exception maupun force-close. Semua offline — tanpa menunggu download.</p>
    </div>
    <div class="stage rv"><figure class="win big"><div class="win-bar"><i></i><i></i><i></i><span>127.0.0.1:25580/?stage=test</span></div><img src="/assets/landing-ai/minecraft-test.webp?v=317668" alt="NexHost Minecraft Live E2E — player NexHostQA in-game, console server, riwayat uji" loading="lazy" decoding="async"></figure></div>
    <div class="grid4">
      <div class="card rv"><b>Paper 26.3 · 1.21.11 · 1.20.4</b><p>Engine sudah di-patch & world sudah dibuat. Server boot dalam hitungan detik.</p></div>
      <div class="card rv"><b>Purpur · Fabric · Velocity</b><p>Plus server Bedrock (BDS) untuk addon. JDK 25/21 + Maven offline.</p></div>
      <div class="card rv"><b>Player asli masuk</b><p>Command, event, klik Chest GUI, dan aksi in-game diuji langsung.</p></div>
      <div class="card rv"><b>0 exception · 0 force-close</b><p>Console & ContentLog diperiksa. QA harus LULUS sebelum diserahkan.</p></div>
    </div>
    <div class="duo">
      <figure class="win rv sm"><div class="win-bar"><i></i><i></i><i></i><span>127.0.0.1:25580/?stage=qa</span></div><img src="/assets/landing-ai/minecraft-qa.webp?v=317668" alt="Laporan Minecraft E2E QA LULUS" loading="lazy" decoding="async"></figure>      <div class="tm rv" data-type><div class="tm-bar"><i></i><i></i><i></i><span>nxmc · ShopPlugin</span></div><pre class="tm-o"><span class="tl c">$ nxmc build /workspace/ShopPlugin</span><span class="tl g">[nxmc] BUILD OK (7.7s) -&gt; ShopPlugin-1.0.0.jar</span><span class="tl c">$ nxmc start --plugin target/ShopPlugin-1.0.0.jar</span><span class="tl g">[nxmc] SERVER READY (PAPER 26.3) — 0 startup errors</span><span class="tl c">$ nxmc login --op</span><span class="tl ">[nxmc] LOGIN OK — Player NexHostQA joined in-game</span><span class="tl c">$ nxmc cmd &quot;/shop&quot;</span><span class="tl ">  [chat] [ShopPlugin] Halo NexHostQA! Plugin jalan.</span><span class="tl c">$ nxmc qa</span><span class="tl ok">MC E2E QA LULUS  ·  0 error · server tidak crash</span></pre></div>    </div>
  </div>
</section>

<!-- ============================================================ ANDROID -->
<section class="sec" id="android">
  <div class="wrap split">
    <div>
      <p class="eyebrow rv">nxapk — Engine Android</p>
      <h2 class="h2 rv">Aplikasi Android. Langsung jadi .apk.</h2>
      <p class="lead rv">Ceritakan aplikasinya — AI membangun project Gradle native dengan Kotlin dan Android SDK 35, lalu mengemasnya jadi APK bertanda tangan yang siap dipasang di HP.</p>
      <ul class="list rv">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Kotlin native — tanpa Flutter/React Native kecuali kamu minta</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Build Gradle antre otomatis di server, kamu tinggal tunggu</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span><code>nxapk check</code>: manifest, izin, ukuran &amp; signature diverifikasi</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Tidak dinyatakan selesai sebelum muncul <b>APK OK</b></span></li>
      </ul>
    </div>
    <div class="artpanel rv"><img class="art" src="/assets/landing-ai/android-phone.webp?v=317668" alt="Aplikasi Android buatan NexHost AI berjalan di ponsel" loading="lazy" width="1300" height="867"></div>
  </div>
</section>

<!-- ============================================================ VIDEO -->
<section class="sec" id="video">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">nxvideo — Engine Video</p>
      <h2 class="h2">Video animasi, lengkap dengan suaranya.</h2>
      <p class="lead">Dari ide jadi MP4 — kartun 3D, low-poly, flat 2D, atau motion graphic. Narasi suara natural berbahasa Indonesia plus musik latar, siap diunggah ke TikTok, Reels, atau Shorts.</p>
    </div>
    <div class="reels">
      <figure class="reel rv" style="--d:0">
        <div class="reel-ph"><img src="/assets/styles/cerita3d.webp" alt="Contoh gaya Cerita 3D" loading="lazy" width="360" height="480"><span class="reel-play"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span></div>
        <figcaption>Cerita 3D</figcaption>
      </figure>
      <figure class="reel rv" style="--d:1">
        <div class="reel-ph"><img src="/assets/styles/lowpoly3d.webp" alt="Contoh gaya Low-poly 3D" loading="lazy" width="360" height="480"><span class="reel-play"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span></div>
        <figcaption>Low-poly 3D</figcaption>
      </figure>
      <figure class="reel rv" style="--d:2">
        <div class="reel-ph"><img src="/assets/styles/flat2d.webp" alt="Contoh gaya Flat 2D" loading="lazy" width="360" height="480"><span class="reel-play"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span></div>
        <figcaption>Flat 2D</figcaption>
      </figure>
      <figure class="reel rv" style="--d:3">
        <div class="reel-ph"><img src="/assets/styles/motion.webp" alt="Contoh gaya Motion graphic" loading="lazy" width="360" height="480"><span class="reel-play"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span></div>
        <figcaption>Motion graphic</figcaption>
      </figure>
    </div>
    <div class="grid4">
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="9" y="3" width="6" height="11" rx="3"/><path d="M5 11a7 7 0 0 0 14 0M12 18v3"/></svg></span><b>Narasi natural</b><p>Suara Laras yang hangat dan jelas, sinkron dengan adegan.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 18V5l11-2v13"/><circle cx="6" cy="18" r="3"/><circle cx="17" cy="16" r="3"/></svg></span><b>Musik latar</b><p>MP3 disesuaikan suasana video.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="6" y="2.5" width="12" height="19" rx="2.5"/><path d="M11 18.5h2"/></svg></span><b>Vertikal &amp; lebar</b><p>9:16 untuk sosial media, 16:9 untuk YouTube.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"/></svg></span><b>Pilih gaya</b><p>Kartu gaya muncul di chat — klik, AI langsung render.</p></div>
    </div>
  </div>
</section>

<!-- ============================================================ WEB + QA -->
<section class="sec" id="web">
  <div class="wrap split rev">
    <div class="artpanel rv"><img class="art" src="/assets/landing-ai/laptop-code.webp?v=317668" alt="Website dibangun dan diuji NexHost AI" loading="lazy" width="1400" height="933"></div>
    <div>
      <p class="eyebrow rv">nxqa — Website &amp; QA</p>
      <h2 class="h2 rv">Website jadi, dicek di desktop &amp; HP.</h2>
      <p class="lead rv">Landing page, toko online, dashboard, sampai aplikasi React — dibangun di workspace, dijalankan, lalu diuji otomatis dengan Chromium di ukuran desktop dan ponsel. Screenshot-nya langsung tampil di chat.</p>
      <ul class="list rv">
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Preview live &amp; unduh satuan atau ZIP dari panel File</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>QA otomatis: layout, error konsol, tautan rusak</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Python, Node, PHP-ready, SQLite, ImageMagick, FFmpeg</span></li>
        <li><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><span>Deploy ke VPS kamu atau push ke GitHub</span></li>
      </ul>
    </div>
  </div>
</section>

<!-- ============================================================ VPS -->
<section class="sec" id="vps">
  <div class="wrap split">
    <div>
      <p class="eyebrow rv">agent — VPS &amp; Server</p>
      <h2 class="h2 rv">Server bermasalah? AI masuk sebagai root.</h2>
      <p class="lead rv">Hubungkan VPS lewat agent NexHost atau SSH. AI memeriksa log, memperbaiki Pterodactyl yang error 500, nginx, SSL, database, atau firewall — backup dulu sebelum mengubah file, lalu memverifikasi dari dalam dan luar server.</p>
    </div>
    <div class="artpanel rv"><img class="art" src="/assets/landing-ai/hero-server.webp?v=317668" alt="Server VPS yang dikelola NexHost AI" loading="lazy" width="1600" height="740"></div>
  </div>
  <div class="wrap">
    <div class="grid4">
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="11" width="14" height="10" rx="2"/><path d="M8 11V7a4 4 0 0 1 8 0v4"/></svg></span><b>Akses root aman</b><p>Lewat agent resmi NexHost, bisa diputus kapan saja.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg></span><b>Backup dulu</b><p>Setiap file yang diubah dicadangkan lebih dulu.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 8h3l2-3h6l2 3h3a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1Z"/><circle cx="12" cy="13.5" r="3.5"/></svg></span><b>Bukti nyata</b><p>Cek curl + screenshot halaman publik sebagai bukti.</p></div>
      <div class="card rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg></span><b>Laporan jujur</b><p>Beres, sebagian, atau belum — tanpa basa-basi.</p></div>
    </div>
  </div>
</section>

<!-- ============================================================ INTEGRATIONS -->
<section class="sec" id="integrasi">
  <div class="wrap narrow">
    <div class="sec-head rv">
      <p class="eyebrow">Integrasi</p>
      <h2 class="h2">Terhubung ke alat yang sudah kamu pakai.</h2>
    </div>
    <div class="irows">
      <div class="irow rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg></span><div><b>GitHub</b><p>Hubungkan akunmu — AI clone repo privat, membuat branch & pull request, merilis versi, menyiapkan Actions CI/CD, dan deploy ke VPS.</p></div></div>
      <div class="irow rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M8.5 3.5h7l6 10.5-3.5 6H6L2.5 14Z"/><path d="m8.5 3.5 6 10.5h7M2.5 14h12L18 20"/></svg></span><div><b>Google Drive</b><p>Baca dokumen, spreadsheet, dan file dari Drive, lalu simpan hasil kerja kembali ke Drive kamu.</p></div></div>
      <div class="irow rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5" width="19" height="14" rx="4"/><path d="m10 9 5 3-5 3Z"/></svg></span><div><b>Riset TikTok &amp; YouTube</b><p>AI mencari dan mengunduh video referensi, membuat catatan studi & storyboard, lalu menerapkannya ke hasil kerja.</p></div></div>
    </div>
  </div>
</section>

<!-- ============================================================ BRAIN / FEATURES -->
<section class="sec" id="fitur">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Kecerdasan</p>
      <h2 class="h2">Otak yang terus belajar.</h2>
      <p class="lead">NexHost AI mengingat project dan preferensimu, memakai ribuan skill secara otomatis, dan tidak mengulangi kesalahan yang sama.</p>
    </div>
    <div class="bento2">
      <div class="b2 wide rv">
        <span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg></span><b>Lampiran raksasa, dibaca sampai habis.</b>
        <p>File sampai 100 MB dan teks hingga 100 juta karakter — ZIP source code, log, dokumen. AI membacanya bagian demi bagian, tidak dipotong.</p>
        <div class="readbar" aria-hidden="true">
          <div class="rb-h"><span>Membaca lampiran besar · bagian <em id="rbPart">5</em>/28</span><span id="rbPct">16%</span></div>
          <div class="rb-t"><i id="rbFill"></i></div>
          <pre>$ nxread --lampiran 1 --bagian <span id="rbPart2">5</span>/28 "project.zip"
  ukuran  2.722.387 karakter · 28 bagian
  ▸ src/server/main.luau
  ▸ src/client/hud.luau</pre>
        </div>
      </div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 5a3 3 0 1 0-6 .1 4 4 0 0 0-2.5 5.8 4 4 0 0 0 .6 6.6A4 4 0 1 0 12 18Z"/><path d="M12 5a3 3 0 1 1 6 .1 4 4 0 0 1 2.5 5.8 4 4 0 0 1-.6 6.6A4 4 0 1 1 12 18Z"/><path d="M12 5v13"/></svg></span><b>Memori permanen</b><p>Ingat project, preferensi, dan seluruh obrolan lintas percakapan. Riwayat tidak diringkas, tidak dihapus.</p></div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20V3H6.5A2.5 2.5 0 0 0 4 5.5Z"/><path d="M4 19.5A2.5 2.5 0 0 0 6.5 22H20v-5"/></svg></span><b>3.500+ skill</b><p>Desain web, React, SEO, Pterodactyl, Docker, payment gateway Indonesia — dipilih otomatis sesuai tugas.</p></div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M5.6 18.4l2.8-2.8M15.6 8.4l2.8-2.8"/></svg></span><b>Belajar dari kesalahan</b><p>Setiap koreksi menjadi pelajaran di database, dipakai lagi di tugas berikutnya.</p></div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3a14 14 0 0 1 0 18M12 3a14 14 0 0 0 0 18"/></svg></span><b>Web &amp; browser</b><p>Cari dokumentasi terbaru, baca halaman, ambil screenshot sebagai bukti.</p></div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg></span><b>Workspace permanen</b><p>File tersimpan per percakapan — preview, unduh satuan, atau ZIP sekaligus.</p></div>
      <div class="b2 rv"><span class="fi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 12a8 8 0 0 1-11.6 7.1L4 20l1-4.6A8 8 0 1 1 21 12Z"/></svg></span><b>Tonton real-time</b><p>Setiap perintah, output, dan screenshot tampil langsung saat AI bekerja.</p></div>
    </div>
  </div>
</section>

<!-- ============================================================ HOW -->
<section class="sec" id="cara">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Cara kerja</p>
      <h2 class="h2">Ketik. Tonton. Terima beres.</h2>
    </div>
    <div class="steps">
      <div class="step rv"><span class="sn">1</span><b>Ceritakan kebutuhanmu</b><p>Tulis seperti ngobrol biasa. Lampirkan file, ZIP, gambar, atau link bila ada.</p></div>
      <div class="step rv"><span class="sn">2</span><b>AI bekerja di komputernya</b><p>Menulis kode, menjalankan perintah, memasang dependensi — semua tampil real-time.</p></div>
      <div class="step rv"><span class="sn">3</span><b>Diuji end-to-end</b><p>Engine yang sesuai menguji hasilnya seperti pengguna sungguhan sampai lulus QA.</p></div>
      <div class="step rv"><span class="sn">4</span><b>Bukti & file siap</b><p>Screenshot tiap tahap, ringkasan jujur, dan file siap unduh atau deploy.</p></div>
    </div>
  </div>
</section>

<!-- ============================================================ PROMPTS (z.ai category chips) -->
<section class="sec" id="contoh">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Inspirasi</p>
      <h2 class="h2">Coba suruh begini.</h2>
    </div>
    <div class="prompts rv">
      <a class="prompt" href="login.php" data-p="Buatkan game obby Roblox dengan checkpoint, leaderstats, dan DataStore"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.8 20 7v10l-8 4.2L4 17V7Z"/><path d="m4 7 8 4.3L20 7M12 11.3v9.9"/></svg><span>Buatkan game obby Roblox dengan checkpoint, leaderstats, dan DataStore</span></a>
      <a class="prompt" href="login.php" data-p="Bikin sistem toko Roblox: tombol GUI, RemoteEvent, dan validasi di server"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.8 20 7v10l-8 4.2L4 17V7Z"/><path d="m4 7 8 4.3L20 7M12 11.3v9.9"/></svg><span>Bikin sistem toko Roblox: tombol GUI, RemoteEvent, dan validasi di server</span></a>
      <a class="prompt" href="login.php" data-p="Buat plugin Minecraft Paper /shop dengan GUI chest dan ekonomi"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 4.5c2.5-.6 5 .4 6.5 2-3.2-.8-5.6-.3-7.5.9M9.5 9.5 3 16l2 2 6.5-6.5"/><path d="m8 8 3-3 8 8-3 3Z"/></svg><span>Buat plugin Minecraft Paper /shop dengan GUI chest dan ekonomi</span></a>
      <a class="prompt" href="login.php" data-p="Perbaiki addon Bedrock saya yang bikin player force-close"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 4.5c2.5-.6 5 .4 6.5 2-3.2-.8-5.6-.3-7.5.9M9.5 9.5 3 16l2 2 6.5-6.5"/><path d="m8 8 3-3 8 8-3 3Z"/></svg><span>Perbaiki addon Bedrock saya yang bikin player force-close</span></a>
      <a class="prompt" href="login.php" data-p="Bikin aplikasi Android kasir sederhana, kirim file APK-nya"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="9" width="14" height="10" rx="2"/><path d="M8 9a4 4 0 0 1 8 0M7.5 4.5 9 7M16.5 4.5 15 7M10 12.5h.01M14 12.5h.01"/></svg><span>Bikin aplikasi Android kasir sederhana, kirim file APK-nya</span></a>
      <a class="prompt" href="login.php" data-p="Buat video animasi 3D 30 detik promosi warung kopi, ada narasinya"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2.5"/><path d="M7 4v16M17 4v16M3 9h4M3 15h4M17 9h4M17 15h4"/><path d="m10.5 9.8 3.5 2.2-3.5 2.2Z"/></svg><span>Buat video animasi 3D 30 detik promosi warung kopi, ada narasinya</span></a>
      <a class="prompt" href="login.php" data-p="Bikinkan landing page toko online lalu cek tampilannya di HP"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="4" width="19" height="13" rx="2"/><path d="M8 21h8M12 17v4M2.5 8h19"/></svg><span>Bikinkan landing page toko online lalu cek tampilannya di HP</span></a>
      <a class="prompt" href="login.php" data-p="Panel Pterodactyl saya error 500, tolong perbaiki di VPS"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="4" width="18" height="7" rx="2"/><rect x="3" y="13" width="18" height="7" rx="2"/><path d="M7 7.5h.01M7 16.5h.01"/></svg><span>Panel Pterodactyl saya error 500, tolong perbaiki di VPS</span></a>
      <a class="prompt" href="login.php" data-p="Clone repo GitHub saya, perbaiki bug login, lalu buat pull request"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.4 5.4 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/></svg><span>Clone repo GitHub saya, perbaiki bug login, lalu buat pull request</span></a>
      <a class="prompt" href="login.php" data-p="Baca ZIP source code ini sampai habis dan jelaskan arsitekturnya"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8Z"/><path d="M14 3v5h5M9 13h6M9 17h6"/></svg><span>Baca ZIP source code ini sampai habis dan jelaskan arsitekturnya</span></a>
    </div>
  </div>
</section>

<!-- ============================================================ MODELS -->
<section class="sec" id="model">
  <div class="wrap">
    <div class="sec-head rv">
      <p class="eyebrow">Model</p>
      <h2 class="h2">Ditenagai model AI terbaru.</h2>
      <p class="lead">Pilih model sesuai kebutuhan — ganti kapan saja di tengah percakapan.</p>
    </div>
    <div class="grid3 models">
      <div class="model rv hl"><span class="tag">Paling pintar</span><b>Claude Opus 5.5 Thinking</b><p>Berpikir dulu sebelum menjawab. Terbaik untuk coding besar, debugging, dan tugas multi-langkah.</p></div>
      <div class="model rv"><span class="tag">Cepat</span><b>Claude Haiku 5.5</b><p>Ringan dan responsif untuk tugas sehari-hari, pertanyaan cepat, dan revisi kecil.</p></div>
      <div class="model rv"><span class="tag">Terbaru</span><b>Nopal 1.2</b><p>Jawaban paling teliti untuk pekerjaan yang butuh ketelitian ekstra.</p></div>
    </div>
    <p class="fine c rv">Fallback otomatis — bila satu model sedang sibuk, pekerjaan tetap berjalan.</p>
  </div>
</section>

<!-- ============================================================ FAQ -->
<section class="sec" id="faq">
  <div class="wrap narrow">
    <div class="sec-head rv">
      <p class="eyebrow">FAQ</p>
      <h2 class="h2">Pertanyaan umum.</h2>
    </div>
    <div class="faq">
      <details class="rv"><summary>Apa bedanya dengan chatbot biasa?<i></i></summary><p>Chatbot biasa hanya menulis jawaban. NexHost AI punya komputer sendiri: dia menjalankan kode, memasang dependensi, menguji hasil dengan engine E2E, dan menunjukkan screenshot sebagai bukti sebelum bilang selesai.</p></details>
      <details class="rv"><summary>Apakah saya perlu install sesuatu?<i></i></summary><p>Tidak. Semua berjalan di browser. Engine Roblox, Minecraft, Android, video, dan QA web sudah terpasang di komputer AI.</p></details>
      <details class="rv"><summary>Hasil Roblox bisa dibuka di Roblox Studio?<i></i></summary><p>Bisa. AI menyerahkan file .rbxl yang langsung dibuka di Roblox Studio, beserta source code Luau di folder src/ yang bisa disinkron dengan Rojo.</p></details>
      <details class="rv"><summary>Versi Minecraft apa yang didukung?<i></i></summary><p>Paper 26.3, 1.21.11, dan 1.20.4 siap offline, ditambah Purpur, Fabric, Velocity, dan server Bedrock untuk addon.</p></details>
      <details class="rv"><summary>Bagaimana dengan file dan data saya?<i></i></summary><p>Setiap percakapan punya workspace tersendiri dan memori milik akunmu. Komputer AI terisolasi dan tidak bisa mengakses jaringan internal.</p></details>
      <details class="rv"><summary>Akun apa yang dipakai?<i></i></summary><p>Akun yang sama dengan portal.nexhostku.com. Belum punya? Daftar dulu, lalu masuk ke NexHost AI.</p></details>
      <details class="rv"><summary>Seberapa besar file yang bisa dikirim?<i></i></summary><p>Hingga 100 MB per file, dengan teks sampai 100 juta karakter yang dibaca bertahap sampai habis.</p></details>
    </div>
  </div>
</section>

<!-- ============================================================ FINAL CTA -->
<section class="sec final-sec">
  <div class="wrap">
    <div class="final rv">
      <img class="final-dots" src="/assets/landing-ai/halftone.webp?v=439412" alt="" aria-hidden="true" loading="lazy">
      <h2 class="h2">Ide hari ini. Jadi hari ini.</h2>
      <p class="lead">Game, plugin, aplikasi, video, website, atau server — serahkan ke NexHost AI dan tonton dia bekerja sampai tuntas.</p>
      <div class="cta"><a class="btn" href="login.php">Mulai sekarang<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a><a class="btn ghost" href="login.php" rel="noopener">Daftar akun NexHost</a></div>
    </div>
  </div>
</section>
</main>

<footer class="foot">
  <div class="wrap">
    <div class="foot-cols">
      <div class="foot-brand">
        <a class="zx-brand" href="/"><img src="/assets/nx-logo.svg" alt="" width="20" height="20"><b>NexHost</b><span>AI</span></a>
        <p>AI agent dengan komputer sendiri. Dibuat, diuji, dan dibuktikan dengan screenshot.</p>
      </div>
      <div><b>Engine</b><a href="#roblox">Roblox Studio</a><a href="#minecraft">Minecraft</a><a href="#android">Android APK</a><a href="#video">Video Animasi</a><a href="#web">Website &amp; QA</a><a href="#vps">VPS &amp; Server</a></div>
      <div><b>NexHost AI</b><a href="#fitur">Fitur</a><a href="#model">Model</a><a href="#cara">Cara kerja</a><a href="#faq">FAQ</a><a href="login.php">Masuk</a></div>
      <div><b>Layanan</b><a href="https://portal.nexhostku.com/">NexHost</a><a href="https://portal.nexhostku.com/product/vps.php">VPS</a><a href="https://portal.nexhostku.com/#smtp">SMTP Service</a><a href="https://portal.nexhostku.com/#free-permanen">Hosting gratis permanen</a><a href="https://chat.whatsapp.com/DZyLn0WCWiuL3AIk21p8VY?s=cl&amp;p=a&amp;iam=2" rel="noopener">WhatsApp Group NexHost</a></div>
    </div>
    <p class="foot-note">NexHost AI menggunakan akun portal.nexhostku.com. Hasil uji E2E dijalankan di lingkungan offline yang meniru Roblox &amp; Minecraft; tetap disarankan mencoba akhir di Roblox Studio / server produksi kamu.</p>
    <div class="foot-b"><span>&copy; 2026 NexHost Cloud Systems</span><span>Dibangun untuk berkembang.</span></div>
  </div>
</footer>
</div>
</div>
</body>
</html>
