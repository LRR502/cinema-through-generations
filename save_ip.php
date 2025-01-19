<?php
// filepath: save_ip.php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);
    if (isset($data['ip'])) {
        // Process the IP address (e.g., save to a database or file)
        // For demonstration, we'll just return a success message
        echo 'IP saved successfully: ' . $data['ip'];
    } else {
        echo 'No IP address provided';
    }
} else {
    http_response_code(405);
    echo 'Method Not Allowed';
}
?>
