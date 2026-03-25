<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estoque</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #0d47a1;
            margin: 0;
            color: #fff;
            text-align: center;
        }

        /* NAVBAR */
        .navbar {
            background-color: #003c8f;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 30px;
            border-bottom: 4px solid #ffcc00;
        }

        .navbar img {
            height: 40px;
        }

        .navbar h2 {
            margin: 0;
            color: #ffcc00;
            letter-spacing: 2px;
        }

        .container {
            padding: 20px;
        }

        h1 {
            color: #ffcc00;
        }

        .sonic-img {
            margin: 20px 0;
        }

        .sonic-img img {
            width: 150px;
            transition: transform 0.3s;
        }

        .sonic-img img:hover {
            transform: scale(1.1) rotate(-5deg);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1565c0;
            box-shadow: 0 4px 10px rgba(0,0,0,0.4);
        }

        th {
            background-color: #003c8f;
            color: #ffcc00;
            padding: 12px;
            text-transform: uppercase;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }

        tr:hover {
            background-color: #1976d2;
        }

        .sonic {
            background-color: #1e88e5 !important;
            font-weight: bold;
        }

        button {
            border: none;
            padding: 8px 12px;
            margin: 2px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-add {
            background-color: #ffcc00;
            color: #000;
        }

        .btn-remove {
            background-color: #e53935;
            color: #fff;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/SEGA_logo.svg/1280px-SEGA_logo.svg.png" alt="SEGA Logo">
    <h2>ESTOQUE</h2>
</div>

<div class="container">

    <h1>🎮 Controle de Estoque</h1>

    <div class="sonic-img">
        <img src="https://i.redd.it/rank-every-version-of-sonic-from-weakest-to-strongest-v0-c85ylq7pp3yb1.png?width=1273&format=png&auto=webp&s=2c094a7b25dcced93433514455c060c5c391fd07" alt="Sonic">
    </div>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>

        @foreach($produtos as $produto)

        <tr class="{{ stripos($produto['nome'], 'sonic') !== false ? 'sonic' : '' }}">
            <td>{{ $produto['id'] }}</td>
            <td>{{ $produto['nome'] }}</td>
            <td>R$ {{ number_format($produto['preco'], 2, ',', '.') }}</td>
            <td>
                <button class="btn-remove">Remover</button>
                <button class="btn-add">Adicionar</button>
            </td>
        </tr>

        @endforeach
    </table>

</div>

</body>
</html>