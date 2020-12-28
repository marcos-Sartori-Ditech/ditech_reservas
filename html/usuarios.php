<?php include_once('header.php');?>
<script>
 function getUser(cpf, nome, senha, email, fone){

  $("#modal").html("<option value=''>enviando...</option>");
   setTimeout(function(){
  $("#modal").load("../scripts/save_user.php",{cpf:cpf, nome:nome, senha:senha, email:email, fone: fone })
}, 2000);
};
</script>


<div class="container">
  <h2>Navbar Button</h2>
  <div id="modal"></div>
 

  <div class="tab-content">
  
    <div id="menu1" class="tab-pane fade in active">
	<div id="modal"></div>
    
      
<label for="snome"> <h3> Dados do Responsavel</h3> </label>
<fieldset>

  <br>
	<fieldset class="grupo">
		
		<div class="campo">
			<label for="snome">Nome completo</label>
			<input type="text" id="nome" name="responsavel_nome" style="width: 50em" value="" />
		</div>
    <div class="campo">
			<label for="snome">CPF</label>
			<input type="text" id="cpf" name="responsavel_cpf" style="width: 20em" value="" />
		</div>
	</fieldset>	

  <fieldset class="grupo">
		<div class="campo">
			<label for="nome">Email</label>
			<input type="email" id="email" name="responsavel_email" style="width: 20em" value="" />
		</div>
		
    <div class="campo">
			<label for="snome">Telefone </label>
			<input type="text" id="fone" name="responsavel_telefone" style="width: 20em" value="" />
		</div>
		<div class="campo">
			<label for="snome">Senha </label>
			<input type="password" id="senha" name="senha" style="width: 20em" value="" />
		</div>
	</fieldset>	
  <br>

  
  <button class="botao submit" onclick="getUser( $('#cpf').val(),$('#nome').val(), $('#senha').val(),$('#email').val(),$('#fone').val(), 0)" type="button" name="status">Enviar</button>

    </div>
</div>

</body>
</html>