<?php
require "helpers.php";


//exercicio 1

function montarVitrineNoticias($noticias){
 

    $titulosSlug = [];

    foreach($noticias as $x){
        $titulo = criarSlug($x, "-");
        $titulosSlug[] = $titulo;
    }

    return criarArrayAssociativo([$noticias], [$titulosSlug]);

} 

//exercicio 2

function GerarBoletimRapido ($alunos)
{  
    $nomes = [];
    $mediaSituacao = [];
    foreach($alunos as $nome => $notas){
        $media = calcularMedia($notas);
        $situacao = "";

        if($media >= 7.0){
            $situacao = "Aprovado";
        } else if($media >= 5.0 && $media < 7.0){
            $situacao = "Recuperação";
        } else {
            $situacao = "Reprovado";
        }

        $nomes[] = $nome;
        $mediaSituacao[] = number_format($media, 1, ",", ".") . " - " . $situacao;
    }

    $boletimRapido = criarArrayAssociativo($nomes, $mediaSituacao); 

    return $boletimRapido;
}

//exercicio 3

function resumoEvento($nomeEvento, $dataEvento){
    $dataBr = converterDataParaBD($dataEvento);
    $diferenca = diferencaDias(date("l"), $dataEvento);

    return "EVENTO: " . capitalizarPalavras($nomeEvento) . " | DATA: " . dataExtenso($dataBr) . " | DIAS: " . $diferenca;
}

//exercicio 4

function higienizarCadastros($usuarios) {
    $usuariosValidos = [];

    foreach ($usuarios as $usuario) {
        $nome = $usuario['nome'];
        $email = $usuario['email'];
        $telefone = $usuario['telefone'];

        $emailValido    = validarEmail($email);
        $telefoneValido = validarTelefone($telefone);

        if ($emailValido == true && $telefoneValido == true) {
            
            $nomeLimpo = limparEspacos($nome);
            $nomeFormatado = capitalizarPalavras($nomeLimpo);
            
            
            $nomeSlug = criarSlug($nomeFormatado);

            $usuarioHigienizado = criarArrayAssociativo(["nome", "email", "telefone", "slug_nome"], [$nomeFormatado, $email, $telefone, $nomeSlug]);

            $usuariosValidos[] = $usuarioHigienizado;
        }
    }

    return $usuariosValidos;
}

// exercício 5

function gerarTagsProduto($textoTags){
    $texto = "";

    $texto = dividirString($textoTags, ", ");
    
    $texto = limparEspacos($texto);
    
    $texto = removerDuplicatas($texto);
    
    $texto = ordenarAlfabeticamente($texto);

    $texto = capitalizarPrimeira($texto);

    $texto = dividirString($texto, " | ");

    return $texto;
    
}


//exercício 6
function gerarRelatorioAnonimizado($contatos)
{
    $relatorio = [];

    foreach($contatos as $contato)
        {
            $nomeFormatado = mb_convert_case($contato['nome'], MB_CASE_TITLE, "UTF-8");

            $emailMascarado = mascararDado($contato['email'], "email");
            $telefoneMascarado = mascararDado($contato['telefone'], "telefone");

            $linha = "Nome: {$nomeFormatado} | Email: {$emailMascarado} | Telefone: {$telefoneMascarado} ";

            $relatorio[] = $linha;
        }

        return $relatorio;

}

//exercício 7
function sortearDuplas($alunos)
{
    $alunosEmbaralhados = embaralharArray($alunos);

    $grupos = array_chunk($alunosEmbaralhados, 2);

    if(count($grupos) > 1 && count(end($grupos)) === 1)
        {
            $alunoSobrou = array_pop($grupos)[0];
            $ultimogrupoIndex = count($grupos) -1;
            $grupos[$ultimogrupoIndex][] = $alunoSobrou;
        }
        $resultado = [];
        $contador = 1;

        foreach($grupos as $grupo)
            {
                if(count($grupo) === 3)
                    {
                        $textoGrupo = "{$grupo[0]}, {$grupo[1]} e {$grupo[2]}";              
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

//exercício 8
function painelLinksValidos($links)
{
    $painel = [];

    foreach ($links as $url) {
        
        if (validarUrl($url)) {
            
            $host = parse_url($url, PHP_URL_HOST);
            $nomeDominio = str_replace('www.', '', $host);
            $tituloSimples = explode('.', $nomeDominio)[0];
            $tituloCapitalizado = capitalizarPrimeira($tituloSimples);
            $slug = criarSlug($tituloCapitalizado);
            $painel[$url] = $slug;
        }
    }

    return $painel;

}

//exercício 9
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

//exercício 10
function organizarArquivos($arquivos) {
   
    $arquivosOrganizados = [];

    foreach ($arquivos as $arquivo) {
        
        $nomeLimpo = limparEspacos($arquivo['nome']);
        $nomeSlug = criarSlug($arquivo['nome']);
        $tamanhoLegivel = formatarTamanhoArquivo($arquivo['tamanho_bytes']);

        $arquivoTransformado = [
            'nome_limpo' => $nomeLimpo,
            'nome_slug' => $nomeSlug,
            'tamanho_legivel' => $tamanhoLegivel
        ];

        $arquivosOrganizados[] = $arquivoTransformado;
    }

    return $arquivosOrganizados;
}
?>