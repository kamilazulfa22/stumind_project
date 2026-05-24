<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Stumind</title>

  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- ICON -->
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:'Poppins',sans-serif;
    }

    :root{
      --pink:#ff7fa1;
      --soft:#fff7f9;
      --mint:#DFF7E2;
      --blue:#EAF4FF;
      --dark:#2d2d2d;
      --gray:#6d6d6d;
    }

    body{
      background:#fcfcfc;
      color:var(--dark);
      padding:24px;
    }

    .container{
      max-width:1280px;
      margin:auto;
    }

    /* TOP */

    .top{
      display:flex;
      justify-content:space-between;
      align-items:center;
      margin-bottom:30px;
      flex-wrap:wrap;
      gap:20px;
    }

    .logo{
      display:flex;
      align-items:center;
      gap:14px;
    }

    .logo-icon{
      width:58px;
      height:58px;
      border-radius:18px;
      background:#FFE5EC;
      display:flex;
      justify-content:center;
      align-items:center;
      color:var(--pink);
      font-size:24px;
    }

    .logo-text h2{
      font-size:28px;
      color:var(--pink);
    }

    .logo-text p{
      font-size:13px;
      color:#888;
    }

    .top-button{
      display:flex;
      gap:12px;
    }

    .login-btn,
    .register-btn{
      border:none;
      padding:12px 22px;
      border-radius:999px;
      cursor:pointer;
      font-size:14px;
      font-weight:600;
      transition:0.3s;
    }

    .login-btn{
      background:white;
      border:1px solid #eee;
    }

    .register-btn{
      background:var(--pink);
      color:white;
    }

    .login-btn:hover,
    .register-btn:hover{
      transform:translateY(-2px);
    }

    /* HERO */

    .hero{
      background:white;
      border-radius:32px;
      padding:55px;
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:50px;
      flex-wrap:wrap;
      margin-bottom:45px;
      border:1px solid #f2f2f2;
    }

    .hero-text{
      flex:1;
      min-width:320px;
    }

    .badge{
      display:inline-block;
      background:#FFE5EC;
      color:var(--pink);
      padding:9px 16px;
      border-radius:999px;
      font-size:13px;
      font-weight:600;
      margin-bottom:22px;
    }

    .hero-text h1{
      font-size:48px;
      line-height:1.25;
      margin-bottom:22px;
      max-width:580px;
    }

    .hero-text h1 span{
      color:var(--pink);
    }

    .hero-text p{
      color:var(--gray);
      line-height:1.9;
      max-width:560px;
      font-size:15px;
      margin-bottom:30px;
    }

    .hero-btn{
      border:none;
      background:var(--pink);
      color:white;
      padding:15px 24px;
      border-radius:999px;
      cursor:pointer;
      font-size:14px;
      font-weight:600;
    }

    .hero-image{
      flex:1;
      min-width:300px;
      display:flex;
      justify-content:flex-end;
    }

    .hero-image img{
      width:100%;
      max-width:420px;
    }

    /* SECTION */

    .section-title{
      font-size:28px;
      margin-bottom:24px;
    }

    /* FEATURE */

    .feature{
      margin-bottom:50px;
    }

    .feature-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
      gap:18px;
    }

    .feature-card{
      background:white;
      padding:28px;
      border-radius:24px;
      border:1px solid #f1f1f1;
      transition:0.3s;
    }

    .feature-card:hover{
      transform:translateY(-5px);
    }

    .feature-icon{
      width:68px;
      height:68px;
      border-radius:20px;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:28px;
      margin-bottom:20px;
    }

    .pink{
      background:#FFE5EC;
      color:var(--pink);
    }

    .green{
      background:#DFF7E2;
      color:#39a855;
    }

    .blue{
      background:#EAF4FF;
      color:#4d8cf0;
    }

    .feature-card h3{
      margin-bottom:12px;
      font-size:20px;
    }

    .feature-card p{
      color:var(--gray);
      line-height:1.8;
      font-size:14px;
    }

    /* INFO */

    .info{
      margin-bottom:50px;
    }

    .info-wrapper{
      background:white;
      border-radius:32px;
      padding:50px;
      border:1px solid #f1f1f1;
    }

    .info-top{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:40px;
      flex-wrap:wrap;
      margin-bottom:35px;
    }

    .info-left{
      flex:1;
      min-width:300px;
    }

    .info-left h2{
      font-size:40px;
      margin-bottom:18px;
      line-height:1.3;
    }

    .info-left p{
      color:var(--gray);
      line-height:1.9;
      font-size:15px;
      max-width:620px;
    }

    .info-image{
      flex:1;
      display:flex;
      justify-content:flex-end;
      min-width:280px;
    }

    .info-image img{
      width:100%;
      max-width:420px;
      border-radius:24px;
      object-fit:cover;
    }

    /* IMPACT */

    .impact-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
      gap:18px;
      margin-top:10px;
    }

    .impact-card{
      background:#fafafa;
      border-radius:24px;
      padding:26px;
      transition:0.3s;
    }

    .impact-card:hover{
      transform:translateY(-5px);
      background:white;
    }

    .impact-icon{
      width:64px;
      height:64px;
      border-radius:18px;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:28px;
      margin-bottom:18px;
    }

    .impact-card h3{
      margin-bottom:10px;
      font-size:20px;
    }

    .impact-card p{
      color:var(--gray);
      line-height:1.8;
      font-size:14px;
    }

    /* SUPPORT */

    .support{
      margin-top:28px;
      background:#fff7f9;
      padding:22px;
      border-radius:24px;
      display:flex;
      justify-content:space-between;
      align-items:center;
      flex-wrap:wrap;
      gap:15px;
    }

    .support-left{
      display:flex;
      align-items:center;
      gap:16px;
    }

    .support-icon{
      width:60px;
      height:60px;
      border-radius:18px;
      background:white;
      display:flex;
      justify-content:center;
      align-items:center;
      color:var(--pink);
      font-size:24px;
    }

    .support-text h4{
      margin-bottom:5px;
      font-size:18px;
    }

    .support-text p{
      color:var(--gray);
      font-size:14px;
    }

    .support-badge{
      background:white;
      color:var(--pink);
      padding:11px 18px;
      border-radius:999px;
      font-size:13px;
      font-weight:600;
    }

    /* NEWS */

    .news{
      margin-bottom:50px;
    }

    .news-grid{
      display:grid;
      grid-template-columns:repeat(auto-fit,minmax(300px,1fr));
      gap:18px;
    }

    .news-card{
      background:white;
      border-radius:24px;
      overflow:hidden;
      border:1px solid #f1f1f1;
      transition:0.3s;
    }

    .news-card:hover{
      transform:translateY(-5px);
    }

    .news-card img{
      width:100%;
      height:210px;
      object-fit:cover;
    }

    .news-content{
      padding:24px;
    }

    .news-badge{
      display:inline-block;
      background:#FFE5EC;
      color:var(--pink);
      padding:7px 14px;
      border-radius:999px;
      font-size:12px;
      font-weight:600;
      margin-bottom:14px;
    }

    .news-content h3{
      font-size:20px;
      line-height:1.5;
      margin-bottom:12px;
    }

    .news-content p{
      color:var(--gray);
      font-size:14px;
      line-height:1.8;
      margin-bottom:18px;
    }

    .news-btn{
      border:none;
      background:var(--pink);
      color:white;
      padding:12px 18px;
      border-radius:999px;
      cursor:pointer;
      font-size:14px;
    }

    /* CTA */

    .cta{
      background:white;
      border-radius:32px;
      padding:60px;
      text-align:center;
      border:1px solid #f1f1f1;
    }

    .cta h2{
      font-size:38px;
      margin-bottom:16px;
    }

    .cta p{
      color:var(--gray);
      max-width:650px;
      margin:auto;
      line-height:1.9;
      margin-bottom:28px;
    }

    .cta button{
      border:none;
      background:var(--pink);
      color:white;
      padding:16px 28px;
      border-radius:999px;
      cursor:pointer;
      font-size:14px;
      font-weight:600;
    }

    /* RESPONSIVE */

    @media(max-width:900px){

      body{
        padding:15px;
      }

      .hero,
      .info-wrapper,
      .cta{
        padding:35px 25px;
      }

      .hero-text h1{
        font-size:38px;
      }

      .info-left h2{
        font-size:32px;
      }

      .cta h2{
        font-size:30px;
      }

      .top{
        flex-direction:column;
        align-items:flex-start;
      }

    }

  </style>

</head>

<body>

<div class="container">

  <!-- TOP -->

  <div class="top">

    <div class="logo">

      <div class="logo-icon">
        <i class="fa-solid fa-heart-circle-check"></i>
      </div>

      <div class="logo-text">
        <h2>Stumind</h2>
        <p>Smart Stunting Monitoring</p>
      </div>

    </div>

    <div class="top-button">

      <button class="login-btn">
        Login
      </button>

      <button class="register-btn">
        Daftar
      </button>

    </div>

  </div>

  <!-- HERO -->

  <section class="hero">

    <div class="hero-text">

      <span class="badge">
        🌱 Platform Edukasi & Monitoring
      </span>

      <h1>
        Tumbuh Kembang Anak <span>Lebih Sehat</span> Bersama Stumind
      </h1>

      <p>
        Stumind membantu orang tua memantau pertumbuhan anak,
        memahami risiko stunting, dan mendapatkan edukasi kesehatan
        dengan tampilan yang sederhana dan mudah dipahami.
      </p>

      <button class="hero-btn">
        Mulai Sekarang
      </button>

    </div>

    <div class="hero-image">

      <img src="https://cdn-icons-png.flaticon.com/512/4140/4140047.png">

    </div>

  </section>

  <!-- FEATURE -->

  <section class="feature">

    <div class="section-title">
      Apa yang Bisa Dilakukan Stumind?
    </div>

    <div class="feature-grid">

      <div class="feature-card">

        <div class="feature-icon pink">
          <i class="fa-solid fa-chart-line"></i>
        </div>

        <h3>Monitoring Anak</h3>

        <p>
          Pantau berat badan, tinggi badan,
          dan perkembangan anak secara rutin.
        </p>

      </div>

      <div class="feature-card">

        <div class="feature-icon green">
          <i class="fa-solid fa-bowl-food"></i>
        </div>

        <h3>Rekomendasi Nutrisi</h3>

        <p>
          Dapatkan rekomendasi makanan sehat
          untuk mendukung tumbuh kembang anak.
        </p>

      </div>

      <div class="feature-card">

        <div class="feature-icon blue">
          <i class="fa-solid fa-book-medical"></i>
        </div>

        <h3>Edukasi Kesehatan</h3>

        <p>
          Pelajari informasi penting tentang
          stunting dan pencegahannya sejak dini.
        </p>

      </div>

    </div>

  </section>

  <!-- INFO -->

  <section class="info">

    <div class="info-wrapper">

      <div class="info-top">

        <div class="info-left">

          <span class="badge">
            ⚠️ Penting Untuk Orang Tua
          </span>

          <h2>
            Kenapa Stunting Harus Dicegah?
          </h2>

          <p>
            Stunting dapat mempengaruhi pertumbuhan fisik,
            perkembangan otak, hingga kesehatan anak dalam
            jangka panjang. Pemantauan sejak dini sangat penting
            agar anak dapat tumbuh optimal.
          </p>

        </div>

        <div class="info-image">

          <img src="https://images.unsplash.com/photo-1522771930-78848d9293e8?q=80&w=1200&auto=format&fit=crop">

        </div>

      </div>

      <div class="impact-grid">

        <div class="impact-card">

          <div class="impact-icon pink">
            🧠
          </div>

          <h3>Perkembangan Otak</h3>

          <p>
            Kekurangan gizi dapat mempengaruhi
            kemampuan belajar dan perkembangan anak.
          </p>

        </div>

        <div class="impact-card">

          <div class="impact-icon green">
            💪
          </div>

          <h3>Daya Tahan Tubuh</h3>

          <p>
            Anak lebih rentan sakit jika kebutuhan
            nutrisi tidak terpenuhi dengan baik.
          </p>

        </div>

        <div class="impact-card">

          <div class="impact-icon blue">
            📈
          </div>

          <h3>Pertumbuhan Fisik</h3>

          <p>
            Tinggi dan berat badan anak dapat
            terhambat akibat kekurangan gizi.
          </p>

        </div>

      </div>

      <div class="support">

        <div class="support-left">

          <div class="support-icon">
            <i class="fa-solid fa-building-columns"></i>
          </div>

          <div class="support-text">

            <h4>Mendukung Program Pencegahan Stunting</h4>

            <p>
              Edukasi digital untuk membantu orang tua memahami kesehatan anak.
            </p>

          </div>

        </div>

        <div class="support-badge">
          🇮🇩 Indonesia Sehat
        </div>

      </div>

    </div>

  </section>

  <!-- NEWS -->

  <section class="news">

    <div class="section-title">
      Berita & Edukasi
    </div>

    <div class="news-grid">

      <div class="news-card">

        <img src="https://images.unsplash.com/photo-1516589091380-5d8e87df6999?q=80&w=1200&auto=format&fit=crop">

        <div class="news-content">

          <span class="news-badge">
            Edukasi
          </span>

          <h3>
            Pentingnya Pencegahan Stunting Sejak Dini
          </h3>

          <p>
            Pemeriksaan rutin dan nutrisi seimbang membantu anak tumbuh sehat.
          </p>

          <button class="news-btn">
            Baca Selengkapnya
          </button>

        </div>

      </div>

      <div class="news-card">

        <img src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?q=80&w=1200&auto=format&fit=crop">

        <div class="news-content">

          <span class="news-badge">
            Nutrisi
          </span>

          <h3>
            Nutrisi Penting Untuk Tumbuh Kembang Anak
          </h3>

          <p>
            Protein dan vitamin membantu meningkatkan kesehatan anak setiap hari.
          </p>

          <button class="news-btn">
            Baca Selengkapnya
          </button>

        </div>

      </div>

      <div class="news-card">

        <img src="https://images.unsplash.com/photo-1526256262350-7da7584cf5eb?q=80&w=1200&auto=format&fit=crop">

        <div class="news-content">

          <span class="news-badge">
            Nasional
          </span>

          <h3>
            Edukasi Orang Tua Jadi Fokus Pencegahan
          </h3>

          <p>
            Monitoring tumbuh kembang anak menjadi langkah penting pencegahan stunting.
          </p>

          <button class="news-btn">
            Baca Selengkapnya
          </button>

        </div>

      </div>

    </div>

  </section>

  <!-- CTA -->

  <section class="cta">

    <h2>
      Yuk Mulai Pantau Tumbuh Kembang Anak
    </h2>

    <p>
      Bergabung bersama Stumind dan bantu si kecil tumbuh sehat,
      aktif, dan bebas stunting dengan monitoring yang lebih mudah.
    </p>

    <button>
      Login / Daftar Sekarang
    </button>

  </section>

</div>

</body>
</html>