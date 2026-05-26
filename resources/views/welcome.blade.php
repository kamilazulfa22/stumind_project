{{-- <!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Stumind</title>

  <link rel="icon" type="image/png"
  href="{{ asset('img/image.png') }}">

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

    .impact-point{
      display:flex;
      flex-direction:column;
      gap:18px;
      margin-top:20px;
    }

    .impact-item{
      display:flex;
      align-items:flex-start;
      gap:18px;
      background:#fff7f9;
      padding:20px 24px;
      border-radius:20px;
    }

    .impact-emoji{
      width:60px;
      height:60px;
      border-radius:18px;
      background:white;
      display:flex;
      justify-content:center;
      align-items:center;
      font-size:28px;
      flex-shrink:0;
    }

    .impact-emoji i{
      color:#ff7fa1;
      font-size:26px;
    }

    .impact-item h3{
      font-size:22px;
      margin-bottom:6px;
    }

    .impact-item p{
      color:#6d6d6d;
      line-height:1.8;
      margin:0;
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

      <img src="img/mother.png">

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

          <img src="img/stunting anak.jpg">

        </div>

      </div>

      <div class="impact-point">

        <div class="impact-item">
          <span class="impact-emoji">
              <i class="fa-solid fa-brain"></i>
          </span>
          <div>
            <h3>Perkembangan Otak</h3>
            <p>
              Kekurangan gizi dapat mempengaruhi
              kemampuan belajar dan perkembangan anak.
            </p>
          </div>
        </div>

        <div class="impact-item">
          <span class="impact-emoji">
            <i class="fa-solid fa-shield-heart"></i>
          </span>
          <div>
            <h3>Daya Tahan Tubuh</h3>
            <p>
              Anak lebih rentan sakit jika kebutuhan
              nutrisi tidak terpenuhi dengan baik.
            </p>
          </div>
        </div>

        <div class="impact-item">
          <span class="impact-emoji">
          <i class="fa-solid fa-chart-line"></i>
        </span>
          <div>
            <h3>Pertumbuhan Fisik</h3>
            <p>
              Tinggi dan berat badan anak dapat
              terhambat akibat kekurangan gizi.
            </p>
          </div>
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
</html> --}}

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Stumind</title>

<link rel="icon" type="image/png"
href="{{ asset('img/image.png') }}">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
    --pink2:#ff5c8d;
    --soft:#fff6f8;
    --dark:#2c2c2c;
    --gray:#747474;
}

body{
    background:
    radial-gradient(circle at top left,#ffdce7 0%,transparent 30%),
    radial-gradient(circle at bottom right,#ffe9f0 0%,transparent 30%),
    #fff;
    min-height:100vh;
    color:var(--dark);
}

.container{
    width:90%;
    max-width:1250px;
    margin:auto;
}

/* NAVBAR */

.navbar{
    padding:28px 0;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.logo{
    display:flex;
    align-items:center;
    gap:14px;
}

.logo-icon{
    width:58px;
    height:58px;
    border-radius:20px;
    background:linear-gradient(135deg,#ff9ab6,#ff6e99);
    display:flex;
    justify-content:center;
    align-items:center;
    color:white;
    font-size:24px;
    box-shadow:0 10px 25px rgba(255,127,161,.25);
}

.logo h2{
    color:var(--pink2);
    font-size:28px;
}

.logo p{
    font-size:13px;
    color:#888;
}

.nav-btn{
    display:flex;
    gap:12px;
}

.btn-login,
.btn-register{
    border:none;
    padding:13px 22px;
    border-radius:999px;
    cursor:pointer;
    font-weight:600;
    transition:.3s;
}

.btn-login{
    background:white;
    border:1px solid #eee;
}

.btn-register{
    background:linear-gradient(135deg,var(--pink),var(--pink2));
    color:white;
    box-shadow:0 10px 20px rgba(255,127,161,.25);
}

.btn-login:hover,
.btn-register:hover{
    transform:translateY(-3px);
}

/* HERO */

.hero{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:60px;
    padding:40px 0 70px;
    flex-wrap:wrap;
}

.hero-text{
    flex:1;
    min-width:320px;
}

.badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    background:#ffe7ee;
    color:var(--pink2);
    padding:10px 18px;
    border-radius:999px;
    font-size:13px;
    font-weight:600;
    margin-bottom:24px;
}

.hero-text h1{
    font-size:58px;
    line-height:1.2;
    margin-bottom:20px;
    font-weight:800;
}

.hero-text span{
    color:var(--pink2);
}

.hero-text p{
    color:var(--gray);
    line-height:1.9;
    font-size:16px;
    max-width:560px;
    margin-bottom:30px;
}

.hero-btn{
    display:flex;
    gap:15px;
    flex-wrap:wrap;
}

.btn-start{
    background:linear-gradient(135deg,var(--pink),var(--pink2));
    border:none;
    color:white;
    padding:16px 28px;
    border-radius:999px;
    cursor:pointer;
    font-weight:600;
    box-shadow:0 15px 30px rgba(255,127,161,.3);
}

.btn-learn{
    border:none;
    background:white;
    padding:16px 24px;
    border-radius:999px;
    cursor:pointer;
    border:1px solid #eee;
}

.hero-image{
    flex:1;
    min-width:320px;
    display:flex;
    justify-content:center;
}

.hero-image img{
    width:100%;
    max-width:500px;
    animation:float 4s ease-in-out infinite;
}

@keyframes float{
    50%{
        transform:translateY(-10px);
    }
}

/* FEATURES */

.feature{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
    gap:22px;
    margin-bottom:60px;
}

.card{
    background:rgba(255,255,255,.7);
    backdrop-filter:blur(20px);
    padding:30px;
    border-radius:32px;
    border:1px solid rgba(255,255,255,.4);
    box-shadow:0 15px 35px rgba(255,192,203,.18);
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.icon{
    width:70px;
    height:70px;
    border-radius:22px;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:28px;
    margin-bottom:20px;
    background:#ffe4ec;
    color:var(--pink2);
}

.card h3{
    margin-bottom:10px;
}

.card p{
    color:var(--gray);
    line-height:1.8;
    font-size:14px;
}

/* AI SECTION */

.ai-box{
    background:
    linear-gradient(135deg,#ff7fa1,#ff5c8d);
    border-radius:40px;
    padding:50px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:white;
    margin-bottom:70px;
    flex-wrap:wrap;
    gap:30px;
    box-shadow:0 20px 40px rgba(255,127,161,.35);
}

.ai-text{
    flex:1;
    min-width:300px;
}

.ai-text span{
    background:rgba(255,255,255,.2);
    padding:10px 18px;
    border-radius:999px;
    display:inline-block;
    margin-bottom:20px;
}

.ai-text h2{
    font-size:42px;
    margin-bottom:15px;
}

.ai-text p{
    line-height:1.8;
    opacity:.95;
}

.ai-btn{
    background:white;
    color:var(--pink2);
    border:none;
    padding:16px 28px;
    border-radius:999px;
    font-weight:700;
    cursor:pointer;
    margin-top:25px;
}

.ai-icon{
    width:170px;
    height:170px;
    border-radius:50%;
    background:rgba(255,255,255,.15);
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:70px;
}

/* CTA */

.cta{
    text-align:center;
    padding-bottom:70px;
}

.cta h2{
    font-size:40px;
    margin-bottom:15px;
}

.cta p{
    color:var(--gray);
    margin-bottom:25px;
}

.cta button{
    background:linear-gradient(135deg,var(--pink),var(--pink2));
    border:none;
    color:white;
    padding:17px 30px;
    border-radius:999px;
    cursor:pointer;
    font-weight:600;
    box-shadow:0 15px 30px rgba(255,127,161,.3);
}

/* RESPONSIVE */

@media(max-width:768px){

.hero-text h1{
    font-size:42px;
}

.ai-text h2{
    font-size:32px;
}

.navbar{
    flex-direction:column;
    gap:20px;
}

}

</style>
</head>

<body>

<div class="container">

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-heart-pulse"></i>
            </div>

            <div>
                <h2>Stumind</h2>
                <p>Smart Stunting Monitoring</p>
            </div>
        </div>

        <div class="nav-btn">
            <button class="btn-login">
                Login
            </button>

            <button class="btn-register">
                Daftar
            </button>
        </div>

    </div>

    <!-- HERO -->
    <section class="hero">

        <div class="hero-text">

            <div class="badge">
                Smart Parenting & Stunting Care
            </div>

            <h1>
                Pantau Tumbuh Kembang Anak
                <span>Lebih Mudah</span>
            </h1>

            <p>
                Stumind membantu orang tua memantau pertumbuhan anak,
                mendapatkan edukasi kesehatan, nutrisi, dan konsultasi AI
                untuk mencegah stunting sejak dini.
            </p>

            <div class="hero-btn">
                <button class="btn-start">
                    Mulai Sekarang
                </button>

                <button class="btn-learn">
                    Pelajari Dulu
                </button>
            </div>

        </div>

        <div class="hero-image">
            <img src="{{ asset('img/mother-day.png') }}">
        </div>

    </section>

    <!-- FEATURE -->
    <section class="feature">

        <div class="card">
            <div class="icon">
                <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3>Monitoring Anak</h3>
            <p>Pantau berat badan, tinggi badan dan tumbuh kembang anak dengan mudah.</p>
        </div>

        <div class="card">
            <div class="icon">
                <i class="fa-solid fa-bowl-food"></i>
            </div>
            <h3>Nutrisi Sehat</h3>
            <p>Rekomendasi makanan sehat sesuai kebutuhan pertumbuhan anak.</p>
        </div>

        <div class="card">
            <div class="icon">
                <i class="fa-solid fa-book-medical"></i>
            </div>
            <h3>Edukasi Stunting</h3>
            <p>Informasi kesehatan terpercaya untuk orang tua.</p>
        </div>

    </section>

    <!-- AI -->
    <section class="ai-box">

        <div class="ai-text">

            <span>✨ AI Stumind Assistant</span>

            <h2>Tanya AI Tentang Gizi & Stunting Anak</h2>

            <p>
                Bingung soal nutrisi anak? AI Stumind siap membantu
                memberikan edukasi cepat dan mudah dipahami orang tua.
            </p>

            <button class="ai-btn">
                Coba AI Sekarang
            </button>

        </div>

        <div class="ai-icon">
            🤖
        </div>

    </section>

    <!-- CTA -->
    <section class="cta">

        <h2>Yuk Mulai Bersama Stumind </h2>

        <p>
            Bantu si kecil tumbuh sehat, aktif, dan bebas stunting.
        </p>

        <button>
            Login / Daftar Sekarang
        </button>

    </section>

</div>

</body>
</html>