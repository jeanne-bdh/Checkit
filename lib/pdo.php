<?php
try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=checkit;charset=utf8mb4", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
