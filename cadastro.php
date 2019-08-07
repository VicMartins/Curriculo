<meta charset= 'utf-8'>

<?php

	$nm = $_POST['nome'];
	
	echo "Nome cadastrado: " . $nm;
	
	$nacionalidade = $_POST['nacionalidade'];
	echo "<br>";
	echo "Nacionalidade cadastrada: " . $nacionalidade;
	
	$estadoC = $_POST['estadoCivil'];
	echo "<br>";
	echo "Estado civil: " . $estadoC;
	
	$dtNas = $_POST['data'];
	echo "<br>";
	echo "Data de Nascimento: " . $dtNas;
	
	$telefone = $_POST['numerotel'];
	echo "<br>";
	echo "Telefone: " . $telefone;
	
	$endereco = $_POST['endereco'];
	echo "<br>";
	echo "Endereço: " . $endereco;
	
	$email = $_POST['email'];
	echo "<br>";
	echo "E-Mail: " . $email;
	
	$ingles = $_POST ["ingles"];
	$nivelIn = $_POST["inglestipo"];
	echo "<br>";
	echo "Inglês: " . $ingles . " " . $nivelIn;
	
	$espanhol = $_POST['espanhol'];
	$nivelEs = $_POST['espanholtipo'];
	echo "<br>";
	echo "Espanhol: " . $espanhol. " ". $nivelEs;
	
	$outrosC = $_POST ['outrosidi'];
	echo "<br>";
	echo "Outros cursos: " . $outrosC;
	
	$sexo = $_POST ['sexo'];
	echo "<br>";
	echo "Sexo: " . $sexo;
	
	$objetivos = $_POST ['textareaobj'];
	echo "<br>";
	echo "Objetivos: " . $objetivos;
	
	$comp = $_POST ['competencias'];
	echo "<br>";
	echo "Suas competências: " . $comp;
	
	$exp = $_POST ['experiencia'];
	echo "<br>";
	echo "Cursos: " . $exp;
	
	


?>