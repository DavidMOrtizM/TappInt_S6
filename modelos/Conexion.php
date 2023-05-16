<?php
class Conexion
{
  /*    private $host = "localhost";*/

    private $host = "https://databases-auth.000webhost.com/db_structure.php?server=1&db=id20702214_elfaro";
    private $user = "id20702214_talleraiep";
    private $password = "id20702214_Talleraiep";
    private $db = "id20702214_elfaro";
    private $conect;

    public function __construct()
    {
        $connectionString = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=utf8";
        try {
            $this->conect = new PDO($connectionString, $this->user, $this->password);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexion existosa";
        } catch (Exception $e) {
            $this->conect = "Error de Conexión";
            echo "Error: " . $e->getMessage();
        }
    }


}
$conect = new Conexion();
?>