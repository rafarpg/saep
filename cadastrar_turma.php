<?php
	include("conecta.php"); // Certifique-se de incluir o arquivo de conexão adequado

	// Atribuindo valores dos campos a variáveis.
	$nome_turma = $_POST['nome_turma']; 
    $idp= $_GET['']
	// Comando SQL para inserir um novo usuário
	$sql = $pdo->prepare("INSERT INTO turmas (nome_turma, professores_idprofessor ) VALUES (:nome_turma, )");
	$sql->bindValue(":nome_turma", $nome_turma);
	$sql->execute();

	// Redireciona para a página informada
	header("Location: pagina_principal.php");

?>