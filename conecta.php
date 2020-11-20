<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "gastronomia";
  
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Falha na Conexão: " . mysqli_connect_error());
  }

  // ajusta acentuação no banco de dados
  mysqli_set_charset($conn, "utf-8");