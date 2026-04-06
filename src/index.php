<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                include 'dados_imagens.php'; //require 
                foreach ($imagens as $key => $value) {
                    echo "
                        <figure>
                            <img src='{$value}'>
                            <figcaption>{$key}</figcaption>
                        </figure>
                    ";
                }
            ?>
        </div>
    </div>
</body>
</html>