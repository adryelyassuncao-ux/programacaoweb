<?php
    require_once 'helpers.php';

    date_default_timezone_set('America/Sao_Paulo');
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

function TempoLeitura (string $texto, int $palavrasporminuto = 200): int
{
    $textolimpo = strip_tags($texto);
    $totalpalavras = str_word_count($textolimpo);
    $minutos = ceil($totalpalavras / $palavrasporminuto);
    return $minutos > 0 ? (int)$minutos : 1;
}

function AnoBissexto (int $ano) : bool
{
 if ($ano % 400 == 0)
 {
  return true;
 }
 if ($ano % 100 == 0)
 {
   return false;
 }
 if($ano % 4 == 0)
 {
    return true;
 }
}

function MaiorIdade (array $pessoas): array
{
    $maioridade = [];

    foreach($pessoass as $pessoa){
        if ($pessoa['idade'] >= 18){
            $maioridade[] = $pessoa;
        }
    }
  return $maioridade;
}
//Atividade¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨¨


//exercicio 8


function montarVitrineNoticias(){
    
} 

//exercicio 9

function GerarBoletimRapido ($notas)
{  
    $media = CalcularMedia($notas["nome_do_aluno"]);
    criarArrayAssociativo(["nome_do_aluno", "media_formatada", "situacao"]);
}


//exercicio 10

function resumoEvento ($nomeEvento, $dataEventoBr)
{
    $dataBR = converterDataParaBD($dataEventoBR);
    $diferenca = diferencaDias(date(), $dataBR);
    
    return '<p>EVENTO: ' . CapitalizarPalavras($nomeEvento) . '| DATA: ' . dataExtenso($dataBR) . '| DIAS: ' . $diferenca . '</p>';

}

//exercicio 11

function higienizarCadastros($usuarios){

}


//exercício 13
function gerarRelatorioAnonimizado($contatos)
{
    $relatorio = [];

    foreach($contatos as $contato)
        {
            $nomeFormatado = mb_convert_case($contato['nome'], MB_CASE_TITLE, "UTF-8");

            $emailMascarado = mascararDado($contato['email'], "email");
            $telefoneMascarado = mascararDado($contato['telefone'], "telefone");

            $linha = "Nome: {nomeFormatado} | Email: {$emailMascarado} | Telefone: {$telefoneMascarado} ";

            $relatorio[] = $linha;
        }

        return $relatorio;

}

//exercício 14
function sortearDuplas($alunos)
{
    $alunosEmbaralhados = embaralharArray($alunos);

    $grupos = array_chunk($alunosEmbaralhados, 2);

    if(count($grupos) > 1 && count(end($grupos)) === 1)
        {
            $alunoSobrou = array_pop($grupo)[0];
            $ultimogrupoIndex = count($grupos) -1;
            $grupos[$ultimogrupoIndex][] = $alunoSobrou;
        }
        $resultado = [];
        $contador = 1;

        foreach($grupos as $grupo)
            {
                if(count($grupo) === 3)
                    {
                        $textoGrupo = "{$grupo[0]}, {grupo[1]} e {$grupo[2]}";              
                    }
                    else
                        {
                            $textoGrupo = "{$grupo[0]} e {$grupo[1]}";
                        }
                        $resultado[] = "Dupla {$contador}: {$textoGrupo}";
                        $contador++;
            }
            return $resultado;
}

//exercício 15
function painelLinksValidos($links)
{
    $painel = [];

    foreach ($links as $url) {
        
        if (validarUrl($url)) {
            
            $host = parse_url($url, PHP_URL_HOST);
            $nomeDominio = str_replace('www.', '', $host);
            $tituloSimples = explode('.', $nomeDominio)[0];
            $tituloCapitalizado = ucfirst($tituloSimples);
            $slug = criarSlug($tituloCapitalizado);
            $painel[$url] = $slug;
        }
    }

    return $painel;

}

//exercício 16
function resumoFinanceiro($lancamentos) {
    
    $total = calcularSoma($lancamentos);
    $maior = encontrarMaximo($lancamentos);
    $menor = encontrarMinimo($lancamentos);

   
    $resumo = [
        'total' => formatarMoeda($total),
        'maior' => formatarMoeda($maior),
        'menor' => formatarMoeda($menor)
    ];

    return $resumo;
}

//exercício 17
function organizarArquivos($arquivos) {
   
    $arquivosOrganizados = [];

    foreach ($arquivos as $arquivo) {
        
        $nomeLimpo      = limparEspacos($arquivo['nome']);
        $nomeSlug       = criarSlug($arquivo['nome']);
        $tamanhoLegivel = formatarTamanhoArquivo($arquivo['tamanho_bytes']);

        $arquivoTransformado = [
            'nome_limpo'      => $nomeLimpo,
            'nome_slug'       => $nomeSlug,
            'tamanho_legivel' => $tamanhoLegivel
        ];

        $arquivosOrganizados[] = $arquivoTransformado;
    }

    return $arquivosOrganizados;
}