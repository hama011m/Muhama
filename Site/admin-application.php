<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تقديم الإدارة | Enzo</title>
    <meta name="description" content="تقديم طلب للانضمام إلى فريق إدارة مجتمع Enzo التقني">
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

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 4rem;
            position: relative;
        }

        .header h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            line-height: 1.2;
            position: relative;
            display: inline-block;
        }

        .header h1::before {
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

        .header h1 span {
            position: relative;
            color: var(--purple-light);
            -webkit-text-fill-color: var(--purple-light);
        }

        .header p {
            font-size: 1.3rem;
            opacity: 0.9;
            line-height: 1.7;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        /* Form Container */
        .form-container {
            background: rgba(20, 20, 28, 0.5);
            border-radius: 20px;
            padding: 3rem;
            max-width: 800px;
            margin: 0 auto;
            border: 1px solid rgba(155, 109, 255, 0.1);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .form-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--purple-light), transparent);
        }

        .form-glow {
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: radial-gradient(var(--purple-light), transparent 70%);
            filter: blur(50px);
            opacity: 0.1;
            z-index: 0;
        }

        .form-glow-1 {
            top: -100px;
            left: 10%;
        }

        .form-glow-2 {
            bottom: -100px;
            right: 10%;
        }

        .form-content {
            position: relative;
            z-index: 1;
        }

        /* Form Elements */
        .form-field {
            margin-bottom: 1.5rem;
        }

        .form-field label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text-light);
        }

        .form-field input,
        .form-field textarea,
        .form-field select {
            width: 100%;
            padding: 1rem;
            border: 1px solid rgba(155, 109, 255, 0.1);
            border-radius: 10px;
            background: rgba(15, 15, 20, 0.5);
            color: var(--text);
            font-size: 1rem;
            transition: var(--transition);
        }

        .form-field input:focus,
        .form-field textarea:focus,
        .form-field select:focus {
            outline: none;
            border-color: var(--purple-light);
            box-shadow: 0 0 0 3px rgba(166, 125, 255, 0.2);
        }

        .form-field textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--purple-gradient);
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            padding: 1.2rem 2rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(155, 109, 255, 0.3);
            width: 100%;
            margin-top: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .submit-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(155, 109, 255, 0.4);
        }

        .submit-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #a67dff, #6648c8);
            z-index: -1;
            transition: var(--transition);
        }

        .submit-btn:hover::before {
            opacity: 0.9;
            background-position: right center;
        }

        .back-btn {
            display: inline-block;
            margin-top: 2rem;
            color: var(--purple-light);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .back-btn:hover {
            color: var(--secondary);
            transform: translateX(-5px);
        }

        .back-btn i {
            transition: var(--transition);
        }

        .back-btn:hover i {
            transform: translateX(-3px);
        }

        /* Floating Elements */
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

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
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

        /* Responsive Design */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5rem;
            }
            
            .header p {
                font-size: 1.1rem;
            }
            
            .form-container {
                padding: 2rem;
            }
            
            .submit-btn {
                padding: 1rem 1.5rem;
                font-size: 1.1rem;
            }
        }

        @media (max-width: 480px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="stars-container" id="starsContainer"></div>
    
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="" alt="Enzo Logo">
                <span>Enzo</span>
            </a>
            <div class="nav-menu">
                <a href="index.php" class="nav-link">الرئيسية</a>
                <a href="index.php#features" class="nav-link">المميزات</a>
                <a href="index.php#cta" class="nav-link">انضم إلينا</a>
            </div>
            <button class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </nav>
    
    <div class="container">
        <!-- Header Section -->
        <header class="header">
            <h1 data-text="تقديم طلب إداري">تقديم طلب <span>إداري</span></h1>
            <p>املأ النموذج أدناه لتقديم طلبك للانضمام إلى فريق إدارة مجتمع Enzo التقني</p>
        </header>
        
        <!-- Form Container -->
        <div class="form-container">
            <div class="form-glow form-glow-1"></div>
            <div class="form-glow form-glow-2"></div>
            
            <div class="form-content">
                <form action="submit-admin.php" method="POST">
                    <div class="form-field">
                        <label for="name">اسمك الكامل:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-field">
                        <label for="discord_name">اسم المستخدم في ديسكورد:</label>
                        <input type="text" id="discord_name" name="discord_name" required>
                    </div>
                    
                    <div class="form-field">
                        <label for="age">عمرك:</label>
                        <input type="number" id="age" name="age" required min="16">
                    </div>
                    
                    <div class="form-field">
                        <label for="discord_id">معرف ديسكورد (ID):</label>
                        <input type="text" id="discord_id" name="discord_id" required>
                    </div>
                    
                    <div class="form-field">
                        <label for="experience">خبراتك السابقة والمهارات:</label>
                        <textarea id="experience" name="experience" required></textarea>
                    </div>
                    
                    <div class="form-field">
                        <label for="why_join">لماذا تريد الانضمام إلى فريق الإدارة؟</label>
                        <textarea id="why_join" name="why_join" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> إرسال الطلب
                    </button>
                </form>
                
                <a href="index.php" class="back-btn">
                    <i class="fas fa-arrow-right"></i> العودة للصفحة الرئيسية
                </a>
            </div>
        </div>
    </div>
    
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element fe-1">
            <i class="fas fa-user-shield" style="font-size: 4rem;"></i>
        </div>
        <div class="floating-element fe-2">
            <i class="fas fa-file-alt" style="font-size: 3rem;"></i>
        </div>
        <div class="floating-element fe-3">
            <i class="fas fa-users-cog" style="font-size: 3.5rem;"></i>
        </div>
    </div>
    
    <!-- Social Links -->
    <div class="social-links">
        <a href="https://www.youtube.com/@" class="social-link" target="_blank">
            <i class="fab fa-youtube"></i>
        </a>
        <a href="https://www.tiktok.com/@" class="social-link" target="_blank">
            <i class="fab fa-tiktok"></i>
        </a>
        <a href="https://x.com/" class="social-link" target="_blank">
            <i class="fab fa-twitter"></i>
        </a>
    </div>
    
    <script>
        // Create stars dynamically
        document.addEventListener('DOMContentLoaded', function() {
            const starsContainer = document.getElementById('starsContainer');
            const starCount = 100;
            
            for (let i = 0; i < starCount; i++) {
                const star = document.createElement('div');
                star.classList.add('star');
                
                // Random size between 1px and 3px
                const size = Math.random() * 2 + 1;
                star.style.width = `${size}px`;
                star.style.height = `${size}px`;
                
                // Random position
                star.style.left = `${Math.random() * 100}%`;
                star.style.top = `${Math.random() * 100}%`;
                
                // Random animation delay
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
            
            // Close menu when clicking on a link
            const navLinks = document.querySelectorAll('.nav-link');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    navMenu.classList.remove('active');
                    hamburger.innerHTML = '<i class="fas fa-bars"></i>';
                });
            });
        });
    </script>
</body>
</html>