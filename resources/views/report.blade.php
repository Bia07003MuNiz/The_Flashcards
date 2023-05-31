<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <style>
        html {
            font-family: 'Arial';
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background-color: #337ab7;
            color: #fff;
            font-weight: bold;
            text-align: left;
            padding: 8px;
        }
        td {
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #cce0ff;
        }
        tr:nth-child(odd) {
            background-color: #b3d1ff;
        }
    </style>
</head>
<body>
<h1>Report</h1>

<table>
    <tr>
        <th style="width: 15%;">ID</th>
        <th style="width: 15%;">Nome</th>
        <th style="width: 15%;">Código</th>
        <th style="width: 45%;">Informações</th>
        <th style="width: 20%;">Valor</th>
    </tr>
    @foreach ($produtos as $produto)
        <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->codigo }}</td>
            <td>{{ $produto->informacoes }}</td>
            <td>R$ {{ number_format($produto->valor, 2) }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
