<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title>
    <link rel="stylesheet" href="cadastro1.css">
</head>
<body>
    <div class="container">
        <h1>Cadastro de Pessoa</h1>

        <form action="cadastrarExe.php" method="post">
            <fieldset>
                <legend>Dados da Pessoa</legend>
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome">
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div>
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha">
                </div>
                <div>   
                    <input type="checkbox" id="ativo" name="ativo" value="1" checked />
                    <label for="ativo">Ativo</label>
                </div>
                <div>
                    <label for="cidade">Cidade</label>
                    <select name="cidade" id="cidade">
                    <!--<?php
                        include('includes/conexao.php');
                        $sql = "SELECT * FROM cidade";
                        $result = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value='".$row['id']."'>".$row['nome']."/".$row['estado']."</option>";
                        }
                    ?>-->
                    </select>
                </div>
                <div>
                    <button type="submit">Cadastrar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>