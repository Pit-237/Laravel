<div>
    <form action="{{ route('admin.add') }}" method="post">
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

    @isset($admins)
            @foreach($admins as $admin)
                <h3>{{ $admin->nome }}</h3> <p>
                <h3>{{ $admin->data_inicio }}</h3> <p>
                <h3>{{ $admin->data_fim }}</h3> <hr>
            @endforeach
    @endisset
    
</div>
