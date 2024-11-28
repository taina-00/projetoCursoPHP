<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/index.css">
</head>
<body>
@if(count($cursos) == 0)
    <h3>Sem cursos</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome do curso:</th>
      <th>Descrição:</th>
      <th>Duração:</th>
    </tr>
    @foreach ($cursos as $curso)
        <tr>
          <td>{{$curso->nome}}</td>
          <td>{{$curso->descricao}}</td>
          <td>{{$curso->duracao}}</td>
          <td>
          <form method="POST" action="/deletar_curso/{{$curso->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete curso">
            </form>
          
          
            </form>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
</body>
</html>