<?php

class voluntarioDAO{

    private $nome;
    private $cpf;
    private $nasc;
    private $genero;
    private $telefone1;
    private $telefone2;
    private $email;
    private $senha;

    function voluntarioDAO($nome, $cpf, $nasc, $genero, $telefone1, $telefone2, $email, $senha){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->nasc = $nasc;
        $this->genero = $genero;
        $this->telefone1 = $telefone1;
        $this->telefone2 = $telefone2;
        $this->email = $email;
        $this->senha = $senha;    
    }

    function conectarInsert(){
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

                //':nome' => $voluntario->getNome(),
                //':cpf' => $voluntario->getCpf(),
                //':dt_nasc' => $voluntario->getNasc(),
                //':genero' => $voluntario->getGenero(),
                //':telefone_res' => $voluntario->getTelefone1(),
                //':telefone_mob' => $voluntario->getTelefone2(),
                //':email' => $voluntario->getEmail(),
                //':senha' => $voluntario->getSenha()
            ));
            
            echo $statement->rowCount(); 

        }catch(PDOException $e){
            echo 'Erro de conexão: '. $e->getMessage();
        }
    }
}

?>