<div>
    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <p>

        <label for="email">Email</label>
        <input type="text" name="email" id="email">
        
        <p>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone">
        <p>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">
        <p>

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <p>

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha">
        <p>

        <label for="status">Status</label>
        <input type="text" name="status" id="status">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Admin</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($admins)
                @foreach($admins as $admin)
                    <tr>
                        <td>
                            <h3>{{ $admin->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->telefone }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->cpf }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->usuario }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->senha }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->status }}</h3>
                        </td>
                        <td>
                        <form action="{{ route('admin.remove', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                        <form action="{{ route('admin.atualizar', ['id' => $admin->id]) }}" method="GET">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>

    <!-- @isset($admins)
            @foreach($admins as $admin)
                <h3>{{ $admin->nome }}</h3> <p>
                <h3>{{ $admin->email }}</h3> <p>
                <h3>{{ $admin->telefone }}</h3> <p>
                <h3>{{ $admin->cpf }}</h3> <p>
                <h3>{{ $admin->usuario }}</h3> <p>
                <h3>{{ $admin->senha }}</h3> <p>
                <h3>{{ $admin->status }}</h3> <hr>
            @endforeach
    @endisset -->
    
</div>
