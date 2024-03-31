<?php
$host = 'localhost';
$dbname = 'capsulift_loanhub';
$username = 'capsulift_loanhun';
$password = '8@cR))^205yt';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}
?>
