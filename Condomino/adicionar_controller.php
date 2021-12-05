<?php
    include('../config.php');

    if ($_POST['cpf'] == "") {
        echo "Por favor, informe o CPF do condomino";
    } else if ($_POST['email'] == "") {
        echo "Por favor, informe o e-mail do condomino";
    } else if ($_POST['senha'] == "") {
        echo "Por favor, informe a senha do condomino";
    } else if ($_POST['celular'] == "") {
        echo "Por favor, informe o celular do condomino";
    } else if ($_POST['telefone'] == "") {
        echo "Por favor, informe o telefone do condomino";
    } else if ($_POST['bloco'] == "") {
        echo "Por favor, informe o bloco do condomino";
    } else if ($_POST['apartamento'] == "") {
        echo "Por favor, informe o apartamento do condomino";
    } else if ($_POST['condominio'] == "") {
        echo "Por favor, informe o condominio do condomino";
    } else {
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $celular = $_POST['celular'];
        $telefone = $_POST['telefone'];
        $bloco = $_POST['bloco'];
        $apartamento = $_POST['apartamento'];
        $condominio = $_POST['condominio'];
        $sindico = $_POST['sindico'];
        $subsindico = $_POST['subsindico'];

        $sql = "INSERT INTO condominos (cpf_condomino, email_condomino, senha_condomino, celular_condomino,telefone_condomino, 
                                        bloco_condomino, apartamento_condomino, sindico, sub_sindico, cod_condominio)
                VALUES 
                                        ('$cpf', '$email', '$senha', '$celular', '$telefone', '$bloco', '$apartamento', '$sindico', '$subsindico', '$condominio')";

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