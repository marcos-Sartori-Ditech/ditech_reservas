<?php
include_once('conexao.php');
date_default_timezone_set('America/Sao_Paulo');

var_dump($_POST);

$data= date('d/m/Y', strtotime($_POST['data_reserva']));
$hora_fim = date('H:i', strtotime('+60 minute', strtotime($_POST['hora_reserva'])));


$sql = "SELECT * FROM reserva where data_reserva= '$data'";
$result = $conn->query($sql);


switch ($data) {
  case $data < date("d/m/Y"):
    echo "<h4> Data Expirou </h4><br>";
    break;
    case  $_POST['hora_reserva'] < '08:00' or $_POST['hora_reserva'] > '18:00'  :
      echo  "<h4>so poderá reservar uma sala em horario comercial (08:00 as 18:00) </h4><br>";
      break;

     case $result->num_rows > 0:
             while($row = $result->fetch_assoc()) {
             if ($_POST['hora_reserva'] >= $row['horario'] and $_POST['hora_reserva'] <= $row['hora_final'] ) {
                 echo "<h4> este intervalo de horario ja esta  reservado </h4><br>";
                 }

                  if ($_POST['cpf'] == $row['cpf_usuario'] and   date('H:i') <= $row['hora_final'] ){
                      echo "<h4>Ja existe uma reserva para  este cpf! </h4><br>";
                      
                  } 
                  
                  else{ echo "<h4>Horario disponivel </h4><br>";  
                  
                    echo "<h4>data da  reserva: ".$_POST['data_resrva']. "</h4><br>"; 
                    echo "<h4>Ja existe uma reserva para  este cpf! </h4><br>"; 
                    echo "<h4>Ja existe uma reserva para  este cpf! </h4><br>"; 
                  
                     }
                     
                        
             }
      
        break;

        
 
  default:
     echo "<h4>Horario disponivel </h4><br>";
     echo "<h4>data da  reserva: ".$data. "</h4><br>";
     echo "<h4>Hora de  inicio: ".$_POST['hora_reserva']. "</h4><br>"; 
     echo "<h4>Hora de encerramento: ".$hora_fim. "</h4><br>"; 
     echo "<h4>Contratante: ".$_POST['cpf']. "</h4><br>";
     
     
      echo  " <button id='save' type='button' class='btn btn-primary'>Reservar?</button>";
      //echo "<form id='form' action='../scripts/salvar_reserva.php' method='post'></form>";
      

}



         
  







?>


<script>
 
 $(document).ready(function(){
  
 
   // var salvar= 'false';
 
   

  $("#save").click(function(){
    
    $('form').submit();
  });

 
})