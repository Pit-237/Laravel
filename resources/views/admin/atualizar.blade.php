<div>
    <form action="{{ route('admin.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $admin->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}"> <p>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{ $admin->email }}"><p>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" value="{{ $admin->telefone }}"><p>

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf" value="{{ $admin->cpf }}"><p>

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="{{ $admin->usuario }}"><p>

        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" value="{{ $admin->senha }}"><p>

        <label for="status">Status</label>
        <input type="text" name="status" id="status" value="{{ $admin->status }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
