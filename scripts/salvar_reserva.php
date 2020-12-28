<?php
include_once('conexao.php');
date_default_timezone_set('America/Sao_Paulo');
$data= date('d/m/Y', strtotime($_POST['data_reserva']));
$hora_fim = date('H:i', strtotime('+60 minute', strtotime($_POST['hora_reserva'])));

$sql = "insert into reserva (data_reserva, cpf_usuario ,id_sala, horario, hora_final)
       values ('".$data."',".$_POST['cpf'].",'".$_POST['id']."','".$_POST['hora_reserva']."','".$hora_fim."')";

     if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  //mysqli_close($conn);

  header("Location:../html/busca.php?sala=".$_POST['nome']."&id=".$_POST['id']."")
?>
