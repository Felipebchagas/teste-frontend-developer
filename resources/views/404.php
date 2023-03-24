<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo URL_ASSET?>images/favicon.png" type="image/x-icon">
    <title>InteriorDesign - 404</title>

    <style>
        * {
           margin: 0;
           padding: 0;
           box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            color: #888;
            margin: 0;
        }

        .error-404 {
            width: 100%;
            height: 100vh;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            display: flex;
            flex-direction: column;
        }

        .container h1 {
            font-size: 50px;
            display: inline-block;
            padding-right: 12px;
        }

        .container a {
            background-color: #2BACFF;
            color: white;
            padding: 20px;
            font-weight: 700;
            text-decoration: none;
        }

    </style>

</head>

<body>
    <div class="error-404">
        <div class="container">
            <h1>Error 404</h1>
            <a href="<?php echo dirname('.') ?>">Voltar a Home</a>
        </div>
    </div>
</body>

</html>