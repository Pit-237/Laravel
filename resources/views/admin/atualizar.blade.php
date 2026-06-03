<div>
    <form action="{{ route('admin.save') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $admin->id }}">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">Email</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">Telefone</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">CPF</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">usuario</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">Senha</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <label for="nome">Status</label>
        <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">

        <button type="submit">Salvar</button>
        @isset($success)
            <h1>{{ $success }}</h1>
        @endisset
    </form>
</div>
