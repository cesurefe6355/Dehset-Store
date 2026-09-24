<?php
// login.php - SON ÇÖZÜM
session_start();
header('Content-Type: application/json');
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = trim($_POST['username']);
    $input_password = $_POST['password'];
    
    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
        
        $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE username = ?");
        $stmt->execute([$input_username]);
        
        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            
            // DEBUG: Şifre kontrolünü göster
            error_log("Girilen şifre: $input_password");
            error_log("DB Hash: " . $user['password']);
            
            if (password_verify($input_password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                
                echo json_encode(['success' => true, 'username' => $user['username']]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Şifre yanlış! Lütfen  tekrar deneyin.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Kullanıcı bulunamadı!']);
        }
        
    } catch(Exception $e) {
        echo json_encode(['success' => false, 'message' => 'Sistem hatası: ' . $e->getMessage()]);
    }
}
?>