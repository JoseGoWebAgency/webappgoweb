<?php

namespace ClienteModule\Model;

class Cliente
{
    public $nif;
    public $nome;
    public $email;
    public $contacto;


    public function exchangeArray(array $data)
    {
        $this->nif     = !empty($data['nif']) ? $data['nif'] : null;
        $this->nome = !empty($data['nome']) ? $data['nome'] : null;
        $this->email  = !empty($data['email']) ? $data['email'] : null;
        $this->contacto  = !empty($data['contacto']) ? $data['contacto'] : null;

    }
}