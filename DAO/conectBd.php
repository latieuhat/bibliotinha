<?php
require 'conexao.php';

    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $senha = filter_input(INPUT_POST, 'senha');


    $res = $pdo->prepare("INSERT INTO usuario (nome,email,cpf,senha) VALUES(:nome,:email,:cpf,:senha)");
    $res ->bindValue(':nome',$nome);
    $res ->bindValue(':email',$email) ;
    $res ->bindValue(':cpf',$cpf);
    $res ->bindValue(':senha',$senha);
    $res ->execute();

  


    $nome = 0;
    $email = 0;
    $cpf = 0;
    $senha = 0;

    header("location: ../index.php");
?>
