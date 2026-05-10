<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetBite</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#fff5f5;
            color:#222;
        }

        /* NAVBAR */

        nav{
            width:100%;
            padding:18px 8%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            background:white;
            position:sticky;
            top:0;
            z-index:1000;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#e63946;
        }

        .nav-links{
            display:flex;
            gap:30px;
        }

        .nav-links a{
            text-decoration:none;
            color:#333;
            font-weight:500;
            transition:0.3s;
        }

        .nav-links a:hover{
            color:#e63946;
        }

        .nav-icons{
            display:flex;
            gap:15px;
            font-size:20px;
            color:#e63946;
            cursor:pointer;
        }

        /* HERO SECTION */

        .hero{
            width:100%;
            min-height:90vh;
            display:flex;
            align-items:center;
            justify-content:space-between;
            padding:0 8%;
            background:
            linear-gradient(to right, rgba(255,255,255,0.95), rgba(255,255,255,0.2)),
            url('https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=1974&auto=format&fit=crop');
            background-size:cover;
            background-position:center;
        }

        .hero-text{
            max-width:550px;
        }

        .hero-text span{
            background:#ffd6d6;
            color:#e63946;
            padding:8px 18px;
            border-radius:30px;
            font-size:14px;
            font-weight:600;
        }

        .hero-text h1{
            font-size:65px;
            line-height:1.1;
            margin:25px 0;
            color:#111;
        }

        .hero-text h1 strong{
            color:#e63946;
        }

        .hero-text p{
            color:#555;
            margin-bottom:30px;
            line-height:1.7;
        }

        .hero-buttons{
            display:flex;
            gap:15px;
        }

        .btn{
            padding:14px 28px;
            border:none;
            border-radius:40px;
            cursor:pointer;
            font-weight:600;
            transition:0.3s;
        }

        .btn-primary{
            background:#e63946;
            color:white;
        }

        .btn-primary:hover{
            background:#c1121f;
            transform:translateY(-3px);
        }

        .btn-secondary{
            background:white;
            color:#e63946;
            border:2px solid #e63946;
        }

        .btn-secondary:hover{
            background:#e63946;
            color:white;
        }

        /* CATEGORY */

        .categories{
            padding:80px 8%;
        }

        .section-title{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:35px;
        }

        .section-title h2{
            font-size:35px;
        }

        .cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:25px;
        }

        .card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 20px rgba(0,0,0,0.08);
            transition:0.3s;
        }

        .card:hover{
            transform:translateY(-8px);
        }

        .card img{
            width:100%;
            height:220px;
            object-fit:cover;
        }

        .card-content{
            padding:20px;
        }

        .card-content h3{
            margin-bottom:8px;
            color:#111;
        }

        .price{
            color:#e63946;
            font-weight:700;
        }

        /* FEATURED */

        .featured{
            padding:40px 8% 100px;
        }

        .featured-box{
            background:white;
            border-radius:30px;
            display:flex;
            flex-wrap:wrap;
            align-items:center;
            gap:40px;
            padding:40px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
        }

        .featured-box img{
            width:400px;
            border-radius:25px;
        }

        .featured-text{
            flex:1;
        }

        .featured-text span{
            color:#e63946;
            font-weight:600;
        }

        .featured-text h2{
            font-size:45px;
            margin:15px 0;
        }

        .featured-text p{
            color:#555;
            line-height:1.8;
            margin-bottom:25px;
        }

        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:30px;
        }

        @media(max-width:900px){

            .hero{
                flex-direction:column;
                justify-content:center;
                text-align:center;
                padding-top:80px;
            }

            .hero-text h1{
                font-size:48px;
            }

            .hero-buttons{
                justify-content:center;
            }

            .featured-box{
                flex-direction:column;
            }

            .featured-box img{
                width:100%;
            }

            .nav-links{
                display:none;
            }

        }

    </style>
</head>
<body>

    <!-- NAVBAR -->

    <nav>

        <div class="logo">StreetBite</div>

        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Cart</a>
            <a href="#">Offers</a>
            <a href="#">Location</a>
            <a href="#">Contact</a>
            <a href="#">Login</a>
            <a href="#">Admin Dashboard</a>
        </div>

        <div class="nav-icons">
            🛒
            👤
        </div>

    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="hero-text">

            <span>🔥 Street Food Favorite</span>

            <h1>
                Bold Flavor, <br>
                <strong>Urban Speed.</strong>
            </h1>

            <p>
                Nikmati wonton crispy, mie jebew pedas,
                sempol gurih, cireng renyah,
                dan minuman segar favoritmu hanya di StreetBite.
            </p>

            <div class="hero-buttons">
                <button class="btn btn-primary">Order Now</button>
                <button class="btn btn-secondary">View Menu</button>
            </div>

        </div>

    </section>

    <!-- CATEGORY -->

    <section class="categories">

        <div class="section-title">
            <h2>Popular Menu</h2>
        </div>

        <div class="cards">

            <div class="card">
                <img src="https://i.pinimg.com/736x/49/5e/84/495e84fb4c7e0bb43b0b88d87b3efc3e.jpg">
                <div class="card-content">
                    <h3>Wonton Crispy</h3>
                    <p class="price">Rp 12.000</p>
                </div>
            </div>

            <div class="card">
                <img src="https://i.pinimg.com/736x/36/2f/e0/362fe0dcf7e8a847d68d33dfc2d4b9d4.jpg">
                <div class="card-content">
                    <h3>Mie Jebew</h3>
                    <p class="price">Rp 15.000</p>
                </div>
            </div>

            <div class="card">
                <img src="https://i.pinimg.com/736x/58/0c/67/580c6757d9f9dbefbe3fcdeec95bf2d3.jpg">
                <div class="card-content">
                    <h3>Sempol Ayam</h3>
                    <p class="price">Rp 10.000</p>
                </div>
            </div>

            <div class="card">
                <img src="https://i.pinimg.com/736x/62/1b/48/621b48e20a338d2d80c857ee6c4b0fcf.jpg">
                <div class="card-content">
                    <h3>Es Kopi Susu</h3>
                    <p class="price">Rp 14.000</p>
                </div>
            </div>

        </div>

    </section>

    <!-- FEATURED -->

    <section class="featured">

        <div class="featured-box">

            <img src="https://i.pinimg.com/736x/1b/ff/3e/1bff3e7df857bc03e1dc56f9885b36d7.jpg">

            <div class="featured-text">

                <span>🌶️ TODAY'S FAVORITE</span>

                <h2>Mie Jebew Lava</h2>

                <p>
                    Perpaduan mie pedas gurih dengan topping lengkap,
                    level pedas ekstrem,
                    dan bumbu khas StreetBite yang bikin nagih.
                </p>

                <button class="btn btn-primary">
                    Add To Cart
                </button>

            </div>

        </div>

    </section>

    <!-- FOOTER -->

    <footer>

        <h3>StreetBite</h3>
        <p>Bold Flavor. Urban Speed.</p>

    </footer>

</body>
</html>