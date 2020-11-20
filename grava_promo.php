<?php
  $titulo = "Área Restrita - Cadastro de Promoções";
  include("cab.php");
  include("conecta.php");

  // obtém os dados enviados pelo form
  $local = $_POST["local"];
  $nome = $_POST["nome"];
  $descricao = $_POST["descricao"];
  $num = $_POST["num"];
  $preco = $_POST["preco"];
  $foto = $_FILES["foto"]["tmp_name"];
  $usuario_id = $_POST["usuario_id"];

  $sql = "INSERT INTO promocoes (local, nome_prato, descricao, num_pessoas, preco, usuario_id)
          VALUES ('$local', '$nome', '$descricao', $num, $preco, $usuario_id)";
  
  if (mysqli_query($conn, $sql)) {
      $last_id = mysqli_insert_id($conn);

      // define o caminho onde a imagem ficará salva e copia a imagem
      $destino = "fotos/" . $last_id . ".jpg";
      move_uploaded_file($foto, $destino);

      echo "Ok! Promoção Cadastrada com id: " . $last_id;
  } else {
      echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  mysqli_close($conn);

?>
  </div>
</body>
</html>