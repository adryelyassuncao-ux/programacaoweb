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

  <fieldset style="max-width: 50%; margin: 0 auto;">
      <legent>Tabuada dinâmica</legend>
      <form method="get">
        <label for="">Início</label>
        <input type="number" name="txt_inicio">
        <br>
        <label for="">Fim</label>
        <input type="number" name="txt_fim">
        <br>
        <label for="">Tabuada</label>
        <input type="number" name="txt_tab">
        <br>
        <input type="submit" name="btn_calc" value="Calcular">
    </form>
</fieldset>
    
    <?php
    
     

        if(isset($_GET['btn_calc'])){
            $inicio = $_GET['txt_inicio'];
            $fim = $_GET['txt_fim'];
            $tab = $_GET['txt_tab'];

            for($i = $inicio; $i <= $fim; $i++){
                $result = $i * $tab;
                echo "<h3>{$i} x {$tab} = {$result}</h3>";
            }

            echo '<h1>Utilizando o while </h1>';
            while($inicio <= $fim){
            $result = $inicio * $tab;
            echo "<h3> {$inicio} x {$tab} = {$result} </h3>\n";
            $inicio++;
            }
            echo '<h1>Utilizando "do while" </h1>';
            do{
              $result = $inicio * $tab;
              echo "<h3>{$inicio} x {stab} = {$result}</h3>\n";
              $inicio++;

            }while($inicio < $fim);
        }

           
    
    ?>
</body>
</html>