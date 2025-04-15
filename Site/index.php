<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enzo | المجتمع التقني</title>
    <meta name="description" content="انضم إلى مجتمع Enzo التقني - للإبداع والتميز">
    <link rel="icon" href="https://cdn.discordapp.com/avatars/1268617577387786281/24b6dea9d1cd800764483726985ea050.webp?size=256" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #7289DA;
            --primary-hover: #677BC4;
            --secondary: #FF73FA;
            --accent: #43B581;
            --dark: #0e0e12;
            --darker: #09090c;
            --light: #F6F6F6;
            --text: #ffffff;
            --text-light: #DCDDDE;
            --purple-light: #a67dff;
            --purple-dark: #6648c8;
            --purple-gradient: linear-gradient(45deg, #6648c8, #a67dff);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Tajawal', sans-serif;
        }

        body {
            background-color: var(--darker);
            color: var(--text);
            min-height: 100vh;
            overflow-x: hidden;
            transition: var(--transition);
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: radial-gradient(ellipse at top, #1b1147 0%, #0a0a18 50%, #05050e 100%);
        }

        .star {
            position: absolute;
            background-color: #ffffff;
            border-radius: 50%;
            z-index: -1;
            animation: twinkle 3s infinite ease-in-out;
        }

        @keyframes twinkle {
            0%, 100% { opacity: 0.2; }
            50% { opacity: 0.8; }
        }

        /* Create stars dynamically */
        .stars-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        /* Header and Navigation */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            padding: 1rem 0;
            background: rgba(10, 10, 15, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(155, 109, 255, 0.1);
            transition: var(--transition);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .navbar.scrolled {
            padding: 0.7rem 0;
            background: rgba(10, 10, 15, 0.95);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--text);
            text-decoration: none;
            position: relative;
        }

        .logo::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--purple-gradient);
            transition: var(--transition);
        }

        .logo:hover::after {
            width: 100%;
        }

        .logo span {
            color: var(--purple-light);
            margin-right: 0.5rem;
        }

        .logo img {
            height: 40px;
            margin-left: 0.5rem;
            border-radius: 50%;
            transition: var(--transition);
            border: 2px solid transparent;
        }

        .logo:hover img {
            transform: rotate(5deg);
            border: 2px solid var(--purple-light);
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            font-size: 1.1rem;
            transition: var(--transition);
            position: relative;
        }

        .nav-link::before {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--purple-gradient);
            transition: var(--transition);
        }

        .nav-link:hover {
            color: var(--text);
        }

        .nav-link:hover::before {
            width: 100%;
        }

        .hamburger {
            display: none;
            cursor: pointer;
            font-size: 1.5rem;
            color: var(--text);
            border: none;
            background: transparent;
            z-index: 100;
        }

        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 6rem 2rem 3rem;
        }

        header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .main-title {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
            position: relative;
            display: inline-block;
        }

        .main-title::before {
            content: attr(data-text);
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: linear-gradient(45deg, #fff, #a67dff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 3s linear infinite;
            background-size: 200% 200%;
        }

        @keyframes shine {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .main-title span {
            position: relative;
            color: var(--purple-light);
            -webkit-text-fill-color: var(--purple-light);
        }

        .subtitle {
            font-size: 1.3rem;
            opacity: 0.9;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        /* Hero Section with Animation */
        .hero-section {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 6rem;
            overflow: hidden;
            min-height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .hero-circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(155, 109, 255, 0.05);
            border: 1px solid rgba(155, 109, 255, 0.1);
            animation: pulse 8s infinite alternate ease-in-out;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            top: -100px;
            right: -100px;
            animation-delay: 0s;
        }

        .circle-2 {
            width: 500px;
            height: 500px;
            bottom: -200px;
            left: -200px;
            animation-delay: 2s;
        }

        .circle-3 {
            width: 200px;
            height: 200px;
            top: 50%;
            right: 10%;
            animation-delay: 1s;
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .floating-element {
            position: absolute;
            opacity: 0.15;
            filter: blur(1px);
        }

        .fe-1 {
            top: 20%;
            left: 10%;
            animation: float 12s infinite ease-in-out;
        }

        .fe-2 {
            top: 15%;
            right: 15%;
            animation: float 15s infinite ease-in-out reverse;
        }

        .fe-3 {
            bottom: 25%;
            left: 20%;
            animation: float 10s infinite ease-in-out;
            animation-delay: 2s;
        }

        /* Features Section */
        .features-section {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 6rem 0;
        }

        .feature-card {
            background: rgba(20, 20, 28, 0.5);
            border-radius: 20px;
            padding: 2.5rem;
            border: 1px solid rgba(155, 109, 255, 0.1);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            cursor: pointer;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            border-color: rgba(155, 109, 255, 0.3);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .feature-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--purple-gradient);
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.5s;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
            transform-origin: left;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--purple-light);
            margin-bottom: 1.5rem;
            display: inline-block;
        }

        .feature-card:hover .feature-icon {
            animation: heartbeat 1.5s infinite;
        }

        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .feature-desc {
            font-size: 1rem;
            line-height: 1.6;
            opacity: 0.8;
        }

        /* CTA Section */
        .cta-section {
            margin: 6rem 0;
            text-align: center;
            background: rgba(20, 20, 28, 0.5);
            border-radius: 20px;
            padding: 4rem 2rem;
            position: relative;
            border: 1px solid rgba(155, 109, 255, 0.1);
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .cta-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--purple-light), transparent);
        }

        .cta-glow {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(var(--purple-light), transparent 70%);
            filter: blur(50px);
            opacity: 0.1;
            z-index: 0;
        }

        .cta-glow-1 {
            top: -100px;
            left: 10%;
        }

        .cta-glow-2 {
            bottom: -100px;
            right: 10%;
        }

        .cta-content {
            position: relative;
            z-index: 1;
        }

        .cta-title {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }

        .cta-title span {
            color: var(--purple-light);
            position: relative;
        }

        .cta-title span::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--purple-light);
        }

        .cta-desc {
            font-size: 1.3rem;
            opacity: 0.9;
            line-height: 1.7;
            max-width: 700px;
            margin: 0 auto 2.5rem;
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            margin: 3rem 0;
        }

        .btn {
            padding: 1.2rem 2.8rem;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.8rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
            border: none;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--purple-gradient);
            z-index: -1;
            transition: var(--transition);
        }

        .btn-primary {
            color: white;
            box-shadow: 0 8px 25px rgba(155, 109, 255, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(155, 109, 255, 0.4);
        }

        .btn-primary:hover::before {
            opacity: 0.9;
            background-position: right center;
        }

        .btn i {
            font-size: 1.2rem;
        }

        /* Footer */
        footer {
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(10px);
            padding: 4rem 0 6rem;
            border-top: 1px solid rgba(155, 109, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .footer-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, transparent, var(--purple-light), transparent);
            opacity: 0.3;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 3rem;
        }

        .footer-column {
            flex: 1;
            min-width: 250px;
        }

        .footer-column.center {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .footer-logo {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--text);
            display: inline-block;
        }

        .footer-logo span {
            color: var(--purple-light);
        }

        .footer-desc {
            font-size: 1rem;
            opacity: 0.7;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .footer-heading {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            position: relative;
            display: inline-block;
        }

        .footer-heading::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--purple-light);
        }

        .footer-links {
            list-style: none;
        }

        .footer-link {
            margin-bottom: 0.8rem;
        }

        .footer-link a {
            color: var(--text-light);
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-link a:hover {
            color: var(--purple-light);
            transform: translateX(-5px);
        }

        .footer-link a i {
            font-size: 0.8rem;
            transition: var(--transition);
        }

        .footer-link a:hover i {
            transform: translateX(-3px);
        }

        /* Social Links */
        .social-links {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(10, 10, 15, 0.9);
            backdrop-filter: blur(10px);
            padding: 1rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            z-index: 100;
            border-top: 1px solid rgba(155, 109, 255, 0.1);
        }

        .social-link {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 1.3rem;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .social-link::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--purple-gradient);
            z-index: -1;
            opacity: 0;
            transition: var(--transition);
        }

        .social-link:hover::before {
            opacity: 1;
        }

        .social-link:hover {
            transform: translateY(-5px) rotate(10deg);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        /* Scroll To Top Button */
        .scroll-top {
            position: fixed;
            bottom: 80px;
            right: 30px;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--purple-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            transform: translateY(20px);
            transition: var(--transition);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
            z-index: 99;
        }

        .scroll-top.show {
            opacity: 1;
            transform: translateY(0);
        }

        .scroll-top:hover {
            transform: translateY(-5px);
        }

        /* Animation for hover state */
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .features-section {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .footer-heading::after {
                left: 50%;
                transform: translateX(-50%);
            }
            
            .footer-link a:hover {
                transform: none;
            }
        }

        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            
            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 70%;
                height: 100vh;
                background: rgba(10, 10, 15, 0.95);
                backdrop-filter: blur(10px);
                flex-direction: column;
                justify-content: center;
                transition: var(--transition);
                z-index: 99;
                padding-top: 2rem;
                border-left: 1px solid rgba(155, 109, 255, 0.1);
            }
            
            .nav-menu.active {
                right: 0;
            }
            
            .main-title, .cta-title {
                font-size: 2.5rem;
            }
            
            .subtitle, .cta-desc {
                font-size: 1.1rem;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            .feature-card {
                min-height: auto;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 2rem;
            }
            
            .cta-title {
                font-size: 1.8rem;
            }
            
            .subtitle {
                font-size: 1rem;
            }

            .cta-desc {
                font-size: 1rem;
            }

            .feature-card {
                padding: 1.5rem;
            }
        }

        /* Animation keyframes */
        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }

        @keyframes pulse {
            0% { transform: scale(1); opacity: 0.2; }
            50% { transform: scale(1.05); opacity: 0.3; }
            100% { transform: scale(1); opacity: 0.2; }
        }
    </style>
</head>
<body>
    <div class="stars-container" id="starsContainer"></div>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <img src="https://cdn.discordapp.com/icons/1305208696980246683/7156c695126aac2dc5c8a0b399900867.png?size=512" alt="Enzo Logo">
                <span>Enzo</span>
            </a>
            <div class="nav-menu">
                <a href="#" class="nav-link">الرئيسية</a>
                <a href="#features" class="nav-link">المميزات</a>
                <a href="#cta" class="nav-link">انضم إلينا</a>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    
    <div class="container">
        <!-- Hero Section -->
        <div class="hero-section">
            <div class="hero-bg">
                <div class="hero-circle circle-1"></div>
                <div class="hero-circle circle-2"></div>
                <div class="hero-circle circle-3"></div>
            </div>
            
            <div class="floating-elements">
                <div class="floating-element fe-1">
                    <i class="fab fa-discord" style="font-size: 4rem;"></i>
                </div>
                <div class="floating-element fe-2">
                    <i class="fas fa-code" style="font-size: 3rem;"></i>
                </div>
                <div class="floating-element fe-3">
                    <i class="fas fa-robot" style="font-size: 3.5rem;"></i>
                </div>
            </div>
            
            <header>
                <h1 class="main-title" data-text="مرحباً بك في مجتمع Enzo">مرحباً بك في مجتمع <span>Enzo</span></h1>
                <p class="subtitle">منصتنا توفر كل ما تحتاجه لإنشاء وتطوير بوتات ديسكورد عالية الجودة في بيئة تفاعلية مميزة</p>
                
                <div class="action-buttons">
                    <a href="#cta" class="btn btn-primary">
                        <i class="fas fa-rocket"></i> ابدأ الآن
                    </a>
                </div>
            </header>
        </div>
        
        <!-- Features Section -->
        <section id="features" class="features-section">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="feature-title">تعلم البرمجة</h3>
                <p class="feature-desc">نوفر مجموعة من الدروس والموارد التعليمية لمساعدتك على تعلم أساسيات البرمجة وتطوير بوتات ديسكورد</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-users"></i>
                </div>
                <h3 class="feature-title">مجتمع متفاعل</h3>
                <p class="feature-desc">انضم إلى مجتمع من المطورين المتحمسين للتعلم والمشاركة والتعاون في مشاريع مختلفة</p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tools"></i>
                </div>
                <h3 class="feature-title">أدوات متكاملة</h3>
                <p class="feature-desc">استخدم أدواتنا المتطورة لتسهيل عملية تطوير البوتات وتحسين كفاءتها</p>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section id="cta" class="cta-section">
            <div class="cta-glow cta-glow-1"></div>
            <div class="cta-glow cta-glow-2"></div>
            <div class="cta-content">
                <h2 class="cta-title">انضم إلى <span>مجتمعنا</span> اليوم</h2>
                <p class="cta-desc">كن جزءًا من مجتمع المطورين المتنامي وابدأ رحلتك في تطوير بوتات ديسكورد مع خبراء المجال</p>
                
                <div class="action-buttons">
                    <a href="/admin-application.php" class="btn btn-primary" target="_blank">
                        <i class="fab fa-discord"></i> انضم إلينا الآن
                    </a>
                </div>
            </div>
        </section>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-wave"></div>
        <div class="footer-container">
            <div class="footer-column center">
                <h2 class="footer-logo"><span>Enzo</span></h2>
                <p class="footer-desc">منصة متكاملة لتطوير بوتات ديسكورد مع مجموعة من الأدوات والموارد التعليمية</p>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-heading">روابط سريعة</h3>
                <ul class="footer-links">
                    <li class="footer-link">
                        <a href="#"><i class="fas fa-chev