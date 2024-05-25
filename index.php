<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Document</title>
</head>
<body>
<a href="DAO/listagem.php">lita</a>


  <div class="box">
      <form method="POST"  action="DAO/conectBd.php">
          <label>Nome: <input type="text"  name="nome"></label>
          <label>Email: <input type="email"  name="email"></label>
          <label>Cpf: <input type="text"  name="cpf"></label>
          <label>Senha: <input type="text"  name="senha"></label>
          <input type="submit" value="salvar">
        </form>
    </div>



</body>
</html>