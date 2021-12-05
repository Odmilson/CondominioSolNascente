<!DOCTYPE html>

<?php include('../config.php'); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adicionar Condominio</title>
</head>
<body>
    <header>
        <h1>Condominios Sol Nascente</h1>
    </header>

    <h3>Adicionar Condomino</h3>
    <small>*campos obrigatorios</small>
    <br><br>
    <form action="adicionar_controller.php" method= "post">
        <label for="cpf">CPF*</label>
        <input type="text" name= "cpf" id= "cpf" required= "true" maxlength= "11" placeholder= "CPF">
        <br><br>
        <label for="email">E-mail*</label>
        <input type="email" name= "email" id= "email" required= "true" maxlength= "320" placeholder= "E-mail">
        <br><br>
        <label for="senha">Senha*</label>
        <input type="password" name= "senha" id= "senha" required= "true" maxlength= "8" placeholder= "Senha">
        <br><br>
        <label for="celular">Celular*</label>
        <input type="text" name= "celular" id= "celular" required= "true" maxlength= "11" placeholder= "Celular">
        <br><br>
        <label for="telefone">Telefone*</label>
        <input type="text" name= "telefone" id= "telefone" required= "true" maxlength= "10" placeholder= "Telefone">
        <br><br>
        <label for="bloco">Bloco*</label>
        <input type="text" name= "bloco" id= "bloco" required= "true" maxlength= "1">
        <br><br>
        <label for="apartamento">Apartamento*</label>
        <input type="number" name= "apartamento" id= "apartamento" required= "true">
        <br><br>
        <label for="condominio">Condominio*</label>
        <select name="condominio" id="condominio" required= "true">
            <option value="" disabled selected>Selecione...</option>
            <?php
                $sql = "SELECT cod_condominio, nome_condominio FROM condominios ORDER BY nome_condominio;";
                if($result = pg_query($conexao, $sql)) {
                    while ($row = pg_fetch_assoc($result)) {
                        echo '<option value="'.$row['cod_condominio'].'"> '.$row['nome_condominio'].' </option>';
                    }
                }
            ?>
        </select>
        <br><br>
        <label for="sindico">Sindico*</label>
        <select name="sindico" id="sindico" required= "true">
            <option value="FALSE">Não</option>
            <option value="TRUE">Sim</option>
        </select>
        <br><br>
        <label for="subsindico">Subsindico*</label>
        <select name="subsindico" id="subsindico" required= "true">
            <option value="FALSE">Não</option>
            <option value="TRUE">Sim</option>
        </select>
        <br><br>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>