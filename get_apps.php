<?php
session_start();
header('Content-Type: application/json');

// JSON dosyasını oku
$json_data = file_get_contents('apps.json');
$data = json_decode($json_data, true);

if ($data === null) {
    echo json_encode(['apps' => []]);
    exit;
}

// Eğer kullanıcı giriş yapmışsa, tüm bilgileri göster
if (isset($_SESSION['user_id'])) {
    echo json_encode($data);
} else {
    // Giriş yapmamış kullanıcılar için drive_link'i gösterme
    foreach ($data['apps'] as &$app) {
        unset($app['drive_link']);
    }
    echo json_encode($data);
}
?>