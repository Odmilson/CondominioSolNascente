<?php
    include('../config.php');

    if(!isset($_GET['id'])) {
        echo "Condominio não encontrado";
    } else {

        $id = $_GET['id'];

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

            $sql = "UPDATE condominios SET nome_condominio = '$nome', cnpj_condominio = '$cnpj', cep_condominio = '$cep',
                                           estado_condominio = '$uf', cidade_condominio = '$cidade', bairro_condominio = '$bairro', 
                                           logradouro_condominio = '$logradouro', numero_condominio = '$numero'
                    WHERE
                           cod_condominio = $id;";

            if(pg_query($conexao, $sql)){
                echo "Condominio editado com sucesso";
            }else {
                echo "Erro ao editar condominio";
            }

            pg_close($conexao);
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='editar.php?id=<?php echo $id; ?>'">Voltar</button>