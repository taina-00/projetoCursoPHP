<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  @if(count($users) == 0)
    <h3>Sem usuários</h3>      
  @else
  <table border="1">
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>RG</th>
      <th>Ações</th>
    </tr>
    @foreach ($alunos as $aluno)
        <tr>
          <td>{{$aluno->name}}</td>
          <td>{{$aluno->cpf}}</td>
          <td>{{$aluno->email}}</td>
          <td>{{$aluno->telefone}}</td>
          <td>{{$aluno->RG}}</td>
          <td>
            <form method="POST" action="/deletar_aluno/{{$aluno->id}}">
              @csrf
              {{ method_field("DELETE") }}
              <input type="submit" value="delete user">
            </form>

            <a href="/editar_aluno/{{$aluno->id}}">Editar</a>
          </td>
        </tr>
    @endforeach
  </table>       
  @endif

</body>
</html>