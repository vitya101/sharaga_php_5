<?php
function conn($host = 'MySQL-8.2', $user = 'root', $pass = '', $database = 'fucking_slaves_social_network'): ?PDO
{

    try {
        // Создаем экземпляр PDO
        $dsn = "mysql:host=$host;dbname=$database;charset=utf8";
        $pdo = new PDO($dsn, $user, $pass);

        // Устанавливаем режим обработки ошибок
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        echo 'Ошибка подключения: ' . $e->getMessage();
        return null;
    }

}