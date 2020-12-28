
<?php   include_once('header.php') ?>




<script>
 
 $(document).ready(function(){
  $("#data_reserva").change(function(){
    var param= $("#data_reserva").val();
    var cpf=   $('#cpf_reservista').val();
    var horario=   $('#hora_reserva').val();

 
    $("#modaldata").load("../scripts/agendar.php",{data:param, cpf:cpf, id:id_sala, hora:horario });
    
  });
})

  function listarHorario(id_sala){
    var param= $("#data_reserva").val();
    var cpf=   $('#cpf_reservista').val();
    var horario=   $('#hora_reserva').val();

    $("#modaldata").load("../scripts/agendar.php",{data:param, cpf:cpf, id:id_sala, hora:horario })
  
    //refreshModal();
  

  }

 


</script>

<?php date_default_timezone_set('America/Sao_Paulo');?>




<div class="container">
  <h2>Navbar Button</h2>
  
  <div id="menu3" class="tab-pane ">
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquise por sala" title="Type in a name">

<table id="myTable">
  <tr class="header">
 
    <th style="width:60%;">Nome da Sala</th>
    <th style="width:40%;">Numero</th>
	<th style="width:40%;">Status</th>
  </tr>
  
  <?php $sql = "SELECT * FROM sala";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

	echo"<tr>
	 <td>". $row['nome_sala']."</td>
      <td>". $row['numero']."</td>
      
   
      ";
      
	 if($row['status']=='Livre'){
     
  echo "<td> <a href='busca.php?sala=".$row['nome_sala']."&id=".$row['id_sala']."' class='btn btn-success btn-lg active' role='button' aria-pressed='true'>Reservar</a>"; 
  
  }
else {echo "<td><button type='button' class=' btn20 btn btn-danger' data-toggle='modal' data-target='#modallock' data-whatever=".$row['id_sala'].">". $row['status']."</button></td>
		      </tr>";}

  }
} ?>
  
</table>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
		<h3 class="modal-title" id="exampleModalLabel">FAÇA SUA RESERVA</h3>
		
    <div id="modal3"></div>



    
   
         <div  id="modaldata"> </div>
       
        
</table>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
		<div class="mbody">
   
		<div class="form-group">
            
            <input type="hidden" class="form-control" value="" id="id_sala">
		  </div>
</div>
          <div class="form-group">
          
            <input type="hidden" class="form-control" value="<?php echo $_SESSION['cpf'] ?>" id="cpf_reservista">
      </div>
      
      <div class="form-group">
        <?php
             $DtSaida= date("d/m/Y");
             $data_formatada = DateTime::createFromFormat('d/m/Y', $DtSaida);?>
             <label for="message-text" class="col-form-label">DATA</label>
		      	<input type="date" class="form-control" id="data_reserva" value="<?php echo $data_formatada->format('Y-m-d'); ?>">
            </div>
		           <div class="form-group">
                <label for="message-text" class="col-form-label">Horario</label>
		      	    <input type="time" class="form-control" id="hora_reserva" value="13:26">
                </div>
          
		  
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button class="botao submit" type="button" name="reserva">Enviar</button>
		
     
	  </div>
	 
    </div>
  </div>
</div>






<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
	//td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
		  
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
	</div>
</div>

</body>
</html>