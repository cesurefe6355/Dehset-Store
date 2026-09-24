<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['downloads' => []]);
    exit;
}

$user_id = $_SESSION['user_id'];

try {
    // Kullanıcının indirdiği uygulamaları getir
    $sql = "SELECT id, app_id, app_name, download_date FROM downloads WHERE user_id = ? ORDER BY download_date DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $downloads = [];
    while ($row = $result->fetch_assoc()) {
        $downloads[] = $row;
    }
    
    echo json_encode(['downloads' => $downloads]);
    
} catch (Exception $e) {
    // Hata durumunda boş array döndür
    echo json_encode(['downloads' => []]);
}
?>