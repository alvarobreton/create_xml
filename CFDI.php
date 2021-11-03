<?php

include_once './Classes/XML.php';
include_once './Classes/Comprobante.php';
include_once './Classes/Emisor.php';

class CFDI
{
    protected static $comprobante;
    protected static $xml;
    protected static $emisor;

    public function __construct()
    {
        CFDI::$comprobante = new Comprobante();
        CFDI::$emisor = new Emisor();
    }


    public static function getNode()
    {
        CFDI::$xml = '<?xml version="1.0" encoding="UTF-8"?> <cfdi:Comprobante  xmlns:cfdi="http://www.sat.gob.mx/cfd/3"  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd" ' . CFDI::$comprobante->getAtributes() . ' >';
        CFDI::$xml .= CFDI::$emisor->getNode(); 
        CFDI::$xml .= '</cfdi:Comprobante>';
        return CFDI::$xml;
    }

    public static function setComprobante($attribute, $value)
    {
        CFDI::$comprobante::$atributos[$attribute] = $value;
    }

    public static function setEmisor($attribute, $value)
    {
        CFDI::$emisor::$atributos[$attribute] = $value;
    }
}