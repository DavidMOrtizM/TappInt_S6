<?php
Class Datos
{
    private $host = "localhost";
    private $user = "id20702214_talleraiep";
    private $password = "id20702214_Talleraiep";
    private $db = "id20702214_elfaro";
    private $conect = null;

    public function conectar()
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
    public function desconectar()
    {
        $this->conect = null;
    }
    public function ejecutarsinrespuesta($procedimiento, $parametros)
    {
        $query = "CALL $procedimiento(";
        echo "<script>alert(' estoy aqui ')</script>";
        $query += substr(str_repeat("?,", count($parametros)), 0, -1) . ")";



        $statement = $this->conect->prepare($query);
        $contador = 1;
        
        foreach ($parametros as $parametro) {
            $statement->bindParam($contador, $parametro);
            $contador++;
        }
        $statement->execute();
    }

    public function ejecutarconrespuesta($procedimiento, $parametros)
    {
        $query = "CALL $procedimiento(";
        $query += str_repeat("?,", count($parametros)) . substr(0, -1) + ")";
        $statement = $this->conect->prepare($query);
        $contador = 1;
        foreach ($parametros as $parametro) {
            $statement->bindParam($contador, $parametro);
            $contador++;
        }
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $$result;
    }
}

?>