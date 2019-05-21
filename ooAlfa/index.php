<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <form action="addUser.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="email">
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha">
        <br>
        <label for="confirma_senha">Confirme sua senha:</label>
        <input type="password" name="confirma_senha">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>