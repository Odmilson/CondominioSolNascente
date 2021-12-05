<!DOCTYPE html>
<?php include('config.php'); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condominios Sol Nascentes</title>
</head>
<body>
    <marquee><h1>Condominios Sol Nascente</h1></marquee>
    <hr/>
    <h3>Condominios</h3>
    <button onclick="location.href='Condominio/adicionar.php'">Adicionar</button>
    <br><br>
    <table border = "1px">
        <tr>
            <th>Nome</th>
            <th>CNPJ</th>
            <th>CEP</th>
            <th>UF</th>
            <th>Cidade</th>
            <th>Bairro</th>
            <th>Logradouro</th>
            <th>Numero</th>
            <th>Opções</th>
        </tr>
        <?php 
            $sql = "SELECT * FROM condominios ORDER BY nome_condominio;";
            if($result = pg_query($conexao, $sql)) {
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>" . $row['nome_condominio'] . "</td>";
                        echo "<td>" . $row['cnpj_condominio'] . "</td>";
                        echo "<td>" . $row['cep_condominio'] . "</td>";
                        echo "<td>" . $row['estado_condominio'] . "</td>";
                        echo "<td>" . $row['cidade_condominio'] . "</td>";
                        echo "<td>" . $row['bairro_condominio'] . "</td>";
                        echo "<td>" . $row['logradouro_condominio'] . "</td>";
                        echo "<td>" . $row['numero_condominio'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='Condominio/editar.php?id=" . $row['cod_condominio'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='Condominio/excluir_controller.php?id=" . $row['cod_condominio'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                }
            }
        ?>
    </table>
    <br><br>
    <hr/>
    <h3>Condominos</h3>
    <button onclick="location.href='Condomino/adicionar.php'">Adicionar</button>
    <br><br>
    <table border = "1px">
        <tr>
            <th>CPF</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>Celular</th>
            <th>Telefone</th>
            <th>Bloco</th>
            <th>Apartamento</th>
            <th>Condominio</th>
            <th>Sindico</th>
            <th>Subsindico</th>
            <th>Opções</th>
        </tr>
        <?php 
            $sql = "SELECT c.*, i.nome_condominio FROM condominos c JOIN condominios i ON i.cod_condominio = c.cod_condominio;";
            if($result = pg_query($conexao, $sql)) {
                while ($row = pg_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td>" . $row['cpf_condomino'] . "</td>";
                        echo "<td>" . $row['email_condomino'] . "</td>";
                        echo "<td>" . $row['senha_condomino'] . "</td>";
                        echo "<td>" . $row['celular_condomino'] . "</td>";
                        echo "<td>" . $row['telefone_condomino'] . "</td>";
                        echo "<td>" . $row['bloco_condomino'] . "</td>";
                        echo "<td>" . $row['apartamento_condomino'] . "</td>";
                        echo "<td>" . $row['nome_condominio'] . "</td>";
                        echo "<td>" . $row['sindico'] . "</td>";
                        echo "<td>" . $row['sub_sindico'] . "</td>";
                        echo "<td>";
                        echo "<button type=\"button\" onclick=\"location.href='Condomino/editar.php?id=" . $row['cod_condomino'] . "'\">Editar</button>";
                        echo "<button type=\"button\" onclick=\"location.href='Condomino/excluir_controller.php?id=" . $row['cod_condomino'] . "'\">Excluir</button>";
                        echo "</td>";
                        echo "<tr>";
                }
            }
        ?>
    </table>
</body>
</html>