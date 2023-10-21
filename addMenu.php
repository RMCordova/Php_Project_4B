<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pointofsale";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Database connection failed']));
}

$menuId = $_GET['menuId'];  // Assuming the ID is sent as a GET parameter
$menuName = $_POST['name'];
$menuDesc = $_POST['description'];

$sql = "UPDATE your_table_name SET menu_name = ?, menu_description = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $menuName, $menuDesc, $menuId);

if ($stmt->execute()) {
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

$stmt->close();
$conn->close();
?>
