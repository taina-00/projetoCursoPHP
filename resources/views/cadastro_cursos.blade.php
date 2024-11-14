<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
          <td>{{$cursos->nome}}</td>
          <td>{{$cursos->descricao}}</td>
          <td>{{$cursos->duracao}}</td>
          <td>
            <form method="POST" action="/deletar_curso/{{$cursos->nome}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete curso">
            </form>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif
</body>
</html>