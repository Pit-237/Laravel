<form action="{{ route('aluno.adicionar') }}" method="post">

@csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <button type="submit" color="primary">Salvar</button>
    
    @isset($sucesso)
    <h1>{{ $sucesso }}</h1>
    @endisset

</form>
