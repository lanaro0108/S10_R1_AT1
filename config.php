<?php

session_start();

if (isset($_POST['theme'])) {
    $themeSelection = $_POST['theme'];
    setcookie('user_theme', $themeSelection, time() + (86400 * 30), "/");
    $_COOKIE['user_theme'] = $themeSelection; // Atualiza manualmente para uso imediato
}

// Define o tema padrão caso o cookie não exista
$currentTheme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : 'claro';

//  * Salva o nome do usuário na sessão após o envio do formulário.

if (isset($_POST['username'])) {
    $_SESSION['user_data'] = [
        'name'  => htmlspecialchars($_POST['username']),
    ];
}
?>