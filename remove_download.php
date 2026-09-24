<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Giriş yapmalısınız!']);
    exit;
}

if (!isset($_POST['download_id'])) {
    echo json_encode(['success' => false, 'message' => 'Eksik parametre!']);
    exit;
}

$download_id = intval($_POST['download_id']);
$user_id = $_SESSION['user_id'];

try {
    $sql = "DELETE FROM downloads WHERE id = ? AND user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $download_id, $user_id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'İndirme kaydı silindi!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Silme başarısız!']);
    }
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => 'Hata: ' . $e->getMessage()]);
}
?>