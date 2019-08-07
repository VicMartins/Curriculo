<!--VICTÓRIA MARTINS PEREIRA 2DS2 -->
<html>
<head>
<meta charset="utf-8">
<title> Formulário de Curriculo</title>
</head>
<style>
input[type=text]{
	
	border:1px solid darkblue;
	border-radius:10px;
	padding:10px;
	font-size:18px;
	width:50%;
	font-weight:bold;
}
input[type=email]{
	
	border:1px solid darkblue;
	border-radius:10px;
	padding:10px;
	font-size:18px;
	width:50%;
	font-weight:bold;
}
input[type=password]{
	
	border:1px solid darkblue;
	border-radius:10px;
	padding:10px;
	font-size:18px;
	width:50%;
	font-weight:bold;
}
input[type=date]{
	
	border:1px solid darkblue;
	border-radius:10px;
	padding:10px;
	font-size:18px;
	width:50%;
	font-weight:bold;
}
input[type=number]{
	
	border:1px solid darkblue;
	border-radius:10px;
	padding:10px;
	font-size:18px;
	width:50%;
	font-weight:bold;
}
select{
	border-radius:10px;
	width:20%;
	height:40px;
	font-size:20px;
}
p{
	font-size:25px;
}
h1{
	font-size:20px;
	bold:none;
}
textarea{
	border-radius:10px;
	resize:none;
	font-size:20px;
	width:70%
}
#cur{
	font-size:30px;
}
.container{
	margin-left:10%;
}
input[type=submit]{
	margin:10px;
	background:lightgreen;
	border:none;
	width:100px;
	height:50px;
	color:black;
	border-radius:10px;
	font-size:20px;
	margin-left:40%;
	
}
input[type=submit]:focus{
	color:white;
}
input[type=submit]:hover{
	color:white;
}


</style>
 
 <body>
 
   <form action="cadastro.php" method="POST">
	<div class='centro' style='text-align:center;'>
	<h1 id="cur">Currículo</h1>
	
	</div>

	 <div class="container">
	<hr>	
	<p> Nome: </p> <input type="text" name="nome" placeholder="ex:Luiz Augusto"><br>
	<p>Nacionalidade: </p> <input type="text" name="nacionalidade" placeholder="ex:Brasileiro"><br>
	<p>Estado Civil: </p> <select name="estadoCivil">
					<option value="Casado">Casado</option>
					<option value="Solteiro">Solteiro</option>
					<option value="Viuvo">Viúvo</option>
					<option value="Separado">Separado</option>
					</select><br>
					</p>
	<p>Data de nascimento:</p> <input type="date" name="data"><br>
	
	<p>Número de contato:</p> <input type="number" name="numerotel" placeholder="(13)00000-0000"><br>
	
	<p>Endereço:</p> <input type="text" name="endereco" placeholder="rua:Girassol"><br>
	
	<p>E-mail: </p><input type="email" name="email" placeholder="ex:luiz@gmail.com"><br>
	
	<p>Senha: </p><input type="password" name="senha"></p><br>
	
	<h1>Idiomas: Inglês </h1><input type="checkbox" name="ingles" value="ingles">
	                <select name="inglestipo">
				    <option value="Basico">Básico</option>
					<option value="Intermediário">Intermediário</option>
					<option value="Avançado">Avançado</option>
					</select><br>
					
	        <h1> Espanhol</h1><input type="checkbox" name="espanhol"value="espanhol">
			        <select name="espanholtipo">
					<option value="Basico">Básico</option>
					<option value="Intermediario">Intermediário</option>
					<option value="Avançado">Avançado</option>
					</select><br><br>
					
	         
			 
	<p>Outros:</p> <br><textarea name="outrosidi" placeholder="Outros idiomas" rows="5" cols="30">
              </textarea>										
    </p><br>
			 
	<p>Sexo:</p> <p>M<input type="radio" name="sexo" value="masculino">
		     F<input type="radio" name="sexo" value="feminino"></p><br>
		 
		 <hr>
    <p>Objetivos :</p> <br><textarea name="textareaobj" rows="10" cols="30">  </textarea>										
      <br>
	
					
	<p>Competências Acadêmicas:</p> <br><textarea name="competencias" rows="10" cols="30">
              </textarea>										
      <br>
	  
	<p>Experiências Profissionais:</p> <br><textarea name="experiencia" rows="10" cols="30">
              </textarea>										
      <br>
	
	  
	  <input type="submit"  value="Enviar">
	
	  </form>
   
    </div>
	
	</body>
</html>
