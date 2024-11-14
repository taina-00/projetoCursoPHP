<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar alunos</title>
</head>
<body>
  <div class="cursos_alunos">

    <form action="/cadastrar_cursos_alunos" method="post">
      @csrf
      <label for="aluno">Aluno:</label>
      <select name="aluno" id="aluno">
        @foreach($alunos as $aluno)
          <option value="{{$aluno->id}}">{{$aluno->name}}</option>  
        @endforeach
      </select>
      <ul>
        @foreach($cursos as $curso)
          <li>
              <span>{{ $curso->nome }} - ${{ $curso->duracao }}</span>
              <input type="text" name="items[{{ $curso->id }}]" min="0" value="0">
          </li>
        @endforeach
    </ul>

      <button type="submit">Cadastrar</button>
    </form>
  </div>
</body>
</html>
