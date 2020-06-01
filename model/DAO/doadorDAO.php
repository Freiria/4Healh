<?php

class doadorDAO{
    function conectar(){
        try{
            $conn = new PDO('mysql:host=localhost;dbname=fourhealthdb',"root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Conexão ok";
        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }
}

?>