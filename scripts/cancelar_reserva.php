<?php
include_once('conexao.php');
date_default_timezone_set('America/Sao_Paulo');

$sql = "delete from reserva WHERE id_reserva=".$_GET['id']."";

     if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }


     header("Location:../html/busca.php?sala=".$_GET['sala']."&id=".$_GET['idsala']."")
?>
