<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require ('./functions.php');
        
        // echo '<h3>Soma v1</h3>';
        // echo "<p style='color:purple;'>Soma:" . somar_v1() ."</p>";
        // echo '<hr/>';

        // echo '<h3>Soma v2</h3>';
        // somar_v2();
        // echo '<hr/>';

        // echo '<h3>Soma v3</h3>';
        // echo '<p style="color:purple;">Soma: ' . somar_v3(10, 10) . '</p>';
        // echo '<hr/>';

        // echo '<h3>Soma v4</h3>';
        // echo '<p style="color:purple;">Soma: ' . somar_v4(10, 10) . '</p>';
        // echo '<hr/>';

        // echo '<h1 style="font-size: 100px">' . nomeCompleto('arroz', 'coxinha')  . '</h1>';
        // echo '<p>' . opcaoDeEmail('arroz', 'coxinha') . '</p>';

        // area(10, 20, 'exibirDadosRetangulo');
        // area(10, 10, 'exibirDadoCubo');
    
        echo "Resultado: " . somaDosValores([1,2,3,4,5,6,7,8,9,0], 'impares');
        echo '<br>';
        echo "Resultado: " . somaDosValores([1,2,3,4,5,6,7,8,9,0], 'pares');
        echo '<br>';
        echo "Resultado: " . somaDosValores([1,2,3,4,5,6,7,8,9,0], 'todos');
        echo '<br>';
        
    ?>
</body>
</html>