<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/criar_usuario" method="post">
        @csrf
        <label for="name">Nome</label>
        <input type="text" name="name">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf">

        <label for="email">Email</label>
        <input type="text" name="email">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone">

        <label for="rg">RG</label>
        <input type="text" name="rg">

        <input type="submit" value="Salvar">
    </form>
</body>
</html>