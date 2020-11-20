<?php
    session_start();

    $mensagem = "";

    if (isset($_POST["email"]))
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        include("conecta.php");

        $sql = "SELECT * FROM usuarios WHERE email ='$email' AND senha=md5('$senha')";
        $result = mysqli_query($conn, $sql);
      
        if (mysqli_num_rows($result) == 1) {
      
            // output data of each row
            $row = mysqli_fetch_assoc($result);
    
            $_SESSION["usuario"] = $row["nome"];
            header("location: index.php");
    
        }else{
            $mensagem = "Login inválido...";
        }
    }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <title>Quinzena Gastronômica</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post">
      <img class="mb-4" src="gastronomia.jpg" alt="" width="300" height="220">
      <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <h4 class="mt-4 font-italic text-danger"> <?= $mensagem?></h4>
    </form>
  </body>
</html>
