<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
    @foreach ($cursos as $curso)

    <div> ID {{ $curso->id }}</div>
    <div>Nome: {{$curso-> user -> name}}</div>
    <div>total: {{$curso->total()}}</div>
    
    @foreach($curso-> items as $item) 
    {{$item -> nome}}
    {{$item -> pivot -> quantidade}}
    

    <br>
    @endforeach
    <hr>
    @endforeach
</body>
</html>