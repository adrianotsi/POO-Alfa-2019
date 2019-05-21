<?php
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$senha = ($_POST['senha']);

if (filter_var($email, FILTER_VALIDATE_EMAIL) !== FALSE) {
        $arquivo = __DIR__ . '/../data/' . $email . '.txt';
        $hash = file_get_contents($arquivo);

        if (password_verify($senha, $hash)){
            echo 'Autenticado';
        }
    
} else {
    echo 'ERROOWW';
}