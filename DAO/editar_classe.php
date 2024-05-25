<?php

require 'conexao.php';

$usuario =[];
$id = filter_input(INPUT_POST, 'idusuario');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$cpf = filter_input(INPUT_POST, 'cpf');
$senha = filter_input(INPUT_POST, 'senha');

if($id && $nome && $email && $cpf && $senha){
    $sql = $pdo ->prepare("UPDATE usuario SET nome = :nome, email = :email, cpf = :cpf ,senha = :senha WHERE idusuario = :idusuario");
    $sql ->bindValue(':nome',$nome);
    $sql ->bindValue(':email',$email);
    $sql ->bindValue(':cpf',$cpf);
    $sql ->bindValue(':senha',$senha);
    $sql ->bindValue(':idusuario',$id);
    $sql ->execute();
 
         header("location: listagem.php");
         exit;
     }else{
        echo "aqui";
     }

?>