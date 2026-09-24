<?php
session_start();
require_once 'config.php';

header('Content-Type: application/json');

// Basit ve güvenli
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'Giriş yapmalısınız!']);
    exit;
}

if (!isset($_POST['app_id']) || !isset($_POST['app_name'])) {
    echo json_encode(['success' => false, 'message' => 'Eksik bilgi!']);
    exit;
}

$app_id = intval($_POST['app_id']);
$app_name = $_POST['app_name'];
$user_id = $_SESSION['user_id'];

// Apps.json'dan drive linkini bul
$drive_link = '';
if (file_exists('apps.json')) {
    $json_data = file_get_contents('apps.json');
    $data = json_decode($json_data, true);
    if ($data && isset($data['apps'])) {
        foreach ($data['apps'] as $app) {
            if ($app['id'] == $app_id) {
                $drive_link = $app['drive_link'] ?? $app['download_url'] ?? '';
                break;
            }
        }
    }
}

// Veritabanına kaydet
try {
    $sql = "INSERT INTO downloads (user_id, app_id, app_name, download_date) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("iis", $user_id, $app_id, $app_name);
        if ($stmt->execute()) {
            // BAŞARILI
            echo json_encode([
                'success' => true, 
                'message' => 'İndirme başlatılıyor...',
                'download_url' => $drive_link,
                'download_id' => $stmt->insert_id // Yeni eklenen kaydın ID'si
            ]);
        } else {
            throw new Exception('Execute failed');
        }
    } else {
        throw new Exception('Prepare failed');
    }
} catch (Exception $e) {
    // Veritabanı hatası olsa bile indirmeye devam et
    echo json_encode([
        'success' => true, 
        'message' => 'İndirme başlatılıyor (veritabanı kaydı olmadan)...',
        'download_url' => $drive_link
    ]);
}
?>