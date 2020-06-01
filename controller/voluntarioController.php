<?php

 include('../model/voluntarioModel.php');

 $nome = $_POST["Nome"];
 $cpf = $_POST["cpf"];
 $nasc = $_POST["dtnasc"];
 $genero = $_POST["sexo"];
 $telefone1 = $_POST["prependedtext1"];
 $telefone2 = $_POST["prependedtext2"];
 $email = $_POST["email"];
 $senha = $_POST["senha"];
 
 $voluntario = new voluntarioModel(null, $nome, $cpf, $nasc, $genero, $telefone1, $telefone2, $email, $senha);
/*
 echo "(Teste Voluntario)<br>";
 echo "Nome: ".$voluntario->getNome()."<br>";
 echo "CPF: ".$voluntario->getCpf()."<br>";
 echo "Data de nascimento: ".$voluntario->getNasc()."<br>";
 echo "Genero: ".$voluntario->getGenero()."<br>";
 echo "Telefone residencial: ".$voluntario->getTelefone1()."<br>";
 echo "Telefone mobile: ".$voluntario->getTelefone2()."<br>";
 echo "Email: ".$voluntario->getEmail()."<br>";
 echo "Senha: ".$voluntario->getSenha()."<br>";
*/
 $voluntario->Insert()

 ?>