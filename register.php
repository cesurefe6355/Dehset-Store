<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

// Veritabanı bağlantısı için config dosyası
include 'config.php';

// Hata mesajı gösterme fonksiyonu
function showError($message) {
    echo "<script>showError('" . addslashes($message) . "');</script>";
}

// Başarı mesajı gösterme fonksiyonu
function showSuccess($message) {
    echo "<script>showSuccess('" . addslashes($message) . "');</script>";
}

// Form gönderildi mi kontrol et
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Form verilerini al
    $user_username = trim($_POST['username'] ?? '');
    $user_password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    
    // Validasyonlar
    $errors = [];
    
    if (empty($user_username)) {
        $errors[] = 'Kullanıcı adı gereklidir.';
    } elseif (strlen($user_username) < 3 || strlen($user_username) > 20) {
        $errors[] = 'Kullanıcı adı 3-20 karakter arasında olmalıdır.';
    }
    
    if (empty($user_password)) {
        $errors[] = 'Şifre gereklidir.';
    } elseif (strlen($user_password) < 6) {
        $errors[] = 'Şifre en az 6 karakter olmalıdır.';
    }
    
    if ($user_password !== $confirm_password) {
        $errors[] = 'Şifreler eşleşmiyor.';
    }
    
    // Eğer hata yoksa veritabanı işlemlerini yap
    if (empty($errors)) {
        try {
            // VERİTABANINA BAĞLAN
            $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("SET NAMES 'utf8'");
            
            // Kullanıcı adı kontrolü
            $check_sql = "SELECT id FROM users WHERE username = :username";
            $check_stmt = $pdo->prepare($check_sql);
            $check_stmt->bindParam(':username', $user_username, PDO::PARAM_STR);
            $check_stmt->execute();
            
            if ($check_stmt->rowCount() > 0) {
                $errors[] = 'Bu kullanıcı adı zaten alınmış.';
            } else {
                // Yeni kullanıcıyı VERİTABANINA kaydet
                $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
                $insert_sql = "INSERT INTO users (username, password, created_at) VALUES (:username, :password, NOW())";
                $insert_stmt = $pdo->prepare($insert_sql);
                $insert_stmt->bindParam(':username', $user_username, PDO::PARAM_STR);
                $insert_stmt->bindParam(':password', $hashed_password, PDO::PARAM_STR);
                
                if ($insert_stmt->execute()) {
                    $success_message = 'Kayıt başarılı! Giriş sayfasına yönlendiriliyorsunuz.';
                    // JavaScript ile yönlendirme yapılacak
                } else {
                    $errors[] = 'Kayıt sırasında bir hata oluştu.';
                }
            }
            
        } catch(PDOException $e) {
            $errors[] = 'Veritabanı hatası: ' . $e->getMessage();
        }
    }
    
    // Eğer hatalar varsa, JavaScript fonksiyonu çağır
    if (!empty($errors)) {
        echo "<script>showError('" . addslashes(implode('<br>', $errors)) . "');</script>";
    }
    
    // Eğer başarılıysa, JavaScript fonksiyonu çağır
    if (isset($success_message)) {
        echo "<script>showSuccess('" . addslashes($success_message) . "'); 
              setTimeout(function() { window.location.href = 'index.php'; }, 2000);</script>";
    }
}
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

    <title>Kayıt Ol - Dehset Store</title>
    <link rel="icon" href="images/logo.png" type="image/png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            overflow-x: hidden;
        }

        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        /* Roket animasyon stilleri */
        .rocket {
            position: absolute;
            font-size: 2rem;
            user-select: none;
            pointer-events: none;
            z-index: 1;
            filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.5));
            animation: rocketFly linear infinite;
        }

        @keyframes rocketFly {
            0% {
                transform: translateX(-100px) translateY(0) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateX(calc(100vw + 100px)) translateY(calc(100vh - 100px)) rotate(360deg);
                opacity: 0;
            }
        }

        .rocket.small {
            font-size: 1.5rem;
            animation-duration: 8s;
        }

        .rocket.medium {
            font-size: 2rem;
            animation-duration: 12s;
        }

        .rocket.large {
            font-size: 2.5rem;
            animation-duration: 15s;
        }

        .rocket.diagonal-up {
            animation-name: rocketDiagonalUp;
        }

        @keyframes rocketDiagonalUp {
            0% {
                transform: translateX(-100px) translateY(100vh) rotate(-45deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateX(calc(100vw + 100px)) translateY(-100px) rotate(315deg);
                opacity: 0;
            }
        }

        .rocket.diagonal-down {
            animation-name: rocketDiagonalDown;
        }

        @keyframes rocketDiagonalDown {
            0% {
                transform: translateX(-100px) translateY(-100px) rotate(45deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateX(calc(100vw + 100px)) translateY(calc(100vh + 100px)) rotate(405deg);
                opacity: 0;
            }
        }

        .rocket.vertical {
            animation-name: rocketVertical;
        }

        @keyframes rocketVertical {
            0% {
                transform: translateX(50vw) translateY(-100px) rotate(90deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateX(50vw) translateY(calc(100vh + 100px)) rotate(90deg);
                opacity: 0;
            }
        }

        .rocket.horizontal {
            animation-name: rocketHorizontal;
        }

        @keyframes rocketHorizontal {
            0% {
                transform: translateX(-100px) translateY(50vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateX(calc(100vw + 100px)) translateY(50vh) rotate(0deg);
                opacity: 0;
            }
        }

        .rocket.zigzag {
            animation-name: rocketZigzag;
        }

        @keyframes rocketZigzag {
            0% {
                transform: translateX(-100px) translateY(20vh) rotate(0deg);
                opacity: 0;
            }
            20% {
                transform: translateX(25vw) translateY(10vh) rotate(-30deg);
                opacity: 1;
            }
            40% {
                transform: translateX(50vw) translateY(30vh) rotate(30deg);
            }
            60% {
                transform: translateX(75vw) translateY(15vh) rotate(-30deg);
            }
            80% {
                transform: translateX(90vw) translateY(25vh) rotate(30deg);
            }
            100% {
                transform: translateX(calc(100vw + 100px)) translateY(40vh) rotate(0deg);
                opacity: 0;
            }
        }

        .rocket.spiral {
            animation-name: rocketSpiral;
        }

        @keyframes rocketSpiral {
            0% {
                transform: translateX(50vw) translateY(50vh) scale(0.5) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            25% {
                transform: translateX(70vw) translateY(30vh) scale(0.8) rotate(90deg);
            }
            50% {
                transform: translateX(30vw) translateY(70vh) scale(1.2) rotate(180deg);
            }
            75% {
                transform: translateX(80vw) translateY(80vh) scale(1.5) rotate(270deg);
            }
            100% {
                transform: translateX(10vw) translateY(10vh) scale(2) rotate(360deg);
                opacity: 0;
            }
        }

        .register-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.8s ease;
            position: relative;
            z-index: 2;
        }

        .register-container.loaded {
            transform: translateY(0);
            opacity: 1;
        }

        .logo {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #667eea;
            display: inline-block;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        h2 {
            color: #333;
            margin-bottom: 30px;
            font-size: 1.8rem;
            position: relative;
            display: inline-block;
        }

        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            border-radius: 3px;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
            position: relative;
            transform: translateX(-20px);
            opacity: 0;
            transition: all 0.5s ease;
        }

        .form-group.visible {
            transform: translateX(0);
            opacity: 1;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8f9fa;
        }

        input[type="text"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: scale(1.02);
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 40px;
            font-size: 1.2rem;
            color: #667eea;
            transition: all 0.3s ease;
        }

        input:focus + .input-icon {
            transform: scale(1.2);
            color: #764ba2;
        }

        .security-code-container {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            margin-bottom: 20px;
            transform: scale(0.9);
            transition: all 0.3s ease;
        }

        .security-code-container:hover {
            transform: scale(1);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .security-code {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 4px;
            color: #333;
            margin-bottom: 10px;
            user-select: none;
            background: linear-gradient(45deg, #667eea, #764ba2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            padding: 10px;
            border-radius: 8px;
            border: 2px dashed #667eea;
        }

        .security-input {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
            text-align: center;
            letter-spacing: 2px;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .security-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: scale(1.05);
        }

        .refresh-security {
            background: none;
            border: none;
            color: #667eea;
            cursor: pointer;
            font-size: 1.2rem;
            margin-left: 10px;
            transition: all 0.3s ease;
            padding: 5px;
            border-radius: 50%;
        }

        .refresh-security:hover {
            transform: rotate(90deg);
            color: #764ba2;
            background: rgba(102, 126, 234, 0.1);
        }

        .btn {
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn:disabled {
            background: #cccccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: 0.5s;
        }

        .btn:hover::before {
            left: 100%;
        }

        .login-link {
            margin-top: 25px;
            color: #666;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.5s ease 0.3s;
        }

        .login-link.visible {
            transform: translateY(0);
            opacity: 1;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
            position: relative;
        }

        .login-link a::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #764ba2;
            transition: width 0.3s ease;
        }

        .login-link a:hover {
            color: #764ba2;
        }

        .login-link a:hover::after {
            width: 100%;
        }

        .error-message {
            background: #ffebee;
            color: #c62828;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #c62828;
            text-align: left;
            animation: shake 0.5s ease;
            display: none;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }

        .success-message {
            background: #e8f5e8;
            color: #2e7d32;
            padding: 12px;
            border-radius: 10px;
            margin-bottom: 20px;
            border-left: 4px solid #2e7d32;
            text-align: left;
            animation: pulse 1.5s infinite;
            display: none;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .ban-message {
            background: #ffebee;
            color: #c62828;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px solid #c62828;
            display: none;
            animation: slideInFromBottom 0.5s ease-out;
        }

        .ban-message h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }

        .ban-message p {
            margin-bottom: 5px;
        }

        .ban-timer {
            font-size: 18px;
            font-weight: bold;
            color: #d32f2f;
            margin-top: 10px;
            animation: pulse 1s ease-in-out infinite;
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

        .form-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e0e0e0;
            color: #666;
            font-size: 0.9rem;
            transform: translateY(20px);
            opacity: 0;
            transition: all 0.5s ease 0.5s;
        }

        .form-footer.visible {
            transform: translateY(0);
            opacity: 1;
        }

        @media (max-width: 480px) {
            .register-container {
                padding: 30px 20px;
            }
            
            h2 {
                font-size: 1.5rem;
            }
            
            .logo {
                font-size: 2.5rem;
            }
            
            .security-code {
                font-size: 1.5rem;
                letter-spacing: 3px;
            }
            
            .rocket {
                font-size: 1.5rem;
            }
        }

        /* Loading animation */
        .loader {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin: 0 auto;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .btn.loading {
            pointer-events: none;
        }

        .btn.loading .btn-text {
            display: none;
        }

        .btn.loading .loader {
            display: block;
        }

        @keyframes slideInFromBottom {
            0% { transform: translateY(100%); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="particles-container" id="particles">
        <!-- Roketler buraya eklenecek -->
    </div>
    
    <div class="register-container" id="registerContainer">
        <div class="logo">🚀</div>
        <h2>Dehşet Store'a Katıl!</h2>
        
        <div class="error-message" id="errorMessage"></div>
        <div class="success-message" id="successMessage"></div>
        <div class="ban-message" id="banMessage"></div>

        <form id="registerForm" method="POST" action="">
            <div class="form-group" id="usernameGroup">
                <label for="username">Kullanıcı Adı</label>
                <input type="text" id="username" name="username" required placeholder="Kullanıcı adınızı girin" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>">
                <span class="input-icon">👤</span>
            </div>
            
            <div class="form-group" id="passwordGroup">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" required placeholder="Şifrenizi girin">
                <span class="input-icon">🔒</span>
            </div>

            <div class="form-group" id="confirmPasswordGroup">
                <label for="confirm_password">Şifre Tekrar</label>
                <input type="password" id="confirm_password" name="confirm_password" required placeholder="Şifrenizi tekrar girin">
                <span class="input-icon">🔒</span>
            </div>

            <div class="form-group" id="securityGroup">
                <label for="security_input">Güvenlik Kodu</label>
                <div class="security-code-container">
                    <div class="security-code" id="securityCode">ABCDEF</div>
                    <div style="display: flex; align-items: center;">
                        <input type="text" id="security_input" name="security_input" class="security-input" required 
                               placeholder="Yukarıdaki 6 haneli kodu girin" maxlength="6" autocomplete="off">
                        <button type="button" class="refresh-security" onclick="refreshSecurityCode()">🔄</button>
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn" id="submitBtn">
                <span class="btn-text">📝 Kayıt Ol</span>
                <div class="loader"></div>
            </button>
        </form>

        <div class="auto-refresh-notice" id="autoRefreshNotice">
            Ban süresi otomatik olarak güncelleniyor... Sayfayı yenilemenize gerek yok.
        </div>

        <div class="login-link" id="loginLink">
            Zaten hesabınız var mı? <a href="index.php">Giriş Yap</a>
        </div>

        <div class="form-footer" id="formFooter">
            🎉 Harika uygulamalar sizi bekliyor!
        </div>
    </div>

    <script>
        // 6 Haneli Güvenlik Kodu Oluşturma
        function generateSecurityCode() {
            const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
            let code = '';
            for (let i = 0; i < 6; i++) {
                code += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            return code;
        }

        // Global değişkenler
        let currentSecurityCode = generateSecurityCode();
        let banCountdownInterval = null;
        let isCurrentlyBanned = false;

        // Sayfa yüklendiğinde
        document.addEventListener('DOMContentLoaded', function() {
            // Security code'u göster
            document.getElementById('securityCode').textContent = currentSecurityCode;
            
            // Animasyonları başlat
            initAnimations();
            
            // Roket animasyonu oluştur
            createRocketAnimation();
            
            // Ban kontrolü yap
            checkBanStatus();
        });

        // Animasyonları başlat
        function initAnimations() {
            const registerContainer = document.getElementById('registerContainer');
            setTimeout(() => {
                registerContainer.classList.add('loaded');
            }, 100);
            
            // Form elemanları animasyonu
            const formGroups = document.querySelectorAll('.form-group');
            formGroups.forEach((group, index) => {
                setTimeout(() => {
                    group.classList.add('visible');
                }, 300 + (index * 150));
            });
            
            // Diğer elemanlar
            setTimeout(() => {
                document.getElementById('loginLink').classList.add('visible');
                document.getElementById('formFooter').classList.add('visible');
            }, 900);
        }

        // Roket animasyonu oluştur
        function createRocketAnimation() {
            const container = document.getElementById('particles');
            const rocketCount = 15; // Roket sayısı
            const rocketTypes = ['horizontal', 'diagonal-up', 'diagonal-down', 'vertical', 'zigzag', 'spiral'];
            
            for (let i = 0; i < rocketCount; i++) {
                const rocket = document.createElement('div');
                rocket.classList.add('rocket');
                rocket.textContent = '🚀';
                
                // Rastgele boyut
                const sizes = ['small', 'medium', 'large'];
                const size = sizes[Math.floor(Math.random() * sizes.length)];
                rocket.classList.add(size);
                
                // Rastgele animasyon tipi
                const rocketType = rocketTypes[Math.floor(Math.random() * rocketTypes.length)];
                rocket.classList.add(rocketType);
                
                // Rastgele gecikme
                const startDelay = Math.random() * 20;
                
                // Rastgele renk efekti (isteğe bağlı)
                const hueRotate = Math.random() * 360;
                
                rocket.style.animationDelay = `${startDelay}s`;
                rocket.style.filter = `drop-shadow(0 0 10px rgba(255, 255, 255, 0.5)) hue-rotate(${hueRotate}deg)`;
                
                container.appendChild(rocket);
            }
        }

        // Güvenlik kodu yenileme
        function refreshSecurityCode() {
            const securityContainer = document.querySelector('.security-code-container');
            securityContainer.style.transform = 'scale(0.9)';
            
            setTimeout(() => {
                currentSecurityCode = generateSecurityCode();
                document.getElementById('securityCode').textContent = currentSecurityCode;
                document.getElementById('security_input').value = '';
                securityContainer.style.transform = 'scale(1)';
            }, 300);
        }

        // Ban kontrolü fonksiyonu
        function checkBanStatus() {
            return fetch('sistem/check_ban.php')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.banned) {
                        showBanMessage(data.remaining_time);
                        isCurrentlyBanned = true;
                    } else {
                        hideBanMessage();
                        isCurrentlyBanned = false;
                    }
                    return data.banned;
                })
                .catch(error => {
                    console.error('Ban kontrol hatası:', error);
                    hideBanMessage();
                    isCurrentlyBanned = false;
                    return false;
                });
        }

        // Ban mesajını göster
        function showBanMessage(remainingTime) {
            const registerForm = document.getElementById('registerForm');
            const banMessage = document.getElementById('banMessage');
            const autoRefreshNotice = document.getElementById('autoRefreshNotice');
            const inputs = registerForm.querySelectorAll('input, button');
            
            inputs.forEach(input => {
                input.disabled = true;
            });

            banMessage.style.display = 'block';
            autoRefreshNotice.style.display = 'block';
            startBanCountdown(remainingTime);
        }

        // Ban mesajını gizle
        function hideBanMessage() {
            const registerForm = document.getElementById('registerForm');
            const banMessage = document.getElementById('banMessage');
            const autoRefreshNotice = document.getElementById('autoRefreshNotice');
            const inputs = registerForm.querySelectorAll('input, button');
            
            inputs.forEach(input => {
                input.disabled = false;
            });

            banMessage.style.display = 'none';
            autoRefreshNotice.style.display = 'none';

            if (banCountdownInterval) {
                clearInterval(banCountdownInterval);
                banCountdownInterval = null;
            }
        }

        // Ban geri sayımını başlat
        function startBanCountdown(remainingTime) {
            const banMessage = document.getElementById('banMessage');
            
            if (banCountdownInterval) {
                clearInterval(banCountdownInterval);
            }

            updateBanTimer(remainingTime);

            banCountdownInterval = setInterval(() => {
                remainingTime--;
                
                if (remainingTime <= 0) {
                    clearInterval(banCountdownInterval);
                    banCountdownInterval = null;
                    isCurrentlyBanned = false;
                    
                    setTimeout(() => {
                        location.reload();
                    }, 1000);
                } else {
                    updateBanTimer(remainingTime);
                }
            }, 1000);
        }

        // Ban timer'ını güncelle
        function updateBanTimer(remainingTime) {
            const banMessage = document.getElementById('banMessage');
            const hours = Math.floor(remainingTime / 3600);
            const minutes = Math.floor((remainingTime % 3600) / 60);
            const seconds = remainingTime % 60;

            banMessage.innerHTML = `
                <h3>🚫 Erişim Engellendi</h3>
                <p>IP adresiniz güvenlik ihlali nedeniyle 2 saatliğine banlandı.</p>
                <p>Lütfen ban süresi dolduktan sonra tekrar deneyin.</p>
                <div class="ban-timer">
                    Kalan Süre: ${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}
                </div>
            `;
        }

        // Periyodik ban kontrolü
        setInterval(() => {
            if (!banCountdownInterval) {
                checkBanStatus();
            }
        }, 30000);

        // Form gönderimi
        document.getElementById('registerForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const errorMessage = document.getElementById('errorMessage');
            const successMessage = document.getElementById('successMessage');
            const submitBtn = document.getElementById('submitBtn');
            
            errorMessage.style.display = 'none';
            successMessage.style.display = 'none';

            submitBtn.classList.add('loading');
            submitBtn.disabled = true;

            const isBanned = await checkBanStatus();
            
            if (isBanned) {
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                return;
            }

            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const userInput = document.getElementById('security_input').value.trim().toUpperCase();

            if (username.length < 3 || username.length > 20) {
                showError('Kullanıcı adı 3-20 karakter arasında olmalıdır!');
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                return;
            }

            if (password.length < 6) {
                showError('Şifre en az 6 karakter olmalıdır!');
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                return;
            }

            if (password !== confirmPassword) {
                showError('Şifreler eşleşmiyor!');
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                return;
            }

            if (userInput !== currentSecurityCode) {
                showError('Güvenlik kodu hatalı! Lütfen tekrar deneyin.');
                currentSecurityCode = generateSecurityCode();
                document.getElementById('securityCode').textContent = currentSecurityCode;
                document.getElementById('security_input').value = '';
                submitBtn.classList.remove('loading');
                submitBtn.disabled = false;
                return;
            }

            // Formu gönder (PHP backend'e)
            this.submit();
        });

        // Hata mesajı göster
        function showError(message) {
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.innerHTML = message;
            errorMessage.style.display = 'block';
            errorMessage.classList.add('shake-animation');
            
            setTimeout(() => {
                errorMessage.classList.remove('shake-animation');
            }, 500);
        }

        // Başarı mesajı göster
        function showSuccess(message) {
            const successMessage = document.getElementById('successMessage');
            successMessage.textContent = message;
            successMessage.style.display = 'block';
        }

        // Security input'una özel karakter girişini engelle
        document.getElementById('security_input').addEventListener('input', function(e) {
            this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
        });

        // Inputlara focus olduğunda placeholder'ı temizle
        const inputs = document.querySelectorAll('input');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.placeholder = '';
                this.parentElement.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
                
                if (this.value === '') {
                    switch(this.id) {
                        case 'username':
                            this.placeholder = 'Kullanıcı adınızı girin';
                            break;
                        case 'password':
                            this.placeholder = 'Şifrenizi girin';
                            break;
                        case 'confirm_password':
                            this.placeholder = 'Şifrenizi tekrar girin';
                            break;
                        case 'security_input':
                            this.placeholder = 'Yukarıdaki 6 haneli kodu girin';
                            break;
                    }
                }
            });
        });
    </script>
</body>
</html>