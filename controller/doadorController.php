<?php

include('../model/doadorModel.php');

 $nome = $_POST["Nome"];
 $cpf = $_POST["cpf"];
 $nasc = $_POST["dtnasc"];
 $genero = $_POST["sexo"];
 $telefone1 = $_POST["prependedtext1"];
 $telefone2 = $_POST["prependedtext2"];
 $email = $_POST["email"];
 $senha = $_POST["senha"];
 
 $doador = new doadorModel(null, $nome, $cpf, $nasc, $genero, $telefone1, $telefone2, $email, $senha);
 /*
 echo "(Teste Doador)";
 echo "Nome: ".$doador->getNome()."<br>";
 echo "CPF: ".$doador->getCpf()."<br>";
 echo "Data de nascimento: ".$doador->getNasc()."<br>";
 echo "Genero: ".$doador->getGenero()."<br>";
 echo "Telefone residencial: ".$doador->getTelefone1()."<br>";
 echo "Telefone mobile: ".$doador->getTelefone2()."<br>";
 echo "Email: ".$doador->getEmail()."<br>";
 echo "Senha: ".$doador->getSenha()."<br>";
*/
 $doador->Insert();

 ?>