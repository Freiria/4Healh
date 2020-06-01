<?php

class voluntarioModel{

    private $id;
    private $nome;
    private $cpf;
    private $nasc;
    private $genero;
    private $telefone1;
    private $telefone2;
    private $email;
    private $senha;

    function voluntarioModel($id, $nome, $cpf, $nasc, $genero, $telefone1, $telefone2, $email, $senha){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nasc = $nasc;
        $this->genero = $genero;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->email = $email;
        $this->senha = $senha;
    }
    
    function setNome($nome){
        $this->nome = $nome;
    }
    function setCpf($cpf){
        $this->cpf = $cpf;
    }
    function setNasc($nasc){
        $this->nasc = $nasc;
    }
    function setGenero($genero){
        $this->genero = $genero;
    }
    function setTelefone1($telefone1){
        $this->telefone1 = $telefone1;
    }
    function setTelefone2($telefone2){
        $this->telefone2 = $telefone2;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setSenha($senha){
        $this->senha = $senha;
    }
    
    function getNome(){
        return $this->nome;
    }
    function getCpf(){
        return $this->cpf;
    }
    function getNasc(){
        return $this->nasc;
    }
    function getGenero(){
        return $this->genero;
    }
    function getTelefone1(){
        return $this->telefone1;
    }
    function getTelefone2(){
        return $this->telefone2;
    }
    function getEmail(){
        return $this->email;
    }
    function getSenha(){
        return $this->senha;
    }
    
    function printVol(){
        echo $this->nome;
        echo $this->cpf;
        echo $this->nasc;
        echo $this->genero;
        echo $this->telefone1;
        echo $this->telefone2;
        echo $this->email;
        echo $this->senha;
    }

    function getById($id){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=fourhealthdb',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare('SELECT id, nome, cpf, dt_nasc, genero, telefone_res, telefone_mob, email, senha FROM  Voluntario  WHERE idDoador = :id');
            $statement->execute(array(
                ':id' => $this->id,
                ':nome' => $this->nome,
                ':cpf' => $this->cpf,
                ':nasc' => $this->nasc,
                ':genero' => $this->genero,
                ':telefone1' => $this->telefone1,
                ':telefone2' => $this->telefone2,
                ':email' => $this->email,
                ':senha' => $this->senha
            ));
            
            echo $statement->rowCount(); 

        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }

    function Insert(){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=fourhealthdb',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare('INSERT INTO Voluntario (nome, cpf, dt_nasc, genero, telefone_res, telefone_mob, email, senha) VALUES(:nome, :cpf, :nasc, :genero, :telefone1, :telefone2, :email, :senha)');
            $statement->execute(array(
                ':nome' => $this->nome,
                ':cpf' => $this->cpf,
                ':nasc' => $this->nasc,
                ':genero' => $this->genero,
                ':telefone1' => $this->telefone1,
                ':telefone2' => $this->telefone2,
                ':email' => $this->email,
                ':senha' => $this->senha
            ));
            
            header('Location: ../view/sucesso.php');
            //echo "Parabéns pela iniciativa $this->nome, Seja bem vindo!<br>";
            //echo "Registros: ".$statement->rowCount();

        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }

    function Update($id){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=fourhealthdb',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare('UPDATE Voluntario SET nome = :nome, cpf = :cpf, dt_nasc = :nasc, genero = :genero, telefone_res = :telefone1, telefone_mob = :telefone2, email = :email, senha = :senha WHERE idDoador = :id');
            $statement->execute(array(
                ':id' => $this->id,
                ':nome' => $this->nome,
                ':cpf' => $this->cpf,
                ':nasc' => $this->nasc,
                ':genero' => $this->genero,
                ':telefone1' => $this->telefone1,
                ':telefone2' => $this->telefone2,
                ':email' => $this->email,
                ':senha' => $this->senha
            ));
            
            echo $statement->rowCount(); 

        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }

    function Delete($id){
        try{
            $pdo = new PDO('mysql:host=localhost;dbname=fourhealthdb',"root","");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare('DELETE FROM Voluntario WHERE idDoador = :id');
            $statement->bindParam(':id',$id);
            $statement->execute();
            
            echo $statement->rowCount(); 

        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }
}

?>