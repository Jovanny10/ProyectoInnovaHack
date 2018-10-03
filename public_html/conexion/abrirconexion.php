<?php 
class Conexion extends mysqli
{

    private $HOST = "localhost";
    private $USER = "id3161990_root2";
    private $PASS = "qwerty2";
    private $BASE = "id3161990_base2";

    public function __construct()
    {
        parent::__construct($this->HOST, $this->USER, $this->PASS, $this->BASE);
        $this->connect_errno ? die("Error en la conexion" . mysqli_errno()) : $m = 'Conectado';
    }

}



?>