<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxyl Reed Diffusere</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #8b5f4d;
            --secondary: #d4b8a7;
            --accent: #c48f65;
            --dark: #3a2e26;
            --light: #f8f4f1;
            --text: #333333;
            --text-light: #777777;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
        }

        /* Header & Navigation */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.05);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 1px;
            text-decoration: none;
        }

        .logo span {
            color: var(--accent);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        nav ul {
            display: flex;
            list-style: none;
            margin: 0;
        }

        nav ul li {
            margin-left: 30px;
            position: relative;
        }

        nav ul li a {
            color: var(--dark);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: color 0.3s;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--accent);
        }

        nav ul li a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--accent);
            bottom: -5px;
            left: 0;
            transition: width 0.3s;
        }

        nav ul li a:hover::after {
            width: 100%;
        }

        /* User Section */
        .user-section {
            display: flex;
            align-items: center;
            gap: 15px;
            padding-left: 30px;
            border-left: 2px solid #e0e0e0;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--dark);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .user-info i {
            color: var(--accent);
            font-size: 1.1rem;
        }

        .btn-logout {
            background-color: var(--accent);
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.85rem;
            transition: all 0.3s;
            border: 2px solid var(--accent);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-logout:hover {
            background-color: transparent;
            color: var(--accent);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(139, 95, 77, 0.2);
        }

        .btn-logout i {
            font-size: 0.9rem;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 10%;
            margin-top: -80px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 60%;
            height: 100%;
            background: linear-gradient(135deg, var(--secondary), var(--light));
            z-index: -1;
            clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
        }

        .hero-content {
            width: 50%;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 30px;
            max-width: 500px;
        }

        .btn {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 12px 30px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s;
            border: 2px solid var(--accent);
        }

        .btn:hover {
            background-color: transparent;
            color: var(--accent);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--accent);
            margin-left: 15px;
        }

        .btn-outline:hover {
            background-color: var(--accent);
            color: white;
        }

        .hero-image {
            position: absolute;
            right: 10%;
            width: 40%;
            max-width: 600px;
            animation: float 6s ease-in-out infinite;
        }

        .hero-image img {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.1));
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        /* Products Section */
        .section {
            padding: 100px 10%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 2.5rem;
            color: var(--dark);
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-title h2::after {
            content: "";
            position: absolute;
            width: 50px;
            height: 3px;
            background-color: var(--accent);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title p {
            color: var(--text-light);
            max-width: 700px;
            margin: 15px auto 0;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 1;
        }

        .product-image {
            height: 300px;
            overflow: hidden;
            position: relative;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-image img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
            transition: transform 0.5s;
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 25px;
        }

        .product-category {
            color: var(--accent);
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .product-title {
            font-size: 1.3rem;
            color: var(--dark);
            margin-bottom: 10px;
            font-weight: 700;
        }

        .product-description {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .product-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .product-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.2rem;
        }

        .product-rating {
            color: var(--accent);
        }

        /* Pricing Section */
        .pricing-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .pricing-table th {
            background-color: var(--primary);
            color: white;
            padding: 20px;
            text-align: left;
            font-weight: 600;
        }

        .pricing-table td {
            padding: 15px 20px;
            border-bottom: 1px solid #eee;
        }

        .pricing-table tr:last-child td {
            border-bottom: none;
        }

        .pricing-table tr:nth-child(even) {
            background-color: #fafafa;
        }

        .pricing-table tr:hover {
            background-color: #f5f5f5;
        }

        .stock-in {
            color: #4caf50;
            font-weight: 600;
        }

        .stock-out {
            color: #f44336;
            font-weight: 600;
        }

        .stock-limited {
            color: #ff9800;
            font-weight: 600;
        }

        /* About Section */
        .about-container {
            display: flex;
            align-items: center;
            gap: 50px;
        }

        .about-image {
            flex: 1;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .about-content {
            flex: 1;
        }

        .about-content h3 {
            font-size: 2rem;
            color: var(--dark);
            margin-bottom: 20px;
        }

        .about-content p {
            margin-bottom: 15px;
            color: var(--text-light);
        }

        .about-features {
            margin-top: 30px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .feature-icon {
            background-color: var(--secondary);
            color: var(--primary);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .feature-text h4 {
            font-size: 1.1rem;
            color: var(--dark);
            margin-bottom: 5px;
        }

        .feature-text p {
            margin: 0;
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 10% 30px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-logo span {
            color: var(--accent);
        }

        .footer-about p {
            color: #bbb;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: white;
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--accent);
            transform: translateY(-5px);
        }

        .footer-links h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after {
            content: "";
            position: absolute;
            width: 40px;
            height: 2px;
            background-color: var(--accent);
            bottom: 0;
            left: 0;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 10px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: var(--accent);
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            color: #bbb;
        }

        .footer-contact i {
            margin-right: 10px;
            color: var(--accent);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                width: 60%;
            }

            .hero::before {
                width: 70%;
            }

            .hero-image {
                width: 50%;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 15px 5%;
                flex-wrap: wrap;
            }

            .nav-right {
                width: 100%;
                justify-content: space-between;
                margin-top: 15px;
            }

            nav ul {
                display: none;
            }

            .user-section {
                border-left: none;
                padding-left: 0;
            }

            .hero {
                flex-direction: column;
                height: auto;
                padding-top: 150px;
                text-align: center;
            }

            .hero::before {
                display: none;
            }

            .hero-content {
                width: 100%;
                margin-bottom: 50px;
            }

            .hero-image {
                position: relative;
                right: auto;
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
            }

            .about-container {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <!-- Header & Navigation -->
    <header>
        <a href="#" class="logo">OXYL</a>
        
        <div class="nav-right">
            <nav>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#harga">Harga</a></li>
                    <li><a href="#tentang">Tentang</a></li>
                </ul>
            </nav>
            
            <div class="user-section">
                <div class="user-info">
                    <i class="fas fa-user-circle"></i>
                    <span>User</span>
                </div>
                <a href="logout.php" class="btn-logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Keluar</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1>Temukan Aroma yang Mewakili Anda</h1>
            <p>
                Oxyl menghadirkan koleksi eksklusif dengan bahan terbaik
                dari seluruh dunia. Setiap tetes adalah cerita, setiap aroma adalah
                kenangan.
            </p>
            <div class="hero-buttons">
                <a href="#produk" class="btn">Jelajahi Koleksi</a>
                <a href="#harga" class="btn btn-outline">Lihat Harga</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1602874801006-e04b2f4113ab?w=800&auto=format&fit=crop" alt="Oxyl Reed Diffuser" />
        </div>
    </section>

    <!-- Products Section -->
    <section id="produk" class="section">
        <div class="section-title">
            <h2>Koleksi Eksklusif</h2>
            <p>
                Temukan aroma yang sempurna untuk setiap momen spesial dalam hidup
                Anda
            </p>
        </div>

        <div class="products-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-badge">Bestseller</div>
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?w=400&auto=format&fit=crop" alt="Midnight Oud" />
                </div>
                <div class="product-info">
                    <span class="product-category">Bestseller</span>
                    <h3 class="product-title">Midnight Oud</h3>
                    <p class="product-description">
                        Oud wood, amber, dan hint leather yang memiliki Karakter Mewah,
                        misterius, dan maskulin
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 165.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-badge">New</div>
                <div class="product-image">
                    <img src="https://arveaporduction.s3.eu-west-3.amazonaws.com/arvea-nature.com/arvealab/product/7c62e1d47604bb410bb7f3d1e9f13d14.webp" alt="Velvet Bloom" />
                </div>
                <div class="product-info">
                    <span class="product-category">Turki Edition</span>
                    <h3 class="product-title">Velvet Bloom</h3>
                    <p class="product-description">
                        Memiliki Aroma Mawar Turki, peony, dan white musk dan memiliki
                        Karakter Feminin, lembut
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 125.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?w=400&auto=format&fit=crop" alt="Citrus Noir" />
                </div>
                <div class="product-info">
                    <span class="product-category">Unisex</span>
                    <h3 class="product-title">Citrus Noir</h3>
                    <p class="product-description">
                        Memiliki Aroma Bergamot Italia, grapefruit, dan vetiver dan
                        memiliki Karakter Segar, modern, unisex
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 135.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-badge">Limited</div>
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?w=400&auto=format&fit=crop" alt="Santal Dusk" />
                </div>
                <div class="product-info">
                    <span class="product-category">Eksklusif</span>
                    <h3 class="product-title">Santal Dusk</h3>
                    <p class="product-description">
                        Memiliki Aroma Sandalwood, vanilla, dan hint of cardamom dan
                        memiliki Karakter Hangat, creamy
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 155.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="product-card">
                <div class="product-badge">Premium</div>
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=400&auto=format&fit=crop" alt="Ocean Breeze" />
                </div>
                <div class="product-info">
                    <span class="product-category">Fresh Collection</span>
                    <h3 class="product-title">Ocean Breeze</h3>
                    <p class="product-description">
                        Aroma laut segar dengan campuran sea salt, aquatic notes, dan mint. 
                        Memberikan kesegaran yang menenangkan
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 145.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images-cdn.ubuy.co.in/65de3c590147916ea4268e75-lavender-eau-de-parfum.jpg" alt="Lavender Dreams" />
                </div>
                <div class="product-info">
                    <span class="product-category">Relaxing</span>
                    <h3 class="product-title">Lavender Dreams</h3>
                    <p class="product-description">
                        Lavender murni dari Provence dengan chamomile dan vanilla. 
                        Perfect untuk relaksasi dan tidur nyenyak
                    </p>
                    <div class="product-footer">
                        <span class="product-price">Rp 110.000</span>
                        <span class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="harga" class="section" style="background-color: #fafafa">
        <div class="section-title">
            <h2>Daftar Harga</h2>
            <p>Pilih produk yang sesuai dengan kebutuhan Anda</p>
        </div>

        <table class="pricing-table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Ketersediaan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Midnight Oud</td>
                    <td>Rp 165.000</td>
                    <td class="stock-in">Tersedia</td>
                </tr>
                <tr>
                    <td>Velvet Bloom</td>
                    <td>Rp 125.000</td>
                    <td class="stock-in">Tersedia</td>
                </tr>
                <tr>
                    <td>Citrus Noir</td>
                    <td>Rp 135.000</td>
                    <td class="stock-in">Tersedia</td>
                </tr>
                <tr>
                    <td>Santal Dusk</td>
                    <td>Rp 155.000</td>
                    <td class="stock-limited">Stok Terbatas</td>
                </tr>
                <tr>
                    <td>Ocean Breeze</td>
                    <td>Rp 145.000</td>
                    <td class="stock-in">Tersedia</td>
                </tr>
                <tr>
                    <td>Lavender Dreams</td>
                    <td>Rp 110.000</td>
                    <td class="stock-in">Tersedia</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- About Section -->
    <section id="tentang" class="section">
        <div class="about-container">
            <div class="about-image">
                <img src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?w=600&auto=format&fit=crop" alt="Toko Oxyl" />
            </div>
            <div class="about-content">
                <h3>Tentang Oxyl Reed Diffusere</h3>
                <p>
                    Didirikan oleh mahasiswa dari SCU yang memiliki ketertarikan
                    untuk menjual produk pengharum ruangan, mereka percaya dengan menggunakan produk pengharum ruangan dari mereka
                    bisa memberikan nuansa aroma yang kuat dan tahan lama 
                </p>
                <p>
                    Setiap produk kami dibuat dengan bahan-bahan pilihan dari berbagai
                    penjuru dunia, diproses dengan teknologi terbaik, dan diracik oleh
                    seorang yang ahli dan berpengalaman.
                </p>

                <div class="about-features">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Bahan Alami</h4>
                            <p>Menggunakan ekstrak bunga, buah, dan kayu terbaik</p>
                        </div>
                    </div>

                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="fas fa-flask"></i>
                        </div>
                        <div class="feature-text">
                            <h4>Teknologi Modern</h4>
                            <p>
                                Proses destilasi dan ekstraksi terkini untuk kualitas terbaik
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-about">
                <a href="#" class="footer-logo">Oxyl<span>.</span></a>
                <p>
                    Keanggunan dalam setiap tetes. Temukan aroma yang sempurna untuk
                    mengekspresikan diri Anda.
                </p>
                <div class="social-links">
                    <a href="https://www.instagram.com/oxyl.id?utm_source=ig_web_button_share_sheet&igsh=MXFhbWppZ2RwMGVnaQ==" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>  
                    <a href="https://wa.me/6285713007465" target="_blank">
                        <i class="fab fa-whatsapp"></i> 
                    </a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="#home">Beranda</a></li>
                    <li><a href="#produk">Produk</a></li>
                    <li><a href="#harga">Harga</a></li>
                    <li><a href="#tentang">Tentang Kami</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Hubungi Kami</h3>
                <p>
                    <i class="fas fa-map-marker-alt"></i> Jl.Imam Bonjol Nomor 207, Pendrikan Kidul, Kecamatan Semarang Tengah, Kota Semarang
                </p>
                <p><i class="fas fa-phone"></i> 085713007465</p>
                <p>
                    <i class="fas fa-clock"></i> Buka Setiap Hari: 10.00 - 20.00 WIB
                </p>
            </div>
        </div>

        <div class="copyright">
            <p>
                &copy; 2025 
                <i class="fas fa-heart" style="color: #c48f65"></i> by Oxyl Team
            </p>
        </div>
    </footer>

    <script>
        // Smooth scrolling untuk navigasi
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if(targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if(targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animasi saat scroll
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.padding = '15px 5%';
                header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.padding = '20px 5%';
                header.style.boxShadow = '0 2px 20px rgba(0, 0, 0, 0.05)';
            }
        });
    </script>
</body>
</html>