<?php


namespace Banco\Modelo;


trait AcessoPropriedades
{
    public function __get(string $attribute)
    {
        $metodo = 'recupera' . ucfirst($attribute);
        return $this->$metodo();
    }
}