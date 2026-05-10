<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Registrasi</title>

  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family: Arial, sans-serif;
    }

    body{
      background: linear-gradient(to right, #ff9966, #ff5e62);
      height:100vh;
      display:flex;
      justify-content:center;
      align-items:center;
    }

    .container{
      width:850px;
      height:500px;
      background:white;
      border-radius:20px;
      overflow:hidden;
      display:flex;
      box-shadow:0 10px 25px rgba(0,0,0,0.3);
    }

    .left{
      width:50%;
      background:#fff3e6;
      display:flex;
      flex-direction:column;
      justify-content:center;
      align-items:center;
      padding:20px;
    }

    .left img{
      width:300px;
      border-radius:20px;
    }

    .left h1{
      margin-top:20px;
      color:#ff5e62;
    }

    .right{
      width:50%;
      padding:40px;
      overflow-y:auto;
    }

    h2{
      text-align:center;
      margin-bottom:20px;
      color:#ff5e62;
    }

    form{
      margin-bottom:30px;
    }

    input{
      width:100%;
      padding:12px;
      margin:10px 0;
      border:1px solid #ccc;
      border-radius:10px;
    }

    button{
      width:100%;
      padding:12px;
      border:none;
      border-radius:10px;
      background:#ff5e62;
      color:white;
      font-size:16px;
      cursor:pointer;
      transition:0.3s;
    }

    button:hover{
      background:#e14b50;
    }

    p{
      text-align:center;
      margin-top:10px;
      font-size:14px;
    }
  </style>
</head>

<body>

  <div class="container">

    <!-- Bagian Gambar -->
    <div class="left">
      <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836"
           alt="Makanan">
      <h1>Food App</h1>
    </div>

    <!-- Bagian Form -->
    <div class="right">

      <!-- Form Login -->
      <h2>Login</h2>
      <form>
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>

      <!-- Form Registrasi -->
      <h2>Registrasi</h2>
      <form>
        <input type="text" placeholder="Nama Lengkap" required>
        <input type="email" placeholder="Email" required>
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
      </form>

    </div>

  </div>

</body>
</html>