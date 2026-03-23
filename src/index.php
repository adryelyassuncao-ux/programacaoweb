<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div class="container">
        <fieldset>
            <legend>Dados do funcioário</legend>
            <form method="get">
                <label for ="input_nome">Nome:</label>
                <input type="text" name="txtNome" id="input_nome">
                <input type="submit" value ="Enviar">
            </form>
        </fieldset>
    </div>  -->

    <form method="get">

        <h1>Tabuada</h1>

        <label for="tab">Tabuada: </label>
        <input type="number" name="tab">
        <br><br>
        
        <label for="txt_tab">Início:</label>
        <input type="number" name="txt_tab">

         <label for="txt_tab2">Termino:</label>
        <input type="number" name="txt_tab2">
        
        <input type ="submit" value="Enviar">

        

    </form>
    
    <?php
    
        // $nome = $_GET['txtNome'];
        // echo "<h1>Seja bem vindo Sr(a). " . $nome . "</h1>";

        if(isset($_GET["txt_tab"])){
            $tab = $_GET['txt_tab'];
            $tab2 = $_GET['txt_tab2'];
            $tab3 = $_GET['tab'];
        
            echo '<h1> Tabuada do ' . $tab3 . ' ser construída do ' . $tab .  " até o " . $tab2 . "</h1>";

            for($x = $tab; $x <= $tab2; $x++){
                $result = $tab3 * $x;
                echo "<p>{$tab3} x {$x} = <span style='color:purple;'>{$result}</span></p>";
            }
        }

           
    
    ?>
</body>
</html>