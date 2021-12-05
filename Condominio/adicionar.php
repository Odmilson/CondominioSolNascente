<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Adicionar Condominio</title>
</head>
<body>
    <marquee><h1>Condominios Sol Nascente</h1></marquee>
    <hr/>

    <h3>Adicionar Condominio</h3>
    <small>*campos obrigatorios</small>
    <br><br>
    <form action="adicionar_controller.php" method= "post">
        <label for="nome">Nome*</label>
        <input type="text" name= "nome" id= "nome" required= "true" maxlength= "50" placeholder= "Nome">
        <br><br>
        <label for="cnpj">CNPJ*</label>
        <input type="text" name= "cnpj" id= "cnpj" required= "true" maxlength= "14" placeholder= "CNPJ">
        <br><br>
        <label for="cep">CEP*</label>
        <input type="text" name= "cep" id= "cep" required= "true" maxlength= "8" placeholder= "CEP">
        <br><br>
        <label for="uf">UF*</label>
        <select name="uf" id="uf" required= "true">
            <option value="" disabled selected>Selecione...</option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="DF">Distrito Federal</option>
        </select>
        <br><br>
        <label for="cidade">Cidade*</label>
        <input type="text" name= "cidade" id= "cidade" required= "true" maxlength= "30" placeholder= "Cidade">
        <br><br>
        <label for="bairro">Bairro*</label>
        <input type="text" name= "bairro" id= "bairro" required= "true" maxlength= "50" placeholder= "Bairro">
        <br><br>
        <label for="logradouro">Logradouro*</label>
        <input type="text" name= "logradouro" id= "logradouro" required= "true" maxlength= "50" placeholder= "Logradouro">
        <br><br>
        <label for="numero">Numero*</label>
        <input type="number" name= "numero" id= "numero" required= "true" placeholder= "Numero">
        <br><br>
        <button type="button" onclick="location.href='../index.php'">Voltar</button>
        <button type="submit">Salvar</button>
    </form>

</body>
</html>