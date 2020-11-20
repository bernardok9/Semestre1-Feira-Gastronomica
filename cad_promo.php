<?php
  $titulo = "Área Restrita - Cadastro de Promoções";
  include("cab.php");
?>
<form method="post" action="grava_promo.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <label for="local">Local da Promoção:</label>
        <input type="text" class="form-control" id="local" name="local"
               autofocus required>
      </div>
    </div>  
    <div class="col-sm-8">
      <div class="form-group">
        <label for="nome">Nome do Prato:</label>
        <input type="text" class="form-control" id="nome" name="nome"
               required>
      </div>
    </div>  
  </div>

  <div class="row">
    <div class="col-sm-8">
      <div class="form-group">
        <label for="descricao">Descrição do Prato:</label>
        <input type="text" class="form-control" id="descricao" name="descricao"
               required>
      </div>
    </div>  
  
   
   <div class="col-sm-4">
    <div class="form-group">
      <label for="usuario_id">Responsável pelo contato:</label>
      <select id="usuario_id" name="usuario_id" class="form-control" required>
       <option value="">--Selecione o Usuário--</option>
       <?php
         include("conecta.php");
         $sql = "SELECT * FROM usuarios ORDER BY nome";
         
         $result = mysqli_query($conn, $sql);

         while($row = mysqli_fetch_assoc($result)) {
          $id = $row["id"];
          $nome = $row["nome"];

          echo "<option value=$id>$nome</option>";
         }

         mysqli_close($conn);

       ?>
      </select>
    </div>
  </div>  
  </div>
  


  <div class="row">
    <div class="col-sm-4">
      <div class="form-group">
        <label for="num">Nº Pessoas:</label>
        <input type="text" class="form-control" id="num" name="num"
               required>
      </div>
    </div>  
    <div class="col-sm-4">
      <div class="form-group">
        <label for="preco">Preço R$:</label>
        <input type="text" class="form-control" id="preco" name="preco"
               required>
      </div>
    </div>  
    <div class="col-sm-4">
      <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" class="form-control" id="foto" name="foto"
               required>
      </div>
    </div>  
  </div>

  <button type="submit" class="btn btn-primary">Gravar Promoção</button>
  <button type="reset" class="btn btn-danger">Limpar Dados</button>

  </form>
  </div>
</body>
</html>