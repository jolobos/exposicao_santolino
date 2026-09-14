<?php
$host = 'localhost';
$dbname = 'santolino';
$usuario = 'root';
$senha = '';

try {
    // Cria a conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $usuario, $senha);
    
    // Configura o modo de erro para exceção
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}

?>

