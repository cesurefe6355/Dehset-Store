<?php
session_start();
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

function getClientIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim($ips[0]);
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}

function isIPBanned($ip, $ban_file) {
    if (!file_exists($ban_file)) {
        return ['banned' => false];
    }
    
    $banned_ips = json_decode(file_get_contents($ban_file), true) ?? [];
    
    if (isset($banned_ips[$ip])) {
        $ban_time = $banned_ips[$ip];
        $current_time = time();
        $remaining_time = 7200 - ($current_time - $ban_time);
        
        if ($remaining_time <= 0) {
            unset($banned_ips[$ip]);
            file_put_contents($ban_file, json_encode($banned_ips, JSON_PRETTY_PRINT));
            return ['banned' => false];
        }
        
        return [
            'banned' => true,
            'remaining_time' => $remaining_time,
            'banned_at' => date('Y-m-d H:i:s', $ban_time),
            'unban_at' => date('Y-m-d H:i:s', $ban_time + 7200),
            'ip' => $ip
        ];
    }
    
    return ['banned' => false];
}

$client_ip = getClientIP();
$ban_file = 'banned_ips.json';
$ban_status = isIPBanned($client_ip, $ban_file);

// Log kaydı (opsiyonel)
if ($ban_status['banned']) {
    $log_message = date('Y-m-d H:i:s') . " - Banned IP tried to access: $client_ip\n";
    file_put_contents('security.log', $log_message, FILE_APPEND);
}

echo json_encode($ban_status);
?>