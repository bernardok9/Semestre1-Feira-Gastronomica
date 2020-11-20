<?php

$titulo = "Área Restrita - Exclusão de Promoções";
include("cab.php");
include("conecta.php");



$id = $_GET["id"];

// sql to delete a record
$sql = "DELETE FROM promocoes WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<h4>Ok! Promoção de código $id excluído com sucesso!!</h4>";
    unlink("fotos/".$id.".jpg");
} else {
    echo "Erro na exclusão do registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
</div>
</body>
</html>