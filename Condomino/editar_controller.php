<?php
    include('../config.php');

    if(!isset($_GET['id'])) {
        echo "Condomino não encontrado";
    } else {

        $id = $_GET['id'];

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

            $sql = "UPDATE condominos SET cpf_condomino = '$cpf', email_condomino = '$email', senha_condomino = '$senha', 
                                          celular_condomino = '$celular',telefone_condomino = '$telefone', bloco_condomino = '$bloco', 
                                          apartamento_condomino = '$apartamento', sindico = '$sindico', sub_sindico = '$subsindico', cod_condominio = '$condominio'
                    WHERE
                           cod_condomino = $id;";

            if(pg_query($conexao, $sql)){
                echo "Condomino editado com sucesso";
            }else {
                echo "Erro ao editar condomino";
            }

            pg_close($conexao);
        }
    }
?>
<br/><br/>
<button type="button" onclick="location.href='editar.php?id=<?php echo $id; ?>'">Voltar</button>