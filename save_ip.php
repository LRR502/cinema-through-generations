<?php
// filepath: save_ip.php
$data = json_decode(file_get_contents('php://input'), true);
$ip = $data['ip'];

$file = 'ip.txt';
file_put_contents($file, $ip . PHP_EOL, FILE_APPEND);

echo 'IP saved successfully';
?>
