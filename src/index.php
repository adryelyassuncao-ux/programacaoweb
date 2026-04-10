<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .container{
            max-width: 1200px;
            margin: 0 auto;
        }
        .imagens{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: center;
        }
        figure{
            width: 300px;
            background-color: #d6d4d4;
            border: solid 1px #1a1919;
            border-radius: 5px;
            display: flex;
            flex-direction: column;
            img{
                margin: 15px auto;
                width: 90%;
                border-radius: 10px;
            }
            figcaption{
                text-align: center;
                font-size: 34px;
            }
        }
    </style>
</head>
<body>

 <div class="container">
        <div class="imagens">
            <?php
                include 'lista_produtos.php'; //require 
                foreach ($produtos as $item) {
                    echo '
                        <div class="card" style="width: 18rem;">
                        <img src="' . $item["Imagem"] . '" class="card-img-top" alt="' . $item["Nome"] . '">
                        <div class="card-body">
                        <h5 class="card-title">' . $item["Nome"] . '</h5>
                        <p class="card-text">' . $item["Descrição"] . '</p>
                        <p><strong>' . $item["Valor"] . '</strong></p>
                        <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                        </div>
                    ';
                }
            ?>
        </div>
    </div>
</body>
</html>