<?php
error_reporting(-1);
ini_set('display_errors', 1);
include_once './CFDI.php';

class Main
{
    private  static $cfdi_xml;
    private static $array_data = [
        "Comprobante" => [
            "LugarExpedicion" => "64000",
            "TipoDeComprobante" => "i",
            "Moneda" => "MXN",
            "SubTotal" => "100",
            "Total" => "116",
            "FormaPago" => "01",
            "NoCertificado" => "00000010101010101",
            "Fecha" => "2021-10-06 11:00:00"
        ],
        "Emisor" => [
            "Rfc" => "TME960709LR2",
            "Nombre" => "Tracto Camiones s.a de c.v",
            "RegimenFiscal" => "612"
        ]
    ];

    protected function __construct()
    {
        // no se puede ejecutar el contructor.
    }

    final public static function createXML()
    {
        Main::$cfdi_xml = new CFDI;
        //Obtener el XML por medio de la clase XML

        // Comprobante
        foreach (Main::$array_data as $key => $value) :
            if ($key == (string) 'Comprobante') :
                foreach ($value as $attribute => $value) :
                    Main::$cfdi_xml::setComprobante($attribute,$value);
                endforeach;
            endif;
        endforeach;
        //Emisor
        foreach (Main::$array_data as $key => $value) :
            if ($key == (string) 'Emisor') :
                foreach ($value as $attribute => $value) :
                    Main::$cfdi_xml::setEmisor($attribute,$value);
                endforeach;
            endif;
        endforeach;
        $cadenalimpia = preg_replace("[\n|\r|\n\r]", "", Main::$cfdi_xml::getNode());
        return  $cadenalimpia;
    }
}

try {
    //Se está implementando un patron de diseño Singleton por lo tanto se tiene que instanciar directamente
    echo $main = Main::createXML();
} catch (\Exception $error) {
    echo $error->getMessage();
}
