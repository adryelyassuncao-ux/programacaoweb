<?php

/*function somar_v1(): float{
    $resultado = 10 + 10;
    return $resultado;
}

function somar_v2(): void{
    $resultado = 10 + 10;
    echo "<p style='color: purple;'>Soma: {$resultado} </p>";
}

function somar_v3(float $x, float $y): float{
    $resultado = $x + $y;
    return $resultado;
}

function somar_v4($x, $y): float{
    $valores = [2,2,2,2,2,2,2];

    $resultado = array_sum($valores);
    return $resultado;
}

function nomeCompleto($nome, $sobrenome): string {
    return "{$nome} {$sobrenome}";
}

function opcaoDeEmail($nome, $sobrenome): string {
    $nome = trim($nome);
    $sobrenomes = explode(' ',trim($sobrenome));
    var_dump($sobrenomes);
    // $ultimoSobrenome = $sobrenomes[count($sobrenomes)-1];
    // $ultimoSobrenome = end($sobrenomes);
    $ultimoIndex = $sobrenomes[array_key_last($sobrenomes)];
    $ultimoSobrenome = $sobrenomes[$ultimoIndex];
    return strtolower("{$nome}.{$ultimoSobrenome}@aula.com");
} 

function exibirDadosRetangulo($dados): string{
    return'<p> O resultado do calculo da area do retângulo é ' . $dados . '</p>';
}

function exibirDadosCubo($dados): string{
    return'<p> O resultado do calculo da area do cubo é ' . $dados . '</p>';
}

function area($x, $y, $callBack){
    $resultado = $x * $y;
    $callBack($resultado);
}

function somarValoresImpar($acumulador, $valor) : float{
    $resultado = ($valor % 2 !== 0)? $acumulador + $valor:$acumulador;
    return $resultado;
}

function impares($numeros){
    foreach ($numeros as $valor){
        $total = somarValoresImpar($total, $valor);
    }
}

function pares($numeros){
    foreach($numeros as $valor){
        if($valor % 2 == 0){
            $total += $valor;
        } 
    }
}
function somaDosValores($numeros=[], $callBack){
    $total = 0;
    

    
    return $total;
}*/
function ValidarEmail ( string $email): bool
{
     $email = trim($email);
     return filter_var($email,
     FILTER_VALIDATE_EMAIL) !== false;
}

function UltimoNome (string $nome): string 
{
    $nome = trim($nome);
    $partes = array_filter(explode(' ', $nome));
    return end($partes);
}



