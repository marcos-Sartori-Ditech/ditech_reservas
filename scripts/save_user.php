<?php
 
 
include_once('conexao.php');


 
$sql = "insert into usuarios (nome,cpf,senha,email,fone) values ('".$_POST['nome']."',".$_POST['cpf'].",'".$_POST['senha']."','".$_POST['email']."', ".$_POST['fone'].")";

if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
