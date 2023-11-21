<?php
        include_once("conecta.php");
//session_start();
    $codigo = $_SESSION["codigo"];
        
        $comando = $pdo->prepare("SELECT idturma, nome_turma FROM turmas WHERE professores_idprofessor= ?;");
        $comando->execute([$codigo]);
        
        
        if ($comando->rowCount() >= 1) {
            $lista_turmas = $comando->fetchAll();
        } else {
            echo '';
        }
        
        unset($pdo);
        unset($comando);
        
        ?>