<?php
try {
    $pdo = new PDO("mysql:dbname=checkit;host=localhost:3307;charset=utf8mb4", "root", "");
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
