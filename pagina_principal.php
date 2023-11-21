<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OI</title>
</head>
<style>
*{
    margin:0;
}
.cabecalho{
    width: 100%;
    height: 15vh;
    background-color:rgb(0, 153, 255);
    display: flex;
    color: white;
    font-size: 15px;    
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    align-content: center;
    justify-items: center;
}
.botao{
    width: 120px;
    height: 40px;
    background-color:rgb(0, 153, 255);
    color: #ffff;
    border: solid 1px;
    border-color: black;
    position: absolute;
    justify-items: center;
    text-align: center;
    text-decoration: none;
    top: 200px;
    right: 100px;
}
.nome_p{
    color: white;
    font-size: 30px;
    text-decoration: none;
    left: 30px;
}
.sair{
    color: white;
    font-size: 30px;
    position: absolute;
    right: 30px;
    text-decoration: none;
}
.container{
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
    justify-items: center;
    margin: 50px;
}
</style>
<body>
    <main>
    <div class="cabecalho">
    <a href="pagina_principal.php" class="nome_p">Nome do Professor : <?php session_start(); echo $_SESSION["nome"];?></a>
    <a href="logout.php" class="sair">SAIR</a>
    </div>
    <div class="container">
        <a href="cadastrar_turmas.html" class="botao"> CADASTRAR TURMA </a>
        <table>
            <thead>
                <tr>
                    <th> Código </th>
                    <th> Nome </th>
                    <th colspan="2"> Ações </th>
                </tr>
            </thead>
            <tbody>
            <?php
                            include_once("listar_turmas.php");
                        	if(!empty($lista_turmas)){
                            	foreach($lista_turmas as $linha){
                                	echo ' <tr>
                                        	<td> '.$linha['idturma'] .' </td>
                                        	<td> '.$linha['nome_turma'] .' </td>
                                        	<td> <a href="excluir_turma.php?codigo_t='.$linha['idturma'].'"> Excluir <a> </td>
                                        	<td> <a href="visualizar_turma.php?codigo_t='.$linha['idturma'].'"> Visualizar <a> </td>
                                    	</tr>
                                	';
                            	}
                        	}
                    	?>

            </tbody>
        </table>
    </div>
    </main>
</body>
</html>