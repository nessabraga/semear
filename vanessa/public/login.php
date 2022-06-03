<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" sizes="32x32" href="../imagens/icone.png">        

<link rel="stylesheet" type="text/css" href="../public/assets/css/style9.css">
<head>
    

<title>Conecte-se</title>

</head>
<body>
<div>
      <div id="div1">
        <label>CONECTE-SE</label>        
        <br>
        <form method="POST" action="../login/verifica.php">
          <label for="email"></label> 
          <br>
          <input type="email" id="email" name="email" class="email" placeholder="email" ><br><br>    
            <label for="senha"></label>            
            <input type="password" id="senha"  name="senha" placeholder="senha " >
            <img src="../img/img.png/eye1.svg" alt="olho" id="olho" height="20px" style="position: relative; left: -8%;" >
           <input type="submit" value="Entrar" href= "../public/inicio.php"> <br>
           <a href="../public/inicio.php"> Entrar como visitante </a>
          </form>      
		  </div> 
		  
	<div id="div2">
	<label>CADASTRE-SE</label>
        <br><br>
    <form method="POST" action="cadastro.php">
            <label for="name"></label> 
            
            <input required type="text" id="name" name="name"  size="40" style="height: 25px;;" class="nome" placeholder="nome" ><br>           
            <label for="phone"></label>
            <input 15 type="tel" id="phone" name="phone" size="40" style="height: 25px;;" class="celular" placeholder="celular formato 51 99999-8888" pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" required><br>
          
          <label for="email"></label> 
          <input required type="email" id="email" name="email"  size="40" style="height: 25px;;" class="email" placeholder="email" >   <br>
        
            <label for="senha"> </label>
            
            <input required type="password" id="senha" size="40" style="height: 25px;;" class="senha" name="senha" placeholder="senha"><br>
            
        <label for="senha"> </label>
           
            <input required type="password" id="senha-confirm" size="40" style="height: 25px;;" class="senhaC" name="senhaC" placeholder="confirme sua senha">

       
        <label>
              <input required name ="cep" type="text" id="cep" placeholder="cep" size="40" style="height: 25px;;"  maxlength="9"
                 onblur="pesquisacep(this.value);" /></label>
          <label>
          <input required name="rua" type="text" id="rua" placeholder="rua"  size="40" style="height: 25px;;" /></label><br />
          <span class="lnr lnr-eye"></span>
          <label>
          <input required name="bairro" type="text" id="bairro" placeholder="bairro" size="40" style="height: 25px;;" ></label><br/>
          <label>
          <input required name="cidade" type="text" id="cidade" placeholder="cidade"  size="40" style="height: 25px;;" ></label><br />
          <label>
          <input required name="uf" type="text" id="uf" size="2"placeholder="estado" style="height: 25px;;" > </label>
          <input type="submit" value="Cadastrar" id="entrar" >
          
        </form>
                
        
		  
          
		  <div>

       
            <a href="cadastro.php"></a>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
            <script src="../assets/script.js"></script>
		  </body>
      
		  </html>