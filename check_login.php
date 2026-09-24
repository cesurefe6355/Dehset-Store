<?php
// check_login.php
session_start();
header('Content-Type: application/json');

// Veritabanı bağlantısı
include 'config.php';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    
    if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
        // Kullanıcı giriş yapmış - created_at alanını da veritabanından al
        $user_id = $_SESSION['user_id'];
        
        $stmt = $pdo->prepare("SELECT username, created_at FROM users WHERE id = ?");
        $stmt->execute([$user_id]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            echo json_encode([
                'loggedIn' => true,
                'username' => $user['username'],
                'created_at' => $user['created_at'],
                'user_id' => $_SESSION['user_id']
            ]);
        } else {
            // Kullanıcı veritabanında bulunamadı
            session_destroy();
            echo json_encode([
                'loggedIn' => false,
                'error' => 'User not found in database'
            ]);
        }
        
    } else {
        // Kullanıcı giriş yapmamış
        echo json_encode([
            'loggedIn' => false
        ]);
    }
    
} catch(PDOException $e) {
    // Hata durumunda
    echo json_encode([
        'loggedIn' => false,
        'error' => 'Database connection failed: ' . $e->getMessage()
    ]);
}
?>