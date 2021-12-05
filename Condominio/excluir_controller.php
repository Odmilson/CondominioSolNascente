<?php
    include('../config.php');

    if(!isset($_GET['id'])) {
        echo "Condominio não encontrado";
    } else {

        $id = $_GET['id'];

        $sql = "DELETE FROM condominios WHERE cod_condominio = $id;";

        if(pg_query($conexao, $sql)){
            echo "Condominio excluido com sucesso";
        }else {
            echo "Erro ao excluir condominio";
        }

        pg_close($conexao);

    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>