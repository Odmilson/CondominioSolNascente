<?php
    include('../config.php');

    if($_POST['nome'] == "") {
        echo "Por favor, informe o nome do condominio";
    } else if ($_POST['cnpj'] == "") {
        echo "Por favor, informe o CNPJ do condominio";
    } else if ($_POST['cep'] == "") {
        echo "Por favor, informe o CEP do condominio";
    } else if ($_POST['uf'] == "") {
        echo "Por favor, informe a UF do condominio";
    } else if ($_POST['cidade'] == "") {
        echo "Por favor, informe a cidade do condominio";
    } else if ($_POST['bairro'] == "") {
        echo "Por favor, informe o bairro do condominio";
    } else if ($_POST['logradouro'] == "") {
        echo "Por favor, informe o logradouro do condominio";
    } else if ($_POST['numero'] == "") {
        echo "Por favor, informe o numero do condominio";
    } else {
        $nome = $_POST['nome'];
        $cnpj = $_POST['cnpj'];
        $cep = $_POST['cep'];
        $uf = $_POST['uf'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];

        $sql = "INSERT INTO condominios (nome_condominio, cnpj_condominio, cep_condominio, estado_condominio, cidade_condominio,
                                         bairro_condominio, logradouro_condominio, numero_condominio) 
        VALUES 
                                        ('$nome', '$cnpj', '$cep', '$uf', '$cidade', '$bairro', '$logradouro', '$numero')";

        if(pg_query($conexao, $sql)){
            echo "Condominio adicionado com sucesso";
        }else {
            echo "Erro ao adicionar condominio";
        }

        pg_close($conexao);
    }
?>
<br/><br/>
<button type="button" onclick="location.href='adicionar.php'">Voltar</button>