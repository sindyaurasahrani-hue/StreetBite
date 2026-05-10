<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StreetBite - Menu Detail</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins', sans-serif;
        }

        body{
            background:#fff7f7;
            color:#222;
        }

        /* NAVBAR */

        nav{
            width:100%;
            padding:18px 8%;
            background:white;
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
        }

        .logo{
            font-size:28px;
            font-weight:700;
            color:#e63946;
        }

        .nav-links{
            display:flex;
            gap:25px;
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
            color:#e63946;
            font-size:20px;
        }

        /* DETAIL */

        .detail-container{
            padding:50px 8%;
        }

        .back-btn{
            text-decoration:none;
            color:#555;
            font-weight:500;
            margin-bottom:30px;
            display:inline-block;
        }

        .detail-box{
            display:flex;
            gap:50px;
            background:white;
            padding:35px;
            border-radius:25px;
            box-shadow:0 10px 25px rgba(0,0,0,0.08);
            flex-wrap:wrap;
        }

        .detail-image{
            flex:1;
        }

        .detail-image img{
            width:100%;
            border-radius:20px;
            object-fit:cover;
        }

        .detail-content{
            flex:1;
        }

        .tag-group{
            display:flex;
            gap:10px;
            margin-bottom:20px;
        }

        .tag{
            padding:8px 14px;
            border-radius:20px;
            font-size:13px;
            font-weight:600;
            color:white;
        }

        .red{
            background:#e63946;
        }

        .blue{
            background:#219ebc;
        }

        .detail-content h1{
            font-size:48px;
            margin-bottom:10px;
        }

        .price{
            color:#e63946;
            font-size:32px;
            font-weight:700;
            margin-bottom:20px;
        }

        .description{
            color:#555;
            line-height:1.8;
            margin-bottom:25px;
        }

        .ingredient-box{
            background:#fff1f1;
            padding:20px;
            border-radius:18px;
            margin-bottom:25px;
        }

        .ingredient-box h3{
            margin-bottom:10px;
            color:#333;
        }

        .ingredient-box p{
            color:#666;
            line-height:1.7;
        }

        .quantity-section{
            display:flex;
            align-items:center;
            gap:20px;
            margin-top:25px;
        }

        .quantity-box{
            display:flex;
            align-items:center;
            border:1px solid #ddd;
            border-radius:12px;
            overflow:hidden;
        }

        .quantity-box button{
            width:40px;
            height:40px;
            border:none;
            background:white;
            cursor:pointer;
            font-size:18px;
        }

        .quantity-box span{
            padding:0 20px;
            font-weight:600;
        }

        .add-cart{
            background:#e63946;
            color:white;
            border:none;
            padding:14px 28px;
            border-radius:12px;
            font-weight:600;
            cursor:pointer;
            transition:0.3s;
        }

        .add-cart:hover{
            background:#c1121f;
        }

        /* RECOMMENDATION */

        .recommendation{
            padding:70px 8%;
        }

        .recommendation h2{
            margin-bottom:30px;
            font-size:32px;
        }

        .recommend-cards{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
            gap:25px;
        }

        .recommend-card{
            background:white;
            border-radius:20px;
            overflow:hidden;
            box-shadow:0 10px 20px rgba(0,0,0,0.07);
            transition:0.3s;
        }

        .recommend-card:hover{
            transform:translateY(-6px);
        }

        .recommend-card img{
            width:100%;
            height:180px;
            object-fit:cover;
        }

        .recommend-content{
            padding:18px;
        }

        .recommend-content h3{
            margin-bottom:8px;
        }

        .recommend-content p{
            color:#666;
            font-size:14px;
            margin-bottom:10px;
        }

        .recommend-footer{
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .recommend-footer span{
            color:#e63946;
            font-weight:700;
        }

        .plus-btn{
            width:30px;
            height:30px;
            border:none;
            border-radius:50%;
            background:#ffe5e5;
            color:#e63946;
            font-size:18px;
            cursor:pointer;
        }

        footer{
            background:#111;
            color:white;
            text-align:center;
            padding:30px;
            margin-top:50px;
        }

        @media(max-width:900px){

            .detail-box{
                flex-direction:column;
            }

            .detail-content h1{
                font-size:38px;
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
            <a href="#">Offers</a>
            <a href="#">Locations</a>
        </div>

        <div class="nav-icons">
            🛒
            👤
        </div>

    </nav>

    <!-- DETAIL -->

    <section class="detail-container">

        <a href="#" class="back-btn">← Back to Menu</a>

        <div class="detail-box">

            <div class="detail-image">
                <img src="https://i.pinimg.com/736x/36/2f/e0/362fe0dcf7e8a847d68d33dfc2d4b9d4.jpg">
            </div>

            <div class="detail-content">

                <div class="tag-group">
                    <div class="tag red">🌶 Spicy</div>
                    <div class="tag blue">Chef's Pick</div>
                </div>

                <h1>Mie Jebew Lava</h1>

                <div class="price">Rp 15.000</div>

                <p class="description">
                    Mie pedas dengan bumbu khas StreetBite,
                    topping lengkap,
                    level pedas ekstrem,
                    dan rasa gurih yang bikin nagih di setiap gigitan.
                </p>

                <div class="ingredient-box">

                    <h3>Ingredients</h3>

                    <p>
                        Mie, cabai pilihan, bawang,
                        telur, sosis, bakso,
                        daun bawang,
                        dan bumbu rahasia StreetBite.
                    </p>

                </div>

                <div class="quantity-section">

                    <div class="quantity-box">
                        <button>-</button>
                        <span>1</span>
                        <button>+</button>
                    </div>

                    <button class="add-cart">
                        🛒 Add to Cart
                    </button>

                </div>

            </div>

        </div>

    </section>

    <!-- RECOMMENDATION -->

    <section class="recommendation">

        <h2>Complete Your Order</h2>

        <div class="recommend-cards">

            <div class="recommend-card">

                <img src="https://i.pinimg.com/736x/49/5e/84/495e84fb4c7e0bb43b0b88d87b3efc3e.jpg">

                <div class="recommend-content">

                    <h3>Wonton Crispy</h3>

                    <p>Renyah, gurih, dan cocok jadi side dish.</p>

                    <div class="recommend-footer">
                        <span>Rp 12.000</span>
                        <button class="plus-btn">+</button>
                    </div>

                </div>

            </div>

            <div class="recommend-card">

                <img src="https://i.pinimg.com/736x/58/0c/67/580c6757d9f9dbefbe3fcdeec95bf2d3.jpg">

                <div class="recommend-content">

                    <h3>Sempol Ayam</h3>

                    <p>Street food favorit dengan saus spesial.</p>

                    <div class="recommend-footer">
                        <span>Rp 10.000</span>
                        <button class="plus-btn">+</button>
                    </div>

                </div>

            </div>

            <div class="recommend-card">

                <img src="https://i.pinimg.com/736x/62/1b/48/621b48e20a338d2d80c857ee6c4b0fcf.jpg">

                <div class="recommend-content">

                    <h3>Es Kopi Susu</h3>

                    <p>Fresh coffee creamy untuk teman makan.</p>

                    <div class="recommend-footer">
                        <span>Rp 14.000</span>
                        <button class="plus-btn">+</button>
                    </div>

                </div>

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