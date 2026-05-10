<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Street Bite - Location</title>

<style>
body{
  margin:0;
  font-family:Arial, sans-serif;
  background:#fff5f5;
  color:#333;
}

/* NAVBAR */
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
}

.navbar a{
  text-decoration:none;
  color:#333;
  margin:0 10px;
}

/* HEADER */
.header{
  text-align:center;
  padding:50px 20px 20px;
}

.header h1{
  font-size:40px;
  color:crimson;
}

.header p{
  color:gray;
  margin-top:10px;
}

/* LAYOUT */
.container{
  display:flex;
  justify-content:center;
  gap:30px;
  padding:40px;
  flex-wrap:wrap;
}

/* CARD INFO */
.card{
  background:white;
  padding:25px;
  border-radius:25px;
  width:300px;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.card h3{
  color:crimson;
  margin-bottom:10px;
}

.card p{
  margin:5px 0;
  color:#555;
}

/* MAP */
.map{
  flex:1;
  min-width:300px;
  max-width:600px;
  border-radius:25px;
  overflow:hidden;
  box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

iframe{
  width:100%;
  height:100%;
  min-height:350px;
  border:0;
}

/* FOOTER */
.footer{
  text-align:center;
  padding:20px;
  margin-top:30px;
  color:gray;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
  <div class="logo">Street Bite</div>
  <div>
    <a href="#">Home</a>
    <a href="#">Menu</a>
    <a href="#">Location</a>
  </div>
</div>

<!-- HEADER -->
<div class="header">
  <h1>📍 Lokasi Kami</h1>
  <p>Datang langsung ke Street Bite, atau pesan online juga bisa 💗</p>
</div>

<!-- CONTENT -->
<div class="container">

  <!-- INFO -->
  <div class="card">
    <h3>Street Bite Outlet</h3>
    <p>📍 Desa Dukuhjati Wetan</p>
    <p>🕒 10.00 - 22.00 WIB</p>
    <p>📞 08985501819</p>
    <p>💗 Open setiap hari</p>
  </div>

  <!-- MAP -->
  <div class="map">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31659.886!2d109.675!3d-6.888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1"
      allowfullscreen=""
      loading="lazy">
    </iframe>
  </div>

</div>

<div class="footer">
  © 2026 Street Bite • 
</div>

</body>
</html>