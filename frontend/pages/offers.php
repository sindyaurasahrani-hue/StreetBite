<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Street Bite</title>

<style>
/* ===== GLOBAL ===== */
body{
  margin:0;
  font-family:Arial, sans-serif;
  background:#fff;
  color:#333;
}

/* ===== NAVBAR ===== */
.navbar{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:20px 50px;
  background:#ffedf0;
  box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

.logo{
  font-size:28px;
  font-weight:bold;
  color:crimson;
  letter-spacing:1px;
}

.navbar ul{
  list-style:none;
  display:flex;
  gap:20px;
}

.navbar ul li{
  cursor:pointer;
  font-weight:500;
}

.navbar button{
  background:pink;
  border:none;
  padding:10px 18px;
  border-radius:12px;
  cursor:pointer;
}

/* ===== SECTION OFFERS ===== */
.offers{
  padding:50px;
  background:#fff5f5;
}

.offers-header{
  display:flex;
  justify-content:space-between;
  align-items:center;
}

.offers-header h2{
  font-size:35px;
}

.offers-header button{
  background:pink;
  border:none;
  padding:12px 20px;
  border-radius:15px;
  cursor:pointer;
}

.subtitle{
  margin:10px 0 30px;
  color:gray;
}

/* GRID */
.offers-grid{
  display:grid;
  grid-template-columns:2fr 1fr 1fr;
  gap:20px;
}

/* BIG CARD */
.offer-big{
  background:white;
  border-radius:30px;
  padding:25px;
  display:flex;
  align-items:center;
  justify-content:space-between;
  gap:20px;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.offer-big img{
  width:350px;
  height:250px;
  object-fit:cover;
  border-radius:25px;
}

.offer-text h3{
  font-size:35px;
  margin:15px 0;
}

.offer-text p{
  margin-bottom:15px;
}

.offer-text h4{
  color:crimson;
  font-size:25px;
}

.badge{
  background:#ffd6e0;
  color:crimson;
  padding:8px 15px;
  border-radius:20px;
  font-size:13px;
}

/* SMALL CARD */
.offer-small{
  background:white;
  border-radius:25px;
  overflow:hidden;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.offer-small img{
  width:100%;
  height:180px;
  object-fit:cover;
}

.small-content{
  padding:20px;
}

.small-content h4{
  color:crimson;
  margin-top:10px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
  <div class="logo">Street Bite</div>

  <ul>
    <li>Home</li>
    <li>Menu</li>
    <li>Promo</li>
    <li>Contact</li>
  </ul>

  <button>Order Now</button>
</div>

<!-- OFFERS -->
<section class="offers">

  <div class="offers-header">
    <h2>Penawaran Aktif 🔥</h2>
    <button>Lihat Semua</button>
  </div>

  <p class="subtitle">
    Nikmati menu favorit pilihan untuk kamu 💗
  </p>

  <div class="offers-grid">

    <!-- BIG -->
    <div class="offer-big">

      <div class="offer-text">
        <span class="badge">BEST SELLER</span>
        <h3>Mie Jebew Original 🌶️</h3>
        <p>Mie pedas gurih dengan topping melimpah dan level pedas bikin nagih 😭</p>
        <h4>Rp 15.000</h4>
      </div>

      <img src="https://images.unsplash.com/photo-1612929633738-8fe44f7ec841?q=80&w=1200" alt="">
    </div>

    <!-- SMALL -->
    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>🍢 Sempolan</h3>
        <p>Kenyal gurih cocok buat ngemil</p>
        <h4>Rp 10.000</h4>
      </div>
    </div>

    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1563245372-f21724e3856d?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>🥟 Wonton</h3>
        <p>Isi ayam lembut dan gurih</p>
        <h4>Rp 13.000</h4>
      </div>
    </div>

    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>🧀 Cireng Keju</h3>
        <p>Lumer kejunya bikin salting 💗</p>
        <h4>Rp 12.000</h4>
      </div>
    </div>

    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>🍥 Cireng Ayam</h3>
        <p>Cireng isi ayam gurih dan crispy 😭</p>
        <h4>Rp 14.000</h4>
      </div>
    </div>

    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1499636136210-6f4ee915583e?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>🧋 Es Teh</h3>
        <p>Segerrr buat nemenin pedes 🌶️</p>
        <h4>Rp 5.000</h4>
      </div>
    </div>

    <div class="offer-small">
      <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?q=80&w=1000" alt="">
      <div class="small-content">
        <h3>☕ Es Kopi</h3>
        <p>Manis pahitnya pas banget ✨</p>
        <h4>Rp 8.000</h4>
      </div>
    </div>

  </div>

</section>

</body>
</html>