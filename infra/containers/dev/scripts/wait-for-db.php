<?php

declare(strict_types=1);

/**
 * Aguarda o PostgreSQL ficar pronto
 * Uso: php infra/containers/scripts/wait-for-db.php
 */

require_once __DIR__ . '/../../../../vendor/autoload.php';

// Carrega ambiente
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../envs/', '.env.development');
$dotenv->load();

$host = $_ENV['POSTGRES_HOST'] ?? 'localhost';
$port = $_ENV['POSTGRES_PORT'] ?? '5432';
$database = $_ENV['POSTGRES_DB'] ?? 'app_db';
$username = $_ENV['POSTGRES_USER'] ?? 'postgres';
$password = $_ENV['POSTGRES_PASSWORD'] ?? '';

$maxRetries = 30;
$retryInterval = 2;

echo "⏳ Aguardando PostgreSQL ($host:$port/$database)...\n";

for ($i = 1; $i <= $maxRetries; $i++) {
    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$database";
        $pdo = new PDO($dsn, $username, $password, [
            PDO::ATTR_TIMEOUT => 5,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        
        // Testa consulta simples
        $pdo->query('SELECT 1');
        
        echo "✅ PostgreSQL pronto! (tentativa $i/$maxRetries)\n";
        
        // Opcional: Executar migrações automaticamente
        if (isset($_SERVER['argv'][1]) && $_SERVER['argv'][1] === '--migrate') {
            echo "🚀 Executando migrações...\n";
            passthru('php artisan migrate --force', $migrateStatus);
            
            if ($migrateStatus === 0) {
                echo "✅ Migrações concluídas!\n";
            } else {
                echo "⚠️  Migrações falharam (código: $migrateStatus)\n";
            }
        }
        
        exit(0);
        
    } catch (PDOException $e) {
        echo "⏱️  Tentativa $i/$maxRetries - " . $e->getMessage() . "\n";
        
        if ($i < $maxRetries) {
            sleep($retryInterval);
        }
    }
}

echo "❌ PostgreSQL não ficou pronto após $maxRetries tentativas!\n";
exit(1);