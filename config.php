<?php

    $db = require(__DIR__ . "/parameters.php");
    try {
        $pdo = new PDO("mysql:host={$db['host']};dbname={$db['database']}", $db['user'], $db['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {

        echo json_encode($e->getMessage());
    }
