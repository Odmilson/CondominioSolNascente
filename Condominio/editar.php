<!DOCTYPE html>

<?php 
    include('../config.php'); 
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT nome_condominio, cnpj_condominio, cep_condominio, estado_condominio, cidade_condominio, 
                       bairro_condominio, logradouro_condominio, numero_condominio 
                FROM 
                       condominios 
                WHERE 
                       cod_condominio = $id";

        if($result = pg_query($conexao, $sql)) {
            $row = pg_fetch_row($result);
            $nome = $row[0];
            $cnpj = $row[1];
            $cep = $row[2];
            $uf = $row[3];
            $cidade = $row[4];
            $bairro = $row[5];
            $logradouro = $row[6];
            $numero = $row[7];
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
    <marquee><h1>Condominios Sol Nascente</h1></marquee>
    <hr/>

    <h3>Editar Condominio</h3>
    <br><br>
    <form action="editar_controller.php?id=<?php echo $id; ?>" method= "post">
        <label for="nome">Nome*</label>
        <input type="text" name= "nome" id= "nome" value="<?php echo $nome; ?>" required= "true" maxlength= "50" placeholder= "Nome">
        <br><br>
        <label for="cnpj">CNPJ*</label>
        <input type="text" name= "cnpj" id= "cnpj" value="<?php echo $cnpj; ?>"  required= "true" maxlength= "14" placeholder= "CNPJ">
        <br><br>
        <label for="cep">CEP*</label>
        <input type="text" name= "cep" id= "cep" value="<?php echo $cep; ?>" required= "true" maxlength= "8" placeholder= "CEP">
        <br><br>
        <label for="uf">UF*</label>
        <select name="uf" id="uf" required= "true">
            <option value="AC" <?php echo $uf =='AC'?'selected':'';?>>Acre</option>
            <option value="AL" <?php echo $uf =='AL'?'selected':'';?>>Alagoas</option>
            <option value="AP" <?php echo $uf =='AP'?'selected':'';?>>Amapá</option>
            <option value="AM" <?php echo $uf =='AM'?'selected':'';?>>Amazonas</option>
            <option value="BA" <?php echo $uf =='BA'?'selected':'';?>>Bahia</option>
            <option value="CE" <?php echo $uf =='CE'?'selected':'';?>>Ceará</option>
            <option value="ES" <?php echo $uf =='ES'?'selected':'';?>>Espírito Santo</option>
            <option value="GO" <?php echo $uf =='GO'?'selected':'';?>>Goiás</option>
            <option value="MA" <?php echo $uf =='MA'?'selected':'';?>>Maranhão</option>
            <option value="MT" <?php echo $uf =='MT'?'selected':'';?>>Mato Grosso</option>
            <option value="MS" <?php echo $uf =='MS'?'selected':'';?>>Mato Grosso do Sul</option>
            <option value="MG" <?php echo $uf =='MG'?'selected':'';?>>Minas Gerais</option>
            <option value="PA" <?php echo $uf =='PA'?'selected':'';?>>Pará</option>
            <option value="PB" <?php echo $uf =='PB'?'selected':'';?>>Paraíba</option>
            <option value="PR" <?php echo $uf =='PR'?'selected':'';?>>Paraná</option>
            <option value="PE" <?php echo $uf =='PE'?'selected':'';?>>Pernambuco</option>
            <option value="PI" <?php echo $uf =='PI'?'selected':'';?>>Piauí</option>
            <option value="RJ" <?php echo $uf =='RJ'?'selected':'';?>>Rio de Janeiro</option>
            <option value="RN" <?php echo $uf =='RN'?'selected':'';?>>Rio Grande do Norte</option>
            <option value="RS" <?php echo $uf =='RS'?'selected':'';?>>Rio Grande do Sul</option>
            <option value="RO" <?php echo $uf =='RO'?'selected':'';?>>Rondônia</option>
            <option value="RR" <?php echo $uf =='RR'?'selected':'';?>>Roraima</option>
            <option value="SC" <?php echo $uf =='SC'?'selected':'';?>>Santa Catarina</option>
            <option value="SP" <?php echo $uf =='SP'?'selected':'';?>>São Paulo</option>
            <option value="SE" <?php echo $uf =='SE'?'selected':'';?>>Sergipe</option>
            <option value="TO" <?php echo $uf =='TO'?'selected':'';?>>Tocantins</option>
            <option value="DF" <?php echo $uf =='DF'?'selected':'';?>>Distrito Federal</option>
        </select>
        <br><br>
        <label for="cidade">Cidade*</label>
        <input type="text" name= "cidade" id= "cidade" value="<?php echo $cidade; ?>" required= "true" maxlength= "30" placeholder= "Cidade">
        <br><br>
        <label for="bairro">Bairro*</label>
        <input type="text" name= "bairro" id= "bairro" value="<?php echo $bairro; ?>" required= "true" maxlength= "50" placeholder= "Bairro">
        <br><br>
        <label for="logradouro">Logradouro*</label>
        <input type="text" name= "logradouro" id= "logradouro" value="<?php echo $logradouro; ?>" required= "true" maxlength= "50" placeholder= "Logradouro">
        <br><br>
        <label for="numero">Numero*</label>
        <input type="number" name= "numero" id= "numero" value="<?php echo $numero; ?>" required= "true" placeholder= "Numero">
        <br><br>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>