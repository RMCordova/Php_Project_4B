<?php
header('Content-Type: application/json');

$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$menuName = $_POST['Mname'];
$menuDesc = $_POST['Mdesc'];

$sql = "INSERT INTO your_table_name (menu_name, menu_description) VALUES (?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $menuName, $menuDesc);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>
