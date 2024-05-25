<?php

require 'conexao.php';

$usuario =[];

$id = filter_input(INPUT_GET, 'idusuario');

if($id){
   $sql = $pdo ->prepare("SELECT * FROM usuario WHERE idusuario = :idusuario");
   $sql ->bindValue(':idusuario',$id);
   $sql ->execute();

    if($sql -> rowCount() >0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    } else{
        header("location: listagem.php");
        exit;
    }}
else{
        header("location: listagem.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Usuário</h1>

    
    <form method="POST"  action="editar_classe.php">
     <input type="hidden" name="idusuario" value="<?=$usuario['idusuario'];?>">
       <label>
              Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"> 
       </label>
       <label>
              Email: <input type="email" name="email" value="<?=$usuario['email'];?>"> 
       </label>
       <label>
              cpf:<input type="text" name="cpf" value="<?=$usuario['cpf'];?>">
       </label>
       <label>
              Senha: <input type="text" name="senha" value="<?=$usuario['senha'];?>">
       </label>
        <input type="submit" value="atualizar">
      </form>
</body>
</html>