<?php include_once('header.php');?>
<script>
 function setSala(numero, nome, descricao){

  $("#modal").html("<option value=''>Carregando...</option>");
   setTimeout(function(){
  $("#modal").load("../scripts/salvar_salas.php",{numero:numero, nome:nome, descricao:descricao })
}, 2000);
};
</script>
</head>
<body>



<div class="container">
  <h2>Navbar Button</h2>

  <div id="menu2" class="tab-pane ">
 
      
    <label for="snome"> <h3> Cadastrar Salas</h3> </label>
    <div id="modal"></div>
    <fieldset>
    
      <br>
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Numero da sala</label>
                <input type="text" id="numero_sala" name="id_sistema" style="width: 20em" value="" />
            </div>
            <div class="campo">
                <label for="snome">Nome da sala</label>
                <input type="text" id="nome_sala" name="nome_sala"  value="" />
            </div>
       
        </fieldset>	
        <fiedset>
        <div class="campo">
                <label for="imob_doc">Descrição</label>
                <textarea id="descricao" name="descricao" style="width: 50em" rows="10" cols="500"></textarea>
            </div>
        </fieldset>
      <button class="botao submit" onclick="setSala( $('#numero_sala').val(), $('#nome_sala').val(), $('#descricao').val(), 0)" type="button" name="salas">Enviar</button>
     
     
  
 
</div>

</body>
</html>