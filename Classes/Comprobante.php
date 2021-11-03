<?php

class Comprobante extends XML
{
    public static $resultado;
    public static $atributos;
    public static $rules;
    public function __construct()
    {
        Comprobante::$atributos = [];
        Comprobante::$atributos['Version'] = '3.3';
        Comprobante::$atributos['Serie'] = '';
        Comprobante::$atributos['Folio'] = '';
        Comprobante::$atributos['Sello'] = '';
        Comprobante::$atributos['NoCertificado'] = '';
        Comprobante::$atributos['Certificado'] = '';
        Comprobante::$atributos['CondicionesDePago'] = '';
        Comprobante::$atributos['Descuento'] = '';
        Comprobante::$atributos['MotivoDescuento'] = '';
        Comprobante::$atributos['TipoCambio'] = '';
        Comprobante::$atributos['Moneda'] = '';
        Comprobante::$atributos['Total'] = '';
        Comprobante::$atributos['MetodoPago'] = 'PUE';
        Comprobante::$atributos['FormaPago'] = '';
        Comprobante::$atributos['TipoDeComprobante'] = '';
        Comprobante::$atributos['LugarExpedicion'] = '';
        Comprobante::$atributos['NumCtaPago'] = '';
        Comprobante::$atributos['FolioFiscalOrig'] = '';
        Comprobante::$atributos['SerieFolioFiscalOrig'] = '';
        Comprobante::$atributos['FechaFolioFiscalOrig'] = '';
        Comprobante::$atributos['MontoFolioFiscalOrig'] = '';
        Comprobante::$rules = [];
        Comprobante::$rules['Version'] = 'R';
        Comprobante::$rules['Serie'] = 'O';
        Comprobante::$rules['Folio'] = 'O';
        Comprobante::$rules['Sello'] = 'R';
        Comprobante::$rules['MetodoPago'] = 'R';
        Comprobante::$rules['FormaPago'] = 'R';
        Comprobante::$rules['NoCertificado'] = 'R';
        Comprobante::$rules['Certificado'] = 'R';
        Comprobante::$rules['CondicionesDePago'] = 'O';
        Comprobante::$rules['Descuento'] = 'O';
        Comprobante::$rules['MotivoDescuento'] = 'O';
        Comprobante::$rules['TipoCambio'] = 'O';
        Comprobante::$rules['Moneda'] = 'R';
        Comprobante::$rules['Total'] = 'R';
        Comprobante::$rules['TipoDeComprobante'] = 'R';
        Comprobante::$rules['LugarExpedicion'] = 'R';
        Comprobante::$rules['NumCtaPago'] = 'O';
        Comprobante::$rules['FolioFiscalOrig'] = 'O';
        Comprobante::$rules['SerieFolioFiscalOrig'] = 'O';
        Comprobante::$rules['FechaFolioFiscalOrig'] = 'O';
        Comprobante::$rules['MontoFolioFiscalOrig'] = 'O';
    }

    public function getAtributes()
    {
        foreach (Comprobante::$atributos as $key => $value) {

            if($value != '')
            {
                Comprobante::$resultado .= ' '.$key.'="'.$value.'"';
            }
            
        }
        return Comprobante::$resultado;
    }

    public function getRules()
    {
        foreach (Comprobante::$rules as $key => $value) {
            Comprobante::$resultado .= ' '.$key.'="'.$value.'"';
        }
        return Comprobante::$resultado;
    }
}