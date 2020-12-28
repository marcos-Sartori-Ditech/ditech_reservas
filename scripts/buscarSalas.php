<?php
include_once('conexao.php');

$sql = "SELECT * FROM sala";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

	echo"<tr>
	 <td>". $row['nome_sala']."</td>
      <td>". $row['numero']."</td>
      
   
      ";
      
	 if($row['status']=='Livre'){
     
	echo "<td><button  type='button' class='btn20 btn  btn-success' data-toggle='modal' data-target='#exampleModal' data-whatever=".$row['id_sala'].">". $row['status']."</button></td>
	</tr>";}
else {echo "<td><button type='button' class=' btn20 btn btn-danger' data-toggle='modal' data-target='#modallock' data-whatever=".$row['id_sala'].">". $row['status']."</button></td>
		      </tr>";}

  }
}
?>