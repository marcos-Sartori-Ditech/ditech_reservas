

<!DOCTYPE html>
<?php  session_start(); 

if( $_SESSION['email'] == ""){

    header("Location:../index.php");
}
date_default_timezone_set('America/Sao_Paulo');
include_once('../scripts/conexao.php');
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
		h1 {
			margin-bottom: 1rem;
		}

		* {
			margin: 0;
			padding: 0;
		}

		fieldset {
			border: 0;
		}

		body, input, select, textarea, button {
			font-family: sans-serif;
			font-size: 1em;
		}
		
		.grupo:before, .grupo:after {
			content: " ";
			display: table;
		}
		
		.grupo:after {
			clear: both;
		}

		.campo {
			margin-bottom: 1em;
		}

		.campo label {
			margin-bottom: 0.2em;
			color: #666;
			display: block;
		}

		fieldset.grupo .campo {
			float:  left;
			margin-right: 1em;
		}

		.campo input[type="text"],
		.campo input[type="email"],
		.campo input[type="url"],
		.campo input[type="tel"],
		.campo select,
		.campo textarea {
			padding: 0.2em;
			border: 1px solid #CCC;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
			display: block;
		}

		.campo select option {
			padding-right: 1em;
		}

		.campo input:focus, .campo select:focus, .campo textarea:focus {
			background: #FFC;
		}

		.campo label.checkbox {
			color: #000;
			display: inline-block;
			margin-right: 1em;
		}

		.botao {
			font-size: 1.5em;
			background: #F90;
			border: 0;
			margin-bottom: 1em;
			color: #FFF;
			padding: 0.2em 0.6em;
			box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
			text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
		}

		.botao:hover {
			background: #FB0;
			box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
			text-shadow: none;
		}

		.botao, select, label.checkbox {
			cursor: pointer;
		}
	</style>
	<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>



</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DITECH_RESERVAS</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="painel.php">PAINEL</a></li>
      <li><a  href="usuarios.php">CRIAR USUARIO</a></li>
      <li><a  href="salas.php">CRIAR SALAS</a></li>i>
    </ul>
   <a href="../scripts/logout.php"> <button type="button" class="btn btn-danger" >OLÁ<?PHP ECHO " ". $_SESSION['nome']." "; ?>Logout</button></a>
  </div>
</nav>