<?php
include_once("conexao.php");

$sql = "select * from usuarios where email='".$_POST['email']."' and senha='".$_POST['senha']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    
    session_start();
      
         $_SESSION['nome']= $row ["nome"]; 
         $_SESSION['email']=$row["email"];
         $_SESSION['cpf']=$row["cpf"];
    
     header("Location:../html/painel.php");
} else {

echo "nao loga";
}


?>