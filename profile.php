<?php
// profil.php - Profil Sayfası
?>
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

    <title>Profil - Dehset Store</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <style>
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
            
            /* Modern Gradient Renkleri */
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --secondary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --accent-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --success-gradient: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%);
            --warning-gradient: linear-gradient(135deg, #677ce7 0%, #7c4fbf 100%);
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
        .stat-card {
            transform-style: preserve-3d;
            perspective: 1000px;
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            overflow: hidden;
            border-radius: 16px;
        }

        .stat-card::before {
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

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .stat-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s ease;
        }

        .stat-card:hover::after {
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
            font-size: 1.8rem;
            font-weight: 700;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 10px;
            line-height: 1.2;
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

        /* 15. Responsive İyileştirmeler */
        @media (max-width: 768px) {
            .stat-card:hover {
                transform: none;
            }
            
            .premium-btn:hover {
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

        .profile-section {
            padding: 15px;
            border-top: 1px solid rgba(255,255,255,.2);
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed .profile-section {
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

        /* Menü küçültüldüğünde profile için yeni düzen */
        .sidebar.collapsed .profile-section {
            flex-direction: column;
            gap: 8px;
        }

        .sidebar.collapsed .profile-info {
            display: none;
        }

        .sidebar.collapsed .profile-img {
            margin-right: 0;
            margin-bottom: 0;
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

        /* --- PROFİL HEADER --- */
        .profile-header {
            background: var(--primary-gradient);
            color: white;
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,.1);
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: var(--accent-color);
            margin: 0 auto 20px;
            border: 4px solid white;
            box-shadow: 0 5px 15px rgba(0,0,0,.2);
            transition: all 0.3s ease;
        }

        .profile-avatar:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(0,0,0,.3);
        }

        .profile-header h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .profile-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
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
        /* --- PROFİL AYARLARI --- */
        .profile-settings {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 3px 15px rgba(0,0,0,.08);
        }

        .settings-section {
            margin-bottom: 30px;
        }

        .settings-section h3 {
            margin-bottom: 20px;
            color: var(--text-color);
            font-size: 18px;
        }

        .settings-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .setting-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background: var(--bg-color);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .setting-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,.1);
        }

        .setting-info h4 {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .setting-info p {
            font-size: 12px;
            color: #666;
        }

        body.dark-mode .setting-info p {
            color: #ccc;
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 50px;
            height: 24px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .toggle-slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .toggle-slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .toggle-slider {
            background-color: var(--accent-color);
        }

        input:checked + .toggle-slider:before {
            transform: translateX(26px);
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }

        .btn {
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: var(--accent-color);
            color: white;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        .btn.btn-danger {
            background: linear-gradient(135deg, #677ce7 0%, #7c4fbf 100%) !important;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn.btn-danger:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%) !important;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,.2);
        }

        /* --- DİL SEÇİCİ STİLLERİ --- */
        .language-selector {
            position: relative;
            margin-bottom: 15px;
        }

        .language-btn {
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            color: var(--text-color);
            padding: 12px 15px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            width: 100%;
            justify-content: space-between;
        }

        .language-btn:hover {
            background: rgba(0,0,0,0.1);
        }

        body.dark-mode .language-btn {
            background: rgba(255,255,255,0.1);
            color: white;
        }

        .language-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
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

        /* --- RESPONSIVE --- */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                width: 280px;
            }
            
            .sidebar.open {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0 !important;
                padding: 20px 15px;
            }
            
            .profile-header {
                padding: 30px 20px;
            }
            
            .profile-stats {
                grid-template-columns: 1fr;
            }
            
            .action-buttons {
                flex-direction: column;
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
        }

        .menu-toggle {
            display: none;
        }

        /* Katılma tarihi için özel stil */
        .join-date {
            font-size: 1.1rem !important;
            font-weight: 600;
            color: var(--text-color) !important;
            margin-top: 5px;
        }

        body.dark-mode .join-date {
            color: #fff !important;
        }
    </style>
</head>
<body>
    <!-- MENU TOGGLE -->
    <button class="menu-toggle" id="menuToggle">☰</button>

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
            <div class="menu-item" onclick="window.location.href='downloads.php'">
                <i>📥</i>
                <span data-i18n="menu.downloads">İndirilenler</span>
            </div>
        </div>
        <div class="profile-section" onclick="window.location.href='profile.php'">
            <div class="profile-img" id="sidebarAvatar">K</div>
            <div class="profile-info">
                <h3 id="sidebarUsername" data-i18n="user.guest">Kullanıcı</h3>
                <p data-i18n="profile.goToProfile">Profile Git</p>
            </div>
        </div>
    </div>

    <!-- ANA İÇERİK -->
    <div class="main-content" id="mainContent">
        <!-- PROFİL HEADER -->
        <div class="profile-header">
            <div class="profile-avatar" id="profileAvatar">K</div>
            <h1 id="profileUsername" data-i18n="user.guest">Kullanıcı</h1>
            <p data-i18n="profile.member">Dehşet Store Üyesi</p>
        </div>

        <!-- İSTATİSTİKLER -->
        <div class="profile-stats">
            <div class="stat-card">
                <div class="stat-number" id="totalDownloads">0</div>
                <div class="stat-label" data-i18n="profile.totalDownloads">Toplam İndirme</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">
                    <div id="joinedDate">-</div>
                    <div class="join-date" id="joinDateFormatted"></div>
                </div>
                <div class="stat-label" data-i18n="profile.joinDate">Katılma Tarihi</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="favoriteCategory">-</div>
                <div class="stat-label" data-i18n="profile.favoriteCategory">Favori Kategori</div>
            </div>
            <div class="stat-card">
                <div class="stat-number" id="totalRating">0</div>
                <div class="stat-label" data-i18n="profile.averageRating">Ortalama Puan</div>
            </div>
        </div>

        <!-- AYARLAR -->
        <div class="profile-settings">
            <div class="settings-section">
                <h3 data-i18n="profile.appSettings">Uygulama Ayarları</h3>
                <div class="settings-grid">
                    <div class="setting-item">
                        <div class="setting-info">
                            <h4 data-i18n="settings.darkMode">Karanlık Mod</h4>
                            <p data-i18n="settings.darkModeDesc">Arayüz temasını değiştir</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" id="darkModeToggle" onchange="toggleDarkMode()">
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <div class="setting-item">
                        <div class="setting-info">
                            <h4 data-i18n="settings.autoLogin">Otomatik Giriş</h4>
                            <p data-i18n="settings.autoLoginDesc">Beni hatırla</p>
                        </div>
                        <label class="toggle-switch">
                            <input type="checkbox" id="autoLoginToggle" onchange="toggleAutoLogin()">
                            <span class="toggle-slider"></span>
                        </label>
                    </div>
                    <!-- DİL SEÇENEĞİ -->
                    <div class="setting-item">
                        <div class="setting-info">
                            <h4 data-i18n="settings.language">Dil</h4>
                            <p data-i18n="settings.languageDesc">Uygulama dilini değiştir</p>
                        </div>
                        <div class="language-selector">
                            <button class="language-btn" id="languageBtn">
                                <span class="language-flag">🌐</span>
                                <span id="currentLanguage">TR</span>
                                <span>▼</span>
                            </button>
                            <div class="language-dropdown" id="languageDropdown">
                                <div class="language-option active" data-lang="tr">
                                    <span class="language-flag">🇹🇷</span>
                                    <span data-i18n="language.turkish">Türkçe</span>
                                </div>
                                <div class="language-option" data-lang="en">
                                    <span class="language-flag">🇺🇸</span>
                                    <span data-i18n="language.english">English</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary premium-btn" onclick="saveSettings()" data-i18n="settings.save">Ayarları Kaydet</button>
                <button class="btn btn-secondary premium-btn" onclick="window.location.href='downloads.php'" data-i18n="menu.downloads">İndirme Geçmişi</button>
                <button class="btn btn-danger premium-btn" onclick="logout()" data-i18n="auth.logout">Çıkış Yap</button>
            </div>
        </div>
    </div>

    <script>
        // === ÇOKLU DİL SİSTEMİ ===
        const translations = {
            tr: {
                // Genel
                "app.name": "Dehşet Store",
                "app.details": "Uygulama Detayları",
                
                // Menü
                "menu.home": "Anasayfa",
                "menu.apps": "Uygulamalar",
                "menu.downloads": "İndirilenler",
                "menu.categories": "Kategoriler",
                
                // Kullanıcı
                "user.guest": "Kullanıcı",
                "user.login": "Giriş Yap",
                "user.online": "Çevrimiçi",
                
                // Profil
                "profile.title": "Profil",
                "profile.stats": "İstatistikler",
                "profile.settings": "Ayarlar",
                "profile.totalDownloads": "Toplam İndirme",
                "profile.joinDate": "Katılma Tarihi",
                "profile.favoriteCategory": "Favori Kategori",
                "profile.averageRating": "Ortalama Puan",
                "profile.accountSettings": "Hesap Ayarları",
                "profile.appSettings": "Uygulama Ayarları",
                "profile.goToProfile": "Profile Git",
                "profile.member": "Dehşet Store Üyesi",
                
                // Ayarlar
                "settings.save": "Ayarları Kaydet",
                "settings.darkMode": "Karanlık Mod",
                "settings.darkModeDesc": "Arayüz temasını değiştir",
                "settings.autoLogin": "Otomatik Giriş",
                "settings.autoLoginDesc": "Beni hatırla",
                "settings.language": "Dil",
                "settings.languageDesc": "Uygulama dilini değiştir",
                
                // Diller
                "language.turkish": "Türkçe",
                "language.english": "English",
                
                // Kategoriler
                "category.games": "Oyunlar",
                "category.system": "Sistem Araçları",
                "category.media": "Multimedya",
                "category.security": "Güvenlik",
                "category.internet": "İnternet",
                
                // Kimlik Doğrulama
                "auth.login": "Giriş Yap",
                "auth.logout": "Çıkış Yap",
                "auth.username": "Kullanıcı Adı veya E-posta",
                "auth.password": "Şifre",
                "auth.noAccount": "Hesabınız yok mu?",
                "auth.register": "Kayıt Ol",
                
                // Alert Mesajları
                "alert.loginSuccess": "Giriş başarılı!",
                "alert.logoutSuccess": "Çıkış yapıldı!",
                "alert.loginError": "Giriş sırasında hata oluştu!",
                "alert.logoutError": "Çıkış sırasında hata oluştu!",
                "alert.settingsSaved": "Ayarlar başarıyla kaydedildi!",
                
                // İndirme
                "download.page": "İndirme Sayfası",
                "download.loading": "✅ İndirme sayfası yükleniyor..."
            },
            
            en: {
                "app.name": "Dehşet Store",
                "app.details": "App Details",
                "menu.home": "Home",
                "menu.apps": "Apps",
                "menu.downloads": "Downloads",
                "menu.categories": "Categories",
                "user.guest": "User",
                "user.login": "Login",
                "user.online": "Online",
                "profile.title": "Profile",
                "profile.stats": "Statistics",
                "profile.settings": "Settings",
                "profile.totalDownloads": "Total Downloads",
                "profile.joinDate": "Join Date",
                "profile.favoriteCategory": "Favorite Category",
                "profile.averageRating": "Average Rating",
                "profile.accountSettings": "Account Settings",
                "profile.appSettings": "App Settings",
                "profile.goToProfile": "Go to Profile",
                "profile.member": "Dehşet Store Member",
                "settings.save": "Save Settings",
                "settings.darkMode": "Dark Mode",
                "settings.darkModeDesc": "Change interface theme",
                "settings.autoLogin": "Auto Login",
                "settings.autoLoginDesc": "Remember me",
                "settings.language": "Language",
                "settings.languageDesc": "Change application language",
                "language.turkish": "Turkish",
                "language.english": "English",
                "category.games": "Games",
                "category.system": "System Tools",
                "category.media": "Multimedia",
                "category.security": "Security",
                "category.internet": "Internet",
                "auth.login": "Login",
                "auth.logout": "Logout",
                "auth.username": "Username or Email",
                "auth.password": "Password",
                "auth.noAccount": "Don't have an account?",
                "auth.register": "Register",
                "alert.loginSuccess": "Login successful!",
                "alert.logoutSuccess": "Logged out successfully!",
                "alert.loginError": "Login error occurred!",
                "alert.logoutError": "Logout error occurred!",
                "alert.settingsSaved": "Settings saved successfully!",
                "download.page": "Download Page",
                "download.loading": "✅ Download page loading..."
            }
        };

        let currentLang = 'tr';

        // Kullanıcı bilgilerini yükle
        document.addEventListener('DOMContentLoaded', function() {
            initializeLanguage();
            loadUserProfile();
            loadDarkMode();
            setupEventListeners();
            initModernDesign();
            setupCategoriesMenu();
            setupLanguageSelector();
        });

        function setupEventListeners() {
            const menuToggle = document.getElementById('menuToggle');
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');

            menuToggle.addEventListener('click', () => {
                sidebar.classList.toggle('open');
            });

            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('collapsed');
            });

            // Pencere boyutu değiştiğinde
            window.addEventListener('resize', () => {
                if (window.innerWidth <= 768) {
                    menuToggle.style.display = 'block';
                } else {
                    menuToggle.style.display = 'none';
                    sidebar.classList.remove('open');
                }
            });
        }

        // === DİL SİSTEMİ ===
        function initializeLanguage() {
            const savedLang = localStorage.getItem('preferredLanguage');
            const browserLang = navigator.language.split('-')[0];
            
            if (savedLang && translations[savedLang]) {
                currentLang = savedLang;
            } else if (translations[browserLang]) {
                currentLang = browserLang;
            } else {
                currentLang = 'tr';
            }
            
            updateLanguage(currentLang);
        }

        function setupLanguageSelector() {
            const languageBtn = document.getElementById('languageBtn');
            const languageDropdown = document.getElementById('languageDropdown');
            
            languageBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                languageDropdown.classList.toggle('show');
            });

            document.querySelectorAll('.language-option').forEach(option => {
                option.addEventListener('click', () => {
                    const lang = option.dataset.lang;
                    updateLanguage(lang);
                    languageDropdown.classList.remove('show');
                });
            });

            document.addEventListener('click', (e) => {
                if (!languageBtn.contains(e.target) && !languageDropdown.contains(e.target)) {
                    languageDropdown.classList.remove('show');
                }
            });
        }

        function updateLanguage(lang) {
            currentLang = lang;
            localStorage.setItem('preferredLanguage', lang);
            
            const currentOption = document.querySelector(`.language-option[data-lang="${lang}"]`);
            const flag = currentOption.querySelector('.language-flag').textContent;
            const langCode = lang.toUpperCase();
            
            document.getElementById('currentLanguage').textContent = langCode;
            document.querySelector('#languageBtn .language-flag').textContent = flag;
            
            document.querySelectorAll('.language-option').forEach(option => {
                option.classList.remove('active');
                if (option.dataset.lang === lang) {
                    option.classList.add('active');
                }
            });
            
            translatePage();
            document.documentElement.lang = lang;
        }

        function translatePage() {
            document.querySelectorAll('[data-i18n]').forEach(element => {
                const key = element.getAttribute('data-i18n');
                if (translations[currentLang] && translations[currentLang][key]) {
                    element.textContent = translations[currentLang][key];
                }
            });
        }

        // === KATEGORİ MENÜSÜ ===
        function setupCategoriesMenu() {
            const categoriesMenu = document.getElementById('categoriesMenu');
            const categoriesSubmenu = document.getElementById('categoriesSubmenu');
            
            if (categoriesMenu && categoriesSubmenu) {
                categoriesMenu.addEventListener('click', function(e) {
                    e.stopPropagation();
                    categoriesMenu.classList.toggle('active');
                    categoriesSubmenu.classList.toggle('show');
                });
                
                document.addEventListener('click', function() {
                    categoriesMenu.classList.remove('active');
                    categoriesSubmenu.classList.remove('show');
                });
            }
        }

        function goToCategory(category) {
            window.location.href = `apps.php?category=${category}`;
        }

        // === MODERN TASARIM ===
        function initModernDesign() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.add('glass-effect');
            
            const profileHeader = document.querySelector('.profile-header');
            profileHeader.classList.add('glass-card');
            
            document.querySelectorAll('.btn').forEach(button => {
                button.classList.add('premium-btn');
                
                if (button.classList.contains('btn-secondary')) {
                    button.classList.add('secondary');
                }
                
                if (button.classList.contains('btn-danger')) {
                    button.style.background = 'linear-gradient(135deg, #fa709a 0%, #fee140 100%)';
                }
            });
            
            const profileSettings = document.querySelector('.profile-settings');
            profileSettings.classList.add('glass-card');
        }

        // === KULLANICI PROFİLİ ===
        function loadUserProfile() {
            fetch('check_login.php')
                .then(response => response.json())
                .then(data => {
                    if (data.loggedIn) {
                        displayUserProfile(data.username, data.created_at, data.email);
                    } else {
                        window.location.href = 'index.php';
                    }
                })
                .catch(error => {
                    console.error('Profil yükleme hatası:', error);
                    window.location.href = 'index.php';
                });
        }

        function displayUserProfile(username, created_at, email) {
            document.getElementById('sidebarUsername').textContent = username;
            document.getElementById('sidebarAvatar').textContent = username.charAt(0).toUpperCase();
            document.getElementById('profileUsername').textContent = username;
            document.getElementById('profileAvatar').textContent = username.charAt(0).toUpperCase();

            loadUserStats(username, created_at);
        }

        function loadUserStats(username, created_at) {
            const downloads = JSON.parse(localStorage.getItem('user_downloads') || '[]');
            
            // Toplam indirme sayısı
            document.getElementById('totalDownloads').textContent = downloads.length;

            // Katılma tarihi - created_at'ten al ve formatla
            if (created_at) {
                const joinDate = new Date(created_at);
                const formattedDate = formatJoinDate(joinDate);
                document.getElementById('joinedDate').textContent = formattedDate.short;
                document.getElementById('joinDateFormatted').textContent = formattedDate.long;
            } else {
                // Fallback: ilk indirme tarihi veya bugün
                if (downloads.length > 0) {
                    const firstDownload = new Date(downloads[downloads.length - 1].download_date);
                    const formattedDate = formatJoinDate(firstDownload);
                    document.getElementById('joinedDate').textContent = formattedDate.short;
                    document.getElementById('joinDateFormatted').textContent = formattedDate.long;
                } else {
                    const today = new Date();
                    const formattedDate = formatJoinDate(today);
                    document.getElementById('joinedDate').textContent = formattedDate.short;
                    document.getElementById('joinDateFormatted').textContent = formattedDate.long;
                }
            }

            // Favori kategori
            const categories = {};
            downloads.forEach(download => {
                categories['Genel'] = (categories['Genel'] || 0) + 1;
            });
            
            const favoriteCategory = Object.keys(categories).reduce((a, b) => categories[a] > categories[b] ? a : b, 'Genel');
            document.getElementById('favoriteCategory').textContent = favoriteCategory;

            // Ortalama puan
            document.getElementById('totalRating').textContent = '4.5';
        }

        // Tarih formatlama fonksiyonu - İYİLEŞTİRİLMİŞ
        function formatJoinDate(date) {
            const now = new Date();
            const diffTime = Math.abs(now - date);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            
            if (currentLang === 'tr') {
                // Türkçe format
                if (diffDays === 1) {
                    return { short: "Bugün", long: date.toLocaleDateString('tr-TR') };
                } else if (diffDays === 2) {
                    return { short: "Dün", long: date.toLocaleDateString('tr-TR') };
                } else if (diffDays <= 7) {
                    return { 
                        short: `${diffDays} gün`, 
                        long: date.toLocaleDateString('tr-TR', { 
                            year: 'numeric', 
                            month: 'long', 
                            day: 'numeric' 
                        })
                    };
                } else {
                    return {
                        short: date.toLocaleDateString('tr-TR', { 
                            day: 'numeric', 
                            month: 'short' 
                        }),
                        long: date.toLocaleDateString('tr-TR', { 
                            year: 'numeric', 
                            month: 'long', 
                            day: 'numeric' 
                        })
                    };
                }
            } else {
                // İngilizce format
                if (diffDays === 1) {
                    return { short: "Today", long: date.toLocaleDateString('en-US') };
                } else if (diffDays === 2) {
                    return { short: "Yesterday", long: date.toLocaleDateString('en-US') };
                } else if (diffDays <= 7) {
                    return { 
                        short: `${diffDays} days`, 
                        long: date.toLocaleDateString('en-US', { 
                            year: 'numeric', 
                            month: 'long', 
                            day: 'numeric' 
                        })
                    };
                } else {
                    return {
                        short: date.toLocaleDateString('en-US', { 
                            month: 'short', 
                            day: 'numeric' 
                        }),
                        long: date.toLocaleDateString('en-US', { 
                            year: 'numeric', 
                            month: 'long', 
                            day: 'numeric' 
                        })
                    };
                }
            }
        }

        function loadDarkMode() {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            document.body.classList.toggle('dark-mode', darkMode);
            document.getElementById('darkModeToggle').checked = darkMode;
        }

        function toggleDarkMode() {
            const isDarkMode = document.getElementById('darkModeToggle').checked;
            document.body.classList.toggle('dark-mode', isDarkMode);
            localStorage.setItem('darkMode', isDarkMode);
        }

        function toggleAutoLogin() {
            const autoLogin = document.getElementById('autoLoginToggle').checked;
            localStorage.setItem('autoLogin', autoLogin);
            showAlert(translations[currentLang]['alert.settingsSaved'] || 'Ayarlar güncellendi!', 'success');
        }

        function saveSettings() {
            // Dil ayarını kaydet
            localStorage.setItem('preferredLanguage', currentLang);
            
            // Diğer ayarları kaydet
            const darkMode = document.getElementById('darkModeToggle').checked;
            const autoLogin = document.getElementById('autoLoginToggle').checked;
            
            localStorage.setItem('darkMode', darkMode);
            localStorage.setItem('autoLogin', autoLogin);
            
            showAlert(translations[currentLang]['alert.settingsSaved'] || 'Ayarlar başarıyla kaydedildi!', 'success');
        }

        function logout() {
            if (confirm(currentLang === 'tr' ? 'Çıkış yapmak istediğinizden emin misiniz?' : 'Are you sure you want to logout?')) {
                fetch('logout.php')
                    .then(() => {
                        localStorage.removeItem('user_downloads');
                        window.location.href = 'index.php';
                    })
                    .catch(error => {
                        console.error('Çıkış hatası:', error);
                    });
            }
        }

        function showAlert(message, type = 'info') {
            // Basit alert sistemi - index.php'deki gelişmiş sistemi kullanabilirsiniz
            alert(message);
        }
    </script>
</body>
</html>