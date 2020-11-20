<?php
  $titulo = "Área Restrita - Listagem de Promoções";
  include("cab.php");
  include("conecta.php");

  $sql = "SELECT p.*, u.nome FROM promocoes p INNER JOIN usuarios u ON p.usuario_id = u.id ORDER BY p.id";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {

    echo "<table class='table'>";
    echo "<tr><th>Código</th>";
    echo "<th>Local da Promoção</th>";
    echo "<th>Nome do Prato</th>";
    echo "<th>Descrição</th>";
    echo "<th>Responsável</th>";
    echo "<th>Nº Pessoas</th>";
    echo "<th>Preço R$</th>";
    echo "<th>Foto</th>";
    echo "<th>Ações</th></tr>";

    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row["id"];
      $local = $row["local"];
      $nome_prato = $row["nome_prato"];
      $descricao = $row["descricao"];
      $usuario = $row["nome"];
      $num_pessoas = $row["num_pessoas"];
      $preco = $row["preco"];

      echo "<tr><td>$id</td>";
      echo "<td>$local</td>";
      echo "<td>$nome_prato</td>";
      echo "<td>$descricao</td>";
      echo "<td>$usuario</td>";
      echo "<td>$num_pessoas</td>";
      echo "<td>$preco</td>";
      echo "<td><img src='fotos/".$id.".jpg' style='width: 100px; height: 80px;'></td>";
      echo "<td><a href='exclui_promo.php?id=$id' onclick='return confirm(\"Confirma Exclusão?\")' class='btn btn-danger btn-xs' role='button'>Excluir</a></td></tr>";
      
    }
    echo "</table>";
  } 
  mysqli_close($conn);
?>
    
  </div>
</body>
</html>