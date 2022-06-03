<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../public/assets/css/img/logofavicon.png" type="image/x-icon" />
    <title>Projeto Semear</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/css/style.css">
</head>
<body>
    <input type="checkbox" id="bt_menu">
    <label for="bt_menu">&#9776;</label>

    
   <nav class="menu">
        
	  <ul>
    	 <li><a href="../inicio.php">Home</a></li>
          <li><a href="#">Coleta</a>
        	<ul>
            	<li><a href="../public/pontos.php">Pontos de Coleta</a>
                <li><a href="../public/agenda.php">Agenda de Coleta</a>
            </ul>
         </li>
         <li><a href="#">Informações</a>
        	<ul class="submenu">
            	<li><a href="../public/conserva.php">Instruções de Armazenamento</a>
                <li><a href="../public/colaboradores.php">Colaboadores e Contatos</a>
            </ul>
         </li>
      </ul>
        
            <div class="botao-entrar" onclick="window.location.href=''">
                Entrar
            </div>
        
            <div class="botao-cadastrar" onclick="window.location.href='../public/login.php'">
                Cadastrar
            </div>
    </nav>