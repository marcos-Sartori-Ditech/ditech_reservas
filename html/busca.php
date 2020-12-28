<?php include_once('header.php');?>
<script>
 
 $(document).ready(function(){
  
 
   // var salvar= 'false';
 
   

  $("#enviar").click(function(){
    
    var param= $("#data_reserva").val();
    var cpf=   $('#cpf_reservista').val();
    var horario=   $('#hora_reserva').val();
    var id= $('#id_sala').val();
    var nome= $('#namesala').val();
   // var nome= $('#namesala').val();
   // var salvar= 'false';
 
   $("#mod").load("../scripts/agendar.php",{data_reserva :param, cpf:cpf,hora_reserva:horario,id:id, nome:nome});
    
  });

 
})

  

 


</script>



<div class="container">
  <h2><?php echo $_GET['sala'] ?></h2>
  <form method="post" action="../scripts/salvar_reserva.php" >
  <div class="form-group">
  <input name="namesala" type="hidden" class="form-control" value="<?php echo $_GET['sala'] ?>" id="namesala">       
  <input name="id" type="hidden" class="form-control" value="<?php echo $_GET['id'] ?>" id="id_sala">
    </div>
  <div class="form-group">
          
          <input name="cpf" type="hidden" class="form-control" value="<?php echo $_SESSION['cpf'] ?>" id="cpf_reservista">
    </div>
    
  <div class="form-group">
  
        <?php
             $DtSaida= date("d/m/Y");
             $data_formatada = DateTime::createFromFormat('d/m/Y', $DtSaida);?>
             <label for="message-text" class="col-form-label">DATA</label>
		      	<input  name="data_reserva" type="date" class="form-control" id="data_reserva" value="<?php echo $data_formatada->format('Y-m-d'); ?>" >
            </div>
		           <div class="form-group">
                <label for="message-text" class="col-form-label">Horario</label>
		      	    <input name="hora_reserva" type="time" value="<?php echo date('H:i')?>" class="form-control" id="hora_reserva">
                </div>
          
		  
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="enviar" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>
		</form>
     
      </div>
      
      

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="mod" class="modal-content">
      ...
    </div>
  </div>
</div>

 
      <?php
      
      echo   '<table id="myTable">
  <tr class="header">
    <th> Data</th>
    <th> inicio</th>
    <th >fim</th>
    <th >Status</th>
	
  </tr>';
$sql = "SELECT * FROM reserva where  id_sala=".$_GET['id']."";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

  echo"<tr>
   <td>". $row['data_reserva']."</td>
	 <td>". $row['horario']."</td>
   <td>". $row['hora_final']."</td>";

   if ($row['cpf_usuario']==$_SESSION['cpf']){
     
       echo "<td><a href='../scripts/cancelar_reserva.php?id=".$row['id_reserva']."&sala=".$_GET['sala']."&idsala=".$_GET['id']."'>cancelar</a</td>";

   } else{echo "<td>Rservado</td>";}
   
  


  }
}
      ?>

</body>
</html>