<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Cadastrar Cursos</h1>
<form action="/criar_curso" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">

        <label for="descricao">Descrição</label>
        <input type="text" name="descricao">

        <label for="duracao">Duração</label>
        <input type="text" name="duracao">


        <input type="submit" value="Salvar">
    </form>
</body>
</html>