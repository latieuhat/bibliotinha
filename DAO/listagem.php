
<?php

require 'conexao.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuario");
    if($sql->rowCount() > 0){
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    <h1>Listagem</h1>

        <table border="1">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>email</th>
                <th>cpf</th>
                <th>senha</th>
            </tr>

            <?php foreach($lista as $usuario): ?>
                <tr>
                    <td><?=$usuario['idusuario'];?></td>
                    <td><?=$usuario['nome'];?></td>
                    <td><?=$usuario['email'];?></td>
                    <td><?=$usuario['cpf'];?></td>
                    <td><?=$usuario['senha'];?></td>
                    <td>
                      <a href="delete.php?idusuario=<?=$usuario['idusuario'];?>">[Excluir]</a>
                      <a href="editar.php?idusuario=<?=$usuario['idusuario'];?>">[Editar]</a>
                    </td>                
                </tr>
            <?php endforeach;?>      
        </table>

        <a href="../index.php">cadastrar</a>
  </body>
  </html>