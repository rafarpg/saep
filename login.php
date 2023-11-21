<?php

include("conecta.php");

$email = $_POST['email'];
$senha = $_POST['senha'];

$comando = $pdo->prepare("SELECT * FROM professores WHERE login = '$email' AND senha = '$senha';");
    
$comando->execute();

    if($comando->rowCount() == 1){
        $usuario = $comando->fetch();
        
        //usuário autenticado!
        session_start();
        $_SESSION["nome"] = $usuario['nome_professor'];
        $_SESSION["conectado"] = "true";
        header("location:pagina_principal.php");
    }else{
        //e-mail ou senha incorretos.
        header("location:login.php");
    }
?>