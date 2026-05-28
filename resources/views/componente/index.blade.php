<div>
    <form action="{{ route('componente.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <p>

        <label for="data_inicio">Data de Início</label>
        <input type="text" name="data_inicio" id="data_inicio">
        
        <p>

        <label for="data_fim">Data Fim</label>
        <input type="text" name="data_fim" id="data_fim">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    @isset($componentes)
            @foreach($componentes as $componente)
                <h3>{{ $componente->nome }}</h3> <p>
                <h3>{{ $componente->data_inicio }}</h3> <p>
                <h3>{{ $componente->data_fim }}</h3> <hr>
            @endforeach
    @endisset
    
</div>
