<?php
require 'Usuario.php';

class Admin extends Usuario
{
    private $email;
    private $matricula;

    public function __construct($email, $matricula)
    {
       $this->setEmail($email);
       $this->matricula = $matricula;
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMaricula($valor)
    {
        $this->matricula = $valor;
    }
}