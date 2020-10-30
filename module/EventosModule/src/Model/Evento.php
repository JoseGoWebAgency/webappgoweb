<?php

namespace EventosModule\Model;

class Evento
{
    public $id_evento;
    public $nome_evento;
    public $data_evento;
    public $descricao;


    public function exchangeArray(array $data)
    {
        $this->nif     = !empty($data['nif']) ? $data['nif'] : null;
        $this->nome = !empty($data['nome']) ? $data['nome'] : null;
        $this->email  = !empty($data['email']) ? $data['email'] : null;
        $this->contacto  = !empty($data['contacto']) ? $data['contacto'] : null;

    }

    //parei aqui
    // como colocar a foreing key neste model?
    // devo usar ORM?
    // falta acabar o model de serviço e pensar como fazer o de oferta (talvez fazer um novo module)

}