<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO</title>
</head>

<body>
    <h1>Formulário</h1>
    <form action="foo.php" method="post">
        Nome:<input type="text" name="nome"><br>
        Usuário:<input type="text" name="user"><br>
        E-mail:<input type="email" name="email"><br>
        CPF:<input type="number" name="cpf"><br>
        Data de nascimento:<input type="date" name="data"><br>
        Sexo: <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>
        </select>
        <br>
            Endereço:<input type="text" name="end"><br>
            <input type="submit" value="ENVIAR">
    </form>

</body>

</html>