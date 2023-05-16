<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<style>
    *{
        margin: 0;
    }
    h1{
        margin: 30px;
    }
    h3{
        margin: 20px;
    }
    b {
        background-color: #ccc;
        padding: 5px;
        margin: 10px;
    }
    p{
        margin: 15px;
        font-size: 18px;
    }

    .get {
        color: green;
    }

    .del {
        color: red;
    }

    .post {
        color: yellow;
    }

    .put {
        color: purple;
    }
    .rota{
        width: 100vw;
    }
</style>

<body class="antialiased">
    <h1>Rotas da API:</h1>
    <hr>
    <div class="rota">
        <h3>Cupons</h3>
        <p><b class="get">GET: </b> http://127.0.0.1:8000/cupons (VEJA TODOS)</p>
        <p><b class="get">GET: </b> http://127.0.0.1:8000/cupons/ID (INSIRA UM ID PARA VISUALIZAR)</p>
        <p><b class="del">DELETE: </b> http://127.0.0.1:8000/cupons/3 (DELETAR POR ID)</p>
        <p><b class="post">POST: </b> http://127.0.0.1:8000/cupons (passe os parametros['codigo', 'desconto', 'validade'])</p>
        <p><b class="put">PUT: </b> http://127.0.0.1:8000/cupons (passe um dos novos parametros['codigo', 'desconto', 'validade'])</p>
    </div>

    <hr>
</body>

</html>