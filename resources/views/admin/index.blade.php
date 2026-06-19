<div>
    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{old('nome')}}">
        <p>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('email') }}">
        <p>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{old('telefone')}}">
        <p>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{old('cpf')}}">
        <p>

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="{{old('usuario')}}">
        <p>

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="{{old('senha')}}">
        <p>

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ old('status') }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset

        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>

    <table border="1">
        <tr>
            <td>Nome do Admin</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>CPF</td>
            <td>Usuário</td>
            <td>Senha</td>
            <td>Status</td>
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
