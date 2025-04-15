<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم الإرسال بنجاح | Enzo</title>
    <meta name="description" content="تم تقديم طلب الإدارة بنجاح">
    <link rel="icon" href="https://cdn.discordapp.com/icons/1305208696980246683/7156c695126aac2dc5c8a0b399900867.png?size=512" type="image/x-icon">
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

        .stars-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        /* Navigation */
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

        /* Success Section */
        .success-section {
            background: rgba(20, 20, 28, 0.5);
            border-radius: 20px;
            padding: 4rem;
            border: 1px solid rgba(155, 109, 255, 0.1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            margin: 4rem 0;
            text-align: center;
        }

        .success-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: var(--purple-gradient);
        }

        .success-icon {
            font-size: 5rem;
            color: var(--accent);
            margin-bottom: 2rem;
            animation: bounce 1s infinite alternate;
        }

        @keyframes bounce {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }

        .success-title {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .success-message {
            font-size: 1.2rem;
            opacity: 0.9;
            line-height: 1.7;
            max-width: 600px;
            margin: 0 auto 2.5rem;
        }

        .home-btn {
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
            background: var(--purple-gradient);
            color: white;
            box-shadow: 0 8px 25px rgba(155, 109, 255, 0.3);
        }

        .home-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(155, 109, 255, 0.4);
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

        /* Responsive Design */
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
            
            .success-section {
                padding: 2rem;
            }
            
            .success-title {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .success-title {
                font-size: 1.8rem;
            }
            
            .success-icon {
                font-size: 4rem;
            }
            
            .footer-container {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="stars-container" id="starsContainer"></div>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.html" class="logo">
                <img src="https://cdn.discordapp.com/icons/1305208696980246683/7156c695126aac2dc5c8a0b399900867.png?size=512" alt="Enzo Logo">
                <span>Enzo</span>
            </a>
            <div class="nav-menu">
                <a href="index.html" class="nav-link">الرئيسية</a>
                <a href="index.html#features" class="nav-link">المميزات</a>
                <a href="index.html#cta" class="nav-link">انضم إلينا</a>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    
    <div class="container">
        <!-- Success Section -->
        <section class="success-section">
            <div class="success-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="success-title">تم إرسال طلبك بنجاح!</h1>
            <p class="success-message">شكراً لتقديمك طلب الانضمام إلى فريق الإدارة. سيتم مراجعة طلبك وسنقوم بالتواصل معك في أقرب وقت ممكن.</p>
            <a href="index.html" class="home-btn">
                <i class="fas fa-home"></i> العودة للصفحة الرئيسية
            </a>
        </section>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-wave"></div>
        <div class="footer-container">
            <div class="footer-column center">
                <h3 class="footer-logo"><span>Enzo</span></h3>
                <p class="footer-desc">منصة متكاملة لتطوير بوتات ديسكورد مع مجموعة من الأدوات والموارد التعليمية</p>
            </div>
        </div>
    </footer>
    
    <script>
        // Create stars dynamically
        document.addEventListener('DOMContentLoaded', function() {
            const starsContainer = document.getElementById('starsContainer');
            for (let i = 0; i < 100; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.width = `${Math.random() * 3}px`;
                star.style.height = star.style.width;
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                star.style.animationDelay = `${Math.random() * 5}s`;
                starsContainer.appendChild(star);
            }

            // Mobile menu toggle
            const hamburger = document.getElementById('hamburger');
            const navMenu = document.querySelector('.nav-menu');
            
            hamburger.addEventListener('click', () => {
                navMenu.classList.toggle('active');
                hamburger.innerHTML = navMenu.classList.contains('active') 
                    ? '<i class="fas fa-times"></i>' 
                    : '<i class="fas fa-bars"></i>';
            });

            // Navbar scroll effect
            window.addEventListener('scroll', () => {
                document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 50);
            });
        });
    </script>
</body>
</html>