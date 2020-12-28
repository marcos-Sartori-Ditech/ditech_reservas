<?php
include_once('conexao.php');


 
$sql = "insert into sala (numero,nome_sala, descricao) values ('".$_POST['numero']."','".$_POST['nome']."','".$_POST['descricao']."')";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
var_dump($_POST);