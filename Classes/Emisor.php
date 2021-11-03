<?php

class Emisor extends XML
{

    public static $atributos;
    public static $regimenFiscal;
    public static $rules;
    public static $resultado;

    public function __construct()
    {
        Emisor::$atributos = [];
        Emisor::$atributos['Nombre'] = '';
        Emisor::$atributos['RegimenFiscal'] = '';
        Emisor::$rules = [];
        Emisor::$rules['Nombre'] = 'R';
        Emisor::$rules['RegimenFiscal'] = 'R';
    }

    public function getNode()
    {
        $xml = '<cfdi:Emisor ' . $this->getAtributes() . ' />';
        return $xml;
    }

    public function getAtributes()
    {
        foreach (Emisor::$atributos as $key => $value) {
            if($value != '')
            {
                Emisor::$resultado .= ' '.$key.'="'.$value.'"';
            }
        }
        return Emisor::$resultado;
    }
}
