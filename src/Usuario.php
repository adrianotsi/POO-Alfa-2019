<?php declare (strict_types = 1);
class Usuario
{
    protected $email;
    public $senha;

    public function __construct($email)
    {
        $this->setEmail($email);
    }

    public function setEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);

        if ($email === false) {
            throw new Exception("$email não é um endereço de e-mail válido.");
        }

        $this->email = $email;
    }

    public function excluir()
    {
        $arquivo = __DIR__ . '/../data/' . $this->email . '.txt';
        unlink($arquivo);
    }

    public function cadastrar()
    {
        $this->senha = password_hash($this->senha, PASSWORD_ARGON2I);

        // Cria, grava e anexa dados ao arquivo
        $arquivo = __DIR__ . '/../data/' . $this->email . '.txt';
    
        file_put_contents($arquivo, $this->senha);
    }
}
