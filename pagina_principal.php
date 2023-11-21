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
    flex-direction: row;
    justify-items: space-between;
    text-decoration: none;
    color: white;
    font-size: 15px;    
}
.botao{
    width: 80px;
    height: 30px;
    background-color:rgb(0, 153, 255);
    color: #ffff;

}
</style>
<body>
    <main>
    <div class="cabecalho">
    <a href="pagina_principal.php" class="nome_p">Nome do Professor</a>
    <a href="index2.html" class="sair">SAIR</a>
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

            </tbody>
        </table>

    </div>
    </main>
</body>
</html>