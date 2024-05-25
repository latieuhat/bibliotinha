
<?php

require 'conexao.php';

     $id = filter_input(INPUT_GET, 'idusuario');

     if($id){
        $sql = $pdo ->prepare("DELETE FROM usuario WHERE idusuario = :idusuario");
        $sql ->bindValue(':idusuario',$id);
        $sql ->execute();
     }


   header("location: listagem.php");
    ?>