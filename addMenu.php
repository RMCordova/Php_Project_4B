<?php
$host = 'localhost';
$db   = 'my_database';
$user = 'my_user';
$pass = 'my_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$menuName = $_POST['menuName'];
$menuDescription = $_POST['menuDescription'];

$stmt = $pdo->prepare("INSERT INTO menus (name, description) VALUES (?, ?)");
$success = $stmt->execute([$menuName, $menuDescription]);

echo json_encode(['success' => $success]);
?>
