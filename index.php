<?php

//formulario de cadastro.


if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $senha=$_POST['senha'];
    $email = $_POST['email'];
    $nascimento=$_POST['nascimento'];
   
    include_once 'connection.php';

    //query significa consulta, estou consultando e colocando no banco de dados, as informações passadas no meu formulario pelo usuario.
   $sql = mysqli_query($con, "INSERT INTO usuarios_cadastrados (nome, email, senha, nascimento) VALUES ('$nome', '$email', '$senha', '$nascimento')");

   //precisamos fazer a limpeza dos dados, e fazemos com sanitize


   //para sabermos se funcionou damos um echo 

  

}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de cadastro</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">

<main class="container mt-5 bg-primary bg-gradient w-25 p-4 rounded">
    <h1 class="text-center text-white">Cadastre-se aqui!</h1>
    <form action="index.php" method="post" class="text-center">
        <div class="mb-3">
            <label for="nome" class="form-label text-white">Nome:</label>
            <input type="text" class="form-control d-inline-block" name="nome" id="nome" required>
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label text-white">Senha:</label>
            <input type="password" class="form-control d-inline-block" name="senha" id="senha" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label text-white">Email:</label>
            <input type="email" class="form-control d-inline-block" name="email" id="email" required>
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label text-white">Data de nascimento:</label>
            <input type="date" class="form-control d-inline-block" name="nascimento" id="nascimento" required>
        </div>
        <div class="d-grid">
            <button type="submit" name="submit" class="btn btn-light">Cadastrar</button>
        </div>
    </form>
</main>

</body>
</html>
