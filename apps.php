<?php
// apps.php - PHP versiyonu
header('Content-Type: text/html; charset=utf-8');
session_start();

// Kullanıcı bilgilerini kontrol et
$loggedIn = isset($_SESSION['username']);
$username = $loggedIn ? $_SESSION['username'] : '';
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

<title>Uygulamalar - Dehset Store</title>
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
    background: #6e6e6e;
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
.sidebar-toggle {
        display: none !important;
    }
    
    /* Mobilde logo padding'ini ayarla */
    .sidebar .logo {
        padding: 15px 0;
        margin-bottom: 20px;
    }
    
    /* Mobilde sidebar genişliği */
    .sidebar {
        width: 280px;
    }
    
    /* Mobilde sidebar açıkken menu-toggle'ı sağ üste al */
    .sidebar.open ~ .menu-toggle {
        left: auto;
        right: 20px;
        background: var(--accent-gradient);
    } 
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
/* Apps grid animasyonları */
.app-item {
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.5s ease;
}

.app-item[style*="display: block"] {
    opacity: 1;
    transform: translateY(0);
}

/* No results message */
#noResultsMessage {
    background: var(--card-bg);
    border-radius: 15px;
    padding: 60px 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    border: 1px solid rgba(0,0,0,.05);
}

body.dark-mode #noResultsMessage {
    border-color: rgba(255,255,255,.05);
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
    flex-wrap: wrap;
    gap: 20px;
}

.search-bar {
    display: flex;
    align-items: center;
    background: var(--card-bg);
    border-radius: 30px;
    padding: 12px 25px;
    box-shadow: 0 3px 15px rgba(0,0,0,.08);
    width: min(500px, 100%);
    border: 1px solid rgba(0,0,0,.05);
    transition: all 0.3s ease;
    flex: 1;
}

body.dark-mode .search-bar {
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
    font-size: clamp(14px, 2vw, 16px);
    background: transparent;
    color: var(--text-color);
}

.search-bar input::placeholder {
    color: #999;
}

body.dark-mode .search-bar input::placeholder {
    color: #ccc;
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
    padding: 12px 25px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
    font-size: clamp(14px, 2vw, 16px);
    white-space: nowrap;
}

.user-actions button:hover {
    background: #072c4e;
    transform: translateY(-2px);
}

/* --- KATEGORİLER --- */
.categories {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
    overflow-x: auto;
    padding-bottom: 15px;
    scrollbar-width: thin;
}

.categories::-webkit-scrollbar {
    height: 6px;
}

.categories::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 10px;
}

body.dark-mode .categories::-webkit-scrollbar-track {
    background: #2d2d2d;
}

.categories::-webkit-scrollbar-thumb {
    background: #c1c1c1;
    border-radius: 10px;
}

body.dark-mode .categories::-webkit-scrollbar-thumb {
    background: #555;
}

.category {
    background: #6e6e6e;
    padding: 12px 25px;
    border-radius: 30px;
    cursor: pointer;
    transition: all 0.3s ease;
    white-space: nowrap;
    box-shadow: 0 3px 10px rgba(0,0,0,.08);
    border: 2px solid transparent;
    font-weight: 500;
    margin-top: 5px;
    margin-left: 10px;
    font-size: clamp(14px, 2vw, 16px);
}

.category.active, .category:hover {
    background: var(--accent-color);
    color: #fff;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

/* --- UYGULAMA GRID --- */
.apps-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
}

.app-item {
    background: var(--card-bg);
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,.08);
    transition: all 0.3s ease;
    cursor: pointer;
    border: 1px solid rgba(0,0,0,.05);
}

body.dark-mode .app-item {
    border-color: rgba(255,255,255,.05);
}

.app-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,.15);
}

.app-icon {
    height: 180px;
    background: linear-gradient(135deg, var(--accent-color) 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
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
    top: 15px;
    right: 15px;
    background: rgb(0 0 0 / 20%);
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 12px;
    backdrop-filter: blur(10px);
    font-weight: 600;
}

.app-details {
    padding: 25px;
}

.app-details h3 {
    font-size: clamp(18px, 3vw, 20px);
    margin-bottom: 10px;
    color: var(--text-color);
}

.app-details p {
    color: #666;
    font-size: clamp(14px, 2vw, 16px);
    margin-bottom: 15px;
    line-height: 1.5;
}

body.dark-mode .app-details p {
    color: #ccc;
}

.app-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.rating {
    color: #ffc107;
    font-size: clamp(14px, 2vw, 16px);
}

.download-count {
    color: #666;
    font-size: clamp(13px, 2vw, 14px);
    display: flex;
    align-items: center;
    gap: 5px;
}

body.dark-mode .download-count {
    color: #ccc;
}

.app-details button {
    width: 100%;
    background: var(--accent-color);
    color: #fff;
    border: none;
    padding: 14px;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    font-size: clamp(14px, 2vw, 16px);
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.app-details button:hover {
    background: #764ba2;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
}

/* Yükleniyor buton stili */
.app-details button.loading {
    pointer-events: none;
    opacity: 0.8;
    background: #5a67d8;
}

.app-details button .button-text {
    transition: opacity 0.3s ease;
}

.app-details button .loading-spinner {
    display: none;
    width: 18px;
    height: 18px;
    border: 2px solid transparent;
    border-top: 2px solid #fff;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.app-details button.loading .button-text {
    opacity: 0;
}

.app-details button.loading .loading-spinner {
    display: block;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
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
    border-radius: 15px;
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
    padding: 25px 25px 0;
}

.modal-header h2 {
    color: var(--text-color);
    margin: 0;
    font-size: clamp(1.3rem, 4vw, 1.5rem);
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
    padding: 0 25px 25px;
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
    font-size: clamp(1.3rem, 4vw, 1.5rem);
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
    font-size: clamp(13px, 2vw, 14px);
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
    padding: 15px;
    border-radius: 10px;
    cursor: pointer;
    font-weight: 600;
    font-size: clamp(14px, 2vw, 16px);
    width: 100%;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.download-action:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(102,126,234,.3);
}

/* Yükleniyor buton stili */
.download-action.loading {
    pointer-events: none;
    opacity: 0.8;
    background: #5a67d8;
}

.download-action .button-text {
    transition: opacity 0.3s ease;
}

.download-action .loading-spinner {
    display: none;
    width: 18px;
    height: 18px;
    border: 2px solid transparent;
    border-top: 2px solid #fff;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.download-action.loading .button-text {
    opacity: 0;
}

.download-action.loading .loading-spinner {
    display: block;
}

/* --- İNDİRME POPUP STİLLERİ --- */
.download-modal-content {
    background: var(--card-bg);
    border-radius: 15px;
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
    font-size: clamp(1.3rem, 4vw, 1.5rem);
}

.download-info {
    padding: 15px 20px;
    background: #f8f9fa;
    border-bottom: 1px solid #eee;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    transition: all 0.3s ease;
}

body.dark-mode .download-info {
    background: #3d3d3d;
    border-bottom-color: #444;
}

.download-info p {
    margin: 0;
    color: #666;
    font-size: clamp(13px, 2vw, 14px);
    display: flex;
    align-items: center;
    gap: 8px;
}

body.dark-mode .download-info p {
    color: #ccc;
}

/* İndirme sayfası yükleniyor animasyonu */
.download-loading {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 20px;
}

.download-loading-spinner {
    width: 20px;
    height: 20px;
    border: 2px solid #f3f3f3;
    border-top: 2px solid var(--accent-color);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.download-loading-text {
    color: #666;
    font-size: 14px;
}

body.dark-mode .download-loading-text {
    color: #ccc;
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
/* Yüklendikten sonraki durum */
.download-info.loaded {
    background: #e8f5e8;
    border-bottom-color: #4caf50;
}

body.dark-mode .download-info.loaded {
    background: #1b5e20;
    border-bottom-color: #4caf50;
}

.download-info.loaded p {
    color: #2e7d32;
    font-weight: 600;
}

body.dark-mode .download-info.loaded p {
    color: #81c784;
}

.download-info.loaded .download-loading-spinner {
    display: none;
}

.download-info.loaded .download-loading-text::after {
    content: " ✅";
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
    font-size: clamp(14px, 2vw, 16px);
}

.form-group input {
    width: 100%;
    padding: 14px 18px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: clamp(14px, 2vw, 16px);
    background: var(--card-bg);
    color: var(--text-color);
    transition: all 0.3s ease;
}

body.dark-mode .form-group input {
    border-color: #555;
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
    font-size: clamp(14px, 2vw, 16px);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.login-btn:hover {
    background: #764ba2;
    transform: translateY(-2px);
}

.login-btn.loading {
    pointer-events: none;
    opacity: 0.8;
}

.login-btn .loading-spinner {
    display: none;
    width: 18px;
    height: 18px;
    border: 2px solid transparent;
    border-top: 2px solid #fff;
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

.login-btn.loading .button-text {
    display: none;
}

.login-btn.loading .loading-spinner {
    display: block;
}

.register-link {
    text-align: center;
    margin-top: 20px;
    color: #666;
    padding: 0 25px 25px;
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
    border-radius: 10px;
    padding: 15px 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,.15);
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

/* --- RESPONSIVE --- */
@media (max-width: 1024px) {
    .apps-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
        gap: 25px;
    }
}

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
        font-size: 18px;
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
    
    .apps-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .categories {
        flex-wrap: wrap;
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
    
    .user-actions {
        gap: 10px;
    }
    
    .language-selector {
        margin-right: 10px;
    }
}

@media (max-width: 480px) {
    .categories {
        gap: 10px;
    }
    
    .category {
        padding: 10px 20px;
        font-size: 14px;
    }
    
    .download-frame-container {
        height: 350px;
    }
    
    .download-modal-header h2 {
        font-size: 1.2rem;
    }
    
    .language-btn {
        padding: 6px 10px;
        font-size: 14px;
    }
    
    .language-dropdown {
        min-width: 130px;
    }
}

/* Touch device optimizations */
@media (hover: none) and (pointer: coarse) {
    .app-item:hover {
        transform: none;
    }
    
    .user-actions button:hover,
    .app-details button:hover,
    .download-action:hover,
    .login-btn:hover,
    .category:hover {
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
    .view-all,
    .user-actions,
    .menu-toggle,
    .language-selector {
        display: none !important;
    }
    
    .main-content {
        margin-left: 0 !important;
        padding: 0;
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

.page-title {
    font-size: clamp(1.5rem, 5vw, 2rem);
    margin-bottom: 25px;
    color: var(--text-color);
    background: var(--primary-gradient);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
    display: inline-block;
}

.page-title::after {
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

.page-title:hover::after {
    width: 100%;
}
    /* --- MENU TOGGLE BUTON STİLLERİ --- */
.menu-toggle {
    display: none;
    position: fixed;
    top: 20px;
    left: 20px;
    background: var(--primary-gradient);
    color: white;
    border: none;
    padding: 12px 15px;
    border-radius: 10px;
    cursor: pointer;
    z-index: 1001;
    font-size: 18px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
}

.menu-toggle:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.3);
}

.menu-toggle.active {
    background: var(--accent-gradient);
}

/* Mobilde sidebar ve toggle buton düzeni */
@media (max-width: 768px) {
    .menu-toggle {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .sidebar {
        transform: translateX(-100%);
        width: 280px;
        transition: transform 0.3s ease;
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
    
    .main-content {
        margin-left: 0 !important;
        padding-top: 80px; /* Buton için boşluk */
    }
    
    /* Sidebar açıkken toggle butonunu sidebar'ın üstünde göster */
    .sidebar.open ~ .menu-toggle {
        left: 240px;
        background: var(--accent-gradient);
    }
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
        <div class="menu-item active">
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
    <div class="profile-img" id="userAvatar">
        <?php echo $loggedIn ? strtoupper(substr($username, 0, 1)) : 'K'; ?>
    </div>
    <div class="profile-info">
        <h3 id="userName" data-i18n="user.guest">
            <?php echo $loggedIn ? htmlspecialchars($username) : 'Kullanıcı'; ?>
        </h3>
        <p id="userStatus" data-i18n="user.login">
            <?php echo $loggedIn ? 'Çevrimiçi' : 'Giriş Yap'; ?>
        </p>
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
        <div class="search-bar glass-effect">
            <input type="text" id="searchInput" placeholder="Uygulama ara..." data-i18n-placeholder="search.placeholder" class="premium-input">
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
            <button id="loginBtn" class="premium-btn" data-i18n="auth.login">
                <?php echo $loggedIn ? 'Çıkış Yap' : 'Giriş Yap'; ?>
            </button>
        </div>
    </div>

    <h2 class="page-title" id="pageTitle" data-i18n="apps.title">Tüm Uygulamalar</h2>
    
    <div class="categories" id="categories">
        <div class="category active premium-btn" data-category="all" data-i18n="categories.all">Tümü</div>
        <div class="category premium-btn" data-category="oyun" data-i18n="categories.games">Oyun</div>
        <div class="category premium-btn" data-category="multimedya" data-i18n="categories.multimedia">Multimedya</div>
        <div class="category premium-btn" data-category="sistem" data-i18n="categories.system">Sistem</div>
        <div class="category premium-btn" data-category="güvenlik" data-i18n="categories.security">Güvenlik</div>
        <div class="category premium-btn" data-category="alışveriş" data-i18n="categories.shopping">Alışveriş</div>
                <div class="category premium-btn" data-category="internet" data-i18n="categories.internet">İnternet</div>
    </div>

    <div class="apps-grid" id="appsGrid"></div>
</div>

<!-- GİRİŞ MODALI -->
<div class="modal" id="loginModal">
    <div class="modal-content glass-card">
        <div class="modal-header">
            <h2 data-i18n="auth.login">Giriş Yap</h2>
            <button class="close-modal">&times;</button>
        </div>
        <form id="loginForm" action="login.php" method="POST">
            <div class="form-group">
                <label for="username" data-i18n="auth.username">Kullanıcı Adı veya E-posta</label>
                <input type="text" id="username" name="username" required class="premium-input">
            </div>
            <div class="form-group">
                <label for="password" data-i18n="auth.password">Şifre</label>
                <input type="password" id="password" name="password" required class="premium-input">
            </div>
            <button type="submit" class="login-btn premium-btn">
                <span class="button-text" data-i18n="auth.login">Giriş Yap</span>
                <span class="loading-spinner"></span>
            </button>
        </form>
        <div class="register-link">
            <span data-i18n="auth.noAccount">Hesabınız yok mu?</span> 
            <a href="register.php" data-i18n="auth.register">Kayıt Ol</a>
        </div>
    </div>
</div>

<!-- UYGULAMA DETAY MODALI -->
<div class="modal" id="appDetailModal">
    <div class="modal-content glass-card">
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
    <div class="download-modal-content glass-card">
        <div class="download-modal-header">
            <h2 id="downloadModalTitle" data-i18n="download.page">İndirme Sayfası</h2>
            <button class="close-modal">&times;</button>
        </div>
        <div class="download-info" id="downloadInfo">
            <p>
                <span class="download-loading-spinner"></span>
                <span class="download-loading-text" data-i18n="download.loading">İndirme sayfası yükleniyor...</span>
            </p>
        </div>
        <div class="download-frame-container">
            <iframe id="downloadFrame" class="download-frame" src="about:blank"></iframe>
        </div>
    </div>
</div>

<script>
// Profile gitme fonksiyonu
function goToProfile() {
    window.location.href = 'profile.php';
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

// checkLoginStatus fonksiyonunu güncelle
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

// === URL PARAMETRELERİNİ OKUMA ===
function getUrlParams() {
    const params = new URLSearchParams(window.location.search);
    const category = params.get('category');
    return { category };
}

// Kategori filtresini URL'den alınan kategoriye göre ayarla
function setActiveCategoryFromUrl() {
    const { category } = getUrlParams();
    
    if (category) {
        // Tüm kategorileri temizle
        categories.forEach(cat => cat.classList.remove('active'));
        
        // URL'den gelen kategoriyi aktif yap
        const targetCategory = document.querySelector(`.category[data-category="${category}"]`);
        if (targetCategory) {
            targetCategory.classList.add('active');
            
            // Sayfa başlığını güncelle
            updatePageTitle(category);
            
            // Hemen filtreleme yap
            setTimeout(() => {
                filterApps();
            }, 100);
        }
    }
}

// Sayfa başlığını güncelleme fonksiyonu
function updatePageTitle(category) {
    const pageTitle = document.getElementById('pageTitle');
    const targetCategory = document.querySelector(`.category[data-category="${category}"]`);
    
    if (targetCategory) {
        const categoryText = targetCategory.textContent;
        pageTitle.textContent = `${categoryText} Uygulamaları`;
    }
}
// === OLAY YÖNETİCİLERİ ===
function setupEvents() {
    // Menu toggle (mobil için)
    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        menuToggle.classList.toggle('active');
        
        // Buton ikonunu değiştir
        if (sidebar.classList.contains('open')) {
            menuToggle.innerHTML = '✕';
        } else {
            menuToggle.innerHTML = '☰';
        }
    });

// Sidebar toggle (küçültme) - sadece masaüstünde
sidebarToggle.addEventListener('click', () => {
    // Sadece masaüstünde çalışsın
    if (window.innerWidth > 768) {
        sidebar.classList.toggle('collapsed');
    }
});

// Pencere boyutu değişikliği handler'ı
function handleResize() {
    if (window.innerWidth <= 768) {
        menuToggle.style.display = 'flex';
        // Mobilde sidebar-toggle'ı gizle
        sidebarToggle.style.display = 'none';
        // Mobilde sidebar kapalı olsun
        if (!sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            menuToggle.classList.remove('active');
            menuToggle.innerHTML = '☰';
            document.body.style.overflow = '';
        }
    } else {
        menuToggle.style.display = 'none';
        // Masaüstünde sidebar-toggle'ı göster
        sidebarToggle.style.display = 'block';
        // Masaüstünde sidebar her zaman açık ve normal pozisyonda
        sidebar.classList.remove('open');
        sidebar.style.transform = 'translateX(0)';
        document.body.style.overflow = '';
    }
}

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
            // Modal kapatıldığında yükleme durumunu sıfırla
            resetDownloadLoadingState();
        });
    });

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
                    window.location.href = 'logout.php';
                }
            })
            .catch(error => {
                console.error('Ban kontrol hatası:', error);
            });
    });

    loginForm.addEventListener('submit', e => {
        e.preventDefault();
        
        // Giriş butonuna yükleniyor efekti ekle
        const loginButton = loginForm.querySelector('.login-btn');
        loginButton.classList.add('loading');
        
        fetch('sistem/check_ban.php')
            .then(response => response.json())
            .then(data => {
                if (data.banned) {
                    showBanMessage(data.remaining_time);
                    loginButton.classList.remove('loading');
                    showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! Giriş yapamazsınız.', 'error');
                    return;
                }
                
                handleLogin(loginButton);
            })
            .catch(error => {
                console.error('Ban kontrol hatası:', error);
                loginButton.classList.remove('loading');
            });
    });

    searchInput.addEventListener('input', filterApps);

    categories.forEach(category => {
        category.addEventListener('click', () => {
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        return;
                    }
                    
                    categories.forEach(c => c.classList.remove('active'));
                    category.classList.add('active');
                    
                    // URL'yi güncelle (geri/ileri butonları için)
                    const categoryName = category.getAttribute('data-category');
                    const url = new URL(window.location);
                    if (categoryName === 'all') {
                        url.searchParams.delete('category');
                    } else {
                        url.searchParams.set('category', categoryName);
                    }
                    window.history.pushState({}, '', url);
                    
                    // Sayfa başlığını güncelle
                    updatePageTitle(categoryName);
                    
                    filterApps();
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        });
    });

    window.addEventListener('click', (e) => {
        if (e.target === loginModal) loginModal.style.display = 'none';
        if (e.target === appDetailModal) appDetailModal.style.display = 'none';
        if (e.target === downloadModal) {
            downloadModal.style.display = 'none';
            downloadFrame.src = 'about:blank';
            // Modal kapatıldığında yükleme durumunu sıfırla
            resetDownloadLoadingState();
        }
        
        // Mobilde sidebar dışına tıklayınca kapat
        if (window.innerWidth <= 768 && 
            !sidebar.contains(e.target) && 
            !menuToggle.contains(e.target) &&
            sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            menuToggle.classList.remove('active');
            menuToggle.innerHTML = '☰';
        }
    });
    
    // Pencere boyutu değiştiğinde
    window.addEventListener('resize', handleResize);
    
    // Sayfa yüklendiğinde pencere boyutunu kontrol et
    handleResize();
}

// Pencere boyutu değişikliği handler'ı
function handleResize() {
    if (window.innerWidth <= 768) {
        menuToggle.style.display = 'flex';
        // Mobilde sidebar kapalı olsun
        if (!sidebar.classList.contains('open')) {
            sidebar.classList.remove('open');
            menuToggle.classList.remove('active');
            menuToggle.innerHTML = '☰';
        }
    } else {
        menuToggle.style.display = 'none';
        // Masaüstünde sidebar her zaman açık
        sidebar.classList.remove('open');
        sidebar.style.transform = 'translateX(0)';
    }
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
        
        // Arama
        "search.placeholder": "Uygulama ara...",
        
        // Uygulamalar Sayfası
        "apps.title": "Tüm Uygulamalar",
        
        // Kategoriler
        "categories.all": "Tümü",
        "categories.games": "Oyun",
        "categories.multimedia": "Multimedya",
        "categories.system": "Sistem",
        "categories.security": "Güvenlik",
        "categories.shopping": "Alışveriş",
        
        // Uygulama Detayları
        "app.developer": "Geliştirici",
        "app.category": "Kategori",
        "app.rating": "Puan",
        "app.downloads": "İndirme",
        "app.description": "Açıklama",
        "app.noDescription": "Açıklama bulunmuyor.",
        "app.noScreenshots": "Ekran görüntüsü bulunmuyor",
        "app.download": "İndir",
        "app.downloadButton": "Detaylar",
        
        // İndirme
        "download.page": "İndirme Sayfası",
        "download.loading": "İndirme sayfası yükleniyor...",
        "download.loaded": "İndirme sayfası yüklendi!",
        
        // Alert Mesajları
        "alert.loginSuccess": "Giriş başarılı!",
        "alert.logoutSuccess": "Çıkış yapıldı!",
        "alert.loginError": "Giriş sırasında hata oluştu!",
        "alert.logoutError": "Çıkış sırasında hata oluştu!",
        "alert.downloadLogin": "İndirmek için giriş yapmalısınız!",
        "alert.banDownload": "IP adresiniz banlandı! İndirme yapamazsınız.",
        "alert.noDownloadLink": "İndirme linki bulunamadı!",
        "alert.downloadStarting": " indirme sayfası açılıyor...",
        "alert.appsLoadError": "Uygulamalar yüklenemedi, Sayfayı yenileyin",
        "alert.appDetailsBanned": "IP adresiniz banlandı! Uygulama detaylarını görüntüleyemezsiniz.",
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
        "menu.categories": "Kategoriler",
        "category.games": "Oyunlar",
        "category.system": "Sistem Araçları",
        "category.media": "Multimedya",
        "category.security": "Güvenlik",
        "category.internet": "İnternet"
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
        "search.placeholder": "Search apps...",
        "apps.title": "All Apps",
        "categories.all": "All",
        "categories.games": "Games",
        "categories.multimedia": "Multimedia",
        "categories.system": "System",
        "categories.security": "Security",
        "categories.shopping": "Shopping",
        "app.developer": "Developer",
        "app.category": "Category",
        "app.rating": "Rating",
        "app.downloads": "Downloads",
        "app.description": "Description",
        "app.noDescription": "No description available.",
        "app.noScreenshots": "No screenshots available",
        "app.download": "Download",
        "app.downloadButton": "Details",
        "download.page": "Download Page",
        "download.loading": "Download page loading...",
        "download.loaded": "Download page loaded!",
        "alert.loginSuccess": "Login successful!",
        "alert.logoutSuccess": "Logged out successfully!",
        "alert.loginError": "Login error occurred!",
        "alert.logoutError": "Logout error occurred!",
        "alert.downloadLogin": "You must login to download!",
        "alert.banDownload": "Your IP is banned! Cannot download.",
        "alert.noDownloadLink": "Download link not found!",
        "alert.downloadStarting": " download page opening...",
        "alert.appsLoadError": "Failed to load apps",
        "alert.appDetailsBanned": "Your IP is banned! Cannot view app details.",
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
const loginBtn = document.getElementById('loginBtn');
const loginModal = document.getElementById('loginModal');
const loginForm = document.getElementById('loginForm');
const closeModals = document.querySelectorAll('.close-modal');
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');
const menuToggle = document.getElementById('menuToggle');
const sidebarToggle = document.getElementById('sidebarToggle');
const appsGrid = document.getElementById('appsGrid');
const searchInput = document.getElementById('searchInput');
const categories = document.querySelectorAll('.category');
const appDetailModal = document.getElementById('appDetailModal');
const appDetailTitle = document.getElementById('appDetailTitle');
const appDetailContent = document.getElementById('appDetailContent');
const downloadModal = document.getElementById('downloadModal');
const downloadFrame = document.getElementById('downloadFrame');
const downloadModalTitle = document.getElementById('downloadModalTitle');
const banMessage = document.getElementById('banMessage');
const autoRefreshNotice = document.getElementById('autoRefreshNotice');
const languageBtn = document.getElementById('languageBtn');
const languageDropdown = document.getElementById('languageDropdown');
const currentLanguage = document.getElementById('currentLanguage');
const downloadInfo = document.getElementById('downloadInfo');
const darkModeToggle = document.getElementById('darkModeToggle');

// === DEĞİŞKENLER ===
let allApps = [];
let currentApp = null;
let currentLang = 'tr';

// === SAYFA YÜKLENDİĞİNDE ===
document.addEventListener('DOMContentLoaded', function() {
    initializeLanguage();
    checkLoginStatus();
    setupEvents(); 
    loadApps(); 
    loadDarkMode();
    checkBanStatus();
    initModernDesign();
    setupCategoriesMenu();
    
    setInterval(() => {
        if (!banCountdownInterval) {
            checkBanStatus();
        }
    }, 30000);
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
    
    // Sidebar'a glass effect ekle
    sidebar.classList.add('glass-effect');
    
    // Modal'lara modern stil ekle
    document.querySelectorAll('.modal-content').forEach(modal => {
        modal.classList.add('glass-card');
    });
}

// Skeleton loader oluşturma
function createSkeletonLoaders() {
    const appsGrid = document.getElementById('appsGrid');
    
    if (appsGrid) {
        // Uygulamalar için skeleton
        for (let i = 0; i < 8; i++) {
            const skeletonCard = document.createElement('div');
            skeletonCard.className = 'app-item skeleton-loader skeleton-card';
            appsGrid.appendChild(skeletonCard);
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

function updateLanguage(lang) {
    currentLang = lang;
    localStorage.setItem('preferredLanguage', lang);
    
    const currentOption = document.querySelector(`.language-option[data-lang="${lang}"]`);
    const flag = currentOption.querySelector('.language-flag').textContent;
    const langCode = lang.toUpperCase();
    
    currentLanguage.textContent = langCode;
    languageBtn.querySelector('.language-flag').textContent = flag;
    
    document.querySelectorAll('.language-option').forEach(option => {
        option.classList.remove('active');
        if (option.dataset.lang === lang) {
            option.classList.add('active');
        }
    });
    
    translatePage();
    document.documentElement.lang = lang;
    document.body.dir = 'ltr';
}

function translatePage() {
    document.querySelectorAll('[data-i18n]').forEach(element => {
        const key = element.getAttribute('data-i18n');
        if (translations[currentLang] && translations[currentLang][key]) {
            element.textContent = translations[currentLang][key];
        }
    });
    
    document.querySelectorAll('[data-i18n-placeholder]').forEach(element => {
        const key = element.getAttribute('data-i18n-placeholder');
        if (translations[currentLang] && translations[currentLang][key]) {
            element.placeholder = translations[currentLang][key];
        }
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
    const searchInput = document.getElementById('searchInput');
    const categories = document.querySelectorAll('.category');
    
    loginBtn.disabled = true;
    loginBtn.style.opacity = '0.6';
    loginBtn.style.cursor = 'not-allowed';
    
    searchInput.disabled = true;
    searchInput.placeholder = translations[currentLang]['ban.title'] || 'IP adresiniz banlandı...';
    categories.forEach(category => {
        category.style.pointerEvents = 'none';
        category.style.opacity = '0.6';
    });
    
    mainContent.classList.add('form-disabled');
    
    banMessage.style.display = 'block';
    autoRefreshNotice.style.display = 'block';

    startBanCountdown(remainingTime);
}

function hideBanMessage() {
    const loginBtn = document.getElementById('loginBtn');
    const searchInput = document.getElementById('searchInput');
    const categories = document.querySelectorAll('.category');
    
    loginBtn.disabled = false;
    loginBtn.style.opacity = '1';
    loginBtn.style.cursor = 'pointer';
    
    searchInput.disabled = false;
    searchInput.placeholder = translations[currentLang]['search.placeholder'] || 'Uygulama ara...';
    categories.forEach(category => {
        category.style.pointerEvents = 'auto';
        category.style.opacity = '1';
    });
    
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
function setupEvents() {
    // Menu toggle (mobil için)
    menuToggle.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        mainContent.classList.toggle('expanded');
    });

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
            appDetailModal.style.display = 'none';
            downloadModal.style.display = 'none';
            downloadFrame.src = 'about:blank';
            // Modal kapatıldığında yükleme durumunu sıfırla
            resetDownloadLoadingState();
        });
    });

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
                    window.location.href = 'logout.php';
                }
            })
            .catch(error => {
                console.error('Ban kontrol hatası:', error);
            });
    });

    loginForm.addEventListener('submit', e => {
        e.preventDefault();
        
        // Giriş butonuna yükleniyor efekti ekle
        const loginButton = loginForm.querySelector('.login-btn');
        loginButton.classList.add('loading');
        
        fetch('sistem/check_ban.php')
            .then(response => response.json())
            .then(data => {
                if (data.banned) {
                    showBanMessage(data.remaining_time);
                    loginButton.classList.remove('loading');
                    showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! Giriş yapamazsınız.', 'error');
                    return;
                }
                
                handleLogin(loginButton);
            })
            .catch(error => {
                console.error('Ban kontrol hatası:', error);
                loginButton.classList.remove('loading');
            });
    });

    searchInput.addEventListener('input', filterApps);

    categories.forEach(category => {
        category.addEventListener('click', () => {
            fetch('sistem/check_ban.php')
                .then(response => response.json())
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        return;
                    }
                    
                    categories.forEach(c => c.classList.remove('active'));
                    category.classList.add('active');
                    
                    // URL'yi güncelle (geri/ileri butonları için)
                    const categoryName = category.getAttribute('data-category');
                    const url = new URL(window.location);
                    if (categoryName === 'all') {
                        url.searchParams.delete('category');
                    } else {
                        url.searchParams.set('category', categoryName);
                    }
                    window.history.pushState({}, '', url);
                    
                    // Sayfa başlığını güncelle
                    updatePageTitle(categoryName);
                    
                    filterApps();
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                });
        });
    });

    window.addEventListener('click', (e) => {
        if (e.target === loginModal) loginModal.style.display = 'none';
        if (e.target === appDetailModal) appDetailModal.style.display = 'none';
        if (e.target === downloadModal) {
            downloadModal.style.display = 'none';
            downloadFrame.src = 'about:blank';
            // Modal kapatıldığında yükleme durumunu sıfırla
            resetDownloadLoadingState();
        }
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

// === GİRİŞ SİSTEMİ ===
function checkLoginStatus() {
    fetch('check_login.php')
        .then(r => r.json())
        .then(d => {
            if (d.loggedIn) updateLoginState(true, d.username);
        });
}

function handleLogin(loginButton) {
    const formData = new FormData(loginForm);
    fetch('login.php', {method:'POST', body:formData})
    .then(r => r.json())
    .then(d => {
        loginButton.classList.remove('loading');
        
        if(d.success) {
            showAlert(translations[currentLang]['alert.loginSuccess'] || 'Giriş başarılı!','success');
            updateLoginState(true,d.username);
            loginModal.style.display='none';
            loadApps();
        } else {
            showAlert(d.message,'error');
        }
    })
    .catch(error => {
        loginButton.classList.remove('loading');
        showAlert(translations[currentLang]['alert.loginError'] || 'Giriş sırasında hata oluştu!', 'error');
    });
}

function updateLoginState(loggedIn, username='') {
    const profileInfo = document.querySelector('.profile-info');
    const profileImg = document.querySelector('.profile-img');
    
    if(loggedIn){
        profileInfo.querySelector('h3').textContent = username;
        profileInfo.querySelector('p').textContent = translations[currentLang]['user.online'] || 'Çevrimiçi';
        loginBtn.textContent = translations[currentLang]['auth.logout'] || 'Çıkış Yap';
        profileImg.textContent = username.charAt(0).toUpperCase();
    }else{
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

// === UYGULAMA YÖNETİMİ ===
function loadApps() {
    fetch('uygulamalar/apps.json')
        .then(response => response.json())
        .then(data => {
            allApps = data.apps;
            displayApps(allApps);
            
            // Apps yüklendikten sonra URL'den kategoriyi kontrol et
            setActiveCategoryFromUrl();
        })
        .catch(error => {
            console.error('Uygulamalar yüklenirken hata:', error);
            showAlert(translations[currentLang]['alert.appsLoadError'] || 'Uygulamalar yüklenirken hata oluştu','error');
        });
}

function displayApps(apps) {
    // Skeleton loader'ları kaldır
    removeSkeletonLoaders();
    
    appsGrid.innerHTML='';
    
    if (!apps || apps.length === 0) {
        showNoResultsMessage(true);
        return;
    }
    
    apps.forEach(app => {
        const appCard = document.createElement('div');
        appCard.className='app-item scale-in-animation';
        appCard.setAttribute('data-category', app.category || 'all');
        appCard.setAttribute('data-name', app.name.toLowerCase());

        const downloadUrl = app.drive_link || app.download_url || '';
        
        appCard.innerHTML=`
            <div class="app-icon">
                <div class="app-category gradient-badge">${app.category || 'Genel'}</div>
                ${app.logo ? `<img src="${app.logo}" alt="${app.name}" onerror="this.style.display='none'; this.parentNode.innerHTML='${app.name.substring(0,2)}'">` : app.name.substring(0,2)}
            </div>
            <div class="app-details">
                <h3>${app.name}</h3>
                <p>${app.developer || 'Harika bir uygulama'}</p>
                <div class="app-meta">
                    <div class="rating">${'★'.repeat(app.rating || 5)}</div>
                    <div class="download-count">📥 ${app.downloads || '0'}</div>
                </div>
                <button class="details-btn premium-btn">
                    <span class="button-text">${translations[currentLang]['app.downloadButton'] || 'Detaylar'}</span>
                    <span class="loading-spinner"></span>
                </button>
            </div>
        `;
        
        const detailsBtn = appCard.querySelector('.details-btn');
        detailsBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            
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
        
        appsGrid.appendChild(appCard);
    });
    
    // Apps yüklendikten sonra filtreleme yap
    setTimeout(() => {
        filterApps();
    }, 300);
}

function filterApps() {
    const searchTerm = searchInput.value.toLowerCase();
    const activeCategory = document.querySelector('.category.active').getAttribute('data-category');
    const appItems = document.querySelectorAll('.app-item');

    let visibleCount = 0;

    appItems.forEach(item => {
        const appName = item.getAttribute('data-name');
        const appCategory = item.getAttribute('data-category');
        const matchesSearch = appName.includes(searchTerm);
        const matchesCategory = activeCategory === 'all' || appCategory === activeCategory;

        if (matchesSearch && matchesCategory) {
            item.style.display = 'block';
            visibleCount++;
            
            // Gecikmeli animasyon için
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, visibleCount * 50);
        } else {
            item.style.display = 'none';
            item.style.opacity = '0';
            item.style.transform = 'translateY(20px)';
        }
    });

    // Eğer hiç uygulama yoksa mesaj göster
    showNoResultsMessage(visibleCount === 0);
}

// Sonuç yoksa mesaj göster
function showNoResultsMessage(show) {
    let message = document.getElementById('noResultsMessage');
    
    if (show && !message) {
        message = document.createElement('div');
        message.id = 'noResultsMessage';
        message.style.cssText = `
            text-align: center;
            padding: 60px 20px;
            color: #666;
            font-size: 18px;
            grid-column: 1 / -1;
        `;
        message.innerHTML = `
            <div style="font-size: 48px; margin-bottom: 20px;">🔍</div>
            <h3>${translations[currentLang]?.['search.noResults'] || 'Uygulama bulunamadı'}</h3>
            <p>${translations[currentLang]?.['search.tryDifferent'] || 'Farklı bir kategori veya arama terimi deneyin.'}</p>
        `;
        appsGrid.appendChild(message);
    } else if (!show && message) {
        message.remove();
    }
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
    ` : `<p style="text-align: center; color: #666; padding: 20px;">${translations[currentLang]['app.noScreenshots'] || 'Ekran görüntüsü bulunmuyor'}</p>`;
    
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
        <button class="download-action premium-btn" onclick="downloadCurrentApp()">
            <span class="button-text">${translations[currentLang]['app.download'] || 'İndir'} - ${app.price || 'Ücretsiz'}</span>
            <span class="loading-spinner"></span>
        </button>
    `;
    
    appDetailModal.style.display = 'flex';
}

// === YENİ İNDİRME SİSTEMİ (POPUP İLE) ===
function downloadCurrentApp() {
    if (!currentApp) return;
    
    // Butonu yükleniyor durumuna getir
    const downloadBtn = document.querySelector('.download-action');
    downloadBtn.classList.add('loading');
    
    fetch('sistem/check_ban.php')
        .then(response => response.json())
        .then(banData => {
            if (banData.banned) {
                showBanMessage(banData.remaining_time);
                downloadBtn.classList.remove('loading');
                showAlert(translations[currentLang]['alert.banDownload'] || 'IP adresiniz banlandı! İndirme yapamazsınız.', 'error');
                return;
            }
            
            fetch('check_login.php')
                .then(r => r.json())
                .then(loginData => {
                    if (!loginData.loggedIn) {
                        downloadBtn.classList.remove('loading');
                        showAlert(translations[currentLang]['alert.downloadLogin'] || 'İndirmek için giriş yapmalısınız!', 'warning');
                        appDetailModal.style.display = 'none';
                        loginModal.style.display = 'flex';
                        return;
                    }

                    // 1.5 saniye yükleniyor efekti göster
                    setTimeout(() => {
                        showDownloadPopup(currentApp);
                        downloadBtn.classList.remove('loading');
                    }, 1500);
                    
                })
                .catch(error => {
                    console.error('Login check error:', error);
                    downloadBtn.classList.remove('loading');
                    showAlert(translations[currentLang]['alert.loginError'] || 'Giriş kontrolü sırasında hata oluştu!', 'error');
                });
        })
        .catch(error => {
            console.error('Ban kontrol hatası:', error);
            downloadBtn.classList.remove('loading');
        });
}

function showDownloadPopup(app) {
    if (!app || !app.drive_link) {
        showAlert(translations[currentLang]['alert.noDownloadLink'] || 'İndirme linki bulunamadı!', 'error');
        return;
    }
    
    downloadModalTitle.textContent = `${app.name} - ${translations[currentLang]['download.page'] || 'İndirme Sayfası'}`;
    
    const driveUrl = app.drive_link.includes('?') ? 
        `${app.drive_link}&theme=light` : 
        `${app.drive_link}?theme=light`;
    
    // Yükleme durumunu sıfırla
    resetDownloadLoadingState();
    
    // Iframe yükleme event'ini dinle
    downloadFrame.onload = function() {
        // Iframe yüklendiğinde yükleme animasyonunu durdur
        markDownloadAsLoaded();
    };
    
    downloadFrame.onerror = function() {
        // Hata durumunda da yükleme durumunu güncelle
        markDownloadAsLoaded();
    };
    
    downloadFrame.src = driveUrl;
    
    appDetailModal.style.display = 'none';
    downloadModal.style.display = 'flex';
    
    addToLocalDownloads(app.id, app.name);
    
    showAlert(`📥 ${app.name} ${translations[currentLang]['alert.downloadStarting'] || 'indirme sayfası açılıyor...'}`, 'info');
    
    // 10 saniye sonra otomatik olarak yüklendi olarak işaretle (güvenlik önlemi)
    setTimeout(() => {
        if (downloadModal.style.display === 'flex') {
            markDownloadAsLoaded();
        }
    }, 10000);
}

// Yükleme durumunu sıfırla
function resetDownloadLoadingState() {
    if (downloadInfo) {
        downloadInfo.classList.remove('loaded');
        const loadingText = downloadInfo.querySelector('.download-loading-text');
        if (loadingText) {
            loadingText.textContent = translations[currentLang]['download.loading'] || 'İndirme sayfası yükleniyor...';
        }
    }
}

// İndirme sayfası yüklendi olarak işaretle
function markDownloadAsLoaded() {
    if (downloadInfo) {
        downloadInfo.classList.add('loaded');
        const loadingText = downloadInfo.querySelector('.download-loading-text');
        if (loadingText) {
            loadingText.textContent = translations[currentLang]['download.loaded'] || 'İndirme sayfası yüklendi!';
        }
    }
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
        console.log('LocalStorage\'a kaydedildi:', newDownload);
        
    } catch (error) {
        console.error('LocalStorage error:', error);
    }
}

// Dark mode event listener
darkModeToggle.addEventListener('click', function(e) {
    e.stopPropagation();
    toggleDarkMode();
});

// Profile bölümüne tıklama olayını ayrıca ekleyin:
profileSection.addEventListener('click', function(e) {
    // Eğer tıklanan eleman dark mode butonu değilse profile git
    if (!e.target.closest('.dark-mode-btn')) {
        goToProfile();
    }
});
</script>
</body>
</html>