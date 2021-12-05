<!DOCTYPE html>

<?php 
    include('../config.php'); 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT cpf_condomino, email_condomino, senha_condomino, celular_condomino,telefone_condomino, 
                       bloco_condomino, apartamento_condomino, sindico, sub_sindico, cod_condominio 
                FROM 
                       condominos 
                WHERE 
                       cod_condomino = $id";

        if($result = pg_query($conexao, $sql)) {
            $row = pg_fetch_row($result);
            $cpf = $row[0];
            $email = $row[1];
            $senha = $row[2];
            $celular = $row[3];
            $telefone = $row[4];
            $bloco = $row[5];
            $apartamento = $row[6];
            $sindico = $row[7];
            $subsindico = $row[8];
            $condominio = $row[9];
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Editar Condominio</title>
</head>
<body>
    <header>
        <h1>Condominos Sol Nascente</h1>
    </header>

    <h3>Editar Condomino</h3>
    <br><br>
    <form action="editar_controller.php?id=<?php echo $id; ?>" method= "post">
        <label for="cpf">CPF*</label>
        <input type="text" name= "cpf" id= "cpf" value="<?php echo $cpf; ?>" required= "true" maxlength= "11" placeholder= "CPF">
        <br><br>
        <label for="email">E-mail*</label>
        <input type="email" name= "email" id= "email" value="<?php echo $email; ?>"  required= "true" maxlength= "320" placeholder= "E-mail">
        <br><br>
        <label for="senha">Senha*</label>
        <input type="password" name= "senha" id= "senha" value="<?php echo $senha; ?>" required= "true" maxlength= "8" placeholder= "Senha">
        <br><br>
        <label for="celular">Celular*</label>
        <input type="text" name= "celular" id= "celular" value="<?php echo $celular; ?>" required= "true" maxlength= "11" placeholder= "Celular">
        <br><br>
        <label for="telefone">Telefone*</label>
        <input type="text" name= "telefone" id= "telefone" value="<?php echo $telefone; ?>" required= "true" maxlength= "10" placeholder= "Telefone">
        <br><br>
        <label for="bloco">Bloco*</label>
        <input type="text" name= "bloco" id= "bloco" value="<?php echo $bloco; ?>" required= "true" maxlength= "1">
        <br><br>
        <label for="apartamento">Apartamento*</label>
        <input type="number" name= "apartamento" id= "apartamento" value="<?php echo $apartamento; ?>" required= "true">
        <br><br>
        <label for="condominio">Condominio*</label>
        <select name="condominio" id="condominio" required= "true">
            <?php
                $sql2 = "SELECT cod_condominio, nome_condominio FROM condominios ORDER BY nome_condominio;";
                if($result2 = pg_query($conexao, $sql2)) {
                    while ($row2 = pg_fetch_assoc($result2)) {
                        if($row2['cod_condominio'] == $condominio){
                            echo '<option value="'.$row2['cod_condominio'].'" selected> '.$row2['nome_condominio'].' </option>';
                        }else {
                            echo '<option value="'.$row2['cod_condominio'].'"> '.$row2['nome_condominio'].' </option>';
                        }
                    }
                }
            ?>
        </select>
        <br><br>
        <label for="sindico">Sindico*</label>
        <select name="sindico" id="sindico" required= "true">
            <option value="False" <?php echo $sindico =='f'?'selected':'';?>>Não</option>
            <option value="True" <?php echo $sindico =='t'?'selected':'';?>>Sim</option>
        </select>
        <br><br>
        <label for="subsindico">Subsindico*</label>
        <select name="subsindico" id="subsindico" required= "true">
            <option value="False" <?php echo $subsindico =='f'?'selected':'';?>>Não</option>
            <option value="True" <?php echo $subsindico =='t'?'selected':'';?>>Sim</option>
        </select>
        <br><br>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>