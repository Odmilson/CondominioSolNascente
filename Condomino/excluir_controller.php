<?php
    include('../config.php');

    if(!isset($_GET['id'])) {
        echo "Condomino não encontrado";
    } else {

        $id = $_GET['id'];

        $sql = "DELETE FROM condominos WHERE cod_condomino = $id;";

        if(pg_query($conexao, $sql)){
            echo "Condomino excluido com sucesso";
        }else {
            echo "Erro ao excluir condomino";
        }

        pg_close($conexao);

    }
?>
<br/><br/>
<button type="button" onclick="location.href='../index.php'">Voltar</button>