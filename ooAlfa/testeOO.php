<?php
require __DIR__ . '/../src/Usuario.php';

try{
$usuario = new Usuario('tsiadriano@gmail.com');
} catch (Exception $e) {
    echo ($e->getMessage());
}
// $usuario2 = new Usuario('adrianodsv@hotmail.com');
// $usuario3 = new Usuario('contato@3acorp.com.br');

$usuario->email = '.br';
$usuario->senha = '890890';

$usuario->excluir();

// var_dump($usuario, $usuario2, $usuario3);