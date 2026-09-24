<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="cd935bdd5bab738b" />    
    <meta name="description" content="En yeni PC ve mobil uygulamalar, premium programlar, güvenli indirme. Ücretsiz uygulama marketi - Dehset Store">    
    <meta property="og:title" content="Dehşet Store - Ücretsiz Uygulama İndirme">
    <meta property="og:description" content="En yeni PC ve mobil uygulamalar, premium programlar, güvenli indirme.">
    <meta property="og:image" content="https://dehsetstore.rf.gd/logo.png?v=2">
    <meta property="og:url" content="https://dehsetstore.rf.gd">
    <meta name="robots" content="index, follow, max-image-preview:large">
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large">
    <meta name="bingbot" content="index, follow">

    <!-- Önbellek sorununu tamamen çözen meta etiketler -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>İndirmeler - Dehset Store</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <style>
        /* --- TEMEL STİLLER --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #0c71cf;
            --secondary-color: #072c4e;
            --accent-color: #667eea;
            --text-color: #333;
            --bg-color: #f8f9fa;
            --card-bg: #fff;
            --sidebar-width: 250px;
            --sidebar-collapsed-width: 70px;
            --header-height: 70px;
            
            /* Modern Gradient Renkleri */
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --warning-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --dark-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            --glass-bg: rgba(255, 255, 255, 0.1);
            --glass-border: rgba(255, 255, 255, 0.2);
        }

        body {
            display: flex;
            background-color: var(--bg-color);
            min-height: 100vh;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        body.dark-mode {
            --text-color: #fff;
            --bg-color: #1a1a1a;
            --card-bg: #2d2d2d;
            --glass-bg: rgba(0, 0, 0, 0.2);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        /* === MODERN TASARIM İYİLEŞTİRMELERİ === */

        /* 2. Glassmorphism Efektleri */
        .glass-effect {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        }

        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
        }

        /* 3. Animasyonlar ve Geçişler */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }

        @keyframes slideInFromBottom {
            0% { transform: translateY(100%); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeInScale {
            0% { transform: scale(0.9); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }

        .slide-up-animation {
            animation: slideInFromBottom 0.6s ease-out forwards;
        }

        .scale-in-animation {
            animation: fadeInScale 0.5s ease-out forwards;
        }

        /* 4. Gelişmiş Kartlar */
        .app-item {
            transform-style: preserve-3d;
            perspective: 1000px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border-radius: 16px;
        }

        .app-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.5s ease;
            z-index: 2;
        }

        .app-item:hover::before {
            transform: scaleX(1);
        }

        .app-item:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .app-item::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s ease;
        }

        .app-item:hover::after {
            left: 100%;
        }

        /* 5. Modern Tipografi */
        .section-title h2 {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            font-weight: 700;
            font-size: clamp(1.5rem, 4vw, 2rem);
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-gradient);
            border-radius: 2px;
            transition: width 0.3s ease;
        }

        .section-title:hover h2::after {
            width: 100%;
        }

        /* 6. Loading Skeleton */
        .skeleton-loader {
            background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
            background-size: 200% 100%;
            animation: loading 1.5s infinite;
            border-radius: 8px;
            position: relative;
            overflow: hidden;
        }

        body.dark-mode .skeleton-loader {
            background: linear-gradient(90deg, #2d2d2d 25%, #3d3d3d 50%, #2d2d2d 75%);
            background-size: 200% 100%;
        }

        @keyframes loading {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .skeleton-card {
            height: 300px;
            border-radius: 12px;
            margin-bottom: 25px;
        }

        .skeleton-text {
            height: 16px;
            margin-bottom: 10px;
            border-radius: 4px;
        }

        .skeleton-text.short {
            width: 60%;
        }

        .skeleton-text.medium {
            width: 80%;
        }

        /* 7. Gradient Badges */
        .gradient-badge {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background: var(--primary-gradient);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
            transition: all 0.3s ease;
        }

        .gradient-badge.secondary {
            background: var(--secondary-gradient);
            box-shadow: 0 4px 15px rgba(240, 147, 251, 0.3);
        }

        .gradient-badge.accent {
            background: var(--accent-gradient);
            box-shadow: 0 4px 15px rgba(79, 172, 254, 0.3);
        }

        .gradient-badge:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        /* 9. Gelişmiş İstatistikler */
        .stat-card {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--primary-gradient);
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
        }

        .stat-label {
            color: #666;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        body.dark-mode .stat-label {
            color: #ccc;
        }

        /* 10. Premium UI Bileşenleri */
        .premium-btn {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .premium-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .premium-btn:hover::before {
            left: 100%;
        }

        .premium-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .premium-btn:active {
            transform: translateY(-1px);
        }

        .premium-btn.secondary {
            background: var(--secondary-gradient);
            box-shadow: 0 4px 15px rgba(240, 147, 251, 0.3);
        }

        .premium-btn.secondary:hover {
            box-shadow: 0 8px 25px rgba(240, 147, 251, 0.4);
        }

        .premium-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: var(--card-bg);
            color: var(--text-color);
        }

        body.dark-mode .premium-input {
            border-color: #444;
        }

        .premium-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            outline: none;
        }

        /* 11. Hero Section İyileştirmesi */
        .hero-slider {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .slide {
            position: relative;
            overflow: hidden;
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .slide h1, .slide p, .slide button {
            position: relative;
            z-index: 2;
        }

        .slide button {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            transition: all 0.3s ease;
            border-radius: 50px;
        }

        .slide button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        /* 12. Sidebar İyileştirmesi */
        .sidebar {
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            background: rgba(12, 113, 207, 0.8);
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .menu-item {
            border-radius: 12px;
            margin: 5px 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .menu-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .menu-item:hover::before {
            left: 100%;
        }

        /* 13. Modal İyileştirmesi */
        .modal-content {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
            animation: fadeInScale 0.3s ease-out;
        }

        .modal-header {
            background: var(--primary-gradient);
            color: white;
            padding: 20px;
        }

        .modal-header h2 {
            margin: 0;
            font-weight: 600;
        }

        .close-modal {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: none;
            color: white;
            font-size: 18px;
        }

        .close-modal:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: rotate(90deg);
        }

        /* 14. App Icon İyileştirmesi */
        .app-icon {
            position: relative;
            overflow: hidden;
        }

        .app-icon::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1) 0%, transparent 50%, rgba(0, 0, 0, 0.1) 100%);
        }

        .app-category {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            font-size: 0.7rem;
            font-weight: 600;
            z-index: 2;
        }

        /* 15. Responsive İyileştirmeler */
        @media (max-width: 768px) {
            .app-item:hover {
                transform: none;
            }
            
            .premium-btn:hover {
                transform: none;
            }
            
            .stat-card:hover {
                transform: none;
            }
            
            .gradient-badge:hover {
                transform: none;
            }
        }

        /* 16. Scrollbar İyileştirmesi */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        body.dark-mode ::-webkit-scrollbar-track {
            background: #2d2d2d;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--primary-gradient);
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
        }

        /* --- Ban Kontrol --- */
        .ban-message {
            background: #ffebee;
            color: #c62828;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid #c62828;
            display: none;
        }

        body.dark-mode .ban-message {
            background: #2d1b1b;
            color: #ff5252;
            border-color: #ff5252;
        }

        .ban-message h3 {
            margin-bottom: 10px;
            font-size: clamp(18px, 4vw, 20px);
        }

        .ban-message p {
            margin-bottom: 5px;
        }

        .ban-timer {
            font-size: clamp(16px, 3vw, 18px);
            font-weight: bold;
            color: #d32f2f;
            margin-top: 10px;
        }

        body.dark-mode .ban-timer {
            color: #ff6b6b;
        }

        .auto-refresh-notice {
            background: #e3f2fd;
            color: #1565c0;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            font-size: 14px;
            text-align: center;
            display: none;
        }

        body.dark-mode .auto-refresh-notice {
            background: #1a237e;
            color: #90caf9;
        }

        .form-disabled {
            opacity: 0.6;
            pointer-events: none;
        }

        /* --- SIDEBAR --- */
        .sidebar {
            width: var(--sidebar-width);
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: #fff;
            height: 100vh;
            position: fixed;
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            box-shadow: 2px 0 10px rgba(0,0,0,.1);
            transition: all 0.3s ease;
            z-index: 1000;
            overflow-y: auto;
        }

        .sidebar.collapsed {
            width: var(--sidebar-collapsed-width);
        }

        .sidebar-toggle {
            background: none;
            border: none;
            color: #fff;
            font-size: 20px;
            cursor: pointer;
            padding: 10px;
            margin: 0 auto 20px;
            display: block;
            transition: all 0.3s ease;
        }

        .sidebar-toggle:hover {
            background: rgba(255,255,255,0.1);
            border-radius: 5px;
        }

        .logo {
            text-align: center;
            padding: 20px 0;
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255,255,255,.2);
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .logo {
            padding: 15px 0;
            margin-bottom: 20px;
        }

        .logo h1 {
            font-size: clamp(20px, 3vw, 24px);
            font-weight: 700;
            color: #fff;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .logo h1 {
            font-size: 0;
        }

        .sidebar.collapsed .logo::after {
            content: "🚀";
            font-size: 24px;
        }

        .menu {
            flex-grow: 1;
        }

        .menu-item {
            padding: 15px 25px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
            white-space: nowrap;
            overflow: hidden;
            margin: 2px 10px;
            border-radius: 8px;
        }

        .menu-item:hover {
            background-color: rgba(255,255,255,.1);
            border-left: 4px solid #fff;
        }

        .menu-item.active {
            background-color: rgba(255,255,255,.15);
            border-left: 4px solid #fff;
        }

        .menu-item i {
            margin-right: 15px;
            font-size: 18px;
            flex-shrink: 0;
            width: 20px;
            text-align: center;
        }

        .sidebar.collapsed .menu-item i {
            margin-right: 0;
        }

        .menu-item span {
            transition: opacity 0.3s;
        }

        .sidebar.collapsed .menu-item span {
            opacity: 0;
            width: 0;
        }

        .profile {
            padding: 15px;
            border-top: 1px solid rgba(255,255,255,.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .profile {
            padding: 15px 10px;
            flex-direction: column;
            gap: 8px;
        }

        .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            font-weight: bold;
            flex-shrink: 0;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .profile-img {
            width: 35px;
            height: 35px;
            margin-right: 0;
        }

        .profile-info {
            flex: 1;
            min-width: 0;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .sidebar.collapsed .profile-info {
            display: none;
            margin-right: 0;
        }

        .profile-info h3 {
            font-size: clamp(12px, 2vw, 14px);
            margin-bottom: 3px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-align: center;
        }

        .profile-info p {
            font-size: clamp(10px, 2vw, 11px);
            opacity: .8;
            text-align: center;
        }

        .dark-mode-btn {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: background .3s;
            font-size: 16px;
            flex-shrink: 0;
        }

        .dark-mode-btn:hover {
            background: rgba(255,255,255,.2);
        }

        .sidebar.collapsed .dark-mode-btn {
            margin-left: 0;
            margin-top: 5px;
        }
/* --- KATEGORİ MENÜ STİLLERİ --- */
.menu-item.has-submenu {
    position: relative;
}

.menu-item.has-submenu::after {
    content: '▼';
    position: absolute;
    right: 15px;
    font-size: 10px;
    transition: transform 0.3s ease;
}

.menu-item.has-submenu.active::after {
    transform: rotate(180deg);
}

.submenu {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    background: rgba(0, 0, 0, 0.1);
    margin: 0 10px;
    border-radius: 0 0 8px 8px;
}

.submenu.show {
    max-height: 300px;
}

.submenu-item {
    padding: 12px 20px 12px 45px;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    border-left: 4px solid transparent;
    font-size: 14px;
    color: rgba(255, 255, 255, 0.8);
}

.submenu-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-left: 4px solid rgba(255, 255, 255, 0.5);
    color: #fff;
}

.submenu-item i {
    margin-right: 10px;
    font-size: 14px;
    width: 16px;
    text-align: center;
}

/* Sidebar küçültülmüş durumda submenu'yi gizle */
.sidebar.collapsed .submenu {
    display: none;
}
        /* --- Dil Değiştirici --- */
        .language-selector {
            position: relative;
            margin-right: 15px;
        }

        .language-btn {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            color: white;
            padding: 8px 15px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .language-btn:hover {
            background: rgba(255,255,255,0.2);
        }

        .language-dropdown {
            position: absolute;
            top: 100%;
            right: 0;
            background: var(--card-bg);
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            min-width: 150px;
            display: none;
            z-index: 1002;
            margin-top: 5px;
        }

        body.dark-mode .language-dropdown {
            background: #2d2d2d;
            border: 1px solid #444;
        }

        .language-dropdown.show {
            display: block;
            animation: fadeIn 0.3s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .language-option {
            padding: 12px 15px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 10px;
            transition: background 0.3s ease;
            border-bottom: 1px solid #f0f0f0;
        }

        body.dark-mode .language-option {
            border-bottom-color: #444;
        }

        .language-option:last-child {
            border-bottom: none;
        }

        .language-option:hover {
            background: #f5f5f5;
        }

        body.dark-mode .language-option:hover {
            background: #3d3d3d;
        }

        .language-option.active {
            background: var(--primary-color);
            color: white;
        }

        .language-flag {
            width: 20px;
            height: 15px;
            border-radius: 2px;
            object-fit: cover;
        }

        /* --- ANA İÇERİK --- */
        .main-content {
            flex: 1;
            margin-left: var(--sidebar-width);
            padding: 30px;
            transition: all 0.3s ease;
            min-height: 100vh;
        }

        .sidebar.collapsed ~ .main-content {
            margin-left: var(--sidebar-collapsed-width);
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            gap: 20px;
        }

        .user-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-actions button {
            background: var(--primary-color);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: clamp(14px, 2vw, 16px);
        }

        .user-actions button:hover {
            background: #08447c;
            transform: translateY(-2px);
        }

        /* --- İNDİRİLENLER BÖLÜMÜ --- */
        .downloads-section {
            background: var(--card-bg);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,.08);
            border: 1px solid rgba(0,0,0,.05);
        }

        body.dark-mode .downloads-section {
            background: #2d2d2d;
            border-color: rgba(255,255,255,.05);
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 25px;
            color: var(--text-color);
        }

        .downloads-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .download-item {
            display: flex;
            align-items: center;
            padding: 25px;
            border-radius: 12px;
            background: #f9f9f9;
            transition: all 0.3s ease;
            border-left: 4px solid var(--primary-color);
            box-shadow: 0 3px 10px rgba(0,0,0,.05);
        }

        body.dark-mode .download-item {
            background: #3d3d3d;
        }

        .download-item:hover {
            background: #f0f0f0;
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(0,0,0,.1);
        }

        body.dark-mode .download-item:hover {
            background: #4d4d4d;
        }

        .app-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            margin-right: 25px;
            flex-shrink: 0;
        }

        .app-info {
            flex-grow: 1;
        }

        .app-info h3 {
            font-size: 20px;
            margin-bottom: 8px;
            color: var(--text-color);
        }

        .app-info p {
            color: #666;
            font-size: 14px;
        }

        body.dark-mode .app-info p {
            color: #ccc;
        }

        .download-status {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 8px;
        }

        .download-date {
            color: #666;
            font-size: 14px;
            font-weight: 500;
        }

        body.dark-mode .download-date {
            color: #ccc;
        }

        .download-time {
            color: #999;
            font-size: 13px;
        }

        .download-actions {
            display: flex;
            gap: 12px;
            margin-top: 15px;
        }

        .download-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
            box-shadow: 0 2px 8px rgba(0,0,0,.1);
        }

        .redownload-btn {
            background: var(--primary-color);
            color: white;
        }

        .redownload-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        .remove-btn {
            background: #f5f5f5;
            color: #666;
            border: 1px solid #e0e0e0;
        }

        body.dark-mode .remove-btn {
            background: #4d4d4d;
            color: #ccc;
            border-color: #666;
        }

        .remove-btn:hover {
            background: #e0e0e0;
            transform: translateY(-2px);
        }

        body.dark-mode .remove-btn:hover {
            background: #666;
        }

        /* --- BOŞ DURUM --- */
        .empty-state {
            text-align: center;
            padding: 80px 20px;
            color: #666;
        }

        .empty-state i {
            font-size: 100px;
            margin-bottom: 25px;
            display: block;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--text-color);
        }

        .empty-state p {
            font-size: 16px;
            margin-bottom: 35px;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.5;
        }

        body.dark-mode .empty-state p {
            color: #ccc;
        }

        .empty-state button {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 15px 35px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 16px;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .empty-state button:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        /* --- MODALLAR --- */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .modal-content {
            background: var(--card-bg);
            border-radius: 15px;
            width: 90%;
            max-width: 500px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,.3);
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding: 25px 25px 0;
        }

        .modal-header h2 {
            color: var(--text-color);
            margin: 0;
        }

        .close-modal {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            color: #666;
        }

        body.dark-mode .close-modal {
            color: #ccc;
        }

        /* --- İNDİRME POPUP STİLLERİ --- */
        .download-modal-content {
            background: var(--card-bg);
            border-radius: 15px;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0,0,0,.3);
        }

        .download-frame-container {
            padding: 0;
            height: 600px;
            position: relative;
            background: white !important;
        }

        .download-frame {
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 0 0 15px 15px;
            background: white !important;
        }

        .download-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }

        body.dark-mode .download-modal-header {
            border-bottom-color: #444;
        }

        .download-modal-header h2 {
            color: var(--text-color);
            margin: 0;
            font-size: 1.5rem;
        }

        .download-info {
            padding: 15px 20px;
            background: #f8f9fa;
            border-bottom: 1px solid #eee;
        }

        body.dark-mode .download-info {
            background: #3d3d3d;
            border-bottom-color: #444;
            color: #fff;
        }

        .download-info p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        body.dark-mode .download-info p {
            color: #ccc;
        }

        /* --- FORM STİLLERİ --- */
        .form-group {
            margin-bottom: 20px;
            padding: 0 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-color);
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 14px 18px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            background: var(--card-bg);
            transition: all 0.3s ease;
        }

        body.dark-mode .form-group input {
            background: #3d3d3d;
            border-color: #555;
            color: #fff;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.2);
        }

        .login-btn {
            width: calc(100% - 50px);
            margin: 0 25px 25px;
            background: var(--accent-color);
            color: #fff;
            border: none;
            padding: 14px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .login-btn:hover {
            background: #764ba2;
            transform: translateY(-2px);
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
            padding: 0 25px 25px;
        }

        body.dark-mode .register-link {
            color: #ccc;
        }

        .register-link a {
            color: var(--accent-color);
            text-decoration: none;
            font-weight: 500;
        }

        /* --- ÖZEL ONAY MODALI --- */
        .confirm-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 10000;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
        }

        .confirm-modal-content {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 400px;
            width: 90%;
            text-align: center;
            animation: modalSlideIn 0.3s ease-out;
            border: 1px solid #e0e0e0;
        }

        body.dark-mode .confirm-modal-content {
            background: #2d2d2d;
            border-color: #444;
        }

        @keyframes modalSlideIn {
            from {
                opacity: 0;
                transform: scale(0.8) translateY(-20px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .confirm-icon {
            font-size: 64px;
            margin-bottom: 20px;
        }

        .confirm-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--text-color);
        }

        .confirm-message {
            font-size: 16px;
            color: #666;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        body.dark-mode .confirm-message {
            color: #ccc;
        }

        .confirm-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .confirm-btn {
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s;
            min-width: 120px;
        }

        .confirm-btn.cancel {
            background: #f5f5f5;
            color: #666;
            border: 2px solid #e0e0e0;
        }

        body.dark-mode .confirm-btn.cancel {
            background: #4d4d4d;
            color: #ccc;
            border-color: #666;
        }

        .confirm-btn.cancel:hover {
            background: #e0e0e0;
            transform: translateY(-2px);
        }

        body.dark-mode .confirm-btn.cancel:hover {
            background: #666;
        }

        .confirm-btn.confirm {
            background: var(--primary-gradient);
            color: white;
            border: 2px solid var(--accent-color);
        }

        .confirm-btn.confirm:hover {
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
        }

        .confirm-btn.delete {
            background: linear-gradient(135deg, #ff4444 0%, #cc0000 100%);
            color: white;
            border: 2px solid #ff4444;
        }

        .confirm-btn.delete:hover {
            background: linear-gradient(135deg, #cc0000 0%, #990000 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 68, 68, 0.3);
        }

        /* --- ALERT SİSTEMİ --- */
        .custom-alert {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--card-bg);
            border-radius: 10px;
            padding: 15px 20px;
            box-shadow: 0 8px 25px rgba(0,0,0,.15);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 10px;
            transform: translateX(400px);
            transition: transform 0.3s ease;
            max-width: 400px;
            border-left: 4px solid #2196F3;
        }

        .custom-alert.show {
            transform: translateX(0);
        }

        .custom-alert.success {
            border-left-color: #4CAF50;
        }

        .custom-alert.error {
            border-left-color: #f44336;
        }

        .custom-alert.warning {
            border-left-color: #ff9800;
        }

        .custom-alert.info {
            border-left-color: #2196F3;
        }

        .alert-icon {
            font-size: 20px;
        }

        .alert-content {
            flex: 1;
        }

        .alert-content p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        body.dark-mode .alert-content p {
            color: #ccc;
        }

        .close-alert {
            background: none;
            border: none;
            font-size: 18px;
            cursor: pointer;
            color: #666;
            padding: 0;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body.dark-mode .close-alert {
            color: #ccc;
        }

        /* --- SEARCH BAR --- */
        .search-bar {
            display: flex;
            align-items: center;
            background: var(--card-bg);
            border-radius: 30px;
            padding: 12px 25px;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
            width: 500px;
            border: 1px solid rgba(0,0,0,.05);
            transition: all 0.3s ease;
            flex: 1;
            max-width: 500px;
        }

        body.dark-mode .search-bar {
            background: #2d2d2d;
            border-color: rgba(255,255,255,.1);
        }

        .search-bar:focus-within {
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.15);
            transform: translateY(-2px);
        }

        .search-bar input {
            border: none;
            outline: none;
            padding: 5px 15px;
            width: 100%;
            font-size: 16px;
            background: transparent;
            color: var(--text-color);
        }

        .search-bar input::placeholder {
            color: #999;
        }

        body.dark-mode .search-bar input::placeholder {
            color: #ccc;
        }

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .sidebar.collapsed {
                width: 280px;
                transform: translateX(-100%);
            }
            
            .sidebar.collapsed.open {
                transform: translateX(0);
            }
            
            .menu-toggle {
                display: block;
                position: fixed;
                top: 20px;
                left: 20px;
                background: var(--accent-color);
                color: white;
                border: none;
                padding: 12px;
                border-radius: 8px;
                cursor: pointer;
                z-index: 1001;
            }
            
            .main-content {
                margin-left: 0 !important;
                padding: 20px 15px;
            }
            
            .header {
                flex-direction: column;
                gap: 20px;
            }
            
            .search-bar {
                width: 100%;
                max-width: 100%;
            }
            
            .user-actions {
                gap: 10px;
            }
            
            .language-btn {
                min-width: 100px;
                padding: 8px 12px;
            }
            
            .download-item {
                flex-direction: column;
                text-align: center;
                gap: 20px;
            }
            
            .download-status {
                align-items: center;
            }
            
            .download-actions {
                justify-content: center;
            }
            
            .download-modal-content {
                width: 95%;
                max-width: 95%;
            }
            
            .download-frame-container {
                height: 500px;
            }
        }

        @media (max-width: 480px) {
            .download-frame-container {
                height: 400px;
            }
            
            .download-modal-header h2 {
                font-size: 1.2rem;
            }
            
            .user-actions {
                flex-direction: column;
                gap: 10px;
            }
            
            .language-btn, .user-actions button {
                width: 100%;
                justify-content: center;
            }
        }

        /* Touch device optimizasyonları */
        @media (hover: none) and (pointer: coarse) {
            .menu-item:hover {
                background-color: transparent;
            }
            
            .download-item:hover {
                transform: none;
            }
            
            .user-actions button:hover,
            .download-actions button:hover,
            .confirm-btn:hover {
                transform: none;
            }
            
            /* Touch için daha büyük tıklama alanları */
            .menu-item,
            .download-actions button,
            .confirm-btn {
                min-height: 44px;
            }
        }

        /* Yüksek çözünürlük ekran desteği */
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            .app-icon,
            .profile-img {
                image-rendering: -webkit-optimize-contrast;
                image-rendering: crisp-edges;
            }
        }
    </style>
</head>
<body>
    <!-- MENU TOGGLE -->
    <button class="menu-toggle" id="menuToggle" style="display: none;">☰</button>

    <!-- SIDEBAR -->
    <div class="sidebar" id="sidebar">
        <button class="sidebar-toggle" id="sidebarToggle">≡</button>
        <div class="logo">
            <h1 data-i18n="app.name">Dehşet Store</h1>
        </div>
        <div class="menu">
            <div class="menu-item" onclick="window.location.href='index.php'">
                <i>🏠</i>
                <span data-i18n="menu.home">Anasayfa</span>
            </div>
            <div class="menu-item" onclick="window.location.href='apps.php'">
                <i>📱</i>
                <span data-i18n="menu.apps">Uygulamalar</span>
            </div>
            <!-- KATEGORİLER MENÜSÜ -->
            <div class="menu-item has-submenu" id="categoriesMenu">
                <i>📂</i>
                <span data-i18n="menu.categories">Kategoriler</span>
            </div>
            <div class="submenu" id="categoriesSubmenu">
                <div class="submenu-item" onclick="goToCategory('oyun')">
                    <i>🎮</i>
                    <span data-i18n="category.games">Oyunlar</span>
                </div>
                <div class="submenu-item" onclick="goToCategory('sistem')">
                    <i>⚙️</i>
                    <span data-i18n="category.system">Sistem Araçları</span>
                </div>
                <div class="submenu-item" onclick="goToCategory('multimedya')">
                    <i>🎵</i>
                    <span data-i18n="category.media">Multimedya</span>
                </div>
                <div class="submenu-item" onclick="goToCategory('güvenlik')">
                    <i>🛡️</i>
                    <span data-i18n="category.security">Güvenlik</span>
                </div>
                <div class="submenu-item" onclick="goToCategory('internet')">
                    <i>🌐</i>
                    <span data-i18n="category.internet">İnternet</span>
                </div>
            </div>
            <div class="menu-item active">
                <i>📥</i>
                <span data-i18n="menu.downloads">İndirilenler</span>
            </div>
        </div>

        <div class="profile" id="profileSection">
            <div class="profile-img" id="userAvatar">K</div>
            <div class="profile-info">
                <h3 id="userName" data-i18n="user.guest">Kullanıcı</h3>
                <p id="userStatus" data-i18n="user.login">Giriş Yap</p>
            </div>
            <button class="dark-mode-btn" id="darkModeToggle">🌙</button>
        </div>
    </div>

    <!-- ANA İÇERİK -->
    <div class="main-content" id="mainContent">
        <!-- Ban Mesajı -->
        <div class="ban-message" id="banMessage"></div>
        <div class="auto-refresh-notice" id="autoRefreshNotice">
            <span data-i18n="ban.autoRefresh">Ban süresi otomatik olarak güncelleniyor... Sayfayı yenilemenize gerek yok.</span>
        </div>

        <div class="header">
            <div class="search-bar">
                <input type="text" id="searchInput" data-i18n-placeholder="search_downloads" placeholder="İndirilenlerde ara...">
            </div>
            
            <div class="user-actions">
                <!-- Dil Değiştirici -->
                <div class="language-selector">
                    <button class="language-btn" id="languageBtn">
                        <span class="language-flag">🌐</span>
                        <span id="currentLanguage">TR</span>
                        <span>▼</span>
                    </button>
                    <div class="language-dropdown" id="languageDropdown">
                        <div class="language-option active" data-lang="tr">
                            <span class="language-flag">🇹🇷</span>
                            <span>Türkçe</span>
                        </div>
                        <div class="language-option" data-lang="en">
                            <span class="language-flag">🇺🇸</span>
                            <span>English</span>
                        </div>
                    </div>
                </div>
                <button id="loginBtn" data-i18n="auth.login">Giriş Yap</button>
            </div>
        </div>

        <div class="downloads-section">
            <div class="section-title">
                <h2 data-i18n="sections.downloads">İndirilen Uygulamalar</h2>
            </div>
            
            <div id="downloadsList" class="downloads-list">
                <!-- İndirilen uygulamalar buraya eklenecek -->
            </div>
        </div>
    </div>

    <!-- GİRİŞ MODALI -->
    <div class="modal" id="loginModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 data-i18n="auth.login">Giriş Yap</h2>
                <button class="close-modal">&times;</button>
            </div>
            <form id="loginForm">
                <div class="form-group">
                    <label for="username" data-i18n="auth.username">Kullanıcı Adı veya E-posta</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password" data-i18n="auth.password">Şifre</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <button type="submit" class="login-btn" data-i18n="auth.login">Giriş Yap</button>
            </form>
            <div class="register-link">
                <span data-i18n="auth.noAccount">Hesabınız yok mu?</span> 
                <a href="register.php" data-i18n="auth.register">Kayıt Ol</a>
            </div>
        </div>
    </div>

    <!-- İNDİRME POPUP MODALI -->
    <div class="modal" id="downloadModal">
        <div class="download-modal-content">
            <div class="download-modal-header">
                <h2 id="downloadModalTitle" data-i18n="download.page">İndirme Sayfası</h2>
                <button class="close-modal">&times;</button>
            </div>
            <div class="download-info">
                <p id="downloadStatus" data-i18n="download.loading">✅ İndirme sayfası yükleniyor...</p>
            </div>
            <div class="download-frame-container">
                <iframe id="downloadFrame" class="download-frame" src="about:blank"></iframe>
            </div>
        </div>
    </div>

    <!-- ÖZEL ONAY MODALI -->
    <div class="confirm-modal" id="confirmModal">
        <div class="confirm-modal-content">
            <div class="confirm-icon" id="confirmIcon">⚠️</div>
            <h3 class="confirm-title" id="confirmTitle" data-i18n="confirmation.required">Onay Gerekli</h3>
            <p class="confirm-message" id="confirmMessage" data-i18n="confirmation.irreversible">Bu işlem geri alınamaz.</p>
            <div class="confirm-buttons">
                <button class="confirm-btn cancel" id="cancelBtn" data-i18n="confirmation.cancel">İptal</button>
                <button class="confirm-btn confirm" id="confirmBtn" data-i18n="confirmation.confirm">Onayla</button>
            </div>
        </div>
    </div>

    <script>
        // === ÇOKLU DİL SİSTEMİ ===
        const translations = {
            tr: {
                // Genel
                "app.name": "Dehşet Store",
                
                // Menü
                "menu.home": "Anasayfa",
                "menu.apps": "Uygulamalar",
                "menu.downloads": "İndirilenler",
                
                // Kullanıcı
                "user.guest": "Kullanıcı",
                "user.login": "Giriş Yap",
                "user.online": "Çevrimiçi",
                
                // Ban Mesajları
                "ban.title": "🚫 Erişim Engellendi",
                "ban.message": "IP adresiniz güvenlik ihlali nedeniyle 2 saatliğine banlandı.",
                "ban.instruction": "Lütfen ban süresi dolduktan sonra tekrar deneyin.",
                "ban.remaining": "Kalan Süre",
                "ban.autoRefresh": "Ban süresi otomatik olarak güncelleniyor... Sayfayı yenilemenize gerek yok.",
                
                // Kimlik Doğrulama
                "auth.login": "Giriş Yap",
                "auth.logout": "Çıkış Yap",
                "auth.username": "Kullanıcı Adı veya E-posta",
                "auth.password": "Şifre",
                "auth.noAccount": "Hesabınız yok mu?",
                "auth.register": "Kayıt Ol",
                
                // Bölümler
                "sections.downloads": "İndirilen Uygulamalar",
                
                // İndirme
                "download.page": "İndirme Sayfası",
                "download.loading": "✅ İndirme sayfası yükleniyor...",
                
                // Arama
                "search_downloads": "İndirilenlerde ara...",
                
                // Onay
                "confirmation.required": "Onay Gerekli",
                "confirmation.irreversible": "Bu işlem geri alınamaz.",
                "confirmation.cancel": "İptal",
                "confirmation.confirm": "Onayla",
                
                // Alert Mesajları
                "alert.loginSuccess": "Giriş başarılı!",
                "alert.logoutSuccess": "Çıkış yapıldı!",
                "alert.loginError": "Giriş sırasında hata oluştu!",
                "alert.logoutError": "Çıkış sırasında hata oluştu!",
                "alert.downloadLogin": "İndirmek için giriş yapmalısınız!",
                "alert.banDownload": "IP adresiniz banlandı! İndirme yapamazsınız.",
                "alert.noDownloadLink": "İndirme linki bulunamadı!",
                "alert.downloadStarting": " indirme sayfası açılıyor...",
                "alert.appsLoadError": "Uygulamalar yüklenemedi , Sayfayı yenileyin",
                
                // İndirilenler
                "downloads.noDownloads": "Henüz hiç uygulama indirmediniz",
                "downloads.noDownloadsDesc": "Uygulamalar sayfasından uygulama indirerek burada görüntüleyebilirsiniz.",
                "downloads.exploreApps": "Uygulamaları Keşfet",
                "downloads.downloadSuccess": "Başarıyla indirildi",
                "downloads.redownload": "Tekrar İndir",
                "downloads.remove": "Kaldır",
                "menu.categories": "Kategoriler",
                "category.games": "Oyunlar",
                "category.system": "Sistem Araçları",
                "category.media": "Multimedya",
                "category.security": "Güvenlik",
                "category.internet": "İnternet"
            },
            
            en: {
                "app.name": "Dehşet Store",
                "menu.home": "Home",
                "menu.apps": "Apps",
                "menu.downloads": "Downloads",
                "user.guest": "User",
                "user.login": "Login",
                "user.online": "Online",
                "ban.title": "🚫 Access Denied",
                "ban.message": "Your IP has been banned for 2 hours due to security violation.",
                "ban.instruction": "Please try again after the ban period ends.",
                "ban.remaining": "Remaining Time",
                "ban.autoRefresh": "Ban time is updating automatically... No need to refresh the page.",
                "auth.login": "Login",
                "auth.logout": "Logout",
                "auth.username": "Username or Email",
                "auth.password": "Password",
                "auth.noAccount": "Don't have an account?",
                "auth.register": "Register",
                "sections.downloads": "Downloaded Apps",
                "download.page": "Download Page",
                "download.loading": "✅ Download page loading...",
                "search_downloads": "Search downloads...",
                "confirmation.required": "Confirmation Required",
                "confirmation.irreversible": "This action cannot be undone.",
                "confirmation.cancel": "Cancel",
                "confirmation.confirm": "Confirm",
                "alert.loginSuccess": "Login successful!",
                "alert.logoutSuccess": "Logged out successfully!",
                "alert.loginError": "Login error occurred!",
                "alert.logoutError": "Logout error occurred!",
                "alert.downloadLogin": "You must login to download!",
                "alert.banDownload": "Your IP is banned! Cannot download.",
                "alert.noDownloadLink": "Download link not found!",
                "alert.downloadStarting": " download page opening...",
                "alert.appsLoadError": "Failed to load apps",
                "downloads.noDownloads": "You haven't downloaded any apps yet",
                "downloads.noDownloadsDesc": "You can download apps from the apps page and view them here.",
                "downloads.exploreApps": "Explore Apps",
                "downloads.downloadSuccess": "Successfully downloaded",
                "downloads.redownload": "Download Again",
                "downloads.remove": "Remove",
                 "menu.categories": "Categories",
                "category.games": "Games",
                "category.system": "System Tools",
                "category.media": "Multimedia",
                "category.security": "Security",
                "category.internet": "Internet"
                
            }
        };

        // === BAN KONTROL SİSTEMİ ===
        let banCountdownInterval = null;

        // === DOM ELEMENTS ===
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mainContent = document.getElementById('mainContent');
        const loginBtn = document.getElementById('loginBtn');
        const loginModal = document.getElementById('loginModal');
        const closeModals = document.querySelectorAll('.close-modal');
        const loginForm = document.getElementById('loginForm');
        const downloadsList = document.getElementById('downloadsList');
        const searchInput = document.getElementById('searchInput');
        const downloadModal = document.getElementById('downloadModal');
        const downloadFrame = document.getElementById('downloadFrame');
        const downloadModalTitle = document.getElementById('downloadModalTitle');
        const confirmModal = document.getElementById('confirmModal');
        const confirmIcon = document.getElementById('confirmIcon');
        const confirmTitle = document.getElementById('confirmTitle');
        const confirmMessage = document.getElementById('confirmMessage');
        const cancelBtn = document.getElementById('cancelBtn');
        const confirmBtn = document.getElementById('confirmBtn');
        const banMessage = document.getElementById('banMessage');
        const autoRefreshNotice = document.getElementById('autoRefreshNotice');
        const languageBtn = document.getElementById('languageBtn');
        const languageDropdown = document.getElementById('languageDropdown');
        const currentLanguage = document.getElementById('currentLanguage');
        const darkModeToggle = document.getElementById('darkModeToggle');
        const profileSection = document.getElementById('profileSection');

        // === DEĞİŞKENLER ===
        let allDownloads = [];
        let currentCallback = null;
        let currentLang = 'tr';

        // === SAYFA YÜKLENDİĞİNDE ===
        document.addEventListener('DOMContentLoaded', function() {
            initializeLanguage();
            checkLoginStatus();
            setupEventListeners();
            loadDownloads();
            loadDarkMode();
            setupConfirmModal();
            checkBanStatus();
            setupCategoriesMenu();
            
            // Periyodik ban kontrolü
            setInterval(() => {
                if (!banCountdownInterval) {
                    checkBanStatus();
                }
            }, 30000);
            
            // Mobil menu toggle
            if (window.innerWidth <= 768) {
                menuToggle.style.display = 'block';
            }
        });

        // === MODERN TASARIM İYİLEŞTİRMELERİ ===
        function initModernDesign() {
            // Tüm premium butonları güncelle
            document.querySelectorAll('button').forEach(button => {
                if (button.textContent.includes('Giriş Yap') || 
                    button.textContent.includes('Login') ||
                    button.classList.contains('redownload-btn') ||
                    button.textContent.includes('Tekrar İndir') ||
                    button.textContent.includes('Download Again')) {
                    button.classList.add('premium-btn');
                }
            });
            
            // Tüm input alanlarını güncelle
            document.querySelectorAll('input[type="text"], input[type="password"]').forEach(input => {
                input.classList.add('premium-input');
            });
            
            // Sidebar'a glass effect ekle
            sidebar.classList.add('glass-effect');
            
            // Modal'lara modern stil ekle
            document.querySelectorAll('.modal-content').forEach(modal => {
                modal.classList.add('glass-card');
            });
        }
// Kategori menüsü toggle fonksiyonu
function setupCategoriesMenu() {
    const categoriesMenu = document.getElementById('categoriesMenu');
    const categoriesSubmenu = document.getElementById('categoriesSubmenu');
    
    if (categoriesMenu && categoriesSubmenu) {
        categoriesMenu.addEventListener('click', function(e) {
            e.stopPropagation();
            categoriesMenu.classList.toggle('active');
            categoriesSubmenu.classList.toggle('show');
        });
        
        // Menü dışına tıklayınca kapat
        document.addEventListener('click', function() {
            categoriesMenu.classList.remove('active');
            categoriesSubmenu.classList.remove('show');
        });
    }
}

// Kategoriye gitme fonksiyonu
function goToCategory(category) {
    // Kategori parametresi ile uygulamalar sayfasına yönlendir
    window.location.href = `apps.php?category=${category}`;
}
        // === ÇOKLU DİL SİSTEMİ ===
        function initializeLanguage() {
            // Tarayıcı dilini algıla veya localStorage'dan yükle
            const savedLang = localStorage.getItem('preferredLanguage');
            const browserLang = navigator.language.split('-')[0];
            
            if (savedLang && translations[savedLang]) {
                currentLang = savedLang;
            } else if (translations[browserLang]) {
                currentLang = browserLang;
            } else {
                currentLang = 'tr'; // Varsayılan dil
            }
            
            updateLanguage(currentLang);
            initModernDesign();
        }

        function updateLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('preferredLanguage', lang);
            
            // Dil butonunu güncelle
            const currentOption = document.querySelector(`.language-option[data-lang="${lang}"]`);
            const flag = currentOption.querySelector('.language-flag').textContent;
            const langCode = lang.toUpperCase();
            
            currentLanguage.textContent = langCode;
            languageBtn.querySelector('.language-flag').textContent = flag;
            
            // Tüm dil seçeneklerini güncelle
            document.querySelectorAll('.language-option').forEach(option => {
                option.classList.remove('active');
                if (option.dataset.lang === lang) {
                    option.classList.add('active');
                }
            });
            
            // Sayfa içeriğini çevir
            translatePage();
            
            // HTML lang attribute'ını güncelle
            document.documentElement.lang = lang;
        }

        function translatePage() {
            // Tüm çeviri öğelerini bul ve çevir
            document.querySelectorAll('[data-i18n]').forEach(element => {
                const key = element.getAttribute('data-i18n');
                if (translations[currentLang] && translations[currentLang][key]) {
                    element.textContent = translations[currentLang][key];
                }
            });
            
            // Placeholder'ları çevir
            const placeholderElements = document.querySelectorAll('[data-i18n-placeholder]');
            placeholderElements.forEach(element => {
                const key = element.getAttribute('data-i18n-placeholder');
                if (translations[currentLang] && translations[currentLang][key]) {
                    element.setAttribute('placeholder', translations[currentLang][key]);
                }
            });
        }

        // === BAN KONTROL FONKSİYONLARI ===
        function checkBanStatus() {
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                    } else {
                        hideBanMessage();
                    }
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        }

        function showBanMessage(remainingTime) {
            const loginBtn = document.getElementById('loginBtn');
            
            loginBtn.disabled = true;
            loginBtn.style.opacity = '0.6';
            loginBtn.style.cursor = 'not-allowed';
            
            mainContent.classList.add('form-disabled');
            
            banMessage.style.display = 'block';
            autoRefreshNotice.style.display = 'block';

            startBanCountdown(remainingTime);
        }

        function hideBanMessage() {
            const loginBtn = document.getElementById('loginBtn');
            
            loginBtn.disabled = false;
            loginBtn.style.opacity = '1';
            loginBtn.style.cursor = 'pointer';
            
            mainContent.classList.remove('form-disabled');

            banMessage.style.display = 'none';
            autoRefreshNotice.style.display = 'none';

            if (banCountdownInterval) {
                clearInterval(banCountdownInterval);
                banCountdownInterval = null;
            }
        }

        function startBanCountdown(remainingTime) {
            if (banCountdownInterval) {
                clearInterval(banCountdownInterval);
            }

            updateBanTimer(remainingTime);

            banCountdownInterval = setInterval(() => {
                remainingTime--;
                
                if (remainingTime <= 0) {
                    clearInterval(banCountdownInterval);
                    banCountdownInterval = null;
                    
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {
                    updateBanTimer(remainingTime);
                }
            }, 1000);
        }

        function updateBanTimer(remainingTime) {
            const hours = Math.floor(remainingTime / 3600);
            const minutes = Math.floor((remainingTime % 3600) / 60);
            const seconds = remainingTime % 60;

            banMessage.innerHTML = `
                <h3>${translations[currentLang]['ban.title'] || '🚫 Erişim Engellendi'}</h3>
                <p>${translations[currentLang]['ban.message'] || 'IP adresiniz güvenlik ihlali nedeniyle 2 saatliğine banlandı.'}</p>
                <p>${translations[currentLang]['ban.instruction'] || 'Lütfen ban süresi dolduktan sonra tekrar deneyin.'}</p>
                <div class="ban-timer">
                    ${translations[currentLang]['ban.remaining'] || 'Kalan Süre'}: ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}
                </div>
            `;
        }

        // === OLAY YÖNETİCİLERİ ===
        function setupEventListeners() {
            // Menu toggle (mobil için)
            if (menuToggle) {
                menuToggle.addEventListener('click', () => {
                    sidebar.classList.toggle('open');
                });
            }

            // Sidebar toggle (küçültme)
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
            });

            // Dil değiştirici
            languageBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                languageDropdown.classList.toggle('show');
            });

            // Dil seçenekleri
            document.querySelectorAll('.language-option').forEach(option => {
                option.addEventListener('click', () => {
                    const lang = option.dataset.lang;
                    updateLanguage(lang);
                    languageDropdown.classList.remove('show');
                });
            });

            // Dil dropdown'ını kapat
            document.addEventListener('click', (e) => {
                if (!languageBtn.contains(e.target) && !languageDropdown.contains(e.target)) {
                    languageDropdown.classList.remove('show');
                }
            });

            // Modal kapatma
            closeModals.forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    loginModal.style.display = 'none';
                    downloadModal.style.display = 'none';
                    downloadFrame.src = 'about:blank';
                });
            });

            // Giriş/çıkış butonu
            loginBtn.addEventListener('click', () => {
                fetch('sistem/check_ban.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.banned) {
                            showBanMessage(data.remaining_time);
                            showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! Giriş yapamazsınız.', 'error');
                            return;
                        }
                        
                        if (loginBtn.textContent === (translations[currentLang]['auth.login'] || 'Giriş Yap')) {
                            loginModal.style.display = 'flex';
                        } else {
                            handleLogout();
                        }
                    })
                    .catch(error => {
                        console.error('Ban kontrol hatası:', error);
                    });
            });

            // Giriş formu
            loginForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                fetch('sistem/check_ban.php')
                    .then(response => response.json())
                    .then(data => {
                        if (data.banned) {
                            showBanMessage(data.remaining_time);
                            showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! Giriş yapamazsınız.', 'error');
                            return;
                        }
                        
                        handleLogin();
                    })
                    .catch(error => {
                        console.error('Ban kontrol hatası:', error);
                    });
            });

            // Arama
            searchInput.addEventListener('input', filterDownloads);

            // Modal dışına tıklayınca kapat
            window.addEventListener('click', (e) => {
                if (e.target === loginModal) loginModal.style.display = 'none';
                if (e.target === downloadModal) {
                    downloadModal.style.display = 'none';
                    downloadFrame.src = 'about:blank';
                }
                if (e.target === confirmModal) {
                    hideConfirmModal();
                }
            });

            // Dark mode toggle
            darkModeToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleDarkMode();
            });

            // Profile bölümüne tıklama
            profileSection.addEventListener('click', function(e) {
                if (!e.target.closest('.dark-mode-btn')) {
                    goToProfile();
                }
            });
        }

        // === ONAY MODALINI AYARLA ===
        function setupConfirmModal() {
            // İptal butonu
            cancelBtn.addEventListener('click', hideConfirmModal);
            
            // Onay butonu
            confirmBtn.addEventListener('click', function() {
                if (currentCallback && typeof currentCallback === 'function') {
                    currentCallback();
                }
                hideConfirmModal();
            });
        }

        function showConfirmModal(message, type = 'default', callback) {
            currentCallback = callback;
            
            // Modal içeriğini type'a göre ayarla
            switch(type) {
                case 'download':
                    confirmIcon.textContent = '📥';
                    confirmTitle.textContent = translations[currentLang]['downloads.redownload'] || 'Tekrar İndir';
                    confirmBtn.textContent = translations[currentLang]['downloads.redownload'] || 'Tekrar İndir';
                    confirmBtn.className = 'confirm-btn confirm';
                    break;
                case 'delete':
                    confirmIcon.textContent = '🗑️';
                    confirmTitle.textContent = translations[currentLang]['downloads.remove'] || 'Kaldır';
                    confirmBtn.textContent = translations[currentLang]['downloads.remove'] || 'Kaldır';
                    confirmBtn.className = 'confirm-btn delete';
                    break;
                case 'logout':
                    confirmIcon.textContent = '🚪';
                    confirmTitle.textContent = translations[currentLang]['auth.logout'] || 'Çıkış Yap';
                    confirmBtn.textContent = translations[currentLang]['auth.logout'] || 'Çıkış Yap';
                    confirmBtn.className = 'confirm-btn confirm';
                    break;
                default:
                    confirmIcon.textContent = '⚠️';
                    confirmTitle.textContent = translations[currentLang]['confirmation.required'] || 'Onay Gerekli';
                    confirmBtn.textContent = translations[currentLang]['confirmation.confirm'] || 'Onayla';
                    confirmBtn.className = 'confirm-btn confirm';
            }
            
            confirmMessage.textContent = message;
            confirmModal.style.display = 'flex';
        }

        function hideConfirmModal() {
            confirmModal.style.display = 'none';
            currentCallback = null;
        }

        // === KARANLIK MOD ===
        function loadDarkMode() {
            if (localStorage.getItem('darkMode') === 'true') {
                document.body.classList.add('dark-mode');
            }
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
        }

        // === PROFİL SİSTEMİ ===
        function goToProfile() {
            fetch('check_login.php')
                .then(response => response.json())
                .then(data => {
                    if (data.loggedIn) {
                        window.location.href = 'profile.php';
                    } else {
                        loginModal.style.display = 'flex';
                    }
                });
        }

        function updateProfileSection(loggedIn, username = '') {
            const userAvatar = document.getElementById('userAvatar');
            const userName = document.getElementById('userName');
            const userStatus = document.getElementById('userStatus');
            
            if (loggedIn) {
                userName.textContent = username;
                userStatus.textContent = 'Profile Git';
                userAvatar.textContent = username.charAt(0).toUpperCase();
                
                // Profile tıklanabilir yap
                profileSection.style.cursor = 'pointer';
            } else {
                userName.textContent = translations[currentLang]?.['user.guest'] || 'Kullanıcı';
                userStatus.textContent = translations[currentLang]?.['user.login'] || 'Giriş Yap';
                userAvatar.textContent = 'K';
                
                // Giriş yapılabilir yap
                profileSection.style.cursor = 'pointer';
            }
        }

        // === GİRİŞ SİSTEMİ ===
        function checkLoginStatus() {
            fetch('check_login.php')
                .then(r => r.json())
                .then(d => {
                    if (d.loggedIn) {
                        updateLoginState(true, d.username);
                        updateProfileSection(true, d.username);
                    } else {
                        updateLoginState(false);
                        updateProfileSection(false);
                    }
                })
                .catch(error => {
                    console.log('Login check failed');
                    updateLoginState(false);
                    updateProfileSection(false);
                });
        }

        function handleLogin() {
            const formData = new FormData(loginForm);
            
            fetch('login.php', {
                method: 'POST',
                body: formData
            })
            .then(r => r.json())
            .then(data => {
                if(data.success) {
                    showAlert(translations[currentLang]['alert.loginSuccess'] || 'Giriş başarılı!','success');
                    updateLoginState(true, data.username);
                    updateProfileSection(true, data.username);
                    loginModal.style.display = 'none';
                    loginForm.reset();
                    loadDownloads();
                } else {
                    showAlert(data.message,'error');
                }
            })
            .catch(error => {
                console.error('Login error:', error);
                showAlert(translations[currentLang]['alert.loginError'] || 'Giriş sırasında hata oluştu!','error');
            });
        }

        function handleLogout() {
            fetch('logout.php')
                .then(() => {
                    showAlert(translations[currentLang]['alert.logoutSuccess'] || 'Çıkış yapıldı!', 'success');
                    updateLoginState(false);
                    updateProfileSection(false);
                })
                .catch(error => {
                    console.error('Logout error:', error);
                    showAlert(translations[currentLang]['alert.logoutError'] || 'Çıkış sırasında hata oluştu!', 'error');
                });
        }

        function updateLoginState(loggedIn, username = '') {
            if(loggedIn){
                loginBtn.textContent = translations[currentLang]['auth.logout'] || 'Çıkış Yap';
            } else {
                loginBtn.textContent = translations[currentLang]['auth.login'] || 'Giriş Yap';
            }
        }

        // === İNDİRİLENLER SİSTEMİ ===
        function loadDownloads() {
            // ÖNCE LOCALSTORAGE (anında)
            const localDownloads = JSON.parse(localStorage.getItem('user_downloads') || '[]');
            
            if (localDownloads.length > 0) {
                allDownloads = localDownloads;
                displayDownloadsList(localDownloads);
            } else {
                showEmptyState();
            }
            
            // SONRA VERİTABANI
            fetch('get_downloads.php?t=' + Date.now(), {
                cache: 'no-store'
            })
            .then(response => {
                if (!response.ok) throw new Error('Network error');
                return response.json();
            })
            .then(data => {
                const dbDownloads = data.downloads || [];
                
                if (dbDownloads.length > 0) {
                    syncLocalWithDB(dbDownloads);
                    allDownloads = dbDownloads;
                    displayDownloadsList(dbDownloads);
                }
            })
            .catch(error => {
                console.log('Veritabanı ulaşılamıyor:', error.message);
            });
        }

        function showEmptyState() {
            downloadsList.innerHTML = `
                <div class="empty-state">
                    <i>📥</i>
                    <h3>${translations[currentLang]['downloads.noDownloads'] || 'Henüz hiç uygulama indirmediniz'}</h3>
                    <p>${translations[currentLang]['downloads.noDownloadsDesc'] || 'Uygulamalar sayfasından uygulama indirerek burada görüntüleyebilirsiniz.'}</p>
                    <button onclick="redirectToApps()">${translations[currentLang]['downloads.exploreApps'] || 'Uygulamaları Keşfet'}</button>
                </div>
            `;
        }

        function redirectToApps() {
            // Ban kontrolü
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! Uygulamalar sayfasına gidemezsiniz.', 'error');
                        return;
                    }
                    
                    window.location.href = 'apps.php';
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        }

        function syncLocalWithDB(dbDownloads) {
            const localDownloads = JSON.parse(localStorage.getItem('user_downloads') || '[]');
            
            dbDownloads.forEach(dbItem => {
                const exists = localDownloads.some(localItem => localItem.app_id === dbItem.app_id);
                if (!exists) {
                    localDownloads.unshift({
                        id: dbItem.id,
                        app_id: dbItem.app_id,
                        app_name: dbItem.app_name,
                        download_date: dbItem.download_date,
                        date: new Date(dbItem.download_date).toLocaleDateString('tr-TR'),
                        time: new Date(dbItem.download_date).toLocaleTimeString('tr-TR')
                    });
                }
            });
            
            localStorage.setItem('user_downloads', JSON.stringify(localDownloads));
        }

        function displayDownloadsList(downloads) {
            if (!downloads || downloads.length === 0) {
                showEmptyState();
                return;
            }
            
            downloads.sort((a, b) => {
                try {
                    const dateA = new Date(a.download_date || a.date);
                    const dateB = new Date(b.download_date || b.date);
                    return dateB - dateA;
                } catch (e) {
                    return 0;
                }
            });
            
            downloadsList.innerHTML = downloads.map(download => {
                try {
                    let date, time;
                    
                    if (download.download_date) {
                        const downloadDate = new Date(download.download_date);
                        date = downloadDate.toLocaleDateString('tr-TR');
                        time = downloadDate.toLocaleTimeString('tr-TR', { hour: '2-digit', minute: '2-digit' });
                    } else if (download.date) {
                        date = download.date;
                        time = download.time || '00:00';
                    } else {
                        date = 'Bilinmiyor';
                        time = '';
                    }
                    
                    const appName = download.app_name || 'İsimsiz Uygulama';
                    const initials = appName.substring(0, 2).toUpperCase();
                    const downloadId = download.app_id || download.id;
                    
                    return `
                        <div class="download-item">
                            <div class="app-icon">${initials}</div>
                            <div class="app-info">
                                <h3>${appName}</h3>
                                <p>${translations[currentLang]['downloads.downloadSuccess'] || 'Başarıyla indirildi'}</p>
                                <div class="download-actions">
                                    <button class="redownload-btn premium-btn" onclick="redownloadApp(${downloadId}, '${appName.replace(/'/g, "\\'")}')">
                                        ${translations[currentLang]['downloads.redownload'] || 'Tekrar İndir'}
                                    </button>
                                    <button class="remove-btn" onclick="removeDownload(${downloadId})">
                                        ${translations[currentLang]['downloads.remove'] || 'Kaldır'}
                                    </button>
                                </div>
                            </div>
                            <div class="download-status">
                                <div class="download-date">${date}</div>
                                <div class="download-time">${time}</div>
                            </div>
                        </div>
                    `;
                } catch (error) {
                    console.error('Download item error:', error, download);
                    return '';
                }
            }).join('');
        }

        function filterDownloads() {
            const searchTerm = searchInput.value.toLowerCase();
            
            if (searchTerm.trim() === '') {
                displayDownloadsList(allDownloads);
                return;
            }

            const filtered = allDownloads.filter(download => 
                download.app_name.toLowerCase().includes(searchTerm)
            );
            
            displayDownloadsList(filtered);
        }

        // === YENİ İNDİRME SİSTEMİ (POPUP İLE) ===
        function redownloadApp(appId, appName) {
            // Ban kontrolü
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! İndirme yapamazsınız.', 'error');
                        return;
                    }
                    
                    showConfirmModal(
                        `"${appName}" ${translations[currentLang]['downloads.redownload'] || 'uygulamasını tekrar indirmek istediğinizden emin misiniz?'}`,
                        'download',
                        () => {
                            fetch('apps.json')
                                .then(r => r.json())
                                .then(data => {
                                    const app = data.apps.find(a => a.id === appId);
                                    if (app) {
                                        showDownloadPopup(app, appName);
                                    } else {
                                        showAlert(translations[currentLang]['alert.noDownloadLink'] || 'Uygulama bulunamadı!', 'error');
                                    }
                                })
                                .catch(error => {
                                    console.error('App info error:', error);
                                    showAlert(translations[currentLang]['alert.appsLoadError'] || 'Uygulama bilgileri alınamadı!', 'error');
                                });
                        }
                    );
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        }

        function showDownloadPopup(app, appName) {
            if (!app || !app.drive_link) {
                showAlert(translations[currentLang]['alert.noDownloadLink'] || 'İndirme linki bulunamadı!', 'error');
                return;
            }
            
            downloadModalTitle.textContent = `${appName} - ${translations[currentLang]['download.page'] || 'İndirme Sayfası'}`;
            
            // Frame'e Drive linkini yükle (beyaz arkaplan için theme parametresi ekle)
            const driveUrl = app.drive_link.includes('?') ? 
                `${app.drive_link}&theme=light` : 
                `${app.drive_link}?theme=light`;
            downloadFrame.src = driveUrl;
            
            // İndirme modalını aç
            downloadModal.style.display = 'flex';
            
            // İndirme kaydını ekle
            addToLocalDownloads(app.id, appName);
            
            showAlert(`📥 ${appName} ${translations[currentLang]['alert.downloadStarting'] || 'indirme sayfası açılıyor...'}`, 'info');
        }

        function addToLocalDownloads(appId, appName) {
            try {
                const downloads = JSON.parse(localStorage.getItem('user_downloads') || '[]');
                
                const newDownload = {
                    id: Date.now(),
                    app_id: appId,
                    app_name: appName,
                    download_date: new Date().toISOString(),
                    date: new Date().toLocaleDateString('tr-TR'),
                    time: new Date().toLocaleTimeString('tr-TR')
                };
                
                const existingIndex = downloads.findIndex(d => d.app_id === appId);
                if (existingIndex !== -1) {
                    downloads[existingIndex] = newDownload;
                } else {
                    downloads.unshift(newDownload);
                }
                
                localStorage.setItem('user_downloads', JSON.stringify(downloads));
                localStorage.setItem('downloads_updated', Date.now().toString());
                
            } catch (error) {
                console.error('LocalStorage hatası:', error);
            }
        }

        function removeDownload(downloadId) {
            // Ban kontrolü
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! İşlem yapamazsınız.', 'error');
                        return;
                    }
                    
                    const download = allDownloads.find(d => d.id === downloadId || d.app_id === downloadId);
                    const appName = download ? download.app_name : 'bu uygulama';
                    
                    showConfirmModal(
                        `"${appName}" ${translations[currentLang]['downloads.remove'] || 'uygulamasını indirilenler listesinden kaldırmak istediğinizden emin misiniz?'}`,
                        'delete',
                        () => {
                            performRemoveDownload(downloadId);
                        }
                    );
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        }

        function performRemoveDownload(downloadId) {
            let localDownloads = JSON.parse(localStorage.getItem('user_downloads') || '[]');
            localDownloads = localDownloads.filter(d => d.id !== downloadId && d.app_id !== downloadId);
            localStorage.setItem('user_downloads', JSON.stringify(localDownloads));
            
            fetch('remove_download.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: new URLSearchParams({
                    download_id: downloadId
                })
            })
            .then(response => response.json())
            .then(result => {
                if (result.success) {
                    showAlert('✅ ' + (translations[currentLang]['downloads.remove'] || 'İndirme kaydı başarıyla silindi!'), 'success');
                } else {
                    showAlert('⚠️ ' + (result.message || (translations[currentLang]['downloads.remove'] || 'Silme işlemi tamamlandı')), 'warning');
                }
                loadDownloads();
            })
            .catch(error => {
                console.error('Remove error:', error);
                showAlert('✅ ' + (translations[currentLang]['downloads.remove'] || 'İndirme kaydı silindi!'), 'success');
                loadDownloads();
            });
        }

        // === ALERT SİSTEMİ ===
        function showAlert(msg, type = 'info') {
            const alert = document.createElement('div');
            alert.className = `custom-alert ${type}`;
            
            const icons = {
                success: '✅',
                error: '❌',
                warning: '⚠️',
                info: 'ℹ️'
            };
            
            alert.innerHTML = `
                <div class="alert-icon">${icons[type] || 'ℹ️'}</div>
                <div class="alert-content"><p>${msg}</p></div>
                <button class="close-alert">&times;</button>
            `;
            
            document.body.appendChild(alert);
            setTimeout(() => alert.classList.add('show'), 50);
            
            alert.querySelector('.close-alert').onclick = () => {
                alert.classList.remove('show');
                setTimeout(() => {
                    if (document.body.contains(alert)) alert.remove();
                }, 300);
            };
            
            setTimeout(() => {
                if (document.body.contains(alert)) {
                    alert.classList.remove('show');
                    setTimeout(() => {
                        if (document.body.contains(alert)) alert.remove();
                    }, 300);
                }
            }, 5000);
        }

        // === OTOMATİK YENİLEME ===
        document.addEventListener('visibilitychange', function() {
            if (!document.hidden) {
                loadDownloads();
            }
        });

        setInterval(() => {
            if (!document.hidden) {
                loadDownloads();
            }
        }, 3000);

        window.addEventListener('focus', function() {
            loadDownloads();
        });

        // Diğer sekmelerden gelen bildirimler
        window.addEventListener('storage', function(e) {
            if (e.key === 'downloads_updated') {
                loadDownloads();
            }
        });
    </script>
</body>
</html>