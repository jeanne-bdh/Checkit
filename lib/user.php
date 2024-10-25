<?php

function verifyUserLoginPassword(PDO $pdo, string $email, string $password): bool|array
{
    $query = $pdo->prepare("SELECT * FROM user WHERE email = :email");
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_ASSOC);

    // Authentification user
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        // Email ou Password incorrect : on retourne false
        return false;
    }
}
