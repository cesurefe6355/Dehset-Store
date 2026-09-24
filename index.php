<?php
// index.php
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />   
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
    
    <title>Dehşet Store - Ücretsiz Uygulamalar ve İndirmeler</title>
   	<meta name="google-site-verification" content="PpwZQeQ5vo0uY41rKSc-WJ-zpLkeFYnv29z6OXdygWw" /> 
    <link rel="icon" href="images/logo.png?v=2" type="image/png">
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Dehşet Store",
        "url": "https://dehsetstore.rf.gd/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://dehsetstore.rf.gd/search?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
    </script>
<style>
/* --- TEMEL STİLLER --- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    -webkit-tap-highlight-color: transparent;
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
    -webkit-text-size-adjust: 100%;
    -ms-text-size-adjust: 100%;
    touch-action: manipulation;
}

body.dark-mode {
    --text-color: #fff;
    --bg-color: #1a1a1a;
    --card-bg: #2d2d2d;
    --glass-bg: rgba(0, 0, 0, 0.2);
    --glass-border: rgba(255, 255, 255, 0.1);
}

/* === MODERN TASARIM İYİLEŞTİRMELERİ === */
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

/* --- MOBİL MENU TOGGLE BUTONU --- */
.mobile-menu-toggle {
    position: fixed;
    top: 15px;
    left: 15px;
    background: var(--primary-color);
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    z-index: 1001;
    font-size: 18px;
    display: none;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
    width: 50px;
    height: 50px;
    align-items: center;
    justify-content: center;
}

.mobile-menu-toggle:hover {
    background: #08447c;
}

/* --- SIDEBAR TOGGLE MOBİL GİZLEME --- */
@media (max-width: 768px) {
    .sidebar-toggle {
        display: none !important;
    }
    
    .mobile-menu-toggle {
        display: flex !important;
    }
    
    .sidebar {
        transform: translateX(-100%);
        width: 280px;
        transition: transform 0.3s ease;
        z-index: 1000;
    }
    
    .sidebar.open {
        transform: translateX(0);
    }
    
    .main-content {
        margin-left: 0 !important;
        padding: 20px 15px;
        padding-top: 80px; /* Buton için boşluk */
    }
    
    /* Sidebar açıkken toggle butonunu sidebar'ın üstünde göster */
    .sidebar.open ~ .mobile-menu-toggle {
        left: 240px;
        background: var(--accent-gradient);
    }
    
    /* Sidebar açıkken arkaplan karartma */
    .sidebar.open::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0,0,0,0.5);
        z-index: -1;
    }
}

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
    font-size: 16px;
    -webkit-appearance: none;
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
    -webkit-appearance: none;
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
    font-size: 14px;
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
    font-size: 14px;
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
    -webkit-overflow-scrolling: touch;
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
    font-size: 14px;
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
    font-size: 16px;
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

/* Menü küçültüldüğünde profile için yeni düzen */
.sidebar.collapsed .profile {
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
    padding: 20px;
    transition: all 0.3s ease;
    min-height: 100vh;
    width: calc(100% - var(--sidebar-width));
}

.sidebar.collapsed ~ .main-content {
    margin-left: var(--sidebar-collapsed-width);
    width: calc(100% - var(--sidebar-collapsed-width));
}

.header {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    margin-bottom: 30px;
    padding: 10px 0;
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
/* Guest Download Modal Stilleri */
.guest-download-info {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    padding: 15px;
    border-radius: 10px;
    margin: 15px 0;
    text-align: center;
}

.guest-download-info h4 {
    margin: 0 0 10px 0;
    font-size: 18px;
}

.guest-download-info p {
    margin: 0;
    font-size: 14px;
    opacity: 0.9;
}
/* --- HERO SLIDER --- */
.hero-slider {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    margin-bottom: 40px;
}

.slider-container {
    position: relative;
    height: clamp(250px, 40vw, 400px);
    overflow: hidden;
}

.slider-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
    height: 100%;
}

.slide {
    min-width: 100%;
    height: 100%;
    background: linear-gradient(340deg, #1360a8 0%, #8637d7 100%);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
    padding: clamp(20px, 5vw, 50px);
    position: relative;
}

.slide h1 {
    font-size: clamp(1.5rem, 5vw, 2.5rem);
    margin-bottom: 15px;
    font-weight: 700;
    opacity: 0;
    transform: translateY(30px);
    animation: slideUp 0.6s ease 0.3s forwards;
}

.slide p {
    font-size: clamp(1rem, 3vw, 1.2rem);
    margin-bottom: 25px;
    opacity: .9;
    max-width: 600px;
    opacity: 0;
    transform: translateY(30px);
    animation: slideUp 0.6s ease 0.5s forwards;
}

.slide button {
    background: #fff;
    color: var(--accent-color);
    border: none;
    padding: 12px 30px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    font-size: clamp(0.9rem, 2vw, 1rem);
    transition: all 0.3s ease;
    opacity: 0;
    transform: translateY(30px);
    animation: slideUp 0.6s ease 0.7s forwards;
}

.slide button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
}

@keyframes slideUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Slider kontrolleri */
.slider-controls {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
    transform: translateY(-50%);
    z-index: 10;
}

.slider-btn {
    background: rgba(255,255,255,0.2);
    border: none;
    color: #fff;
    width: clamp(40px, 8vw, 50px);
    height: clamp(40px, 8vw, 50px);
    border-radius: 50%;
    cursor: pointer;
    font-size: clamp(16px, 4vw, 20px);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    backdrop-filter: blur(10px);
}

.slider-btn:hover {
    background: rgba(255,255,255,0.3);
    transform: scale(1.1);
}

/* Slider dots - DOLMA ANİMASYONLU */
.slider-dots {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    z-index: 10;
}

.dot {
    width: clamp(8px, 2vw, 12px);
    height: clamp(8px, 2vw, 12px);
    border-radius: 50%;
    background: rgba(255,255,255,0.3);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.dot::after {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: #fff;
    border-radius: 50%;
    transition: left 10s linear;
}

.dot.active::after {
    left: 0;
}

.dot.active.completed::after {
    left: 100%;
}

@keyframes fillDot {
    0% {
        transform: scale(0);
        opacity: 1;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

.dot.active.completed::after {
    animation: none;
    transform: scale(1);
}

/* Karanlık mod için slider */
body.dark-mode .slider-btn {
    background: rgba(0,0,0,0.3);
}

body.dark-mode .slider-btn:hover {
    background: rgba(0,0,0,0.5);
} 

/* --- UYGULAMA GRID --- */
.section-title {
    font-size: clamp(1.2rem, 4vw, 1.5rem);
    margin-bottom: 20px;
    color: var(--text-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 10px;
}

.view-all {
    background: #0c71cf;
    border-radius: 6px;
    padding: 10px 20px;
    color: #ffffff;
    text-decoration: none;
    font-weight: 600;
    font-size: clamp(12px, 2vw, 14px);
    transition: all 0.3s ease;
    white-space: nowrap;
}

.view-all:hover {
    background: #08447c;
    transform: translateY(-2px);
}

.apps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 25px;
    margin-bottom: 40px;
}

.app-item {
    background: var(--card-bg);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 3px 10px rgba(0,0,0,.08);
    transition: all 0.3s ease;
    cursor: pointer;
}

.app-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,.15);
}

.app-icon {
    height: 160px;
    background: linear-gradient(135deg, var(--accent-color) 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 24px;
    font-weight: bold;
    position: relative;
    overflow: hidden;
}

.app-icon img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.app-category {
    position: absolute;
    top: 10px;
    right: 10px;
    background: rgba(255,255,255,.2);
    padding: 4px 12px;
    border-radius: 12px;
    font-size: 11px;
    backdrop-filter: blur(10px);
}

.app-details {
    padding: 20px;
}

.app-details h3 {
    font-size: clamp(16px, 3vw, 18px);
    margin-bottom: 8px;
    color: var(--text-color);
}

.app-details p {
    color: #666;
    font-size: clamp(13px, 2vw, 14px);
    margin-bottom: 12px;
    line-height: 1.4;
}

body.dark-mode .app-details p {
    color: #ccc;
}

.app-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
}

.rating {
    color: #ffc107;
    font-size: clamp(12px, 2vw, 14px);
}

.download-count {
    color: #666;
    font-size: clamp(11px, 2vw, 12px);
}

body.dark-mode .download-count {
    color: #ccc;
}

.app-details button {
    width: 100%;
    background: var(--accent-color);
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    font-size: clamp(14px, 2vw, 16px);
}

.app-details button:hover {
    background: #764ba2;
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
    padding: 15px;
}

.modal-content {
    background: var(--card-bg);
    border-radius: 12px;
    width: 100%;
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
    padding: 20px 20px 0;
}

.modal-header h2 {
    color: var(--text-color);
    margin: 0;
    font-size: clamp(1.2rem, 4vw, 1.5rem);
}

.close-modal {
    background: none;
    border: none;
    font-size: 24px;
    cursor: pointer;
    color: #666;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

body.dark-mode .close-modal {
    color: #ccc;
}

/* --- UYGULAMA DETAY MODALI --- */
.app-detail-content {
    padding: 0 20px 20px;
    max-height: 70vh;
    overflow-y: auto;
}

.app-detail-header {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
    align-items: flex-start;
}

.app-detail-logo {
    width: 80px;
    height: 80px;
    border-radius: 12px;
    object-fit: cover;
    flex-shrink: 0;
}

.app-detail-info {
    flex: 1;
}

.app-detail-info h3 {
    font-size: clamp(1.2rem, 4vw, 1.5rem);
    margin-bottom: 5px;
    color: var(--text-color);
}

.app-detail-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 10px;
    flex-wrap: wrap;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: clamp(12px, 2vw, 14px);
    color: #666;
}

body.dark-mode .meta-item {
    color: #ccc;
}

.app-screenshots {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 10px;
    margin: 20px 0;
}

.screenshot-item {
    aspect-ratio: 16/9;
    border-radius: 8px;
    overflow: hidden;
    background: #f5f5f5;
}

body.dark-mode .screenshot-item {
    background: #3d3d3d;
}

.screenshot-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.app-description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: clamp(14px, 2vw, 16px);
}

body.dark-mode .app-description {
    color: #ccc;
}

.download-action {
    background: linear-gradient(135deg, var(--accent-color) 0%, #764ba2 100%);
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    font-size: clamp(14px, 2vw, 16px);
    width: 100%;
    transition: all 0.3s ease;
}

.download-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102,126,234,.3);
}

/* --- FORM STİLLERİ --- */
.form-group {
    margin-bottom: 20px;
    padding: 0 20px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--text-color);
    font-weight: 500;
    font-size: clamp(14px, 2vw, 16px);
}

.form-group input {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 6px;
    font-size: clamp(14px, 2vw, 16px);
    background: var(--card-bg);
    color: var(--text-color);
}

body.dark-mode .form-group input {
    border-color: #555;
}

.login-btn {
    width: calc(100% - 40px);
    margin: 0 20px 20px;
    background: var(--accent-color);
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
    font-size: clamp(14px, 2vw, 16px);
    transition: all 0.3s ease;
}

.login-btn:hover {
    background: #764ba2;
}

.register-link {
    text-align: center;
    margin-top: 20px;
    color: #666;
    padding: 0 20px 20px;
    font-size: clamp(14px, 2vw, 16px);
}

body.dark-mode .register-link {
    color: #ccc;
}

.register-link a {
    color: var(--accent-color);
    text-decoration: none;
    font-weight: 500;
}

/* --- ALERT SİSTEMİ --- */
.custom-alert {
    position: fixed;
    top: 20px;
    right: 20px;
    background: var(--card-bg);
    border-radius: 8px;
    padding: 15px 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
    z-index: 10000;
    display: flex;
    align-items: center;
    gap: 10px;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    max-width: min(400px, 90vw);
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
    font-size: clamp(13px, 2vw, 14px);
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

/* --- İNDİRME POPUP STİLLERİ --- */
.download-modal-content {
    background: var(--card-bg);
    border-radius: 12px;
    width: 100%;
    max-width: 800px;
    max-height: 90vh;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,.3);
}

.download-frame-container {
    padding: 0;
    height: clamp(400px, 60vh, 600px);
    position: relative;
}

.download-frame {
    width: 100%;
    height: 100%;
    border: none;
    border-radius: 0 0 12px 12px;
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
    font-size: clamp(1.2rem, 4vw, 1.5rem);
}

.download-info {
    padding: 15px 20px;
    background: #f8f9fa;
    border-bottom: 1px solid #eee;
}

body.dark-mode .download-info {
    background: #3d3d3d;
    border-bottom-color: #444;
}

.download-info p {
    margin: 0;
    color: #666;
    font-size: clamp(13px, 2vw, 14px);
}

body.dark-mode .download-info p {
    color: #ccc;
}
/* --- YÜKLEME ANİMASYONU STİLLERİ --- */
.loading-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 40px 20px;
    background: var(--card-bg);
    display: none;
}

.loading-container.show {
    display: flex;
}

.loading-spinner {
    width: 50px;
    height: 50px;
    border: 4px solid #f3f3f3;
    border-top: 4px solid var(--accent-color);
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-bottom: 20px;
}

body.dark-mode .loading-spinner {
    border-color: #444;
    border-top-color: var(--accent-color);
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.loading-text {
    color: #666;
    font-size: 16px;
    text-align: center;
    font-weight: 500;
}

body.dark-mode .loading-text {
    color: #ccc;
}

/* İndirme çerçevesi başlangıçta gizli */
.download-frame {
    display: none;
}

.download-frame.loaded {
    display: block;
}

/* Hata mesajı */
.load-error {
    text-align: center;
    padding: 40px 20px;
    color: #f44336;
    display: none;
}

.load-error.show {
    display: block;
}

body.dark-mode .load-error {
    color: #ff6b6b;
}

.load-error-icon {
    font-size: 48px;
    margin-bottom: 15px;
}

/* İndirme durumu güncellemeleri */
.download-info {
    transition: all 0.3s ease;
}

.download-info.loading {
    background: #e3f2fd;
}

body.dark-mode .download-info.loading {
    background: #1a237e;
}

.download-info.success {
    background: #e8f5e8;
}

body.dark-mode .download-info.success {
    background: #1b5e20;
}

.download-info.error {
    background: #ffebee;
}

body.dark-mode .download-info.error {
    background: #b71c1c;
}

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .apps-grid {
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }
}

@media (max-width: 768px) {
    .mobile-menu-toggle {
        display: block;
    }
    
    .sidebar {
        transform: translateX(-100%);
        width: 280px;
        z-index: 1000;
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
        display: none;
    }
    
    .main-content {
        margin-left: 0 !important;
        padding: 70px 15px 20px;
        width: 100%;
    }
    
    .apps-grid {
        grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
        gap: 15px;
    }
    
    .app-detail-header {
        flex-direction: column;
        text-align: center;
    }
    
    .app-detail-logo {
        margin: 0 auto;
    }
    
    .download-modal-content {
        width: 95%;
        max-width: 95%;
    }
    
    .download-frame-container {
        height: 400px;
    }
    
    .slider-controls {
        padding: 0 10px;
    }
    
    .slider-btn {
        width: 40px;
        height: 40px;
        font-size: 16px;
    }
    
    .header {
        margin-bottom: 20px;
        padding-top: 60px;
    }
    
    .section-title {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
    
    .user-actions {
        gap: 10px;
    }
    
    .language-selector {
        margin-right: 10px;
    }
    
    .loading-spinner {
        width: 40px;
        height: 40px;
    }
    
    .loading-text {
        font-size: 14px;
    }
    
    /* Mobilde sidebar açıkken toggle butonunu gizle */
    .sidebar.open ~ .mobile-menu-toggle {
        display: none;
    }
}

@media (max-width: 480px) {
    .main-content {
        padding: 70px 10px 15px;
    }
    
    .download-frame-container {
        height: 350px;
    }
    
    .download-modal-header h2 {
        font-size: 1.2rem;
    }
    
    .modal-content, .download-modal-content {
        border-radius: 8px;
    }
    
    .app-icon {
        height: 140px;
    }
    
    .app-details {
        padding: 15px;
    }
    
    .slider-dots {
        bottom: 10px;
    }
    
    .custom-alert {
        right: 10px;
        left: 10px;
        max-width: calc(100% - 20px);
    }
    
    .language-btn {
        padding: 6px 10px;
        font-size: 14px;
    }
    
    .language-dropdown {
        min-width: 130px;
    }
    
    .loading-container {
        padding: 30px 15px;
    }
    
    .loading-spinner {
        width: 35px;
        height: 35px;
        border-width: 3px;
    }
    
    .user-actions {
        flex-wrap: wrap;
        justify-content: flex-end;
    }
    
    .user-actions button {
        padding: 8px 15px;
        font-size: 14px;
    }
}

/* Touch device optimizations */
@media (hover: none) and (pointer: coarse) {
    .app-item:hover {
        transform: none;
    }
    
    .user-actions button:hover,
    .view-all:hover,
    .app-details button:hover,
    .download-action:hover,
    .login-btn:hover,
    .slider-btn:hover {
        transform: none;
    }
    
    .menu-item:hover {
        background-color: transparent;
        border-left: 4px solid transparent;
    }
    
    .menu-item.active:hover {
        background-color: rgba(255,255,255,.15);
        border-left: 4px solid #fff;
    }
    
    /* Mobilde daha büyük tıklama alanları */
    .menu-item, .submenu-item {
        min-height: 44px;
    }
    
    button, .view-all {
        min-height: 44px;
        min-width: 44px;
    }
}

/* High DPI screens */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .app-icon img {
        image-rendering: -webkit-optimize-contrast;
    }
}

/* Print styles */
@media print {
    .sidebar,
    .header,
    .slider-controls,
    .slider-dots,
    .view-all,
    .user-actions,
    .menu-toggle,
    .mobile-menu-toggle,
    .language-selector {
        display: none !important;
    }
    
    .main-content {
        margin-left: 0 !important;
        padding: 0;
    }
    
    .hero-slider {
        display: none;
    }
    
    .apps-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }
    
    .app-item {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }
}

/* iOS özel stilleri */
@supports (-webkit-touch-callout: none) {
    .sidebar {
        padding-bottom: env(safe-area-inset-bottom);
    }
    
    .main-content {
        padding-bottom: env(safe-area-inset-bottom);
    }
}
</style>
</head>
<body>
<!-- MOBİL MENU TOGGLE BUTONU -->
<button class="mobile-menu-toggle" id="mobileMenuToggle">☰</button>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">
    <button class="sidebar-toggle" id="sidebarToggle">≡</button>
    <div class="logo">
        <h1 data-i18n="app.name">Dehşet Store</h1>
    </div>
    <div class="menu">
        <div class="menu-item active">
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

    <!-- Hero Bölümü -->
    <div class="hero-slider">
        <div class="slider-container">
            <div class="slider-track" id="sliderTrack">
                <!-- Slide 1: Uygulamalar -->
                <div class="slide">
                    <h1 data-i18n="hero.title1">En İyi Uygulamalar Burada</h1>
                    <p data-i18n="hero.subtitle1">Binlerce uygulama arasından ihtiyacınız olanı bulun</p>
                    <button onclick="window.location.href='apps.php'" data-i18n="hero.button1">Hemen Keşfet</button>
                </div>
                
                <!-- Slide 2: dehşet game reklamı -->
                <div class="slide" style="background: linear-gradient(340deg, #ff6b6b 0%, #ee5a24 100%);">
                    <h1 data-i18n="hero.title2">Dehşet Games</h1>
                    <p data-i18n="hero.subtitle2">🏆 Liderlik Sıralamasında Yerini Al! Rakip Tanımayan Oyun Deneyimi</p>
                    <button onclick="showAlert('Dehşet Games sitesine yönlendiriliyorsunuz...', 'info'); setTimeout(() => window.location.href='https://dehsetgames.online/', 1500)" data-i18n="hero.button2">Hemen Git</button>
                </div>
                
                <!-- Slide 3: dehşet store masaüstü uygulaması -->
                <div class="slide" style="background: linear-gradient(340deg, #4facfe 0%, #00f2fe 100%);">
                    <h1 data-i18n="hero.title3">Dehşet Store</h1>
                    <p data-i18n="hero.subtitle3">Dehşet store nin masaüstü uygulamasını indirin</p>
                    <button onclick="downloadDesktopApp()" data-i18n="hero.button3">İndir</button>
                </div>
            </div>
        </div>
        
        <!-- Slider Kontrolleri -->
        <div class="slider-controls">
            <button class="slider-btn prev-btn">❮</button>
            <button class="slider-btn next-btn">❯</button>
        </div>
        
        <!-- Slider Dots -->
        <div class="slider-dots" id="sliderDots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>
    </div>

    <div class="section-title">
        <h2 data-i18n="sections.popular">Popüler Uygulamalar</h2>
        <a href="apps.php" class="view-all" data-i18n="sections.viewAll">Tümünü Gör</a>
    </div>
    <div class="apps-grid" id="popularApps"></div>

    <div class="section-title">
        <h2 data-i18n="sections.new">Yeni Çıkanlar</h2>
        <a href="apps.php" class="view-all" data-i18n="sections.viewAll">Tümünü Gör</a>
    </div>
    <div class="apps-grid" id="newApps"></div>
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

<!-- UYGULAMA DETAY MODALI -->
<div class="modal" id="appDetailModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2 id="appDetailTitle" data-i18n="app.details">Uygulama Detayları</h2>
            <button class="close-modal">&times;</button>
        </div>
        <div class="app-detail-content" id="appDetailContent">
            <!-- Dinamik içerik buraya gelecek -->
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
        
        <!-- YENİ: Yükleme Animasyonu -->
        <div class="loading-container" id="loadingContainer">
            <div class="loading-spinner"></div>
            <div class="loading-text" data-i18n="download.pleaseWait">Lütfen bekleyin, sayfa yükleniyor...</div>
        </div>
        
        <div class="download-frame-container">
            <iframe id="downloadFrame" class="download-frame" src="about:blank" 
                    onload="hideLoading()" 
                    onerror="showLoadError()"></iframe>
        </div>
    </div>
</div>

<script>
// Profile gitme fonksiyonu
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

// Dark mode butonu için event propagation'ı durdur
function toggleDarkMode(event) {
    if (event) {
        event.stopPropagation();
    }
    document.body.classList.toggle('dark-mode');
    localStorage.setItem('darkMode', document.body.classList.contains('dark-mode'));
}

// Kullanıcı giriş durumuna göre profil bilgisini güncelle
function updateProfileSection(loggedIn, username = '') {
    const userAvatar = document.getElementById('userAvatar');
    const userName = document.getElementById('userName');
    const userStatus = document.getElementById('userStatus');
    
    if (loggedIn) {
        userName.textContent = username;
        userStatus.textContent = 'Profile Git';
        userAvatar.textContent = username.charAt(0).toUpperCase();
        
        // Profile tıklanabilir yap
        const profileSection = document.getElementById('profileSection');
        profileSection.style.cursor = 'pointer';
        profileSection.onclick = goToProfile;
    } else {
        userName.textContent = translations[currentLang]?.['user.guest'] || 'Kullanıcı';
        userStatus.textContent = translations[currentLang]?.['user.login'] || 'Giriş Yap';
        userAvatar.textContent = 'K';
        
        // Giriş yapılabilir yap
        const profileSection = document.getElementById('profileSection');
        profileSection.style.cursor = 'pointer';
        profileSection.onclick = () => loginModal.style.display = 'flex';
    }
}

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
const translations = {
    tr: {
        // Genel
        "app.name": "Dehşet Store",
        "app.details": "Uygulama Detayları",
        
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
        
        // Hero Bölümü
        "hero.title1": "En İyi Uygulamalar Burada",
        "hero.subtitle1": "Binlerce uygulama arasından ihtiyacınız olanı bulun",
        "hero.button1": "Hemen Keşfet",
        "hero.title2": "Dehşet Games",
        "hero.subtitle2": "🏆 Liderlik Sıralamasında Yerini Al! Rakip Tanımayan Oyun Deneyimi",
        "hero.button2": "Hemen Git",
        "hero.title3": "Dehşet Store",
         "hero.subtitle3": "Dehşet store nin Masaüstü uygulamasını indirin",
        "hero.button3": "İndir",
        // Bölümler
        "sections.popular": "Popüler Uygulamalar",
        "sections.new": "Yeni Çıkanlar",
        "sections.viewAll": "Tümünü Gör",
        
        // Uygulama Detayları
        "app.developer": "Geliştirici",
        "app.category": "Kategori",
        "app.rating": "Puan",
        "app.downloads": "İndirme",
        "app.description": "Açıklama",
        "app.noDescription": "Açıklama bulunmuyor.",
        "app.noScreenshots": "Ekran görüntüsü bulunmuyor",
        "app.download": "İndir",
        
        // İndirme
        "download.page": "İndirme Sayfası",
        "download.loading": "✅ İndirme sayfası yükleniyor...",
        
        // Alert Mesajları
        "alert.loginSuccess": "Giriş başarılı!",
        "alert.logoutSuccess": "Çıkış yapıldı!",
        "alert.loginError": "Giriş sırasında hata oluştu!",
        "alert.logoutError": "Çıkış sırasında hata oluştu!",
        "alert.downloadLogin": "İndirmek için giriş yapmalısınız!",
        "alert.banDownload": "IP adresiniz banlandı! İndirme yapamazsınız.",
        "alert.noDownloadLink": "İndirme linki bulunamadı!",
        "alert.downloadStarting": " indirme sayfası açılıyor...",
        "alert.redirecting": "Dehşet Games sitesine yönlendiriliyorsunuz...",
        "alert.appsLoadError": "Uygulamalar yüklenemedi , Sayfayı yenileyin",
        "download.pleaseWait": "Lütfen bekleyin, sayfa yükleniyor...",
        "download.loaded": "✅ Sayfa başarıyla yüklenendi!",
        "download.error": "Sayfa yüklenirken bir hata oluştu.",
        "download.timeout": "Sayfa yüklenirken zaman aşımı oluştu. Lütfen tekrar deneyin.",
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
        "alert.appDetailsBanned": "IP adresiniz banlandı! Uygulama detaylarını görüntüleyemezsiniz.",
		"menu.categories": "Kategoriler",
        "category.games": "Oyunlar",
        "category.system": "Sistem Araçları",
        "category.media": "Multimedya",
        "category.security": "Güvenlik",
        "category.internet": "İnternet",
        "guest.download.title": "Ücretsiz İndirme",
        "guest.download.message": "Giriş yapmadan 1 ücretsiz indirme hakkınız bulunuyor. Bu hakkı şimdi kullanmak istiyor musunuz?",
        "guest.download.confirm": "Evet, İndir",
        "guest.download.cancel": "İptal",
        "guest.download.success": "Ücretsiz indirme hakkınız kullanıldı. Daha fazla indirme için lütfen giriş yapın.",
        "alert.guestDownloadUsed": "Ücretsiz indirme hakkınızı zaten kullandınız. Daha fazla indirme için giriş yapın."
        
    },
    
    en: {
        "app.name": "Dehşet Store",
        "app.details": "App Details",
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
        "hero.title1": "Best Apps Here",
        "hero.subtitle1": "Find what you need among thousands of apps",
        "hero.button1": "Explore Now",
        "hero.title2": "Dehşet Games",
        "hero.subtitle2": "🏆 Take Your Place in the Leaderboard! Unbeatable Gaming Experience",
        "hero.button2": "Go Now",
        "hero.title3": "Dehşet Store",
        "hero.subtitle3": "Download the Dehşet Store desktop application",
        "hero.button3": "Download",
        "sections.popular": "Popular Apps",
        "sections.new": "New Releases",
        "sections.viewAll": "View All",
        "app.developer": "Developer",
        "app.category": "Category",
        "app.rating": "Rating",
        "app.downloads": "Downloads",
        "app.description": "Description",
        "app.noDescription": "No description available.",
        "app.noScreenshots": "No screenshots available",
        "app.download": "Download",
        "download.page": "Download Page",
        "download.loading": "✅ Download page loading...",
        "alert.loginSuccess": "Login successful!",
        "alert.logoutSuccess": "Logged out successfully!",
        "alert.loginError": "Login error occurred!",
        "alert.logoutError": "Logout error occurred!",
        "alert.downloadLogin": "You must login to download!",
        "alert.banDownload": "Your IP is banned! Cannot download.",
        "alert.noDownloadLink": "Download link not found!",
        "alert.downloadStarting": " download page opening...",
        "alert.redirecting": "Redirecting to Dehşet Games...",
        "alert.appsLoadError": "Failed to load apps",
        "download.pleaseWait": "Please wait, page is loading...",
        "download.loaded": "✅ Page loaded successfully!",
        "download.error": "An error occurred while loading the page.",
        "download.timeout": "Page loading timed out. Please try again.",
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
        "alert.appDetailsBanned": "Your IP is banned! Cannot view app details.",
		"menu.categories": "Categories",
        "category.games": "Games",
        "category.system": "System Tools",
        "category.media": "Multimedia",
        "category.security": "Security",
        "category.internet": "Internet",
        "guest.download.title": "Free Download",
        "guest.download.message": "You have 1 free download without logging in. Do you want to use this right now?",
        "guest.download.confirm": "Yes, Download",
        "guest.download.cancel": "Cancel",
        "guest.download.success": "Your free download has been used. Please log in for more downloads.",
        "alert.guestDownloadUsed": "You have already used your free download. Please log in for more downloads."
    }
};

// === BAN KONTROL SİSTEMİ ===
let banCountdownInterval = null;

// === DOM ELEMENTS ===
const mobileMenuToggle = document.getElementById('mobileMenuToggle');
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebarToggle');
const mainContent = document.getElementById('mainContent');
const popularAppsGrid = document.getElementById('popularApps');
const newAppsGrid = document.getElementById('newApps');
const loginBtn = document.getElementById('loginBtn');
const loginModal = document.getElementById('loginModal');
const appDetailModal = document.getElementById('appDetailModal');
const downloadModal = document.getElementById('downloadModal');
const downloadFrame = document.getElementById('downloadFrame');
const downloadModalTitle = document.getElementById('downloadModalTitle');
const closeModals = document.querySelectorAll('.close-modal');
const loginForm = document.getElementById('loginForm');
const appDetailTitle = document.getElementById('appDetailTitle');
const appDetailContent = document.getElementById('appDetailContent');
const banMessage = document.getElementById('banMessage');
const autoRefreshNotice = document.getElementById('autoRefreshNotice');
const languageBtn = document.getElementById('languageBtn');
const languageDropdown = document.getElementById('languageDropdown');
const currentLanguage = document.getElementById('currentLanguage');
const darkModeToggle = document.getElementById('darkModeToggle');
const profileSection = document.getElementById('profileSection');

// === DEĞİŞKENLER ===
let allApps = [];
let currentApp = null;
let currentLang = 'tr';
let guestDownloadUsed = false;

// === GİRİŞ YAPMADAN İNDİRME SİSTEMİ ===

// Guest download kontrolü
function checkGuestDownload() {
    const guestDownload = localStorage.getItem('guest_download_used');
    return guestDownload === 'true';
}

// Guest download kullanıldı olarak işaretle
function markGuestDownloadUsed() {
    localStorage.setItem('guest_download_used', 'true');
    guestDownloadUsed = true;
}

// Guest download hakkını sıfırla (isteğe bağlı)
function resetGuestDownload() {
    localStorage.removeItem('guest_download_used');
    guestDownloadUsed = false;
}

// Guest download onay modalı - DÜZELTİLMİŞ
function showGuestDownloadConfirmation(app) {
    const confirmModal = document.createElement('div');
    confirmModal.className = 'modal';
    confirmModal.style.display = 'flex';
    confirmModal.id = 'guestDownloadModal';
    confirmModal.innerHTML = `
        <div class="modal-content glass-card" style="max-width: 500px;">
            <div class="modal-header">
                <h2>${translations[currentLang]['guest.download.title'] || 'Ücretsiz İndirme'}</h2>
                <button class="close-modal" id="closeGuestModal">&times;</button>
            </div>
            <div style="padding: 20px;">
                <p style="margin-bottom: 15px; font-size: 16px;">
                    ${translations[currentLang]['guest.download.message'] || 'Giriş yapmadan 1 ücretsiz indirme hakkınız bulunuyor. Bu hakkı şimdi kullanmak istiyor musunuz?'}
                </p>
                <div style="background: #e3f2fd; padding: 15px; border-radius: 8px; margin-bottom: 20px;">
                    <strong>${app.name}</strong><br>
                    <small>${app.developer || ''}</small>
                </div>
                <div style="display: flex; gap: 10px; justify-content: flex-end;">
                    <button class="premium-btn secondary" id="cancelGuestDownload" style="padding: 10px 20px;">
                        ${translations[currentLang]['guest.download.cancel'] || 'İptal'}
                    </button>
                    <button class="premium-btn" id="confirmGuestDownload" style="padding: 10px 20px;">
                        ${translations[currentLang]['guest.download.confirm'] || 'Evet, İndir'}
                    </button>
                </div>
            </div>
        </div>
    `;
    
    document.body.appendChild(confirmModal);
    
    // Event listener'ları ekle
    const closeBtn = document.getElementById('closeGuestModal');
    const cancelBtn = document.getElementById('cancelGuestDownload');
    const confirmBtn = document.getElementById('confirmGuestDownload');
    
    // Kapatma butonu
    closeBtn.addEventListener('click', () => {
        confirmModal.remove();
    });
    
    // İptal butonu
    cancelBtn.addEventListener('click', () => {
        confirmModal.remove();
    });
    
    // Onay butonu
    confirmBtn.addEventListener('click', () => {
        confirmGuestDownload(app.id);
        confirmModal.remove();
    });
    
    // Modal dışına tıklayınca kapat
    confirmModal.addEventListener('click', (e) => {
        if (e.target === confirmModal) {
            confirmModal.remove();
        }
    });
}

// Guest download onaylandığında - DÜZELTİLMİŞ
function confirmGuestDownload(appId) {
    const app = allApps.find(a => a.id == appId) || currentApp;
    if (!app) return;
    
    // Guest download kullanıldı olarak işaretle
    markGuestDownloadUsed();
    
    // Tüm guest download modal'larını kapat
    const guestModal = document.getElementById('guestDownloadModal');
    if (guestModal) {
        guestModal.remove();
    }
    
    // İndirme işlemini başlat
    showDownloadPopup(app);
    
    showAlert(translations[currentLang]['guest.download.success'] || 'Ücretsiz indirme hakkınız kullanıldı. Daha fazla indirme için lütfen giriş yapın.', 'info');
}

// === SAYFA YÜKLENDİĞİNDE ===
document.addEventListener('DOMContentLoaded', function() {
    initializeLanguage();
    checkLoginStatus();
    setupEventListeners();
    loadAppsJson();
    loadDarkMode();
    initSlider();
    checkBanStatus();
    setupCategoriesMenu();
    
    // Guest download durumunu kontrol et
    guestDownloadUsed = checkGuestDownload();
    
    // Modern tasarım iyileştirmelerini başlat
    initModernDesign();
    
    // Periyodik ban kontrolü
    setInterval(() => {
        if (!banCountdownInterval) {
            checkBanStatus();
        }
    }, 30000);
    
    // Mobil menu toggle
    if (window.innerWidth <= 768) {
        mobileMenuToggle.style.display = 'flex';
        sidebarToggle.style.display = 'none';
    }
});

// === MODERN TASARIM İYİLEŞTİRMELERİ ===
function initModernDesign() {
    
    // Skeleton loader'ı başlat
    createSkeletonLoaders();
    
    // Tüm premium butonları güncelle
    document.querySelectorAll('button').forEach(button => {
        if (button.textContent.includes('Giriş Yap') || 
            button.textContent.includes('Login') ||
            button.textContent.includes('Detaylar') ||
            button.textContent.includes('Details') ||
            button.classList.contains('details-btn') ||
            button.textContent.includes('İndir') ||
            button.textContent.includes('Download')) {
            button.classList.add('premium-btn');
        }
    });
    
    // Tüm view-all linklerini güncelle
    document.querySelectorAll('.view-all').forEach(link => {
        link.classList.add('premium-btn', 'secondary');
    });
    
    // Tüm input alanlarını güncelle
    document.querySelectorAll('input[type="text"], input[type="password"]').forEach(input => {
        input.classList.add('premium-input');
    });
    
    // Gradient badge'leri ekle
    document.querySelectorAll('.app-category').forEach(badge => {
        badge.classList.add('gradient-badge');
        
        // Rastgele badge stili
        const styles = ['', 'secondary', 'accent'];
        const randomStyle = styles[Math.floor(Math.random() * styles.length)];
        if (randomStyle) {
            badge.classList.add(randomStyle);
        }
    });
    
    // Section title'lara animasyon ekle
    document.querySelectorAll('.section-title').forEach(section => {
        section.classList.add('slide-up-animation');
    });
    
    // Sidebar'a glass effect ekle
    sidebar.classList.add('glass-effect');
    
    // Modal'lara modern stil ekle
    document.querySelectorAll('.modal-content').forEach(modal => {
        modal.classList.add('glass-card');
    });
}

// Skeleton loader oluşturma
function createSkeletonLoaders() {
    const popularAppsGrid = document.getElementById('popularApps');
    const newAppsGrid = document.getElementById('newApps');
    
    if (popularAppsGrid && newAppsGrid) {
        // Popüler uygulamalar için skeleton
        for (let i = 0; i < 4; i++) {
            const skeletonCard = document.createElement('div');
            skeletonCard.className = 'app-item skeleton-loader skeleton-card';
            popularAppsGrid.appendChild(skeletonCard);
        }
        
        // Yeni uygulamalar için skeleton
        for (let i = 0; i < 4; i++) {
            const skeletonCard = document.createElement('div');
            skeletonCard.className = 'app-item skeleton-loader skeleton-card';
            newAppsGrid.appendChild(skeletonCard);
        }
    }
}

// Skeleton loader'ı kaldırma
function removeSkeletonLoaders() {
    const skeletonCards = document.querySelectorAll('.skeleton-loader');
    skeletonCards.forEach(card => {
        card.style.opacity = '0';
        setTimeout(() => {
            if (card.parentNode) card.parentNode.removeChild(card);
        }, 300);
    });
}

// Gelişmiş alert sistemi
function showEnhancedAlert(msg, type = 'info') {
    const alert = document.createElement('div');
    alert.className = `custom-alert ${type} glass-effect scale-in-animation`;
    
    const icons = {
        success: '✅',
        error: '❌',
        warning: '⚠️',
        info: 'ℹ️'
    };
    
    alert.innerHTML = `
        <div class="alert-icon">${icons[type] || 'ℹ️'}</div>
        <div class="alert-content"><p>${msg}</p></div>
        <button class="close-alert premium-btn" style="padding: 5px 10px; font-size: 12px;">&times;</button>
    `;
    
    document.body.appendChild(alert);
    
    // Alert kapatma
    alert.querySelector('.close-alert').onclick = () => {
        alert.style.transform = 'translateX(400px)';
        alert.style.opacity = '0';
        setTimeout(() => {
            if (document.body.contains(alert)) alert.remove();
        }, 300);
    };
    
    // Otomatik kapanma
    setTimeout(() => {
        if (document.body.contains(alert)) {
            alert.style.transform = 'translateX(400px)';
            alert.style.opacity = '0';
            setTimeout(() => {
                if (document.body.contains(alert)) alert.remove();
            }, 300);
        }
    }, 5000);
}

// Mevcut showAlert fonksiyonunu güncelle
window.showAlert = function(msg, type = 'info') {
    showEnhancedAlert(msg, type);
};

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
    
    // Varsayılan LTR yönü
    document.body.dir = 'ltr';
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
    const usernameInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    
    if (usernameInput && translations[currentLang] && translations[currentLang]['auth.username']) {
        usernameInput.placeholder = translations[currentLang]['auth.username'];
    }
    
    if (passwordInput && translations[currentLang] && translations[currentLang]['auth.password']) {
        passwordInput.placeholder = translations[currentLang]['auth.password'];
    }
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
    // Mobile menu toggle
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('open');
            // Menü açıkken toggle butonunu gizle
            if (sidebar.classList.contains('open')) {
                mobileMenuToggle.style.display = 'none';
            } else {
                mobileMenuToggle.style.display = 'flex';
            }
        });
    }

    // Sidebar toggle (küçültme) - sadece masaüstünde
    sidebarToggle.addEventListener('click', () => {
        if (window.innerWidth > 768) {
            sidebar.classList.toggle('collapsed');
        }
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
            appDetailModal.style.display = 'none';
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

    // Modal dışına tıklayınca kapat
    window.addEventListener('click', (e) => {
        if (e.target === loginModal) loginModal.style.display = 'none';
        if (e.target === appDetailModal) appDetailModal.style.display = 'none';
        if (e.target === downloadModal) {
            downloadModal.style.display = 'none';
            downloadFrame.src = 'about:blank';
        }
        
        // Mobilde sidebar dışına tıklayınca kapat
        if (window.innerWidth <= 768 && !sidebar.contains(e.target) && !mobileMenuToggle.contains(e.target) && sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            mobileMenuToggle.style.display = 'flex';
        }
    });
    
    // Pencere boyutu değiştiğinde
    window.addEventListener('resize', () => {
        if (window.innerWidth <= 768) {
            mobileMenuToggle.style.display = 'flex';
            sidebarToggle.style.display = 'none';
            // Mobilde sidebar kapalı durumda başlasın
            if (!sidebar.classList.contains('open')) {
                mobileMenuToggle.style.display = 'flex';
            }
        } else {
            mobileMenuToggle.style.display = 'none';
            sidebarToggle.style.display = 'block';
            sidebar.classList.remove('open');
        }
    });

    // Dark mode toggle
    darkModeToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleDarkMode();
    });

    // Profile section click
    profileSection.addEventListener('click', function(e) {
        if (!e.target.closest('.dark-mode-btn')) {
            goToProfile();
        }
    });
}

// === GİRİŞ SİSTEMİ ===
function checkLoginStatus() {
    fetch('check_login.php')
        .then(r => r.json())
        .then(data => {
            if (data.loggedIn) {
                updateLoginState(true, data.username);
            }
        })
        .catch(error => {
            console.log('Login check failed');
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
            loginModal.style.display = 'none';
            loginForm.reset();
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
        })
        .catch(error => {
            console.error('Logout error:', error);
            showAlert(translations[currentLang]['alert.logoutError'] || 'Çıkış sırasında hata oluştu!', 'error');
        });
}

function updateLoginState(loggedIn, username = '') {
    const profileInfo = document.querySelector('.profile-info');
    const profileImg = document.querySelector('.profile-img');
    
    if(loggedIn){
        profileInfo.querySelector('h3').textContent = username;
        profileInfo.querySelector('p').textContent = translations[currentLang]['user.online'] || 'Çevrimiçi';
        loginBtn.textContent = translations[currentLang]['auth.logout'] || 'Çıkış Yap';
        profileImg.textContent = username.charAt(0).toUpperCase();
    } else {
        profileInfo.querySelector('h3').textContent = translations[currentLang]['user.guest'] || 'Kullanıcı';
        profileInfo.querySelector('p').textContent = translations[currentLang]['user.login'] || 'Giriş Yap';
        loginBtn.textContent = translations[currentLang]['auth.login'] || 'Giriş Yap';
        profileImg.textContent = 'K';
    }
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

function showLoadingState() {
    const loadingContainer = document.getElementById('loadingContainer');
    const downloadInfo = document.querySelector('.download-info');
    const downloadStatus = document.getElementById('downloadStatus');
    
    // Yükleme durumunu göster
    loadingContainer.classList.add('show');
    downloadFrame.classList.remove('loaded');
    downloadInfo.classList.add('loading');
    downloadInfo.classList.remove('success', 'error');
    
    downloadStatus.textContent = translations[currentLang]['download.loading'] || '✅ İndirme sayfası yükleniyor...';
    downloadStatus.style.color = '';
}

function hideLoading() {
    const loadingContainer = document.getElementById('loadingContainer');
    const downloadInfo = document.querySelector('.download-info');
    const downloadStatus = document.getElementById('downloadStatus');
    
    // Yükleme bitti, iframe'i göster
    setTimeout(() => {
        loadingContainer.classList.remove('show');
        downloadFrame.classList.add('loaded');
        downloadInfo.classList.remove('loading');
        downloadInfo.classList.add('success');
        
        downloadStatus.textContent = translations[currentLang]['download.loaded'] || '✅ Sayfa başarıyla yüklendi!';
        downloadStatus.style.color = '#4CAF50';
    }, 500); // Kısa bir gecikme için daha iyi UX
}

function showLoadError(message = '') {
    const loadingContainer = document.getElementById('loadingContainer');
    const downloadInfo = document.querySelector('.download-info');
    const downloadStatus = document.getElementById('downloadStatus');
    const errorMessage = message || (translations[currentLang]['download.error'] || 'Sayfa yüklenirken bir hata oluştu.');
    
    // Hata durumunu göster
    loadingContainer.classList.remove('show');
    downloadInfo.classList.remove('loading');
    downloadInfo.classList.add('error');
    
    downloadStatus.textContent = `❌ ${errorMessage}`;
    downloadStatus.style.color = '#f44336';
    
    // Hata durumunda iframe'i temizle
    downloadFrame.src = 'about:blank';
    downloadFrame.classList.remove('loaded');
}

// Modal kapatıldığında yükleme durumunu sıfırla
closeModals.forEach(closeBtn => {
    closeBtn.addEventListener('click', () => {
        resetLoadingState();
    });
});

function resetLoadingState() {
    const loadingContainer = document.getElementById('loadingContainer');
    const downloadInfo = document.querySelector('.download-info');
    const downloadStatus = document.getElementById('downloadStatus');
    
    loadingContainer.classList.remove('show');
    downloadFrame.classList.remove('loaded');
    downloadInfo.classList.remove('loading', 'success', 'error');
    downloadStatus.textContent = translations[currentLang]['download.loading'] || '✅ İndirme sayfası yükleniyor...';
    downloadStatus.style.color = '';
}

// === UYGULAMA YÖNETİMİ ===
function loadAppsJson() {
    fetch('uygulamalar/apps.json', {cache: "no-store"})
        .then(r => r.json())
        .then(json => {
            if (json.apps) {
                allApps = json.apps;
                displayApps(allApps);
            } else {
                throw new Error('apps.json içinde "apps" alanı yok.');
            }
        })
        .catch(err => {
            console.error('apps.json yükleme hatası:', err);
            showAlert(translations[currentLang]['alert.appsLoadError'] || 'Uygulamalar yüklenemedi', 'error');
            const fallback = [{
                id: 1,
                name: 'RGB Arkaplan Pro',
                developer: 'RGB Software',
                description: 'Dinamik RGB arkaplan uygulaması',
                category: 'sistem',
                price: 'Ücretsiz',
                rating: 5,
                downloads: '1.3M',
                logo: 'images/apps/rgb-logo.jpg',
                screenshots: [
                    'images/apps/rgb-screenshot1.jpg',
                    'images/apps/rgb-screenshot2.jpg'
                ],
                drive_link: 'https://drive.google.com/uc?export=download&id=1f5fEMywYczH3YnLamE2WjT0GWAQWuJIl'
            }];
            displayApps(fallback);
        });
}

function displayApps(apps) {
    // Skeleton loader'ları kaldır
    removeSkeletonLoaders();
    
    popularAppsGrid.innerHTML = '';
    newAppsGrid.innerHTML = '';
    
    if (!Array.isArray(apps)) return;
    
    const popular = apps.slice(0, 4);
    const newest = apps.slice(-4);
    
    popular.forEach(app => popularAppsGrid.appendChild(createAppCard(app)));
    newest.forEach(app => newAppsGrid.appendChild(createAppCard(app)));
}

function createAppCard(app) {
    const card = document.createElement('div');
    card.className = 'app-item';
    
    const price = app.price || 'Ücretsiz';
    const logo = app.logo ? `<img src="${app.logo}" alt="${app.name}" onerror="this.style.display='none'; this.parentNode.innerHTML='${app.name.substring(0,2)}'">` : app.name.substring(0,2);
    
    // Açıklamayı kaldırdık, sadece isim ve geliştirici gösteriyoruz
    card.innerHTML = `
        <div class="app-icon">
            ${logo}
            <div class="app-category">${app.category || 'Genel'}</div>
        </div>
        <div class="app-details">
            <h3>${app.name || 'Uygulama'}</h3>
            <p>${app.developer || 'Harika bir uygulama'}</p>
            <div class="app-meta">
                <div class="rating">${'★'.repeat(app.rating || 5)}</div>
                <div class="download-count">${app.downloads || '0'} ${translations[currentLang]['app.downloads'] || 'indirme'}</div>
            </div>
            <button class="details-btn">${translations[currentLang]['app.details'] || 'Detaylar'}</button>
        </div>
    `;
    
    const detailsBtn = card.querySelector('.details-btn');
    detailsBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        
        // BAN KONTROLÜ EKLE - apps.php'deki gibi
        fetch('sistem/check_ban.php')
            .then(response => response.json())
            .then(data => {
                if (data.banned) {
                    showBanMessage(data.remaining_time);
                    showAlert(translations[currentLang]['alert.appDetailsBanned'] || 'IP adresiniz banlandı! Uygulama detaylarını görüntüleyemezsiniz.', 'error');
                    return;
                }
                
                showAppDetails(app);
            })
            .catch(error => {
                console.error('Ban kontrol hatası:', error);
            });
    });
    
    // Animasyon ekle
    card.classList.add('scale-in-animation');
    
    return card;
}

// === UYGULAMA DETAY MODALI ===
function showAppDetails(app) {
    currentApp = app;
    appDetailTitle.textContent = app.name;
    
    const screenshots = app.screenshots || [];
    const screenshotHTML = screenshots.length > 0 ? `
        <div class="app-screenshots">
            ${screenshots.map(screenshot => `
                <div class="screenshot-item">
                    <img src="${screenshot}" alt="${app.name} ekran görüntüsü" onerror="this.parentNode.style.display='none'">
                </div>
            `).join('')}
        </div>
    ` : `<p>${translations[currentLang]['app.noScreenshots'] || 'Ekran görüntüsü bulunmuyor'}</p>`;
    
    appDetailContent.innerHTML = `
        <div class="app-detail-header">
            <img src="${app.logo || 'images/apps/default-logo.jpg'}" alt="${app.name}" class="app-detail-logo" onerror="this.src='images/apps/default-logo.jpg'">
            <div class="app-detail-info">
                <h3>${app.name}</h3>
                <div class="app-detail-meta">
                    <div class="meta-item">
                        <i>👤</i>
                        <span>${translations[currentLang]['app.developer'] || 'Geliştirici'}: ${app.developer || 'Bilinmiyor'}</span>
                    </div>
                    <div class="meta-item">
                        <i>📁</i>
                        <span>${translations[currentLang]['app.category'] || 'Kategori'}: ${app.category || 'Genel'}</span>
                    </div>
                    <div class="meta-item">
                        <i>⭐</i>
                        <span>${translations[currentLang]['app.rating'] || 'Puan'}: ${app.rating || '5'}/5</span>
                    </div>
                    <div class="meta-item">
                        <i>📥</i>
                        <span>${app.downloads || '0'} ${translations[currentLang]['app.downloads'] || 'indirme'}</span>
                    </div>
                </div>
            </div>
        </div>
        ${screenshotHTML}
        <div class="app-description">
            <strong>${translations[currentLang]['app.description'] || 'Açıklama'}:</strong><br>
            ${app.description || translations[currentLang]['app.noDescription'] || 'Açıklama bulunmuyor.'}
        </div>
        <button class="download-action" onclick="downloadCurrentApp()">${translations[currentLang]['app.download'] || 'İndir'}</button>
    `;
    
    appDetailModal.style.display = 'flex';
}

// === HERO SLIDER ===
let currentSlide = 0;
let slideInterval;
const slideDuration = 9000;

function initSlider() {
    const track = document.getElementById('sliderTrack');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    
    updateSlider();
    startAutoSlide();
    
    prevBtn.addEventListener('click', () => {
        goToSlide(currentSlide - 1);
        resetAutoSlide();
    });
    
    nextBtn.addEventListener('click', () => {
        goToSlide(currentSlide + 1);
        resetAutoSlide();
    });
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            goToSlide(index);
            resetAutoSlide();
        });
    });
    
    const slider = document.querySelector('.hero-slider');
    slider.addEventListener('mouseenter', () => {
        clearInterval(slideInterval);
    });
    
    slider.addEventListener('mouseleave', () => {
        startAutoSlide();
    });
    
    let startX = 0;
    let endX = 0;
    
    slider.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
    });
    
    slider.addEventListener('touchend', (e) => {
        endX = e.changedTouches[0].clientX;
        handleSwipe();
    });
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = startX - endX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                goToSlide(currentSlide + 1);
            } else {
                goToSlide(currentSlide - 1);
            }
            resetAutoSlide();
        }
    }
}

function goToSlide(slideIndex) {
    const slides = document.querySelectorAll('.slide');
    
    if (slideIndex >= slides.length) {
        currentSlide = 0;
    } else if (slideIndex < 0) {
        currentSlide = slides.length - 1;
    } else {
        currentSlide = slideIndex;
    }
    
    updateSlider();
}

function updateSlider() {
    const track = document.getElementById('sliderTrack');
    const dots = document.querySelectorAll('.dot');
    
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
    
    dots.forEach((dot, index) => {
        dot.classList.remove('active', 'completed');
        dot.style.setProperty('--progress', '0%');
        
        if (index === currentSlide) {
            dot.classList.add('active');
            setTimeout(() => {
                dot.classList.add('completed');
            }, slideDuration - 100);
        }
    });
}

function startAutoSlide() {
    clearInterval(slideInterval);
    slideInterval = setInterval(() => {
        goToSlide(currentSlide + 1);
    }, slideDuration);
}

function resetAutoSlide() {
    clearInterval(slideInterval);
    startAutoSlide();
}

// === İNDİRME FONKSİYONLARI ===

// Ana indirme fonksiyonu - GÜNCELLENMİŞ
function downloadCurrentApp() {
    if (!currentApp) return;
    
    fetch('sistem/check_ban.php')
        .then(response => response.json())
        .then(banData => {
            if (banData.banned) {
                showBanMessage(banData.remaining_time);
                showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! İndirme yapamazsınız.', 'error');
                return;
            }
            
            fetch('check_login.php')
                .then(r => r.json())
                .then(loginData => {
                    // Giriş yapmış kullanıcılar için normal işlem
                    if (loginData.loggedIn) {
                        showDownloadPopup(currentApp);
                        return;
                    }
                    
                    // Giriş yapmamış kullanıcılar için guest download kontrolü
                    if (checkGuestDownload()) {
                        showAlert(translations[currentLang]['alert.guestDownloadUsed'] || 'Ücretsiz indirme hakkınızı zaten kullandınız. Daha fazla indirme için giriş yapın.', 'warning');
                        appDetailModal.style.display = 'none';
                        loginModal.style.display = 'flex';
                        return;
                    }
                    
                    // İlk kez indirme yapacak guest kullanıcı
                    showGuestDownloadConfirmation(currentApp);
                    
                })
                .catch(error => {
                    console.error('Login check error:', error);
                    showAlert(translations[currentLang]['alert.loginError'] || 'Giriş kontrolü sırasında hata oluştu!', 'error');
                });
        })
        .catch(error => {
            console.error('Ban kontrol hatası:', error);
        });
}

// Masaüstü uygulaması indirme fonksiyonu - GÜNCELLENMİŞ
function downloadDesktopApp() {
    const desktopApp = {
        id: 'desktop-app',
        name: 'Dehşet Store Masaüstü Uygulaması',
        developer: 'Dehşet Store',
        description: 'Dehşet Store masaüstü uygulaması',
        category: 'sistem',
        price: 'Ücretsiz',
        rating: 5,
        downloads: '10K+',
        logo: 'images/logo.png',
        drive_link: "https://drive.google.com/uc?export=download&id=15A-W6O3Vcz4pwNYyhorQ26gxVyjwycYU"
    };
    
    fetch('sistem/check_ban.php')
        .then(response => response.json())
        .then(banData => {
            if (banData.banned) {
                showBanMessage(banData.remaining_time);
                showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! İndirme yapamazsınız.', 'error');
                return;
            }
            
            fetch('check_login.php')
                .then(r => r.json())
                .then(loginData => {
                    // Giriş yapmış kullanıcılar için normal işlem
                    if (loginData.loggedIn) {
                        showDownloadPopup(desktopApp);
                        return;
                    }
                    
                    // Giriş yapmamış kullanıcılar için guest download kontrolü
                    if (checkGuestDownload()) {
                        showAlert(translations[currentLang]['alert.guestDownloadUsed'] || 'Ücretsiz indirme hakkınızı zaten kullandınız. Daha fazla indirme için giriş yapın.', 'warning');
                        loginModal.style.display = 'flex';
                        return;
                    }
                    
                    // İlk kez indirme yapacak guest kullanıcı
                    showGuestDownloadConfirmation(desktopApp);
                    
                })
                .catch(error => {
                    console.error('Login check error:', error);
                    showAlert(translations[currentLang]['alert.loginError'] || 'Giriş kontrolü sırasında hata oluştu!', 'error');
                });
        })
        .catch(error => {
            console.error('Ban kontrol hatası:', error);
        });
}

// İndirme popup'ını göster
function showDownloadPopup(app) {
    if (!app || !app.drive_link) {
        showAlert(translations[currentLang]['alert.noDownloadLink'] || 'İndirme linki bulunamadı!', 'error');
        return;
    }
    
    downloadModalTitle.textContent = `${app.name} - ${translations[currentLang]['download.page'] || 'İndirme Sayfası'}`;
    
    // Önce yükleme ekranını göster
    showLoadingState();
    
    const driveUrl = app.drive_link.includes('?') ? 
        `${app.drive_link}&theme=light` : 
        `${app.drive_link}?theme=light`;
    
    // Iframe'i yükle
    downloadFrame.src = driveUrl;
    
    appDetailModal.style.display = 'none';
    downloadModal.style.display = 'flex';
    
    addToLocalDownloads(app.id, app.name);
    
    showAlert(`📥 ${app.name} ${translations[currentLang]['alert.downloadStarting'] || 'indirme sayfası açılıyor...'}`, 'info');
    
    // 30 saniye sonra hala yüklenmediyse timeout göster
    setTimeout(() => {
        if (downloadFrame.style.display === 'none') {
            showLoadError(translations[currentLang]['download.timeout'] || 'Sayfa yüklenirken zaman aşımı oluştu. Lütfen tekrar deneyin.');
        }
    }, 30000);
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

// İndirme başladığında bildirim gönder
function sendDownloadCompleteNotification(appName) {
    console.log('İndirme bildirimi:', appName);
    // Bildirim gönderme kodu buraya gelecek
}

// Yeni uygulama eklenince (örnek)
function checkNewApps() {
    // Bu fonksiyon periyodik olarak yeni uygulamaları kontrol edebilir
    // Örnek: Her 1 saatte bir
    setInterval(() => {
        fetch('apps.json')
            .then(response => response.json())
            .then(data => {
                const lastCheck = localStorage.getItem('lastAppCheck');
                const currentTime = Date.now();
                
                if (!lastCheck || currentTime - lastCheck > 3600000) { // 1 saat
                    // Yeni uygulamaları kontrol et ve bildirim gönder
                    localStorage.setItem('lastAppCheck', currentTime);
                    // Burada yeni uygulama kontrolü yapılabilir
                }
            });
    }, 3600000); // 1 saat
}

function initNotifications() {
    console.log('Bildirim sistemi başlatıldı');
    // Bildirim kodları buraya gelecek
}

function sendNewAppNotification(appName) {
    console.log('Yeni uygulama bildirimi:', appName);
    // Bildirim gönderme kodu buraya gelecek
}
</script>
    
</body>
</html>
<?php
// PHP kodu burada
?>