<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Último ID do Produto</title>
</head>
<body>
    <div id="resultado"></div>

    <script>
        // Faça uma solicitação AJAX para a rota
        fetch('/ultimo-id-produto')
            .then(response => response.json())
            .then(data => {
                // Manipule os dados recebidos
                document.getElementById('resultado').innerText = 'Último ID do Produto: ' + data.ultimo_id;
            })
            .catch(error => console.error('Erro ao obter o último ID do produto:', error));
    </script>
</body>
</html>
