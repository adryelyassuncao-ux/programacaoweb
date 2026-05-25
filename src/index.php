<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'exercicios.php';

        $alunos = ["Ana", "Bruno", "ADryelyu", "Kyara" ,"Kayke"];

        echo "<h2> Exercicio 9 </h2>";
        echo "Média Situação: " . var_dump(sortearDuplas($alunos)); 


    ?>
</body>
</html>